@extends('../layouts.admin')

@section('content')

    <div class="card">
        <div class="col-md-12">
            <div class="card-header card-header-primary" style="background:#383131">
                <h2>
                    Detalle de Empresa
                    <a href="{{ route('companies.edit', $companies->id) }}" class="btn btn-warning pull-right">Editar</a>
                </h2>
            </div>

            <div class="card-body">
                <h4 class="card-title">Nombre</h4>
                <p class="card-description"> {{ $companies->nameCompany }} </p>
            </div>

            <div class="card-body">
                <h4 class="card-title">Encargado</h4>
                <p class="card-description"> {{ $companies->attendantCompany }} </p>
            </div>

            <div class="card-body">
                <h4 class="card-title">Dirección</h4>
                <p class="card-description"> {{ $companies->addressCompany }} </p>
            </div>

            <div class="card-body">
                <h4 class="card-title">Fono A</h4>
                <p class="card-description"> {{ $companies->fonoCompanyA }} </p>
            </div>

            <div class="card-body">
                <h4 class="card-title">Fono B</h4>
                <p class="card-description"> {{ $companies->fonoCompanyB }} </p>
            </div>

            <div class="card-body">
                <h4 class="card-title">Fono C</h4>
                <p class="card-description"> {{ $companies->fonoCompanyC }} </p>
            </div>

            <div class="card-body">
                <h4 class="card-title">Email</h4>
                <p class="card-description"> {{ $companies->emailCompany }} </p>
            </div>

        </div>
    </div>
@endsection
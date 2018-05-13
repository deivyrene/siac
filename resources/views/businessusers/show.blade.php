@extends('../layouts.admin')

@section('content')

    <div class="card">
        <div class="col-md-12">
            <div class="card-header card-header-primary" style="background:#383131">
                <h2>
                    Detalles Usuario-Empresa
                    <a href="{{ route('businessusers.edit', $businessusers->id) }}" class="btn btn-default pull-right">Editar</a>
                </h2>
            </div>
            <div class="card-body">
                <h4 class="card-title">Nombre</h4>
                <p class="card-description"> {{ $businessusers->positionConsultant }} </p>
            </div>

            <div class="card-body">
                <h4 class="card-title">Fono</h4>
                <p class="card-description"> {{ $businessusers->positionConsultant }} </p>
            </div>

            <div class="card-body">
                <h4 class="card-title">Email</h4>
                <p class="card-description"> {{ $businessusers->positionConsultant }} </p>
            </div>

            <div class="card-body">
                <h4 class="card-title">Empresa</h4>
                <p class="card-description"> {{ $businessusers->positionConsultant }} </p>
            </div>

        </div>
    </div>
@endsection
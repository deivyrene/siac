@extends('../layouts.admin')

@section('content')

    <div class="card">
        <div class="col-md-12">
            <div class="card-header card-header-primary" style="background:#383131">
                <h2>
                    Detalle Consultor
                    <a href="{{ route('consultants.edit', $consultant->id) }}" class="btn btn-warning pull-right">Editar</a>
                </h2>
            </div>
            
            <div class="card-body">
                <h4 for="card-title">Nombre:</h4>
                <p class="card-description"> {{ $consultant->nameConsultant }} </p>
            </div>
            
            <div class="card-body">
                <h4 for="card-title">Cargo:</h4>
                <p class="card-description"> {{ $consultant->positionConsultant }} </p>
            </div>
            
            <div class="card-body">
                <h4 for="card-title">Fono:</h4>
                <p class="card-description"> {{ $consultant->fonoConsultant }} </p>
            </div>
            
            <div class="card-body">
                <h4 for="card-title">Email:</h4>
                <p class="card-description"> {{ $consultant->emailConsultant }} </p>
            </div>

        </div>
    </div>
@endsection
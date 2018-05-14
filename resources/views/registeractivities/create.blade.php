@extends('../layouts.admin')

@section('content')

    <div class="card">
        <div class="col-md-12">
            <div class="card-header card-header-primary" style="background:#383131">
                <h2>
                    Nuevo Registro de Actividad
                    <a href="{{ route('registeractivities.index') }}" class="btn btn-info pull-right">Listar</a>
                </h2>
            </div>
            <div class="card-body">
                @include('registeractivities.fragment.error')

                {{  Form::open(['route' => 'registeractivities.store']) }}

                    @include('registeractivities.fragment.form')

                {{ Form::close() }}
            </div>
        </div>
    </div>

@endsection
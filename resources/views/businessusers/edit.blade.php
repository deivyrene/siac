@extends('../layouts.admin')

@section('content')

    <div class="card">
        <div class="col-md-12">
            <div class="card-header card-header-primary" style="background: #383131">
                <h2>
                    Editar Actividad
                    <a href="{{ route('businessusers.index') }}" class="btn btn-info pull-right">Listar</a>
                </h2>
            </div>
            <div class="card-body">
                @include('businessusers.fragment.error')

                {{ Form::model($businessuser, array('route' => ['businessusers.update', $businessuser->id], 'method' => 'PUT')) }}

                    @include('businessusers.fragment.form')

                {{ Form::close() }}
            </div>
        </div>
    </div>

@endsection
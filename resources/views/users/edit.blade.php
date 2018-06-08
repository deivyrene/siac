@extends('../layouts.admin')

@section('content')

    <div class="card">
        <div class="col-md-12">
            <div class="card-header card-header-primary" style="background: #383131">
                <h2>
                    Editar Usuario de Sistema
                    <a href="{{ route('users.index') }}" class="btn btn-info pull-right">Listar</a>
                </h2>
            </div>
            <div class="card-body">
                @include('users.fragment.error')

                {{ Form::model($user, array('route' => ['users.update', $user->id], 'method' => 'PUT')) }}

                    @include('users.fragment.form')

                {{ Form::close() }}
            </div>
        </div>
    </div>

@endsection
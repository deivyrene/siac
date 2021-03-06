@extends('../layouts.admin')

@section('content')

    <div class="card">
        <div class="col-md-12">
            <div class="card-header card-header-primary" style="background:#383131">
                <h2>
                    Nuevo Consultor
                    <a href="{{ route('consultants.index') }}" class="btn btn-info pull-right">Listar</a>
                </h2>
            </div>
            <div class="card-body">
                @include('consultants.fragment.error')

                {{  Form::open(['route' => 'consultants.store']) }}

                    @include('consultants.fragment.form')

                {{ Form::close() }}
            </div>
        </div>
    </div>

@endsection
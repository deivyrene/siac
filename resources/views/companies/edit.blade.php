@extends('../layouts.admin')

@section('content')

    <div class="card">
        <div class="col-md-12">
            <div class="card-header card-header-primary" style="background: #383131">
                <h2>
                    Editar Empresa
                    <a href="{{ route('companies.index') }}" class="btn btn-info pull-right">Listar</a>
                </h2>
            </div>
            <div class="card-body">
                @include('companies.fragment.error')

                {{ Form::model($companies, array('route' => ['companies.update', $companies->id], 'method' => 'PUT')) }}

                    @include('companies.fragment.form')

                {{ Form::close() }}
            </div>
        </div>
    </div>

@endsection
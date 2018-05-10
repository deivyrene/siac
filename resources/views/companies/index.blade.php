@extends('../layouts.admin')

@section('content')

    <div class="col-md-12">
       
        @include('companies.fragment.info')
        <div class="card">
                <div class="card-header card-header-primary" style="background:#383131">
                    <h4 class="card-title ">
                        Listado de Empresas
                        <a href="{{ route('companies.create') }}" class="btn btn-danger pull-right">Nuevo</a>
                    </h4>
                    
                   <!-- <p class="card-category"> Here is a subtitle for this table</p>-->
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                    <table class="table">
                        <thead class="text-default">
                                <tr>
                                    <th width="20px">ID</th>
                                    <th>Nombre Empresa</th>
                                    <th>Encargado</th>
                                    <th>Fono</th>
                                    <th>Email</th>
                                    <th>Acción</th>
                                </tr>
                        </thead>
                        <tbody>
                            @foreach($companies as $company)
                            <tr>
                                <td>{{ $company->id    }}</td>
                                <td>{{ $company->nameCompany  }}</td>
                                <td>{{ $company->attendantCompany }}</td>
                                <td>{{ $company->fonoCompanyA }}</td>
                                <td>{{ $company->emailCompany }}</td>
                                <td>
                                    <div class="btn-group">
                                        <a href="{{ route('companies.show', $company->id)    }}" class="btn btn-success "><i class="material-icons">pageview</i></a>
                                        <a href="{{ route('companies.edit', $company->id)    }}" class="btn btn-info "><i class="material-icons">border_color</i></a>
                                    
                                        <form action="{{ route('companies.destroy', $company->id) }}" method="POST">
                                            {{ csrf_field() }}
                                            <input type="hidden" name="_method" value="DELETE" id="">
                                            <button class="btn btn-secundary "><i class="material-icons">delete_forever</i></button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                {{ $companies->render() }}
                    </div>
                </div>
        </div>
    </div>

@endsection
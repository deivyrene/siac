
@extends('../layouts.admin')

@section('content')
   <div class="col-md-12">
       
        @include('registeractivities.fragment.info')
        <div class="card">
                <div class="card-header card-header-primary" style="background:#383131">
                    <h4 class="card-title ">
                        Listado de Registros de Actividades
                        <a href="{{ route('registeractivities.create') }}" class="btn btn-danger pull-right">Nuevo</a>
                    </h4>
                    
                   <!-- <p class="card-category"> Here is a subtitle for this table</p>-->
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                    <table class="table">
                        <thead class="text-default">
                                <tr>
                                    <th width="20px">ID</th>
                                    <th>Empresa</th>
                                    <th>Consultor</th>
                                    <th>Usuario</th>
                                    <th>Actividad</th>
                                    <th>Fecha</th>
                                    <th>Acción</th>
                                </tr>
                        </thead>
                        <tbody>
                            @foreach($registeractivities as $registeractivity)
                            <tr>
                                <td>{{ $registeractivity->id    }}</td>
                                <td>{{ $registeractivity->companies->nameCompany }}</td>
                                <td>{{ $registeractivity->consultants->nameConsultant }}</td>
                                <td>{{ $registeractivity->businessuser->nameBusinessUser}}</td>
                                <td>{{ $registeractivity->activities->nameActivity }}</td> 
                                <td>{{ $registeractivity->dateRegisterActivity }}</td>
                                <td>
                                    <div class="btn-group">
                                        <a href="{{ route('registeractivities.show', $registeractivity->id)    }}" class="btn btn-success "><i class="material-icons">pageview</i></a>
                                        <a href="{{ route('registeractivities.edit', $registeractivity->id)    }}" class="btn btn-info "><i class="material-icons">border_color</i></a>
                                    
                                        <form action="{{ route('registeractivities.destroy', $registeractivity->id) }}" method="POST">
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
                      {{ $registeractivities->links('pagination.default') }}

                    </div>
                </div>
        </div>
    </div>

@endsection
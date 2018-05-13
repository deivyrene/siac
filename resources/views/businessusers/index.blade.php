
@extends('../layouts.admin')

@section('content')
   <div class="col-md-12">
       
        @include('businessusers.fragment.info')
        <div class="card">
                <div class="card-header card-header-primary" style="background:#383131">
                    <h4 class="card-title ">
                        Listado de Usuario-Empresa
                        <a href="{{ route('businessusers.create') }}" class="btn btn-danger pull-right">Nuevo</a>
                    </h4>
                    
                   <!-- <p class="card-category"> Here is a subtitle for this table</p>-->
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                    <table class="table">
                        <thead class="text-default">
                                <tr>
                                    <th width="20px">ID</th>
                                    <th>Nombre</th>
                                    <th>Fono</th>
                                    <th>Email</th>
                                    <th>Empresa</th>
                                    <th>Acción</th>
                                </tr>
                        </thead>
                        <tbody>
                            <?php //dd($businessusers); die();?>
                            @foreach($businessusers as $businessuser)
                            <tr>
                                <td>{{ $businessuser->id    }}</td>
                                <td>{{ $businessuser->nameBusinessUser }}</td>
                                <td>{{ $businessuser->fonoBusinessUser }}</td>
                                <td>{{ $businessuser->emailBusinessUser }}</td>
                                <td>{{ $businessuser->relationCompany->nameCompany}}</td>
                                {{-- [0]->nameCompany --}}
                                <td>
                                    <div class="btn-group">
                                        <a href="{{ route('businessusers.show', $businessuser->id)    }}" class="btn btn-success "><i class="material-icons">pageview</i></a>
                                        <a href="{{ route('businessusers.edit', $businessuser->id)    }}" class="btn btn-info "><i class="material-icons">border_color</i></a>
                                    
                                        <form action="{{ route('businessusers.destroy', $businessuser->id) }}" method="POST">
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
                      {{-- {{ $businessusers->links('pagination.default') }} --}}

                    </div>
                </div>
        </div>
    </div>

@endsection
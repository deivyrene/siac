@extends('../layouts.admin')

@section('content')

    <div class="col-md-12">
       
        @include('activities.fragment.info')
        <div class="card">
                <div class="card-header card-header-primary" style="background:#383131">
                    <h4 class="card-title ">
                        Listado de Actividades
                        <a href="{{ route('activities.create') }}" class="btn btn-danger pull-right">Nuevo</a>
                    </h4>
                    
                   <!-- <p class="card-category"> Here is a subtitle for this table</p>-->
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                    <table class="table">
                        <thead class="text-default">
                                <tr>
                                    <th width="20px">ID</th>
                                    <th>Nombre Actividad</th>
                                    <th>Descripción</th>
                                    <th>Acción</th>
                                </tr>
                        </thead>
                        <tbody>
                            @foreach($activities as $activity)
                            <tr>
                                <td>{{ $activity->id    }}</td>
                                <td>{{ $activity->nameActivity  }}</td>
                                <td>{{ $activity->shortActivity }}</td>
                                <td>
                                    <div class="btn-group">
                                        <a href="{{ route('activities.show', $activity->id)    }}" class="btn btn-success"><i class="material-icons">pageview</i></a>
                                        <a href="{{ route('activities.edit', $activity->id)    }}" class="btn btn-info"><i class="material-icons">border_color</i></a>
                                        <form action="{{ route('activities.destroy', $activity->id) }}" method="POST">
                                            {{ csrf_field() }}
                                            <input type="hidden" name="_method" value="DELETE" id="">
                                            <button class="btn btn-secundary"><i class="material-icons">delete_forever</i></button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                {!! $activities->render() !!}
                    </div>
                </div>
        </div>
    </div>

@endsection
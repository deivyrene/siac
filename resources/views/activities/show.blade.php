@extends('../layouts.admin')

@section('content')

    <div class="card">
        <div class="col-md-12">
            <div class="card-header card-header-primary" style="background:#383131">
                <h2>
                    {{ $activity->nameActivity }}
                    <a href="{{ route('activities.edit', $activity->id) }}" class="btn btn-default pull-right">Editar</a>
                </h2>
            </div>
            <div class="card-body">
                <p class="card-description"> {{ $activity->shortActivity }} </p>
            </div>

        </div>
    </div>
@endsection
@extends('../layouts.admin')

@section('content')
<div class="row">
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
                    <div class="material-datatables">
                        <div class="table-responsive">
                        <table id="registerActivity" class="table table-striped table-no-bordered table-hover" style="width:100%">
                            <thead class="text-default">
                                    <tr>
                                        <th width="20px">COD</th>
                                        <th>Empresa</th>
                                        <th>Consultor</th>
                                        <th>Fecha</th>
                                        <th>Acción</th>
                                    </tr>
                            </thead>
                            
                        </table>
                        </div>
                    </div>
                </div>
        </div>
    </div>
</div>
@endsection
@extends('../layouts.admin')

@section('content')

    <div class="card">
        <div class="col-md-12">
            <div class="card-header card-header-primary" style="background:#383131">
                <h2>
                    Detalle de Actividades
                    <a title="Listar Actividades" href="{{ route('registeractivities.index') }}" class="btn btn-info pull-right"><i class="material-icons">list</i></a>
                    <!--<a title="Generar PDF" href="#" onclick="pdf()" class="btn btn-danger pull-right"><i class="material-icons">picture_as_pdf</i></a>-->
                    <a title="Generar PDF" href="{{ url('pdf', $registeractivities[0]->codActivity) }}" class="btn btn-danger pull-right"><i class="material-icons">picture_as_pdf</i></a>
                    <a title="Enviar Correo" href="{{ url('sendmail', $registeractivities[0]->codActivity) }}" class="btn btn-info pull-right"><i class="material-icons">email</i></a>
                </h2>
            </div>

    <div class="card-body">
        <div id="documento">
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-10">
                <table class="table table-hover border" >
                    <thead>
                        <tr>
                            <td rowspan="4" colspan="3" align="center"><img src="{{ asset('img/sipcom.png') }}" alt="" width="170"></td>
                            <td rowspan="4" colspan="6" align="center"><h3>SISTEMA DE GESTIÓN</h3></td>
                            <td colspan="2">Fecha 10/01/2015</td>
                        </tr>
                        <tr>
                            <td colspan="2">Versión 001</td>
                        </tr>
                        <tr>
                            <td colspan="2">Código Doc: {{ $registeractivities[0]->codActivity }}</td>
                        </tr>
                        <tr>
                            <td colspan="2">Página 1 de 1</td>
                        </tr>
                        <tr>
                            <td colspan="11">Informe: Registro Actividades</td>
                        </tr>

                        <tr>
                            <td colspan="5" >Cliente: {{ $registeractivities[0]->companies->nameCompany }}</td>
                            <td colspan="6" >Contacto Cliente: {{ $registeractivities[0]->companies->attendantCompany }}</td>
                        </tr>
                        <tr>
                            <td colspan="5" >Fecha: {{ $registeractivities[0]->dateRegisterActivities }}</td>
                            <td colspan="6" >Mail Contacto: {{ $registeractivities[0]->companies->emailCompany }}</td>
                        </tr>
                        <tr>
                            <td colspan="11" >Consultor: {{ $registeractivities[0]->consultants->nameConsultant }}</td>
                        </tr>
                        
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>

                    </thead>
                    <tbody>
                        <tr class="text-white bg-dark">
                            <td colspan="2">Usuarios</td>
                            <td colspan="2">Actividad</td>
                            <td colspan="2">Descripción Actividad</td>
                            <td colspan="5">Fecha</td>
                        </tr>
                        @foreach($registeractivities as $registeractivity)
                        <tr>
                            <td colspan="2">{{ $registeractivity->businessuser->nameBusinessUser }}</td>
                            <td colspan="2">{{ $registeractivity->activities->nameActivity }}</td>
                            <td colspan="2">{{ $registeractivity->desRegisterActivity }}</td>
                            <td colspan="5">{{ $registeractivity->dateRegisterActivity }}</td>
                        </tr>
                        @endforeach
                        <tr>
                            <td colspan="2"></td>
                            <td colspan="2"></td>
                            <td colspan="2"></td>
                            <td colspan="5"></td>
                        </tr>
                        <tr>
                            <td colspan="2"></td>
                            <td colspan="2"></td>
                            <td colspan="2"></td>
                            <td colspan="5"></td>
                        </tr>
                        <tr>
                            <td colspan="2"></td>
                            <td colspan="2"></td>
                            <td colspan="2"></td>
                            <td colspan="5"></td>
                        </tr>
                        <tr>
                            <td colspan="2"></td>
                            <td colspan="2"></td>
                            <td colspan="2"></td>
                            <td colspan="5"></td>
                        </tr>
                        <tr class="text-white bg-dark">
                            <td colspan="2">Usuarios</td>
                            <td colspan="2">Actividad</td>
                            <td colspan="2">Descripción Actividad</td>
                            <td colspan="5">Fecha</td>
                        </tr>
                    </tbody>
                </table>
                </div>
                <div class="col-md-1"></div>
            </div>
        </div>
    </div>
        </div>
    </div>
@endsection
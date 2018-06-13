

//-------------------Inicializacion de los dataTables----------------------------------------//
$(function(){
    Consultant();
    registerActivity();
    Activity();
    Company();
    UserCompany();
    UserSystem();
});

//----------------Datatable para modulo consultor------------------------------------//
    
    var Consultant = function(table){
        
        $('#consultant').DataTable({
            "language": {"url": "//cdn.datatables.net/plug-ins/1.10.15/i18n/Spanish.json"},
            paging: true,
            searching: true,
            "ajax": "http://www.sipcom.cl/siac/consultant",
            "columns": [
                {data: 'id', name: 'id'},
                {data: 'nameConsultant', name: 'nameConsultant'},
                {data: 'positionConsultant', name: 'positionConsultant'},
                {data: 'fonoConsultant', name: 'fonoConsultant'},
                {data: 'emailConsultant', name: 'emailConsultant'},
                {data: 'action', name: 'action'}
            ],
            dom: 'Bfrtip',
            buttons: [
                {   
                    extend:"copy",
                    className:"btn-sm",
                    exportOptions: {
                        columns: [ 0, 1, 2, 3, 4]
                    },
                },
                {   
                    extend:"excel",
                    className:"btn-sm",
                    exportOptions: {
                        columns: [ 0, 1, 2, 3, 4]
                    },
                },
                {   
                    extend:"pdfHtml5",
                    className:"btn-sm",
                    exportOptions: {
                        columns: [ 0, 1, 2, 3, 4]
                    },
                },
                {   
                    extend:"print",
                    className:"btn-sm",
                    exportOptions: {
                        columns: [ 0, 1, 2, 3, 4]
                    },
                },
            ],
            pageLength: 5,
        });

    };

    function destroyConsultant(id){
        $.ajax({
            url: 'http://www.sipcom.cl/siac/destroyconsultant',
            type: 'get',
            data: {id:id},
            success:function(data){
                alert(data);
                location.reload();
            }, 
            error:function(jqXHR, textStatus, errorThrown){
                    
                console.log('error::'+errorThrown);
                console.log('error::'+textStatus);
                console.log('error::'+jqXHR);
            }
        });
      }

//----------------------------------------FIN-----------------------------------------------------//


//----------------Datatable para modulo register activity-----------------------------------------//
    
var registerActivity = function(table){
        
    $('#registerActivity').DataTable({
        "language": {"url": "//cdn.datatables.net/plug-ins/1.10.15/i18n/Spanish.json"},
        paging: true,
        searching: true,
        "ajax": "/siac/registeractivity",
        "columns": [
            {data: 'codActivity', name: 'codActivity'},
            {data: 'companies.nameCompany', name: 'nameCompany'},
            {data: 'consultants.nameConsultant', name: 'nameConsultant'},
            {data: 'dateRegisterActivities', name: 'dateRegisterActivities'},
            {data: 'action', name: 'action'}
        ],
        
        dom: 'Bfrtip',
        buttons: [
            {   
                extend:"copy",
                className:"btn-sm",
                exportOptions: {
                    columns: [ 0, 1, 2, 3]
                },
            },
            {   
                extend:"excel",
                className:"btn-sm",
                exportOptions: {
                    columns: [ 0, 1, 2, 3]
                },
            },
            {   
                extend:"pdfHtml5",
                className:"btn-sm",
                exportOptions: {
                    columns: [ 0, 1, 2, 3]
                },
                //customize : function(doc) {doc.pageMargins = [100, 0, 0, 100 ]; },
            },
            {   
                extend:"print",
                className:"btn-sm",
                exportOptions: {
                    columns: [ 0, 1, 2, 3]
                },
            },
        ],
        pageLength: 10,
    });

};

function destroyRegisterActivity(id){
    $.ajax({
        url: 'http://www.sipcom.cl/siac/destroyactivity',
        type: 'get',
        data: {id:id},
        success:function(data){
            alert(data);
            location.reload();
        }, 
        error:function(jqXHR, textStatus, errorThrown){
                
            console.log('error::'+errorThrown);
            console.log('error::'+textStatus);
            console.log('error::'+jqXHR);
        }
    });
  }

//-------------------------------------------FIN--------------------------------------------------//
  
//----------------Datatable para modulo activity-----------------------------------------//
    
var Activity = function(table){
        
    $('#activity').DataTable({
        "language": {"url": "//cdn.datatables.net/plug-ins/1.10.15/i18n/Spanish.json"},
        paging: true,
        searching: true,
        "ajax": "/siac/activity",
        "columns": [
            {data: 'id', name: 'id'},
            {data: 'nameActivity', name: 'nameActivity'},
            {data: 'shortActivity', name: 'shortActivity'},
            {data: 'action', name: 'action'}
        ],
        dom: 'Bfrtip',
        buttons: [
            {   
                extend:"copy",
                className:"btn-sm",
                exportOptions: {
                    columns: [ 0, 1, 2]
                },
            },
            {   
                extend:"excel",
                className:"btn-sm",
                exportOptions: {
                    columns: [ 0, 1, 2]
                },
            },
            {   
                extend:"pdfHtml5",
                className:"btn-sm",
                exportOptions: {
                    columns: [ 0, 1, 2]
                },
            },
            {   
                extend:"print",
                className:"btn-sm",
                exportOptions: {
                    columns: [ 0, 1, 2]
                },
            },
        ],
        pageLength: 10,
    });

};

function destroyActivity(id){
    $.ajax({
        url: 'http://www.sipcom.cl/siac/destroyactivities',
        type: 'get',
        data: {id:id},
        success:function(data){
            alert(data);
            location.reload();
        }, 
        error:function(jqXHR, textStatus, errorThrown){
                
            console.log('error::'+errorThrown);
            console.log('error::'+textStatus);
            console.log('error::'+jqXHR);
        }
    });
  }

//-------------------------------------------FIN--------------------------------------------------//

//-------------------------Datatable para modulo company-----------------------------------------//
    
var Company = function(table){
        
    $('#company').DataTable({
        "language": {"url": "//cdn.datatables.net/plug-ins/1.10.15/i18n/Spanish.json"},
        paging: true,
        searching: true,
        "ajax": "/siac/company",
        "columns": [
            {data: 'id', name: 'id'},
            {data: 'nameCompany', name: 'nameCompany'},
            {data: 'attendantCompany', name: 'attendantCompany'},
            {data: 'fonoCompanyA', name: 'fonoCompanyA'},
            {data: 'emailCompany', name: 'emailCompany'},
            {data: 'action', name: 'action'}
        ],
        dom: 'Bfrtip',
        buttons: [
            {   
                extend:"copy",
                className:"btn-sm",
                exportOptions: {
                    columns: [ 0, 1, 2, 3, 4]
                },
            },
            {   
                extend:"excel",
                className:"btn-sm",
                exportOptions: {
                    columns: [ 0, 1, 2, 3, 4]
                },
            },
            {   
                extend:"pdfHtml5",
                className:"btn-sm",
                exportOptions: {
                    columns: [ 0, 1, 2, 3, 4]
                },
            },
            {   
                extend:"print",
                className:"btn-sm",
                exportOptions: {
                    columns: [ 0, 1, 2, 3, 4]
                },
            },
        ],
        pageLength: 10,
    });

};

function destroyCompany(id){
    $.ajax({
        url: '/siac/destroycompany',
        type: 'get',
        data: {id:id},
        success:function(data){
            alert(data);
            location.reload();
        }, 
        error:function(jqXHR, textStatus, errorThrown){
                
            console.log('error::'+errorThrown);
            console.log('error::'+textStatus);
            console.log('error::'+jqXHR);
        }
    });
  }

//-------------------------------------------FIN--------------------------------------------------//


//----------------Datatable para modulo user company-----------------------------------------//
    
var UserCompany = function(table){
        
    $('#usercompany').DataTable({
        "language": {"url": "//cdn.datatables.net/plug-ins/1.10.15/i18n/Spanish.json"},
        paging: true,
        searching: true,
        "ajax": "/siac/usercompany",
        "columns": [
            {data: 'id', name: 'id'},
            {data: 'nameBusinessUser', name: 'nameBusinessUser'},
            {data: 'fonoBusinessUser', name: 'fonoBusinessUser'},
            {data: 'emailBusinessUser', name: 'emailBusinessUser'},
            {data: 'companies.nameCompany', name: 'nameCompany'},
            {data: 'action', name: 'action'}
        ],
        dom: 'Bfrtip',
        buttons: [
            {   
                extend:"copy",
                className:"btn-sm",
                exportOptions: {
                    columns: [ 0, 1, 2, 3, 4]
                },
            },
            {   
                extend:"excel",
                className:"btn-sm",
                exportOptions: {
                    columns: [ 0, 1, 2, 3, 4]
                },
            },
            {   
                extend:"pdfHtml5",
                className:"btn-sm",
                exportOptions: {
                    columns: [ 0, 1, 2, 3, 4]
                },
            },
            {   
                extend:"print",
                className:"btn-sm",
                exportOptions: {
                    columns: [ 0, 1, 2, 3, 4]
                },
            },
        ],
        pageLength: 10,
    });

};

function destroyUserCompany(id){
    $.ajax({
        url: '/siac/destroyusercompany',
        type: 'get',
        data: {id:id},
        success:function(data){
            alert(data);
            location.reload();
        }, 
        error:function(jqXHR, textStatus, errorThrown){
                
            console.log('error::'+errorThrown);
            console.log('error::'+textStatus);
            console.log('error::'+jqXHR);
        }
    });
  }

//-------------------------------------------FIN--------------------------------------------------//


//----------------Datatable para modulo users sistem-----------------------------------------//
    
var UserSystem = function(table){
        
    $('#usersystem').DataTable({
        "language": {"url": "//cdn.datatables.net/plug-ins/1.10.15/i18n/Spanish.json"},
        paging: true,
        searching: true,
        "ajax": "/siac/usersystem",
        "columns": [
            {data: 'id', name: 'id'},
            {data: 'name', name: 'name'},
            {data: 'email', name: 'email'},
            {data: 'action', name: 'action'}
        ],
        dom: 'Bfrtip',
        buttons: [
            {   
                extend:"copy",
                className:"btn-sm",
                exportOptions: {
                    columns: [ 0, 1, 2]
                },
            },
            {   
                extend:"excel",
                className:"btn-sm",
                exportOptions: {
                    columns: [ 0, 1, 2]
                },
            },
            {   
                extend:"pdfHtml5",
                className:"btn-sm",
                exportOptions: {
                    columns: [ 0, 1, 2]
                },
            },
            {   
                extend:"print",
                className:"btn-sm",
                exportOptions: {
                    columns: [ 0, 1, 2]
                },
            },
        ],
        pageLength: 10,
    });

};

function destroyUserSystem(id){
    $.ajax({
        url: '/siac/destroyusersystem',
        type: 'get',
        data: {id:id},
        success:function(data){
            alert(data);
            location.reload();
        }, 
        error:function(jqXHR, textStatus, errorThrown){
                
            console.log('error::'+errorThrown);
            console.log('error::'+textStatus);
            console.log('error::'+jqXHR);
        }
    });
  }

//-------------------------------------------FIN--------------------------------------------------//


//-------------Funciones JS del modulo register activity------------------------------------------//

//---------------Funcion para cargar select dependiente de usuarios-empresa-----------------//
    $('#companies_id').on('change', function(e){
                    
        var id = $('#companies_id').val();
        //var route = "http://www.sipcom.cl/siac/listuser";
        
        var route = "http://www.sipcom.cl/siac/listuser";
        $.get(route, { id:id } , function(data){
            
        
            $('#businessuser_id').empty();
            
            $.each(data, function(index, business) {

                $('#businessuser_id').append('<option value="'+data[index].id+'">'+data[index].nameBusinessUser+'</option>');
            });

        });
    });

//-----------Funcion para guardar un registro de actividad de usuario------------------------//
    $('#saveActivity').click(function(){

        var company_id = $('#companies_id').val();
        var consultant_id = $('#consultants_id').val();
        var activity_id = $('#activities_id').val();
        var user_id = $('#businessuser_id').val();
        var desActivity = $('#desRegisterActivity').val();
        var dateActivity = $('#dateRegisterActivity').val();
        var dateActivities = $('#dateRegisterActivities').val();
        var codActivity = $('#codActivity').val();
        //var route = "http://www.sipcom.cl/siac/saveactivity";

        var route = "http://www.sipcom.cl/siac/saveactivity";
        $.ajax({
            url: route,
            type: 'get',
            data: {
                    'company_id' : company_id, 
                    'consultant_id' : consultant_id, 
                    'activity_id' : activity_id, 
                    'user_id' : user_id, 
                    'desActivity' : desActivity, 
                    'dateActivity' : dateActivity, 
                    'dateActivities' : dateActivities,
                    'codActivity' : codActivity
                  },
            success:function(data){

                $("#consultants_id").prop('disabled', true);
                $("#companies_id").prop('disabled', true);

                getActivityUser(codActivity);

            }, 
            error:function(jqXHR, textStatus, errorThrown){
                    
                console.log('error::'+errorThrown);
                console.log('error::'+textStatus);
                console.log('error::'+jqXHR);
            }

        });   

    });


//-------Funcion para mostrar listado de usuarios - actividades de una empresa con fecha------//
    function getActivityUser(codActivity){

       // var route = "http://www.sipcom.cl/siac/getactivityuser";
        var route = "http://www.sipcom.cl/siac/getactivityuser";
        var code = '"'+codActivity+'"';
        
        $.ajax({
            type: 'get',
            url:  route,
            data: {
                    codActivity : codActivity
                  }
        }).done(function(data){
                

                var	rows = '';
                $.each( data, function( key, value ) {

                    rows = rows + '<tr>';
                    rows = rows + '<td>'+value.businessuser.nameBusinessUser+'</td>';
                    rows = rows + '<td>'+value.activities.nameActivity+'</td>';
                    rows = rows + '<td>'+data[key].desRegisterActivity+'</td>';
                    rows = rows + '<td>'+data[key].dateRegisterActivity+'</td>';
                    rows = rows + '<td>';
                    rows = rows + "<a href='#' onclick='deleteActivity("+data[key].id+","+code+")' class='btn btn-danger pull-right'><i class='material-icons'>delete_forever</i></a>";
                    rows = rows + '</td>';
                    rows = rows + '</tr>';
                });
                

                $("tbody").html(rows);
        });
    
    }

//--------Funcion para eliminar un registro de actividad de usuario-----------------------//
    function deleteActivity(id, codActivity){

       // var route = "http://www.sipcom.cl/siac/deleteactivity";
        var route = "http://www.sipcom.cl/siac/deleteactivity";
        $.ajax({
            type: 'get',
            url:  route,
            data: {
                    id : id,
                  }
        }).done(function(data){
                
                alert(data);
                getActivityUser(codActivity);
        });
    }

//----------Funcion que genera pdf del reporte de actividades ---------------------------//
    function pdf(){

        // var div = document.querySelector("#imprimir");
        //imprimirElemento(div);

        var doc = new jsPDF();
        doc.addHTML(document.getElementById('documento'), 5, 10, {
             background: '#fff',
             margin: { top: 10, right: 10, bottom: 10, left: 10, useFor: 'page'}
        }, function() {
            doc.save(name+'.pdf');
        });
    }
    

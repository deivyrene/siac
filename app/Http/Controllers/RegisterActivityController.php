<?php

namespace Siac\Http\Controllers;


use Yajra\Datatables\Datatables;
use Yajra\DataTables\Services\DataTable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

use Siac\Activity;
use Siac\Company;
use Siac\BusinessUser;
use Siac\Consultant;
use Siac\RegisterActivity;
use Siac\Mail\sendMailPdf;

use PDF;

class RegisterActivityController extends Controller
{
    public function index(){
       

        return view('registeractivities.index');
    }

    public function getRegActivity()
    {
        $registeractivities = RegisterActivity::with([
                                                    'companies' => function($query) {
                                                        $query->select('id','nameCompany');
                                                    },
                                                    'consultants' => function($query) {
                                                        $query->select('id','nameConsultant');
                                                    }
                                                ])->groupBy('codActivity');
 
        return Datatables::of($registeractivities)->addColumn('action', function ($user) {
            $cod = "'".$user->codActivity."'";
            return '<a href="/siac/showactivity/'.$user->codActivity.'" class="btn btn-sm btn-success"><i class="material-icons">pageview</i></a>
                    <a href="#" onclick="destroyRegisterActivity('.$cod.')" class="btn btn-sm btn-warning"><i class="material-icons">delete_forever</i></a>';
        })->make(true);
    }

    public function destroyRegActivity(request $request){

        if($request->ajax()){
            $ids = [];

            $codDeletes = RegisterActivity::where('codActivity','=',$request->id)->get();

            foreach($codDeletes as $registro){
                $ids[]=$registro->id;
            }
            
            $registeractivities = RegisterActivity::destroy($ids);

            return "El registro de actividad ha sido eliminado";
        }
    }

    public function create(){

        $consultants = Consultant::all(['id','nameConsultant']);
        $activities = Activity::all(['id','nameActivity']);
        $companies = Company::all(['id','nameCompany']);
        $clave = $this->generar_clave();

        return view('registeractivities.create', compact('consultants','activities','companies','clave'));
    }
    
    //Funcion para traer datos del select
    public function listUser(request $request){

        $businessusers = BusinessUser::where('idCompanies', '=', $request->id)->get();

        return $businessusers;
        
    }

    //Funcion para guardar un registro de actividad de usuario
    public function saveActivity(request $request){

        if($request->ajax()){

            $registeractivity = new RegisterActivity;

            $registeractivity->codActivity = $request->codActivity;
            $registeractivity->company_id = $request->company_id;
            $registeractivity->consultant_id = $request->consultant_id;
            $registeractivity->activity_id = $request->activity_id;
            $registeractivity->businessuser_id = $request->user_id;
            $registeractivity->desRegisterActivity = $request->desActivity;
            $registeractivity->dateRegisterActivity = $request->dateActivity;
            $registeractivity->dateRegisterActivities = $request->dateActivities;

            $registeractivity->save();

            return 'Registro exitoso';
        }

    }

    //Obtener lista de usuarios-actividad del registro actual de actividad
    public function getActivityUser(request $request){

        if($request->ajax()){

            $registeractivity = RegisterActivity::OrderBy('id','asc')
            ->with([
                        'activities',
                        'businessuser'     
                    ])
             ->where('codActivity', '=', $request->codActivity)
             ->get();

            return response()->json($registeractivity);
        }
    }

    //Elimina actividad registrada de usuario-actividad de registro actual
    public function deleteActivity(request $request){

        if($request->ajax()){

            $registeractivity = RegisterActivity::find($request->id);
            $registeractivity->delete();

            return "Se ha eliminado";
        }
    }

    //Mostrar detalle de actividad-usuario por empresa y fecha de registro
    public function showActivity($codActivity){

        
        $registeractivities = RegisterActivity::OrderBy('id','desc')
                                                     ->with([
                                                         'companies',
                                                         'activities',
                                                         'consultants',
                                                         'businessuser'     
                                                     ])->where('codActivity', '=', $codActivity)
                                                       ->get();

        return view('registeractivities.show', compact('registeractivities'));
 
    }
    
    //Genera clave unica para cada registro de actividad
    public function generar_clave(){

        $key = "";
        $caracteres = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
        //aquí podemos incluir incluso caracteres especiales pero cuidado con las ‘ y “ y algunos otros
        $length = 10;
        $max = strlen($caracteres) - 1;
        for ($i=0;$i<$length;$i++) {
            $key .= substr($caracteres, rand(0, $max), 1);
        }
        return $key;
    }

    //Enviar email con pdf adjunto
    public function sendMail($codActivity){

        $registeractivities = RegisterActivity::OrderBy('id','desc')
                                                     ->with([
                                                         'companies',
                                                         'activities',
                                                         'consultants',
                                                         'businessuser'     
                                                     ])->where('codActivity', '=', $codActivity)
                                                       ->get();

        
        $email = $registeractivities[0]->companies->emailCompany;
        $name = $registeractivities[0]->businessuser->nameBusinessUser;

        $pdf = PDF::loadView('pdf.reporte_actividades', compact('registeractivities'))->setPaper('a4');
        
        $moreUsers = ['dgarcia@sipcom.cl','rrojas@sipcom.cl'];
        Mail::to($email, $name)->cc($moreUsers)->send(new sendMailPdf($registeractivities, $pdf));
        
        return redirect()->route('registeractivities.index')->with('info', 'Se ha enviado el correo satisfactoriamente');
    }

}

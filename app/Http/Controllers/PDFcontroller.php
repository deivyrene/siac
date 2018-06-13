<?php

namespace Siac\Http\Controllers;

use Illuminate\Http\Request;
use Siac\RegisterActivity;
use PDF;

class PDFcontroller extends Controller
{
    
	public function crearPDF($datos, $vista){
          // procesamiento de datos [opcional por si hay que pasarle otra capa de proceso]
        $registeractivities = RegisterActivity::OrderBy('id','desc')
                                                ->with([
                                                    'companies',
                                                    'activities',
                                                    'consultants',
                                                    'businessuser'     
                                                ])->where('codActivity', '=', $datos)
                                                    ->get();
        $namePdf = "informe_actividad_".$registeractivities[0]->codActivity.".pdf";
		
	  // generación de la vista
	  $pdf = PDF::loadView($vista, compact('registeractivities') )->setPaper('a4');
 
	  // lanzamos la descarga del fichero
	  return $pdf->download($namePdf);
	}
 
	public function crearInformeTodosUsuarios($datos){
	  
          // preparación de la ruta a la vista
          $vistaurl = 'pdf.reporte_actividades';
        
          // llamada a la función que genera el PDF
          return $this->crearPDF($datos, $vistaurl);
	}
}

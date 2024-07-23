<?php

namespace App\Controllers;

use App\Models\PlanesModel; 

class PlanesController extends BaseController
{
    public function index(): string
    {

        $planes = new PlanesModel();
        $datos['datos']=$planes->findAll();

       // print_r($datos);
        return view('planes', $datos);
    }

    public function nuevoPlan()
    {
        return view('planes_nuevos');
    }
    

    public function agregarPlan()
    {
        $id = $this->request->getVar('txtId');
  //      echo 'tu id es= '. $id;
        $nombre = $this->request->getVar('txtNombre');
        $pago = $this->request->getVar('txtPagoMensual');
        $minutos = $this->request->getVar('txtCantidadMinutos');
        $mensajes = $this->request->getVar('txtCantidadMensajes');


        //crear objeto
        $planes = new PlanesModel();
        $datos =[
            'plan_id'=>$id,
            'nombre'=>$nombre,
            'pago_mensual'=>$pago,
            'cantidad_minutos'=>$minutos,
            'cantidad_mensajes'=>$mensajes
        ];
        $planes->insert($datos);
        echo 'Datos Guardatos';

        return redirect()->route('planes');
        
    }

    public function eliminarPlan($id = null)
    {
        $planes = new PlanesModel();
        $planes->delete(['plan_id'=>$id]);
        return redirect()->route('planes');
    }
}

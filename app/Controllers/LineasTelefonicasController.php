<?php

namespace App\Controllers;

use App\Models\LineasTelefonicasModel;

class LineasTelefonicasController extends BaseController
{

    public function index(): string
    {
        $lineas = new LineasTelefonicasModel();
        $datos['datos'] = $lineas->findAll();

        return view('lineas_telefonicas', $datos);
    }

    public function nuevaLineaTelefonica(): string
    {
        return view('lineas_telefonicas_nuevas');
    }

    public function agregarLineaTelefonica()
    {
        $lineas = new LineasTelefonicasModel();

        $datos = [
            'no_telefono' => $this->request->getVar('txtNumero'),
            'fecha_pago' => $this->request->getVar('txtFechaPago'),
            'meses_atraso' => $this->request->getVar('txtmesesAtraso'),
            'plan_id' => $this->request->getVar('txtId'),
            'cliente_id' => $this->request->getVar('txtClienteId')
        ];

        $lineas->insert($datos);
        echo 'Datos Guardados';

        return redirect()->route('linea_telefonica');
    }

    public function eliminarTelefono($id = null)
    {
        //  echo $id;

        $lineas = new LineasTelefonicasModel();
        $lineas->delete(['no_telefono' => $id]);

        return redirect()->route('linea_telefonica');
    }
}
    
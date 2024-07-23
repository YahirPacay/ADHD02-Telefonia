<?php

namespace App\Models;

use CodeIgniter\Model;

class ClienteModel extends Model{
    protected $table = 'clientes';
    protected $primaryKey = 'cliente_id';
    protected $allowedFields = [
        'cliente_id',
        'apellido',
        'nombre',
        'correo_electronico',
        'calle_avenida',
        'no_casa',
        'zona'

    ];


}


?> 
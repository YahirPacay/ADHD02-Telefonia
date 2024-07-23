<?php

use App\Controllers\ClientesController;
use App\Controllers\PlanesController;
use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

//Plan
$routes->get('/planes', 'PlanesController::index');
$routes->get('/nuevoplan', 'PlanesController::nuevoPlan');
$routes->post('/agregar_plan','PlanesController::agregarPlan');
$routes->get('/eliminar_plan/(:num)', 'PlanesController::eliminarPlan/$1');
//Cliente
$routes->get('/cliente','ClientesController::index');
$routes->get('/nuevo_cliente','ClientesController::nuevoCliente');
$routes->post('/agregar_cliente', 'ClientesController::agregarCliente');
$routes->get('eliminar_cliente/(:num)', 'ClientesController::eliminarCliente/$1'); //eliminar


//Linea Telefonica
$routes->get('/linea_telefonica','LineasTelefonicasController::index');
$routes->get('/nuevo_linea','LineasTelefonicasController::nuevaLineaTelefonica');
$routes->post('/agregar_linea','LineasTelefonicasController::agregarLineaTelefonica');
$routes->get('/eliminar_numero/(:num)','LineasTelefonicasController::eliminarTelefono/$1');
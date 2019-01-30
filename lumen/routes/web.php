<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return $router -> app -> version();
});

//persona
$router->post('/person', ['uses' => 'PersonController@createPerson']);
$router->put('/person', ['uses' => 'PersonController@updatePerson']);
$router->delete('/person', ['uses' => 'ReservaController@destroyPerson']);
$router->get('/person', ['uses' => 'PersonController@index']);


//reserva
$router->post('/reserva', ['uses' => 'ReservaController@createReserva']);
$router->put('/reserva', ['uses' => 'ReservaController@updateReserva']);
$router->delete('/reserva', ['uses' => 'ReservaController@destroyReserva']);
$router->get('/reserva', ['uses' => 'ReservaController@index']);


//detalle_reserva
$router->post('/detalle_reserva', ['uses' => 'Detalle_reservaController@createDetalle_reserva']);
$router->put('/detalle_reserva', ['uses' => 'Detalle_reservaController@updateDetalle_reserva']);
$router->delete('/detalle_reserva', ['uses' => 'Detalle_reservaController@destroyDetalle_reserva']);
$router->get('/detalle_reserva', ['uses' => 'Detalle_reservaController@index']);


//mesa
$router->post('/mesa', ['uses' => 'MesaController@createMesa']);
$router->put('/mesa', ['uses' => 'MesaController@updateMesa']);
$router->delete('/mesa', ['uses' => 'MesaController@destroyMesa']);
$router->get('/mesa', ['uses' => 'MesaController@index']);


//tipo_mesa
$router->post('/tipo_mesa', ['uses' => 'Tipo_mesaController@createTipo_mesa']);
$router->put('/tipo_mesa', ['uses' => 'Tipo_mesaController@updateTipo_mesa']);
$router->delete('/tipo_mesa', ['uses' => 'Tipo_mesaController@destroyTipo_mesa']);
$router->get('/tipo_mesa', ['uses' => 'Tipo_mesaController@index']);


//estado
$router->post('/estado', ['uses' => 'EstadoController@createEstado']);
$router->put('/estado', ['uses' => 'EstadoController@updateEstado']);
$router->delete('/estado', ['uses' => 'EstadoController@destroyEstado']);
$router->get('/estado', ['uses' => 'EstadoController@index']);
<?php

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->post('/person', ['uses' => 'PersonController@crear']);
$router->get('/person', ['uses' => 'PersonController@consultar']);

$router->post('/reserva', ['uses' => 'ReservaController@crear']);
$router->get('/reserva', ['uses' => 'ReservaController@consultar']);

$router->post('/horario', ['uses' => 'HorarioController@crear']);
$router->get('/horario', ['uses' => 'HorarioController@consultar']);

$router->post('/mesa', ['uses' => 'MesaController@crear']);
$router->get('/mesa', ['uses' => 'MesaController@consultar']);
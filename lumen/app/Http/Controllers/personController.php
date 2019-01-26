<?php

namespace App\Http\Controllers;

class ExampleController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function  create()
    {
        $data = $request->json()->all();
        $sql = "insert into person(pers_ci, nombre, telefono, correo, clave)
        values(?,?,?,?,?)";
        $parameters = [$data['pers_ci'], $data['nombre'], $data['telefono'], $data['correo'], $data['clave']];
        $response = DB::select($sql, $parameters);
        return $response;
    }

    public function getAll(Request $request)
    {
        $data = $request->json()->all();
        $sql = "select * from person";
        $response = DB::select($sql);
        return $response;

    }
}

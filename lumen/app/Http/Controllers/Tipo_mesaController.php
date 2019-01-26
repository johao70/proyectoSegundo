<?php namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tipo_mesa;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\DB;

class Tipo_mesaController extends Controller
{
    public function index(Request $request)
    {
        $data = $request->json()->all();
        $sql = "select * from tipo_mesa";
        $response = DB::select($sql);
        return $response;

    }

    public function createTipo_mesa(Request $request)
    {
        $data = $request -> json() -> all();
        $sql = "insert into tipo_mesa(descripcion, capacidad) values(?,?)";
        $parameters = [$data['descripcion'], $data['capacidad']];
        $response = DB::select($sql, $parameters);
        return $response;
    }

    // public function updateTipo_mesa(Request $request,$id)
    public function updateTipo_mesa(Request $request)
     { 
        $data = $request -> json() -> all();
        $sql = "update tipo_mesa set descripcion = ?, capacidad = ?";
        $parameters = [$data['descripcion'], $data['capacidad']];
        $response = DB::select($sql, $parameters);
        return $response;
     }
}
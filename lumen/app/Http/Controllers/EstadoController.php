<?php namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Estado;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\DB;

class EstadoController extends Controller
{
    public function index(Request $request)
    {
        $data = $request->json()->all();
        $sql = "select * from estado";
        $response = DB::select($sql);
        return $response;

    }

    public function createEstado(Request $request)
    {
        $data = $request -> json() -> all();
        $sql = "insert into estado(nombre) values(?)";
        $parameters = [$data['nombre']];
        $response = DB::select($sql, $parameters);
        return $response;
    }

    // public function updateEstado(Request $request,$id)
    public function updateEstado(Request $request)
     { 
        $data = $request -> json() -> all();
        $sql = "update estado set nombre = ?";
        $parameters = [$data['nombre']];
        $response = DB::select($sql, $parameters);
        return $response;
     }
}
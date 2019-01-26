<?php namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mesa;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\DB;

class MesaController extends Controller
{
    public function index(Request $request)
    {
        $data = $request->json()->all();
        $sql = "select * from mesa";
        $response = DB::select($sql);
        return $response;

    }

    public function createMesa(Request $request)
    {
        $data = $request -> json() -> all();
        $sql = "insert into mesa(tipo_id, estado_id, nombre) values(?,?,?)";
        $parameters = [$data['tipo_id'], $data['estado_id'], $data['nombre']];
        $response = DB::select($sql, $parameters);
        return $response;
    }

    // public function updateMesa(Request $request,$id)
    public function updateMesa(Request $request)
     { 
        $data = $request -> json() -> all();
        $sql = "update mesa set tipo_id = ?, estado_id = ?, nombre = ?, correo = ?, clave = ?";
        $parameters = [$data['tipo_id'], $data['estado_id'], $data['nombre']];
        $response = DB::select($sql, $parameters);
        return $response;
     }
}
<?php namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Reserva;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\DB;

class ReservaController extends Controller
{
    public function index(Request $request)
    {
        $data = $request->json()->all();
        $sql = "select * from reserva";
        $response = DB::select($sql);
        return $response;

    }

    public function createReserva(Request $request)
    {
        $data = $request -> json() -> all();
        $sql = "insert into reserva(pers_ci, fecha) values(?,?)";
        $parameters = [$data['pers_ci'], $data['fecha']];
        $response = DB::select($sql, $parameters);
        return $response;
    }

    // public function updateReserva(Request $request,$id)
    public function updateReserva(Request $request)
     { 
        $data = $request -> json() -> all();
        $sql = "update reserva set pers_ci = ?, fecha = ?";
        $parameters = [$data['pers_ci'], $data['fecha']];
        $response = DB::select($sql, $parameters);
        return $response;
     }
}
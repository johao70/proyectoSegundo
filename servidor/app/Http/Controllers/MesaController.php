<?php 

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\DB;
class MesaController extends Controller
{
    public function crear(Request $request)
    {
        try{
            $data = $request -> json() -> all();
            $sql = "insert into mesa(numeromesas) values(?)";
            $parameters = 
            [$data['numeromesas']];
            $response = DB::select($sql, $parameters);
            if ($response){
                return response()->json($parameters,201);
            }else {
                return response()->json(false);
            }
        
        }catch(QueryException $e){
            return response()->json($e,500);
        }catch(\PDOException $e){
            return response()->json($e,500);
        }
    }
    
    public function consultar(Request $request)
    {
        $data = $request->json()->all();
        $sql = "select * from mesa";
        $response = DB::select($sql);
        return $response;
    }
}
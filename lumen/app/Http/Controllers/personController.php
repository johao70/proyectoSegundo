<?php namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Person;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\DB;

class PersonController extends Controller
{
    public function index(Request $request)
    {
        $data = $request->json()->all();
        $sql = "select * from person";
        $response = DB::select($sql);
        return $response;

    }


    public function getPerson($id)
    {
        $person = Person::find($id);
        if($person)
        {
            return response()->json($person, 200);
        }

        return response()->json(["Persona no encontrada"], 404);

    }

    public function createPerson(Request $request)
    {
        $person = new Person;  
        $person->pers_ci = $request->pers_ci;
        $person->nombre = $request->nombre;
        $person->telefono = $request->telefono;
        $person->correo = $request->correo;
        $person->clave = $request->clave;
        $person->save();
        return response()->json($person);  
    }

    public function updateCategories(Request $request,$id)
     { 

        $person= Person::find($id);
            
        $person->pers_ci = $request->pers_ci;
        $person->nombre = $request->nombre;
        $person->telefono = $request->telefono;
        $person->correo = $request->correo;
        $person->clave = $request->clave;
        $person->save();
        return response()->json($person);
     }

     public function destroyPerson($id)
     {
        $person = Person::find($id);
        $person->delete();
        return response()->json('La Persona fue eliminada');
     }
}
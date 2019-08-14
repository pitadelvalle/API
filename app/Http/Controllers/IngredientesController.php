<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ingrediente;

class IngredientesController extends Controller
{
    
    public function store(Request $request)
    {
        //Instanciamos la clase 
        $ingredientes = new Ingrediente;
        //Declaramos el nombre con el nombre enviado en el request
        $ingredientes ->nombre = $request->nombre;
        //Guardamos el cambio en nuestro modelo
        $ingredientes->save();
        return response()->json($ingredientes);
    }

    public function show()
    {
        $ingredientes = Ingrediente::all();
        return response()->json($ingredientes);
    }

    public function showid($id)
    {
        $ingredientes = Ingrediente::find($id);
        return response()->json($ingredientes);
    }


    public function update(Request $request, $id)
    {
        
        $ingredientes = Ingrediente::find($id);
        $ingredientes ->nombre = $request->nombre;
        $ingredientes->save();
        return response()->json($ingredientes);
    }

    public function destroy(Request $request, $id)
    {
        $ingredientes = Ingrediente::find($id);
        $ingredientes->delete();
        return response()->json($ingredientes);
    }
}

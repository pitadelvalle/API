<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Receta;

class RecetasController extends Controller
{
    
    public function store(Request $request)
    {
       
       $receta = new Receta;
       
       $receta->id_grupo = $request->id_grupo;

       $receta ->id_procedimiento = $request->id_procedimiento;
    
       $receta ->save();
       return response()->json($receta);
    }

  
    public function show()
    {
        $receta = Receta::all();
        return response()->json($receta);
    }

    public function showid($id)
    {
        $receta = Receta::find($id);
        return response()->json($receta);
    }
    public function update(Request $request, $id)
    {
        $receta = Receta::find($id);
        $receta ->id_grupo = $request->id_grupo;
        $receta ->id_procedimiento = $request->id_procedimiento;
        $receta ->save();
        return response()->json($receta);
    }

    public function destroy($id)
    {
        $recetas = Receta::find($id);
        $recetas->delete();
        return response()->json($recetas);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ingrediente_grupo;

class IngredientesGrupoController extends Controller
{
    
    public function store(Request $request)
    {
        $ingre = new Ingrediente_grupo;
        
        $ingre ->id_grupo = $request->id_grupo;
 
        $ingre->id_ingrediente = $request->id_ingrediente;
       
        $ingre->save();
    }

    public function show()
    {
        $ingre = Ingrediente_grupo::all();
        return response()->json($ingre);
    }

    public function showid($id)
    {
        $ingre = Ingrediente_grupo::find($id);
        return response()->json($ingre);
    }
    
   
    public function update(Request $request, $id)
    {
        $ingre = Ingrediente_grupo::find($id);
        $ingre ->id_grupo = $request->id_grupo;
        $ingre->id_ingrediente = $request->id_ingrediente;
        $ingre->save();
        return response()->json($ingre);
    }

    
    public function destroy($id)
    {
        $ingre = Ingrediente_grupo::find($id);
        $ingre->delete();
        return response()->json($ingre);
    }
}

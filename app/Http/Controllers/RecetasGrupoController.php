<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Receta_grupo;

class RecetasGrupoController extends Controller
{
    public function store(Request $request)
    {
        $rece = new Receta_grupo;
        //Declaramos el nombre con el nombre enviado en el request
        $rece ->id_receta = $request->id_receta;
 
        $rece->id_pastel = $request->id_pastel;
        //Guardamos el cambio en nuestro modelo
        $rece->save();
        return response()->json($rece);
    }

    public function show()
    {
       $rece = Receta_grupo::all();
       return response()->json($rece);
    }

    public function showid($id)
    {
        $rece = Receta_grupo::find($id);
        return response()->json($rece);
    }
    public function update(Request $request, $id)
    {
        $rece = Receta_grupo::find($id);
        $rece ->id_receta = $request->id_receta;
        $rece->id_pastel = $request->id_pastel;
        $rece->save();
        return response()->json($rece);
    }

    public function destroy($id)
    {
        $rece = Receta_grupo::find($id);
        $rece->delete();
        return response()->json($rece);
    }
}

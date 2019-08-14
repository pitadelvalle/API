<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Procedimiento;

class ProcedimientoController extends Controller
{
    
    public function store(Request $request)
    {
        $proce = new Procedimiento;
        //Declaramos el nombre con el nombre enviado en el request
        $proce ->procedimiento = $request->procedimiento;
        //Guardamos el cambio en nuestro modelo
        $proce->save();
        return response()->json($proce);
    }

    public function show()
    {
        $proce = Procedimiento::all();
        return response()->json($proce);
    }
    public function showid($id)
    {
        $proce = Procedimiento::find($id);
        return response()->json($proce);
    }

    public function update(Request $request, $id)
    {
        $proce = Procedimiento::find($id);
        $proce ->procedimiento = $request->procedimiento;
        //Guardamos el cambio en nuestro modelo
        $proce->save();
        return response()->json($proce); 
    }

    public function destroy($id)
    {
        $proce = Procedimiento::find($id);
        $proce->delete();
        return response()->json($proce);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pastel;

class PastelesController extends Controller
{

    public function store(Request $request)
    {
        $pastel = new Pastel();
        $pastel->nombre = $request->nombre;
        $pastel->sabor= $request->sabor;
        $pastel->descripcion= $request->descripcion;
        $pastel->id_receta= $request->id_receta;
    
       /* if($request->hasfile('image')){
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() .'.'. $extension;
            $file->move('uploads/Pastel/',$filename);
            $pastel->image = $filename;
        }else{
            return $request;
            $pastel->image = '';
        }*/
        
        $pastel->save();
        return response()->json($pastel);
    }

    public function show()
    {
        $pastel = Pastel::all();
        return response()->json($pastel);
    }

    public function showid($id)
    {
        $pastel = Pastel::find($id);
        return response()->json($pastel);
    }
    
    public function update(Request $request, $id)
    {
        $pastel = Pastel::find($id);
        $pastel->nombre = $request->nombre;
        $pastel->sabor= $request->sabor;
        $pastel->descripcion= $request->descripcion;
        $pastel->id_receta= $request->id_receta;
    
       /* if($request->hasfile('image')){
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() .'.'. $extension;
            $file->move('uploads/Pastel/',$filename);
            $pastel->image = $filename;
        }else{
            return $request;
            $pastel->image = '';
        }
        */
        $pastel->save();
        return response()->json($pastel);
    }

    public function destroy($id)
    {
        $pastel = Pastel::find($id);
        $pastel->delete();
        return response()->json($pastel);
    }
}

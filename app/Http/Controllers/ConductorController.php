<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\conductor;

class ConductorController extends Controller
{
    public function getConductor ()
    {
        return response()->json(conductor::all(), 200);
    }

    public function getConductorById ($id)
    {
        $conductor = conductor::find($id);
        if (is_null($conductor)) {
            return response()->json([
                'Mensaje' => 'Registro no encontrado'
            ], 404);
        }
        return response()->json($conductor::find($id), 200);
    }

    public function insertConductor (Request $request)
    {
        $conductor = conductor::create($request->all());
        return response($conductor, 200);
    }

    public function updateConductor (Request $request, $id)
    {
        $conductor = conductor::find($id);
        if (is_null($conductor)) {
            return response()->json([
                'Mensaje' => 'Registro no encontrado'
            ], 404);
        }
        $conductor->update($request->all());
        return response($conductor, 200);
    }

    public function deleteConductor ($id)
    {
        $conductor = conductor::find($id);
        if (is_null($conductor)) {
            return response()->json([
                'Mensaje' => 'Registro no encontrado'
            ], 404);
        }
        $conductor->delete();
        return response()->json([
            'Mensaje'=> 'Se ha eliminado correctamente'
        ], 200);
    }

}

<?php

namespace App\Http\Controllers;

use App\Models\conductor;
use Illuminate\Http\Request;
use App\Models\vehiculo;
use Illuminate\Support\Facades\DB;

class VehiculoController extends Controller
{
    public function getVehiculos ()
    {
        return response()->json(vehiculo::all(), 200);
    }

    public function getVehiculoById ($id)
    {
        $vehiculo = vehiculo::find($id);
        if (is_null($vehiculo)) {
            return response()->json([
                'Mensaje' => 'Registro no encontrado'
            ], 404);
        }
        return response()->json($vehiculo::find($id), 200);
    }

    public function insertVehiculo (Request $request)
    {
        $placa = DB::table('vehiculos')->where('placa', $request->placa)->exists();
        if ($placa) {
            return response()->json([
                'Mensaje' => 'La placa del vehiculo ya está registrada'
            ], 404);
        }
        $vehiculo = vehiculo::create($request->all());
        return response($vehiculo, 200);
    }

    public function updateVehiculo (Request $request, $id)
    {
        $vehiculo = vehiculo::find($id);
        if (is_null($vehiculo)) {
            return response()->json([
                'Mensaje' => 'Registro no encontrado'
            ], 404);
        }
        $vehiculo->update($request->all());
        return response($vehiculo, 200);
    }

    public function deleteVehiculo ($id)
    {
        $vehiculo = vehiculo::find($id);
        if (is_null($vehiculo)) {
            return response()->json([
                'Mensaje' => 'Registro no encontrado'
            ], 404);
        }
        $vehiculo->delete();
        return response()->json([
            'Mensaje'=> 'Se ha eliminado correctamente'
        ], 200);
    }

}


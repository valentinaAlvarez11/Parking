<?php

namespace App\Http\Controllers;

use App\Models\parqueadero;
use App\Models\salidas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PhpParser\Node\Expr\Cast\Object_;

class ParqueaderoController extends Controller
{
    public function getParqueadero()
    {
        $tipoVehiculos = array(
            array(
                'tipo_vehiculo' => 'Moto',
                'tarifa_inicial' => 1000
            ),
            array(
                'tipo_vehiculo' => 'Carro',
                'tarifa_inicial' => 3000
            ),
        );
        $usuarios = array(
            array(
                'name' => 'Valentina',
                'email' => 'valentina@gmail.com',
                'password' => 'vale2918'
            ),
            array(
                'name' => 'Monica',
                'email' => 'monica@gmail.com',
                'password' => 'moni947'
            ),
            array(
                'name' => 'Julio',
                'email' => 'julio@gmail.com',
                'password' => 'julio2918'
            ),
            array(
                'name' => 'Gonza',
                'email' => 'gonza@gmail.com',
                'password' => 'gonza947'
            ),
            array(
                'name' => 'David',
                'email' => 'david@gmail.com',
                'password' => 'david2918'
            ),
            array(
                'name' => 'Felipe',
                'email' => 'felipe@gmail.com',
                'password' => 'fel947'
            ),
            array(
                'name' => 'Sara',
                'email' => 'sara@gmail.com',
                'password' => 'sara2918'
            ),
            array(
                'name' => 'Helen',
                'email' => 'helen@gmail.com',
                'password' => 'heleni947'
            ),
            array(
                'name' => 'Santiago',
                'email' => 'santiago@gmail.com',
                'password' => 'santi2918'
            ),
            array(
                'name' => 'Cesar',
                'email' => 'cesar@gmail.com',
                'password' => 'cesar947'
            ),
        );

        $data = array(
            array(
                'lote' => 'A1',
                'disponibilidad' => 0,
                'hora_ingreso' => '00:00',
                'hora_egreso' => '00:00',
                'dia' => date('Y-m-d'),
                'user_id' => 0,
                'tipoVehiculo_id' => 0,
            ),
            array(
                'lote' => 'A2',
                'disponibilidad' => 0,
                'hora_ingreso' => '00:00',
                'hora_egreso' => '00:00',
                'dia' => date('Y-m-d'),
                'user_id' => 0,
                'tipoVehiculo_id' => 0
            ), array(
                'lote' => 'A3',
                'disponibilidad' => 0,
                'hora_ingreso' => '00:00',
                'hora_egreso' => '00:00',
                'dia' => date('Y-m-d'),
                'user_id' => 0,
                'tipoVehiculo_id' => 0
            ), array(
                'lote' => 'A4',
                'disponibilidad' => 0,
                'hora_ingreso' => '00:00',
                'hora_egreso' => '00:00',
                'dia' => date('Y-m-d'),
                'user_id' => 0,
                'tipoVehiculo_id' => 0
            ), array(
                'lote' => 'A5',
                'disponibilidad' => 0,
                'hora_ingreso' => '00:00',
                'hora_egreso' => '00:00',
                'dia' => date('Y-m-d'),
                'user_id' => 0,
                'tipoVehiculo_id' => 0
            ), array(
                'lote' => 'B1',
                'disponibilidad' => 1,
                'hora_ingreso' => '13:00',
                'hora_egreso' => '18:00',
                'dia' => '2022-10-04',
                'user_id' => 1,
                'tipoVehiculo_id' => 2
            ), array(
                'lote' => 'B2',
                'disponibilidad' => 1,
                'hora_ingreso' => '13:00',
                'hora_egreso' => '18:00',
                'dia' => '2022-10-04',
                'user_id' => 2,
                'tipoVehiculo_id' => 2
            ), array(
                'lote' => 'B3',
                'disponibilidad' => 1,
                'hora_ingreso' => '13:00',
                'hora_egreso' => '18:00',
                'dia' => '2022-10-04',
                'user_id' => 3,
                'tipoVehiculo_id' => 2
            ), array(
                'lote' => 'B4',
                'disponibilidad' => 1,
                'hora_ingreso' => '13:00',
                'hora_egreso' => '18:00',
                'dia' => '2022-10-04',
                'user_id' => 4,
                'tipoVehiculo_id' => 2
            ), array(
                'lote' => 'B5',
                'disponibilidad' => 1,
                'hora_ingreso' => '13:00',
                'hora_egreso' => '18:00',
                'dia' => '2022-10-04',
                'user_id' => 5,
                'tipoVehiculo_id' => 2
            ), array(
                'lote' => 'C1',
                'disponibilidad' => 1,
                'hora_ingreso' => '13:00',
                'hora_egreso' => '18:00',
                'dia' => '2022-10-04',
                'user_id' => 6,
                'tipoVehiculo_id' => 1
            ), array(
                'lote' => 'C2',
                'disponibilidad' => 1,
                'hora_ingreso' => '13:00',
                'hora_egreso' => '18:00',
                'dia' => '2022-10-04',
                'user_id' => 7,
                'tipoVehiculo_id' => 1
            ), array(
                'lote' => 'C3',
                'disponibilidad' => 1,
                'hora_ingreso' => '13:00',
                'hora_egreso' => '18:00',
                'dia' => '2022-10-04',
                'user_id' => 8,
                'tipoVehiculo_id' => 1
            ), array(
                'lote' => 'C4',
                'disponibilidad' => 1,
                'hora_ingreso' => '13:00',
                'hora_egreso' => '18:00',
                'dia' => '2022-10-04',
                'user_id' => 9,
                'tipoVehiculo_id' => 1
            ), array(
                'lote' => 'C5',
                'disponibilidad' => 1,
                'hora_ingreso' => '13:00',
                'hora_egreso' => '18:00',
                'dia' => '2022-10-04',
                'user_id' => 10,
                'tipoVehiculo_id' => 1
            ),
        );
        $consulta = parqueadero::select("SELECT count(*) FROM parqueadero");
        $consultaVehiculo = DB::table('tipo_vehiculos')->select("SELECT count(*) FROM tipo_vehiculos");
        $consultaUsuarios = DB::table('users')->select("SELECT count(*) FROM users");
        if (!$consulta->count() && !$consultaVehiculo->count() && !$consultaUsuarios->count()) {
            DB::table('tipo_vehiculos')->insert($tipoVehiculos);
            DB::table('users')->insert($usuarios);
            parqueadero::insert($data);
            return response()->json(parqueadero::all(), 200);
        } else {
            return response()->json(parqueadero::all(), 200);
        }
    }

    public function getParqueaderoByLote($lote)
    {
        $lote = DB::table('parqueaderos')->where('lote', $lote)->get();
        $parqueadero = parqueadero::where('lote', $lote);
        if (is_null($parqueadero)) {
            return response()->json([
                'Mensaje' => $lote
            ], 404);
        }
        return response()->json($lote, 200);
    }

    public function setVehiculo(Request $request, $id)
    {

        $parqueadero = parqueadero::find($id);
        $disponibilidad = DB::table('parqueaderos')->where([
            ['disponibilidad', '=', 0],
            ['disponibilidad', $parqueadero->disponibilidad]
        ])->get();

        if ($disponibilidad) {
            $parqueadero['disponibilidad'] = 1;
            $parqueadero->update($request->all());
            return response($parqueadero, 200);
        }

        /* if (is_null($parqueadero)) {
            return response()->json([
                'Mensaje' => 'Registro no encontrado'
            ], 404);
        } */

        /* $lote = DB::table('parqueaderos')->where('id', $id)->get();
        $parqueadero = parqueadero::where('lote', $lote);
        if (is_null($parqueadero)) {
            return response()->json([
                'Mensaje' => $lote
            ], 404);
        }
        $parqueadero->update($request->all());
        return response($parqueadero, 200); */
        /* $lote = DB::table('parqueaderos')->where('lote', $lote)->get();
        if (is_null($lote)) {
            return response()->json([
                'Mensaje' => $request
            ], 404);
        }
        $lote->update([
            'hora_ingreso' => $request['hora_ingreso']
        ]);
        return response($lote, 200); */
    }

    public function removeVehiculo($id)
    {

        $parqueadero = parqueadero::find($id);
        // DB::insert('insert into salidas (parqueadero_id) values (?)', [$id]);


        $response = parqueadero::join('users', 'parqueaderos.user_id', '=', 'users.id')
            ->join('vehiculos', 'vehiculos.user_id', '=', 'users.id')
            ->join('tipo_vehiculos', 'parqueaderos.tipoVehiculo_id', '=', 'tipo_vehiculos.id')
            ->select('vehiculos.placa', 'tipo_vehiculos.tipo_vehiculo', 'parqueaderos.hora_ingreso', 'parqueaderos.hora_egreso', 'tipo_vehiculos.tarifa_inicial')
            ->where([
                ["parqueaderos.id", "=", $id],
            ])->get();

        $disponibilidad = DB::table('parqueaderos')->where([
            ['disponibilidad', '=', 1],
            ['disponibilidad', $parqueadero->disponibilidad]
        ])->get();
        if ($disponibilidad) {

            /* $parqueadero['user_id'] = 0;
            $parqueadero['hora_egreso'] = '00:00';
            $parqueadero['hora_ingreso'] = '00:00';
            $parqueadero['tipoVehiculo_id'] = 0; */
            $parqueadero['user_id'] = 0;
            $parqueadero['tipoVehiculo_id'] = 0;
            $parqueadero['disponibilidad'] = 0;
            // return response()->json($response, 200);
            if (!$response->count()) {
                return response()->json([
                    'Mensaje' => 'El parqueadero ya se encuentra libre'
                ], 404);
            }
            $parqueadero->update([
                'dia' => date('Y-m-d'),
                'hora_ingreso' => '00:00',
                'hora_egreso' => '00:00',
            ]);
            $hora_ingreso = date_create($response['0']['hora_ingreso']);
            $hora_egreso = date_create($response['0']['hora_egreso']);
            $difference = date_diff($hora_ingreso, $hora_egreso);
            $response['0']['cantidad_horas'] = $difference->h;
            $response['0']['total_pagar'] = $response['0']['cantidad_horas'] * $response['0']['tarifa_inicial'];
            return response()->json($response, 200);
        }
    }

    public function getParqueoLibre()
    {

        $consulta = DB::table('parqueaderos')->where("disponibilidad", "!=", 1)->get();
        if (!$consulta->count()) {
            return response()->json([
                'Mensaje' => "No se encuentran lugares libres"
            ], 404);
        } else {
            return response()->json($consulta, 200);
        }
    }

    public function estadisticas()
    {
        $motos = DB::table('parqueaderos')->where("tipoVehiculo_id", "=", 1)->count(); /* get() */
        $carros = DB::table('parqueaderos')->where("tipoVehiculo_id", "=", 2)->count();
        $libres = DB::table('parqueaderos')->where("disponibilidad", "=", 0)->count();

        return response()->json([
            'Motos' => $motos,
            'Carros' => $carros,
            'Libres' => $libres,
            'Total' => $motos + $carros + $libres
        ], 200);
    }

    public function producido()
    {

        // return response()->json(salidas::select("SELECT "), 200);

        $motos = parqueadero::join('salidas', 'parqueaderos.id', '=', 'salidas.parqueadero_id')
            ->where([
                ["parqueaderos.tipoVehiculo_id", "=", 1],
                ["parqueaderos.dia", "=", date('Y-m-d')]
            ])->count();

        $carros = parqueadero::join('salidas', 'parqueaderos.id', '=', 'salidas.parqueadero_id')
            ->where([
                ["parqueaderos.tipoVehiculo_id", "=", 2],
                ["parqueaderos.dia", "=", date('Y-m-d')]
            ])->count();

        $tarifaMoto = DB::table('tipo_vehiculos')->where("tipo_vehiculo", "=", "Moto")->sum('tarifa_inicial');
        $tarifaCarro = DB::table('tipo_vehiculos')->where("tipo_vehiculo", "=", "Carro")->sum('tarifa_inicial');

        $totalMoto = $motos * $tarifaMoto;
        $totalCarro = $carros * $tarifaCarro;

        return response([
            'Total Producido por las Motos' => $totalMoto,
            'Total Producido por los Carros' => $totalCarro,
            'Total' => $totalMoto + $totalCarro
        ], 200);
    }
}

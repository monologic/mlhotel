<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Auth;

use App\Empleado;
use App\Emptipo;

class empleadoController extends Controller
{
    //
     public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $empleado = new Empleado($request->all());
        $empleado->hotel_id = Auth::user()->empleado->hotel->id;
        $empleado->save();

        return response()->json([
            "mensaje" => 'Creado'
        ]);
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function getEmpleadosParaUsuarios()
    {
        //id del hotel del usuario actualmente.
        $hotel = Auth::user()->empleado->hotel->id;

        // Los Tipos de empleado aptos para ser usuarios
        $emptipos = Emptipo::select('id')->where('tipo', 'LIKE', 'Administrador')
                    ->orWhere('tipo', 'LIKE', 'Recepcionista')
                    ->get()
                    ->lists('id');

        //Los empleados aptos para ser usuarios
        
        $empleados = array();

        for ($i = 0 ; $i < count($emptipos) ; $i++) { 
        
            $e = Empleado::where([
                    ['hotel_id', $hotel],
                    ['emptipo_id', $emptipos[$i]],
                ])->get();

            $e->each(function($e){
                $e->emptipo;
            });

            $e = $e->toArray();

            for ($j = 0; $j < count($e); $j++) { 
                array_push($empleados, $e[$j]);
            }   
        }

        return response()->json( $empleados );
        
    }
}

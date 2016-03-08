<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Hotel;
use App\Empleado;
use App\Emptipo;

class HotelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
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
        $hotel = new Hotel($request->all());
        $hotel->save();

        return response()->json([
            "mensaje" => 'Hotel Creado'
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

    public function getHoteles()
    {
        $hoteles = Hotel::all();
        $hoteles = $hoteles->toArray();

        foreach ($hoteles as $key => $hotel) {
            $adm = $this->getAdministrador( $hotel['id'] );
            $hoteles[$key]['administrador'] = $adm[0];

        }

        return response()->json( $hoteles );
    }

    public function getAdministrador($hotel_id)
    {
        $id_adm = $this->getIdCargoAdminHotel();

        $adm = Empleado::where([
                    ['hotel_id', $hotel_id],
                    ['emptipo_id', $id_adm],
                ])->get();

        $adm = $adm->toArray();

        if (count($adm) > 0) {
            foreach ($adm as $key => $admin) {
                $list_admin[$key] = $admin['nombres'] . " " . $admin['apellidos']; 
            }
        }
        else {
            $list_admin[0] = null;
        }

        
        return $list_admin;
    }

    public function getIdCargoAdminHotel()
    {
        $id_adm = $emptipos = Emptipo::select('id')->where('tipo', 'LIKE', 'Administrador')->get();
        $id_adm = $id_adm->toArray();
        $id_adm = $id_adm[0]['id'];

        return $id_adm;
    }

    public function crearAdminHotel(Request $request)
    {
        $empleado = new Empleado($request->all());
        $empleado->emptipo_id = $this->getIdCargoAdminHotel();

        $empleado->save();

        return response()->json([
            "empleado_id" => $empleado->id,
            "hotel_id" => $empleado->hotel_id,
            "emptipo_id" => $empleado->emptipo_id
        ]);
    }

    public function guardarAdminHotel(Request $request)
    {

        $empleado = Empleado::find($request->empleado);
        $empleado->fill($request->all());
        $empleado->save();

        $res = $this->getHoteles();

        return $res;
    }

    public function dataEditar(Request $request)
    {
        
        $url = explode("=", $request->url['hash']);
        dd($url[1]);
    }
}

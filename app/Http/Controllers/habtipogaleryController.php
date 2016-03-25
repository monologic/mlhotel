<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Habtipofoto;
use App\Habtipo;

class habtipogaleryController extends Controller
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $Habtiposf = Habtipofoto::where('habtipo_id', $id)->get();
        $Habtiposf = $Habtiposf ->toArray();
        return response()->json( $Habtiposf );
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

      public function HabTipoFotoStore(Request $request)
    {
       if($request->file('imagen'))
        {
            $file = $request -> file('imagen');
            $name = 'HabtipoGalery_'. time() . '.' .$file->getClientOriginalExtension();
            $path=public_path() . "/imagen/habitaciones/galeria";
            $file -> move($path,$name);
        }
        $Habtipof = new Habtipofoto($request->all());
        $Habtipof->foto = $name;
        $Habtipof->save();
         return redirect('admin#/LisHab');
    }
     public function getFotoHabTipo($habtipo_id)//$hotel_id
    {
        $Habtiposf = Habtipofoto::where('habtipo_id', $habtipo_id)->get();
        $Habtiposf = $Habtiposf ->toArray();
        return response()->json( $Habtiposf );

    }
        
}
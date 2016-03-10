<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Auth;

use App\Habsubtipo;

class HabSubTipoController extends Controller
{ 
    public function __construct()
    {
        $this->middleware('auth');
    }

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
    public function SubHabitacionesStore(Request $request)
    {

       dd(Auth::user()) ;
       if($request->file('imagen'))
        {
            $file = $request -> file('imagen');
            $name = 'subHab_'. time() . '.' .$file->getClientOriginalExtension();
            $path=public_path() . "/imagen/habitaciones/";
            $file -> move($path,$name);
        }
        $Habsubtipo = new Habsubtipo($request->all());
        $Habsubtipo->foto = $name;
       // $Habsubtipo->hotel_id = Auth::user()->empleado->hotel->id;
        dd($Habsubtipo);
        // $Habsubtipo->save();
         //return redirect('admin#/Banner');
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
}

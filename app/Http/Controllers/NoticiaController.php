<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Noticia;

class NoticiaController extends Controller
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
    public function getNoticias()
    {
        $Noticias = Noticia::all();
        $Noticias = $Noticias ->toArray();


        return response()->json( $Noticias );
    }
     public function NoticiaCreateIndex(Request $request)
    {
        
      if($request->file('imagen'))
        {
            $file = $request -> file('imagen');
            $name = 'Noticia_'. time() . '.' .$file->getClientOriginalExtension();
            $path=public_path() . "/imagen/Noticia/";
            $file -> move($path,$name);
        }
        $Noticia = new Noticia($request->all());

        $Noticia->imagen = $name;
        $Noticia->save();
        return redirect('admin#/LisNoticias');


    }
}

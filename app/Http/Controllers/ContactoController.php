<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Contacto;

class ContactoController extends Controller
{
    public function NewContacto(Request $request)
    {
        $Contacto = new Contacto($request->all());
         $Contacto->save();
         return redirect('/');
    }
    public function getContactos()
    {
        $Contacto = Contacto::all();
        $Contacto = $Contacto ->toArray();


        return response()->json( $Contacto );
    }
}

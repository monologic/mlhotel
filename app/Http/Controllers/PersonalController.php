<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Usuario;
use App\Empleado;
use App\Hotel;

class PersonalController extends Controller
{
    public function buscar(Request $request)
    {
    	$personal = Empleado::where('hotel_id', $request->hotel)->get();

    	$personal->each(function ($personal) {
    		$personal->emptipo;
		});

		$personal = $personal->toArray();

        return response()->json($personal);
    }
}

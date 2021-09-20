<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;

class CarsController extends Controller
{
    function show($id)
    {
        $car = Car::find($id);
        if(!$car)
        {
            return response()->json(['errors'=>'Carro não encontrado'],204);
        }
        return response()->json(['data'=>$car]);
    }
}

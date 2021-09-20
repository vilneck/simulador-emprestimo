<?php

namespace App\Http\Controllers;

use App\Http\Helpers\FormatHelper;
use App\Http\Requests\SimulateRequest;
use App\Models\Car;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class SimulatorController extends Controller
{
    function index()
    {
        $cars = Car::all();

        return view('simulator.index',compact('cars'));
    }

    function simulate(SimulateRequest $request)
    {
        $data = (object)$request->all();
        $selectedCar = Car::findOrFail($data->car);
        $entry_value = FormatHelper::unmaskMoney($data->entry_value);

        //valida se o valor de entrada é menor que o valor do carro
        if($selectedCar->value < $entry_value)
        {
            throw ValidationException::withMessages([
                'entry_value' => ['O valor de entrada não pode ser maior que o valor do carro.'],
            ]);
        }

        $carTotal = $selectedCar->value;
        $missingTotal = $carTotal - $entry_value;

        //monta um Html com o resultado do financiamento
        $html = '';
        $parcials = [48,12,6];
        foreach($parcials as $parcial)
        {
            $html .= $parcial."x de ".FormatHelper::maskMoney($missingTotal/$parcial)."<br>";
        }

        $cars = Car::all();
        return view('simulator.index',compact('cars','data','html','selectedCar'));
    }
}

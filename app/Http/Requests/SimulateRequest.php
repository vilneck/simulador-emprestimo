<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SimulateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'entry_value' => 'required',
            'car' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'entry_value.required' => 'O valor de entrada é obrigatório',
            'car.required' => 'O carro é obrigatório',
        ];
    }
}

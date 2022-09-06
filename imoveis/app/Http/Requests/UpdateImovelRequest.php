<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateImovelRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'nome'  =>  'required',
            'logradouro'  =>  'required',
            'numero'  =>  'required',
            'CEP'  =>  'string|nullable',
            'referencia'  =>  'string|nullable',
            'complemento'  =>  'string|nullable',
            'observacao'  =>  'string|nullable',
            'latitude'  =>  'string|nullable',
            'longitude'  =>  'string|nullable',
            'bairro_id'  =>  'required|numeric',
        ];
    }
}

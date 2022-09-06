<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreOpmRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'nome'  =>  'required',
            'sigla'  =>  'required|unique:opms',
            'opm_id'  =>  'nullable|numeric',
            'imovel_id'  =>  'required|numeric',
        ];
    }
}

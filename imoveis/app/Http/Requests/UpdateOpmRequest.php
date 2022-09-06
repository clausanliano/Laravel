<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateOpmRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'nome'  =>  'required',
            'sigla'  =>  'required|unique:opms,sigla,'.$this->route('opm.id'),
            'opm_id'  =>  'nullable|numeric',
            'imovel_id'  =>  'required|numeric',
        ];
    }
}

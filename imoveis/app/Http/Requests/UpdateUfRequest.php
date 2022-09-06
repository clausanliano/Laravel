<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateUfRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'nome'  =>  'required|string',
            'sigla'  =>  'required|string|max:2|min:2|required:ufs,sigla,'.$this->route('uf')->id,
        ];
    }
}

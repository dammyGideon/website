<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class contactRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }
    public function rules()
    {
        return [

            
            'comments'=>[
                'required',
                'string',
            ],
            'name'=>[
                'required',
                'string',
            ],
            'email'=>[
                'required',
                'string',
            ],
            'phone_number'=>[
                'required',
                'string'
            ]
        ];
    }
}

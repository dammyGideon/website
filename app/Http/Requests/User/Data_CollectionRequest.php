<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;

class Data_CollectionRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }


    public function rules()
    {
        return [
            'file'=>[
                'required',
            ],
          
            'service'=>[
                'required',
                'string'
            ],
            'project_title'=>['required']
        ];
    }
}

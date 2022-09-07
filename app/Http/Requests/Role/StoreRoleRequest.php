<?php

namespace App\Http\Requests\Role;

use Illuminate\Foundation\Http\FormRequest;

class StoreRoleRequest extends FormRequest
{

    public function authorize()
    {
        return false;
    }

    public function rules()
    {
        return [
            'slug'=>[
                'string',
                'required'
            ],
            'name'=>[
                'string',
                'required'
            ]
        ];
    }
}

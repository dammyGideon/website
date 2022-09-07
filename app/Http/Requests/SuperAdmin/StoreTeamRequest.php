<?php

namespace App\Http\Requests\SuperAdmin;

use Illuminate\Foundation\Http\FormRequest;

class StoreTeamRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    
    public function rules()
    {
        return [
            'position'=>[
                'required',
                'string'
            ],
            'name'=>[
                'required',
                'string'
            ],
            'image'=>[
                'image',
                'mimes:jpeg,png,jpg,gif,svg',
            ],
            'linkedIn'=>[
                'required',
                'string'
            ]
        ];
    }
}

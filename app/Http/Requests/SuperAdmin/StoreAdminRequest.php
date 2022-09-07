<?php

namespace App\Http\Requests\SuperAdmin;

use Illuminate\Foundation\Http\FormRequest;

class StoreAdminRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'image'=>[
                'image',
                'mimes:jpeg,png,jpg,gif,svg',
            ],
            'first_name'=>[
                'required',
                'string',
            ],
            'last_name'=>[
                'required',
                'string',
             ],
            'email'=>[
                'required',
                'string'
             ],
            'phone'=>[
                'required',
                'string'
             ],
        ];
    }
}

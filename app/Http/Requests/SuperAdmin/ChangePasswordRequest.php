<?php

namespace App\Http\Requests\SuperAdmin;

use Illuminate\Foundation\Http\FormRequest;

class ChangePasswordRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }


    public function rules()
    {
        return [
            'old_password'=>[
                'required',
                'string',
            ],
            'new_password'=>[
                'required',
                'string',
            ]

        ];
    }
}

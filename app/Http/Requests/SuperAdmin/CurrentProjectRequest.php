<?php

namespace App\Http\Requests\SuperAdmin;

use Illuminate\Foundation\Http\FormRequest;

class CurrentProjectRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }


    public function rules()
    {
        return [
            'upload'=>'required|size:1024|mimes:jpeg,png,jpg,gif',
            'shortDP'=>'string|required',
            'longDP'=>'string|required'
        ];
    }
}

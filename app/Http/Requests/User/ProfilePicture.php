<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;

class ProfilePicture extends FormRequest
{
    
    public function authorize()
    {
        return true;
    }
    public function rules()
    {
        return [
            'avater' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
        ];
    }
}

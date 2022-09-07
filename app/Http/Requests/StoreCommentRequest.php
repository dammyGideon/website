<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCommentRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }


    public function rules()
    {
        return [
            // 'upload'=>[
            //     'image',
            //     'mimes:jpeg,png,jpg,gif,svg',
            // ],
            'linkedIn'=>[
                'string'
            ],
            'message'=>[
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
            'rate'=>[
                'required',
                'string'
            ]

        ];
    }
}

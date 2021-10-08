<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class CommentRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'comment'=>[
                'required ',
                'max:255'
            ],
            'users_id'=>[
                'required ',
            ]
        ];
    }

    public  function massages(){
        return [
            "comment.required"=>"You must be login "
        ];

    }
}

<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class TodoRequest extends FormRequest
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
            //
            'task'=>[
                'required ',
                Rule::unique('todos'),
                'max:255'
            ],
        ];
    }
    public  function massages(){
        return [
            "task.required"=>"This task must be unique "
        ];

    }
}

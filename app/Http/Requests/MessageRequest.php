<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MessageRequest extends FormRequest
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
        return
        [
                'name'=>'required',
                'email'=>'required|email',
                'subject'=>'required',
                'comments'=>'required|min:3'
        ];
    }

    public function messages(){
        return
        [
            'name.required'=>'field name is required',
            'email.required'=>'field email is required ',
            'subject.required'=>'field subject is required ',
            'comments.required'=>'field comments is required '
        ];
    }
}

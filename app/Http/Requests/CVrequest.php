<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CVrequest extends FormRequest
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
            'title'=>'required',
            'skills'=>'required',
            'description'=>'required',
            'date'=>'required|date'
        ];
    }

    public function messages(){
        return
        [
            'title.required'=>'field title is required',
            'skills.required'=>'field skills minimum 1 input required',
            'description.required'=>'field description is required ',
            'date.required'=>'field date is required '
        ];
    }


}

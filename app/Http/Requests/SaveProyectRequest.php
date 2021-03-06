<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SaveProyectRequest extends FormRequest
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
            'title'=>'required|min:3',
            'image'=>'required|min:3',
            'description'=>'required|min:3',
            'url'=>'required|min:3'
        ];
    }

    public function messages()
    {
        return [
            'title.required'=>'The name field is required',
            'image.required'=>'The image field is required',
            'url.required'=>'The url field is required',
            'description.required'=>'The description field is required'
        ];
    }
}

<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class AdvantageRequest extends FormRequest
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
            "title" =>"required|array|max:2",
            "title.*" => "required|string",
            "text" =>"required|array|max:2",
            "text.*" => "required|string",
            'image' => !in_array($this->method() ,["PUT" ,"PATCH"]) ? 'required' : '',
            'image.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:10000'
        ];
    }
    public function messages()
    {
        return[
            'title.0.required' => 'The title-en field is required.',
            'title.1.required' => 'The title-ar field is required.',
            'title.0.string' => 'The title-en field must be of type string.',
            'title.1.string' => 'The title-ar field must be of type string.',
            'title.0.max' => 'The title-ar field max length is 255 .',
            'title.1.max' => 'The title-ar field max length is 255 .',
            'text.0.required' => 'The text-en field is required.',
            'text.1.required' => 'The text-ar field is required.',
            'text.0.string' => 'The text-en field must be of type string.',
            'text.1.string' => 'The title-ar field must be of type string.',
        ];
    }

}

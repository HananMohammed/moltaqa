<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class HowWorkRequest extends FormRequest
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
            "title.*" => "required|string|max:255",
            "description" =>"required|array|max:2",
            "description.*" => "required|string",
            "icon" => "required|numeric",
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
            'description.0.required' => 'The text-en field is required.',
            'description.1.required' => 'The text-ar field is required.',
            'description.0.string' => 'The text-en field must be of type string.',
            'description.1.string' => 'The title-ar field must be of type string.',
        ];
    }
}

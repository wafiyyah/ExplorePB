<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class CulinaryRequest extends FormRequest
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
            'title' => 'required|max:255', 
            'about'=> 'required', 
            'material'=> 'required',
            'image'=> 'required|image',
            'village_id' => 'required|integer|exists:villages,id',
            'image'=> 'required|image', 

        ];
    }
}

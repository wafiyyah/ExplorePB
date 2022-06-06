<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class ArticleRequest extends FormRequest
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
            'village_pages_id' => 'required|integer|exists:village_pages,id',
            'title' => 'required|max:255', 
            'author' => 'required', 
            'post' => 'required', 
            'image' => 'required|image'
        ];
    }
}

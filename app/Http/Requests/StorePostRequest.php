<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePostRequest extends FormRequest
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
            'title' => 'bail|required|string|between:0,300|ends_with:.',
            'imageUrl' => 'bail|required|url',
            'category_id' => 'bail|required|exists:categories,id',
            'wysiwyg_text' => 'bail|required|string',
            'tags' => 'required|array|between:1,5|exists:tags,id',
        ];
    }
}

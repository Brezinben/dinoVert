<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactFormRequest extends FormRequest
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
            'name' => 'bail|required|string|between:1,40',
            'email' => 'bail|required|email',
            'message' => 'bail|required|string|between:1,500',
            'CGU' => 'required|accepted',
            'wantNewsletter' => 'nullable',
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages(): array
    {
        return [
            'CGU.required' => 'Vous devez acceptez les CGU pour envoyer.',
        ];
    }

}

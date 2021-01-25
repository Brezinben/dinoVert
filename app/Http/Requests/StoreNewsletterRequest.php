<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreNewsletterRequest extends FormRequest
{
    /**
     * @var mixed
     */
    private $newsletterMail;

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
            'newsletterMail' => 'bail|required|email|unique:newsletters,email'
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'newsletterMail.required' => 'Vous avez besoin de renseigner un mail.',
            'newsletterMail.email' => 'Vous n\'avez pas passer un email.',
            'newsletterMail.unique' => 'L\'email est déjà enregistrer dans notre base.',
        ];
    }

    /**
     * Configure the validator instance.
     *
     * @param \Illuminate\Validation\Validator $validator
     * @return void
     */
    public function withValidator($validator)
    {
        //Ne fonctionnne pas :(
        //https://laravel.com/docs/8.x/validation#adding-after-hooks-to-form-requests
        //https://laravel-tricks.com/tricks/laravel-validation-after-hook-in-form-request-file
        $validator->after(function ($validator) {
            if ($this->somethingElseIsInvalid()) {
                $validator->errors()->add('field', 'Something is wrong with this field!');
            }
        });
    }
}

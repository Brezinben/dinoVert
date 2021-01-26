<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Validator;


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
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
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
    public function messages(): array
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
     * @param Validator $validator
     * @return void
     */
    public function withValidator(Validator $validator)
    {
        /*
         * J'ai contourner le pb si le tableau des erreurs existe alors je le cast en bool
         * ainsi si l'email n'est pas correct j'affiche un flash message
         */
        //https://laravel.com/docs/8.x/validation#adding-after-hooks-to-form-requests
        //https://laravel-tricks.com/tricks/laravel-validation-after-hook-in-form-request-file
        $validator->after(function ($validator) {
            if (!!$this->validator->failed()) {
                session()->flash('warning', 'Votre email n\'est pas valide');
            }
        });
    }
}

<?php

namespace App\Http\Requests;

use Carbon\Carbon;
use Illuminate\Foundation\Http\FormRequest;

class StorePropertyRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return auth()->user()->name == "admin";
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title' => 'required|string|max:255',
            'description' => 'required|string|ends_with:.',
            'price' => 'required|integer|min:0|max:10000000',
            'surface' => 'required|integer|min:0|max:10000',
            'rooms' => 'required|integer|min:0|max:99',
            'state' => 'required|string|in:Neuf,Rénovation,Abandonner,Ancien',
            'constructionYear' => 'required|integer|min:1900|max:' . Carbon::now()->year,
            'postcode' => 'required|integer|min:0|max:100000',
            'town' => 'required|string|min:0|max:255',
            'type_id' => 'required|exists:types,id',
            'images' => 'required',
        ];
        //la validation des images se fait dans le composant
    }

    public function messages()
    {
        //penser a mettre tout les messages si on veux la best description
        return [
//            'description.ends_with' => 'Il faut finir par un point <.> ',
        ];
    }
}

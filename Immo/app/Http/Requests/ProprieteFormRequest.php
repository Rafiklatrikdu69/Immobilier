<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProprieteFormRequest extends FormRequest
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
            'titre' => 'required|min:6',
            'description' => 'required|min:6',
            'surface' => 'required|integer|min:6',
            'nb_pieces' => 'required|integer|min:1',
            'nb_chambres' => 'required|integer|min:0',
            'nb_etages' => 'required|integer|min:0',
            'prix' => 'required|integer|min:0',
            'ville' => 'required|min:6',
            'adresse' => 'required|min:6',
            'code_postal' => 'required|min:6',
            'vendu' => 'required|boolean',
        ];
    }
}

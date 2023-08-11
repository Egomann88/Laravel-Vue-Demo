<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CardRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true; // validation will be done with middleware
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|string|min:3|max:100',
            'entryYear' => 'required|integer|min:1998',
            'rarity' => 'required|integer|min:1|max:5',
            'isActive' => 'required|boolean',
            'cardImg' => 'string',
            'specialization' => 'string|max:16',
            'age' => 'integer|min:14|min:100',
            'isSpecial' => 'boolean',
            'biography' => 'string|max:256',
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     */
    public function messages(): array
    {
        return [
            'name.required' => 'Name ist ein Pflichtfeld.',
            'name.string' => 'Name muss ein String sein.',
            'name.min' => 'Name muss mindestens 3 Zeichen lang sein.',
            'name.max' => 'Name darf maximal 100 Zeichen lang sein.',
            'entryYear.required' => 'Erscheinungsjahr ist ein Pflichtfeld.',
            'entryYear.integer' => 'Erscheinungsjahr muss eine Zahl sein.',
            'entryYear.min' => 'Erscheinungsjahr muss mindestens 1998 sein.',
            'rarity.required' => 'Seltenheit ist ein Pflichtfeld.',
            'rarity.integer' => 'Seltenheit muss eine Zahl sein.',
            'rarity.min' => 'Seltenheit muss mindestens 1 sein.',
            'rarity.max' => 'Seltenheit darf maximal 5 sein.',
            'isActive.required' => 'Ist aktiv ist ein Pflichtfeld.',
            'isActive.boolean' => 'Ist aktiv muss ein Boolean sein.',
            'cardImg.string' => 'Kartenbild muss ein String sein.',
            'specialization.string' => 'Fachrichtung muss ein String sein.',
            'specialization.max' => 'Fachrichtung darf maximal 16 Zeichen lang sein.',
            'age.integer' => 'Alter muss eine Zahl sein.',
            'age.min' => 'Alter muss mindestens 14 sein.',
            'age.max' => 'Alter darf maximal 100 sein.',
            'isSpecial.boolean' => 'Spezielle Karte muss ein Boolean sein.',
            'biography.string' => 'Biographie muss ein String sein.',
            'biography.max' => 'Biographie darf maximal 256 Zeichen lang sein.',
        ];
    }
}

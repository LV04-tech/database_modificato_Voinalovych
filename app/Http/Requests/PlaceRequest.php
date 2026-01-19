<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PlaceRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            //
            'location' =>'required',
            'year'=> 'required',
            'description'=> 'required'
        ];
    }

    // ovveride

    public function messages()
    {
        return[
            'location.required' => 'Non hai inserito il nome della località'
        ];
    }
}

<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AppartmentRequest extends FormRequest
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
            'name' => 'required',
            'status' => 'nullable',
            'date_blocked' => 'date|nullable',
            'dimension' => 'nullable',
            'rooms' => 'nullable',
            'level' => 'nullable',
            'description' => 'nullable',
            'price' => 'nullable',
            'price_per_meter' => 'nullable',
            'pdf' => 'nullable',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'To pole jest wymagane',
            'date_blocked.date' => 'Nie poprawny format daty',
        ];
    }
}

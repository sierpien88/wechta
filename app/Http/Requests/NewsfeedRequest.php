<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NewsfeedRequest extends FormRequest
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
            'title' => 'required',
            'content' => 'required',
            'publication_date' => 'date|nullable',
            'publication_date_stop' => 'date|nullable',
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'To pole jest wymagane',
            'content.required' => 'To pole jest wymagane',
            'publication_date.date' => 'Nie poprawny format daty',
            'publication_date_stop.date' => 'Nie poprawny format daty',
        ];
    }
}

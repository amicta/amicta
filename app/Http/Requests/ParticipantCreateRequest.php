<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ParticipantCreateRequest extends FormRequest
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
            'name' => 'required|string|min:3',
            'nim' => 'required|string|min:1|max:10',
            'email' => 'required|string|min:1',
            'phone' => 'required|string',
            'program_study' => 'required|string',
            'event_id' => 'required',
            'reference' => 'nullable',
        ];
    }
}

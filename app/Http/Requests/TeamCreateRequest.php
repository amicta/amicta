<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TeamCreateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return auth()->check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|string|min:1',
            'product' => 'required|string|min:1',
            'description' => 'nullable|string|min:1',

            'member' => 'sometimes|required|array',
            'member.0.nim' => 'required_with:member|string|min:10|max:10',
            'member.0.name' => 'required_with:member|string|min:3|max:50',

            // 'competition_id' => 'required|integer|min:1',
        ];
    }
}

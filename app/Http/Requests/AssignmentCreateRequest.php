<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AssignmentCreateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return auth()->guard('admin')->check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'competition_id' => 'required|integer|min:1',
            'title' => 'required|string|min:1',
            'description' => 'nullable|string|min:1',
            'due_date' => 'required',
            'assign_registered' => 'nullable|boolean',
        ];
    }
}

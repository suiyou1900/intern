<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EngineerRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'first_name' => 'required|max:255',
            'last_name' => 'required|max:255',
            'first_name_furigana' => 'required|max:255',
            'last_name_furigana' => 'required|max:255',
            'first_name' => 'required|max:255',
            'first_name' => 'required|max:255',
            
        ];
    }
}

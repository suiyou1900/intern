<?php

namespace App\Http\Requests;
namespace App\Rules;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\Engineer;



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
            'status' => ['required', Rules::in(ENGINEER::ENGINEER_STATUS_ARRAY)],
            'birthdate' => 'required|date',
            'email' => 'required|max:255',
            'phonenumber' => 'required',
            'postal_code' => 'required',
            'address' => 'required',
            'station' => 'required',
            'background' => 'required',
            'resume' => 'required',
            'job_history_sheet' => 'required',
            'comment'=> 'nullable'
        ];
    }
}

<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class EmployeeRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return 1;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [

            'national_id' =>

            'required|unique:employees',

            'first_name_ar' =>

            'required',

            'first_name_fr' =>

            'required',

            'last_name_ar' =>

            'required',

            'last_name_fr' =>

            'required',

            'birth_date' =>

            'required|date',

            'photo' =>

            'image|mimes:png,jpg,jpeg|max:2048'

        ];
    }
}

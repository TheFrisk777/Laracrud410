<?php

namespace App\Http\Requests\Clients;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return True;
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
            'name' => 'required|min:5|max:100',
            'last_name' => 'required|min:4|max:100',
            'second_last_name' => 'required|min:5|max:100',
            'email' => 'required|min:5|max:100',
            'phone' => 'required|min:5|max:10',
        ];
    }
}

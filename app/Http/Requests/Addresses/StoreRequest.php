<?php

namespace App\Http\Requests\Addresses;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
            'client_id' => 'required|min:1|max:100',
            'street' => 'required|min:5|max:100',
            'internal_num' => 'required|min:1|max:5',
            'external_num' => 'required|min:1|max:5',
            'neightbornhood' => 'required|min:5|max:100',
            'town' => 'required|min:5|max:100',
            'state' => 'required|min:5|max:100',
            'country' => 'required|min:5|max:100',
            'postal_code' => 'required|min:5|max:100',
            'references' => 'required|min:5|max:100',
        ];
    }
}

<?php

namespace App\Http\Requests\Admin\Goat;

use Illuminate\Foundation\Http\FormRequest;

class UpdateGoatValidation extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules()
    {

        return [
            'item_name'                    => ['required','string'],
            'rupees'                       => ['nullable','string'],
            'quantity'                     => ['nullable','string'],
            'main_photo'                   => ['nullable'],
            'description'                  => ['nullable','string'],
            'status'                       => ['nullable', 'boolean'],
        ];
    }
    public function prepareForValidation()
    {
        $this->merge([
            'status'              => $this->status ? 1 : 0,
        ]);
    }
}

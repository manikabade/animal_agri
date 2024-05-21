<?php

namespace App\Http\Requests\Admin\Reg;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRegValidation extends FormRequest
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
            'username'                     => ['required','string'],
            'address'                      => ['required','string'],
            'contact_number'               => ['required','string'],
            'email'                        => ['nullable','email','unique:regs'],
            'password'                     => ['required','min:8'],
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
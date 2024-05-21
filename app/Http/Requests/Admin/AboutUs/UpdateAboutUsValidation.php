<?php

namespace App\Http\Requests\Admin\AboutUs;

use App\Traits\CustomValidationTrait;
use Illuminate\Foundation\Http\FormRequest;

class UpdateAboutUsValidation extends FormRequest
{
    use CustomValidationTrait;
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
        $this->customValidation();
        return [
            'title'                         => ['nullable','string'],
            'description'                   => ['required','string'],
            'main_photo'                    => ['nullable'],
            'status'                        => ['nullable', 'boolean'],
        ];
    }
    public function prepareForValidation()
    {
        $this->merge([
            'status'              => $this->status ? 1 : 0,
        ]);
    }
}


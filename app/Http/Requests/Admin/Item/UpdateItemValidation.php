<?php

namespace App\Http\Requests\Admin\Item;

use App\Traits\CustomValidationTrait;
use Illuminate\Foundation\Http\FormRequest;

class UpdateItemValidation extends FormRequest
{

    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules()
    {

        return [
            'item_name'                    => ['required','string'],
            'rupees'                       => ['nullable','string'],
            'quantity'                     => ['nullable','string'],
            'description'                  => ['nullable','string'],
            'main_photo'                   => ['nullable'],
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


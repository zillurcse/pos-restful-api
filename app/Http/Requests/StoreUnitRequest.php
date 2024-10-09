<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUnitRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'business_id' => 'required|exists:businesses,id',
            'actual_name' => 'required|string|max:255',
            'short_name' => 'required|string|max:50',
            'allow_decimal' => 'required|boolean',
            'base_unit_id' => 'nullable|exists:units,id',
            'base_unit_multiplier' => 'required|numeric|min:1',
            'created_by' => 'required|exists:users,id',
        ];
    }

    /**
     * Get custom error messages for validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'business_id.required' => 'The business is required.',
            'business_id.exists' => 'The selected business does not exist.',
            'actual_name.required' => 'The actual name of the unit is required.',
            'short_name.required' => 'The short name of the unit is required.',
            'allow_decimal.required' => 'Please specify whether decimal values are allowed.',
            'allow_decimal.boolean' => 'The allow decimal field must be true or false.',
            'base_unit_id.exists' => 'The selected base unit does not exist.',
            'base_unit_multiplier.required' => 'The base unit multiplier is required.',
            'base_unit_multiplier.numeric' => 'The base unit multiplier must be a number.',
            'base_unit_multiplier.min' => 'The base unit multiplier must be at least 1.',
            'created_by.required' => 'The user who created the unit is required.',
            'created_by.exists' => 'The selected user does not exist.',
        ];
    }
}

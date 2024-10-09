<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreBusinessRequest extends FormRequest
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
            'name' => 'required|string|max:255',
            'owner_id' => 'required|exists:users,id',
            'currency_id' => 'required|exists:currencies,id',
            'start_date' => 'nullable|date',
            'tax_number_1' => 'nullable|string|max:100',
            'tax_number_2' => 'nullable|string|max:100',
            'default_profit_percent' => 'numeric|min:0|max:100',
            'time_zone' => 'string',
            'fy_start_month' => 'integer|min:1|max:12',
            'accounting_method' => 'in:fifo,lifo,avco',
            'default_sales_discount' => 'nullable|numeric|min:0|max:100',
            'sell_price_tax' => 'in:includes,excludes',
            'default_sales_tax' => 'nullable',
            'logo' => 'nullable|string',
            'sku_prefix' => 'nullable|string|max:100',
            'enable_tooltip' => 'boolean',
        ];
    }
}

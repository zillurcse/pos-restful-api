<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreInvoiceLayoutRequest extends FormRequest
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
            'header_text' => 'nullable|string|max:255',
            'invoice_no_prefix' => 'nullable|string|max:255',
            'quotation_no_prefix' => 'nullable|string|max:255',
            'invoice_heading' => 'nullable|string|max:255',
            'sub_heading_line1' => 'nullable|string|max:255',
            'sub_heading_line2' => 'nullable|string|max:255',
            'sub_heading_line3' => 'nullable|string|max:255',
            'sub_heading_line4' => 'nullable|string|max:255',
            'sub_heading_line5' => 'nullable|string|max:255',
            'invoice_heading_not_paid' => 'nullable|string|max:255',
            'invoice_heading_paid' => 'nullable|string|max:255',
            'quotation_heading' => 'nullable|string|max:255',
            'sub_total_label' => 'nullable|string|max:255',
            'discount_label' => 'nullable|string|max:255',
            'tax_label' => 'nullable|string|max:255',
            'total_label' => 'nullable|string|max:255',
            'round_off_label' => 'nullable|string|max:255',
            'total_due_label' => 'nullable|string|max:255',
            'paid_label' => 'nullable|string|max:255',
            'show_client_id' => 'boolean',
            'client_id_label' => 'nullable|string|max:255',
            'client_tax_label' => 'nullable|string|max:255',
            'date_label' => 'nullable|string|max:255',
            'date_time_format' => 'nullable|string|max:255',
            'show_time' => 'boolean',
            'show_brand' => 'boolean',
            'show_sku' => 'boolean',
            'show_cat_code' => 'boolean',
            'show_expiry' => 'boolean',
            'show_lot' => 'boolean',
            'show_image' => 'boolean',
            'show_sale_description' => 'boolean',
            'sales_person_label' => 'nullable|string|max:255',
            'show_sales_person' => 'boolean',
            'table_product_label' => 'nullable|string|max:255',
            'table_qty_label' => 'nullable|string|max:255',
            'table_unit_price_label' => 'nullable|string|max:255',
            'table_subtotal_label' => 'nullable|string|max:255',
            'cat_code_label' => 'nullable|string|max:255',
            'logo' => 'nullable|string|max:255',
            'show_logo' => 'boolean',
            'show_business_name' => 'boolean',
            'show_location_name' => 'boolean',
            'show_landmark' => 'boolean',
            'show_city' => 'boolean',
            'show_state' => 'boolean',
            'show_zip_code' => 'boolean',
            'show_country' => 'boolean',
            'show_mobile_number' => 'boolean',
            'show_alternate_number' => 'boolean',
            'show_email' => 'boolean',
            'show_tax_1' => 'boolean',
            'show_tax_2' => 'boolean',
            'show_barcode' => 'boolean',
            'show_payments' => 'boolean',
            'show_customer' => 'boolean',
            'customer_label' => 'nullable|string|max:255',
            'commission_agent_label' => 'nullable|string|max:255',
            'show_commission_agent' => 'boolean',
            'show_reward_point' => 'boolean',
            'highlight_color' => 'nullable|string|max:255',
            'footer_text' => 'nullable|string|max:255',
            'module_info' => 'nullable|string',
            'common_settings' => 'nullable',
            'is_default' => 'boolean',
            'business_id' => 'required|exists:businesses,id',
            'show_letter_head' => 'boolean',
            'letter_head' => 'nullable|string',
            'show_qr_code' => 'boolean',
            'qr_code_fields' => 'nullable',
            'design' => 'nullable|string|max:255',
            'cn_heading' => 'nullable|string|max:255',
            'cn_no_label' => 'nullable|string|max:255',
            'cn_amount_label' => 'nullable|string|max:255',
            'table_tax_headings' => 'nullable',
            'show_previous_bal' => 'boolean',
            'prev_bal_label' => 'nullable|string|max:255',
            'change_return_label' => 'nullable|string|max:255',
            'product_custom_fields' => 'nullable',
            'contact_custom_fields' => 'nullable',
            'location_custom_fields' => 'nullable'
        ];
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class InvoiceLayout extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'name', 'header_text', 'invoice_no_prefix', 'quotation_no_prefix', 'invoice_heading',
        'sub_heading_line1', 'sub_heading_line2', 'sub_heading_line3', 'sub_heading_line4',
        'sub_heading_line5', 'invoice_heading_not_paid', 'invoice_heading_paid',
        'quotation_heading', 'sub_total_label', 'discount_label', 'tax_label', 'total_label',
        'round_off_label', 'total_due_label', 'paid_label', 'show_client_id', 'client_id_label',
        'client_tax_label', 'date_label', 'date_time_format', 'show_time', 'show_brand',
        'show_sku', 'show_cat_code', 'show_expiry', 'show_lot', 'show_image', 'show_sale_description',
        'sales_person_label', 'show_sales_person', 'table_product_label', 'table_qty_label',
        'table_unit_price_label', 'table_subtotal_label', 'cat_code_label', 'logo', 'show_logo',
        'show_business_name', 'show_location_name', 'show_landmark', 'show_city', 'show_state',
        'show_zip_code', 'show_country', 'show_mobile_number', 'show_alternate_number',
        'show_email', 'show_tax_1', 'show_tax_2', 'show_barcode', 'show_payments', 'show_customer',
        'customer_label', 'commission_agent_label', 'show_commission_agent', 'show_reward_point',
        'highlight_color', 'footer_text', 'module_info', 'common_settings', 'is_default',
        'business_id', 'show_letter_head', 'letter_head', 'show_qr_code', 'qr_code_fields',
        'design', 'cn_heading', 'cn_no_label', 'cn_amount_label', 'table_tax_headings',
        'show_previous_bal', 'prev_bal_label', 'change_return_label', 'product_custom_fields',
        'contact_custom_fields', 'location_custom_fields'
    ];

}

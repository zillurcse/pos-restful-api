<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('invoice_layouts', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('header_text')->nullable();
            $table->string('invoice_no_prefix')->nullable();
            $table->string('quotation_no_prefix')->nullable();
            $table->string('invoice_heading')->nullable();
            $table->string('sub_heading_line1')->nullable();
            $table->string('sub_heading_line2')->nullable();
            $table->string('sub_heading_line3')->nullable();
            $table->string('sub_heading_line4')->nullable();
            $table->string('sub_heading_line5')->nullable();
            $table->string('invoice_heading_not_paid')->nullable();
            $table->string('invoice_heading_paid')->nullable();
            $table->string('quotation_heading')->nullable();
            $table->string('sub_total_label')->nullable();
            $table->string('discount_label')->nullable();
            $table->string('tax_label')->nullable();
            $table->string('total_label')->nullable();
            $table->string('round_off_label')->nullable();
            $table->string('total_due_label')->nullable();
            $table->string('paid_label')->nullable();
            $table->boolean('show_client_id')->default(0);
            $table->string('client_id_label')->nullable();
            $table->string('client_tax_label')->nullable();
            $table->string('date_label')->nullable();
            $table->string('date_time_format')->nullable();
            $table->boolean('show_time')->default(0);
            $table->boolean('show_brand')->default(0);
            $table->boolean('show_sku')->default(0);
            $table->boolean('show_cat_code')->default(0);
            $table->boolean('show_expiry')->default(0);
            $table->boolean('show_lot')->default(0);
            $table->boolean('show_image')->default(0);
            $table->boolean('show_sale_description')->default(0);
            $table->string('sales_person_label')->nullable();
            $table->boolean('show_sales_person')->default(0);
            $table->string('table_product_label')->nullable();
            $table->string('table_qty_label')->nullable();
            $table->string('table_unit_price_label')->nullable();
            $table->string('table_subtotal_label')->nullable();
            $table->string('cat_code_label')->nullable();
            $table->string('logo')->nullable();
            $table->boolean('show_logo')->default(0);
            $table->boolean('show_business_name')->default(0);
            $table->boolean('show_location_name')->default(0);
            $table->boolean('show_landmark')->default(0);
            $table->boolean('show_city')->default(0);
            $table->boolean('show_state')->default(0);
            $table->boolean('show_zip_code')->default(0);
            $table->boolean('show_country')->default(0);
            $table->boolean('show_mobile_number')->default(0);
            $table->boolean('show_alternate_number')->default(0);
            $table->boolean('show_email')->default(0);
            $table->boolean('show_tax_1')->default(0);
            $table->boolean('show_tax_2')->default(0);
            $table->boolean('show_barcode')->default(0);
            $table->boolean('show_payments')->default(0);
            $table->boolean('show_customer')->default(0);
            $table->string('customer_label')->nullable();
            $table->string('commission_agent_label')->nullable();
            $table->boolean('show_commission_agent')->default(0);
            $table->boolean('show_reward_point')->default(0);
            $table->string('highlight_color')->nullable();
            $table->text('footer_text')->nullable();
            $table->text('module_info')->nullable();
            $table->json('common_settings')->nullable();
            $table->boolean('is_default')->default(0);
            $table->unsignedBigInteger('business_id');
            $table->foreign('business_id')->references('id')->on('businesses')->onDelete('cascade');
            $table->boolean('show_letter_head')->default(0);
            $table->text('letter_head')->nullable();
            $table->boolean('show_qr_code')->default(0);
            $table->json('qr_code_fields')->nullable();
            $table->string('design')->nullable();
            $table->string('cn_heading')->nullable();
            $table->string('cn_no_label')->nullable();
            $table->string('cn_amount_label')->nullable();
            $table->json('table_tax_headings')->nullable();
            $table->boolean('show_previous_bal')->default(0);
            $table->string('prev_bal_label')->nullable();
            $table->string('change_return_label')->nullable();
            $table->json('product_custom_fields')->nullable();
            $table->json('contact_custom_fields')->nullable();
            $table->json('location_custom_fields')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('invoice_layouts');
    }
};

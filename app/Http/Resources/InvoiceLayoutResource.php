<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class InvoiceLayoutResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'header_text' => $this->header_text,
            'invoice_no_prefix' => $this->invoice_no_prefix,
            'quotation_no_prefix' => $this->quotation_no_prefix,
            'invoice_heading' => $this->invoice_heading,
            'common_settings' => json_decode($this->common_settings, true),
            'qr_code_fields' => json_decode($this->qr_code_fields, true),
            'table_tax_headings' => json_decode($this->table_tax_headings, true),
            'product_custom_fields' => json_decode($this->product_custom_fields, true),
            'contact_custom_fields' => json_decode($this->contact_custom_fields, true),
            'location_custom_fields' => json_decode($this->location_custom_fields, true),
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}

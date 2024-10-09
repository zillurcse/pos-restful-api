<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class BusinessResource extends JsonResource
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
            'owner_id' => $this->owner_id,
            'currency_id' => $this->currency_id,
            'start_date' => $this->start_date,
            'tax_number_1' => $this->tax_number_1,
            'tax_number_2' => $this->tax_number_2,
            'default_profit_percent' => $this->default_profit_percent,
            'time_zone' => $this->time_zone,
            'fy_start_month' => $this->fy_start_month,
            'accounting_method' => $this->accounting_method,
            'default_sales_discount' => $this->default_sales_discount,
            'sell_price_tax' => $this->sell_price_tax,
            'default_sales_tax' => $this->default_sales_tax,
            'logo' => $this->logo,
            'sku_prefix' => $this->sku_prefix,
            'enable_tooltip' => $this->enable_tooltip,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}

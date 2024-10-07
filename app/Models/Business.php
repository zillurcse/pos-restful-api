<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Business extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = [
        'name', 'owner_id', 'currency_id', 'start_date', 'tax_number_1',
        'tax_number_2', 'code_1', 'code_2', 'default_profit_percent',
        'time_zone', 'fy_start_month', 'accounting_method',
        'default_sales_discount', 'sell_price_tax', 'default_sales_tax',
        'logo', 'sku_prefix', 'enable_tooltip'
    ];

}

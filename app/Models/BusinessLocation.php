<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BusinessLocation extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'business_id', 'location_id', 'name', 'landmark', 'country', 'state', 'city', 'zip_code',
        'building_number', 'plot_identification', 'mobile', 'alternate_number', 'email', 'is_active'
    ];
}

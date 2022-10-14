<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;

    protected $fillable = [
        'uuid',
        'service_sellcars_type',
        'category',
        'manufacturing_year',
        'regional_specification',
        'paint',
        'chasis_case',
        'kilo_meters',
        'color',
        'fuel_type',
        'transmission_type',
        'name',
        'description',
        'price',
        'location',
        'upload_photo'
    ];
}

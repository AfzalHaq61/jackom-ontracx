<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shipping extends Model
{
    use HasFactory;

    protected $fillable = [
        'uuid',
        'service_one_type',
        'brand',
        'modal',
        'color',
        'plate_number',
        'location_from',
        'location_to',
        'upload_photo'
    ];
}

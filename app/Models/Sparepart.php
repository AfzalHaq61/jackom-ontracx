<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sparepart extends Model
{
    use HasFactory;

    protected $fillable = [
        'uuid',
        'service_three_type',
        'brand',
        'modal',
        'color',
        'plate_number',
        'location_from',
        'location_to',
        'car_serial_number',
        'copy_of_regestration',
        'upload_photo'
    ];
}

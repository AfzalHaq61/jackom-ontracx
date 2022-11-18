<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Repairing extends Model
{
    use HasFactory;

    protected $fillable = [
        'uuid',
        'user_id',
        'service_two_type',
        'brand',
        'modal',
        'color',
        'plate_number',
        'location_from',
        'upload_photo'
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buggage extends Model
{
    use HasFactory;

    protected $fillable = [
        'uuid',
        'service_fourfive_type',
        'shipping_type',
        'size',
        'weight',
        'location_from',
        'location_to',
        'upload_photo'
    ];
}

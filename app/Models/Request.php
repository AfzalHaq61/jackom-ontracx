<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Request extends Model
{
    use HasFactory;

    protected $fillable = [
        'uuid',
        'user_id',
        'service_type',
        'name',
        'description',
        'price',
        'brand',
        'modal',
        'shipping_type',
        'kind',
        'category',
        'size',
        'weight',
        'color',
        'plate_number',
        'car_serial_number',
        'copy_of_regestration',
        'manufacturing_year',
        'regional_specification',
        'paint',
        'chasis_case',
        'kilo_meters',
        'fuel_type',
        'transmission_type',
        'location',
        'location_to',
        'upload_photo',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function order()
    {
        return $this->hasOne(Order::class);
    }

    public function offer()
    {
        return $this->hasMany(Order::class);
    }
}

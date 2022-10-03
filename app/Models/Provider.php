<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Provider extends Model
{
    use HasFactory;

    protected $fillable = [
        'uuid',
        'name',
        'nationality',
        'country',
        'city',
        'region',
        'registration_number', 
        'comercial_activity', 
        'legal_capacity', 
        'address', 
        'mobile_number', 
        'iban', 
        'account_number', 
        'license_photo_1', 
        'license_photo_2',
        'upload_photo',
    ];
}

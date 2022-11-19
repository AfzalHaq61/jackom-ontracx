<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Messege extends Model
{
    use HasFactory;

    protected $fillable = [
        'chat_id',
        'messege',
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }
}

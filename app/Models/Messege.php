<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Messege extends Model
{
    use HasFactory;

    protected $fillable = [
        'chat_id',
        'sender_id',
        'reciever_id',
        'messege',
        'to_user_id',
        'from_user_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

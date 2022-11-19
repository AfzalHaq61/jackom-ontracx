<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class chat extends Model
{
    use HasFactory;

    protected $fillable = [
        'reciever_id',
        'sender_id',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'reciever_id', 'id');
    }
}

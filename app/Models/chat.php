<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class chat extends Model
{
    use HasFactory;

    protected $fillable = [
        'sender_id',
        'reciever_id',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'reciever_id', 'id');
    }
}

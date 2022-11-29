<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Offer extends Model
{
    use HasFactory;

    protected $fillable = [
        'uuid',
        'request_id',
        'user_id',
        'service_cost',
        'due_time',
        'details'
    ];

    public function request(): BelongsTo
    {
        return $this->belongsTo(Request::class, 'request_id', 'id');
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}

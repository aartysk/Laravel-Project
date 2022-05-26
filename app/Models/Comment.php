<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Comment extends Model
{
    protected $fillable = [

        'author',
        'body',
        'client_id',
    ];

    public function Client(): BelongsTo
    {
        return $this->belongsTo(Client::class);
    }
}

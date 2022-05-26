<?php

namespace App\Models;

use Database\Factories\ClientFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Client extends Model
{
    use HasFactory;

    /** 
    *@var array<int, string>
    */
    protected $fillable = [
        'name',
        'email',
    ];

    protected static function newFactory(): ClientFactory

    {
        return new ClientFactory();
    }

    public function comments (): HasMany
    {
        return $this->hasMany(Comment::class);
    }

}


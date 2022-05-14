<?php

namespace App\Models;

use Database\Factories\ClientFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clients extends Model
{
    use HasFactory;

    /** 
    *@var array<int,string>
    */
    protected $fillable = [
        'name',
        'email',
    ];

    protected static function newFactory(): ClientFactory

    {
        return new ClientFactory();
    }
}

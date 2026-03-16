<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Donation extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'amount',
        'message',
    ];

    protected $casts = [
        'amount' => 'decimal:2',
    ];
}

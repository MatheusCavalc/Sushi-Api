<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Info extends Model
{
    use HasFactory;

    protected $fillable = [
        'store_open',
        'whatsapp_number',
        'address',
        'open_days', 
        'opening_hours',
        'social_links',
    ];

    protected $casts = [
        'social_links' => 'array',
    ];
}

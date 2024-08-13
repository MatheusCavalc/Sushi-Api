<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'category_id',
        'image',
        'link_image',
        'on_sell',
        'description',
        'price',
        'quantity',
        'on_sale',
        'sale_price',
    ];

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }
}

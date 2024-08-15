<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ComboItem extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'price'
    ];

    public function setPriceAttribute($value)
    {
        $value = str_replace(',', '.', $value);

        if (!str_contains($value, '.')) {
            $value .= '.00';
        }

        $this->attributes['price'] = $value;
    }
}

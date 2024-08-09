<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Str;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'image',
        'link_image',
        'location'
    ];

    public static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $model->location = $model->generateUniqueLocation($model->name);
        });
    }

    // Função para gerar location única
    public function generateUniqueLocation($name)
    {
        // Separar as palavras do nome
        $words = explode(' ', Str::slug($name, ' '));

        // Iniciar com a primeira palavra
        $location = $words[0];
        $counter = 1;

        // Verificar se a location já existe
        while (self::where('location', $location)->exists()) {
            // Adicionar a próxima palavra se disponível, caso contrário incrementar contador
            if (isset($words[$counter])) {
                $location .= $words[$counter];
                $counter++;
            } else {
                $location .= $counter;
                $counter++;
            }
        }

        return $location;
    }

    /**
     * Get the tenancies for the user.
     */
    public function products(): HasMany
    {
        return $this->hasMany(Product::class);
    }
}

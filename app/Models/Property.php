<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class property extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'rental_price',
        'sale_price',
        'slug',
    ];
    protected static function boot()
    {
        parent::boot();

        static::saving(function ($property) {
            $slug = Str::slug($property->title);

            // Garantir que o slug seja único
            $slugBase = $slug;
            $counter = 1;
            while (Property::where('slug', $slug)->exists()) {
                $slug = $slugBase . '-' . $counter;
                $counter++;
            }

            $property->slug = $slug;
        });
    }
}

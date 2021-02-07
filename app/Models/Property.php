<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Property extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected array $state = ['Neuf', 'Rénovation', 'Abandonner', 'Ancien'];

    /**
     * @return BelongsTo
     */
    public function type(): BelongsTo
    {
        return $this->belongsTo(Type::class)->select('id', 'title');
    }

    /**
     * @return HasMany
     */
    public function images(): HasMany
    {
        //Je renvoie l'image qu'avec les donnée utiles
        return $this->hasMany(Image::class)->select('id', 'url', 'alternative', 'property_id')->oldest();
    }

    /**
     * Pour ne pas avoir d'espace dans le code postal
     * @param $value
     * @return string|string[]
     */
    public function getPostcodeAttribute($value)
    {
        return str_replace(' ', '', $value);
    }
}

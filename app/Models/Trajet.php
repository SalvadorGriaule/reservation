<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Trajet extends Model
{
    protected $fillable = ["gareDepart","gareArriver","heureDepart","heureArriver","prix","capacite"];

    public function reservation(): HasMany
    {
        return $this->hasMany(Reservation::class);
    }
}

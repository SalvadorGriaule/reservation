<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;


class Reservation extends Model
{
    protected $fillable = ["id_user","id_trajet"];

}

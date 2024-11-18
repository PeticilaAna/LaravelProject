<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class dealer extends Model
{
    public function vehicle()
    {
        return $this->hasMany(vehicle::class);
    }

    public function users()
    {
        return $this->hasMany(users::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class vehicle extends Model
{
    return $this->belongsTo(dealer::class);
}

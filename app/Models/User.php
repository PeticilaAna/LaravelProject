<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class users extends Model
{
    return $this->belongsTo(dealer::class);
    
    public function dealer()
{
    return $this->belongsTo(Dealer::class);
}
}

<?php

namespace NBA;

use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    public function team() {
        return $this->belongsTo(Team::class);
    }
}

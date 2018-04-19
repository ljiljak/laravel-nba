<?php

namespace NBA;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    public function players() {
    	return $this->hasMany(Player::class);
    }
    public function user() {
    	return $this->belongsTo ('NBA\Team');
    }
}

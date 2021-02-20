<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;

    public function players()
    {
        return $this->hasMany(Player::class)->orderBy('updated_at', 'asc');
    }

    public function getSpentAttribute()
    {
        return $this->players()->sum('points');
    }

    public function getRemainingAttribute()
    {
        return $this->points - $this->players()->sum('points');
    }
}

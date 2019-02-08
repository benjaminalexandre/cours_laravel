<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Season;


class Episode extends Model
{
    public function season(){
        return $this->belongsTo(Season::class);
    }

    public function actors(){
        return $this->belongsToMany(Actor::class);
    }
}

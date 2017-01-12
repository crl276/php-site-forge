<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vote extends Model
{
    //

    protected $fillable = [
    	'vote_count'
    ];

    public function card() {
    	return $this->belongsTo(Card::class);
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    //
    public function notes()
    {
    	return $this->hasMany(Note::class);
    }

    public function addNote(Note $note)
    // Return this object with the new note saved
    {
    	return $this->notes()->save($note);
    }

    public function votes()
    {
        return $this->hasMany(Vote::class);
    }
}

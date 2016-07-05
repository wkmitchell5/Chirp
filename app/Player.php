<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
   public function notes()
   {
   return $this->hasMany(Note::class);
   }

   public function users()
    {
    return $this->belongsTo(User::class);
    }
}

<?php

namespace App;

use App\card;
use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
 
	 public function notes()
	 {
	 	return $this->hasMany('App\Note');
	 }

}

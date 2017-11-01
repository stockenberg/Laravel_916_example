<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Concert extends Model
{
    //

	public function visitors()
	{
		return $this->hasMany(Visitor::class);
	}
}

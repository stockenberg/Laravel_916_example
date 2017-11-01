<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Visitor extends Model
{
    //
	protected $fillable = ['firstname', 'lastname'];

	public function concert()
	{
		return $this->belongsTo(Concert::class);
	}
}

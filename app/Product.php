<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
	public $fillable = ['title', 'price'];

	public function categories()
	{
		return $this->belongsToMany(Category::class);
	}
}

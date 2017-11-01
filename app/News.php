<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class News extends Model
{

	use SoftDeletes;

    //
	protected $fillable = ['title', 'content'];

	public function getTitleAttribute($value)
	{
		return $value . " Muahahaha!";
	}

	public function setTitleAttribute($value)
	{
		$this->attributes['title'] = strtoupper($value);
	}

	public function getTitleAndContentAttribute()
	{
		return "{$this->title} {$this->content}";
	}
}

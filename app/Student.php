<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    //
	protected $fillable = ['name'];

	public function student_id()
	{
		return $this->hasOne(StudentId::class);
	}

}

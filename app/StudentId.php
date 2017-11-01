<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StudentId extends Model
{
    //
	protected $fillable = ['id_number'];

	public function student()
	{
		return $this->belongsTo(Student::class);
	}

}

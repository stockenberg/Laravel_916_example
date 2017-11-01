<?php

use Illuminate\Database\Seeder;

class StudentIdTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		\Illuminate\Support\Facades\DB::table('student_ids')->insert([
			'id_number'      => str_random(10),
			'student_id'      => 1
		]);
    }
}

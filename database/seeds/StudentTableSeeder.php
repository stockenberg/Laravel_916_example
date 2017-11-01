<?php

use Illuminate\Database\Seeder;

class StudentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		\Illuminate\Support\Facades\DB::table('students')->insert([
			'name'      => str_random(10)
		]);
    }
}

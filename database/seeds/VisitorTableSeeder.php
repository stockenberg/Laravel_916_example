<?php

use Illuminate\Database\Seeder;

class VisitorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		\Illuminate\Support\Facades\DB::table('visitors')->insert([
			'firstname'      => str_random(10),
			'lastname'      =>  str_random(10),
			'concert_id'      => 1
		]);
		\Illuminate\Support\Facades\DB::table('visitors')->insert([
			'firstname'      => str_random(10),
			'lastname'      =>  str_random(10),
			'concert_id'      => 1
		]);
		\Illuminate\Support\Facades\DB::table('visitors')->insert([
			'firstname'      => str_random(10),
			'lastname'      =>  str_random(10),
			'concert_id'      => 1
		]);
		\Illuminate\Support\Facades\DB::table('visitors')->insert([
			'firstname'      => str_random(10),
			'lastname'      =>  str_random(10),
			'concert_id'      => 1
		]);
		\Illuminate\Support\Facades\DB::table('visitors')->insert([
			'firstname'      => str_random(10),
			'lastname'      =>  str_random(10),
			'concert_id'      => 1
		]);
		\Illuminate\Support\Facades\DB::table('visitors')->insert([
			'firstname'      => str_random(10),
			'lastname'      =>  str_random(10),
			'concert_id'      => 1
		]);
		\Illuminate\Support\Facades\DB::table('visitors')->insert([
			'firstname'      => str_random(10),
			'lastname'      =>  str_random(10),
			'concert_id'      => 1
		]);
		\Illuminate\Support\Facades\DB::table('visitors')->insert([
			'firstname'      => str_random(10),
			'lastname'      =>  str_random(10),
			'concert_id'      => 1
		]);
    }
}

<?php

use Illuminate\Database\Seeder;

class NewsTableSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		for ($var = 0; $var <= 11; $var++) {
			\Illuminate\Support\Facades\DB::table('news')->insert([
				'title'      => str_random(10),
				'content'    => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci error maiores minus nisi odio quia quo suscipit? Ab dicta dolores eius expedita facere omnis ratione sed! A eos non tempore!",
				'created_at' => \Illuminate\Support\Carbon::now(),
			]);
		}
	}
}

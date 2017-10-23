<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		\Illuminate\Support\Facades\DB::table('products')->insert([
			'title'      => str_random(10),
			'price'      => 12.50,
			'created_at' => \Illuminate\Support\Carbon::now(),
		]);
	}
}

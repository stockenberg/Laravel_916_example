<?php

use Illuminate\Database\Seeder;

class AdminTableSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		\Illuminate\Support\Facades\DB::table('admins')->insert([
			'name'     => "admin",
			'email'    => 'm.stockenberg@sae.edu',
			'password' => bcrypt('admin'),
		]);
	}
}

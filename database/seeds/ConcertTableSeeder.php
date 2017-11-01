<?php

use Illuminate\Database\Seeder;

class ConcertTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		\Illuminate\Support\Facades\DB::table('concerts')->insert([
			'name'      => "Linkin Park R.I.P."
		]);
    }
}

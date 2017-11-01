<?php

use Illuminate\Database\Seeder;

class CategoryProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		\Illuminate\Support\Facades\DB::table('category_product')->insert([
			'category_id'      => 1,
			'product_id'      => 1,
		]);

		\Illuminate\Support\Facades\DB::table('category_product')->insert([
			'category_id'      => 1,
			'product_id'      => 2,
		]);

		\Illuminate\Support\Facades\DB::table('category_product')->insert([
			'category_id'      => 1,
			'product_id'      => 3,
		]);

		\Illuminate\Support\Facades\DB::table('category_product')->insert([
			'category_id'      => 2,
			'product_id'      => 1,
		]);
		\Illuminate\Support\Facades\DB::table('category_product')->insert([
			'category_id'      => 3,
			'product_id'      => 1,
		]);
    }
}

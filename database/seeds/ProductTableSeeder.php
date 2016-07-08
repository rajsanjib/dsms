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
        $faker = Faker\Factory::create();
        $limit = 100;

        for($i = 0; $i < $limit; $i++){
            DB::table('products')->insert([
                'product_name' => $faker->name,
                'marked_price' => $faker->randomNumber(2),
                'selling_price' => $faker->randomNumber(2),
                'category_id' => $faker->randomNumber(1) + 1,
                'brand_id' => $faker->randomNumber(1) + 1
            ]);
        }

    }
}

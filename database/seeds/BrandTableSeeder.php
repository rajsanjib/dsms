<?php

use Illuminate\Database\Seeder;

class BrandTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        $limit = 50;

        for($i=0; $i<$limit; $i++){
            DB::table('brands')->insert([
                'brand_name' => $faker->name
            ]);
        }
    }
}

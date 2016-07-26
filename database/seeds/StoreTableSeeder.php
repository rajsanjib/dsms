<?php

use Illuminate\Database\Seeder;

class StoreTableSeeder extends Seeder
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

        for($i = 1; $i < $limit; $i++){
            DB::table('store')->insert([
                'product_id' => $i,
                'capacity' => 50,
                'available' => 0,
            ]);
        }
    }
}

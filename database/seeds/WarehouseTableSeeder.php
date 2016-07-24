<?php

use Illuminate\Database\Seeder;

class WarehouseTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        $limit = 200;

        for($i = 0; $i < $limit; $i++){
            DB::table('store')->insert([
                ('product_id') = $faker->randomNumber(int 1,int 200);
            ]);
         }
}

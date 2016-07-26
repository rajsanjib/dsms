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
        $limit = 100;

        for($i = 1; $i < $limit; $i++){
            DB::table('warehouse')->insert([
                'product' => $i,
                'capacity' => 50,
                'available' => 50,
            ]);
         }
     }
}

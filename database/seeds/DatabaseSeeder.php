<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(BrandTableSeeder::run());
        $this->call(CategoriesTableSeeder::run());
        $this->call(ProductTableSeeder::run());
        $this->call(StoreTableSeeder::run());
        $this->call(warehouseTableSeeder::run());
    }
}

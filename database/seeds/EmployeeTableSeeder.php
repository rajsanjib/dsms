<?php

use Illuminate\Database\Seeder;

class EmployeeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Faker::Factory();
        $limit = 10;

        for($i = 0; $i < $limit; $i++){
            DB::table('employee')->insert([
                ('first_name') = $faker->name,
                ('last_name') = $faker->last_name,
                ('date_joined') = $faker->date,
                ('email') => $faker->email;
            ]);
         }
    }
}

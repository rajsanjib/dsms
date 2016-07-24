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
        $faker = Faker\Factory::create();
        $limit = 10;

        for($i = 0; $i < $limit; $i++){
            DB::table('employee')->insert([
                ('first_name') => $faker->firstNameMale,
                ('last_name') => $faker->lastName,
                ('date_joined') => $faker->date($format = 'Y-m-d'),
                ('email') => $faker->email,
                ('contact_number') => $faker->phoneNumber,
                ('address') => $faker->streetAddress,
                ('dob') => $faker->date($format = 'Y-m-d'),
                ('sex') => 'M',
                ('position') => $faker->title,
                ('salary') => $faker->numberBetween($min = 10000, $max = 50000)
            ]);
         }
    }
}

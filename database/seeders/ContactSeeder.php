<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
            $faker = Faker::create();
            foreach (range(1,10) as $index) {
              DB::table('contacts')->insert([
                  'name' => $faker->name,
                  'address' => $faker->address,
                  'tlp' => $faker->phoneNumber,
                  'email' => $faker->email,
                  'company' => $faker->company
              ]);
      }

    }
}

<?php

namespace Database\Seeders;

use App\Models\Bill;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;


class BillTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i <= 100; $i++) {
            Bill::create([
                'number' => $faker->regexify('[A-Z]{5}[0-4]{3}'),
                'paid' => $faker->boolean(),
                'year' => $faker->year(),
            ]);
        }
    }
}

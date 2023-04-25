<?php

namespace Database\Seeders;

use App\Models\Technology;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Faker\Generator as Faker;
use Illuminate\Database\Seeder;

class TechnologySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $labels = ['Bootstrap', 'Tailwind', 'Vue', 'Laravel', 'PHPMyAdmin', "React"];

        foreach($labels as $label) {
            $technology = new Technology;
            $technology->label = $label;
            $technology->color = $faker->hexColor();
            $technology->save();
        }
    }
}

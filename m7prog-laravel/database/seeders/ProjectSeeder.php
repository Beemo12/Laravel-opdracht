<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class ProjectSeeder extends Seeder
{

  public function run(): void{$faker = Faker::create();

        DB::table('projects')->insert([
            'created_at'  => now(),
            'updated_at'  => now(),
            'title'       => $faker->colorName(),
            'intro'       => $faker->text(50),
            'description' => $faker->text(100),
            'active'      => true,
            'image'       => $faker->imageUrl('https://picsum.photos/200/300'),

        ]);
    }
}
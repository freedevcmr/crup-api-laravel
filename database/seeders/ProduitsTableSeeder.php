<?php

namespace Database\Seeders;


use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProduitsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         $faker = Faker::create();

        foreach (range(1, 20) as $index) {
            DB::table('produits')->insert([
                'libelle' => $faker->sentence(3),
                'marque' => $faker->word,
                'description' => $faker->paragraph,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }

        
    }
}

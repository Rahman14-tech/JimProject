<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class difficultySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $difficultyArray = array("Beginner", "Intermediate", "Expert");
        foreach ($difficultyArray as $diff) {
            DB::table('difficulties')->insert([
                'Level' => $diff,
            ]);
        }
    }
}
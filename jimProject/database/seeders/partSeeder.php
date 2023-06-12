<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class partSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $partsArray = array("Biceps", "Calves", "Triceps");
        foreach ($partsArray as $part) {
            DB::table('parts')->insert([
                'Name' => $part,
            ]);
        }
    }
}
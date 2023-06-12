<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class typeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $typesArray = array("Strength", "Powerlifting");
        foreach ($typesArray as $type) {
            DB::table('types')->insert([
                'Name' => $type,
            ]);
        }
    }
}
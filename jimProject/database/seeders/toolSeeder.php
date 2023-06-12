<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class toolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $toolsArray = array("Dumbbell", "Cable", "Machine", "Other");
        foreach ($toolsArray as $part) {
            DB::table('tools')->insert([
                'Name' => $part,
            ]);
        }
    }
}
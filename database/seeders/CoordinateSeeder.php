<?php

namespace Database\Seeders;

use App\Models\Reglamentos\Inspector\Coordinate;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CoordinateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Coordinate::create([
            'latitude' => 20.07145,
            'longitude' => -98.69709,
            'status' => true,
        ]);
        Coordinate::create([
            'latitude' => 20.07245,
            'longitude' => -98.69709,
            'status' => false,
        ]);
        Coordinate::create([
            'latitude' => 20.07445,
            'longitude' => -98.69556,
            'status' => false,
        ]);
        Coordinate::create([
            'latitude' => 20.07645,
            'longitude' => -98.69609,
            'status' => false,
        ]);
        Coordinate::create([
            'latitude' => 20.07245,
            'longitude' => -98.69609,
            'status' => true,
        ]);
        Coordinate::create([
            'latitude' => 20.07345,
            'longitude' => -98.69409,
            'status' => true,
        ]);
        Coordinate::create([
            'latitude' => 20.07045,
            'longitude' => -98.69109,
            'status' => true,
        ]);

    }
}

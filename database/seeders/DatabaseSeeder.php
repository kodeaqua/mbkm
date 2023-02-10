<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\Place;
use App\Models\Village;
use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::create([
            'name' => 'Administrator',
            'email' => 'admin@kemang.go.id',
            'password' => Hash::make('admin123')
        ]);

        Category::create([
            'name' => 'Ammusement Park',
            'value' => 0.1
        ]);

        Category::create([
            'name' => 'Cafe',
            'value' => 0.1
        ]);

        Category::create([
            'name' => 'Clothing',
            'value' => 0.1
        ]);

        Category::create([
            'name' => 'Health',
            'value' => 0.1
        ]);

        Category::create([
            'name' => 'Hotel',
            'value' => 0.1
        ]);

        Category::create([
            'name' => 'Industry',
            'value' => 0.1
        ]);

        Category::create([
            'name' => 'Law Enforcement',
            'value' => 0.1
        ]);

        Category::create([
            'name' => 'Micro Economy',
            'value' => 0.1
        ]);

        Category::create([
            'name' => 'Public Service',
            'value' => 0.1
        ]);

        Category::create([
            'name' => 'Restaurant',
            'value' => 0.1
        ]);

        Village::create([
            'name' => "Atang Sanjaya"
        ]);

        Village::create([
            'name' => "Bojong"
        ]);

        Village::create([
            'name' => "Jampang"
        ]);

        Village::create([
            'name' => "Kemang"
        ]);

        Village::create([
            'name' => "Pabuaran"
        ]);

        Village::create([
            'name' => "Parakan Jaya"
        ]);

        Village::create([
            'name' => "Pondok Udik"
        ]);

        Village::create([
            'name' => "Semplak Barat"
        ]);

        Village::create([
            'name' => "Tegal"
        ]);

        /* Placeholder */

        Place::create([
            'village_id' => 1,
            'category_id' => 1,
            'name' => "Placeholder",
            'address' => "Placeholder",
            'latitude' => -6.522433662551750,
            'longitude' => 106.74939893749700,
        ]);

        Place::create([
            'village_id' => 2,
            'category_id' => 1,
            'name' => "Placeholder",
            'address' => "Placeholder",
            'latitude' => -6.522433662551750,
            'longitude' => 106.74939893749700,
        ]);

        Place::create([
            'village_id' => 3,
            'category_id' => 1,
            'name' => "Placeholder",
            'address' => "Placeholder",
            'latitude' => -6.522433662551750,
            'longitude' => 106.74939893749700,
        ]);

        Place::create([
            'village_id' => 4,
            'category_id' => 1,
            'name' => "Placeholder",
            'address' => "Placeholder",
            'latitude' => -6.522433662551750,
            'longitude' => 106.74939893749700,
        ]);

        Place::create([
            'village_id' => 5,
            'category_id' => 1,
            'name' => "Placeholder",
            'address' => "Placeholder",
            'latitude' => -6.522433662551750,
            'longitude' => 106.74939893749700,
        ]);

        Place::create([
            'village_id' => 6,
            'category_id' => 1,
            'name' => "Placeholder",
            'address' => "Placeholder",
            'latitude' => -6.522433662551750,
            'longitude' => 106.74939893749700,
        ]);

        Place::create([
            'village_id' => 7,
            'category_id' => 1,
            'name' => "Placeholder",
            'address' => "Placeholder",
            'latitude' => -6.522433662551750,
            'longitude' => 106.74939893749700,
        ]);

        Place::create([
            'village_id' => 8,
            'category_id' => 1,
            'name' => "Placeholder",
            'address' => "Placeholder",
            'latitude' => -6.522433662551750,
            'longitude' => 106.74939893749700,
        ]);

        Place::create([
            'village_id' => 9,
            'category_id' => 1,
            'name' => "Placeholder",
            'address' => "Placeholder",
            'latitude' => -6.522433662551750,
            'longitude' => 106.74939893749700,
        ]);

        Place::create([
            'village_id' => 1,
            'category_id' => 2,
            'name' => "Placeholder",
            'address' => "Placeholder",
            'latitude' => -6.522433662551750,
            'longitude' => 106.74939893749700,
        ]);

        Place::create([
            'village_id' => 2,
            'category_id' => 2,
            'name' => "Placeholder",
            'address' => "Placeholder",
            'latitude' => -6.522433662551750,
            'longitude' => 106.74939893749700,
        ]);

        Place::create([
            'village_id' => 3,
            'category_id' => 2,
            'name' => "Placeholder",
            'address' => "Placeholder",
            'latitude' => -6.522433662551750,
            'longitude' => 106.74939893749700,
        ]);

        Place::create([
            'village_id' => 4,
            'category_id' => 2,
            'name' => "Placeholder",
            'address' => "Placeholder",
            'latitude' => -6.522433662551750,
            'longitude' => 106.74939893749700,
        ]);

        Place::create([
            'village_id' => 5,
            'category_id' => 2,
            'name' => "Placeholder",
            'address' => "Placeholder",
            'latitude' => -6.522433662551750,
            'longitude' => 106.74939893749700,
        ]);

        Place::create([
            'village_id' => 6,
            'category_id' => 2,
            'name' => "Placeholder",
            'address' => "Placeholder",
            'latitude' => -6.522433662551750,
            'longitude' => 106.74939893749700,
        ]);

        Place::create([
            'village_id' => 7,
            'category_id' => 2,
            'name' => "Placeholder",
            'address' => "Placeholder",
            'latitude' => -6.522433662551750,
            'longitude' => 106.74939893749700,
        ]);

        Place::create([
            'village_id' => 8,
            'category_id' => 2,
            'name' => "Placeholder",
            'address' => "Placeholder",
            'latitude' => -6.522433662551750,
            'longitude' => 106.74939893749700,
        ]);

        Place::create([
            'village_id' => 9,
            'category_id' => 2,
            'name' => "Placeholder",
            'address' => "Placeholder",
            'latitude' => -6.522433662551750,
            'longitude' => 106.74939893749700,
        ]);

        Place::create([
            'village_id' => 1,
            'category_id' => 3,
            'name' => "Placeholder",
            'address' => "Placeholder",
            'latitude' => -6.522433662551750,
            'longitude' => 106.74939893749700,
        ]);

        Place::create([
            'village_id' => 2,
            'category_id' => 3,
            'name' => "Placeholder",
            'address' => "Placeholder",
            'latitude' => -6.522433662551750,
            'longitude' => 106.74939893749700,
        ]);

        Place::create([
            'village_id' => 3,
            'category_id' => 3,
            'name' => "Placeholder",
            'address' => "Placeholder",
            'latitude' => -6.522433662551750,
            'longitude' => 106.74939893749700,
        ]);

        Place::create([
            'village_id' => 4,
            'category_id' => 3,
            'name' => "Placeholder",
            'address' => "Placeholder",
            'latitude' => -6.522433662551750,
            'longitude' => 106.74939893749700,
        ]);

        Place::create([
            'village_id' => 5,
            'category_id' => 3,
            'name' => "Placeholder",
            'address' => "Placeholder",
            'latitude' => -6.522433662551750,
            'longitude' => 106.74939893749700,
        ]);

        Place::create([
            'village_id' => 6,
            'category_id' => 3,
            'name' => "Placeholder",
            'address' => "Placeholder",
            'latitude' => -6.522433662551750,
            'longitude' => 106.74939893749700,
        ]);

        Place::create([
            'village_id' => 7,
            'category_id' => 3,
            'name' => "Placeholder",
            'address' => "Placeholder",
            'latitude' => -6.522433662551750,
            'longitude' => 106.74939893749700,
        ]);

        Place::create([
            'village_id' => 8,
            'category_id' => 3,
            'name' => "Placeholder",
            'address' => "Placeholder",
            'latitude' => -6.522433662551750,
            'longitude' => 106.74939893749700,
        ]);

        Place::create([
            'village_id' => 9,
            'category_id' => 3,
            'name' => "Placeholder",
            'address' => "Placeholder",
            'latitude' => -6.522433662551750,
            'longitude' => 106.74939893749700,
        ]);

        Place::create([
            'village_id' => 1,
            'category_id' => 4,
            'name' => "Placeholder",
            'address' => "Placeholder",
            'latitude' => -6.522433662551750,
            'longitude' => 106.74939893749700,
        ]);

        Place::create([
            'village_id' => 2,
            'category_id' => 4,
            'name' => "Placeholder",
            'address' => "Placeholder",
            'latitude' => -6.522433662551750,
            'longitude' => 106.74939893749700,
        ]);

        Place::create([
            'village_id' => 3,
            'category_id' => 4,
            'name' => "Placeholder",
            'address' => "Placeholder",
            'latitude' => -6.522433662551750,
            'longitude' => 106.74939893749700,
        ]);

        Place::create([
            'village_id' => 4,
            'category_id' => 4,
            'name' => "Placeholder",
            'address' => "Placeholder",
            'latitude' => -6.522433662551750,
            'longitude' => 106.74939893749700,
        ]);

        Place::create([
            'village_id' => 5,
            'category_id' => 4,
            'name' => "Placeholder",
            'address' => "Placeholder",
            'latitude' => -6.522433662551750,
            'longitude' => 106.74939893749700,
        ]);

        Place::create([
            'village_id' => 6,
            'category_id' => 4,
            'name' => "Placeholder",
            'address' => "Placeholder",
            'latitude' => -6.522433662551750,
            'longitude' => 106.74939893749700,
        ]);

        Place::create([
            'village_id' => 7,
            'category_id' => 4,
            'name' => "Placeholder",
            'address' => "Placeholder",
            'latitude' => -6.522433662551750,
            'longitude' => 106.74939893749700,
        ]);

        Place::create([
            'village_id' => 8,
            'category_id' => 4,
            'name' => "Placeholder",
            'address' => "Placeholder",
            'latitude' => -6.522433662551750,
            'longitude' => 106.74939893749700,
        ]);

        Place::create([
            'village_id' => 9,
            'category_id' => 4,
            'name' => "Placeholder",
            'address' => "Placeholder",
            'latitude' => -6.522433662551750,
            'longitude' => 106.74939893749700,
        ]);

        Place::create([
            'village_id' => 1,
            'category_id' => 5,
            'name' => "Placeholder",
            'address' => "Placeholder",
            'latitude' => -6.522433662551750,
            'longitude' => 106.74939893749700,
        ]);

        Place::create([
            'village_id' => 2,
            'category_id' => 5,
            'name' => "Placeholder",
            'address' => "Placeholder",
            'latitude' => -6.522433662551750,
            'longitude' => 106.74939893749700,
        ]);

        Place::create([
            'village_id' => 3,
            'category_id' => 5,
            'name' => "Placeholder",
            'address' => "Placeholder",
            'latitude' => -6.522433662551750,
            'longitude' => 106.74939893749700,
        ]);

        Place::create([
            'village_id' => 4,
            'category_id' => 5,
            'name' => "Placeholder",
            'address' => "Placeholder",
            'latitude' => -6.522433662551750,
            'longitude' => 106.74939893749700,
        ]);

        Place::create([
            'village_id' => 5,
            'category_id' => 5,
            'name' => "Placeholder",
            'address' => "Placeholder",
            'latitude' => -6.522433662551750,
            'longitude' => 106.74939893749700,
        ]);

        Place::create([
            'village_id' => 6,
            'category_id' => 5,
            'name' => "Placeholder",
            'address' => "Placeholder",
            'latitude' => -6.522433662551750,
            'longitude' => 106.74939893749700,
        ]);

        Place::create([
            'village_id' => 7,
            'category_id' => 5,
            'name' => "Placeholder",
            'address' => "Placeholder",
            'latitude' => -6.522433662551750,
            'longitude' => 106.74939893749700,
        ]);

        Place::create([
            'village_id' => 8,
            'category_id' => 5,
            'name' => "Placeholder",
            'address' => "Placeholder",
            'latitude' => -6.522433662551750,
            'longitude' => 106.74939893749700,
        ]);

        Place::create([
            'village_id' => 9,
            'category_id' => 5,
            'name' => "Placeholder",
            'address' => "Placeholder",
            'latitude' => -6.522433662551750,
            'longitude' => 106.74939893749700,
        ]);

        Place::create([
            'village_id' => 1,
            'category_id' => 6,
            'name' => "Placeholder",
            'address' => "Placeholder",
            'latitude' => -6.522433662551750,
            'longitude' => 106.74939893749700,
        ]);

        Place::create([
            'village_id' => 2,
            'category_id' => 6,
            'name' => "Placeholder",
            'address' => "Placeholder",
            'latitude' => -6.522433662551750,
            'longitude' => 106.74939893749700,
        ]);

        Place::create([
            'village_id' => 3,
            'category_id' => 6,
            'name' => "Placeholder",
            'address' => "Placeholder",
            'latitude' => -6.522433662551750,
            'longitude' => 106.74939893749700,
        ]);

        Place::create([
            'village_id' => 4,
            'category_id' => 6,
            'name' => "Placeholder",
            'address' => "Placeholder",
            'latitude' => -6.522433662551750,
            'longitude' => 106.74939893749700,
        ]);

        Place::create([
            'village_id' => 5,
            'category_id' => 6,
            'name' => "Placeholder",
            'address' => "Placeholder",
            'latitude' => -6.522433662551750,
            'longitude' => 106.74939893749700,
        ]);

        Place::create([
            'village_id' => 6,
            'category_id' => 6,
            'name' => "Placeholder",
            'address' => "Placeholder",
            'latitude' => -6.522433662551750,
            'longitude' => 106.74939893749700,
        ]);

        Place::create([
            'village_id' => 7,
            'category_id' => 6,
            'name' => "Placeholder",
            'address' => "Placeholder",
            'latitude' => -6.522433662551750,
            'longitude' => 106.74939893749700,
        ]);

        Place::create([
            'village_id' => 8,
            'category_id' => 6,
            'name' => "Placeholder",
            'address' => "Placeholder",
            'latitude' => -6.522433662551750,
            'longitude' => 106.74939893749700,
        ]);

        Place::create([
            'village_id' => 9,
            'category_id' => 6,
            'name' => "Placeholder",
            'address' => "Placeholder",
            'latitude' => -6.522433662551750,
            'longitude' => 106.74939893749700,
        ]);

        Place::create([
            'village_id' => 1,
            'category_id' => 7,
            'name' => "Placeholder",
            'address' => "Placeholder",
            'latitude' => -6.522433662551750,
            'longitude' => 106.74939893749700,
        ]);

        Place::create([
            'village_id' => 2,
            'category_id' => 7,
            'name' => "Placeholder",
            'address' => "Placeholder",
            'latitude' => -6.522433662551750,
            'longitude' => 106.74939893749700,
        ]);

        Place::create([
            'village_id' => 3,
            'category_id' => 7,
            'name' => "Placeholder",
            'address' => "Placeholder",
            'latitude' => -6.522433662551750,
            'longitude' => 106.74939893749700,
        ]);

        Place::create([
            'village_id' => 4,
            'category_id' => 7,
            'name' => "Placeholder",
            'address' => "Placeholder",
            'latitude' => -6.522433662551750,
            'longitude' => 106.74939893749700,
        ]);

        Place::create([
            'village_id' => 5,
            'category_id' => 7,
            'name' => "Placeholder",
            'address' => "Placeholder",
            'latitude' => -6.522433662551750,
            'longitude' => 106.74939893749700,
        ]);

        Place::create([
            'village_id' => 6,
            'category_id' => 7,
            'name' => "Placeholder",
            'address' => "Placeholder",
            'latitude' => -6.522433662551750,
            'longitude' => 106.74939893749700,
        ]);

        Place::create([
            'village_id' => 7,
            'category_id' => 7,
            'name' => "Placeholder",
            'address' => "Placeholder",
            'latitude' => -6.522433662551750,
            'longitude' => 106.74939893749700,
        ]);

        Place::create([
            'village_id' => 8,
            'category_id' => 7,
            'name' => "Placeholder",
            'address' => "Placeholder",
            'latitude' => -6.522433662551750,
            'longitude' => 106.74939893749700,
        ]);

        Place::create([
            'village_id' => 9,
            'category_id' => 7,
            'name' => "Placeholder",
            'address' => "Placeholder",
            'latitude' => -6.522433662551750,
            'longitude' => 106.74939893749700,
        ]);

        Place::create([
            'village_id' => 1,
            'category_id' => 8,
            'name' => "Placeholder",
            'address' => "Placeholder",
            'latitude' => -6.522433662551750,
            'longitude' => 106.74939893749700,
        ]);

        Place::create([
            'village_id' => 2,
            'category_id' => 8,
            'name' => "Placeholder",
            'address' => "Placeholder",
            'latitude' => -6.522433662551750,
            'longitude' => 106.74939893749700,
        ]);

        Place::create([
            'village_id' => 3,
            'category_id' => 8,
            'name' => "Placeholder",
            'address' => "Placeholder",
            'latitude' => -6.522433662551750,
            'longitude' => 106.74939893749700,
        ]);

        Place::create([
            'village_id' => 4,
            'category_id' => 8,
            'name' => "Placeholder",
            'address' => "Placeholder",
            'latitude' => -6.522433662551750,
            'longitude' => 106.74939893749700,
        ]);

        Place::create([
            'village_id' => 5,
            'category_id' => 8,
            'name' => "Placeholder",
            'address' => "Placeholder",
            'latitude' => -6.522433662551750,
            'longitude' => 106.74939893749700,
        ]);

        Place::create([
            'village_id' => 6,
            'category_id' => 8,
            'name' => "Placeholder",
            'address' => "Placeholder",
            'latitude' => -6.522433662551750,
            'longitude' => 106.74939893749700,
        ]);

        Place::create([
            'village_id' => 7,
            'category_id' => 8,
            'name' => "Placeholder",
            'address' => "Placeholder",
            'latitude' => -6.522433662551750,
            'longitude' => 106.74939893749700,
        ]);

        Place::create([
            'village_id' => 8,
            'category_id' => 8,
            'name' => "Placeholder",
            'address' => "Placeholder",
            'latitude' => -6.522433662551750,
            'longitude' => 106.74939893749700,
        ]);

        Place::create([
            'village_id' => 9,
            'category_id' => 8,
            'name' => "Placeholder",
            'address' => "Placeholder",
            'latitude' => -6.522433662551750,
            'longitude' => 106.74939893749700,
        ]);

        Place::create([
            'village_id' => 1,
            'category_id' => 9,
            'name' => "Placeholder",
            'address' => "Placeholder",
            'latitude' => -6.522433662551750,
            'longitude' => 106.74939893749700,
        ]);

        Place::create([
            'village_id' => 2,
            'category_id' => 9,
            'name' => "Placeholder",
            'address' => "Placeholder",
            'latitude' => -6.522433662551750,
            'longitude' => 106.74939893749700,
        ]);

        Place::create([
            'village_id' => 3,
            'category_id' => 9,
            'name' => "Placeholder",
            'address' => "Placeholder",
            'latitude' => -6.522433662551750,
            'longitude' => 106.74939893749700,
        ]);

        Place::create([
            'village_id' => 4,
            'category_id' => 9,
            'name' => "Placeholder",
            'address' => "Placeholder",
            'latitude' => -6.522433662551750,
            'longitude' => 106.74939893749700,
        ]);

        Place::create([
            'village_id' => 5,
            'category_id' => 9,
            'name' => "Placeholder",
            'address' => "Placeholder",
            'latitude' => -6.522433662551750,
            'longitude' => 106.74939893749700,
        ]);

        Place::create([
            'village_id' => 6,
            'category_id' => 9,
            'name' => "Placeholder",
            'address' => "Placeholder",
            'latitude' => -6.522433662551750,
            'longitude' => 106.74939893749700,
        ]);

        Place::create([
            'village_id' => 7,
            'category_id' => 9,
            'name' => "Placeholder",
            'address' => "Placeholder",
            'latitude' => -6.522433662551750,
            'longitude' => 106.74939893749700,
        ]);

        Place::create([
            'village_id' => 8,
            'category_id' => 9,
            'name' => "Placeholder",
            'address' => "Placeholder",
            'latitude' => -6.522433662551750,
            'longitude' => 106.74939893749700,
        ]);

        Place::create([
            'village_id' => 9,
            'category_id' => 9,
            'name' => "Placeholder",
            'address' => "Placeholder",
            'latitude' => -6.522433662551750,
            'longitude' => 106.74939893749700,
        ]);

        Place::create([
            'village_id' => 1,
            'category_id' => 10,
            'name' => "Placeholder",
            'address' => "Placeholder",
            'latitude' => -6.522433662551750,
            'longitude' => 106.74939893749700,
        ]);

        Place::create([
            'village_id' => 2,
            'category_id' => 10,
            'name' => "Placeholder",
            'address' => "Placeholder",
            'latitude' => -6.522433662551750,
            'longitude' => 106.74939893749700,
        ]);

        Place::create([
            'village_id' => 3,
            'category_id' => 10,
            'name' => "Placeholder",
            'address' => "Placeholder",
            'latitude' => -6.522433662551750,
            'longitude' => 106.74939893749700,
        ]);

        Place::create([
            'village_id' => 4,
            'category_id' => 10,
            'name' => "Placeholder",
            'address' => "Placeholder",
            'latitude' => -6.522433662551750,
            'longitude' => 106.74939893749700,
        ]);

        Place::create([
            'village_id' => 5,
            'category_id' => 10,
            'name' => "Placeholder",
            'address' => "Placeholder",
            'latitude' => -6.522433662551750,
            'longitude' => 106.74939893749700,
        ]);

        Place::create([
            'village_id' => 6,
            'category_id' => 10,
            'name' => "Placeholder",
            'address' => "Placeholder",
            'latitude' => -6.522433662551750,
            'longitude' => 106.74939893749700,
        ]);

        Place::create([
            'village_id' => 7,
            'category_id' => 10,
            'name' => "Placeholder",
            'address' => "Placeholder",
            'latitude' => -6.522433662551750,
            'longitude' => 106.74939893749700,
        ]);

        Place::create([
            'village_id' => 8,
            'category_id' => 10,
            'name' => "Placeholder",
            'address' => "Placeholder",
            'latitude' => -6.522433662551750,
            'longitude' => 106.74939893749700,
        ]);

        Place::create([
            'village_id' => 9,
            'category_id' => 10,
            'name' => "Placeholder",
            'address' => "Placeholder",
            'latitude' => -6.522433662551750,
            'longitude' => 106.74939893749700,
        ]);

        /* Placeholder */

        Place::create([
            'village_id' => 1,
            'category_id' => 7,
            'name' => "Towebaseops",
            'address' => "FQ44+G7, Atang Senjaya, Kec. Kemang, Kabupaten Bogor, Jawa Barat",
            'latitude' => -6.543354976577130,
            'longitude' => 106.75567286910000,
        ]);
        Place::create([
            'village_id' => 1,
            'category_id' => 7,
            'name' => "Frozen Bakso Sony Lampung",
            'address' => "Atang Senjaya, Kec. Kemang, Kabupaten Bogor, Jawa Barat 16310",
            'latitude' => -6.543731824124340,
            'longitude' => 106.75931436283100,
        ]);
        Place::create([
            'village_id' => 1,
            'category_id' => 7,
            'name' => "Torangpu Kopi",
            'address' => "Jl. Salabenda Raya, Atang Senjaya, Kec. Kemang, Kabupaten Bogor, Jawa Barat 16310",
            'latitude' => -6.53434370925701,
            'longitude' => 106.76119706152000,
        ]);
        Place::create([
            'village_id' => 1,
            'category_id' => 7,
            'name' => "Warung Teh Ipit",
            'address' => "FQ87+P53, Jl. Salabenda Raya, Atang Senjaya, Kec. Kemang, Kabupaten Bogor, Jawa Barat 16310",
            'latitude' => -6.532837868407520,
            'longitude' => 106.76303751307300,
        ]);
        Place::create([
            'village_id' => 1,
            'category_id' => 7,
            'name' => "Kopi Pace",
            'address' => "FQ86+9C4, Jl. Salabenda Raya, Bojong, Kec. Kemang, Kabupaten Bogor, Jawa Barat 16310",
            'latitude' => -6.5337342102240100,
            'longitude' => 106.76112488540600,
        ]);
        Place::create([
            'village_id' => 1,
            'category_id' => 7,
            'name' => "PESONA COFFEE",
            'address' => "Kios, Jl. Raya Semplak No.99, Atang Senjaya, Kec. Kemang, Kabupaten Bogor, Jawa Barat 16310",
            'latitude' => -6.545088313590880,
            'longitude' => 106.75997361964300,
        ]);
        Place::create([
            'village_id' => 1,
            'category_id' => 7,
            'name' => "Soto mie Bogor AA mhonix",
            'address' => "FQ36+53F, Jl. Subagiono, Atang Senjaya, Kec. Kemang, Kabupaten Bogor, Jawa Barat 16310",
            'latitude' => -6.546941995957240,
            'longitude' => 106.7601844487900,
        ]);
        Place::create([
            'village_id' => 1,
            'category_id' => 7,
            'name' => "Dapur OKE",
            'address' => "Jalan saurajim gang mustofa Rt.02 Rw.10, Kel. Semplak Kec. Kota, RT.02/RW.10, Semplak, Kec. Bogor Bar., Bogor Barat, Jawa Barat 16114",
            'latitude' => -6.547117867021620,
            'longitude' => 106.76168648977900,
        ]);
        Place::create([
            'village_id' => 1,
            'category_id' => 7,
            'name' => "Jaya Makmur 2",
            'address' => "Ats, Jl. Raya Semplak, Depan Pasar Kapuk No.230, RT.02/RW.10, Semplak Bar., Kec. Kemang, Kabupaten Bogor, Jawa Barat 16310",
            'latitude' => -6.5471285256722500,
            'longitude' => 106.76035074632100,
        ]);
        Place::create([
            'village_id' => 1,
            'category_id' => 7,
            'name' => "Mulya Electronik Service",
            'address' => "RT.02/RW.10, Semplak Bar., Kec. Bogor Bar., Kota Bogor, Jawa Barat 16310",
            'latitude' => -6.547725420763020,
            'longitude' => 106.76180987096400,
        ]);
        Place::create([
            'village_id' => 1,
            'category_id' => 7,
            'name' => "Pepari Leather",
            'address' => "Perumahan Kiara Residence Ruko A2 No.18, Bogor City, West Java 16113",
            'latitude' => -6.548668840031080,
            'longitude' => 106.7640686546660,
        ]);
        Place::create([
            'village_id' => 1,
            'category_id' => 7,
            'name' => "FARAKA STORE",
            'address' => "Jl. Masjid Al Hikmah No.22, RT.02/RW.10, Semplak Bar., Kec. Bogor Bar., Kota Bogor, Jawa Barat 16310",
            'latitude' => -6.548386384561840,
            'longitude' => 106.76082316739200,
        ]);
        Place::create([
            'village_id' => 1,
            'category_id' => 7,
            'name' => "Toko Jaya Makmur",
            'address' => "Jl. Atang Senjaya No.36, Semplak Bar., Kec. Kemang, Kabupaten Bogor, Jawa Barat 16310",
            'latitude' => -6.547234394843400,
            'longitude' => 106.75612214993700,
        ]);
        Place::create([
            'village_id' => 1,
            'category_id' => 7,
            'name' => "BATU NISAN MURAH",
            'address' => "Gg. Puma, Atang Senjaya, Kec. Kemang, Kabupaten Bogor, Jawa Barat 16310",
            'latitude' => -6.539787613189200,
            'longitude' => 106.76379884170100,
        ]);
        Place::create([
            'village_id' => 1,
            'category_id' => 7,
            'name' => "kedai Bom Bom",
            'address' => "Jl. Kayumanis Bondol No.5, Atang Senjaya, Kec. Bogor Bar., Kota Bogor, Jawa Barat 16113",
            'latitude' => -6.540773573467570,
            'longitude' => 106.76179791341500,
        ]);
        Place::create([
            'village_id' => 1,
            'category_id' => 7,
            'name' => "CAS Aki - Angkasa Tehnik CCTV, TV, dll",
            'address' => "blok C.6, Jl. Rusdarmoyo No.1, RT.02/RW.09, Atang Senjaya, Kec. Kemang, Kabupaten Bogor, Jawa Barat 16113",
            'latitude' => -6.535259320766740,
            'longitude' => 106.76400954432000,
        ]);
        Place::create([
            'village_id' => 1,
            'category_id' => 7,
            'name' => "Ries Bakery",
            'address' => "Kios Skatek, Atang Senjaya, Kec. Kemang, Kabupaten Bogor, Jawa Barat 16310",
            'latitude' => -6.534220872354870,
            'longitude' => 106.76115158236600,
        ]);
        Place::create([
            'village_id' => 1,
            'category_id' => 7,
            'name' => "Hamarin Studio's",
            'address' => "Jl. Surajim No.16B, RT.003/RW.005, Atang Senjaya, Kec. Kemang, Kabupaten Bogor, Jawa Barat 16310",
            'latitude' => -6.546876090203840,
            'longitude' => 106.76147957007500,
        ]);
        Place::create([
            'village_id' => 1,
            'category_id' => 7,
            'name' => "Mitra Variasi",
            'address' => "Jl. Raya Semplak No.02, RT.02/RW.10, Atang Senjaya, Kec. Kemang, Kabupaten Bogor, Jawa Barat 16310",
            'latitude' => -6.545903604660480,
            'longitude' => 106.76043303543200,
        ]);
        Place::create([
            'village_id' => 1,
            'category_id' => 7,
            'name' => "Toko Alat Jahit YULIANA",
            'address' => "Pasar Kapuk, jalan Raya Semplak, Kemang Bogor, Jawa Barat 16310, Atang Senjaya, Kec. Kemang, Kabupaten Bogor, Jawa Barat 16310",
            'latitude' => -6.546052225703470,
            'longitude' => 106.76013731597500,
        ]);
        Place::create([
            'village_id' => 1,
            'category_id' => 7,
            'name' => "ATS Gordyn",
            'address' => "JL Letkol ATS Pasar Kapuk, No. 89, Atang Sanjaya, Atang Senjaya, Kec. Kemang, Kabupaten Bogor, Jawa Barat 16310",
            'latitude' => -6.545266336175410,
            'longitude' => 106.7602234381090,
        ]);
        Place::create([
            'village_id' => 1,
            'category_id' => 7,
            'name' => "DeaAmelia food",
            'address' => "Kp.bulak, RT.03/RW.01, Kota Bogor, Jawa Barat",
            'latitude' => -6.546196549608770,
            'longitude' => 106.76291727410800,
        ]);
        Place::create([
            'village_id' => 1,
            'category_id' => 7,
            'name' => "GALERI IKAN PREDATOR BOGOR",
            'address' => "Jl. Subagiono No.1, RT.05/RW.2, Atang Senjaya, Kec. Kemang, Kota Bogor, Jawa Barat 16310",
            'latitude' => -6.546075341012650,
            'longitude' => 106.7599177030980,
        ]);
        Place::create([
            'village_id' => 1,
            'category_id' => 7,
            'name' => "WARFE BOGOR",
            'address' => "Jalan Raya Semplak Ruko Primkopau, RW.Skadron 8, Atang Senjaya, Kec. Kemang, Kota Bogor, Jawa Barat 16310",
            'latitude' => -6.540466163893060,
            'longitude' => 106.76047846940900,
        ]);
        Place::create([
            'village_id' => 1,
            'category_id' => 7,
            'name' => "Mie Kopral Bogor",
            'address' => "Jl. Kp. God No.2, RT.02/RW.09, Atang Senjaya, Kec. Kemang, Kabupaten Bogor, Jawa Barat 16113",
            'latitude' => -6.535367194766660,
            'longitude' => 106.76419489572000,
        ]);
        Place::create([
            'village_id' => 2,
            'category_id' => 7,
            'name' => "Mie ayam pak Dani",
            'address' => "FQ73+46C, Bojong, Kec. Kemang, Kabupaten Bogor, Jawa Barat 16310",
            'latitude' => -6.537064644889290,
            'longitude' => 106.75301931254500,
        ]);
        Place::create([
            'village_id' => 2,
            'category_id' => 7,
            'name' => "BellbyQuee - Soniariestiani",
            'address' => "FQ62+W9R, Bojong, Kec. Kemang, Kabupaten Bogor, Jawa Barat 16310",
            'latitude' => -6.53749100767509,
            'longitude' => 106.75085745298700,
        ]);
        Place::create([
            'village_id' => 2,
            'category_id' => 7,
            'name' => "Taruna tani sub.unit ikan lele(briding). Bhakti taruna Bojong kidul",
            'address' => "Jl. Raya Bojong No.24, RT.01/RW.3, Bojong, Kec. Kemang, Kabupaten Bogor, Jawa Barat 16310",
            'latitude' => -6.538253130804160,
            'longitude' => 106.75066433338800,
        ]);
        Place::create([
            'village_id' => 2,
            'category_id' => 7,
            'name' => "Bobbyaquascape",
            'address' => "FP6X+PX9, Bojong, Kec. Kemang, Kabupaten Bogor, Jawa Barat 16310",
            'latitude' => -6.538109233595740,
            'longitude' => 106.74994550153300,
        ]);
        Place::create([
            'village_id' => 2,
            'category_id' => 7,
            'name' => "PT Berlys Choco Indonesia",
            'address' => "FP6X+QRJ, Bojong, Kec. Kemang, Kabupaten Bogor, Jawa Barat 16310",
            'latitude' => -6.537912040868780,
            'longitude' => 106.74943051733100,
        ]);
        Place::create([
            'village_id' => 2,
            'category_id' => 7,
            'name' => "Pangkas rambut si kembar",
            'address' => "Jl. Raya Bojong, Bojong, Kec. Kemang, Kabupaten Bogor, Jawa Barat 16310",
            'latitude' => -6.537612144462890,
            'longitude' => 106.74761390391200,
        ]);
        Place::create([
            'village_id' => 2,
            'category_id' => 7,
            'name' => "TOKO KUE KITA",
            'address' => "FP7X+87R, Jl. Curug Mekar, RT.04/RW.06, Curugmekar, Kec. Bogor Bar., Kota Bogor, Jawa Barat 16113",
            'latitude' => -6.536579062314390,
            'longitude' => 106.7481689119120,
        ]);
        Place::create([
            'village_id' => 2,
            'category_id' => 7,
            'name' => "Waroeng kampoeng",
            'address' => "Jl. Raya Bojong, Bojong, Kec. Kemang, Kabupaten Bogor, Jawa Barat 16310",
            'latitude' => -6.53700370369539,
            'longitude' => 106.74816572251700,
        ]);
        Place::create([
            'village_id' => 2,
            'category_id' => 7,
            'name' => "RDR MOTOR",
            'address' => "Kp.bojong kidul Rt.02 Rw.03 no.84 dsa, Bojong, Kec. Kemang, Kabupaten Bogor, Jawa Barat 16310",
            'latitude' => -6.53623998286713,
            'longitude' => 106.74908754648600,
        ]);
        Place::create([
            'village_id' => 2,
            'category_id' => 7,
            'name' => "Kios Pupuk Ragusta",
            'address' => "Bojong, Kec. Kemang, Kabupaten Bogor, Jawa Barat 16310",
            'latitude' => -6.53632002306843,
            'longitude' => 106.74781880482900,
        ]);
        Place::create([
            'village_id' => 2,
            'category_id' => 7,
            'name' => "KIOS UNGGAS LUMBUNG KEMANG",
            'address' => "FP8X+X8H, Jl. Raya Lumbung, Bojong, Kec. Kemang, Kabupaten Bogor, Jawa Barat 16310",
            'latitude' => -6.532435248915880,
            'longitude' => 106.74834567985100,
        ]);
        Place::create([
            'village_id' => 2,
            'category_id' => 7,
            'name' => "MARTABAK AL'BAROKAH BOJONG PERAPATAN",
            'address' => "FP9X+9C2, Bojong, Kec. Kemang, Kabupaten Bogor, Jawa Barat 16310",
            'latitude' => -6.531549085483920,
            'longitude' => 106.74852482869200,
        ]);
        Place::create([
            'village_id' => 2,
            'category_id' => 7,
            'name' => "Jelly Potter Bojong Kemang",
            'address' => "Jl. Raya Bojong No.16-20, Bojong, Kec. Kemang, Kabupaten Bogor, Jawa Barat 16310",
            'latitude' => -6.530191146432630,
            'longitude' => 106.7480602041980,
        ]);
        Place::create([
            'village_id' => 2,
            'category_id' => 7,
            'name' => "Petex wedding decoration",
            'address' => "Desa Jl. Bojong Kaum, RT.001/RW.001, Bojong, Kec. Kemang, Kabupaten Bogor, Jawa Barat 16310",
            'latitude' => -6.5295771587955800,
            'longitude' => 106.74947212164200,
        ]);
        Place::create([
            'village_id' => 2,
            'category_id' => 7,
            'name' => "Betta Baragazul",
            'address' => "FQF3+XF2, Jl. Raya Kp. Sawah, Bojong, Kec. Kemang, Kabupaten Bogor, Jawa Barat 16310",
            'latitude' => -6.525068663163960,
            'longitude' => 106.753657634927,
        ]);
        Place::create([
            'village_id' => 2,
            'category_id' => 7,
            'name' => "RAGA KOMPUTER",
            'address' => "Perumahan Ning's Kemang Regency Blok E3-19, Kemang, Kec. Kemang, Kabupaten Bogor, Jawa Barat 16310",
            'latitude' => -6.5238817462119700,
            'longitude' => 106.74946574873800,
        ]);
        Place::create([
            'village_id' => 2,
            'category_id' => 7,
            'name' => "ALIN BONSAI",
            'address' => "Jl. Kp. Bojong Hilir Desa, RT.01/RW.09, Bojong, Kec. Kemang, Kabupaten Bogor, Jawa Barat 16310",
            'latitude' => -6.524199275070220,
            'longitude' => 106.7477192003370,
        ]);
        Place::create([
            'village_id' => 2,
            'category_id' => 7,
            'name' => "Al Fatih Steam ( Jenggot )",
            'address' => "Jl. Raya Kp. Sawah, Bojong, Kec. Kemang, Kabupaten Bogor, Jawa Barat 16310",
            'latitude' => -6.52575635652154,
            'longitude' => 106.75219571836700,
        ]);
        Place::create([
            'village_id' => 2,
            'category_id' => 7,
            'name' => "Cireng Sehat Id Bogor ( Cirseh Id )",
            'address' => "Ning's Kemang Bogor B5 no 7, Kabupaten Bogor, Jawa Barat",
            'latitude' => -6.522662839109370,
            'longitude' => 106.74984954805300,
        ]);
        Place::create([
            'village_id' => 2,
            'category_id' => 7,
            'name' => "Dimsum Kim Kim",
            'address' => "Nings Kemang Regency Blok C1 no 14, Kemang, Bogor Regency, West Java 16310",
            'latitude' => -6.522433662551750,
            'longitude' => 106.74939893749700,
        ]);
    }
}

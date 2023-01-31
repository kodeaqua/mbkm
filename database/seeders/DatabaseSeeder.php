<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\Category;
use App\Models\Village;
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
        ]);

        Category::create([
            'name' => 'Cafe',
        ]);

        Category::create([
            'name' => 'Clothing',
        ]);

        Category::create([
            'name' => 'Health',
        ]);

        Category::create([
            'name' => 'Hotel',
        ]);

        Category::create([
            'name' => 'Industry',
        ]);

        Category::create([
            'name' => 'Law Enforcement',
        ]);

        Category::create([
            'name' => 'Micro Economy',
        ]);

        Category::create([
            'name' => 'Public Service',
        ]);

        Category::create([
            'name' => 'Restaurant',
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
    }
}

<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Listing;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory(5)->create();

        Listing::factory(5)->create();

        // Listing::create([
        //     'title' => 'laravel Senior Developer',
        //     'tags' => 'laravel, javascript',
        //     'company' => 'Acme Crop',
        //     'location' => 'Boston, MA',
        //     'email' => 'email@gmail.com',
        //     'website' => 'https://www.acme.com',
        //     'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo facere enim, soluta odio porro nam. Odio qui ipsa consequatur hic sit! Dolorum eaque aliquam ratione natus esse itaque consectetur alias.',
        // ]);
        // Listing::create([
        //     'title' => 'laravel Junior Developer',
        //     'tags' => 'laravel, javascript',
        //     'company' => 'Acme Crop',
        //     'location' => 'Boston, MA',
        //     'email' => 'email@gmail.com',
        //     'website' => 'https://www.acme.com',
        //     'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo facere enim, soluta odio porro nam. Odio qui ipsa consequatur hic sit! Dolorum eaque aliquam ratione natus esse itaque consectetur alias.',
        // ]);

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}

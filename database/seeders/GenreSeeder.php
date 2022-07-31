<?php

namespace Database\Seeders;

use App\Models\Genre;
use Illuminate\Database\Seeder;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Genre::create([
            'name' => 'Drama',
        ]);
        Genre::create([
            'name' => 'Kids',
        ]);
        Genre::create([
            'name' => 'TV Show',
        ]);
    }
}

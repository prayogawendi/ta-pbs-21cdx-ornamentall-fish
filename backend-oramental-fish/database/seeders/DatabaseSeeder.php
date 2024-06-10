<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        DB::table('fish')->insert([
            [
                'nama_latin' => 'Poecilia reticulata',  // Add Latin name
                'nama_ikan' => 'Ikan Cupang',
                'jenis' => 'Livebearer',  // Add fish type
                'ukuran' => '1.5-3 inches',
                'img' => 'public/img/guppy.jpg',
                'habitat' => 'Native to South America, typically found in slow-moving streams and pools.',  // Add habitat information
                'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
            ],
            [
                'nama_latin' => 'Paracheirodon innesi',  // Add Latin name
                'nama_ikan' => 'Tetra Neon',
                'jenis' => 'Schooling',  // Add fish type
                'ukuran' => '0.6-1 inch',
                'img' => 'public/img/neon-tetra.jpg',
                'habitat' => 'Native to South America, typically found in blackwater streams and rivers.',  // Add habitat information
                'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
            ],
            [
                'nama_latin' => 'Xiphophorus maculatus',  // Add Latin name
                'nama_ikan' => 'Ikan Platy',
                'jenis' => 'Livebearer',  // Add fish type
                'ukuran' => '1.5-3 inches',
                'img' => 'public/img/platy.jpg',
                'habitat' => 'Native to Mexico and Central America, typically found in slow-moving streams and ponds.',  // Add habitat information
                'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
            ]
    ]);
    }
}

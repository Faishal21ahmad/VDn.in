<?php

namespace Database\Seeders;


use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        DB::statement('PRAGMA foreign_keys=off;');

        // Jalankan seeding
        $this->call([
            UserSeeder::class,
            PlaylistSeeder::class,
            VideoSeeder::class,
            CatatSeeder::class,
        ]);
        
        DB::statement('PRAGMA foreign_keys=on;');
        
    }
}

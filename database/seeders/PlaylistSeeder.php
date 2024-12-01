<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PlaylistSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach (range(1, 4) as $userId) {
            DB::table('playlists')->insert([
                [
                    'nameplaylist' => 'Laravel',
                    'user_id' => $userId,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'nameplaylist' => 'ReactJS',
                    'user_id' => $userId,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'nameplaylist' => 'Kubernetes',
                    'user_id' => $userId,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'nameplaylist' => 'TailwindCSS',
                    'user_id' => $userId,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'nameplaylist' => 'Webpack',
                    'user_id' => $userId,
                    'created_at' => now(),
                    'updated_at' => now(),
                ]
            ]);
        }
    }
}

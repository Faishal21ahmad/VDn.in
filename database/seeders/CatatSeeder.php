<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CatatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $catatText = 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolorem, maxime earum amet deleniti quis ipsum ut similique quas veniam ratione quam nisi saepe excepturi suscipit obcaecati minima numquam a ullam error repellendus consectetur eaque? Accusamus earum, recusandae ut maxime nemo hic tempore reiciendis, tempora eius soluta nihil eaque adipisci quo.';
        
        for ($i = 0; $i < 3000; $i++) {
            DB::table('catats')->insert([
                'timevid' => rand(200, 5000),  // Interval acak antara 200 dan 4000
                'catat' => $catatText,  // Biarkan tetap
                'video_id' => rand(1, 284),  // video_id acak antara 1 dan 284
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }

        // DB::table('catats')->insert([
        //     'timevid' => '200',
        //     'catat' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolorem, maxime earum amet deleniti quis ipsum ut similique quas veniam ratione quam nisi saepe excepturi suscipit obcaecati minima numquam a ullam error repellendus consectetur eaque? Accusamus earum, recusandae ut maxime nemo hic tempore reiciendis, tempora eius soluta nihil eaque adipisci quo.',
        //     'video_id' => 1,
        //     'created_at' => now(),
        //     'updated_at' => now(),
        // ]);
        // DB::table('catats')->insert([
        //     'timevid' => '250',
        //     'catat' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolorem, maxime earum amet deleniti quis ipsum ut similique quas veniam ratione quam nisi saepe excepturi suscipit obcaecati minima numquam a ullam error repellendus consectetur eaque? Accusamus earum, recusandae ut maxime nemo hic tempore reiciendis, tempora eius soluta nihil eaque adipisci quo.',
        //     'video_id' => 1,
        //     'created_at' => now(),
        //     'updated_at' => now(),
        // ]);
        // DB::table('catats')->insert([
        //     'timevid' => '400',
        //     'catat' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolorem, maxime earum amet deleniti quis ipsum ut similique quas veniam ratione quam nisi saepe excepturi suscipit obcaecati minima numquam a ullam error repellendus consectetur eaque? Accusamus earum, recusandae ut maxime nemo hic tempore reiciendis, tempora eius soluta nihil eaque adipisci quo.',
        //     'video_id' => 1,
        //     'created_at' => now(),
        //     'updated_at' => now(),
        // ]);
        // DB::table('catats')->insert([
        //     'timevid' => '200',
        //     'catat' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolorem, maxime earum amet deleniti quis ipsum ut similique quas veniam ratione quam nisi saepe excepturi suscipit obcaecati minima numquam a ullam error repellendus consectetur eaque? Accusamus earum, recusandae ut maxime nemo hic tempore reiciendis, tempora eius soluta nihil eaque adipisci quo.',
        //     'video_id' => 2,
        //     'created_at' => now(),
        //     'updated_at' => now(),
        // ]);
        // DB::table('catats')->insert([
        //     'timevid' => '250',
        //     'catat' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolorem, maxime earum amet deleniti quis ipsum ut similique quas veniam ratione quam nisi saepe excepturi suscipit obcaecati minima numquam a ullam error repellendus consectetur eaque? Accusamus earum, recusandae ut maxime nemo hic tempore reiciendis, tempora eius soluta nihil eaque adipisci quo.',
        //     'video_id' => 2,
        //     'created_at' => now(),
        //     'updated_at' => now(),
        // ]);
        // DB::table('catats')->insert([
        //     'timevid' => '400',
        //     'catat' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolorem, maxime earum amet deleniti quis ipsum ut similique quas veniam ratione quam nisi saepe excepturi suscipit obcaecati minima numquam a ullam error repellendus consectetur eaque? Accusamus earum, recusandae ut maxime nemo hic tempore reiciendis, tempora eius soluta nihil eaque adipisci quo.',
        //     'video_id' => 2,
        //     'created_at' => now(),
        //     'updated_at' => now(),
        // ]);
    }
}

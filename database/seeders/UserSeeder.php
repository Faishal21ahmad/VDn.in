<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => 'ishalahmad',
            'email' => 'ishal@gmail.com',
            'motivasi' => 'Belajar adalah Investasi Masa Depan
Setiap usaha yang kamu lakukan hari ini akan menjadi bekal berharga di masa depan. Ketika kamu belajar, kamu sedang menyiapkan dirimu untuk peluang yang lebih besar dan tantangan yang lebih kompleks. Ingatlah, ilmu adalah sesuatu yang tidak bisa dicuri, tapi bisa terus bertambah. Jangan takut gagal, karena setiap kesalahan adalah bagian dari proses menuju keberhasilan.',
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
            'remember_token' => Str()->random(10),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('users')->insert([
            'name' => 'Ahmad',
            'email' => 'ahmad@gmail.com',
            'motivasi' => 'Ilmu adalah Kunci Kebebasan
Dengan belajar, kamu membuka pintu ke dunia yang lebih luas. Ilmu memberikan kebebasan untuk berpikir kritis, membuat keputusan, dan menciptakan perubahan. Jangan biarkan rasa malas menghentikan langkahmu. Tanamkan dalam hati bahwa setiap usaha kecil akan membawa perubahan besar dalam hidupmu.',
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
            'remember_token' => Str()->random(10),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('users')->insert([
            'name' => 'Freyana',
            'email' => 'freya@gmail.com',
            'motivasi' => 'Sukses Dimulai dari Proses Kecil
Belajar mungkin terasa sulit atau membosankan saat ini, tetapi hasilnya akan terasa manis nanti. Kesuksesan besar tidak datang dengan instan; itu dibangun dari langkah-langkah kecil yang konsisten. Mulailah dari hal-hal sederhana, dan nikmati prosesnya. Jangan menyerah, karena usaha hari ini adalah pondasi kesuksesan esok.',
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
            'remember_token' => Str()->random(10),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('users')->insert([
            'name' => 'Nisa',
            'email' => 'nisa@gmail.com',
            'motivasi' => 'Belajar Membuka Peluang Tanpa Batas
Setiap pengetahuan baru yang kamu pelajari adalah pintu menuju peluang yang belum pernah kamu bayangkan. Dunia terus berkembang, dan hanya mereka yang terus belajar yang mampu bertahan dan bersaing. Jadilah orang yang haus ilmu, karena kesempatan akan menghampiri mereka yang siap.',
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
            'remember_token' => Str()->random(10),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}

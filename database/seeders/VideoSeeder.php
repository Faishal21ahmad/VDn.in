<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VideoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Daftar data video yang akan diinsert
        $videos = [
            ['T1TR-RGf2Pw', 'Belajar Laravel 11 | 1. Intro', 1, 1],
            ['nW60yGRoUrs', 'Belajar Laravel 11 | 2. Instalasi & Konfigurasi', 1, 1],
            ['x55ndgkD2QI', 'Belajar Laravel 11 | 3. Struktur Folder', 1, 1],
            ['vDx6VA-6a6Y', 'Belajar Laravel 11 | 4. Blade Templating Engine', 1, 1],
            ['00o1vJYTp4I', 'Belajar Laravel 11 | 5. Blade Component', 1, 1],
            ['76YsC4EjGE4', 'Belajar Laravel 11 | 6. View Data', 1, 1],
            ['dzjBbvKjbaQ', 'Belajar Laravel 11 | 7. Model', 1, 1],
            ['eghZY9-3Wko', 'Belajar Laravel 11 | 8. Database & Migration', 1, 1],
            ['dW3-33iMYkk', 'Belajar Laravel 11 | 9. Eloquent ORM & Post Model', 1, 1],
            ['1wWXyO4iuBA', 'Belajar Laravel 11 | 10. Model Factories', 1, 1],
            ['S2eh1VnHu40', 'Belajar Laravel 11 | 11. Eloquent Relationship', 1, 1],
            ['jineNX34OYE', 'Belajar Laravel 11 | 12. Post Category', 1, 1],
            ['rAv8C0Nf9uk', 'Belajar Laravel 11 | 13. Database Seeder', 1, 1],
            ['K2p6Mtz5P20', 'Belajar Laravel 11 | 14. N + 1 Problem', 1, 1],
            ['uVRN9DzUAU8', 'Belajar Laravel 11 | 15. Redesign UI', 1, 1],
            ['8hhaAsRFAJs', 'Belajar Laravel 11 | 16. Searching', 1, 1],
            ['HP3CdxX9oak', 'Belajar Laravel 11 | 17. Pagination', 1, 1],
            ['kcnwI_5nKyA', 'Tutorial REACT "Paling Masuk Akal" untuk PEMULA 🤩🌐', 1, 2],
            ['RVH_5L5Lsp0', '#2 Instalasi & Konfigurasi React | Tutorial REACT "Paling Masuk Akal" untuk PEMULA 🤩🌐', 1, 2],
            ['Ji8lAuohopk', '#3 Membuat Game TIC TAC TOE | Tutorial REACT "Paling Masuk Akal" untuk PEMULA 🤩🌐', 1, 2],
            ['HX2kAHnCEjY', '#4 Membuat App CATATAN BELANJA | Tutorial REACT "Paling Masuk Akal" untuk PEMULA 🤩🌐', 1, 2],
            ['-9Z9a91vTLc', '#5 Semua Tentang COMPONENT | Tutorial REACT "Paling Masuk Akal" untuk PEMULA 🤩🌐', 1, 2],
            ['DgkOjJf5M6I', 'Belajar Kubernetes - 1 Sebelum Belajar Kubernetes', 1, 3],
            ['58BtdUq-4QU', 'Belajar Kubernetes - 2 Pengenalan Kubernetes', 1, 3],
            ['LcJi3WCR_T8', 'Belajar Kubernetes - 3 Arsitektur Kubernetes', 1, 3],
            ['jfaiUr5Yt9E', 'Belajar Kubernetes - 4 Menginstall Kubernetes di Local', 1, 3],
            ['oXEvDoyzqY8', 'Belajar Kubernetes - 5 Node', 1, 3],
            ['-wkpFv3VxFs', 'Belajar Kubernetes - 6 Pod', 1, 3],
            ['X-8Wx84RQ8g', 'Belajar Kubernetes - 7 Membuat Pod', 1, 3],
            ['SXAhFp2-8oY', 'Belajar Kubernetes - 8 Label', 1, 3],
            ['vTkRKv8FSic', 'Belajar Kubernetes - 9 Annotation', 1, 3],
            ['PxOe_gaOUdw', 'Belajar Kubernetes - 10 Namespace', 1, 3],
            ['0AU07yRm0ls', 'Belajar Kubernetes - 11 Membuat Namespace', 1, 3],
            ['bXTizhUJ1NQ', 'Belajar Kubernetes - 12 Menghapus Pod', 1, 3],
            ['rGzcFfQNaCQ', 'Belajar Kubernetes - 13 Probe', 1, 3],
            ['TI0UnmdrGYw', 'Belajar Kubernetes - 14 Replication Controller', 1, 3],
            ['zZehGxASOs8', 'Belajar Kubernetes - 15 Membuat Replication Controller', 1, 3],
            ['Ma2yqkRYlow', 'Belajar Kubernetes - 16 Menghapus Replication Controller', 1, 3],
            ['yvZvRHO92Vs', 'Belajar Kubernetes - 17 Replica Set', 1, 3],
            ['d3UhLfV97hA', 'Belajar Kubernetes - 18 Label Selector Match Expression', 1, 3],
            ['v7f5zN2tXYk', 'Belajar Kubernetes - 19 Upgrade Minikube', 1, 3],
            ['hLWYSicY-wc', 'Belajar Kubernetes - 20 Daemon Set', 1, 3],
            ['5dhQYUUClW0', 'Belajar Kubernetes - 21 Job', 1, 3],
            ['whgHflcc2KM', 'Belajar Kubernetes - 22 Cron Job', 1, 3],
            ['KAxDyOUlv9M', 'Belajar Kubernetes - 23 Node Selector', 1, 3],
            ['e7wz456nNP4', 'Belajar Kubernetes - 24 All', 1, 3],
            ['pG_5jdKn0lI', 'Belajar Kubernetes - 25 Service', 1, 3],
            ['AJL3pEXZ1yQ', 'Belajar Kubernetes - 26 Membuat Service', 1, 3],
            ['JG7qYCcpzGo', 'Belajar Kubernetes - 27 Mengakses Service', 1, 3],
            ['IOX2stxBw7k', 'Belajar Kubernetes - 28 Eksternal Service', 1, 3],
            ['zbx0AY-gGPw', 'Belajar Kubernetes - 29 Mengekspos Service', 1, 3],
            ['SZQtVSBuff4', 'Belajar Kubernetes - 30 Service Node Port', 1, 3],
            ['zYFvp0_8q0o', 'Belajar Kubernetes - 31 Service Load Balancer', 1, 3],
            ['8Xans2UrL4A', 'Belajar Kubernetes - 32 Ingress', 1, 3],
            ['p3SM9y7teic', 'Belajar Kubernetes - 33 Multi Container Pod', 1, 3],
            ['1IJxkOPtJAg', 'Belajar Kubernetes - 34 Volume', 1, 3],
            ['Bxlrha4ZHp4', 'Belajar Kubernetes - 35 Sharing Volume', 1, 3],
            ['XQHPmRkRrBs', 'Belajar Kubernetes - 36 Environment Variable', 1, 3],
            ['tAqRLna15JI', 'Belajar Kubernetes - 37 ConfigMap', 1, 3],
            ['spg_Ac3A0Ro', 'Belajar Kubernetes - 38 Secret', 1, 3],
            ['g5ZF1XMgS7E', 'Belajar Kubernetes - 39 Downward API', 1, 3],
            ['4wSAlDrb_pg', 'Belajar Kubernetes - 40 Manage Kubernetes Object', 1, 3],
            ['JSriEH8U7RU', 'Belajar Kubernetes - 41 Deployment', 1, 3],
            ['T_aRq2ELO3s', 'Belajar Kubernetes - 42 Update Deployment', 1, 3],
            ['diz011Ykqc4', 'Belajar Kubernetes - 43 Rollback Deployment', 1, 3],
            ['BNWFtS1xnKc', 'Belajar Kubernetes - 44 Persistent Volume', 1, 3],
            ['AXNKEOI1rhg', 'Belajar Kubernetes - 45 StatefulSet', 1, 3],
            ['NWr7_BggPCA', 'Belajar Kubernetes - 46 Membuat StatefulSet', 1, 3],
            ['JW3Y_m4KKu4', 'Belajar Kubernetes - 47 Kubernetes Dashboard', 1, 3],
            ['HB4L8MghaWw', 'Belajar Kubernetes - 48 Computational Resources', 1, 3],
            ['NHpoc6z_-mA', 'Belajar Kubernetes - 49 Horizontal Pod Autoscaler', 1, 3],
            ['bWxIpYMGOl8', 'Belajar Kubernetes - 50 Materi Selanjutnya', 1, 3],
            ['z3slaXqmkT0', '1. Apa itu Tailwind CSS? | Belajar Tailwind CSS', 1, 4],
            ['ELCr9MyRTH8', '2. Kenapa Tailwind CSS? | Belajar Tailwind CSS', 1, 4],
            ['_lgltVQ3Lvo', '3. Instalasi & Konfigurasi Tailwind CSS | Belajar Tailwind CSS', 1, 4],
            ['_38OWbFYYh4', '4. Basic Utility - Bagian 1 | Belajar Tailwind CSS', 1, 4],
            ['TjYp6n5xCv0', '5. Basic Utility - Bagian 2 | Belajar Tailwind CSS', 1, 4],
            ['LR5ewsc0y58', '6. Pseudo-class & Dark Mode | Belajar Tailwind CSS', 1, 4],
            ['BpZVHDeqTOg', '7. Transform, Transition, Animation | Belajar Tailwind CSS', 1, 4],
            ['Hq0M3zUlegE', '8. Layouting | Belajar Tailwind CSS', 1, 4],
            ['Dm02bG6ivv4', '9. Responsive Design | Belajar Tailwind CSS', 1, 4],
            ['tZV_Ax9TyUY', '10. Flexbox | Belajar Tailwind CSS', 1, 4],
            ['Eglxw06BZp0', '11. Grid | Belajar Tailwind CSS', 1, 4],
            ['nEVcCxVeAKA', '12. Functions & Directives | Belajar Tailwind CSS', 1, 4],
            ['8Ea4oq8qFtM', 'Membuat Website Portfolio Menggunakan TAILWIND CSS 3 | NGOBAR #32', 1, 4],
            ['k51PlNVTuAo', 'Menambahkan DARK MODE pada Website Portfolio Menggunakan TAILWIND CSS 3 | NGOBAR #33', 1, 4],
            ['hjYcz0p1Pkw', 'Fitur Baru di Tailwind CSS 3.1 🔥', 1, 4],
            ['YwClq14cvX0', '1. Javascript Module System | Belajar Webpack', 1, 5],
            ['zwzzn8-fCJ8', '2. Apa Itu Webpack? | Belajar Webpack', 1, 5],
            ['5YBd3857aeM', '3. Webpack Custom Configuration | Belajar Webpack', 1, 5],
            ['e403lyq0SJ8', '4. Loaders | Belajar Webpack', 1, 5],
            ['_C81XqJxhQo', '5. Cache, Plugins & Tools | Belajar Webpack', 1, 5],
            ['kFJ3akv5E7M', '6. Assets Management | Belajar Webpack', 1, 5],
            ['SnV8GSitGVs', '7. Code Splitting | Belajar Webpack', 1, 5],
            ['-8YSondsi8s', '8. Minimizer | Belajar Webpack', 1, 5],
        
        ];
        // Looping data dan insert ke database dengan user_id bervariasi
        
        foreach (range(1, 4) as $userId) {
            foreach ($videos as $index => $video) {
                $playlistId = $video[3]; // Nilai awal dari array[3]
        
                // Modifikasi playlist_id untuk user_id >= 2
                if ($userId > 1) {
                    $playlistId = (($userId - 2) * 5) + (($video[3] - 1) % 5) + 6;
                }
        
                DB::table('videos')->insert([
                    'codevideo' => $video[0],
                    'namevideo' => $video[1],
                    'user_id' => $userId,
                    'playlist_id' => $playlistId, // Playlist ID yang telah dimodifikasi
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
            }
        }
        

        // DB::table('videos')->insert([
        //     'codevideo' => 'T1TR-RGf2Pw',
        //     'namevideo' => 'Belajar Laravel 11 | 1. Intro',
        //     'user_id' => 1,
        //     'playlist_id' => 1,
        //     'created_at' => now(),
        //     'updated_at' => now(),
        // ]);
        // DB::table('videos')->insert([
        //     'codevideo' => 'nW60yGRoUrs',
        //     'namevideo' => 'Belajar Laravel 11 | 2. Instalasi & Konfigurasi',
        //     'user_id' => 1,
        //     'playlist_id' => 1,
        //     'created_at' => now(),
        //     'updated_at' => now(),
        // ]);
        // DB::table('videos')->insert([
        //     'codevideo' => 'x55ndgkD2QI',
        //     'namevideo' => 'Belajar Laravel 11 | 3. Struktur Folder',
        //     'user_id' => 1,
        //     'playlist_id' => 1,
        //     'created_at' => now(),
        //     'updated_at' => now(),
        // ]);
        // DB::table('videos')->insert([
        //     'codevideo' => 'vDx6VA-6a6Y',
        //     'namevideo' => 'Belajar Laravel 11 | 4. Blade Templating Engine',
        //     'user_id' => 1,
        //     'playlist_id' => 1,
        //     'created_at' => now(),
        //     'updated_at' => now(),
        // ]);
        // DB::table('videos')->insert([
        //     'codevideo' => '00o1vJYTp4I',
        //     'namevideo' => 'Belajar Laravel 11 | 5. Blade Component',
        //     'user_id' => 1,
        //     'playlist_id' => 1,
        //     'created_at' => now(),
        //     'updated_at' => now(),
        // ]);
        // DB::table('videos')->insert([
        //     'codevideo' => '76YsC4EjGE4',
        //     'namevideo' => 'Belajar Laravel 11 | 6. View Data',
        //     'user_id' => 1,
        //     'playlist_id' => 1,
        //     'created_at' => now(),
        //     'updated_at' => now(),
        // ]);
        // DB::table('videos')->insert([
        //     'codevideo' => 'dzjBbvKjbaQ',
        //     'namevideo' => 'Belajar Laravel 11 | 7. Model',
        //     'user_id' => 1,
        //     'playlist_id' => 1,
        //     'created_at' => now(),
        //     'updated_at' => now(),
        // ]);
        // DB::table('videos')->insert([
        //     'codevideo' => 'eghZY9-3Wko',
        //     'namevideo' => 'Belajar Laravel 11 | 8. Database & Migration',
        //     'user_id' => 1,
        //     'playlist_id' => 1,
        //     'created_at' => now(),
        //     'updated_at' => now(),
        // ]);
        // DB::table('videos')->insert([
        //     'codevideo' => 'dW3-33iMYkk',
        //     'namevideo' => 'Belajar Laravel 11 | 9. Eloquent ORM & Post Model',
        //     'user_id' => 1,
        //     'playlist_id' => 1,
        //     'created_at' => now(),
        //     'updated_at' => now(),
        // ]);
        // DB::table('videos')->insert([
        //     'codevideo' => '1wWXyO4iuBA',
        //     'namevideo' => 'Belajar Laravel 11 | 10. Model Factories',
        //     'user_id' => 1,
        //     'playlist_id' => 1,
        //     'created_at' => now(),
        //     'updated_at' => now(),
        // ]);
        // DB::table('videos')->insert([
        //     'codevideo' => 'S2eh1VnHu40',
        //     'namevideo' => 'Belajar Laravel 11 | 11. Eloquent Relationship',
        //     'user_id' => 1,
        //     'playlist_id' => 1,
        //     'created_at' => now(),
        //     'updated_at' => now(),
        // ]);
        // DB::table('videos')->insert([
        //     'codevideo' => 'jineNX34OYE',
        //     'namevideo' => 'Belajar Laravel 11 | 12. Post Category',
        //     'user_id' => 1,
        //     'playlist_id' => 1,
        //     'created_at' => now(),
        //     'updated_at' => now(),
        // ]);
        // DB::table('videos')->insert([
        //     'codevideo' => 'rAv8C0Nf9uk',
        //     'namevideo' => 'Belajar Laravel 11 | 13. Database Seeder',
        //     'user_id' => 1,
        //     'playlist_id' => 1,
        //     'created_at' => now(),
        //     'updated_at' => now(),
        // ]);
        // DB::table('videos')->insert([
        //     'codevideo' => 'K2p6Mtz5P20',
        //     'namevideo' => 'Belajar Laravel 11 | 14. N + 1 Problem',
        //     'user_id' => 1,
        //     'playlist_id' => 1,
        //     'created_at' => now(),
        //     'updated_at' => now(),
        // ]);
        // DB::table('videos')->insert([
        //     'codevideo' => 'uVRN9DzUAU8',
        //     'namevideo' => 'Belajar Laravel 11 | 15. Redesign UI',
        //     'user_id' => 1,
        //     'playlist_id' => 1,
        //     'created_at' => now(),
        //     'updated_at' => now(),
        // ]);
        // DB::table('videos')->insert([
        //     'codevideo' => '8hhaAsRFAJs',
        //     'namevideo' => 'Belajar Laravel 11 | 16. Searching',
        //     'user_id' => 1,
        //     'playlist_id' => 1,
        //     'created_at' => now(),
        //     'updated_at' => now(),
        // ]);
        // DB::table('videos')->insert([
        //     'codevideo' => 'HP3CdxX9oak',
        //     'namevideo' => 'Belajar Laravel 11 | 17. Pagination',
        //     'user_id' => 1,
        //     'playlist_id' => 1,
        //     'created_at' => now(),
        //     'updated_at' => now(),
        // ]);

        // DB::table('videos')->insert([
        //     'codevideo' => 'kcnwI_5nKyA',
        //     'namevideo' => 'Tutorial REACT "Paling Masuk Akal" untuk PEMULA 🤩🌐',
        //     'user_id' => 1,
        //     'playlist_id' => 2,
        //     'created_at' => now(),
        //     'updated_at' => now(),
        // ]);
        // DB::table('videos')->insert([
        //     'codevideo' => 'RVH_5L5Lsp0',
        //     'namevideo' => '#2 Instalasi & Konfigurasi React | Tutorial REACT "Paling Masuk Akal" untuk PEMULA 🤩🌐',
        //     'user_id' => 1,
        //     'playlist_id' => 2,
        //     'created_at' => now(),
        //     'updated_at' => now(),
        // ]);
        // DB::table('videos')->insert([
        //     'codevideo' => 'Ji8lAuohopk',
        //     'namevideo' => '#3 Membuat Game TIC TAC TOE | Tutorial REACT "Paling Masuk Akal" untuk PEMULA 🤩🌐',
        //     'user_id' => 1,
        //     'playlist_id' => 2,
        //     'created_at' => now(),
        //     'updated_at' => now(),
        // ]);
        // DB::table('videos')->insert([
        //     'codevideo' => 'HX2kAHnCEjY',
        //     'namevideo' => '#4 Membuat App CATATAN BELANJA | Tutorial REACT "Paling Masuk Akal" untuk PEMULA 🤩🌐',
        //     'user_id' => 1,
        //     'playlist_id' => 2,
        //     'created_at' => now(),
        //     'updated_at' => now(),
        // ]);
        // DB::table('videos')->insert([
        //     'codevideo' => '-9Z9a91vTLc',
        //     'namevideo' => '#5 Semua Tentang COMPONENT | Tutorial REACT "Paling Masuk Akal" untuk PEMULA 🤩🌐',
        //     'user_id' => 1,
        //     'playlist_id' => 2,
        //     'created_at' => now(),
        //     'updated_at' => now(),
        // ]);
    }
}


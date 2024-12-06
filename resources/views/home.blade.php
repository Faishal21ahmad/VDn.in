<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css','resources/js/app.js'])
    <title>{{ $title }}</title>
    
    <style>
      /* Optional styling for smooth transition */
      #geser-hingga-image-habis {
        display: flex;
        align-items: center;
        transition: transform 0.1s linear;
        will-change: transform;
      }
    </style>
</head>
<body>
    <x-navbar :data="$user"  />

    <div class="min-h-screen bg-gray-50 mt-20">
        <!-- Cara Kerja Singkat -->
        <section id="cara-kerja-singkat" class="py-40 bg-white">
          <div class="max-w-4xl mx-auto text-center">
            <h2 class="text-4xl font-extrabold mb-6">Selamat Datang di VDN (Video Note)</h2>
            <p class="text-lg leading-relaxed">
              VDN adalah platform unik yang dirancang untuk membantu Anda mencatat ide, wawasan, dan materi dari video YouTube. 
              Dengan fitur unik kami, Anda dapat menambahkan catatan pada waktu tertentu dalam video, membuat playlist untuk mengelompokan video 
              dengan mudah, dan mengakses kembali catatan Anda hanya dengan satu klik. 
              Baik Anda seorang mahasiswa, profesional, atau kreator konten, VDN adalah alat yang sempurna untuk mendukung proses belajar 
              dan kreativitas Anda.
            </p>
            <br>
            <a href="{{ url('/login') }}" class="bg-[#4A55A2] text-white font-bold py-3 px-6 rounded-lg hover:bg-gray-200">
              Coba Sekarang
            </a>
        </section>
      
        <section id="deskripsi" class="bg-gradient-to-br bg-[#4A55A2] text-white py-20">
          <div class="max-w-6xl mx-auto text-center">
            <h3 class="text-3xl font-bold mb-10">Bagaimana Cara Kerja VDN?</h3>
            <p class="text-lg leading-relaxed mb-8">
              VDN bekerja dengan sederhana namun sangat efektif. Salin kode video YouTube, masukkan ke platform kami, dan mulai tambahkan catatan 
              yang sesuai dengan waktu tertentu dalam video. Anda juga dapat mengelola semua video Anda dengan kategori khusus.
            </p>
            <div class="mx-auto rounded-lg p-1 scrollbar-hide overflow-auto">
              <div id="" class="flex min-w-full gap-2 w-full h-[500px]">
                <img id="image1" src="{{ asset('storage/aset/11.png') }}" alt="" class="aspect-video rounded-lg shadow-md">
                <img id="image2" src="{{ asset('storage/aset/2.png') }}" alt="" class="aspect-video rounded-lg shadow-md">
                <img id="image3" src="{{ asset('storage/aset/3.png') }}" alt="" class="aspect-video rounded-lg shadow-md">
                <img id="image4" src="{{ asset('storage/aset/4.png') }}" alt="" class="aspect-video rounded-lg shadow-md">
                <img id="image7" src="{{ asset('storage/aset/7.png') }}" alt="" class="aspect-video rounded-lg shadow-md">
                <img id="image8" src="{{ asset('storage/aset/8.png') }}" alt="" class="aspect-video rounded-lg shadow-md">
              </div>
            </div>
          </div>
        </section>

        <!-- Fitur Utama -->
        <section id="fitur" class="py-16 bg-[#C5DFF8]">
          <div class="max-w-6xl mx-auto text-center">
            <h3 class="text-3xl font-bold mb-10">Fitur Utama VDN</h3>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
              <div class="bg-white p-6 shadow-md rounded-lg">
                <h4 class="text-xl font-bold text-[#4A55A2]">Catatan dengan Timestamp</h4>
                <p class="text-gray-600 mt-2">Tambahkan catatan yang terkait langsung dengan detik tertentu dalam video. Navigasi dengan mudah ke momen penting.</p>
              </div>
              <div class="bg-white p-6 shadow-md rounded-lg">
                <h4 class="text-xl font-bold text-[#4A55A2]">Kategorisasi Video</h4>
                <p class="text-gray-600 mt-2">Organisasikan video Anda ke dalam kategori/playlist agar mudah diakses dan diatur sesuai kebutuhan.</p>
              </div>
              <div class="bg-white p-6 shadow-md rounded-lg">
                <h4 class="text-xl font-bold text-[#4A55A2]">Navigasi Cepat</h4>
                <p class="text-gray-600 mt-2">Klik catatan untuk langsung menuju ke detik video tertentu. Tidak ada lagi waktu terbuang untuk mencari!</p>
              </div>
            </div>
          </div>
        </section>
      
        <!-- Cara Kerja Khusus -->
        <section id="cara-kerja-khusus" class="py-16 bg-white">
          <div class="max-w-6xl mx-auto">
            <h3 class="text-3xl font-bold text-center mb-10">Detail Cara Menggunakan</h3>
            <!-- Langkah 1: Menambahkan Video -->
            <div class="mb-10 flex flex-col md:flex-row items-center">
              <img src="{{ asset('storage/aset/2.png') }}" alt="Menambahkan Video" class="w-[300px] h-[180px] mb-6 md:mb-0 md:mr-6 rounded-lg shadow-md object-cover">
              <div>
                <h4 class="text-xl font-bold text-[#4A55A2]">1. Menambahkan Video</h4>
                <p class="text-gray-600 mt-2">
                  Salin kode video dari URL YouTube dan masukkan ke VDN. Setelah itu, video akan muncul di dashboard Anda, siap untuk ditambahkan catatan.
                </p>
              </div>
            </div>
      
            <!-- Langkah 2: Menambahkan Catatan -->
            <div class="mb-10 flex flex-col md:flex-row items-center">
              <img src="{{ asset('storage/aset/9.png') }}" alt="Menambahkan Catatan" class="w-[300px] h-[180px]  mb-6 md:mb-0 md:mr-6 rounded-lg shadow-md object-cover">
              <div>
                <h4 class="text-xl font-bold text-[#4A55A2]">2. Menambahkan Catatan</h4>
                <p class="text-gray-600 mt-2">
                  Tekan Tombol catat pada detik video yang ingin Ketik catatan Anda pada detik tertentu dalam video. Misalnya, tambahkan ringkasan materi pada menit ke-3:45 untuk mempermudah review.
                </p>
              </div>
            </div>
      
            <!-- Langkah 3: Mengkategorikan Video -->
            <div class="flex flex-col md:flex-row items-center">
              <img src="{{ asset('storage/aset/10.png') }}" alt="Mengkategorikan Video" class="w-[300px] h-[180px] mb-6 md:mb-0 md:mr-6 rounded-lg shadow-md object-cover">
              <div>
                <h4 class="text-xl font-bold text-[#4A55A2]">3. Mengkategorikan Video / Playlist</h4>
                <p class="text-gray-600 mt-2">
                  Buat kategori khusus seperti "Belajar", "Inspirasi", atau "Proyek" untuk mengatur koleksi video Anda dengan lebih baik.
                </p>
              </div>
            </div>
          </div>
        </section>
      
        <!-- CTA Section -->
        <section class="bg-[#4A55A2] text-white py-16 text-center">
          <h3 class="text-3xl font-extrabold mb-4">Mulai Menulis Catatan Video Anda Hari Ini</h3>
          <p class="text-lg mb-6">Bergabunglah dengan ribuan pengguna yang telah membuat pembelajaran mereka lebih mudah dengan VDN.</p>
          <a href="" class="bg-white text-[#4A55A2] font-bold py-3 px-6 rounded-lg hover:bg-gray-200">
            Daftar Sekarang
          </a>
        </section>
      
</body>
</html>
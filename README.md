<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

## VDn.in


VDn.in ( Video Note ) adalah platform unik yang dirancang untuk membantu Anda mencatat ide, wawasan, dan materi dari video YouTube. Dengan fitur unik kami, Anda dapat menambahkan catatan pada waktu tertentu dalam video, membuat playlist untuk mengelompokan video dengan mudah, dan mengakses kembali catatan Anda hanya dengan satu klik. Baik Anda seorang mahasiswa, profesional, atau kreator konten, VDN adalah alat yang sempurna untuk mendukung proses belajar dan kreativitas Anda.



### Instalasi 
- composer install
- php artisan storage:link
- php artisan migrate:fresh

### run server
- php artisan serve
- npm run dev

#### local network
open vite.config.js add code.
ip your device = [30.30.30.33].

```javascript
// server: {
//     host: '30.30.30.33',
//     hmr: {
//         host: '30.30.30.33'
//     },
// },
```

- php artisan serve --host=30.30.30.33 --port=8002
- npm run dev


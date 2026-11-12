# KursusKu

Project praktikum Pemrograman Web III.

## Requirement

- PHP 8.3 atau lebih baru
- Composer
- Node.js + npm (untuk Vite, Bootstrap, jQuery)
- Laravel
- Laragon / web server lokal

## Cara Menjalankan

1. Buka terminal pada folder project.
2. Jalankan: `composer install`
3. Salin `.env.example` menjadi `.env` jika diperlukan.
4. Jalankan: `php artisan key:generate`
5. Jalankan: `npm install`
6. Jalankan (terminal 1): `npm run dev`
7. Jalankan (terminal 2): `php artisan serve`
8. Buka alamat yang ditampilkan terminal.

## Fitur Milestone 7

- Named route `home`
- HomeController@index
- Blade landing page
- Data kursus dari controller
- Asset CSS dan image

## Fitur Milestone 9

- Master layout Blade (`layouts/app.blade.php`) + partial navbar
- Bootstrap, Popper, dan jQuery melalui Vite
- Form pendaftaran dengan `@csrf` dan validasi
- Route JSON `courses.availability` (data array sementara)
- jQuery Ajax cek sisa kursi tanpa reload

## Belum Dikerjakan

- Database
- CRUD
- Authentication
- Relasi data
- Ajax POST

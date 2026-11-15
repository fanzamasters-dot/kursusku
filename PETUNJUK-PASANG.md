# Cara memasang paket Pertemuan 12

Dipasang di atas project kursusku yang sudah berisi Pertemuan 7-11.

1. Pastikan Laragon (MySQL) aktif dan CRUD Course masih jalan.
2. (Disarankan) commit dulu:
       git add .
       git commit -m "checkpoint before meeting 12 relations"
3. Salin semua isi folder paket ini ke root project, pilih Replace.
   File yang tertimpa: routes/web.php, app/Models/Course.php,
   resources/views/partials/navbar.blade.php, resources/views/enrollments/create.blade.php.
4. Jalankan migration:
       php artisan migrate
       php artisan migrate:status
5. Isi 3 participant dummy:
       php artisan db:seed --class=ParticipantSeeder
6. Pastikan ada course berstatus "open" (seeder CourseSeeder sudah membuat beberapa).
7. Jalankan npm run dev dan php artisan serve (dua terminal), lalu buka:
       http://127.0.0.1:8000/enrollments/create
       http://127.0.0.1:8000/enrollments
8. Cek foreign key di phpMyAdmin (tabel enrollments -> Structure / Relation view),
   atau jalankan SHOW CREATE TABLE enrollments;

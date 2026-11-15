# Refleksi Pertemuan 10

1. Bagian mana yang paling mudah dipahami?
Jawaban: Halaman daftar kursus (index), karena controller cukup mengambil data dengan Course::latest()->get() lalu Blade menampilkannya dengan @foreach, mirip dengan array yang dipelajari sebelumnya.

2. Bagian mana yang paling sering menimbulkan error?
Jawaban: Koneksi database dan migration. Saya sempat mendapat pesan "Nothing to migrate" karena file migration courses belum tersalin ke project, dan .env masih mengarah ke SQLite sehingga tabel tidak muncul di phpMyAdmin.

3. Jelaskan dengan kalimat sendiri hubungan migration, model, controller, dan database.
Jawaban: Migration membuat struktur tabel di database. Model mewakili tabel itu di kode Laravel. Controller memakai model untuk mengambil atau menyimpan data, lalu mengirim hasilnya ke view. Database menyimpan data yang sebenarnya.

4. Jika data tidak muncul di halaman, tiga hal pertama apa yang Anda periksa?
Jawaban: Pertama, MySQL Laragon sudah aktif dan pengaturan database di .env benar. Kedua, migration sudah berstatus Ran dan datanya ada di tabel (dilihat di phpMyAdmin). Ketiga, controller mengirim variabel yang benar ke view dan nama view serta route-nya sudah sesuai.

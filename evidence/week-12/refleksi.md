# Refleksi Pertemuan 12

1. Apa fungsi foreign key dibanding sekadar menyimpan angka id?
Jawaban: Kalau hanya menyimpan angka, MySQL tidak mengecek apakah angka itu ada di tabel lain. Dengan foreign key, MySQL menolak course_id atau participant_id yang tidak ada di tabel induknya, jadi enrollment selalu menunjuk ke course dan participant yang benar-benar ada.

2. Mengapa unique harus pada pasangan participant-course?
Jawaban: Saat saya mendaftarkan Alya ke Laravel Dasar untuk kedua kalinya, sistem menolaknya. Tapi Alya tetap bisa daftar ke kursus lain, dan peserta lain bisa daftar ke kursus yang sama. Itu karena unique dipasang pada pasangan participant_id dan course_id. Kalau hanya satu kolom yang unique, satu peserta cuma bisa ikut satu kursus, atau satu kursus cuma bisa punya satu peserta.

3. Mengapa start_date tidak disimpan ulang di enrollments?
Jawaban: Tanggal mulai adalah data milik course. Kalau disalin ke enrollments, datanya dobel dan harus diubah di banyak baris saat jadwal berubah. Di laporan, tanggal itu cukup diambil lewat relasi dari course, jadi hanya ada satu sumber datanya.

4. Apa yang terjadi jika cascade tidak dipasang?
Jawaban: Saat course atau participant dihapus, enrollment-nya tertinggal dan menunjuk ke data yang sudah tidak ada, atau MySQL menolak penghapusan karena masih ada enrollment terkait. Saat uji di Tinker, setelah participant dummy dihapus jumlah enrollment-nya menjadi 0 dan course-nya tetap ada, karena cascade menghapus enrollment otomatis.

5. Apa perbedaan belongsTo() dan hasMany()?
Jawaban: hasMany() dipakai di sisi yang punya banyak data, misalnya Course punya banyak Enrollment. belongsTo() dipakai di sisi yang menyimpan foreign key, misalnya Enrollment milik satu Course dan satu Participant.

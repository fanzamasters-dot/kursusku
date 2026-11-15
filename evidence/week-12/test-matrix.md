# Test Matrix Week 12 (Relasi Database)

## A. End-to-end (form sampai laporan)

| # | Skenario | Hasil diharapkan | Hasil aktual | Status | Bukti |
|---|----------|------------------|--------------|--------|-------|
| 1 | Buka /enrollments/create | Participant dan course tampil di select | | | |
| 2 | Submit participant kosong | Ditolak, validation error | | | |
| 3 | Submit course kosong | Ditolak, validation error | | | |
| 4 | Alya -> Laravel Dasar | Tersimpan, status registered | | | |
| 5 | Alya -> Laravel Dasar lagi | Ditolak: "Participant ini sudah terdaftar pada course tersebut." | | | |
| 6 | Alya -> PHP Dasar | Boleh tersimpan | | | |
| 7 | Bima -> Laravel Dasar | Boleh tersimpan | | | |
| 8 | Buka /enrollments | Nama participant, course, start date, status benar | | | |

## B. Cascade (lihat cascade-test-tinker.md)

| # | Skenario | Hasil diharapkan | Hasil aktual | Status |
|---|----------|------------------|--------------|--------|
| 9 | Hapus course dummy | Enrollment terkait hilang, participant tetap ada | | |
| 10 | Hapus participant dummy | Enrollment terkait hilang, course tetap ada | | |

## C. Pemeriksaan database
Jalankan di phpMyAdmin tab SQL, lalu screenshot:

    SHOW CREATE TABLE enrollments;
    SELECT id, participant_id, course_id, status FROM enrollments ORDER BY id DESC;

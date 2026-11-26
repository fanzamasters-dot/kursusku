# Test Matrix Week 13 (Search, Filter, Pagination)

Isi kolom Actual dan Status SETELAH benar-benar menguji. Jangan menulis Pass sebelum diuji.

| No | Skenario | Langkah / URL | Expected | Actual | Status | Bukti |
|----|----------|---------------|----------|--------|--------|-------|
| 1 | 0 hasil | /courses?q=tidak-ada-xyz-999 | Pesan "Tidak ada kursus yang sesuai...", tanpa error | | | |
| 2 | 1 hasil | /courses?q=Kriptografi | Tepat 1 Course tampil | | | |
| 3 | Lebih dari 10 hasil | /courses?q=web&status=open | Page 1 maksimal 10 baris + pagination | | | |
| 4 | Keyword dengan spasi | /courses?q=Web Modern | Keyword terbaca benar, hasil sesuai | | | |
| 5 | Filter + page 2 | /courses?q=web&status=open lalu klik page 2 | URL masih memuat q dan status, data page 2 tetap sesuai filter | | | |

## Tambahan
| No | Skenario | Expected | Actual | Status |
|----|----------|----------|--------|--------|
| 6 | JavaScript dimatikan, cari lewat tombol Cari | Hasil berubah lewat reload biasa | | |
| 7 | JavaScript dimatikan, klik page 2 | Pagination tetap bekerja | | |
| 8 | Status kosong ("Semua status") | Semua kursus tampil, bukan 0 hasil | | |

## Jika Ajax dikerjakan
| No | Skenario | Expected | Actual | Status |
|----|----------|----------|--------|--------|
| 9 | Ketik cepat di kolom cari | Request hanya terkirim setelah jeda sekitar 300 ms (lihat tab Network) | | |
| 10 | Ubah filter status | Hasil berubah tanpa reload penuh | | |
| 11 | Klik pagination saat Ajax aktif | Hasil berubah tanpa reload penuh | | |
| 12 | /courses?q=web&status=open&partial=1 dibuka langsung | Hanya blok hasil (tanpa navbar/layout) | | |

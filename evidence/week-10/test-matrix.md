# Test Matrix Week 10 (Create + Read)

| No | Skenario | Input utama | Hasil diharapkan | Hasil aktual | Status |
|----|----------|-------------|------------------|--------------|--------|
| 1 | Simpan data valid | Semua field valid | Tersimpan, redirect ke index, pesan sukses | | |
| 2 | Kode kosong | code kosong | Validasi gagal | | |
| 3 | Kode duplikat | WEB-101 kedua kali | Ditolak (unique) | | |
| 4 | Nama kosong | name kosong | Validasi gagal | | |
| 5 | Biaya negatif | fee = -1000 | Ditolak (min:0) | | |
| 6 | Kuota 0 | quota = 0 | Ditolak (min:1) | | |
| 7 | Status tidak valid | status = active (via DevTools) | Ditolak | | |
| 8 | Reload /courses | - | Data tetap ada (dari MySQL) | | |

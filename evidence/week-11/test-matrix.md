# Test Matrix Week 11 (CRUD Lanjutan) - minimal 12 kasus

| No | Kasus | Input | Expected | Actual | Status | Bukti |
|----|-------|-------|----------|--------|--------|-------|
| 1 | Duplicate code saat create | code yang sudah ada | Ditolak, error dekat field code | | | |
| 2 | Nama kosong | name = "" | Ditolak (required) | | | |
| 3 | Nama terlalu pendek | name = "AI" | Ditolak (min 3) | | | |
| 4 | Fee negatif | fee = -1000 | Ditolak (min 0) | | | |
| 5 | Fee bukan integer | fee = abc | Ditolak (integer) | | | |
| 6 | Quota nol | quota = 0 | Ditolak | | | |
| 7 | Quota 501 | quota = 501 | Ditolak | | | |
| 8 | Boundary quota minimum | quota = 1 | Diterima | | | |
| 9 | Boundary quota maksimum | quota = 500 | Diterima | | | |
| 10 | Tanggal invalid | nilai bukan tanggal (via DevTools) | Ditolak (date) | | | |
| 11 | Status invalid | status = active (via DevTools) | Ditolak | | | |
| 12 | Update dengan code sendiri | edit tanpa ubah code | Berhasil | | | |
| 13 | Update ke code Course lain | code milik Course lain | Ditolak (unique) | | | |
| 14 | Update normal | ubah nama/fee/quota/status valid | Berhasil, detail menampilkan data baru | | | |
| 15 | Delete | hapus Course dummy | Hilang dari index + flash sukses | | | |

Isi kolom Actual, Status (Pass/Fail), dan Bukti (nama file screenshot) setelah benar-benar diuji.

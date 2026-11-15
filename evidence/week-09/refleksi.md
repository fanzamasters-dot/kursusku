# Refleksi Pertemuan 9

1. Mengapa master layout lebih baik daripada menyalin navbar ke semua view?
Jawaban: Kalau navbar disalin ke setiap halaman, setiap perubahan harus diubah di banyak file dan mudah ada yang terlewat. Dengan master layout dan partial navbar, saya cukup mengubah satu file dan semua halaman ikut berubah.

2. Apa peran Vite dalam project Laravel ini?
Jawaban: Vite memproses dan memuat file CSS dan JavaScript, seperti Bootstrap dan jQuery, lewat @vite di layout. Saat npm run dev tidak berjalan, halaman error "Vite manifest not found", jadi Vite harus menyala supaya tampilan dan script termuat.

3. Apa fungsi @csrf pada form?
Jawaban: @csrf membuat hidden input berisi token. Laravel memeriksa token itu pada request POST untuk memastikan request benar-benar berasal dari form aplikasi. Tanpa @csrf, form yang dikirim ditolak dengan error 419.

4. Apa yang membuktikan bahwa fitur availability bekerja tanpa reload?
Jawaban: Saat saya mengetik di field Nama lalu mengganti pilihan kursus, isi field Nama tetap ada dan tulisan sisa kursi berubah. Di tab Network (Fetch/XHR) terlihat request GET ke availability dengan status 200 dan response JSON, tanpa muncul request dokumen halaman baru.

5. Apa persamaan utama antara jQuery Ajax dan fetch()?
Jawaban: Keduanya mengirim request ke sebuah URL di belakang layar, menerima response JSON, lalu memperbarui sebagian tampilan tanpa reload. Alurnya sama: request, response, JSON, update tampilan. Yang berbeda hanya cara menulisnya, yaitu success dan error di jQuery, .then dan .catch di fetch.

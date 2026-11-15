# Refleksi Pertemuan 11

1. Mengapa validasi dipindahkan dari controller ke Form Request?
Jawaban: Supaya controller lebih bersih dan hanya mengatur alur. Aturan validasi punya tempat sendiri, yaitu StoreCourseRequest dan UpdateCourseRequest, sehingga lebih mudah dibaca dan dirawat. Controller menerima data yang sudah lolos pemeriksaan lewat validated().

2. Mengapa unique rule pada update berbeda dari store?
Jawaban: Saat edit, code milik kursus yang sedang diedit tidak boleh dianggap duplikat. Karena itu update memakai Rule::unique()->ignore($course) supaya record sendiri diabaikan. Kalau memakai unique biasa seperti di store, kursus tidak bisa disimpan lagi walaupun code-nya tidak diubah.

3. Apa fungsi @method('PUT') dan @method('DELETE')?
Jawaban: Form HTML hanya mendukung GET dan POST. @method membuat Laravel membaca request POST itu sebagai PUT atau DELETE, sehingga cocok dengan route resource untuk update dan destroy.

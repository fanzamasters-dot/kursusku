<?php

use App\Http\Controllers\CourseController;
use App\Http\Controllers\HomeController;
use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Pertemuan 7
Route::get('/', [HomeController::class, 'index'])
    ->name('home');

// Pertemuan 10-11: CRUD Course (index, create, store, show, edit, update, destroy)
Route::resource('courses', CourseController::class);

// Pertemuan 9: form pendaftaran (belum menyimpan ke database)
// Pertemuan 10: daftar kursus sekarang dibaca dari tabel courses
Route::get('/pendaftaran', function () {
    $courses = Course::where('status', 'open')
        ->orderBy('name')
        ->get()
        ->mapWithKeys(fn (Course $c) => [$c->id => ['name' => $c->name]])
        ->all();

    return view('enrollments.create', compact('courses'));
})->name('enrollments.create');

Route::post('/pendaftaran/preview', function (Request $request) {
    $data = $request->validate([
        'name'      => ['required', 'string', 'min:3', 'max:100'],
        'email'     => ['required', 'email'],
        'course_id' => ['required', 'integer'],
    ]);

    return back()
        ->with('success', 'Form lolos validasi. Penyimpanan pendaftaran akan ditambahkan pada pertemuan berikutnya.')
        ->withInput();
})->name('enrollments.preview');

// Pertemuan 9 (Ajax) dibaca dari database sejak pertemuan 10.
// Kunci JSON dipertahankan (course, remaining) agar app.js tidak perlu diubah.
// 'remaining' sementara = kuota; sisa kursi sebenarnya menunggu relasi Enrollment.
Route::get('/courses/{course}/availability', function (Course $course) {
    return response()->json([
        'id'        => $course->id,
        'code'      => $course->code,
        'course'    => $course->name,
        'status'    => $course->status,
        'quota'     => $course->quota,
        'remaining' => $course->quota,
    ]);
})->name('courses.availability');

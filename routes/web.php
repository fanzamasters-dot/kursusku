<?php

use App\Http\Controllers\CourseController;
use App\Http\Controllers\EnrollmentController;
use App\Http\Controllers\HomeController;
use App\Models\Course;
use Illuminate\Support\Facades\Route;

// Pertemuan 7
Route::get('/', [HomeController::class, 'index'])
    ->name('home');

// Pertemuan 10-11: CRUD Course
Route::resource('courses', CourseController::class);

// Pertemuan 12: Enrollment (index = laporan, create = form, store = simpan)
Route::resource('enrollments', EnrollmentController::class)
    ->only(['index', 'create', 'store']);

// URL lama dari pertemuan 9 diarahkan ke form enrollment yang baru
Route::redirect('/pendaftaran', '/enrollments/create');

// Pertemuan 9 (Ajax). Sejak pertemuan 12 sisa kursi = kuota - jumlah enrollment.
Route::get('/courses/{course}/availability', function (Course $course) {
    $registered = $course->enrollments()->count();

    return response()->json([
        'id'        => $course->id,
        'code'      => $course->code,
        'course'    => $course->name,
        'status'    => $course->status,
        'quota'     => $course->quota,
        'registered' => $registered,
        'remaining' => max(0, $course->quota - $registered),
    ]);
})->name('courses.availability');

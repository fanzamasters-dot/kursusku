@extends('layouts.app')

@section('title', 'Beranda - ' . $siteName)

@section('content')
<section class="py-5">
    <div class="row align-items-center g-4">
        <div class="col-lg-7">
            <span class="badge text-bg-success mb-3">
                Kursus teknologi untuk mahasiswa
            </span>
            <h1 class="display-5 fw-bold">
                Belajar lebih terarah bersama {{ $siteName }}
            </h1>
            <p class="lead text-secondary">
                Pilih kursus, cek ketersediaan kursi, lalu isi formulir pendaftaran.
            </p>
            <a href="{{ route('enrollments.create') }}" class="btn btn-success">
                Daftar Kursus
            </a>
            <a href="{{ route('courses.index') }}" class="btn btn-outline-secondary">
                Lihat Semua Kursus
            </a>
        </div>
        <div class="col-lg-5">
            <img src="{{ asset('images/hero-kursus.jpg') }}"
                 alt="Ilustrasi kelas KursusKu"
                 class="img-fluid rounded-4">
        </div>
    </div>
</section>

<section class="mb-4">
    <div class="row g-3">
        @foreach ($stats as $label => $value)
            <div class="col-6 col-md-3">
                <div class="card shadow-sm text-center h-100">
                    <div class="card-body">
                        <div class="display-6 fw-bold">{{ $value }}</div>
                        <div class="text-muted">{{ $label }}</div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</section>

<section>
    <h2 class="h4 mb-3">Kursus Pilihan</h2>
    <div class="row g-3">
        @foreach ($featured as $course)
            <div class="col-md-4">
                <article class="card h-100 shadow-sm">
                    <div class="card-body">
                        <small class="text-secondary">{{ $course['code'] }}</small>
                        <h3 class="h5">{{ $course['name'] }}</h3>
                        <p class="mb-0">{{ $course['description'] }}</p>
                    </div>
                </article>
            </div>
        @endforeach
    </div>
</section>
@endsection

<?php

namespace Database\Seeders;

use App\Models\Course;
use Illuminate\Database\Seeder;

/**
 * Data dummy tambahan untuk menguji pagination (Pertemuan 13).
 * Aman dijalankan ulang: memakai firstOrCreate berdasarkan code.
 *
 *   php artisan db:seed --class=CourseDummySeeder
 */
class CourseDummySeeder extends Seeder
{
    public function run(): void
    {
        // [nama, status]
        $items = [
            ['Web Modern', 'open'],
            ['Web Lanjutan', 'open'],
            ['Web Responsif', 'open'],
            ['Web API', 'open'],
            ['Web Security', 'open'],
            ['Web Performance', 'open'],
            ['Web Accessibility', 'open'],
            ['Web Testing', 'open'],
            ['Web Deployment', 'open'],
            ['Web Design System', 'open'],
            ['Web Animation', 'open'],
            ['Web Component', 'closed'],
            ['PHP OOP', 'open'],
            ['PHP Testing', 'draft'],
            ['Laravel Eloquent', 'open'],
            ['Laravel Blade Mahir', 'closed'],
            ['Laravel Queue', 'draft'],
            ['Laravel Auth', 'open'],
            ['MySQL Query Tuning', 'closed'],
            ['Git dan GitHub', 'open'],
            ['Docker Dasar', 'draft'],
            ['Linux Dasar', 'open'],
            ['Algoritma Dasar', 'closed'],
            ['Kriptografi Unik Satu', 'draft'], // untuk uji "1 hasil"
        ];

        foreach ($items as $i => [$name, $status]) {
            $code = sprintf('DUM-%03d', $i + 1);

            Course::firstOrCreate(
                ['code' => $code],
                [
                    'name' => $name,
                    'description' => 'Data dummy untuk pengujian pagination.',
                    'fee' => 250000 + ($i * 10000),
                    'quota' => 20 + ($i % 10),
                    'start_date' => now()->addDays(10 + $i)->toDateString(),
                    'status' => $status,
                ]
            );
        }
    }
}

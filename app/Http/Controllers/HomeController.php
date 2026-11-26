<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Enrollment;
use App\Models\Participant;

class HomeController extends Controller
{
    public function index()
    {
        $siteName = 'KursusKu';

        $featured = [
            [
                'code' => 'WEB-01',
                'name' => 'Web Dasar',
                'description' => 'Belajar struktur HTML dan CSS dasar.',
            ],
            [
                'code' => 'PHP-01',
                'name' => 'PHP Dasar',
                'description' => 'Belajar variabel, function, form, dan logika PHP.',
            ],
            [
                'code' => 'LAR-01',
                'name' => 'Laravel Fundamental',
                'description' => 'Belajar route, controller, Blade, dan MVC.',
            ],
        ];

        // Pertemuan 13: ringkasan (dashboard count)
        $stats = [
            'Total Course'   => Course::count(),
            'Course Open'    => Course::where('status', 'open')->count(),
            'Participant'    => Participant::count(),
            'Enrollment'     => Enrollment::count(),
        ];

        return view('home', compact('siteName', 'featured', 'stats'));
    }
}

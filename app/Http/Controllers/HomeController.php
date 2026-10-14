<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class HomeController extends Controller
{
    public function index(): View
    {
        $featured = [
            [
                'code' => 'WEB-01',
                'name' => 'Web Dasar',
                'description' => 'Belajar struktur HTML dan fondasi pengembangan web.',
            ],
            [
                'code' => 'PHP-01',
                'name' => 'PHP Dasar',
                'description' => 'Belajar variabel, operator, function, form, dan alur server-side.',
            ],
            [
                'code' => 'LAR-01',
                'name' => 'Laravel Fundamental',
                'description' => 'Mengenal framework, route, controller, Blade, dan pola MVC.',
            ],
            [
                'code' => 'UI-01',
                'name' => 'UI Web Dasar',
                'description' => 'Belajar prinsip tampilan web yang rapi.',
            ],
            // soal Live Coding UTS
            [
                'code' => 'SS-01',
                'name' => 'Security System',
                'description' => 'Belajar keamanan sistem dan aplikasi web.',
            ],
        ];

        return view('home', compact('featured'));
    }
}

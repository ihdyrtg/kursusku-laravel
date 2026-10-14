<?php

namespace Database\Seeders;

use App\Models\Course;
use App\Models\Enrollment;
use App\Models\Participant;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $courses = [
            ['WEB-01', 'Web Dasar', 'Fondasi HTML dan CSS untuk pemula.', 200000, 30, '2026-11-03', 'open'],
            ['PHP-01', 'PHP Dasar', 'Variabel, operator, function, form, dan request PHP.', 250000, 30, '2026-11-05', 'open'],
            ['PHP-02', 'PHP Lanjutan', 'Struktur aplikasi PHP dan praktik reusable code.', 300000, 25, '2026-11-07', 'open'],
            ['LAR-01', 'Laravel Fundamental', 'Route, controller, Blade, MVC, dan project dasar.', 350000, 25, '2026-11-10', 'open'],
            ['LAR-02', 'Laravel CRUD', 'Eloquent, migration, validation, dan CRUD lengkap.', 400000, 25, '2026-11-12', 'open'],
            ['DB-01', 'MySQL Dasar', 'Tabel, key, query, dan integritas data.', 250000, 30, '2026-11-14', 'open'],
            ['DB-02', 'Relational Database', 'Foreign key, relasi, dan desain database.', 325000, 25, '2026-11-16', 'open'],
            ['JS-01', 'JavaScript Dasar', 'DOM, event, dan dasar JavaScript modern.', 275000, 30, '2026-11-18', 'open'],
            ['AJX-01', 'Ajax Praktis', 'Request asynchronous dan update UI tanpa reload.', 300000, 20, '2026-11-20', 'open'],
            ['UI-01', 'UI Web Dasar', 'Membuat antarmuka web yang rapi dan responsif.', 225000, 25, '2026-11-22', 'open'],
            ['BST-01', 'Bootstrap Dasar', 'Grid, form, navbar, card, dan utility Bootstrap.', 225000, 30, '2026-11-24', 'open'],
            ['GIT-01', 'Git dan GitHub', 'Version control, commit, branch, dan kolaborasi.', 200000, 30, '2026-11-26', 'open'],
            ['API-01', 'REST API Dasar', 'Konsep endpoint, JSON, request, dan response.', 350000, 20, '2026-12-01', 'open'],
            ['SEC-01', 'Web Security Dasar', 'CSRF, XSS, validation, dan praktik aman.', 375000, 20, '2026-12-03', 'open'],
            ['TST-01', 'Testing Laravel', 'Feature test dan pengujian alur aplikasi.', 350000, 20, '2026-12-05', 'open'],
            ['VIT-01', 'Vite untuk Laravel', 'Asset bundling CSS dan JavaScript.', 250000, 20, '2026-12-07', 'draft'],
            ['BLD-01', 'Blade Template Lanjutan', 'Layout, partial, component, dan reuse view.', 300000, 20, '2026-12-09', 'draft'],
            ['ELQ-01', 'Eloquent Relations', 'hasMany, belongsTo, dan many-to-many.', 400000, 20, '2026-12-11', 'draft'],
            ['PAG-01', 'Pagination Laravel', 'Pagination, query string, dan navigasi data.', 250000, 20, '2026-12-13', 'draft'],
            ['SRC-01', 'Searching dan Filter', 'Pencarian, filter status, dan query builder.', 300000, 20, '2026-12-15', 'draft'],
            ['WEB-02', 'Web Layout Lanjutan', 'Layout responsif dan pola UI reusable.', 300000, 25, '2026-10-01', 'closed'],
            ['PHP-03', 'PHP Project Review', 'Review project PHP fundamental.', 250000, 25, '2026-10-03', 'closed'],
            ['LAR-03', 'Laravel Project Review', 'Review route, controller, view, dan database.', 450000, 20, '2026-10-05', 'closed'],
            ['DB-03', 'Database Review', 'Review skema, relasi, constraint, dan query.', 350000, 20, '2026-10-07', 'closed'],
        ];

        foreach ($courses as [$code, $name, $description, $fee, $quota, $startDate, $status]) {
            Course::firstOrCreate(
                ['code' => $code],
                [
                    'name' => $name,
                    'description' => $description,
                    'fee' => $fee,
                    'quota' => $quota,
                    'start_date' => $startDate,
                    'status' => $status,
                ]
            );
        }

        $participants = [
            ['Alya Rahma', 'alya@example.test', '081200000001'],
            ['Bima Putra', 'bima@example.test', '081200000002'],
            ['Citra Nabila', 'citra@example.test', null],
            ['Dimas Arif', 'dimas@example.test', '081200000004'],
            ['Eka Putri', 'eka@example.test', '081200000005'],
        ];

        foreach ($participants as [$name, $email, $phone]) {
            Participant::firstOrCreate(
                ['email' => $email],
                ['name' => $name, 'phone' => $phone]
            );
        }

        $web = Course::where('code', 'WEB-01')->firstOrFail();
        $php = Course::where('code', 'PHP-01')->firstOrFail();
        $laravel = Course::where('code', 'LAR-01')->firstOrFail();
        $alya = Participant::where('email', 'alya@example.test')->firstOrFail();
        $bima = Participant::where('email', 'bima@example.test')->firstOrFail();
        $citra = Participant::where('email', 'citra@example.test')->firstOrFail();

        foreach ([
            [$alya->id, $web->id],
            [$alya->id, $laravel->id],
            [$bima->id, $php->id],
            [$citra->id, $laravel->id],
        ] as [$participantId, $courseId]) {
            Enrollment::firstOrCreate(
                ['participant_id' => $participantId, 'course_id' => $courseId],
                ['status' => 'registered']
            );
        }
    }
}

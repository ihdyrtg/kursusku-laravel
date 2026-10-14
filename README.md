# KursusKu - Laravel Project Pertemuan 7-13

Project praktikum Pemrograman Web III berbasis Laravel 12, PHP 8.3+, MySQL, Blade, Bootstrap, Vite, jQuery Ajax, dan Eloquent.

Project ini adalah kondisi akhir yang mengintegrasikan panduan Pertemuan 7 sampai 13. Pertemuan 8 adalah fase UTS/ETS sehingga tidak menambah milestone aplikasi baru.

## Fitur akhir

- Named route `home`, `HomeController`, Blade, asset publik, dan pola MVC.
- Master Blade layout, navbar reusable, Bootstrap melalui Vite, jQuery, dan CSRF.
- Endpoint JSON ketersediaan kursi dan Ajax tanpa reload.
- Database MySQL untuk `courses`, `participants`, dan `enrollments`.
- CRUD Course lengkap: index, create, store, show, edit, update, delete.
- `StoreCourseRequest` dan `UpdateCourseRequest`, termasuk unique rule yang benar saat update.
- Relasi Course 1:M Enrollment dan Participant 1:M Enrollment.
- Composite unique `participant_id + course_id` untuk mencegah enrollment ganda.
- Foreign key dengan `cascadeOnDelete()`.
- Laporan enrollment dengan eager loading participant dan course.
- Search `q`, filter `draft/open/closed`, pagination 10 item, `withQueryString()`.
- Progressive enhancement: live search jQuery Ajax + debounce 300 ms + Ajax pagination.
- Dashboard count: total Course, Course open, Participant, Enrollment.
- Seeder berisi 24 course, 5 participant, dan beberapa enrollment dummy.
- Feature test untuk CRUD, relasi/enrollment, availability, cascade, search, dan pagination.
- Template evidence, test matrix, ERD, implementation map, AI usage log, dan draft artikel.

## Requirement

- PHP 8.3 atau lebih baru
- Composer
- Node.js dan npm
- MySQL / Laragon
- Git opsional tetapi disarankan

## Cara paling mudah di Laragon Windows

1. Ekstrak folder ini menjadi:

   `C:\laragon\www\kursusku`

2. Buat database MySQL bernama `kursusku` melalui HeidiSQL/phpMyAdmin. Alternatif: jalankan isi `database/create-database.sql`.

3. Buka terminal pada folder project dan jalankan:

```bash
composer install
copy .env.example .env
php artisan key:generate
php artisan migrate --seed
npm install
npm run build
```

4. Pada Laragon klik **Reload** lalu buka:

   `http://kursusku.test`

   Alternatif tanpa auto virtual host:

```bash
php artisan serve
```

5. Untuk mode frontend development, gunakan terminal lain:

```bash
npm run dev
```

## Setup otomatis

Setelah database `kursusku` tersedia, Windows dapat menjalankan:

```text
setup-windows.bat
```

Linux/macOS:

```bash
./setup.sh
```

## Login database default

`.env.example` mengikuti pola Laragon umum:

```env
DB_DATABASE=kursusku
DB_USERNAME=root
DB_PASSWORD=
```

Jika MySQL komputer Anda berbeda, ubah `.env` saja. Jangan commit `.env` ke GitHub.

## Route utama

| Route | Fungsi |
|---|---|
| `/` | Dashboard / landing page |
| `/courses` | Search, filter, pagination, CRUD Course |
| `/courses/{course}` | Detail Course |
| `/courses/{course}/availability` | JSON sisa kursi |
| `/enrollments` | Laporan relasional |
| `/enrollments/create` | Form enrollment |
| `/pendaftaran` | Alias ke form enrollment |

Gunakan `php artisan route:list` untuk melihat seluruh route.

## Struktur inti

```text
app/
  Http/Controllers/
    HomeController.php
    CourseController.php
    EnrollmentController.php
  Http/Requests/
    StoreCourseRequest.php
    UpdateCourseRequest.php
  Models/
    Course.php
    Participant.php
    Enrollment.php

database/
  migrations/
  seeders/DatabaseSeeder.php

resources/
  css/app.css
  js/app.js
  views/
    layouts/app.blade.php
    partials/navbar.blade.php
    courses/
    enrollments/

routes/web.php
```

## Pengujian

Setelah `composer install` selesai:

```bash
php artisan test
```

Untuk pemeriksaan route dan migration:

```bash
php artisan route:list
php artisan migrate:status
```

## Mapping panduan 7-13

- **P7:** Laravel, MVC, named route, controller, Blade, asset, Git/README.
- **P8:** UTS/ETS; tidak menambah milestone aplikasi.
- **P9:** master layout, Bootstrap + Vite, jQuery Ajax, form + CSRF, availability JSON.
- **P10:** MySQL, migration Course, model, Create + Read.
- **P11:** show, Form Request, edit, update, delete, validation.
- **P12:** Participant + Enrollment, FK, composite unique, Eloquent relation, report, cascade.
- **P13:** search, status filter, pagination 10/page, `withQueryString`, partial response, live search, debounce, Ajax pagination, dashboard counts, draft artikel.

## Dua keputusan integrasi yang perlu diketahui

1. Pada contoh Pertemuan 12 terdapat query `status = active`, sedangkan schema Pertemuan 10/11 dan filter Pertemuan 13 menetapkan status `draft`, `open`, `closed`. Project final ini memakai **`open`** agar konsisten dengan schema final.
2. Pertemuan 9 memakai array dummy untuk availability. Setelah Pertemuan 10-12 database sudah hidup, endpoint yang sama di project final dihitung dari tabel Course dan Enrollment. Pola Ajax-nya tetap sama, tetapi sumber data sudah nyata.

Penjelasan lebih rinci ada di `docs/IMPLEMENTATION-MAP.md` dan `docs/UPGRADE-NOTES.md`.

## Memasukkan ke repository GitHub yang sudah ada

Disarankan mempertahankan history repository lama. Clone repository, lalu salin isi ZIP ini ke working tree repository tersebut dan commit perubahan:

```bash
git clone https://github.com/ihdyrtg/kursusku-laravel.git
cd kursusku-laravel
# salin isi project ZIP ke folder ini
git add .
git commit -m "feat: complete KursusKu meetings 7-13"
git push origin main
```

Jangan upload folder `vendor`, `node_modules`, `.env`, atau `public/build` jika ingin mengikuti workflow source repository yang rapi.

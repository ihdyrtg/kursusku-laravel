# PORTOFOLIO CHECKLIST KURSUSKU
## Pertemuan 7-13 - Pemrograman Web III


## Ringkasan Status Semester

- [ ] Pertemuan 7 - Migrasi Prototype ke Laravel / MVC
- [ ] Pertemuan 9 - Blade Layout, Bootstrap, jQuery Ajax, Form
- [ ] Pertemuan 10 - MySQL + Eloquent + Course Create/Read
- [ ] Pertemuan 11 - CRUD Course Lengkap + Form Request
- [ ] Pertemuan 12 - Relasi Course, Participant, Enrollment
- [ ] Pertemuan 13 - Search, Filter, Pagination + Draft Artikel


# Pertemuan 7 - Laravel, MVC, Route, Controller, Blade

## A. Source Project

- [ ] Project Laravel `kursusku` dapat dijalankan tanpa error.
- [ ] `routes/web.php` memiliki route `/` bernama `home`.
- [ ] Route `home` mengarah ke `HomeController@index`.
- [ ] `app/Http/Controllers/HomeController.php` tersedia.
- [ ] `resources/views/home.blade.php` tersedia.
- [ ] Data course dikirim dari controller dan dirender dengan Blade.
- [ ] Asset CSS dapat dimuat.
- [ ] Gambar hero pada `public/images/` dapat dimuat tanpa 404.
- [ ] `README.md` tersedia dan menjelaskan requirement serta cara menjalankan project.
- [ ] Riwayat Git memiliki commit yang jelas, bukan hanya satu commit akhir besar.

## B. Evidence Wajib

Folder yang disarankan:

```text
evidence/week-07/
|-- 01-tools.png
|-- 02-laravel-home.png
|-- 03-route-list.png
|-- 04-mobile-view.png
|-- 05-git-log.png
|-- request-lifecycle.pdf atau .png
`-- ai-usage-log.md      # jika menggunakan AI
```

Checklist:

- [ ] Screenshot versi PHP dan Composer.
- [ ] Screenshot landing page KursusKu.
- [ ] Screenshot `php artisan route:list`.
- [ ] Screenshot tampilan mobile/responsive.
- [ ] Screenshot `git log --oneline -5`.
- [ ] Diagram request lifecycle tersedia.
- [ ] Diagram menjelaskan `Browser -> Route -> HomeController -> Blade -> HTML Response`.
- [ ] README dapat digunakan untuk menjalankan ulang project.
- [ ] AI usage log tersedia jika menggunakan AI.
- [ ] Refleksi singkat 5-8 kalimat tersedia.



# Pertemuan 9 - Blade Layout, Bootstrap, jQuery Ajax, Form

## A. Fitur yang Harus Tersedia

- [ ] Bootstrap dimuat melalui Vite.
- [ ] jQuery aktif.
- [ ] `resources/views/layouts/app.blade.php` tersedia.
- [ ] `resources/views/partials/navbar.blade.php` tersedia.
- [ ] Home menggunakan master layout dengan `@extends`.
- [ ] Halaman pendaftaran menggunakan layout yang sama.
- [ ] Form menggunakan `@csrf`.
- [ ] Select course dapat memicu request Ajax tanpa reload penuh.
- [ ] Route availability mengembalikan JSON.
- [ ] Area availability menampilkan sisa kursi.
- [ ] Error state Ajax tersedia.
- [ ] DevTools Network menunjukkan request availability.

## B. Evidence Wajib

Folder yang disarankan:

```text
evidence/week-09/
|-- 01-home.png
|-- 02-form.png
|-- 03-availability.png
|-- 04-network-json.png
|-- test-matrix.md
`-- ai-usage-log.md      # jika menggunakan AI
```

Checklist:

- [ ] Screenshot Beranda dengan navbar Bootstrap.
- [ ] Screenshot halaman Pendaftaran.
- [ ] Screenshot setelah course dipilih dan sisa kursi tampil.
- [ ] Screenshot DevTools Network yang memperlihatkan request availability.
- [ ] Response JSON terlihat pada bukti Network.
- [ ] `resources/views/layouts/app.blade.php` ada di repository.
- [ ] `resources/views/partials/navbar.blade.php` ada di repository.
- [ ] `resources/views/enrollments/create.blade.php` ada di repository.
- [ ] `resources/js/app.js` ada di repository.
- [ ] `resources/css/app.css` ada di repository.
- [ ] Route terkait tersedia di `routes/web.php`.
- [ ] AI usage log tersedia jika menggunakan AI.

## C. Test Matrix - Minimal 10 Pengujian

- [ ] Beranda tampil dengan layout, navbar, Bootstrap.
- [ ] Navbar responsive/collapse bekerja.
- [ ] Halaman pendaftaran tampil dengan layout yang sama.
- [ ] Select kosong menampilkan instruksi default.
- [ ] Course 1 mengembalikan availability yang benar.
- [ ] Course 2 mengembalikan availability yang benar.
- [ ] Course 3 mengembalikan availability yang benar.
- [ ] POST valid diterima.
- [ ] Email tidak valid menghasilkan validation error.
- [ ] Network availability berstatus sukses dan menghasilkan JSON.
- [ ] Console bebas error penting.



# Pertemuan 10 - MySQL, Migration, Eloquent, Course Create + Read

## A. Database dan Source Code

- [ ] Database `kursusku` tersedia.
- [ ] Tabel `courses` tersedia.
- [ ] Struktur tabel sesuai schema project.
- [ ] `database/migrations/...create_courses_table.php` tersedia.
- [ ] `app/Models/Course.php` tersedia.
- [ ] `$fillable` pada model Course sesuai field yang digunakan.
- [ ] `start_date` diperlakukan sebagai date/cast.
- [ ] `app/Http/Controllers/CourseController.php` tersedia.
- [ ] Resource route Course tersedia.
- [ ] `resources/views/courses/index.blade.php` tersedia.
- [ ] `resources/views/courses/create.blade.php` tersedia.
- [ ] Create Course menyimpan data ke MySQL.
- [ ] Course yang tersimpan tampil kembali pada halaman index.

## B. Evidence Wajib

Folder yang disarankan:

```text
evidence/week-10/
|-- 01-database.png
|-- 02-courses-structure.png
|-- 03-create-form.png
|-- 04-index-8-data.png
|-- 05-validation-error.png
|-- test-cases.md
`-- ai-log.md             # jika menggunakan AI
```

Checklist:

- [ ] Screenshot database `kursusku`.
- [ ] Screenshot struktur tabel `courses`.
- [ ] File migration Course ada di repository.
- [ ] File model `Course.php` ada di repository.
- [ ] File `CourseController.php` ada di repository.
- [ ] Resource route dapat diperiksa pada `routes/web.php`.
- [ ] View `courses/index.blade.php` ada di repository.
- [ ] View `courses/create.blade.php` ada di repository.
- [ ] Screenshot halaman daftar menampilkan minimal 8 data.
- [ ] Tabel minimal 8 test case dilengkapi expected, actual, dan status.
- [ ] Screenshot validation error tersedia.
- [ ] AI log tersedia jika menggunakan AI.



# Pertemuan 11 - CRUD Course Lengkap + Form Request

## A. Fitur CRUD Course

- [ ] Create Course bekerja.
- [ ] Course index/read bekerja.
- [ ] Halaman detail/show Course bekerja.
- [ ] Edit Course bekerja.
- [ ] Update Course tersimpan.
- [ ] Delete Course dummy bekerja.
- [ ] Delete menggunakan konfirmasi.
- [ ] Flash message tampil setelah operasi berhasil.

## B. Validation dan Form Request

- [ ] `app/Http/Requests/StoreCourseRequest.php` tersedia.
- [ ] `app/Http/Requests/UpdateCourseRequest.php` tersedia.
- [ ] `authorize()` mengizinkan request sesuai kebutuhan praktikum.
- [ ] Store memakai data dari `validated()`.
- [ ] Update memakai data dari `validated()`.
- [ ] Unique code pada update mengabaikan record Course yang sedang diedit.
- [ ] Validation error tampil dekat field terkait.
- [ ] Form edit mempertahankan nilai lama dengan pola `old(..., $course->...)`.
- [ ] Route model binding untuk Course dapat digunakan.

## C. Evidence Wajib

evidence/week-11/
|-- 01-route-list.png
|-- 02-course-show.png
|-- 03-course-edit.png
|-- 04-validation-duplicate-code.png
|-- 05-validation-quota-501.png
|-- 06-update-success.png
|-- 07-delete-success.png
|-- test-matrix.md
`-- ai-log.md             # jika menggunakan AI
```

Checklist:

- [ ] `StoreCourseRequest.php` ada di repository.
- [ ] `UpdateCourseRequest.php` ada di repository.
- [ ] `CourseController.php` versi CRUD lengkap ada di repository.
- [ ] `show.blade.php` tersedia.
- [ ] `edit.blade.php` tersedia.
- [ ] Screenshot halaman detail Course tersedia.
- [ ] Screenshot halaman edit Course tersedia.
- [ ] Screenshot duplicate code validation tersedia.
- [ ] Screenshot quota 501 / boundary validation tersedia.
- [ ] Screenshot error dekat field tersedia.
- [ ] Screenshot update sukses tersedia.
- [ ] Screenshot delete sukses tersedia.
- [ ] Test matrix minimal 12 kasus tersedia.
- [ ] AI log singkat tersedia jika menggunakan AI.


# Pertemuan 12 - Relational Database: Course, Participant, Enrollment

## A. ERD dan Database

- [ ] ERD final memiliki Course, Participant, dan Enrollment.
- [ ] Tabel `participants` berhasil dibuat.
- [ ] Tabel `enrollments` berhasil dibuat.
- [ ] Foreign key `participant_id -> participants.id` aktif.
- [ ] Foreign key `course_id -> courses.id` aktif.
- [ ] Kedua foreign key menggunakan cascade delete sesuai panduan.
- [ ] Composite unique `participant_id + course_id` aktif.
- [ ] Migration status berhasil/Ran.

## B. Eloquent Relation

- [ ] `Participant -> enrollments()` tersedia.
- [ ] `Participant -> courses()` tersedia jika menerapkan relasi many-to-many convenience.
- [ ] `Enrollment -> participant()` tersedia.
- [ ] `Enrollment -> course()` tersedia.
- [ ] `Course -> enrollments()` tersedia.
- [ ] `Course -> participants()` tersedia jika menerapkan relasi many-to-many convenience.

## C. Fitur Enrollment

- [ ] Form Enrollment memiliki dropdown Participant.
- [ ] Form Enrollment memiliki dropdown Course.
- [ ] Enrollment dapat disimpan.
- [ ] Duplicate Participant + Course ditolak.
- [ ] Status awal enrollment tersimpan sesuai alur project.
- [ ] Laporan enrollment menampilkan nama Participant.
- [ ] Laporan enrollment menampilkan nama Course.
- [ ] Laporan menampilkan start date Course.
- [ ] Laporan menampilkan status Enrollment.
- [ ] Query report menggunakan relasi/eager loading.

## D. Evidence Wajib

Checklist evidence akhir:

- [ ] ERD final.
- [ ] Screenshot migration berhasil.
- [ ] Screenshot foreign key pada database.
- [ ] Source migration ada di repository.
- [ ] Source models ada di repository.
- [ ] Source controller ada di repository.
- [ ] Screenshot/form Enrollment tersedia.
- [ ] Screenshot pesan duplicate tersedia.
- [ ] Screenshot laporan Enrollment tersedia.
- [ ] Bukti test cascade saat Course dummy dihapus.
- [ ] Bukti test cascade saat Participant dummy dihapus.
- [ ] AI usage log tersedia jika menggunakan AI.

Bukti teknis tambahan yang disebut pada langkah pengujian:

- [ ] Screenshot baris `enrollments` pada database.
- [ ] Nilai foreign key pada database cocok dengan master Course dan Participant.

## E. Test Matrix - 8 Skenario

- [ ] Form Enrollment terbuka dan dua dropdown berisi data.
- [ ] Participant kosong ditolak validation.
- [ ] Course kosong ditolak validation.
- [ ] Participant A dapat mendaftar Course A.
- [ ] Participant A tidak dapat mendaftar ulang Course A.
- [ ] Participant A dapat mendaftar Course B.
- [ ] Participant B dapat mendaftar Course A.
- [ ] Laporan relasional menampilkan Participant, Course, start date, dan status dengan benar.
- [ ] Delete Course dummy diuji dan efek cascade dapat dijelaskan.
- [ ] Delete Participant dummy diuji dan efek cascade dapat dijelaskan.



# Pertemuan 13 - Search, Filter, Pagination, Ajax Opsional, Draft Artikel

## A. Fitur Wajib Data Discovery

- [ ] Search parameter `q` bekerja.
- [ ] Search dapat mencari code Course.
- [ ] Search dapat mencari name Course.
- [ ] Filter status `open` bekerja.
- [ ] Filter status `closed` bekerja.
- [ ] Filter status `draft` bekerja.
- [ ] Pagination maksimal 10 item per halaman.
- [ ] `withQueryString()` aktif.
- [ ] Keyword tetap terjaga ketika pindah page.
- [ ] Status filter tetap terjaga ketika pindah page.
- [ ] Empty state tampil saat hasil 0.
- [ ] Form GET tetap bekerja ketika JavaScript dimatikan.

## B. Evidence Wajib

- [ ] Screenshot Course index normal.
- [ ] Screenshot kondisi 0 hasil.
- [ ] Screenshot page 2 dengan `q` dan/atau `status` tetap pada URL.
- [ ] Source `CourseController@index` tersedia dan dapat diperiksa.
- [ ] Test matrix tersedia.
- [ ] Screenshot hasil pencarian ketika JavaScript dimatikan.
- [ ] URL pengujian non-JavaScript dicatat.
- [ ] Network evidence tersedia jika Ajax dikerjakan.

## C. Lima Skenario Pengujian Wajib

- [ ] 0 hasil -> empty state tampil tanpa error.
- [ ] 1 hasil -> tepat satu Course tampil.
- [ ] Lebih dari 10 hasil -> pagination muncul dan page 1 maksimal 10 item.
- [ ] Keyword dengan spasi -> terbaca dengan benar.
- [ ] Filter + page 2 -> query state tetap terjaga.

## D. Draft Artikel Ilmiah

- [ ] Judul sementara artikel tersedia.
- [ ] Problem statement ditulis berdasarkan masalah project nyata.
- [ ] Gap sederhana ditulis dengan jelas.
- [ ] Metode pengembangan dijelaskan secara faktual.
- [ ] Tabel skenario uji artikel tersedia.
- [ ] Kolom Actual diisi berdasarkan test nyata.
- [ ] Status Pass/Fail tidak direkayasa.
- [ ] Screenshot/evidence yang akan digunakan dalam artikel dibekukan/disimpan.

## E. Tambahan Project dalam Panduan

- [ ] Dashboard count Total Course tersedia.
- [ ] Dashboard count Open Course tersedia.
- [ ] Dashboard count Participant tersedia.
- [ ] Dashboard count Enrollment tersedia.



| Pertemuan | Fokus | Status | Catatan |
|---|---|---|---|
| 7 | Laravel MVC | ⬜ | |
| 9 | Layout + Bootstrap + Ajax | ⬜ | |
| 10 | MySQL + Course Create/Read | ⬜ | |
| 11 | CRUD Course + Form Request | ⬜ | |
| 12 | Relational Database | ⬜ | |
| 13 | Search + Pagination + Artikel | ⬜ | |

---

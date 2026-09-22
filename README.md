# KursusKu — Project Kumulatif Pertemuan 2–7

Project ini melanjutkan prototype KursusKu dari PHP murni sampai migrasi awal ke Laravel MVC.

## Struktur

- **Root project ini** = Milestone 7 Laravel (`Route → Controller → Blade`).
- **`legacy-prototype/`** = seluruh hasil Pertemuan 2–6 dalam satu prototype PHP murni.
- **`evidence/`** = portofolio screenshot Pertemuan 2–7.

## Requirement Milestone 7

- PHP 8.3 atau lebih baru
- Composer
- Laravel
- Laragon / web server lokal

## Menjalankan Laravel

1. Buka terminal di folder project.
2. Jalankan `composer install`.
3. Salin `.env.example` menjadi `.env`.
4. Jalankan `php artisan key:generate`.
5. Jalankan `php artisan serve`.
6. Buka alamat yang ditampilkan terminal, biasanya `http://127.0.0.1:8000`.
7. Verifikasi route dengan `php artisan route:list`.

## Fitur Milestone 7

- Named route `home` di `routes/web.php`.
- `HomeController@index` menyiapkan data `$featured`.
- `resources/views/home.blade.php` merender data dengan Blade `@foreach`.
- Link Beranda menggunakan `route('home')`.
- CSS dan gambar dimuat melalui `asset()`.
- Diagram alur: Browser → Route → Controller → Blade → HTML response.
- Git repository lokal disiapkan.
- Database/CRUD/authentication/relasi **belum** ditambahkan karena belum menjadi scope Pertemuan 7.

## Menjalankan Prototype Pertemuan 2–6

Salin `legacy-prototype` ke `C:\laragon\www\kursusku-prototype`, lalu buka:

- `http://kursusku-prototype.test/`
- atau `http://localhost/kursusku-prototype/`

File utama tambahan:
- Pertemuan 5: `registration.php`, `process-registration.php`, `get-demo.php`.
- Pertemuan 6: `register.php`, `process.php`, `data.php`, `helpers.php`, `history.php`, `loop-lab.php`.

## Rumus Pertemuan 6

`subtotal = fee × packageCount`

`discountAmount = subtotal × discountPercent / 100`

`finalTotal = subtotal - discountAmount`

Aturan diskon:
- mahasiswa = 20%
- guru = 15%
- umum = 0%

## Evidence

- `evidence/week-02` sampai `evidence/week-04`: bukti project sebelumnya.
- `evidence/week-05`: form desktop/mobile, hasil POST, eksperimen GET, test matrix.
- `evidence/week-06`: form lanjutan, ringkasan mahasiswa/guru, checkbox, minat kosong, history, test matrix.
- `evidence/week-07`: preview tampilan Blade, bukti source Route/Controller/Blade, diagram MVC, README + git log.

> Catatan runtime Laravel: `vendor/` tidak disertakan, sesuai praktik Composer/Git. Jalankan `composer install` di komputer Anda. Karena build environment paket ini tidak memiliki Composer, bukti `php artisan route:list` disiapkan sebagai source-level verification dan harus Anda recapture setelah `composer install` agar menjadi bukti runtime asli.

## Source Check Tanpa Vendor

Jalankan:

`php scripts/source-check.php`

Script ini memeriksa keberadaan file dan relasi source Route/Controller/Blade tanpa membutuhkan `vendor`.

## Belum Dikerjakan

- Database
- CRUD
- Authentication
- Relasi data
- Ajax

## Refleksi Singkat Pertemuan 7

Route menerima request dan menentukan controller tujuan. Controller menyiapkan data serta memilih view. Blade berfokus pada tampilan HTML dan menerima data dari controller. Pemisahan ini membuat tanggung jawab kode lebih jelas dibanding mencampur routing, logika, dan HTML dalam satu file. Pada milestone ini Model belum dipakai untuk database karena materi masih fokus pada struktur framework. Jika `php artisan route:list` tidak menampilkan route `home`, pemeriksaan dimulai dari `routes/web.php`, namespace/import controller, lalu method `index()` dan nama view.

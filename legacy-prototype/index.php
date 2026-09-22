<?php

declare(strict_types=1);

require_once __DIR__ . '/helpers.php';

$siteName = 'KursusKu';
$tagline = 'Belajar Teknologi, Bangun Masa Depan';
$year = date('Y');

$courses = [
    [
        'code' => 'WEB-01',
        'name' => ' Web Dasar ',
        'fee' => 200000,
        'quota' => 30,
        'registered' => 12,
        'start_date' => '2026-09-21',
    ],
    [
        'code' => 'PHP-01',
        'name' => 'PHP Dasar',
        'fee' => 250000,
        'quota' => 30,
        'registered' => 18,
        'start_date' => '2026-09-22',
    ],
    [
        'code' => 'PHP-02',
        'name' => 'PHP Lanjutan',
        'fee' => 300000,
        'quota' => 25,
        'registered' => 24,
        'start_date' => '2026-09-24',
    ],
    [
        'code' => 'LAR-01',
        'name' => 'Laravel Fundamental',
        'fee' => 350000,
        'quota' => 25,
        'registered' => 25,
        'start_date' => '2026-09-28',
    ],
    [
        'code' => 'DB-01',
        'name' => 'MySQL Dasar',
        'fee' => 275000,
        'quota' => 20,
        'registered' => 0,
        'start_date' => '2026-10-01',
    ],
    [
        'code' => 'UI-01',
        'name' => 'UI Web Dasar',
        'fee' => 225000,
        'quota' => 35,
        'registered' => 9,
        'start_date' => '2026-10-03',
    ],
];
?>
<!doctype html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Prototype KursusKu untuk praktikum Pemrograman Web III: PHP, HTML, array, function, dan tabel dinamis.">
    <title><?= htmlspecialchars($siteName) ?> | Pemrograman Web III</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
<header class="site-header">
    <div class="container header-inner">
        <a class="brand" href="index.php" aria-label="Kembali ke beranda KursusKu">
            <span class="brand-mark" aria-hidden="true">K</span>
            <span>
                <strong><?= htmlspecialchars($siteName) ?></strong>
                <small>Pemrograman Web III</small>
            </span>
        </a>
        <span class="milestone">Milestone 6</span>
    </div>
</header>

<nav class="navbar" aria-label="Navigasi utama">
    <div class="container nav-links">
        <a href="#beranda">Beranda</a>
        <a href="#keunggulan">Keunggulan</a>
        <a href="#katalog">Katalog</a>
        <a href="#alur">Cara Daftar</a>
        <a href="#media">Media</a>
        <a href="#kontak">Kontak</a>
        <a href="register.php">Daftar</a>
        <a href="history.php">History</a>
        <a class="nav-cta" href="fee-calculator.php">Estimasi Biaya</a>
    </div>
</nav>

<main>
    <section id="beranda" class="hero">
        <div class="container hero-content">
            <div>
                <span class="eyebrow">LANDING PAGE KURSUSKU</span>
                <h1><?= htmlspecialchars($tagline) ?></h1>
                <p class="lead">Temukan kursus teknologi yang relevan untuk meningkatkan keterampilan melalui pembelajaran bertahap, latihan terarah, dan proyek nyata.</p>
                <div class="button-row">
                    <a href="#katalog" class="button">Lihat Katalog Kursus</a>
                    <a href="register.php" class="button">Daftar Sekarang</a>
                    <a href="fee-calculator.php" class="button button-secondary">Hitung Estimasi Biaya</a>
                </div>
                <div class="hero-meta" aria-label="Ringkasan proyek">
                    <span><strong>6</strong> kursus</span>
                    <span><strong>4</strong> function reusable</span>
                    <span><strong>PHP</strong> server-side</span>
                </div>
            </div>
            <div class="hero-visual">
                <img src="assets/images/hero-kursus.jpg" alt="Ilustrasi mahasiswa sedang mengikuti kegiatan kursus komputer" class="hero-image">
            </div>
        </div>
    </section>

    <section id="keunggulan" class="section">
        <div class="container">
            <div class="section-heading">
                <span class="eyebrow">MENGAPA KURSUSKU?</span>
                <h2>Belajar terarah dari konsep hingga proyek</h2>
            </div>
            <div class="feature-grid">
                <article class="feature-card">
                    <span class="feature-number">01</span>
                    <h3>Materi Terarah</h3>
                    <p>Materi disusun bertahap dari dasar HTML dan PHP sampai logika aplikasi.</p>
                </article>
                <article class="feature-card">
                    <span class="feature-number">02</span>
                    <h3>Belajar dengan Proyek</h3>
                    <p>Setiap pertemuan menambah bagian nyata dari satu proyek KursusKu yang sama.</p>
                </article>
                <article class="feature-card">
                    <span class="feature-number">03</span>
                    <h3>Pendampingan Praktik</h3>
                    <p>Proses belajar mencakup demonstrasi, testing, debugging, evidence, dan refleksi.</p>
                </article>
            </div>
        </div>
    </section>

    <section id="katalog" class="section section-light">
        <div class="container">
            <div class="section-heading section-heading-row">
                <div>
                    <span class="eyebrow">KATALOG DATA-DRIVEN</span>
                    <h2>Katalog Kursus</h2>
                    <p>Data berasal dari array PHP dan dirender menggunakan <code>foreach</code>.</p>
                </div>
                <a href="test-functions.php" class="text-link">Lihat 6 test function &rarr;</a>
            </div>

            <div class="table-wrap">
                <table class="course-table">
                    <thead>
                    <tr>
                        <th>Kode</th>
                        <th>Nama Kursus</th>
                        <th>Biaya</th>
                        <th>Mulai</th>
                        <th>Sisa Kursi</th>
                        <th>Status</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($courses as $course): ?>
                        <?php
                        $status = statusKursus($course['quota'], $course['registered']);
                        $statusClass = $status === 'Penuh' ? 'badge-full' : 'badge-available';
                        ?>
                        <tr>
                            <td><code><?= htmlspecialchars($course['code']) ?></code></td>
                            <td><?= htmlspecialchars(trim($course['name'])) ?></td>
                            <td><?= rupiah($course['fee']) ?></td>
                            <td><?= formatTanggal($course['start_date']) ?></td>
                            <td><?= sisaKursi($course['quota'], $course['registered']) ?></td>
                            <td><span class="badge <?= $statusClass ?>"><?= htmlspecialchars($status) ?></span></td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
            <p class="table-note">Contoh kondisi: <strong>Laravel Fundamental</strong> penuh, <strong>PHP Lanjutan</strong> tersisa 1 kursi, dan <strong>MySQL Dasar</strong> belum memiliki pendaftar.</p>
        </div>
    </section>

    <section id="alur" class="section">
        <div class="container">
            <div class="section-heading">
                <span class="eyebrow">ALUR PENDAFTARAN</span>
                <h2>Cara Mendaftar</h2>
            </div>
            <ol class="steps">
                <li><span>1</span><div><strong>Pilih kursus</strong><p>Tentukan program yang paling sesuai dengan kebutuhan belajar.</p></div></li>
                <li><span>2</span><div><strong>Isi form pendaftaran</strong><p>Fitur form akan dikembangkan pada milestone berikutnya.</p></div></li>
                <li><span>3</span><div><strong>Periksa data</strong><p>Pastikan data dan pilihan kursus sudah benar sebelum dikirim.</p></div></li>
                <li><span>4</span><div><strong>Tunggu konfirmasi</strong><p>Pendaftaran akan diproses setelah data diterima sistem.</p></div></li>
            </ol>
        </div>
    </section>

    <section id="media" class="section section-light">
        <div class="container media-grid">
            <div>
                <span class="eyebrow">MEDIA PEMBELAJARAN</span>
                <h2>Kenali Program Kami</h2>
                <p>Gambar dan video disimpan di folder aset agar struktur proyek tetap rapi.</p>
                <p>Pelajari juga <a href="https://www.php.net/" target="_blank" rel="noopener">dokumentasi resmi PHP</a> untuk referensi sintaks dan fungsi.</p>
            </div>
            <div class="media-card">
                <img src="assets/images/hero-kursus.jpg" alt="Ilustrasi kegiatan belajar pemrograman di KursusKu" loading="lazy">
                <div class="video-block">
                    <video controls preload="metadata" poster="assets/img/image1.png">
                        <source src="assets/video/intro-kursus.mp4" type="video/mp4">
                        Browser Anda tidak mendukung video HTML5.
                    </video>
                    <small>Video lokal: <code>assets/video/intro-kursus.mp4</code></small>
                </div>
            </div>
        </div>
    </section>

    <section id="kontak" class="section contact-section">
        <div class="container contact-card">
            <div>
                <span class="eyebrow">KONTAK</span>
                <h2>Informasi KursusKu</h2>
                <p>Prototype pembelajaran untuk Mata Kuliah Pemrograman Web III.</p>
            </div>
            <div class="contact-list">
                <p><strong>Email</strong><br><a href="mailto:kursusku@example.test">kursusku@example.test</a></p>
                <p><strong>Lokasi latihan</strong><br>Laboratorium Komputer</p>
            </div>
        </div>
    </section>
</main>

<footer class="footer">
    <div class="container footer-inner">
        <small>&copy; <?= htmlspecialchars($year) ?> <?= htmlspecialchars($siteName) ?>. Pemrograman Web III.</small>
        <small>PHP &middot; HTML &middot; Function &middot; Array &middot; Testing</small>
    </div>
</footer>
</body>
</html>

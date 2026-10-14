<!doctype html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="KursusKu versi Laravel - Route, Controller, dan Blade.">
    <title>KursusKu | Laravel MVC</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
<header class="site-header">
    <div class="container header-inner">
        <a class="brand" href="{{ route('home') }}" aria-label="Beranda KursusKu">
            <span class="brand-mark" aria-hidden="true">K</span>
            <span>
                <strong>KursusKu</strong>
                <small>Laravel MVC</small>
            </span>
        </a>
        <span class="milestone">Milestone 7</span>
    </div>
</header>

<nav class="navbar" aria-label="Navigasi utama">
    <div class="container nav-links">
        <a href="{{ route('home') }}">Beranda</a>
        <a href="#mvc">Alur MVC</a>
        <a href="#featured">Kursus Pilihan</a>
        <a class="nav-cta" href="#featured">Lihat Program</a>
    </div>
</nav>

<main>
    <section class="hero">
        <div class="container hero-content">
            <div>
                <span class="eyebrow">PERTEMUAN 7 · FRAMEWORK LARAVEL</span>
                <h1>Belajar terstruktur dengan Route, Controller, dan Blade.</h1>
                <p class="lead">
                    Landing page KursusKu dipindahkan dari PHP biasa ke pola framework Laravel.
                    Request masuk melalui route, data disiapkan controller, lalu Blade merender HTML.
                </p>
                <div class="button-row">
                    <a class="button" href="#featured">Program Belajar Unggulan</a>
                    <a class="button button-secondary" href="#mvc">Lihat Alur MVC</a>
                </div>
            </div>
            <div class="hero-visual">
                <img class="hero-image"
                     src="{{ asset('images/hero-kursus.jpg') }}"
                     alt="Mahasiswa sedang mengikuti kegiatan kursus komputer">
            </div>
        </div>
    </section>

    <section id="mvc" class="mvc-strip">
        <div class="container mvc-flow" aria-label="Alur Route Controller Blade">
            <span>Browser GET /</span><b class="mvc-arrow">→</b>
            <span>routes/web.php</span><b class="mvc-arrow">→</b>
            <span>HomeController@index</span><b class="mvc-arrow">→</b>
            <span>home.blade.php</span><b class="mvc-arrow">→</b>
            <span>HTML Response</span>
        </div>
    </section>

    <section id="featured" class="section section-light">
        <div class="container">
            <div class="section-heading">
                <span class="eyebrow">DATA DARI CONTROLLER</span>
                <h2>Program Belajar Unggulan</h2>
                <p>
    Card di bawah dirender dengan <code>&#64;foreach</code>
    dari array <code>$featured</code> yang dikirim oleh
    <code>HomeController</code>.
</p>
            </div>

            <div class="feature-grid">
                @foreach ($featured as $course)
                    <article class="feature-card">
                        // soal UTS live coding, tampilkan kode program di bawah nama kursus
                        {{-- <span class="laravel-card-code">{{ $course['code'] }}</span> --}}
                        <h3>{{ $course['name'] }}</h3>
                        <p>{{ $course['description'] }}</p>
                    </article>
                @endforeach
            </div>
        </div>
    </section>

    <section class="section">
        <div class="container contact-card">
            <div>
                <span class="eyebrow">BATAS MILESTONE</span>
                <h2>Fokus pada struktur framework</h2>
                <p>Pertemuan 7 belum menambahkan database, CRUD, authentication, relasi data, atau Ajax.</p>
            </div>
            <div>
                <p><strong>Route:</strong> named route <code>home</code></p>
                <p><strong>Controller:</strong> <code>HomeController@index</code></p>
                <p><strong>View:</strong> <code>resources/views/home.blade.php</code></p>
            </div>
        </div>
    </section>
</main>

<footer class="footer">
    <div class="container footer-inner">
        <small>&copy; {{ date('Y') }} KursusKu · Pemrograman Web III</small>
        <small>Laravel · MVC · Route · Controller · Blade</small>
    </div>
</footer>
</body>
</html>

<!doctype html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="KursusKu - project praktikum Pemrograman Web III berbasis Laravel dan MySQL.">
    <title>@yield('title', 'KursusKu')</title>
     <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    @include('partials.navbar')

    <main class="container py-4">
        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Tutup"></button>
            </div>
        @endif

        @yield('content')
    </main>

    <footer class="border-top mt-5 py-4 bg-white">
        <div class="container d-flex flex-column flex-md-row justify-content-between gap-2 text-secondary small">
            <span>&copy; {{ date('Y') }} KursusKu - Pemrograman Web III</span>
            <span>Laravel, MySQL, Blade, Bootstrap, jQuery Ajax</span>
        </div>
    </footer>

    @stack('scripts')
</body>
</html>

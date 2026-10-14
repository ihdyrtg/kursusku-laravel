<nav class="navbar navbar-expand-lg navbar-dark bg-kursusku shadow-sm">
    <div class="container">
        <a class="navbar-brand fw-bold" href="{{ route('home') }}">KursusKu</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbar" aria-controls="mainNavbar" aria-expanded="false" aria-label="Buka navigasi">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="mainNavbar">
            <ul class="navbar-nav ms-auto align-items-lg-center gap-lg-1">
                <li class="nav-item"><a class="nav-link" href="{{ route('home') }}">Beranda</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('courses.index') }}">Course</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('enrollments.index') }}">Enrollment</a></li>
                <li class="nav-item ms-lg-2"><a class="btn btn-light btn-sm" href="{{ route('enrollments.create') }}">Daftar Kursus</a></li>
            </ul>
        </div>
    </div>
</nav>

@extends('layouts.app')

@section('title', 'Detail Course - KursusKu')

@section('content')
<div class="d-flex flex-column flex-md-row justify-content-between align-items-md-center gap-3 mb-3">
    <div>
        <span class="eyebrow">ROUTE MODEL BINDING</span>
        <h1 class="h2 mb-1">{{ $course->name }}</h1>
        <p class="text-secondary mb-0">{{ $course->code }}</p>
    </div>
    <div class="d-flex gap-2">
        <a href="{{ route('courses.index') }}" class="btn btn-outline-secondary">Kembali</a>
        <a href="{{ route('courses.edit', $course) }}" class="btn btn-primary">Edit</a>
    </div>
</div>

<div class="card shadow-sm border-0">
    <div class="card-body p-4">
        <dl class="row mb-0 detail-list">
            <dt class="col-sm-3">Kode</dt><dd class="col-sm-9">{{ $course->code }}</dd>
            <dt class="col-sm-3">Nama</dt><dd class="col-sm-9">{{ $course->name }}</dd>
            <dt class="col-sm-3">Deskripsi</dt><dd class="col-sm-9">{{ $course->description ?: '-' }}</dd>
            <dt class="col-sm-3">Biaya</dt><dd class="col-sm-9">Rp {{ number_format($course->fee, 0, ',', '.') }}</dd>
            <dt class="col-sm-3">Kuota</dt><dd class="col-sm-9">{{ $course->quota }}</dd>
            <dt class="col-sm-3">Tanggal Mulai</dt><dd class="col-sm-9">{{ $course->start_date->format('d/m/Y') }}</dd>
            <dt class="col-sm-3">Status</dt><dd class="col-sm-9"><span class="badge text-bg-secondary">{{ $course->status }}</span></dd>
            <dt class="col-sm-3">Enrollment</dt><dd class="col-sm-9">{{ $course->enrollments_count }} peserta terdaftar</dd>
        </dl>
    </div>
</div>
@endsection

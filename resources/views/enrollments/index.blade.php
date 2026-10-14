@extends('layouts.app')

@section('title', 'Laporan Enrollment - KursusKu')

@section('content')
<div class="d-flex flex-column flex-md-row justify-content-between align-items-md-center gap-3 mb-4">
    <div>
        <span class="eyebrow">EAGER LOADING REPORT</span>
        <h1 class="h2 mb-1">Laporan Enrollment</h1>
        <p class="text-secondary mb-0">Nama participant, course, start date, dan status dibaca melalui Eloquent relation.</p>
    </div>
    <a href="{{ route('enrollments.create') }}" class="btn btn-primary">Tambah Enrollment</a>
</div>

<div class="card shadow-sm border-0 overflow-hidden">
    <div class="table-responsive">
        <table class="table table-hover align-middle mb-0">
            <thead class="table-light"><tr><th>Participant</th><th>Course</th><th>Start Date</th><th>Status</th></tr></thead>
            <tbody>
                @forelse ($enrollments as $enrollment)
                    <tr>
                        <td>
                            <strong>{{ $enrollment->participant->name }}</strong><br>
                            <small class="text-secondary">{{ $enrollment->participant->email }}</small>
                        </td>
                        <td>{{ $enrollment->course->code }} - {{ $enrollment->course->name }}</td>
                        <td>{{ $enrollment->course->start_date->format('d/m/Y') }}</td>
                        <td><span class="badge text-bg-primary">{{ $enrollment->status }}</span></td>
                    </tr>
                @empty
                    <tr><td colspan="4" class="text-center py-5 text-secondary">Belum ada enrollment.</td></tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection

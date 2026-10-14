@extends('layouts.app')

@section('title', 'Tambah Enrollment - KursusKu')

@section('content')
<div class="row justify-content-center">
    <div class="col-lg-8">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <div><span class="eyebrow">RELATIONAL DATABASE</span><h1 class="h2 mb-0">Tambah Enrollment</h1></div>
            <a href="{{ route('enrollments.index') }}" class="btn btn-outline-secondary">Laporan</a>
        </div>

        <form method="POST" action="{{ route('enrollments.store') }}" class="card card-body shadow-sm border-0 p-4">
            @csrf

            <div class="mb-3">
                <label for="participant_id" class="form-label">Participant</label>
                <select name="participant_id" id="participant_id" class="form-select @error('participant_id') is-invalid @enderror" required>
                    <option value="">-- Pilih Participant --</option>
                    @foreach ($participants as $participant)
                        <option value="{{ $participant->id }}" @selected(old('participant_id') == $participant->id)>
                            {{ $participant->name }} - {{ $participant->email }}
                        </option>
                    @endforeach
                </select>
                @error('participant_id')<div class="invalid-feedback">{{ $message }}</div>@enderror
            </div>

            <div class="mb-3">
                <label for="course_id" class="form-label">Course</label>
                <select name="course_id" id="course_id" class="form-select @error('course_id') is-invalid @enderror" data-availability-template="{{ url('/courses/__COURSE__/availability') }}" required>
                    <option value="">-- Pilih Course Open --</option>
                    @foreach ($courses as $course)
                        <option value="{{ $course->id }}" @selected(old('course_id') == $course->id)>
                            {{ $course->code }} - {{ $course->name }}
                        </option>
                    @endforeach
                </select>
                @error('course_id')<div class="invalid-feedback">{{ $message }}</div>@enderror
            </div>

            <div id="availability" class="alert alert-secondary" aria-live="polite">
                Pilih course untuk melihat sisa kursi melalui Ajax.
            </div>

            <div class="small text-secondary mb-3">
                Status awal tidak dipilih user. Controller menetapkan <code>registered</code> setelah validasi berhasil.
            </div>

            <button class="btn btn-success" type="submit">Simpan Enrollment</button>
        </form>
    </div>
</div>
@endsection

@extends('layouts.app')

@section('title', 'Daftar Course - KursusKu')

@section('content')
<div class="d-flex flex-column flex-md-row justify-content-between align-items-md-center gap-3 mb-4">
    <div>
        <span class="eyebrow">MILESTONE 10-13</span>
        <h1 class="h2 mb-1">Daftar Course</h1>
        <p class="text-secondary mb-0">CRUD lengkap, search, filter status, pagination, dan live search Ajax.</p>
    </div>
    <a href="{{ route('courses.create') }}" class="btn btn-primary">Tambah Course</a>
</div>

<form id="course-search-form" method="GET" action="{{ route('courses.index') }}" class="card card-body shadow-sm border-0 mb-3">
    <div class="row g-2">
        <div class="col-md-6">
            <label class="form-label" for="live-search">Pencarian</label>
            <input id="live-search" type="search" name="q" value="{{ $search }}" class="form-control" placeholder="Cari kode atau nama kursus">
        </div>
        <div class="col-md-3">
            <label class="form-label" for="status-filter">Status</label>
            <select id="status-filter" name="status" class="form-select">
                <option value="">Semua status</option>
                <option value="open" @selected($status === 'open')>Open</option>
                <option value="closed" @selected($status === 'closed')>Closed</option>
                <option value="draft" @selected($status === 'draft')>Draft</option>
            </select>
        </div>
        <div class="col-md-3 d-flex align-items-end gap-2">
            <button class="btn btn-primary flex-fill" type="submit">Cari</button>
            <a href="{{ route('courses.index') }}" class="btn btn-outline-secondary">Reset</a>
        </div>
    </div>
    <small class="text-secondary mt-2">Form GET tetap berfungsi tanpa JavaScript. Live search hanya progressive enhancement.</small>
</form>

<div id="ajax-status" class="small text-secondary mb-2" aria-live="polite"></div>
@include('courses._results')
@endsection

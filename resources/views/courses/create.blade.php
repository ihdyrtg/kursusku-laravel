@extends('layouts.app')

@section('title', 'Tambah Course - KursusKu')

@section('content')
<div class="row justify-content-center">
    <div class="col-xl-9">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <div><span class="eyebrow">CREATE</span><h1 class="h2 mb-0">Tambah Course</h1></div>
            <a href="{{ route('courses.index') }}" class="btn btn-outline-secondary">Kembali</a>
        </div>
        <form method="POST" action="{{ route('courses.store') }}" class="card card-body shadow-sm border-0 p-4">
            @csrf
            @include('courses._form')
            <div class="mt-4"><button class="btn btn-primary" type="submit">Simpan Course</button></div>
        </form>
    </div>
</div>
@endsection

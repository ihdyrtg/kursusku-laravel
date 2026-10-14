@php($editing = isset($course))

<div class="row g-3">
    <div class="col-md-4">
        <label for="code" class="form-label">Kode</label>
        <input id="code" name="code" value="{{ old('code', $editing ? $course->code : '') }}" class="form-control @error('code') is-invalid @enderror" maxlength="20" required>
        @error('code')<div class="invalid-feedback">{{ $message }}</div>@enderror
    </div>
    <div class="col-md-8">
        <label for="name" class="form-label">Nama Course</label>
        <input id="name" name="name" value="{{ old('name', $editing ? $course->name : '') }}" class="form-control @error('name') is-invalid @enderror" maxlength="120" required>
        @error('name')<div class="invalid-feedback">{{ $message }}</div>@enderror
    </div>
    <div class="col-12">
        <label for="description" class="form-label">Deskripsi</label>
        <textarea id="description" name="description" rows="4" class="form-control @error('description') is-invalid @enderror">{{ old('description', $editing ? $course->description : '') }}</textarea>
        @error('description')<div class="invalid-feedback">{{ $message }}</div>@enderror
    </div>
    <div class="col-md-4">
        <label for="fee" class="form-label">Biaya</label>
        <input id="fee" type="number" min="0" name="fee" value="{{ old('fee', $editing ? $course->fee : 0) }}" class="form-control @error('fee') is-invalid @enderror" required>
        @error('fee')<div class="invalid-feedback">{{ $message }}</div>@enderror
    </div>
    <div class="col-md-4">
        <label for="quota" class="form-label">Kuota</label>
        <input id="quota" type="number" min="1" max="500" name="quota" value="{{ old('quota', $editing ? $course->quota : 20) }}" class="form-control @error('quota') is-invalid @enderror" required>
        @error('quota')<div class="invalid-feedback">{{ $message }}</div>@enderror
    </div>
    <div class="col-md-4">
        <label for="start_date" class="form-label">Tanggal Mulai</label>
        <input id="start_date" type="date" name="start_date" value="{{ old('start_date', $editing ? $course->start_date?->format('Y-m-d') : '') }}" class="form-control @error('start_date') is-invalid @enderror" required>
        @error('start_date')<div class="invalid-feedback">{{ $message }}</div>@enderror
    </div>
    <div class="col-md-5">
        <label for="status" class="form-label">Status</label>
        <select id="status" name="status" class="form-select @error('status') is-invalid @enderror" required>
            @foreach (['draft' => 'Draft', 'open' => 'Open', 'closed' => 'Closed'] as $value => $label)
                <option value="{{ $value }}" @selected(old('status', $editing ? $course->status : 'draft') === $value)>{{ $label }}</option>
            @endforeach
        </select>
        @error('status')<div class="invalid-feedback">{{ $message }}</div>@enderror
    </div>
</div>

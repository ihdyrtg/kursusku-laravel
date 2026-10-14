<div id="course-results" class="card shadow-sm border-0 overflow-hidden">
    <div class="table-responsive">
        <table class="table table-hover align-middle mb-0">
            <thead class="table-light">
                <tr>
                    <th>Kode</th>
                    <th>Nama</th>
                    <th>Status</th>
                    <th class="text-end">Biaya</th>
                    <th class="text-center">Kuota</th>
                    <th>Tanggal Mulai</th>
                    <th class="text-end">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($courses as $course)
                    <tr>
                        <td><code>{{ $course->code }}</code></td>
                        <td>{{ $course->name }}</td>
                        <td>
                            <span class="badge {{ $course->status === 'open' ? 'text-bg-success' : ($course->status === 'closed' ? 'text-bg-secondary' : 'text-bg-warning') }}">
                                {{ $course->status }}
                            </span>
                        </td>
                        <td class="text-end">Rp {{ number_format($course->fee, 0, ',', '.') }}</td>
                        <td class="text-center">{{ $course->quota }}</td>
                        <td>{{ $course->start_date->format('d/m/Y') }}</td>
                        <td>
                            <div class="d-flex justify-content-end gap-1 flex-wrap">
                                <a class="btn btn-sm btn-outline-secondary" href="{{ route('courses.show', $course) }}">Detail</a>
                                <a class="btn btn-sm btn-outline-primary" href="{{ route('courses.edit', $course) }}">Edit</a>
                                <form method="POST" action="{{ route('courses.destroy', $course) }}" onsubmit="return confirm('Hapus course ini? Enrollment terkait juga akan terhapus.');">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-sm btn-outline-danger" type="submit">Hapus</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="7" class="text-center py-5 text-secondary">Tidak ada hasil yang sesuai.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    @if ($courses->hasPages())
        <div class="card-body border-top">
            {{ $courses->links() }}
        </div>
    @endif
</div>

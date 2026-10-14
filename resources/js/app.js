import 'bootstrap';
import $ from 'jquery';

window.$ = window.jQuery = $;

function setAvailabilityMessage(message, type = 'secondary') {
    const box = $('#availability');

    if (!box.length) {
        return;
    }

    box.removeClass('alert-secondary alert-success alert-danger')
        .addClass(`alert-${type}`)
        .text(message);
}

$(document).on('change', '#course_id', function () {
    const id = this.value;
    const template = $(this).data('availability-template');

    if (!id) {
        setAvailabilityMessage('Pilih course untuk melihat sisa kursi melalui Ajax.');
        return;
    }

    setAvailabilityMessage('Memuat ketersediaan...');

    const url = String(template).replace('__COURSE__', id);

    $.ajax({
        url,
        method: 'GET',
        dataType: 'json',
        success(data) {
            const suffix = data.status === 'open' ? '' : ` Status course: ${data.status}.`;
            setAvailabilityMessage(`${data.remaining} kursi tersisa untuk ${data.course}.${suffix}`, 'success');
        },
        error() {
            setAvailabilityMessage('Gagal memuat ketersediaan course.', 'danger');
        },
    });
});

let searchTimer;

function loadCourses(url = null) {
    const form = $('#course-search-form');

    if (!form.length) {
        return;
    }

    const targetUrl = url || form.attr('action');
    const q = $('#live-search').val();
    const status = $('#status-filter').val();

    $('#ajax-status').text('Memuat hasil...');

    $.get(targetUrl, { q, status, partial: 1 })
        .done(function (html) {
            $('#course-results').replaceWith(html);
            $('#ajax-status').text('Hasil diperbarui tanpa reload halaman.');
        })
        .fail(function () {
            $('#ajax-status').text('Gagal memuat hasil. Gunakan tombol Cari sebagai fallback.');
        });
}

$(document).on('input', '#live-search', function () {
    clearTimeout(searchTimer);
    searchTimer = setTimeout(function () {
        loadCourses();
    }, 300);
});

$(document).on('change', '#status-filter', function () {
    loadCourses();
});

$(document).on('click', '#course-results .pagination a', function (event) {
    event.preventDefault();
    loadCourses($(this).attr('href'));
});

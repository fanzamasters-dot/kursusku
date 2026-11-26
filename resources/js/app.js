import 'bootstrap';
import $ from 'jquery';

window.$ = window.jQuery = $;

// ---------- Pertemuan 9/12: cek sisa kursi (halaman enrollment) ----------
$(document).on('change', '#course_id', function () {
    const id = this.value;

    if (!id) {
        $('#availability')
            .removeClass('alert-success alert-danger')
            .addClass('alert-secondary')
            .text('Pilih kursus untuk melihat sisa kursi.');
        return;
    }

    $('#availability')
        .removeClass('alert-success alert-danger')
        .addClass('alert-secondary')
        .text('Memuat ketersediaan...');

    $.ajax({
        url: `/courses/${id}/availability`,
        method: 'GET',
        dataType: 'json',
        success(data) {
            $('#availability')
                .removeClass('alert-secondary alert-danger')
                .addClass('alert-success')
                .text(`${data.remaining} kursi tersisa untuk ${data.course}.`);
        },
        error() {
            $('#availability')
                .removeClass('alert-secondary alert-success')
                .addClass('alert-danger')
                .text('Gagal memuat ketersediaan kursus.');
        }
    });
});

// ---------- Pertemuan 13: live search Ajax (pengayaan, fallback GET tetap ada) ----------
let searchTimer;

function showCourseError(show) {
    $('#course-error').toggleClass('d-none', !show);
}

function loadCourses(url, params) {
    $('#course-results').css('opacity', 0.5); // feedback loading

    $.get(url, params)
        .done(function (html) {
            showCourseError(false);
            $('#course-results').replaceWith(html);
        })
        .fail(function () {
            console.error('Gagal memuat hasil course.');
            $('#course-results').css('opacity', 1);
            showCourseError(true);
        });
}

function searchCourses() {
    const url = $('#course-filter-form').attr('action');
    loadCourses(url, {
        q: $('#live-search').val(),
        status: $('#status-filter').val(),
        partial: 1,
    });
}

// Debounce 300 ms: request dikirim setelah pengguna berhenti mengetik.
$(document).on('input', '#live-search', function () {
    clearTimeout(searchTimer);
    searchTimer = setTimeout(searchCourses, 300);
});

$(document).on('change', '#status-filter', function () {
    searchCourses();
});

// Klik pagination saat Ajax aktif: ganti hasil saja, tanpa reload penuh.
// Link pagination sudah membawa q, status, dan page (withQueryString).
$(document).on('click', '#course-results .pagination a', function (e) {
    e.preventDefault();
    loadCourses($(this).attr('href'), { partial: 1 });
});

# Implementation Map Pertemuan 7-13

## Pertemuan 7 - Laravel MVC

- `routes/web.php`: named route `home`.
- `HomeController@index`: menyiapkan data dashboard dan featured Course.
- `resources/views/home.blade.php`: Blade view.
- `public/images/hero-kursus.jpg`: asset publik.

Alur: Browser -> Route -> Controller -> Eloquent/data -> Blade -> HTML response.

## Pertemuan 9 - Layout, Bootstrap, jQuery Ajax

- `layouts/app.blade.php`: master layout.
- `partials/navbar.blade.php`: partial reusable.
- `resources/css/app.css`: Bootstrap via Vite + custom CSS.
- `resources/js/app.js`: jQuery, Ajax availability, error state.
- `enrollments/create.blade.php`: form menggunakan `@csrf`.

## Pertemuan 10-11 - Course CRUD

Schema: `code`, `name`, `description`, `fee`, `quota`, `start_date`, `status`.

- Migration Course.
- Course model + `$fillable` + cast date.
- Resource route.
- CourseController lengkap.
- StoreCourseRequest dan UpdateCourseRequest.
- Create, index, show, edit Blade.
- Delete menggunakan method spoofing DELETE dan confirm dialog.

## Pertemuan 12 - Relational Core

ERD:

```text
Course (1) -----< Enrollment >----- (1) Participant
```

Constraint:

- `enrollments.participant_id -> participants.id`
- `enrollments.course_id -> courses.id`
- cascade on delete di dua foreign key
- unique `(participant_id, course_id)`

Report memakai eager loading `Enrollment::with(['participant','course'])`.

## Pertemuan 13 - Data Discovery

Course index:

- `q` mencari `code` atau `name`.
- filter status hanya `open/closed/draft`.
- `paginate(10)->withQueryString()`.
- baseline GET tetap bekerja tanpa JavaScript.
- `partial=1` mengembalikan `_results.blade.php`.
- live search Ajax debounce 300 ms.
- Ajax pagination menggunakan delegated click handler.

Dashboard beranda menampilkan count Course, open Course, Participant, dan Enrollment.

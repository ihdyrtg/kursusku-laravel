# KursusKu - Laravel Project Pertemuan 7-13

Project praktikum Pemrograman Web III berbasis Laravel 12, PHP 8.3+, MySQL, Blade, Bootstrap, Vite, jQuery Ajax, dan Eloquent.

Project ini adalah kondisi akhir yang mengintegrasikan panduan Pertemuan 7 sampai 13. 

## Fitur akhir

- Named route `home`, `HomeController`, Blade, asset publik, dan pola MVC.
- Master Blade layout, navbar reusable, Bootstrap melalui Vite, jQuery, dan CSRF.
- Endpoint JSON ketersediaan kursi dan Ajax tanpa reload.
- Database MySQL untuk `courses`, `participants`, dan `enrollments`.
- CRUD Course lengkap: index, create, store, show, edit, update, delete.
- `StoreCourseRequest` dan `UpdateCourseRequest`, termasuk unique rule yang benar saat update.
- Relasi Course 1:M Enrollment dan Participant 1:M Enrollment.
- Composite unique `participant_id + course_id` untuk mencegah enrollment ganda.
- Foreign key dengan `cascadeOnDelete()`.
- Laporan enrollment dengan eager loading participant dan course.
- Search `q`, filter `draft/open/closed`, pagination 10 item, `withQueryString()`.
- Progressive enhancement: live search jQuery Ajax + debounce 300 ms + Ajax pagination.
- Dashboard count: total Course, Course open, Participant, Enrollment.
- Seeder berisi 24 course, 5 participant, dan beberapa enrollment dummy.
- Feature test untuk CRUD, relasi/enrollment, availability, cascade, search, dan pagination.
- Template evidence, test matrix, ERD, implementation map, AI usage log, dan draft artikel.

## Requirement

- PHP 8.3 atau lebih baru
- Composer
- Node.js dan npm
- MySQL / Laragon
- Git opsional tetapi disarankan


## Mapping panduan 7-13

- **P7:** Laravel, MVC, named route, controller, Blade, asset, Git/README.
- **P8:** UTS/ETS; tidak menambah milestone aplikasi.
- **P9:** master layout, Bootstrap + Vite, jQuery Ajax, form + CSRF, availability JSON.
- **P10:** MySQL, migration Course, model, Create + Read.
- **P11:** show, Form Request, edit, update, delete, validation.
- **P12:** Participant + Enrollment, FK, composite unique, Eloquent relation, report, cascade.
- **P13:** search, status filter, pagination 10/page, `withQueryString`, partial response, live search, debounce, Ajax pagination, dashboard counts, draft artikel.


Jangan upload folder `vendor`, `node_modules`, `.env`, atau `public/build` jika ingin mengikuti workflow source repository yang rapi.

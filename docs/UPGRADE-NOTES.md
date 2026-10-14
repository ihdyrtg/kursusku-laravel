# Catatan Integrasi Panduan

Project ini merepresentasikan kondisi akhir setelah Pertemuan 13, bukan snapshot terpisah setiap minggu.

## 1. Status Course pada Pertemuan 12

Contoh controller Pertemuan 12 menggunakan `Course::where('status', 'active')`, tetapi schema Course dari Pertemuan 10/11 serta filter Pertemuan 13 menggunakan tiga nilai: `draft`, `open`, `closed`.

Keputusan project final: form enrollment hanya menampilkan Course dengan status `open`.

## 2. Availability Pertemuan 9

Pada Pertemuan 9 availability berasal dari array dummy agar fokus pada Ajax. Setelah Course dan Enrollment sudah berada di database, mempertahankan array dummy akan membuat dua sumber data yang tidak sinkron.

Keputusan project final: endpoint `/courses/{course}/availability` tetap dipakai, tetapi nilai `remaining` dihitung dari `quota - jumlah enrollment`.

## 3. Form Pertemuan 9 dan Pertemuan 12

Form Pertemuan 9 berisi nama, email, dan course untuk latihan UI. Pertemuan 12 memperkenalkan master Participant dan foreign key.

Keputusan project final: form final memilih Participant dan Course sebagai foreign key, sesuai relational core Pertemuan 12. Seeder menyediakan participant dummy agar project langsung dapat diuji.

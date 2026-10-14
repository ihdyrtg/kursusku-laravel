# Test Matrix Pertemuan 7-13

| ID | Skenario | Hasil yang diharapkan |
|---|---|---|
| T01 | Buka `/` | Dashboard tampil |
| T02 | Buka `/courses` | Daftar Course tampil |
| T03 | Tambah Course valid | Data tersimpan dan muncul |
| T04 | Tambah code duplikat | Ditolak di field code |
| T05 | Quota 0 | Ditolak |
| T06 | Quota 501 | Ditolak |
| T07 | Edit tanpa mengubah code | Update berhasil |
| T08 | Buka Course ID tidak ada | 404 |
| T09 | Hapus Course dummy | Course hilang |
| T10 | Buat Enrollment valid | Tersimpan |
| T11 | Enrollment participant-course sama dua kali | Ditolak |
| T12 | Availability JSON | Status 200 dan remaining benar |
| T13 | Hapus Course yang punya Enrollment | Enrollment ikut terhapus |
| T14 | Search `q=Laravel` | Hanya hasil relevan |
| T15 | Filter `status=open` | Hanya open |
| T16 | Page 2 | Maksimum 10 per page dan query string tetap |
| T17 | Search menghasilkan 0 data | Empty state tampil |
| T18 | JavaScript dimatikan | Form GET search/filter tetap bekerja |
| T19 | Live search | Request setelah debounce sekitar 300 ms |
| T20 | Ajax pagination | Hasil berubah tanpa full reload |

Feature test otomatis tersedia pada folder `tests/Feature` untuk bagian inti.

# Memasukkan ZIP ke GitHub tanpa Menghilangkan History

Repository tujuan: `ihdyrtg/kursusku-laravel`.

## Cara yang disarankan

1. Clone repository yang sudah ada.
2. Ekstrak ZIP project ini di folder sementara.
3. Salin semua isi ZIP ke working tree hasil clone. Jangan salin `.git` dari tempat lain.
4. Periksa `git status`.
5. Commit dan push.

```bash
git add .
git commit -m "feat: complete KursusKu meetings 7-13"
git push origin main
```

Jika remote sudah ada di local project, jangan jalankan `git remote add origin` lagi.

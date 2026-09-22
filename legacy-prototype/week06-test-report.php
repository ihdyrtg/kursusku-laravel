<?php
require __DIR__ . '/helpers.php';

$tests = [
    ['Mahasiswa, Web Dasar, 1 paket', formatRupiah(300000 - intdiv(300000 * 20, 100)), 'Rp 240.000'],
    ['Guru, PHP Dasar, 1 paket', formatRupiah(400000 - intdiv(400000 * 15, 100)), 'Rp 340.000'],
    ['Umum, Laravel Dasar, 1 paket', formatRupiah(500000), 'Rp 500.000'],
    ['Mahasiswa, Web Dasar, 2 paket', formatRupiah(600000 - intdiv(600000 * 20, 100)), 'Rp 480.000'],
    ['Nama kosong', 'Nama wajib diisi.', 'Nama wajib diisi.'],
    ['Email tidak valid', 'Email tidak valid.', 'Email tidak valid.'],
    ['Minat kosong', 'Belum memilih minat.', 'Belum memilih minat.'],
    ['3 minat', 'Frontend, Backend, Database', 'Frontend, Backend, Database'],
    ['Metode offline', getLearningModeLabel('offline'), 'Tatap Muka'],
    ['Metode hybrid', getLearningModeLabel('hybrid'), 'Hybrid'],
    ['GET process.php', 'Redirect ke register.php', 'Redirect ke register.php'],
    ['Tambah fasilitas', 'Dirender otomatis dengan foreach', 'Dirender otomatis dengan foreach'],
];
?>
<!doctype html><html lang="id"><head>
<meta charset="utf-8"><meta name="viewport" content="width=device-width,initial-scale=1">
<title>Test Matrix Week 06</title><link rel="stylesheet" href="assets/css/style.css">
</head><body class="utility-page"><main class="utility-card wide-card">
<span class="eyebrow">EVIDENCE WEEK 06</span><h1>Test Matrix Pertemuan 6</h1>
<div class="table-wrap"><table class="course-table compact-table">
<thead><tr><th>No</th><th>Skenario</th><th>Actual</th><th>Expected</th><th>Status</th></tr></thead><tbody>
<?php foreach ($tests as $i => [$name,$actual,$expected]): $pass=$actual===$expected; ?>
<tr><td><?= $i+1 ?></td><td><?= e($name) ?></td><td><?= e($actual) ?></td><td><?= e($expected) ?></td>
<td><span class="badge <?= $pass ? 'badge-available':'badge-full' ?>"><?= $pass ? 'PASS':'FAIL' ?></span></td></tr>
<?php endforeach; ?>
</tbody></table></div></main></body></html>

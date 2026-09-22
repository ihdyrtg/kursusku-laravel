<?php
$tests = [
    ['Load form', 'Form tampil tanpa error', 'PASS'],
    ['Required', 'Browser menahan field wajib', 'PASS'],
    ['Email', 'Input type=email meminta format benar', 'PASS'],
    ['Nama pendek', 'minlength=3 mencegah submit', 'PASS'],
    ['GET', 'Parameter tampil di query string', 'PASS'],
    ['POST', 'Data submit tidak tampil pada URL', 'PASS'],
    ['Radio', 'Nilai peserta tampil di hasil', 'PASS'],
    ['Checkbox', 'Beberapa minat dapat diterima', 'PASS'],
    ['Textarea', 'Catatan di-escape ketika ditampilkan', 'PASS'],
    ['Hidden', 'source=week-05 diterima', 'PASS'],
    ['Mobile', 'Layout 1 kolom sekitar 360px', 'PASS'],
    ['Navigasi', 'Link beranda/form/katalog bekerja', 'PASS'],
];
?>
<!doctype html><html lang="id"><head>
<meta charset="utf-8"><meta name="viewport" content="width=device-width,initial-scale=1">
<title>Test Matrix Week 05</title><link rel="stylesheet" href="assets/css/style.css">
</head><body class="utility-page"><main class="utility-card wide-card">
<span class="eyebrow">EVIDENCE WEEK 05</span><h1>Test Matrix Pertemuan 5</h1>
<div class="table-wrap"><table class="course-table compact-table">
<thead><tr><th>No</th><th>Test</th><th>Expected / Actual</th><th>Status</th></tr></thead><tbody>
<?php foreach ($tests as $i => [$name,$expected,$status]): ?>
<tr><td><?= $i+1 ?></td><td><?= htmlspecialchars($name) ?></td><td><?= htmlspecialchars($expected) ?></td>
<td><span class="badge badge-available"><?= $status ?></span></td></tr>
<?php endforeach; ?>
</tbody></table></div></main></body></html>

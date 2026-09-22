<?php

declare(strict_types=1);

require_once __DIR__ . '/helpers.php';

$tests = [
    ['Rupiah', rupiah(250000), 'Rp 250.000'],
    ['Penuh', statusKursus(25, 25), 'Penuh'],
    ['Tersedia', statusKursus(30, 29), 'Tersedia'],
    ['Sisa kosong', sisaKursi(20, 0), 20],
    ['Sisa penuh', sisaKursi(25, 25), 0],
    ['Tanggal', formatTanggal('2026-09-15'), '15-09-2026'],
];
?>
<!doctype html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Test Function - KursusKu</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body class="utility-page">
<main class="utility-card wide-card">
    <span class="eyebrow">MILESTONE 4</span>
    <h1>6 Test Function Reusable</h1>
    <p>Expected tidak diubah agar test menjadi PASS. Jika ada FAIL, function yang diperiksa.</p>
    <div class="test-list">
        <?php foreach ($tests as [$name, $actual, $expected]): ?>
            <?php $passed = $actual === $expected; ?>
            <div class="test-item">
                <span class="badge <?= $passed ? 'badge-available' : 'badge-full' ?>"><?= $passed ? 'PASS' : 'FAIL' ?></span>
                <strong><?= htmlspecialchars($name) ?></strong>
                <code>actual=<?= htmlspecialchars((string) $actual) ?></code>
                <code>expected=<?= htmlspecialchars((string) $expected) ?></code>
            </div>
        <?php endforeach; ?>
    </div>
    <a class="button" href="index.php#katalog">Kembali ke Katalog</a>
</main>
</body>
</html>

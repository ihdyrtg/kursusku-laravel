<?php

declare(strict_types=1);

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: registration.php');
    exit;
}

$name = trim($_POST['name'] ?? '');
$email = trim($_POST['email'] ?? '');
$phone = trim($_POST['phone'] ?? '');
$studyProgram = trim($_POST['study_program'] ?? '');
$course = trim($_POST['course'] ?? '');
$participantType = trim($_POST['participant_type'] ?? '');
$interests = $_POST['interests'] ?? [];
$note = trim($_POST['note'] ?? '');
$source = trim($_POST['source'] ?? '');

if (!is_array($interests)) {
    $interests = [];
}

$interestText = implode(', ', array_map(
    static fn ($value): string => htmlspecialchars((string) $value, ENT_QUOTES, 'UTF-8'),
    $interests
));

function out(mixed $value): string
{
    return htmlspecialchars((string) $value, ENT_QUOTES, 'UTF-8');
}
?>
<!doctype html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hasil Pendaftaran - KursusKu</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body class="utility-page">
<main class="utility-card">
    <span class="eyebrow">MILESTONE 5 · HASIL POST</span>
    <h1>Data latihan diterima</h1>
    <div class="result-grid">
        <p><b>Nama:</b><br><?= out($name) ?></p>
        <p><b>Email:</b><br><?= out($email) ?></p>
        <p><b>Telepon:</b><br><?= out($phone) ?></p>
        <p><b>Program studi:</b><br><?= out($studyProgram) ?></p>
        <p><b>Kursus:</b><br><?= out($course) ?></p>
        <p><b>Jenis peserta:</b><br><?= out($participantType) ?></p>
        <p><b>Minat:</b><br><?= $interestText !== '' ? $interestText : 'Belum memilih minat' ?></p>
        <p><b>Sumber hidden:</b><br><?= out($source) ?></p>
    </div>
    <div class="formula-box">
        <strong>Catatan</strong>
        <span><?= out($note !== '' ? $note : 'Tidak ada catatan.') ?></span>
    </div>
    <div class="button-row">
        <a class="button" href="registration.php">Isi Lagi</a>
        <a class="button button-secondary" href="index.php">Beranda</a>
    </div>
</main>
</body>
</html>

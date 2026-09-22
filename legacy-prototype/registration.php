<?php
declare(strict_types=1);
?>
<!doctype html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Form Pendaftaran - KursusKu</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body class="utility-page">
<main class="utility-card form-card">
    <span class="eyebrow">MILESTONE 5 · FORM + POST</span>
    <h1>Form Pendaftaran KursusKu</h1>
    <p>Form akhir menggunakan <strong>POST</strong>. Semua pasangan key-value berasal dari atribut <code>name</code>.</p>

    <form method="POST" action="process-registration.php" class="stack-form">
        <input type="hidden" name="source" value="week-05">

        <div class="form-grid">
            <div class="field">
                <label for="name">Nama lengkap</label>
                <input id="name" name="name" type="text" required minlength="3" maxlength="80"
                       placeholder="Contoh: Alya Putri">
            </div>

            <div class="field">
                <label for="email">Email</label>
                <input id="email" name="email" type="email" required maxlength="120"
                       placeholder="nama@example.com">
            </div>

            <div class="field">
                <label for="phone">Nomor telepon</label>
                <input id="phone" name="phone" type="tel" required minlength="10" maxlength="16"
                       placeholder="08xxxxxxxxxx">
            </div>

            <div class="field">
                <label for="study_program">Program studi</label>
                <input id="study_program" name="study_program" type="text" required maxlength="80"
                       placeholder="Pendidikan Teknik Informatika dan Komputer">
            </div>
        </div>

        <div class="field">
            <label for="course">Pilih kursus</label>
            <select id="course" name="course" required>
                <option value="">-- Pilih kursus --</option>
                <option value="Web Dasar">Web Dasar</option>
                <option value="PHP Dasar">PHP Dasar</option>
                <option value="Laravel Dasar">Laravel Dasar</option>
            </select>
        </div>

        <fieldset class="field">
            <legend>Jenis peserta</legend>
            <div class="choice-row">
                <label><input type="radio" name="participant_type" value="mahasiswa" required> Mahasiswa</label>
                <label><input type="radio" name="participant_type" value="umum"> Umum</label>
            </div>
        </fieldset>

        <fieldset class="field">
            <legend>Minat tambahan</legend>
            <div class="choice-row">
                <label><input type="checkbox" name="interests[]" value="frontend"> Frontend</label>
                <label><input type="checkbox" name="interests[]" value="backend"> Backend</label>
                <label><input type="checkbox" name="interests[]" value="database"> Database</label>
            </div>
        </fieldset>

        <div class="field">
            <label for="note">Catatan</label>
            <textarea id="note" name="note" rows="4" maxlength="300"
                      placeholder="Tuliskan catatan singkat bila ada"></textarea>
        </div>

        <div class="button-row">
            <button class="button" type="submit">Kirim Pendaftaran</button>
            <a class="button button-secondary" href="get-demo.php">Eksperimen GET</a>
            <a class="button button-secondary" href="index.php">Kembali ke Beranda</a>
        </div>
    </form>
</main>
</body>
</html>

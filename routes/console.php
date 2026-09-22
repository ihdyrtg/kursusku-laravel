<?php

use Illuminate\Support\Facades\Artisan;

Artisan::command('kursusku:hello', function () {
    $this->comment('KursusKu siap dipelajari.');
})->purpose('Menampilkan pesan latihan KursusKu');

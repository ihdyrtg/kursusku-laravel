<?php

$checks = [
    'routes/web.php exists' => is_file(__DIR__ . '/../routes/web.php'),
    'HomeController exists' => is_file(__DIR__ . '/../app/Http/Controllers/HomeController.php'),
    'home.blade.php exists' => is_file(__DIR__ . '/../resources/views/home.blade.php'),
    'public css exists' => is_file(__DIR__ . '/../public/css/style.css'),
    'public image exists' => is_file(__DIR__ . '/../public/images/hero-kursus.jpg'),
];

$route = file_get_contents(__DIR__ . '/../routes/web.php');
$controller = file_get_contents(__DIR__ . '/../app/Http/Controllers/HomeController.php');
$blade = file_get_contents(__DIR__ . '/../resources/views/home.blade.php');

$checks['named route home'] = str_contains($route, "->name('home')");
$checks['route points HomeController'] = str_contains($route, 'HomeController::class');
$checks['controller returns home view'] = str_contains($controller, "view('home'");
$checks['controller sends featured data'] = str_contains($controller, '$featured');
$checks['Blade loops featured'] = str_contains($blade, '@foreach ($featured as $course)');
$checks['Blade uses route(home)'] = str_contains($blade, "route('home')");
$checks['Blade uses asset helper'] = str_contains($blade, "asset('css/style.css')");

$failed = 0;
foreach ($checks as $name => $passed) {
    echo ($passed ? 'PASS' : 'FAIL') . " | $name\n";
    if (!$passed) {
        $failed++;
    }
}
exit($failed === 0 ? 0 : 1);

<?php

require __DIR__.'/vendor/autoload.php';
$app = require_once __DIR__.'/bootstrap/app.php';

use Illuminate\Contracts\Console\Kernel;
use Illuminate\Support\Facades\Auth;

$app->make(Kernel::class)->bootstrap();

$credentials = ['email' => 'admin@amikom.ac.id', 'password' => 'password'];
if (Auth::attempt($credentials)) {
    echo "Auth::attempt succeeded!\n";
    $user = Auth::user();
    echo "User name: " . $user->name . "\n";
    echo "User role: " . $user->role . "\n";
} else {
    echo "Auth::attempt failed!\n";
}

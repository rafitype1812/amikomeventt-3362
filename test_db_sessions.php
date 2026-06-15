<?php
require __DIR__.'/vendor/autoload.php';
$app = require_once __DIR__.'/bootstrap/app.php';

use Illuminate\Contracts\Console\Kernel;
use Illuminate\Support\Facades\DB;

$app->make(Kernel::class)->bootstrap();

try {
    $sessions = DB::table('sessions')->get();
    echo "Total sessions in database: " . count($sessions) . "\n";
    foreach ($sessions as $s) {
        echo "Session ID: " . $s->id . "\n";
        echo "  User ID: " . $s->user_id . "\n";
        echo "  IP Address: " . $s->ip_address . "\n";
        echo "  Last Activity: " . date('Y-m-d H:i:s', $s->last_activity) . "\n";
    }
} catch (\Exception $e) {
    echo "Error: " . $e->getMessage() . "\n";
}

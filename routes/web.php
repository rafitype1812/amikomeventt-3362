<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\EventController as EventAdminController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\AuthController;

// ─────────────────────────────────────────────
//  Rute User Area
// ─────────────────────────────────────────────

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/test-session', function () {
    return response()->json([
        'session_id' => session()->getId(),
        'auth_check' => Auth::check(),
        'user' => Auth::user(),
    ]);
});

Route::get('/event/1', [EventController::class, 'show'])->name('events.show');

Route::get('/checkout', [EventController::class, 'checkout'])->name('checkout');

Route::get('/my-ticket', [EventController::class, 'ticket'])->name('ticket');

// Rute lama (pertemuan sebelumnya – tetap dipertahankan)
Route::get('/profil', function () { return view('profil'); });
Route::get('/katalog', function () { return view('katalog'); });
Route::get('/bantuan', function () { return view('bantuan'); });
Route::get('/kontak', function () { return view('kontak'); });

// ─────────────────────────────────────────────
//  Rute Admin Area
// ─────────────────────────────────────────────

Route::get('/login', function () {
    return redirect()->route('admin.login');
})->name('login');

Route::prefix('admin')->name('admin.')->group(function () {
    // Rute Login bebas akses
    Route::get('login', [AuthController::class, 'showLogin'])->name('login');
    Route::post('login', [AuthController::class, 'login'])->name('login.post');
    Route::post('logout', [AuthController::class, 'logout'])->name('logout');

    // Mengamankan Route Administrasi di balik tembok (Middleware)
    Route::middleware(['auth', 'admin'])->group(function () {
        Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
        Route::resource('events', EventAdminController::class);
        Route::get('transactions', function () {
            return view('admin.transactions');
        })->name('transactions.index');
        Route::resource('categories', CategoryController::class);
        Route::resource('partners', \App\Http\Controllers\Admin\PartnerController::class);
    });
});

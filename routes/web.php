<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\Userpemilik;
use App\Http\Controllers\Admin\Userpencari;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\PemesananController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Pemilik\KamarController;
use App\Http\Controllers\Admin\DataKostController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Admin\TransactionController;
use App\Http\Controllers\Admin\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/dashboard', [admindashboardController::class, 'index'])->name('dashboard-admin');

// controller frontend
// Route::get('/dash', [DashController::class, 'index'])->name('dash');
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/Tentang-Kami', [HomeController::class, 'about'])->name('about');
Route::get('/Pelayanan', [HomeController::class, 'pelayanan'])->name('pelayanan');
Route::get('/Pemesanan', [PemesananController::class, 'index'])->name('pemesanan');
Route::get('/Pemesanan/details/{id}', [PemesananController::class, 'details'])->name('pemesanan-details')->middleware('auth');
Route::get('/Pemesanan/details/{id}/checkout', [PemesananController::class, 'checkout'])->name('checkout')->middleware('auth');
Route::post('/pay', [PemesananController::class, 'pay'])->middleware('auth');
Route::resource('setting-account', SettingController::class)->middleware('auth');





Route::prefix('admin')
    ->middleware('auth', 'checkrole:admin')
    ->namespace('App\Http\Controllers\Admin')
    ->group(function () {
        Route::get('/', [DashboardController::class, 'admin'])->name('dashboard-admin');
        Route::resource('profile', ProfileController::class);
        Route::resource('transaction', TransactionController::class);
        Route::resource('datakost', DataKostController::class);
        Route::resource('data-pencari', Userpencari::class);
        Route::resource('data-pemilik', Userpemilik::class);
    });



// controller user

Route::middleware('auth', 'checkrole:pemilik')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'pemilik'])->name('dashboard');
    Route::get('/data-kost', [App\Http\Controllers\Pemilik\KostController::class, 'index'])->name('data-kost');
    Route::get('/data-kamar', [App\Http\Controllers\Pemilik\KamarController::class, 'index'])->name('data-kamar');
    Route::get('/transaction', [App\Http\Controllers\Pemilik\transactionController::class, 'index'])->name('transaction');


    Route::post('/kamarkost-add', [App\Http\Controllers\Pemilik\KamarController::class, 'tambah']);
    Route::delete('/kamarkost-delete/{id}', [App\Http\Controllers\Pemilik\KamarController::class, 'destroy']);
    Route::post('/kostkamar-add', [App\Http\Controllers\Pemilik\KostController::class, 'store']);
    Route::put('/kostkamar-edit/{id}', [App\Http\Controllers\Pemilik\KamarController::class, 'update']);
    Route::delete('/kostkamar-delete/{id}', [App\Http\Controllers\Pemilik\KostController::class, 'destroy']);
    // Route::resource('kamar', KamarController::class);
});

Route::middleware('auth', 'checkrole:pencari')->group(function () {
    Route::get('/home-kost', [App\Http\Controllers\Pencari\DashboardKostController::class, 'index'])->name('Home-Kost');
    Route::get('/transaction-kost', [PemesananController::class, 'pembayaran'])->name('Pembayaran-Kost');
    Route::get('/riwayat', [PemesananController::class, 'riwayat'])->name('riwayat-Kost');
});





Auth::routes();

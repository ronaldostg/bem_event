<?php

use App\Http\Controllers\admin\AcaraController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthenticateController;
use App\Http\Controllers\BookingController as bookingController;
use App\Http\Controllers\admin\TransaksiController;
use App\Http\Controllers\admin\KategoriController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('admin.login');
// });


// Route::get('/login', [AuthenticateController::class, 'login'])->name('login');


// Route::post('/authenticate', [AuthenticateController::class, 'authenticate']);

// Route::get('/',  function () {
//         return 'test';
//     });


// Route::get('/index', [AuthenticateController::class, 'index']);
// Route::get('/kategori', [AuthenticateController::class, 'index']);
// Route::get('/dashboard', [AuthenticateController::class, 'dashboard']);


// Route::post('/logout', [AuthenticateController::class, 'logout']);

Route::get('/', [BookingController::class, 'index']);

Route::post('/booking', [BookingController::class, 'store']);


Route::prefix('admin')->group(function(){
    Route::get('/transaksi', [TransaksiController::class, 'index']);

    Route::resource('/kategori', KategoriController::class);
    Route::resource('acara', AcaraController::class);
    
    
});


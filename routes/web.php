<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\DashboardController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/FCpendapatan', [DashboardController::class, 'pendapatan']);
Route::get('/prediksiMenunggak', [DashboardController::class, 'menunggak']);
Route::get('/prediksiMenunggak/penggunabaru', [DashboardController::class, 'menunggak2']);
Route::get('/prediksiKecelakaan', [DashboardController::class, 'kecelakaan']);
Route::get('/prediksiKecelakaan/penggunabaru', [DashboardController::class, 'kecelakaan2']);
Route::get('/download', [DashboardController::class, 'download']);

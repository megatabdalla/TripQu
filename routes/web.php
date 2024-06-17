<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ShipController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\HistoryController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReceiptController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\kirimTiketController;
use App\Http\Controllers\DatuserController;

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

Route::get('/', [HomeController::class, 'index']);

Route::middleware(['guest'])->group(function(){
    Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::post('/login', [AuthController::class, 'authenticate']);
    Route::get('/register', [AuthController::class, 'reg']);
    Route::post('/register', [AuthController::class, 'store']);
});

Route::middleware(['auth'])->group(function(){
    Route::get('/history', [HistoryController::class, 'index']);
    Route::get('/profile', [ProfileController::class, 'index']);
    Route::get('/adashboard', [DashboardController::class, 'admin'])->middleware('userAccess:Admin');
    Route::get('/gdashboard', [DashboardController::class, 'agen'])->middleware('userAccess:Agen');
    Route::get('/receipt', [ReceiptController::class, 'index'])->middleware('userAccess:Admin');
    Route::post('/logout', [AuthController::class, 'logout']);
    Route::get('/del/{id}', [ReceiptController::class, 'deny'])->name('delete');
    Route::get('/acctiket/{id}', [kirimTiketController::class, 'index'])->middleware('userAccess:Admin');
    Route::get('/datauser', [DatuserController::class, 'index'])->middleware('userAccess:Admin');
});

Route::get('/search', [SearchController::class, 'srch']);

Route::get('/schedule', [ShipController::class, 'index']);

Route::get('/pay', [PaymentController::class, 'con']);

Route::post('/book', [ReceiptController::class, 'book']);
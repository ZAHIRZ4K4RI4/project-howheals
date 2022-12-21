<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Backend\CustomerController;
use App\Http\Controllers\Backend\TransaksiController;

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
    return view('dashboard');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.index');
    })->name('dashboard');
});

// route logout
Route::get('/admin/logout', [AdminController::class, 'logout'])->name('admin.logout');

//route customer
Route::prefix('customers')->group(function () {
    Route::get('/view', [CustomerController::class, 'CustomerView'])->name('backend.customers.view');
    Route::get('/add', [CustomerController::class, 'CustomerAdd'])->name('backend.customers.add');
    Route::post('/store', [CustomerController::class, 'CustomerStore'])->name('customers.store');
    Route::get('/edit/{id}', [CustomerController::class, 'CustomerEdit'])->name('customers.edit');
    Route::post('/update/{id}', [CustomerController::class, 'CustomerUpdate'])->name('customers.update');
    Route::get('/delete/{id}', [CustomerController::class, 'CustomerDelete'])->name('customers.delete');
});

//route transaksi
Route::prefix('transaksis')->group(function () {
    Route::get('/view', [TransaksiController::class, 'TransaksiView'])->name('backends.transaksi.view');
    Route::get('/add', [TransaksiController::class, 'TransaksiAdd'])->name('backends.transaksi.add');
    Route::post('/store', [TransaksiController::class, 'TransaksiStore'])->name('transaksi.store');
    Route::get('/edit', [TransaksiController::class, 'TransaksiEdit'])->name('backend.transaksi.edit.view');
    Route::post('/update/{id}', [TransaksiController::class, 'TransaksiUpdate'])->name('transaksi.update');
    Route::get('/delete/{id}', [TransaksiController::class, 'TransaksiDelete'])->name('transaksi.delete');
});
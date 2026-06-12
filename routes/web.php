<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminAccountController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\bencanaController;



// ROUTE USER PUBLIK
Route::prefix('/')->group(function () {
    Route::get('/', [UserController::class, 'index'])->name('user.index');
    Route::get('/semua-bencana', [UserController::class, 'semuaBencana'])->name('user.semua.bencana');
    Route::get('/statiktik', [UserController::class, 'statistik'])->name('user.statistik');
    Route::get('/lokasi', [UserController::class, 'lokasi'])->name('user.lokasi');
    Route::get('/peta', [UserController::class, 'peta'])->name('user.peta');
    Route::get('/detail/{id}', [UserController::class, 'detail'])->name('user.detail');
    Route::get('/login', [UserController::class, 'login'])->name('user.login');
});

// ROUTE LOGIN dan LOGOUT
// Route::get('/', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/admin1', [AuthController::class, 'login'])->name('login.post');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

// ROUTE ADMIN (dengan middleware auth)
Route::prefix('admin')->middleware('auth')->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('admin.index');
    Route::get('/admin', [AdminController::class, 'admin'])->name('admin.admin');


    // CRUD Admin
    Route::get('/tambahadmin', [AdminAccountController::class, 'tambahadmin'])->name('admin.tambahadmin');
    Route::post('/simpanadmin', [AdminAccountController::class, 'simpanadmin'])->name('admin.simpanadmin');
    Route::delete('/admin/{id}', [AdminController::class, 'hapusadmin'])->name('admin.hapus');
    Route::get('/editadmin/{id}', [AdminAccountController::class, 'editadmin'])->name('admin.editadmin');
    Route::put('/editadmin/{id}', [AdminAccountController::class, 'update'])->name('admin.updateadmin');



    Route::get('/bencana', [bencanaController::class, 'index'])->name('admin.bencana');
    Route::get('/bencana/tambah', [bencanaController::class, 'create'])->name('admin.bencana.tambah');
    Route::post('/bencana/simpan', [bencanaController::class, 'store'])->name('admin.bencana.simpan');
    Route::get('/bencana/edit/{id}', [bencanaController::class, 'edit'])->name('admin.bencana.edit');
    Route::put('/bencana/update/{id}', [bencanaController::class, 'update'])->name('admin.bencana.update');
    Route::delete('/bencana/hapus/{id}', [bencanaController::class, 'destroy'])->name('admin.bencana.hapus');

    
    });


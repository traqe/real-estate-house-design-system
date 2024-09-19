<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('admin_login', [AdminController::class, 'getLogin'])->name('admin.login');
Route::post('admin', [AdminController::class, 'postLogin'])->name('admin');

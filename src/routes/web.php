<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

// トップページでログイン画面を表示
Route::get('/', [AuthController::class, 'index'])->name('home');

// 登録画面表示（register.blade.php を表示）
Route::get('/register', function () {
    return view('auth.register');
})->name('register');

// 登録処理
Route::post('/register', [AuthController::class, 'register'])->name('register.post');

// ログイン画面表示（ログイン用URLとしても用意）
Route::get('/login', function () {
    return view('auth.login');
})->name('login');

// ログイン処理
Route::post('/login', [AuthController::class, 'login'])->name('login.post');

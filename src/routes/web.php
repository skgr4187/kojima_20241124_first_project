<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisteredUserController;
use App\Http\Controllers\MiddlewareController;
use Illuminate\Support\Facades\Auth;

// Auth::routes();


// ログインページを表示
Route::get('/login', [RegisteredUserController::class, 'show_login']);

// ログイン処理およびバリデーション
Route::post('/login', [RegisteredUserController::class, 'store']);

// 会員登録ページを表示
Route::get('/register', [RegisteredUserController::class, 'show_register']);

// 会員登録処理およびバリデーション
Route::post('/register', [RegisteredUserController::class, 'create']);

// ログアウト処理をしてログインページを表示
Route::post('/logout', [RegisteredUserController::class, 'logout']);

// 勤怠管理画面を表示する
Route::get('/admin', [RegisteredUserController::class, 'index']);

// 現在のユーザー情報を取得
$user = Auth::user();

// ログイン中のユーザーにのみ打刻ページを表示
$isAuthenticated = Auth::check();
// Route::middleware('auth')->group(function () {
Route::get('/', [RegisteredUserController::class, 'show_attendance']);

// 勤務開始処理
Route::post('/', [RegisteredUserController::class, 'work_start']);

// 勤務終了処理
Route::post('/', [RegisteredUserController::class, 'work_fin']);

// 休憩開始処理
Route::post('/', [RegisteredUserController::class, 'break_start']);

// 休憩終了処理
Route::post('/', [RegisteredUserController::class, 'break_fin']);
// });

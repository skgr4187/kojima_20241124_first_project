<?php

namespace App\Http\Controllers;

use App\Models\Login;
use App\Models\Register;
use App\Models\Attendance;
use App\Models\Admin;

use Illuminate\Http\Request;
use App\Http\Requests\RegisterRequest;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class RegisteredUserController extends Controller
{
    // ログインページの表示
    public function show_login()
    {
        return view('auth.login');
        // フォルダ.php
    }

    // ログインページの入力内容を保存&バリデーションする
    public function store(LoginRequest $request)
    {
        if ($request->has('login')) {
            return redirect('/login')->withInput();
        }
    }

    // ログアウト処理
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('login');
    }



    // 会員登録画面を表示
    public function show_register()
    {
        return view('auth.register');
        // フォルダ.php
    }

    // 会員登録画面のバリデーション
    public function create(RegisterRequest $request)
    {
        if ($request->has('register')) {
            return redirect('/register')->withInput();
        }
    }

    // 打刻ページの表示(データの追加フォーム)
    public function show_attendance()
    {
        return view('attendance');
    }

    // 勤務開始処理(データベースにデータを追加)
    public function work_start(Request $request)
    {
        $admin = Admin::findOrFail($request->user_id);
        // もし出勤済みの場合はエラーを返す
        if ($admin->work_start) {
            return back()->withErrors('既に出勤済みです。');
        }
        $admin->work_start = now();
        $admin->status = 'work_start'; // 状態を更新
        $admin->save();
        return redirect()->back()->with('success', '出勤時刻を記録しました！');
    }

    // 勤務終了処理(データベースにデータを追加)
    public function work_fin(Request $request)
    {
        $admin = Admin::findOrFail($request->user_id);
        if (!$admin->work_fin) {
            return back()->withErrors('出勤記録がありません。');
        }
        // 既に退勤済みの場合はエラーを返す
        if ($admin->work_fin) {
            return back()->withErrors('既に退勤済みです。');
        }
        $admin->work_fin = now();
        $admin->status = 'work_fin'; // 状態を更新
        $admin->save();
        return redirect()->back()->with('success', '退勤時刻を記録しました！');
    }

    // 休憩開始処理(データベースにデータを追加)
    public function break_start(Request $request)
    {
        $admin = Admin::findOrFail($request->user_id);
        // 出勤していない場合はエラーを返す
        if (!$admin->work_start) {
            return back()->withErrors('出勤記録がありません。');
        }
        $admin->break_start = now();
        $admin->save();
        return redirect()->back()->with('success', '休憩開始時刻を記録しました！');
    }


    // 休憩終了処理(データベースにデータを追加)
    public function break_fin(Request $request)
    {
        $admin = Admin::findOrFail($request->user_id);
        // 休憩開始時刻がない場合はエラーを返す
        if (!$admin->break_start) {
            return back()->withErrors('休憩開始時刻が記録されていません。');
        }
        $admin->break_fin = now();
        $admin->save();
        return redirect()->back()->with('success', '休憩終了時刻を記録しました！');
    }


    // 勤怠管理画面を表示する
    public function index()
    {
        // ページネーション1ページにつき5件ずつ取得
        $admins = Admin::paginate(5);
        foreach ($admins as $admin) {
            //     if ($admin->work_start && $admin->work_fin) {
            //         // 出勤時刻と退勤時刻から総勤務時間を計算
            //         $totalWorkMinutes = $admin->work_start->diffInMinutes($admin->work_fin);

            //         // 休憩時間の計算（休憩開始・終了が設定されている場合のみ）
            //         $breakMinutes = 0;
            //         if ($admin->break_start && $admin->break_fin) {
            //             $breakMinutes = $admin->break_start->diffInMinutes($admin->break_fin);
            //         }

            //         // 勤務時間 (総勤務時間 - 休憩時間)
            //         $admin->work_time = $totalWorkMinutes - $breakMinutes;
            //     } else {
            //         $admin->work_time = null; // 勤務時間を算出できない場合
            //     }
            // }

            return view('admin', ['admins' => $admins]);
        }
    }
}

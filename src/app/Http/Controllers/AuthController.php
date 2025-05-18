<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    /**
     * トップページ表示（ログイン画面を表示する）
     */
    public function index()
    {
        return view('auth.login'); // ← login.blade.php を返す
    }

    /**
     * 会員登録処理
     */
    public function register(Request $request)
    {
        // 登録処理（今回は省略）
    }

    /**
     * ログイン処理
     */
    public function login(Request $request)
    {
        // ログイン処理（今回は省略）
    }
}

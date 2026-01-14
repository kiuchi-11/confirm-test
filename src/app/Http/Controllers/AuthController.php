<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Account;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function showRegistrationForm()
    {
        return view('register');
    }

    public function register(Request $request)
    {
        // 入力検証
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:accounts,email',  // users -> accounts
            'password' => 'required|string|min:6|confirmed',
        ]);

        // アカウント作成
        $account = Account::create([  // User -> Account
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        // ログイン画面にリダイレクト
        return redirect()->route('login')->with('success', 'アカウントが作成されました。');
    }

    // ログインフォームの表示
    public function showLoginForm()
    {
        return view('login'); // ログインフォームビュー（login.blade.php）
    }

    // ログイン処理（追加）
    public function login(Request $request)
    {
        // ログイン処理をここに追加（認証など）
    }
}

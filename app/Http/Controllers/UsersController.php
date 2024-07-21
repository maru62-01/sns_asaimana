<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

 // Authファサードをインポート

class UsersController extends Controller
{
    // ユーザープロフィールページを表示
    public function profile(){
        return view('users.profile');
    }

    // ユーザー検索ページを表示
    public function search(){
        return view('users.search');
    }

 //セッション
//     public function added()
// {
//     $userName = Auth::user()->name; // ユーザー名を取得
//     session(['userName' => $userName]); // セッションに保存



//     return view('auth.added');
// }
}

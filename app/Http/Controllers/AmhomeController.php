<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; // Authファサードの使用を忘れずに


class AmhomeController extends Controller{
    public function index() {
        $today=date('Y-m-d');
        return view('AMhome',['today'=>$today]);
    }

    public function toggleAuth() {
        if (Auth::check()) {
            Auth::logout();
        } else {
            // Logic to log in
        }

        return redirect('/');
    }
    

    /* ホームページからログイン画面に遷移するためのコード */
    public function rogin(Request $request): View{
        return view('AMhome_rogin');
    } 
    /* ログイン画面からホームページに遷移するためのコード */
    public function arogin(Request $request): View{
        return view('AMhome');
    }

    /* ホームページから新規登録画面に遷移するためのコード */
    public function regis(Request $request): View{
        return view('AMhome_regis');
    }
    /* 新規登録画面からホームページに遷移するためのコード */
    public function aregis(Request $request): View{
        return view('AMhome')
    }
}
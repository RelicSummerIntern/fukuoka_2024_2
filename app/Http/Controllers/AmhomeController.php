<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; // Authファサードの使用を忘れずに
use Illuminate\View\View;

class AmhomeController extends Controller{
    public function index() {
        $today=date('Y-m-d');
        return view('AMhome',['today'=>$today]);
    }

    
    
    /* ログアウトを押したらログイン画面に戻るためのコード */
    public function logout(Request $request)
    {
        Auth::logout();  // ユーザーをログアウト
        $request->session()->invalidate();  // セッションを無効化
        $request->session()->regenerateToken();  // CSRFトークンを再生成

        // ログアウト後、ログイン画面にリダイレクト
        return redirect()->route('login');
    }
    /*
    public function alogout(Request $request)
    {
        Auth::alogout();  // ユーザーをログアウト
        $request->session()->invalidate();  // セッションを無効化
        $request->session()->regenerateToken();  // CSRFトークンを再生成

        // ログアウト後、ログイン画面にリダイレクト
        return redirect()->route('ad');
    }
    */
    /* ログインしたらホーム画面に遷移するためのコード */
    public function login(Request $request): View
    {
        // 認証情報をリクエストから取得
            $credentials = $request->only('email', 'password');

        // 認証に成功した場合
        if (Auth::attempt($credentials)) {
        // 認証が成功したらホーム画面にリダイレクト
              $request->session()->regenerate(); // セッションIDを再生成（セキュリティ向上のため）

             return view('AMhome');  // ホーム画面に遷移
        }
        //認証に失敗した場合もう一度ログイン画面に戻すためのコード
             return view('auth.login');
    }
    
    
    
    /* 検索機能を実装するためのコード */
    public function searchcpn(Request $request){
        $keyword = $request->input('keyword');
        $query = Post::query();
        if(!empty($keyword)){
            $query->where('title','LIKE',"%{$keyword}%")->orWhere('author','LIKE',"%{keyword}%");
        }
        $posts=$query->get();
        return view('AMhome',compact('posts','keyword'));


    }

    /* 雄貴が作ったものを遷移するためのコード */
    public function ad(Request $request): View{
        return view('AMhome');
    }
}
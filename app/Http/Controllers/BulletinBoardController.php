<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BulletinBoardController extends Controller
{
    public function index()
    {
        // 处理 GET 请求
        return view('bulletinBoard');
    }

    public function store(Request $request)
    {
        // 处理 POST 请求
        $message = $request->input('message');
        // 进行保存操作或其他逻辑
        return redirect()->route('bulletinBoard');
    }
}

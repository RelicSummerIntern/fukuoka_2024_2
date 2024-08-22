<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class AMProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function edit(Request $request): View
    {
        return view('AMprofile_edit', [
            'user' => $request->user(),
        ]);
    }
    public function back(Request $request): View
    {
        
        return view('AMprofile');
    }

    /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        // バリデーション済みデータを使用してユーザー情報を更新
        $request->user()->fill($request->validated());

        // Emailが更新された場合、email_verified_atをリセット
        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }

        // 残りのフィールドを更新
        $request->user()->self_intro = $request->input('self_intro');
        $request->user()->want_work = $request->input('want_work');
        $request->user()->now_work = $request->input('now_work');
        $request->user()->want_money = $request->input('want_money');
        $request->user()->want_place = $request->input('want_place');
        $request->user()->now_place = $request->input('now_place');
        $request->user()->use_lang = $request->input('use_lang');

        // ユーザー情報を保存
        $request->user()->save();

        // 更新完了後、リダイレクトしてステータスメッセージを表示
        return Redirect::route('AMprofile.back')->with('status', 'profile-updated');
    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }
}

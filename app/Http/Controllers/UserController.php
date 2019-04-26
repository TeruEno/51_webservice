<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $user = Auth::user();

        // returnすると処理終了
        return view('users.mypage', compact('user'));
    }

    public function show(int $id)
    {
        $user = User::find($id)->first();
        return view('users.edit', compact('user'));
    }

    // アカウント情報編集
    public function edit(Request $req)
    {
        $user = User::find($req->user_id)->first();
        $user->name = $req->user_name;
        $user->email = $req->user_email;

        $user->image = $this->saveImage($req);

        $user->save();
        return redirect('users');
    }

    // 画像登録
    private function saveImage(Request $req) {
        $time = date("Ymdhis");
        $filename = $time.'_'.$req->id.'.jpg';
        $req->image_path->storeAs('public/images', $filename);
        return $filename;
    }

    public function update(Request $request, User $user)
    {
    }

    // アカウント削除
    public function destroy(User $user)
    {
        // ログインしているユーザーの情報を取得する
        $user = Auth::user();

        // 取得したユーザー情報を削除する
        // ($user->id) = $userのid
        User::destroy($user->id);

        // Topページにリダイレクトする
        return redirect('/');
    }
}

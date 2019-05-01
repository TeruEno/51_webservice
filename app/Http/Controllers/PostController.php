<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//  使うモデルやクラスを記述する
use App\Post;
use App\User;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    // 一覧取得及び初期表示
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();

        // Eloquentの機能を使ってデータを取得
        // SELECT * FROM posts;
        $posts = Post::all();
        // view(呼び出したいblade,compact(渡したい変数名))
        return view('posts.index', compact('posts'));
    }

    // 入力画面を表示
    // GETでアクセス
    // 目的地への行き方投稿用
    public function accessCreate()
    {
        // ログインしているかどうか判別
        // ログインしているユーザーの情報を取得する
        $user = Auth::user();

        // 目的地への行き方投稿
        // return view(ディレクトリ名、ファイル名)
        return view('posts.access.create');
    }

    // アクティビティ投稿用
    public function activityCreate()
    {
        // ログインしているかどうか判別
        // ログインしているユーザーの情報を取得する
        $user = Auth::user();
        // アクティビティ内容投稿
        return view('posts.activity.create');
    }

    // 確認画面を表示
    public function showAccessCreateForm(Request $request)
    {
        // Laravel上で処理中の値を確認できる
        // ddを実行中は処理がそこでストップする
        // dd($request->title);
        return view('posts.access.detail', compact('request'));
    }

    public function showActivityCreateForm(Request $request)
    {
        // Laravel上で処理中の値を確認できる
        // ddを実行中は処理がそこでストップする
        // dd($request->title);
        return view('posts.activity.detail', compact('request'));
    }

    // 登録処理
    // POSTでアクセス
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Postオブジェクト作成
        $post = new Post;

        // $postの各地にリクエストの内容を代入
        $post->title = $request->title;
        $post->content = $request->content;
        $post->image = $request->image;
        $post->comment = $request->comment;
        $post->cost = $request->cost;
        $post->time = $request->time;
        $post->member = $request->member;
        $post->type = $request->type;
        $post->area_id = $request->area_id;
        $post->date = $request->date;
        $post->user_id = $request->user_id;
        
        if ($request->type == 1){
            $post->adress = $request->adress;
        } else {
            $post->movie = $request->movie;
        }

        // postsテーブルに保存
        $post->save();

        return redirect()->route('posts');
    }

    /**
     * 詳細ページ
     */
    public function accessDetail(Request $request)
    {
        return view('posts/access/detail', compact('request'));
    }

    public function activityDetail(Request $request)
    {
        return view('posts/activity/detail',compact('request'));
    }

    // 一件取得 = 詳細画面
    // GETでアクセス
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    // 編集画面の表示
    // GETでアクセス
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    // 編集処理
    // POSTでアクセス
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    // 削除処理
    // DELETE（GET）でアクセス
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $posts)
    {
        // マイページから遷移した場合のみアクセス可能
        // ログインしているユーザー情報を取得する
        $user = Auth::user();
        // 取得したユーザ情報を元に今までに投稿した記事のidを取得する
        $posts = Post::all();
        // 取得した投稿記事をの中から削除したい記事を選択する

        // 選択した記事を削除する
        Post::destroy($posts->id);
        // マイページにリダイレクトする
        return redirect('posts/index');
    }
}

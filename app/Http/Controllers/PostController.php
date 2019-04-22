<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//  使うモデルやクラスを記述する
use App\Post;

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
        // Eloquentの機能を使ってデータを取得
        // SELECT * FROM posts;
        $posts = Post::all();
        // view(呼び出したいblade,compact(渡したい変数名))
        return view('posts.index', compact('posts'));
    }

    // 登録画面の表示
    // GETでアクセス


    // 入力画面を表示
    public function create()
    {
        // return view(ディレクトリ名、ファイル名)
        return view('posts.create');
    }


    // 確認画面を表示
    public function showCreateForm(Request $request)
    {
        // Laravel上で処理中の値を確認できる
        // ddを実行中は処理がそこでストップする
        // dd($request->title);
        return view('posts.detail', compact('request'));
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
        $post->destination_id = $request->destination_id;
        $post->date = $request->date;
        $post->user_id = $request->user_id;

        // postsテーブルに保存
        $post->save();

        return redirect()->route('posts.detail',[
            'id' => $post->id,
        ]);
    }

    /**
     * 詳細ページ
     */
    public function detail(Post $post)
    {
        return view('posts/detail',[
            'title' => $post->title,
            'content' => $post->content,
            'user_id' => $post->user_id,
        ]);
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
    public function destroy($id)
    {
        //
    }
}

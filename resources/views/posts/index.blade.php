<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <p>こんにちは</p>
    
    <p>新規投稿画面へ</p>
    <a href="/posts/access/create">目的地への行き方を投稿する</a>
    <a>/</a>
    <a href="/posts/activity/create">アクティビティの内容を投稿する</a>
    {{-- foreachの機能に加えて、配列が空だった場合の処理が書ける --}}
    <!-- 
    // 今までの投稿を一覧表示する
    @forelse($posts as $p)
        {{ $p->content }}
    @empty
        <p>投稿はまだありません</p>
    @endforelse -->
    <br>
    <a href="/posts/delete">投稿記事を削除する</a>
</body>
</html>
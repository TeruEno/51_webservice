<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <p>登録画面</p>
    <form action="/posts/store" method="POST">
        {{-- Laravelが用意してくれているセキュリティ対策 --}}
        {{ csrf_field() }}
        タイトル:<input type="text" name="title">
        本文:<input type="text" name="content">
        画像名:<input type="text" name="image">
        コメント:<input type="text" name="comment">
        
        コスト:<input type="number" name="cost">
        時間:<input type="number" name="time">
        人数:<input type="number" name="member">
        タイプ:<input type="number" name="type">
        目的地ID:<input type="number" name="destination_id">
        
        日付:<input type="date" name="date">

        <input type="submit" value="登録">
    </form>
</body>
</html>
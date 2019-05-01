@extends('layouts.app')
@section('content')
<form action="/posts/store" method="POST" type="hidden">
<input type="hidden">
<p>タイトル：{{ $request->title }}</p>
<p>日付：{{ $request->date }}</p>
<p>住所：{{ $request->adress }}</p>
<p>目的地名：{{ $request->destination }}</p>
<p>画像：{{ $request->image }}</p>
<p>本文：{{ $request->content }}</p>
<p>コスト：{{ $request->cost }}</p>
<p>時間：{{ $request->time }}</p>
<p>人数：{{ $request->member }}</p>
<p>コメント：{{ $request->comment }}</p>
<input type="submit" value="投稿">
@endsection
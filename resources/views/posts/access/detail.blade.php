@extends('layouts.app')
@section('content')
<form action="/posts/access/store" method="POST" type="hidden">
<p>タイトル：{{ $request->title }}</p>
<p>本文：{{ $request->content }}</p>
<p>画像名：{{ $request->image }}</p>
<p>コメント：{{ $request->comment }}</p>
<p>コスト：{{ $request->cost }}</p>
<p>時間：{{ $request->time }}</p>
<p>人数：{{ $request->member }}</p>
<p>タイプ：{{ $request->type }}</p>
<p>目的地ID：{{ $request->destinaetion }}</p>
@endsection
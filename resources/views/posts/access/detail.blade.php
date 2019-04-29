@extends('layouts.app')
@section('content')
<form action="/posts/store" method="POST" type="hidden">
<input type="hidden">
<p>タイトル：{{ $request->title }}</p>
<p>地域名：{{ $request->area }}</p>
<p>画像：{{ $request->image }}</p>
<p>本文：{{ $request->content }}</p>
<p>コメント：{{ $request->comment }}</p>
<p>コスト：{{ $request->cost }}</p>
<p>時間：{{ $request->time }}</p>
<p>人数：{{ $request->member }}</p>
<p>タイプ：{{ $request->type }}</p>
@endsection
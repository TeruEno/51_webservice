@extends('layouts.app')
@section('content')
<form action="/posts/store" method="POST" type="hidden">
<p>タイトル：{{ $request->title }}</p>
<p>詳細内容：{{ $request->content }}</p>
<p>ユーザーID：{{ $request->user_id }}</p>
@endsection
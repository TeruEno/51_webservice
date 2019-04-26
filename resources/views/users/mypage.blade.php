@extends('layout')
<link rel="stylesheet" href="{{ ('css/mypage.css') }}">
@section('content')
    <h1>MY PAGE</h1>
    <div>
        <img class="object-fit-img" src="storage/images/{{ $user->image }}">
    </div>
    <h1>ユーザー名：{{ $user->name }}</h1>
    <a href="/users/{{ $user->id }}">編集</a>
    <a href="/users/delete">削除</a>
@endsection
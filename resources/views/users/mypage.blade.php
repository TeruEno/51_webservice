@extends('layout')

@section('content')
    <h1>MY PAGE</h1>
    <div>
        <img src="storage/images/{{ $user->imgae }}">
    </div>
    <h1>ユーザー名：{{ $user->name }}</h1>
    <a href="/users/{{ $user->id }}">編集</a>
@endsection
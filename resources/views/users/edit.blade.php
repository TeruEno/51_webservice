@extends('layout')

@section('content')
  <h1>ユーザー情報編集</h1>
  <form method="POST" action="/users/{{ $user->id }}">
    {{ csrf_field() }}
    <div>
      <label for="name">ユーザー名：</label>
      <input type="text" id="name" name="user_name">
    </div>
    <div>
      <label for="email">メールアドレス：</label>
      <input type="email" id="email" name="user_email">
    </div>
    <input type="submit" value="編集">
  </form>
@endsection
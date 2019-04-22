@extends('layouts.app')
@section('content')
    <form method="POST" action="{{ route('posts.create') }}" enctype="multipart/form-date">
    @csrf
        {{-- Laravelが用意してくれているセキュリティ対策 --}}
        {{ csrf_field() }}
        <div class="form">
            <div class="form-title">
                <div class="form-title">
                    <label for="title">タイトル</title>
                    <input type="text" name="title">
                    本文:<input type="text" name="content">
                    画像名:<input type="text" name="image">
                    コメント:<input type="text" name="comment">
                    
                    コスト:<input type="number" name="cost">
                    時間:<input type="number" name="time">
                    人数:<input type="number" name="member">
                    タイプ:<input type="number" name="type">
                    目的地ID:<input type="number" name="destination_id">
                    
                    日付:<input type="date" name="date">

                <div>
                <input type="submit" value="確認">
                </div>
            </div>
        </div>
    </form>
@endsection
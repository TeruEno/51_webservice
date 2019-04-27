@extends('layouts.app')
@section('content')
<form method="GET" action="/posts/create" enctype="multipart/form-date">
    @csrf
        {{-- Laravelが用意してくれているセキュリティ対策 --}}
        {{ csrf_field() }}
        <div class="form">
            <div class="form-title">
                <div class="form-title">
                    <label for="title">タイトル</title>
                    <input type="text" name="title">
                </div>

                <div>
                    <label>日付</label>
                    <input type="date" name="date">
                </div>

                <div>
                    <label>目的地名</label>
                    <input type="number" name="destination_id">
                </div>

                <div>
                    <label>住所</label>
                    <input type="text" name="adress">
                </div>


                <div class="form-image">
                    <label for="image" class="form-image">画像</label>
                    <input type="text" name="image">
                </div>

                <div class="form-content">
                    <label for="content" class="form-content">本文</label>
                    <input type="text" name="content">
                </div>

                <div class="form-comment">
                    <label for="comment" class="form-comment">コメント</label>
                    <input type="text" name="comment">
                </div>

                <div class="form-cost">
                    <label for="cost" class="form-cost">コスト</label>
                    <input type="number" name="cost">
                </div>

                <div class="form-time">
                    <label for="time" class="form-time">時間</label>
                    <input type="number" name="time">
                </div>
                    
                <div class="form-member">
                    <label for="member" class="form-member">人数</label>
                    <input type="number" name="member">
                </div>
                
                <div>
                <input type="submit" value="確認">
                </div>
            </div>
        </div>
    </form>
@endsection
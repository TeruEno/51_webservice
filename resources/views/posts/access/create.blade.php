@extends('layouts.app')
@section('content')
<form method="POST" action="/posts/access/detail" enctype="multipart/form-date">
    @csrf
        {{-- Laravelが用意してくれているセキュリティ対策 --}}
        {{ csrf_field() }}
        <div class="form">
            <div class="form-title">
                <div class="form-title">
                    <label for="title">タイトル</title>
                    <input type="text" name="title">
                </div>

                <div calss="form-date">
                    <label calss="form-date">日付</label>
                    <input type="date" name="date">
                </div>

                <div>
                    <label class="form-area_id">地域名</label>
                    <select name="area_id">
                        <option value="area"></option>
                    </select>
                </div>

                <div class="form-destination">
                    <label class="destination">目的地名</label>
                    <input type="text" name="destination">
                </div>

                <div class="form-adress">
                    <label class="adress">住所</label>
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
                
                <input type="hidden" name="type" value="1">
                
                <div>
                    <input type="submit" value="確認">
                </div>


            </div>
        </div>
    </form>
@endsection
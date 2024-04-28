@extends('layout.index')

@section('css')
<link rel="stylesheet" href="{{ asset('css/edit.css') }}">
@endsection

@section('content')

<div class="main">
    <!-- ページタイトル -->
    <div class="ttl">
        <h1 class="ttl-top">編集</h1>
    </div>
    <!-- 編集フォーム -->
    <form action="{{ route('memo.update') }}" method="post" class="form">
        @method('PUT')
        @csrf
        <div class="form-ttl">
            <label for="title" class="memo-ttl">title</label>
            <input type="text" name="title" id="title" placeholder="タイトル" class="input-ttl" value="">
        </div>
        <div class="form-content">
            <label for="content" class="memo-content">本文</label>
            <input type="text" name="content" id="content" placeholder="本文" class="input-content" value="">
        </div>
        <div class="submit">
            <button type="submit" class="submit-button">更新</button>
        </div>
    </form>
</div>

@endsection
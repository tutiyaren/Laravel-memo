@extends('layout.index')

@section('css')
<link rel="stylesheet" href="{{ asset('css/create.css') }}">
@endsection

@section('content')

<div class="main">
    <!-- ページタイトル -->
    <div class="ttl">
        <h1 class="ttl-top">メモ登録</h1>
    </div>
    <!-- 作成フォーム -->
    <form action="{{ route('memo.store') }}" method="post" class="form">
        @csrf
        <div class="form-ttl">
            <select name="name" required>
                <option disabled selected value="">カテゴリを選択してください</option>
                @foreach($categories as $category)
                <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-ttl">
            <label for="title" class="memo-ttl">title</label>
            <input type="text" name="title" id="title" placeholder="タイトル" class="input-ttl" value="{{ old('title') }}">
            @error('title')
            <p class="error">{{ $errors->first('title') }}</p>
            @enderror
        </div>
        <div class="form-content">
            <label for="content" class="memo-content">本文</label>
            <input type="text" name="content" id="content" placeholder="本文" class="input-content" value="{{ old('content') }}">
            @error('content')
            <p class="error">{{ $errors->first('content') }}</p>
            @enderror
        </div>
        <div class="submit">
            <button type="submit" class="submit-button">送信</button>
        </div>
    </form>
</div>

@endsection
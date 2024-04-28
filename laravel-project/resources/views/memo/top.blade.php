@extends('layout.index')

@section('css')
<link rel="stylesheet" href="{{ asset('css/top.css') }}">
@endsection

@section('content')

<div class="main">
    <!-- 検索 -->
    <div class="search">
        <form action="" class="search-form" method="get">
            @csrf
            <input type="text" name="" placeholder="Search..." class="search-form__input" value="">
            <button class="search-form__button" type="submit">検索</button>
        </form>
    </div>
    <!-- タイトル -->
    <div class="ttl">
        <h1 class="ttl-top">メモ一覧</h1>
    </div>
    <!-- メモ追加リンク -->
    <div class="link">
        <a href="{{ route('memo.create') }}" class="link-create">メモを追加</a>
    </div>
    <!-- ソート -->
    <div class="sort">
        <form action="" class="sort-new" method="get">
            @csrf
            <button class="sort-new__button" type="submit">新しい順</button>
        </form>
        <form action="" class="sort-old" method="get">
            @csrf
            <button class="sort-old__button" type="submit">古い順</button>
        </form>
    </div>
    <!-- テーブル一覧 -->
    <table class="table" border="1">
        <!-- テーブルタイトル -->
        <tr class="table-tr">
            <th class="table-th">タイトル</th>
            <th class="table-th">内容</th>
            <th class="table-th">作成日時</th>
            <th class="table-th">編集</th>
            <th class="table-th">削除</th>
        </tr>
        <!-- テーブル内容 -->
        <tr class="table-tr">
            <td class="table-td">タイトル</td>
            <td class="table-td">内容</td>
            <td class="table-td">2024-03-15 20:38:58</td>
            <td class="table-td">
                <a href="{{ route('memo.edit') }}" class="edit-link">編集</a>
            </td>
            <td class="table-td">
                <form action="{{ route('memo.destroy') }}" class="delete" method="post">
                    @method('DELETE')
                    @csrf
                    <input type="hidden" name="id" value="">
                    <button class="delete-button" type="submit">削除</button>
                </form>
            </td>
        </tr>
    </table>
</div>

@endsection
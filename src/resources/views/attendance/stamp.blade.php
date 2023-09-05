@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/attendance.css') }}" />
@endsection

@section('header')
<div class="header__nav">
    <ul class="header__nav-list">
        <li class="header__nav-list-item">
            <a href="/">ホーム</a>
        </li>
        <li class="header__nav-list-item">
            <a href="">日付一覧</a>
        </li>
        <li class="header__nav-list-item">
            <a href="/logout">ログアウト</a>
        </li>
    </ul>
</div>
@endsection

@section('content')
<div class="manegement__content">
    <div class="manegement-form__heading">
        <h2>{{ Auth::user()->name }}さんお疲れ様です！</h2>
    </div>
    <div class="manegement__inner">
        <form action="" class="work-form">
            <div class="work-form__button">
                <button class="work-form__button-start">勤務開始</button>
            </div>
        </form>
        <form action="" class="work-form">
            <div class="work-form__button">
                <button class="work-form__button-end">勤務終了</button>
            </div>
        </form>
        <form action="" class="break-form">
            <div class="break-form__button">
                <button class="break-form__button-start">休憩開始</button>
            </div>
        </form>
        <form action="" class="break-form">
            <div class="break-form__button">
                <button class="break-form__button-end">休憩終了</button>
            </div>
        </form>
    </div>
</div>
@endsection
@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/auth.css') }}" />
@endsection

@section('content')
<div class="login-form__content">
    <div class="login-form__heading">
        <h2>ログイン</h2>
    </div>
    <form action="/" class="form" method="post">
        @csrf
        <div class="form__group-content">
            <div class="form__input--text">
                <input type="email" name="email" placeholder="メールアドレス" value="{{ old('email') }}">
            </div>
            <div class="form__error">
                @error('email')
                {{ $message }}
                @enderror
            </div>
        </div>
        <div class="form__group-content">
            <div class="form__input--text">
                <input type="text" name="password" placeholder="パスワード">
            </div>
            <div class="form__error">
                @error('password')
                {{ $message }}
                @enderror
            </div>
        </div>
        <div class="form__button">
            <button class="form__button-submit" type="submit">ログイン</button>
        </div>
    </form>
    <div class="register__link">
        <span class="register__link-explanation">アカウントをお持ちでない方はこちらから</span>
        <a class="register__button-submit" href="/register">会員登録</a>
    </div>
</div>
@endsection
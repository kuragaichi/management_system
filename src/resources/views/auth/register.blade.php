@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/auth.css') }}" />
@endsection

@section('content')
<div class="register-form__content">
    <div class="register-form__heading">
        <h2>会員登録</h2>
    </div>
    <form action="/register" class="form" method="post">
        <div class="form__content">
            <div class="form__input--text">
                <input type="text" name="full_name" placeholder="名前" value="{{ old('full_name') }}">
            </div>
            <div class="form__error">
                @error('full_name')
                {{ $message }}
                @enderror
            </div>
        </div>
        <div class="form__content">
            <div class="form__input--text">
                <input type="email" name="email" placeholder="メールアドレス" value="{{ old('email') }}">
            </div>
            <div class="form__error">
                @error('email')
                {{ $message }}
                @enderror
            </div>
        </div>
        <div class="form__content">
            <div class="form__input--text">
                <input type="text" name="password" placeholder="パスワード">
            </div>
            <div class="form__error">
                @error('password')
                {{ $message }}
                @enderror
            </div>
        </div>
        <div class="form__content">
            <div class="form__input--text">
                <input type="text" name="password_confirmation" placeholder="確認用パスワード">
            </div>
        </div>
        <div class="form__button">
            <button class="form__button-submit" type="submit">会員登録</button>
        </div>
    </form>
    <div class="login__link">
        <span class="login__link-explanation">アカウントをお持ちの方はこちらから</span>
        <a class="login__button-submit" href="/">ログイン</a>
    </div>
</div>
@endsection
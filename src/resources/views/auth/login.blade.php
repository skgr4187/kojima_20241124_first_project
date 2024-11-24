{{-- ログインページ --}}

@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/auth/login.css') }}">
@endsection

@section('content')
<div class="login-form">
    <div class="login-form__inner">
        <h2>ログイン</h2>
        <form action="/login" method="post">
            @csrf
            <div class="login-form__group">
                <input class="login-form__input" type="email" name="email" id="email" value="{{ old('email') }}" placeholder="メールアドレス">
                <div class="login-form__error-message">
                    @error('email')
                    {{$message}}
                    @enderror
                </div>
            </div>
            <div class="login-form__group">
                <input class="login-form__input" type="text" name="password" id="password" placeholder="パスワード">
                <div class="login-form__error-message">
                    @error('password')
                    {{$message}}
                    @enderror
                </div>
            </div>
            <input class="login-form__btn" type="submit" value="ログイン">
        </form>
        <form class="login-register" action="/register" method="get">
            @csrf
            <div class="login-register__header">
                アカウントをお持ちでない方はこちらから
            </div>
            <input class="login-register__btn" type="submit" value="会員登録" name="register">
        </form>
    </div>
</div>
@endsection('content')
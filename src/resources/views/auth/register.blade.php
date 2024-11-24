{{-- 新規会員登録ページ --}}

@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/auth/register.css') }}">
@endsection

@section('content')
<div class="register-form">
    <div class="register-form__inner">
        <h2>会員登録</h2>
        <form action="/register" method="post">
            @csrf
            <div class="register-form__group">
                <input class="register-form__input" type="name" name="name" id="name"  value="{{old('name')}}" placeholder="名前">
                <div class="register-form__error-message">
                    @error('name')
                    {{$message}}
                    @enderror
                </div>
            </div>
            <div class="register-form__group">
                <input class="register-form__input" type="email" name="email" id="email" value="{{old('email')}}" placeholder="メールアドレス">
                <div class="register-form__error-message">
                    @error('email')
                    {{$message}}
                    @enderror
                </div>
            </div>
            <div class="register-form__group">
                <input class="register-form__input" type="text" name="password" id="password" placeholder="パスワード">
                <div class="register-form__error-message">
                    @error('password')
                    {{$message}}
                    @enderror
                </div>
            </div>
            <div class="register-form__group">
                <input class="register-form__input" type="text" name="password" id="password" placeholder="確認用パスワード">
                <div class="register-form__error-message">
                    @error('password-check')
                    {{$message}}
                    @enderror
                </div>
            </div>
            <input class="register-form__btn" type="submit" value="会員登録">
        </form>
        <form class="register-login" action="/login" method="get">
            @csrf
            <div class="register-login__header">
                アカウントをお持ちの方はこちらから
            </div>
            <input class="register-login__btn" type="submit" value="ログイン" name="login">
        </form>
    </div>
</div>
@endsection('content')
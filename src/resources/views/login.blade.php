@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/login.css') }}">
@endsection


@section('content')
<header class="header">
    <nav>
        <a href="{{ route('register') }}">register</a>
    </nav>
</header>
<div class="login-form">
    <div class="login-form__heading">
        <h2>Login</h2>
    </div>
    <form class="form" action="{{ route('login') }}" method="POST">
        @csrf
        <div class="form__group">
            <label class="form__group-title">メールアドレス</label>
            <input class="form__input--text" type="email" name="email" placeholder="例: test@example.com" value="{{ old('email') }}">
            <div class="form__error">
                @error('email')
                {{ $message }}
                @enderror
            </div>
        </div>
        <div class="form-group">
            <label class="form__group-title">パスワード</label>
            <input class="form__input--text" type="password" name="password" placeholder="例: coachtech1106">
            <div class="form__error">
                @error('password')
                {{ $message }}
                @enderror
                @error('login')
                {{ $message }}
                @enderror
            </div>
        </div>
        <div class="form-submit">
            <button class="form__button-submit" type="submit">ログイン</button>
        </div>
    </form>
</div>
@endsection

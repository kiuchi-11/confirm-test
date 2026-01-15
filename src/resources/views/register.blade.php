@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/register.css') }}">
@endsection

@section('content')
<header class="header">
    <nav>
        <a href="{{ route('login') }}">login</a>
    </nav>
</header>
<div class="register-form">
    <div class="register-form__heading">
        <h2>Register</h2>
    </div>
    <form class="form" action="{{ route('register') }}" method="POST">
        @csrf
        <div class="form__group">
            <label class="form__group-title">お名前</label>
            <input class="form__input--text" type="text" name="name" placeholder="例: 山田   太郎"  value="{{ old('name') }}">
            <div class="form__error">
                @error('name')
                {{ $message }}
                @enderror
            </div>
        </div>
        <div class="form__group">
            <label class="form__group-title">メールアドレス</label>
            <input class="form__input--text" type="email" name="email" placeholder="例: test@example.com" value="{{ old('email') }}">
            <div class="form__error">
                @error('email')
                {{ $message }}
                @enderror
            </div>
        </div>
        <div class="form__group">
            <label class="form__group-title">パスワード</label>
            <input class="form__input--text" type="password" name="password" placeholder="例: coachtech1106">
            <div class="form__error">
                @error('password')
                {{ $message }}
                @enderror
            </div>
        </div>
        <div class="form-submit">
            <button class="form__button-submit" type="submit">登録</button>
        </div>
    </form>
</div>
@endsection
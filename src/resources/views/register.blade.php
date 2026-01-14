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
            <input class="form__input--text" type="text" name="name" id="name" value="{{ old('name') }}" required>
        </div>
        <div class="form__group">
            <label class="form__group-title">メールアドレス</label>
            <input class="form__input--text" type="email" name="email" id="email" value="{{ old('email') }}" required>
        </div>
        <div class="form-group">
            <label class="form__group-title">パスワード</label>
            <input class="form__input--text" type="password" name="password" id="password" required>
        </div>
        <div class="form-submit">
            <button class="form__button-submit" type="submit">登録</button>
        </div>
    </form>
</div>
@endsection
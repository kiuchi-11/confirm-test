@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/admin.css') }}">
@endsection

@section('content')
<header class="header">
    <nav>
        <a href="{{ route('login') }}">logout</a>
    </nav>
</header>
<div class="contact-form__heading">
    <h2>Admin</h2>
</div>
@endsection
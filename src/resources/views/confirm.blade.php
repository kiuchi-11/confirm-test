@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/confirm.css') }}">
@endsection

@section('content')
<div class="confirm__content">
  <div class="confirm__heading">
    <h2>Confirm</h2>
  </div>
  <form class="form" action="/contacts" method="post">
    @csrf
    <div class="confirm-table">
      <table class="confirm-table__inner">
        <tr class="confirm-table__row">
          <th class="confirm-table__header">お名前</th>
          <td class="confirm-table__text">
            <p>{{ $data['name'] }}</p>
            <input type="hidden" name="last_name" value="{{ $data['last_name'] }}">
            <input type="hidden" name="first_name" value="{{ $data['first_name'] }}">
          </td>
        </tr>
        <tr class="confirm-table__row">
          <th class="confirm-table__header">性別</th>
          <td class="confirm-table__text">
            <p>{{ $genderLabel }}</p>
            <input type="hidden" name="gender" value="{{ $data['gender'] }}">
          </td>
        </tr>
        <tr class="confirm-table__row">
          <th class="confirm-table__header">メールアドレス</th>
          <td class="confirm-table__text">
            <p>{{ $data['email'] }}</p>
            <input type="hidden" name="email" value="{{ $data['email'] }}">
          </td>
        </tr>
        <tr class="confirm-table__row">
          <th class="confirm-table__header">電話番号</th>
          <td class="confirm-table__text">
            <p>{{ $data['tel'] }}</p>
            <input type="hidden" name="tel1" value="{{ $data['tel1'] }}">
            <input type="hidden" name="tel2" value="{{ $data['tel2'] }}">
            <input type="hidden" name="tel3" value="{{ $data['tel3'] }}">
          </td>
        </tr>
        <tr class="confirm-table__row">
          <th class="confirm-table__header">住所</th>
          <td class="confirm-table__text">
            <p>{{ $data['address'] }}</p>
            <input type="hidden" name="address" value="{{ $data['address'] }}">
          </td>
        </tr>
        <tr class="confirm-table__row">
          <th class="confirm-table__header">建物名</th>
          <td class="confirm-table__text">
            <p>{{ $data['building'] }}</p>
            <input type="hidden" name="building" value="{{ $data['building'] }}">
          </td>
        </tr>
        <tr class="confirm-table__row">
          <th class="confirm-table__header">お問い合わせの種類</th>
          <td class="confirm-table__text">
            <p>{{ $categoryLabel }}</p>
            <input type="hidden" name="category_id" value="{{ $data['category_id'] }}">
          </td>
        </tr>
        <tr class="confirm-table__row">
          <th class="confirm-table__header">お問い合わせ内容</th>
          <td class="confirm-table__text">
            <p>{{ $data['content'] }}</p>
            <input type="hidden" name="content" value="{{ $data['content'] }}">
          </td>
        </tr>
      </table>
    </div>
    <div class="form__button">
    <button class="form__button-submit" type="submit">送信</button>
    <a href="/contacts" class="form__button-back">修正</a>
  </div>
  </form>
</div>
@endsection
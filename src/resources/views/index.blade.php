@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('content')
<div class="contact-form__content">
  <div class="contact-form__heading">
    <h2>Contact</h2>
  </div>
    <form class="form" action="/confirm" method="post">
      @csrf
      <div class="form__group">
        <div class="form__group-title">
          <span class="form__label--item">お名前</span>
          <span class="form__label--required">※</span>
        </div>
        <div class="form__group-content">
          <div class="form__input--text">
            <input type="text" name="last_name" placeholder="例: 山田" value="{{ old('last_name', $input['last_name'] ?? '') }}">
            <input type="text" name="first_name" placeholder="例: 太郎" value="{{ old('first_name', $input['first_name'] ?? '') }}">
          </div>
          <div class="form__error">
            @error('last_name')
            {{ $message }}
            @enderror
            <div class="form__error-name">
              @error('first_name')
              {{ $message }}
              @enderror
            </div>
          </div>
        </div>
      </div>

      <div class="form__group">
        <div class="form__group-title">
          <span class="form__label--item">性別</span>
          <span class="form__label--required">※</span>
        </div>
        <div class="form__group-content">
          <div class="form__input--radio">
            <label><input type="radio" name="gender" value="1" {{ old('gender', $input['gender'] ?? '') == 1 ? 'checked' : '' }}> 男性</label>
            <label><input type="radio" name="gender" value="2" {{ old('gender', $input['gender'] ?? '') == 2 ? 'checked' : '' }}> 女性</label>
            <label><input type="radio" name="gender" value="3" {{ old('gender', $input['gender'] ?? '') == 3 ? 'checked' : '' }}> その他</label>
          </div>
          <div class="form__error">
            @error('gender')
            {{ $message }}
            @enderror
          </div>
        </div>
      </div>

      <div class="form__group">
        <div class="form__group-title">
          <span class="form__label--item">メールアドレス</span>
          <span class="form__label--required">※</span>
        </div>
        <div class="form__group-content">
          <div class="form__input--text">
            <input type="email" name="email" placeholder="例: test@example.com" value="{{ old('email', $input['email'] ?? '') }}">
          </div>
          <div class="form__error">
            @error('email')
            {{ $message }}
            @enderror
          </div>
        </div>
      </div>

      <div class="form__group">
        <div class="form__group-title">
          <span class="form__label--item">電話番号</span>
          <span class="form__label--required">※</span>
        </div>
        <div class="form__group-content">
          <div class="form__input--tel">
            <input type="text" name="tel1" placeholder="080" value="{{ old('tel1', $input['tel1'] ?? '') }}">
            <span>-</span>
            <input type="text" name="tel2" placeholder="1234" value="{{ old('tel2', $input['tel2'] ?? '') }}">
            <span>-</span>
            <input type="text" name="tel3" placeholder="5678" value="{{ old('tel3', $input['tel3'] ?? '') }}">
          </div>
          <div class="form__error">
            @error('tel1')
            {{ $message }}
            @enderror
            @error('tel2')
            {{ $message }}
            @enderror
            @error('tel3')
            {{ $message }}
            @enderror
          </div>
        </div>
      </div>

      <div class="form__group">
        <div class="form__group-title">
          <span class="form__label--item">住所</span>
          <span class="form__label--required">※</span>
        </div>
        <div class="form__group-content">
          <div class="form__input--text">
            <input type="text" name="address" placeholder="例: 東京都渋谷区千駄ヶ谷1-2-3" value="{{ old('address', $input['address'] ?? '') }}">
          </div>
          <div class="form__error">
            @error('address')
            {{ $message }}
            @enderror
          </div>
        </div>
      </div>

      <div class="form__group">
        <div class="form__group-title">
          <span class="form__label--item">建物名</span>
        </div>
        <div class="form__group-content">
          <div class="form__input--text">
            <input type="text" name="building" placeholder="例: 千駄ヶ谷マンション101" value="{{ old('building', $input['building'] ?? '') }}">
          </div>
        </div>
      </div>

      <div class="form__group">
        <div class="form__group-title">
          <span class="form__label--item">お問い合わせの種類</span>
          <span class="form__label--required">※</span>
        </div>
        <div class="form__group-content">
          <div class="form__input--select">
          <select name="category_id" value="{{ old('category_id') }}">
            <option value="" disabled selected>選択してください</option>
            @foreach (\App\Constants\Category::LIST as $id => $label)
              <option value="{{ $id }}"
                {{ old('category_id', $input['category_id'] ?? '') == $id ? 'selected' : '' }}>
                {{ $label }}
              </option>
            @endforeach
          </select>
          </div>
          <div class="form__error">
            @error('category_id')
            {{ $message }}
            @enderror
          </div>
        </div>
      </div>

      <div class="form__group">
        <div class="form__group-title">
          <span class="form__label--item">お問い合わせ内容</span>
          <span class="form__label--required">※</span>
        </div>
        <div class="form__group-content">
          <div class="form__input--text">
            <textarea name="content" placeholder="お問い合わせ内容をご記入ください" >{{ old('content', $input['content'] ?? '') }}</textarea>
          </div>
          <div class="form__error">
            @error('content')
            {{ $message }}
            @enderror
          </div>
        </div>
      </div>
      <div class="form-submit">
        <button class="form__button-submit" type="submit">確認画面</button>
      </div>
    </form>
</div>
@endsection
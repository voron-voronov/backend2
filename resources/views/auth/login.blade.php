@extends('layouts.app')
@section('content')
  <main class="main">
    <div class="main-content">
      <div class="main-content-title">Авторизация</div>
      <a href="{{ route('register') }}" class="main-content-auth">Регистрация</a>
      <a href="{{ route('index') }}" class="main-content-auth">Назад</a>
      <form class="body-form-login" method="POST" action="{{ route('login') }}">
        @csrf
        <input id="email" placeholder="E-mail" type="email" class="body-form-input" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
        <input id="password" placeholder="Пароль" type="password" class="body-form-input" name="password" required autocomplete="current-password">
        <div class="disk-buttons">
          <button class="disk-button">Войти</button>
        </div>
      </form>
      @if (count($errors))
        <div class="errors">
          @foreach ($errors->all() as $error)
            {{ $error }}<br>
          @endforeach
        </div>
      @endif
    </div>
  </main>
  @endsection

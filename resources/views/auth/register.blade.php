@extends('layouts.app')
@section('content')
  <main class="main">
    <div class="main-content">
      <div class="main-content-title">Регистрация</div>
      <a href="{{ route('login') }}" class="main-content-auth">Авторизация</a>
      <a href="{{ route('index') }}" class="main-content-auth">Назад</a>
      <form class="body-form-login" method="POST" action="{{ route('register') }}">
        @csrf
        <input id="name" placeholder="Имя" type="text" class="body-form-input" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
        <input id="email" placeholder="E-mail" type="email" class="body-form-input" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
        <input id="password" placeholder="Пароль" type="password" class="body-form-input" name="password" required autocomplete="current-password">
        <input id="password-confirm" placeholder="Повторите пароль" type="password" class="body-form-input" name="password_confirmation" required autocomplete="new-password">
        <div class="disk-buttons">
          <button class="disk-button">Регистрация</button>
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

@extends('layouts.app')
@section('content')
  <main class="main">
    <div class="main-content">
      <div class="main-content-title">Создать запись</div>
      <a href="{{ route('index') }}" class="main-content-auth">Назад</a>
      <div class="disk">
        <div class="disk-left-img">
          <img src="{{ asset('img/vinil.png') }}" alt="">
        </div>
        <div class="disk-right-content">
          <form class="" method="POST" action="{{ route('post.store') }}">
            {{ csrf_field() }}
            <input class="body-form-input" value="{{ old('name') }}" name="name" type="text" placeholder="Название">
            <input class="body-form-input" value="{{ old('author') }}" name="author" type="text" placeholder="Автор">
            <input class="body-form-input" value="{{ old('ganer') }}" name="ganer" type="text" placeholder="Жанр">
            <div class="disk-buttons">
              <button class="disk-button">Создать</button>
            </div>
          </form>
        </div>
      </div>
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

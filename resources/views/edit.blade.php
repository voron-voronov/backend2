@extends('layouts.app')
@section('content')
  <main class="main">
    <div class="main-content">
      <div class="main-content-title">Редактировать</div>
      <a href="{{ route('index') }}" class="main-content-auth">Назад</a>
      <div class="disk">
        <div class="disk-left-img">
          <img src="{{ asset('img/vinil.png') }}" alt="">
        </div>
        <div class="disk-right-content">
          <form class="" method="POST" action="{{ route('update.update', ['id' => $post->id]) }}">
            {{ csrf_field() }}
            <input class="body-form-input" name="name" type="text" value="{{ $post->name }}" placeholder="Название">
            <input class="body-form-input" name="author" type="text" value="{{ $post->author }}" placeholder="Автор">
            <input class="body-form-input" name="ganer" type="text" value="{{ $post->genre }}" placeholder="Жанр">
            <div class="disk-buttons">
              <button class="disk-button">Сохранить</button>
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

@extends('layouts.app')
@section('content')
  <main class="main">
    <div class="main-content">
      <div class="main-content-title">Новинки музыки</div>
      @unless (Auth::check())
      <a href="{{ route('login') }}" class="main-content-auth">Авторизация</a>
      @endunless
      @unless (!Auth::check())
      <a href="/new" class="main-content-auth">Создать диск</a>
      <a href="{{ route('logout') }}" class="main-content-auth">Выход</a>
      @endunless

      @if(!count($posts))
        <div class="errors">
          Записей ещё нет, но вскоре они появятся
        </div>
      @endif

      @foreach ($posts as $post)

      <div class="disk">
        <div class="disk-left-img">
          <img src="{{ asset('img/vinil.png') }}" alt="">
        </div>
        <div class="disk-right-content">
          <div class="disk-title">{{ $post->name }}</div>
          <div class="disk-author">Автор: {{ $post->author }}</div>
          <div class="disk-genre">Жанр: {{ $post->genre }}</div>
          <div class="disk-date">Дата публикации: {{ date('d.m.Y', $post->date) }}</div>
          @unless (!Auth::check())
          <div class="disk-buttons">
            <a href="{{ route('edit.show', ['id' => $post->id]) }}" class="disk-button-a">Редактировать</a>
            <a href="{{ route('destroy.destroy', ['id' => $post->id]) }}" class="disk-button-a">Удалить</a>
          </div>
          @endunless
        </div>
      </div>

      @endforeach
      {{ $posts->links() }}
    </div>
  </main>
@endsection

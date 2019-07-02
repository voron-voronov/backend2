<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}" />
  <title>Back-end #1</title>
</head>
<body class="body">
  <header class="header">
    <div class="header-title">MusicRoom</div>
  </header>
      @yield('content')
<footer class="footer">
  <div class="footer-title">Все права защищены © 2019 г.</div>
</footer>
<script src="{{ asset('js/jquery.min.js') }}"></script>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap-grid.css') }}">
    <title>@yield('title')</title>
</head>
<body>
    <div class="container">
      <div class="row">
        @include('layout.menu')
      </div>
      <div class="row">
        @yield('content')
      </div>
    </div>

    <script type="text/javascript" src="{{ asset('js/bootstrap.bundle.js') }}"></script>
</body>
</html>
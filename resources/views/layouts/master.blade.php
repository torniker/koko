<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')<</title>

    <link href="{{ asset('/css/app.css') }}" rel="stylesheet">
    <script src="/js/jquery.min.js" defer></script>
    <script src="/js/bootstrap.min.js" defer></script>
    <script src="/js/app.js" defer></script>
</head>
<body>
    <div id="app">
        @include('navigation')
        @yield('content')
    </div>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>

    <link rel="alternate" href="http://tornike.me" hreflang="en">

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
    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
        ga('create', 'UA-4951070-18', 'auto');
        ga('send', 'pageview');
    </script>
</body>
</html>

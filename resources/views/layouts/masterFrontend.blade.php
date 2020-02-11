<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @yield('css')
    <title>ReviewFoody</title>
</head>
<body>
<div class="wrapper">
@include('frontend.components.header')
@yield('content')
@include('frontend.components.footer')
@yield('script')
</div>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>@yield('title')</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="{{asset('css/app.css')}}"/>
    <script src="{{asset('js/jquery-v-js')"></script>
    <script src="{{asset('js/boostrap.js')"></script>
</head>
<body>
    @yield('content')
</body>
</html> 
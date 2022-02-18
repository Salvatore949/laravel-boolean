<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('/cass/app.css')}}">
    <script src="{{asset('/js/app.js')}}"></script>
    <title>Document</title>
</head>
<body>
    <div id="app">
        @include('components.header')
        @yield('main')
        @include('components.footer')

    </div>
</body>
</html>
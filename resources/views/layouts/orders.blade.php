<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Khurshid</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <style>
        #app {
            display: flex;
            min-height: 100vh;
            flex-direction: column;
        }

        main {
            flex: 1 0 auto;
        }
    </style>
</head>
<body>
<div id="app">
    @yield('order_content')
</div>
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>

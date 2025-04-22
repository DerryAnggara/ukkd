<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @stack('head')
    <link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('bootstrap-icons/font/bootstrap-icons.min.css') }}">
</head>
<body>
    <div class="bg-primary">
        <div class="container">
        <div class="h1 text-white">Todo List</div>
    </div>
    </div>
    @yield('main-section')
</body>
</html>

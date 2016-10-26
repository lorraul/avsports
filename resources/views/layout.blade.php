<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>
    </head>
    <body>
        <ul>
            <li><a href="/">Home</a></li>
            <li><a href="/contact">Contact</a></li>
            <li><a href="/products">Products</a></li>
        </ul>
        <hr>
        @yield('content')
    </body>
</html>

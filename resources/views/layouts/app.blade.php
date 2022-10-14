<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Fumetti</title>
</head>
<body>
    @include('partials.header')
<main>
    @yield('content')
</main>

<footer>
    Footer
</footer>
</body>
</html>

<style>
    *{
        background-color: bisque;
    }
    ul{
        list-style: none;
        display: flex;
        gap: 1rem;
    }
    li{
        font-size: 2rem;
        border: 1px solid salmon;
    }
    a{
        text-decoration: none;
        color: currentColor;
    }
</style>
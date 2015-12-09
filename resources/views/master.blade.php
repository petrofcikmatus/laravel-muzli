<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>@yield('title', 'Muzli')</title>
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Montserrat:400,700">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body class="@yield('class', 'default')">

<header class="site-header">
    <nav class="container">
        <ul class="menu">
            {{--<li><strong>Home</strong></li>--}}
            <li><a href="{{ url('') }}">Home</a></li>
            <li><a href="{{ url('gallery') }}">Gallery</a></li>
            <li><a href="{{ url('blog') }}">Blog</a></li>
            <li><a href="{{ url('contact') }}">Contact</a></li>
        </ul>
    </nav>
</header>

<main>
    @yield('content')
</main>

<aside class="pre-footer">
    <div class="container">
        <h3>Buy our stuff</h3>

        <p>
            This is a website, so obviously we are trying to sell you something.<br>
            Click here, so we can send you emails you don't want!
        </p>

        <a href="{{ url('contact') }}" class="btn btn-green">Stuff to delete from your inbox</a>
    </div>
</aside>

<footer class="site-footer">
    <div class="container">
        <p class="small">
            &copy; Asskick Society, Inc.
            <span>
                design straight stolen from
                <a href="http://muz.li">muz.li</a>
            </span>
        </p>
    </div>
</footer>

</body>
</html>
<!DOCTYPE html>
<html>
    <link rel="shortcut icon" href="#">
    <script type="text/javascript" src="http://code.jquery.com/jquery-3.3.1.min.js"></script>
<head>
    <title>@yield('title','Homepage')</title>
</head>
<body>

    <ul>
        <li><a href="/">Home</a></li>
        <li><a href="/contact">Contact</a></li>
    </ul>

    @yield('content')

</body>
</html>

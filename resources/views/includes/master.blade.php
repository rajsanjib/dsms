<html>
<head>
    <title> @yield('title') </title>
    <link rel="stylesheet" href="css/bootstrap.min.css" />
</head>
<body>
        @yield('navbar')
        <div class="wrapper">
            <div class="container">
                @yield('content')
            </div>
        </div>
    @yield('footer')
</body>
</html>

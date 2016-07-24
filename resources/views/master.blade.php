<html>
<head>
    <title> @yield('title') </title>
    @include('includes.header')
</head>
<body>
        @include('includes.navbar')
        <div class="wrapper">
            <div class="container">
                @yield('content')
            </div>
        </div>
    @yield('footer')
</body>
</html>

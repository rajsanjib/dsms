<html>
<head>
    <title> @yield('title') </title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css')}}" />
    <link rel="stylesheet" href="{{ asset('css/main.css')}}" />
    <link rel="stylesheet" href="{{asset('css/bg.css')}}" />
    <link rel="stylesheet" href="{{asset('css/style.css')}}" />
    <link rel="stylesheet" href="{{asset('css/navbar.css')}}" />
    <script src="{{asset('js/bootstrap.min.js')}}" ></script>
    @include('includes.header')
</head>
<body>
        @include('includes.navbar')
        <div class="wrapper">
            <div class="container">
                @yield('content')
            </div>
        </div>
    @yield('includes.footer')
</body>

</html>

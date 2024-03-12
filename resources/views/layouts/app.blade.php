<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>
    <div id="app">
        <nav class="navbar">
            {{-- <a href="/">{{ setting('site.title') }}</a> --}}
            <a href="/"> <img src="{{ Voyager::image(setting('site.logo')) }}" alt="logo" style="width: 80px; height:80px;"></a>
            <div class="pc_ver">
                {!! menu('main', 'layouts/mymenu') !!}
            </div>

            <div class="mo_ver">
                {!! menu('main', 'layouts/mymenu') !!}
            </div>
        </nav>

        <main>
            @yield('content')
        </main>
    </div>
</body>
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-JWTL6KP9SY"></script>

<script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'G-JWTL6KP9SY');
</script>

</html>
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


    <!-- google icon -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />

</head>

<body>
    <div id="app">
        <nav class="nav">
            <div class="nav_bar">
                {{-- <a href="/">{{ setting('site.title') }}</a> --}}
                <a href="/"> <img src="{{ Voyager::image(setting('site.logo')) }}" alt="logo"
                        style="width: 80px; height:80px;"></a>
                <div class="pc_ver">
                    {!! menu('main', 'layouts/mymenu') !!}
                </div>

                <div class="mo_ver">
                    <span class="material-symbols-outlined mo_menu">
                        menu
                    </span>
                    <div class="mo_main">
                        <span class="material-symbols-outlined close">
                            close
                        </span>
                        {!! menu('main', 'layouts/mymenu') !!}
                    </div>
                </div>
            </div>
        </nav>

        <main>

            {{-- content 삽입 --}}
            @yield('content')

        </main>

        <footer>
            <div class="inner">
                <div class="main_area">
                    <h4>Nora</h4>
                    <ul class="com_info">
                        <li>이름 : 조봉희</li>
                        <li>e-mail : nada70979@gmail.com</li>
                        <li>연락처 : 010-7166-1476</li>
                        <li>주소 : 부산광역시 부산진구 범일로 176</li>
                        <li class="hr">
                            <hr>
                        </li>
                        <li class="copyright">COPYRIGHT&copy;2024</li>
                    </ul>
                </div>
                <div class="social_area">
                    <div class="s1">
                        <a href=""><img src="images/icon/i_youtube.png" alt="youtube"></a>
                    </div>
                    <div class="s2">
                        <a href=""><img src="images/icon/i_instagram.png" alt="i_instagram"></a>
                    </div>
                </div>
            </div>
        </footer>
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

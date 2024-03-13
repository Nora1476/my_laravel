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
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
</head>

<body>
    <div id="app">
        <nav class="nav">
            <div class="nav_bar">
                {{-- <a href="/">{{ setting('site.title') }}</a> --}}
                <a href="/"> <img src="{{ Voyager::image(setting('site.logo')) }}" alt="logo" style="width: 80px; height:80px;"></a>
                <div class="pc_ver">
                    {!! menu('main', 'layouts/mymenu') !!}
                </div>

                <div class="mo_ver">
                    <span class="material-symbols-outlined mo_menu">
                        menu
                    </span>
                    {!! menu('main', 'layouts/mymenu') !!}
                </div>
            </div>
        </nav>

        <main>

            {{-- content 삽입 --}}
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




    //모바일메뉴
    document.addEventListener("DOMContentLoaded", function() {
        const gnbMenu = document.querySelector('.mo_menu');
        const closeBtn = document.querySelector('.close');

        gnbMenu.addEventListener("click", function() {
            console.log("열기")
            document.querySelector(".mo_ver .gnb").classList.toggle("on");
            document.body.classList.toggle("fixed");
        });

        closeBtn.addEventListener("click", function() {
            console.log("닫기")
            document.querySelector(".mo_ver .gnb").classList.toggle("on");
            document.body.classList.toggle("fixed");
        });
        // 화면이 768px 이상일 때 fixed 클래스 제거
        //   window.addEventListener("resize", function() {
        //     if (window.innerWidth >= 768) {
        //       document.body.classList.remove("fixed");
        //     }
        //   });

    });
</script>

</html>
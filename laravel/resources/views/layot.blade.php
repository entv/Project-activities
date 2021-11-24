<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
    @yield('head')
    <title>@yield('title')</title>
</head>
<body>
    <header class="header">
        <nav class="header_navigation">
            <ul class="navigation_menu">
                <li><a href="{{route('home')}}">Главная</a></li>
                <li><a href="{{route('about')}}">О нас</a></li>
                <li><a href="{{route('news')}}">Новости</a></li>
            </ul>
            <ul class="navigation_authentication">
                @auth
                <li><a href="{{route('authentication.logout')}}">Выйти</a></li>
                @endauth
                @guest
                <li><a href="{{route('authentication')}}">Войти</a></li>
                @endguest
            </ul>
        </nav>
    </header>

    <div class="main">
        @yield('main')
    </div>
    
    <footer class="footer">
        <h1 class="footer_logo">BARAKuda</h1>
        
        <ul class="footer_content">
            <li><a href="https://www.instagram.com/challenge/?next=/barakuda_usk/%253Fhl%253Dru" target="_blank">Инстаграм</a></li>
            <li><a href="https://www.youtube.com/c/BARAKuda_usk/videos" target="_blank">Youtube</a></li>
            <li><a href="https://vk.com/vitalijnalivkin" target="_blank">Вконтакте</a></li>
        </ul>

        <div class="footer_legal">
             <p>Copyright Nalivkin &copy; 2021. All rights reserved.</p>
         </div>
    </footer>

    @yield('scrpts')
</body>
</html>
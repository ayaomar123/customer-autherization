
<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" dir="{{ app()->getLocale() == 'ar'? 'rtl' : 'ltr' }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <!-- Styles -->
    <style>
        html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }
        .full-height {
            height: 100vh;
        }
        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }
        .position-ref {
            position: relative;
        }
        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }
        .content {
            text-align: center;
        }
        .title {
            font-size: 84px;
        }
        .links > a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }
        .m-b-md {
            margin-bottom: 30px;
        }
    </style>
</head>
<body>
<div class="flex-center position-ref full-height">
    @if (Route::has('login'))
        <div class="top-right links">
                <a href ="{{ url('/locale/en') }}">English</a>
                <a href ="{{ url('/locale/ar') }}">@lang('home.Arabic')</a>

            @auth
                <a href="{{ url('/home') }}">@lang('home.home')</a>
            @else
                <a href="{{ route('login') }}">@lang('home.login')</a>
                @if (Route::has('register'))
                    <a href="{{ route('register') }}">@lang('home.register')</a>
                @endif
            @endauth
        </div>
    @endif
    <div class="content">
        <div class="title m-b-md">
            @lang('home.laravel')
        </div>
        <div class="links">
            <a href="https://laravel.com/docs">@lang('home.docs')</a>
            <a href="https://laracasts.com">@lang('home.laracasts')</a>
            <a href="https://laravel-news.com">@lang('home.home')</a>
            <a href="https://blog.laravel.com">@lang('home.blog')</a>
            <a href="https://nova.laravel.com">@lang('home.nova')</a>
            <a href="https://forge.laravel.com">@lang('home.forge')</a>
            <a href="https://vapor.laravel.com">@lang('home.vapor')</a>
            <a href="https://github.com/laravel/laravel">@lang('home.github')</a>
        </div>
    </div>
</div>
</body>
</html>

<!DOCTYPE html>
<html lang="en" dir="rtl">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width" />
    <meta name="description" content="Neon Admin Panel" />
    <meta name="author" content="" />

    <link rel="icon" href="{{asset('assets/images/favicon.ico')}}">

    <title>Aya | Customer</title>
    <link rel="stylesheet" href="{{asset('assets/js/jquery-ui/css/no-theme/jquery-ui-1.10.3.custom.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/font-icons/entypo/css/entypo.css')}}">
    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Noto+Sans:400,700,400italic">
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/neon-core.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/neon-theme.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/neon-forms.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/neon-rtl.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/custom.css')}}">

    <script src="{{asset('assets/js/jquery-1.11.3.min.js')}}"></script>
    <div class=" clearfix" style="text-align: left;">

        <ul class="user-info  pull-none-xsm" >
            @guest
                <li class="profile-info dropdown pull-right" >
                    <a class="btn" href="{{url('/register')}}" >Register</a>
                </li>
                <li class="profile-info dropdown pull-right">
                    <a class="btn" href="{{url('/login')}}" > Login</a>
                </li>
            @else
                <li class="profile-info dropdown pull-right">
                    <a class="btn" href="{{ url('/logout') }}"> logout </a>
                </li>
        @endguest
        <!-- Profile Info -->
            <li class="profile-info dropdown pull-left"><!-- add class "pull-right" if you want to place this from right -->

                <a  href="{{url('/customers')}}" class="dropdown-toggle " data-toggle="dropdown">
                    <img src="{{asset('images/m.jpg')}}" alt="" class="img-circle" width="44" />
                    Customer Admin
                </a>
            </li>
        </ul>

    </div>
</head>

<body class="page-body  page-fade" data-url="http://neon.dev">

<div class="page-container">

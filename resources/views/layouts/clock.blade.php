<!doctype html>
<!--
* PHP Attendance Management System
* Email: heyalexluna@gmail.com
* Version: 1.1
* Author: Alexis Luna
* Copyright 2019 Alexis Luna
* Website: https://github.com/mralexisluna/php-attendance-management-system
-->
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
        <meta name="viewport" content="width=device-width" />
        <meta name="csrf-token" content="{{ csrf_token() }}" />

        <title>Smart Clock | Smart Timesheet</title>
        <link rel="stylesheet" type="text/css" href="{{ asset('/assets/vendor/bootstrap/css/bootstrap.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('/assets/vendor/semantic-ui/semantic.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('/assets/css/clock.css') }}">
        
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="{{ asset('/assets/js/html5shiv.js') }}></script>
            <script src="{{ asset('/assets/js/respond.min.js') }}"></script>
        <![endif]-->

        @yield('styles')
    </head>
    <body>

    <img src="{{ asset('/assets/images/img/clock-background.png') }}" class="wave">
    <div class="wrapper">
        
        <div id="body">

            <div class="content">

                @yield('content')
             
            </div>

        </div>
    </div>

    <script src="{{ asset('/assets/vendor/jquery/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('/assets/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('/assets/vendor/semantic-ui/semantic.min.js') }}"></script>
    <script src="{{ asset('/assets/js/script.js') }}"></script>

    @yield('scripts')

    </body>
</html>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html lang="zxx">
<!-- <html lang="{{ app()->getLocale() }}"> -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Mountains</title>

    <!-- Styles -->

    <link rel="stylesheet" href="/assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="/assets/css/fontawesome-all.min.css" />
    <link rel="stylesheet" href="/assets/css/toastr.css" />
    <link rel="stylesheet" href="/assets/css/style.css" type="text/css" />
</head>

    <body data-ng-app="app" data-ng-controller="PublicCtrl" ng-cloak>

        <!--container start-->

        @yield('content')

        <!--container end-->


        <!-- Scripts -->
        <script src="/assets/js/libs/jquery-3.2.1.min.js"></script>
        <script src="/assets/js/libs/angular.js"></script>
        <script src="/assets/js/libs/popper.js"></script>
        <script src="/assets/js/libs/ui.js"></script>
        <script src="/assets/js/libs/bootstrap.min.js"></script>
        <script src="/assets/js/libs/jquery.mobile-1.4.5.min.js"></script>
        <script src="/assets/js/publicCtrl.js"></script>
        <script src="/assets/js/adminCtrl.js"></script>
        <script src="/assets/js/script.js"></script>
        <script src="/assets/js/factories.js"></script>

    </body>
</html>

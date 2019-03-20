<!DOCTYPE html>
<html lang="vi">
    <head>
        <!-- ================= Favicon ================== -->
        <link rel="icon" href="{{url('')}}@if($favicon){{$favicon}}@endif" type="image/x-icon" />
        <meta http-equiv="content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <meta name="format-detection" content="telephone=no">
        <title>@yield('title'){{$siteName}}</title>
        <meta name="description" content="@yield('description')">
        <meta name="keywords" content="@yield('keywords')">
        <meta property="og:type" content="website">
        <meta property="og:title" content="@yield('title'){{$siteName}}">
        <meta property="og:image" content="http:{{url('')}}/assets/frontend/v1.0/images/icons/logo.png">
        <meta property="og:image:secure_url" content="https:{{url('')}}/assets/frontend/v1.0/images/icons/logo.png">
        <meta property="og:description" content="@yield('description')">
        <meta property="og:url" content="{{url('')}}/">
        <meta property="og:site_name" content="{{$siteName}}">
        @csrf
        <link rel="canonical" href="{{url('')}}">
        <link rel="stylesheet" href="{{url('')}}/assets/frontend/v1.0/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="{{url('')}}/assets/frontend/v1.0/css/plugin.scss.css" rel="stylesheet" type="text/css" />
        <link href="//fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet" type="text/css" />
        <link href="{{url('')}}/assets/frontend/v1.0/css/base.scss.css" rel="stylesheet" type="text/css" />
        <link href="{{url('')}}/assets/frontend/v1.0/css/style.scss.css" rel="stylesheet" type="text/css" />
        <link href="{{url('')}}/assets/frontend/v1.0/css/module.scss.css" rel="stylesheet" type="text/css" />
        <link href="{{url('')}}/assets/frontend/v1.0/css/responsive.scss.css" rel="stylesheet" type="text/css" />
        <link href="{{url('')}}/assets/frontend/v1.0/css/stylesheet.scss.css" rel="stylesheet" type="text/css" />
        <link href="{{url('')}}/assets/frontend/v1.0/jquery/jquery.mmenu.all.css" rel="stylesheet" type="text/css" />
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-122223900-1"></script>
        <script src="{{url('')}}/assets/frontend/v1.0/jquery/jquery-2.2.3.min.js" type="text/javascript"></script>
    </head>
    <body>
        <div class="page-body">
            <div class="hidden-md hidden-lg opacity_menu"></div>
            <div class="opacity_filter"></div>
            <header class="header">

                
            
            
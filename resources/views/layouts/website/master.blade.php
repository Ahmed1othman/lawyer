<!DOCTYPE html>
<html lang="{{App::getLocale()}}" class="no-js" dir="rtl">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('title') {{ websiteInfo_hlp('website_name') }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="BreezyCV - Resume / CV / vCard Template" />
    <meta name="keywords" content="vcard, resposnive, retina, resume, jquery, css3, bootstrap, Material CV, portfolio" />
    <link rel="shortcut icon" href="favicon.ico">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <link rel="icon" href="">
    @yield('meta')
    @include('layouts.website.header')
</head>
<body style="background-image: url('{{asset('website/img/bg1.jpg')}}');">
    @include('layouts.website.loader')
    @include('layouts.website.navbar')
    @yield('content')
    @include('layouts.website.footer-script')
</body>
</html>

<link rel="stylesheet" href="{{ asset('website/css/reset.css')}}" type="text/css">
<link rel="stylesheet" href="{{ asset('website/css/bootstrap-grid.min.css')}}" type="text/css">
<link rel="stylesheet" href="{{ asset('website/css/animations.css')}}" type="text/css">
<link rel="stylesheet" href="{{ asset('website/css/perfect-scrollbar.css')}}" type="text/css">
<link rel="stylesheet" href="{{ asset('website/css/owl.carousel.css')}}" type="text/css">
<link rel="stylesheet" href="{{ asset('website/css/magnific-popup.css')}}" type="text/css">
@if(App::isLocale('ar'))
    <link rel="stylesheet" href="{{ asset('website/css/main-rtl.css')}}" type="text/css">
@else
    <link rel="stylesheet" href="{{ asset('website/css/main.css')}}" type="text/css">
@endif


<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

<style>
     body{
        font-family: 'Cairo', sans-serif!important;
    }
</style>

<script src="{{ asset('website/js/modernizr.custom.js')}}"></script>


{{--<link href="{{ websiteInfo_hlp('font_url') }}" rel="stylesheet">--}}


<style>
    .kit-overlay1 {
        background-position: center center;
        background-repeat: no-repeat;
        background-size: cover;
    }
    .kit-overlay1::before {
        opacity: 0.9;
    }

    .kit-overlay1::before {
        content: "";
        display: block;
        position: absolute;
        z-index: -1;
        width: 100%;
        height: 100%;
        top: 0;
        left: 0;
        /*background: #05233a;*/
        background: #222;
    }

    section{
        background-color: transparent!important;
    }
</style>


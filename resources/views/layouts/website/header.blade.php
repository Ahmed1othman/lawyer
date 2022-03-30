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

<link rel="stylesheet" href="{{ asset('website/css/custom.css')}}" type="text/css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=El+Messiri:wght@400;500;600;700&display=swap" rel="stylesheet">
<style>
    body,
    .btn-primary:hover,
    .btn-primary:focus,
    button:hover,
    button:focus,
    input[type="button"]:hover,
    input[type="button"]:focus,
    input[type="submit"]:hover,
    input[type="submit"]:focus,
    .preloader-spinner,
    .ps:hover>.ps__scrollbar-y-rail:hover>.ps__scrollbar-y,
    .ps:hover.ps--in-scrolling.ps--y>.ps__scrollbar-y-rail>.ps__scrollbar-y,
    .testimonials.owl-carousel .owl-nav .owl-prev:hover,
    .testimonials.owl-carousel .owl-nav .owl-next:hover,
    .clients.owl-carousel .owl-nav .owl-prev:hover,
    .clients.owl-carousel .owl-nav .owl-next:hover,
    .timeline-second-style .divider:before,
    .skills-second-style .skill-container:before,
    .skills-second-style .skill-percentage,
    .knowledges li,
    .ajax-page-nav > div.nav-item a:hover,
    .share-buttons a:hover,
    .menu-toggle,
    .fw-pricing .fw-package-wrap.highlight-col .fw-heading-row span:after,
    .home_button:hover
    {
        background-color: {{ websiteInfo_hlp('main_font_color') }};
    }

    ul.main-menu a.active,
    ul.main-menu a:focus,
    ul.main-menu a:hover,
    .lmpixels-arrows-nav div:hover,
    .header-buttons .btn-primary:hover,
    .page-title h2 span,
    .form-group-with-icon.form-group-focus i,
    .form-group .form-control:focus ~ label,
    .form-group.form-group-focus .form-control ~ label,
    .block-title h3 span,
    .block-title h3 span,
    .info-list .title,
    .info-block-w-icon i,
    .lm-info-block i,
    .lm-info-block .lm-info-block-value,
    .testimonial .author-info .icon,
    .portfolio-grid figure i,
    .project-general-info .fa,
    .fun-fact i,
    .fun-fact .lm-info-block,
    .home_button
    {
        color: {{ websiteInfo_hlp('main_font_color') }};;
    }


    .wp-block-button .wp-block-button__link,
    .btn-primary:hover,
    .btn-primary:focus,
    button:hover,
    button:focus,
    input[type="button"]:hover,
    input[type="button"]:focus,
    input[type="submit"]:hover,
    input[type="submit"]:focus,
    .form-control ~ .form-control-border,
    .timeline-second-style .divider:after,
    .lmpixels-arrows-nav,
    .lmpixels-arrows-nav,
    .home_button
    {
        border: 2px solid {{ websiteInfo_hlp('main_font_color') }};;
    }

    .page-title:after,
    .block-title:after
    {
        background-image: -webkit-repeating-radial-gradient(center center, {{ websiteInfo_hlp('main_font_color') }}, {{ websiteInfo_hlp('main_font_color') }} 1px, transparent 0px, transparent 100%);
        background-image: -moz-repeating-radial-gradient(center center, {{ websiteInfo_hlp('main_font_color') }}, {{ websiteInfo_hlp('main_font_color') }} 1px, transparent 0px, transparent 100%);
        background-image: -ms-repeating-radial-gradient(center center, {{ websiteInfo_hlp('main_font_color') }}, {{ websiteInfo_hlp('main_font_color') }} 1px, transparent 0px, transparent 100%);
    }

    .testimonials.owl-carousel .owl-nav .owl-prev:hover,
    .testimonials.owl-carousel .owl-nav .owl-next:hover,
    .clients.owl-carousel .owl-nav .owl-prev:hover,
    .clients.owl-carousel .owl-nav .owl-next:hover
    {
        border-color: {{ websiteInfo_hlp('main_font_color') }};;
    }

    .skills-second-style .skill-container
    {
        border: 1px solid {{ websiteInfo_hlp('main_font_color') }};
    }

    body,
    h1, h2, h3, h4, h5, h6,
    .btn-primary,
    .btn-secondary,
    button,
    input[type="button"],
    input[type="submit"],
    .wp-block-button .wp-block-button__link,
    .form-control,
    .form-control:focus,
    .has-error .form-control,
    .has-error .form-control:focus,
    input[type="search"],
    input[type="password"],
    input[type="text"]
    {
        font-family: {!! websiteInfo_hlp('font_family') !!};
    }

    .testimonials.owl-carousel .owl-nav .owl-prev,
    .testimonials.owl-carousel .owl-nav .owl-next,
    .clients.owl-carousel .owl-nav .owl-prev,
    .clients.owl-carousel .owl-nav .owl-next,
    .portfolio-page-carousel .owl-nav [class*='owl-']
    {
        font-family: "Font Awesome 5 Free";
    }
    .blog-card .media-block a .mask{
        font-family: 'Linearicons-Free';
    }

</style>

<style>
    {
        font-family: 'El Messiri', sans-serif;
    }
</style>

<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
<link href="{{ asset('website/plugins/notifications/css/lobibox.min.css') }}" rel="stylesheet"/>


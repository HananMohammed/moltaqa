<!DOCTYPE html>
<!-- saved from url=(0023)http://vcv.moltaqa.net/ -->
<html lang="en-US"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <title>تطبيق فيديو سي في -  </title>
    <meta name="description" content="Pixa - App Landing Page Pack with Page builder">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="./تطبيق فيديو سي في -_files/1608234656-logo-new.png">

    <!-- STYLESHEETS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset_public('front/assets/css/font-awesome.min.css')}}" type="text/css" media="all">
    <link rel="stylesheet" href="{{asset_public('front/assets/css/et-line.css')}}" type="text/css" media="all">
    <link rel="stylesheet" href="{{asset_public('front/assets/css/magnific-popup.css')}}" type="text/css" media="all">
    <link rel="stylesheet" href="{{asset_public('front/assets/css/slick.css')}}" type="text/css" media="all">
    <link rel="stylesheet" href="{{asset_public('front/assets/css/hover-min.css')}}" type="text/css" media="all">
    <link rel="stylesheet" href="{{asset_public('front/assets/css/style.css')}}" type="text/css" media="all">
    @if(app()->getLocale()=='ar')
        <link rel="stylesheet" href="{{asset_public('front/assets/css/style-rtl.css')}}" type="text/css" media="all">
    @endif
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>
<div class="preloader-outer" style="display: none;">
    <div class="preloader" aria-busy="true" aria-label="Loading, please wait." role="progressbar"></div>
</div>
<!--Navbar-->
@include('front.layouts.includes.navbar')
@yield('content')
@include('front.layouts.includes.footer')
<!-- SCRIPTS -->
<script type="text/javascript" src="{{asset_public('front/assets/js/jquery.ajaxchimp.js')}}"></script>
<script type="text/javascript" src="{{asset_public('front/assets/js/jquery.easing.min.js')}}"></script>
<script type="text/javascript" src="{{asset_public('front/assets/js/jquery.single-page.min.js')}}"></script>
<script type="text/javascript" src="{{asset_public('front/assets/js/jquery.magnific-popup.min.js')}}"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script type="text/javascript" src="{{asset_public('front/assets/js/jquery.counterup.min.js')}}"></script>
<script type="text/javascript" src="{{asset_public('front/assets/js/jquery.ajaxchimp.js')}}"></script>
<script type="text/javascript" src="{{asset_public('front/assets/js/countdown.js')}}"></script>
<script type="text/javascript" src="{{asset_public('front/assets/js/waypoints.min.js')}}"></script>
<script type="text/javascript" src="{{asset_public('front/assets/js/slick.min.js')}}"></script>
<script type="text/javascript" src="{{asset_public('front/assets/js/scrollreveal.min.js')}}"></script>
<script type="text/javascript" src="{{asset_public('front/assets/js/classie.js')}}"></script>
<script type="text/javascript" src="{{asset_public('front/assets/js/custom.js')}}"></script>
</body>
</html>

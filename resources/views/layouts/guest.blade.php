<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- SEO Meta description -->
    <meta name="description"
          content="">
    <meta name="author" content="">

    <!-- OG Meta Tags to improve the way the post looks when you share the page on LinkedIn, Facebook, Google+ -->
    <meta property="og:site_name" content=""/> <!-- website name -->
    <meta property="og:site" content=""/> <!-- website link -->
    <meta property="og:title" content=""/> <!-- title shown in the actual shared post -->
    <meta property="og:description" content=""/> <!-- description shown in the actual shared post -->
    <meta property="og:image" content=""/> <!-- image link, make sure it's jpg -->
    <meta property="og:url" content=""/> <!-- where do you want your post to link to -->
    <meta property="og:type" content="article"/>

    <!--title-->
    <title>@yield('title')</title>

	<!--favicon icon-->
    <link rel="icon" href="{{ asset('img/favicon.png') }}" type="image/png" sizes="16x16">

    <!--google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700%7COpen+Sans:400,600&amp;display=swap"
          rel="stylesheet">

    <!--Bootstrap css-->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <!--Magnific popup css-->
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">
    <!--Themify icon css-->
    <link rel="stylesheet" href="{{ asset('css/themify-icons.css') }}">
    <!--Fontawesome icon css-->
    <link rel="stylesheet" href="{{ asset('css/all.min.css') }}">
    <!--animated css-->
    <link rel="stylesheet" href="{{ asset('css/animate.min.css') }}">
    <!--ytplayer css-->
    <link rel="stylesheet" href="{{ asset('css/jquery.mb.YTPlayer.min.css') }}">
    <!--Owl carousel css-->
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">
    <!--custom css-->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <!--responsive css-->
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">

</head>
<body>

<!--loader start-->
<div id="preloader">
    <div class="loader1">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
    </div>
</div>
<!--loader end-->

<!--body content wrap start-->
<div class="main">

    <!--hero section start-->
    @yield('content')
    <!--hero section end-->

</div>
<!--body content wrap end-->

<!--bottom to top button start-->
<button class="scroll-top scroll-to-target" data-target="html">
    <span class="ti-angle-up"></span>
</button>
<!--bottom to top button end-->

<!--jQuery-->
<script src="{{ asset('js/jquery-3.5.0.min.js') }}"></script>
<!--Popper js-->
<script src="{{ asset('js/popper.min.js') }}"></script>
<!--Bootstrap js-->
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<!--Magnific popup js-->
<script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
<!--jquery easing js-->
<script src="{{ asset('js/jquery.easing.min.js') }}"></script>
<!--jquery ytplayer js-->
<script src="{{ asset('js/jquery.mb.YTPlayer.min.js') }}"></script>
<!--Isotope filter js-->
<script src="{{ asset('js/mixitup.min.j') }}s"></script>
<!--wow js-->
<script src="{{ asset('js/wow.min.js') }}"></script>
<!--owl carousel js-->
<script src="{{ asset('js/owl.carousel.min.js') }}"></script>
<!--countdown js-->
<script src="{{ asset('js/jquery.countdown.min.js') }}"></script>
<!--jquery easypiechart-->
<script src="{{ asset('js/jquery.easy-pie-chart.js') }}"></script>
<!--custom js-->
<script src="{{ asset('js/scripts.js') }}"></script>
</body>


</html>
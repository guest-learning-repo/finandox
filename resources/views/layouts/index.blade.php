<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<title>Cashand - An Iniiative Towards Cashless India</title>
<!-- Stylesheets -->
<link href="{{ asset('assets/css/bootstrap.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/css/style.css')}}" rel="stylesheet">
    <!-- Responsive File -->
    <link href="{{ asset('assets/css/responsive.css')}}" rel="stylesheet">
    <!-- Color File -->
    <link href="{{ asset('assets/css/color.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/css/home_style.css')}}" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900&amp;display=swap" rel="stylesheet">

    <link rel="icon" href="{{ asset('assets/images/logo-cashand/favicon.png')}}" type="image/x-icon">
    <link rel="icon" href="{{ asset('assets/images/logo-cashand/favicon.png')}}" type="image/x-icon">
<link rel="icon" href="assets/images/logo-cashand/favicon.png" type="image/x-icon">
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

</head>

<body>

<div class="page-wrapper">
    <!-- Preloader -->
    <div class="loader-wrap">
        <div class="preloader"><div class="preloader-close">Preloader Close</div></div>
        <div class="layer layer-one"><span class="overlay"></span></div>
        <div class="layer layer-two"><span class="overlay"></span></div>        
        <div class="layer layer-three"><span class="overlay"></span></div>        
    </div>

    <!-- Main Header -->
    @include('layouts.include.header')
    <!-- End Main Header -->
    
    <!--Search Popup-->
    <div id="search-popup" class="search-popup">
        <div class="close-search theme-btn"><span class="flaticon-cancel"></span></div>
        <div class="popup-inner">
            <div class="overlay-layer"></div>
            <div class="search-form">
                <form method="post" action="#">
                    <div class="form-group">
                        <fieldset>
                            <input type="search" class="form-control" name="search-input" value="" placeholder="Search Here" required >
                            <input type="submit" value="Search Now!" class="theme-btn">
                        </fieldset>
                    </div>
                </form>
                <br>
                <h3>Recent Search Keywords</h3>
                <ul class="recent-searches">
                    <li><a href="#">Finance</a></li>
                    <li><a href="#">Idea</a></li>
                    <li><a href="#">Service</a></li>
                    <li><a href="#">Growth</a></li>
                    <li><a href="#">Plan</a></li>
                </ul>
            </div>
            
        </div>
    </div>
    @yield('content')
	<!-- Main Footer -->
   @include('layouts.include.footer')
    <!-- End Main Footer -->
	
</div>
<!--End pagewrapper-->

<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fal fa-arrow-circle-up"></span></div>

<script src="{{ asset('assets/js/jquery.js')}}"></script>
    <script src="{{ asset('assets/js/popper.min.js')}}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('assets/js/bootstrap-select.min.js')}}"></script>
    <script src="{{ asset('assets/js/jquery.fancybox.js')}}"></script>
    <script src="{{ asset('assets/js/isotope.js')}}"></script>
    <script src="{{ asset('assets/js/owl.js')}}"></script>
    <script src="{{ asset('assets/js/appear.js')}}"></script>
    <script src="{{ asset('assets/js/wow.js')}}"></script>
    <script src="{{ asset('assets/js/lazyload.js')}}"></script>
    <script src="{{ asset('assets/js/scrollbar.js')}}"></script>
    <script src="{{ asset('assets/js/TweenMax.min.js')}}"></script>
    <script src="{{ asset('assets/js/script.js')}}"></script>

</body>

<!-- Mirrored from azim.commonsupport.com/Finandox/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 29 Mar 2022 10:37:46 GMT -->
</html>
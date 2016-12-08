<!DOCTYPE html>
<!--[if lt IE 7]>      <html lang="en" class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html lang="en" class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html lang="en" class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
    <head>
        <!-- Mobile Specific Meta -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Always force latest IE rendering engine -->
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!-- Meta Keyword -->
        <meta name="keywords" content="one page, business template, single page, onepage, responsive, parallax, creative, business, html5, css3, css3 animation">
        <!-- meta character set -->
        <meta charset="utf-8">

        <!-- Site Title -->
        <title>{{ trans('totalgas.title') }}</title>
        
        <!--
        Google Fonts
        ============================================= -->
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700" rel="stylesheet" type="text/css">
		
        <!--
        CSS
        ============================================= -->
        <!-- Fontawesome -->
        <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
        <!-- Bootstrap -->
        <link rel="stylesheet" href="{{ asset('/css/bootstrap.min.css') }}">
        <!-- Fancybox -->
        <link rel="stylesheet" href="{{ asset('/css/jquery.fancybox.css') }}">
        <!-- owl carousel -->
        <link rel="stylesheet" href="{{ asset('/css/owl.carousel.css') }}">
        <!-- Animate -->
        <link rel="stylesheet" href="{{ asset('/css/animate.css') }}">
        <!-- Main Stylesheet -->
        <link rel="stylesheet" href="{{ asset('/css/main.css') }}">
        <!-- Main Responsive -->
        <link rel="stylesheet" href="{{ asset('/css/responsive.css') }}">
		<!-- favicon -->
        <link rel="shortcut icon" href="{{ asset('/img/favicon.jpg') }}" type="image/x-icon">
        <link rel="icon" href="{{ asset('/imag/favicon.jpg') }}" type="image/x-icon">


		
		<!-- Modernizer Script for old Browsers -->
        <script src="{{ asset('/js/vendor/modernizr-2.6.2.min.js') }}"></script>
		
    </head>
	
    <body>

        @include('app.partials.navigation')



        @include('app.partials.home')


        @include('app.partials.service')


        @include('app.partials.portfolio')

        @include('app.partials.about')


        <!--
        #count
        ========================== -->

        <section id="count">
            <div class="container">
                <div class="row">
                    <div class="counter-section clearfix">

                        <div class="col-md-3 col-sm-6 col-xs-12 wow fadeInLeft" data-wow-delay="0.5s">
                            <div class="fact-item text-center">
                                <div class="fact-icon">
                                    <i class="fa fa-check-square fa-lg"></i>
                                </div>
                                <span data-to="120">0</span>
                                <p>Завершених проектів</p>
                            </div>
                        </div>

                        <div class="col-md-3 col-sm-6 col-xs-12 wow fadeInLeft" data-wow-delay="0.8s">
                            <div class="fact-item text-center">
                                <div class="fact-icon">
                                    <i class="fa fa-users fa-lg"></i>
                                </div>
                                <span data-to="158">0</span>
                                <p>Задоволених клієнтів</p>
                            </div>
                        </div>

                        <div class="col-md-3 col-sm-6 col-xs-12 wow fadeInLeft" data-wow-delay="1.1s">
                            <div class="fact-item text-center last">
                                <div class="fact-icon">
                                    <i class="fa fa-trophy fa-lg"></i>
                                </div>
                                <span data-to="15">0</span>
                                <p>Здобутих нагород</p>
                            </div>
                        </div>

                        <div class="col-md-3 col-sm-6 col-xs-12 wow fadeInLeft" data-wow-delay="1.3s">
                            <div class="fact-item text-center last">
                                <div class="fact-icon">
                                    <i class="fa fa-clock-o fa-lg"></i>
                                </div>
                                <span data-to="3500">0</span>
                                <p>Працюючих годин</p>
                            </div>
                        </div>



                    </div>
                </div>
            </div>
        </section>
        <!--
        End #count
        ========================== -->



        <!--
        #quotes
        ========================== -->
        <section id="quotes">
            <div class="container">
                <div class="row wow zoomIn">
                    <div class="col-lg-12">
                        <div class="call-to-action text-center">
                            <p>We are always working hard to become a trusted partner able to give better value business to our customers</p>
                            <span></span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--
        End #quotes
        ========================== -->



        @include('app.partials.partners')

        @include('app.partials.clients')

        @include('app.partials.contact')


        <!--
        #footer
        ========================== -->
        <footer id="footer" class="text-center" style="padding-top: 50px;">
            <div class="container" style="margin-left: 40px;" >
			<div style="text-align:center">
                            <img src="{{ asset('/img/12345.png') }}" alt="certificate">
                        </div>
			<br><br>
                <p><a>Totalgaz Industrie Ukraine LLC © 2016 |  All rights reserved  </a><p>
			</div>
			
        </footer>
        <!--
        End #footer
        ========================== -->


        <!--
        JavaScripts
        ========================== -->
        
        <!-- main jQuery -->
        <script src="{{ asset('/js/vendor/jquery-1.11.1.min.js') }}"></script>
        <!-- Bootstrap -->
        <script src="{{ asset('/js/bootstrap.min.js') }}"></script>
        <!-- jquery.nav -->
        <script src="{{ asset('/js/jquery.nav.js') }}"></script>
        <!-- Portfolio Filtering -->
        <script src="{{ asset('/js/jquery.mixitup.min.js') }}"></script>
        <!-- Fancybox -->
        <script src="{{ asset('/js/jquery.fancybox.pack.js') }}"></script>
        <!-- Parallax sections -->
        <script src="{{ asset('/js/jquery.parallax-1.1.3.js') }}"></script>
        <!-- jQuery Appear -->
        <script src="{{ asset('/js/jquery.appear.js') }}"></script>
        <!-- countTo -->
        <script src="{{ asset('/js/jquery-countTo.js') }}"></script>
        <!-- owl carousel -->
        <script src="{{ asset('/js/owl.carousel.min.js') }}"></script>
        <!-- WOW script -->
        <script src="{{ asset('/js/wow.min.js') }}"></script>
        <!-- theme custom scripts -->
        <script src="{{ asset('/js/main.js') }}"></script>
    </body>
</html>
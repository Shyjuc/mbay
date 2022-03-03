<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="it">
  <meta name="keywords" content="Rapoo,creative, agency, startup,onepage, clean, modern,business, company,it">
  
  <meta name="author" content="themefisher.com">

  <title>MovingBay: Packers and Movers | About</title>

  <link rel="icon" type="image/x-icon" href="{{ asset('images/favicon.png') }}">

  <!-- bootstrap.min css -->
  <link rel="stylesheet" href="{{ asset('plugins/bootstrap/css/bootstrap.min.css') }}">
  <!-- Animate Css -->
  <link rel="stylesheet" href="{{ asset('plugins/animate-css/animate.css') }}">
  <!-- Icon Font css -->
  <link rel="stylesheet" href="{{ asset('plugins/fontawesome/css/all.css') }}">
  <link rel="stylesheet" href="{{ asset('plugins/fonts/Pe-icon-7-stroke.css') }}">
  <!-- Themify icon Css -->
  <link rel="stylesheet" href="{{ asset('plugins/themify/css/themify-icons.css') }}">
  <!-- Slick Carousel CSS -->
  <link rel="stylesheet" href="{{ asset('plugins/slick-carousel/slick/slick.css') }}">
  <link rel="stylesheet" href="{{ asset('plugins/slick-carousel/slick/slick-theme.css') }}">

  <!-- Main Stylesheet -->
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">

</head>


<body id="top-header">
<!-- LOADER TEMPLATE -->
<div id="page-loader">
    <div class="loader-icon fa fa-spin colored-border"></div>
</div>
 <!-- /LOADER TEMPLATE -->


    <!-- NAVBAR
    ================================================= -->
    <nav class="navbar navbar-expand-lg navbar-dark trans-navigation fixed-top navbar-togglable">
        <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="images/blue-green-logo.png" alt="Movingbay" class="img-fluid">
                </a>

            <!-- Toggler -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="fa fa-bars"></span>
            </button>

            <!-- Collapse -->
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <!-- Links -->
                <ul class="navbar-nav ml-auto" style="font-size:14px;">
                <li class="nav-item ">
                            <a href="{{ url('/') }}" class="nav-link js-scroll-trigger">
                                Home
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarWelcome" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Services
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarWelcome">
                                 <a class="dropdown-item " href="{{ url('/pet-shipping') }}">
                                    Pet Relocation
                                </a>
                                <a class="dropdown-item " href="{{ url('/home-search') }}">
                                    Home Search
                                </a>
                                <a class="dropdown-item " href="{{ url('/school-search') }}">
                                    School Search
                                </a>
                                <a class="dropdown-item " href="{{ url('/household-relocation') }}">
                                    Household good relocation
                                </a>
                                <a class="dropdown-item " href="{{ url('/employee-relocation') }}">
                                    Employee Relocation
                                </a> 
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarWelcome" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Moving to
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarWelcome">
                            <a class="dropdown-item " href="{{ url('/moving-to-india') }}">
                                    INDIA
                                </a>
                                 <a class="dropdown-item " href="{{ url('/moving-to-usa') }}">
                                    USA
                                </a>
                                <a class="dropdown-item " href="{{ url('/moving-to-europe') }}">
                                    EUROPE
                                </a>
                                <a class="dropdown-item " href="{{ url('/moving-to-gcc') }}">
                                    GCC
                                </a>
                                <a class="dropdown-item " href="{{ url('/moving-to-canada') }}">
                                    CANADA
                                </a>
                                <a class="dropdown-item " href="{{ url('/moving-to-south-america') }}">
                                    SOUTH AMERICA
                                </a>
                                <a class="dropdown-item " href="{{ url('/moving-to-australia') }}">
                                    AUSTRALIA
                                </a> 
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarWelcome" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Quotes
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarWelcome">
                                 <a class="dropdown-item " href="{{ url('/quotes') }}">
                                    Household Shipping
                                </a>
                                <a class="dropdown-item " href="{{ url('/pet-shipping') }}">
                                    Pet Shipping
                                </a> 
                            </div>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarWelcome" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Contact
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarWelcome">
                                 <a class="dropdown-item " href="{{ url('/about') }}">
                                    Company profile
                                </a>
                                <a class="dropdown-item " href="{{ url('/contact') }}">
                                    Contact us
                                </a> 
                            </div>
                        </li>
                </ul>
                <ul class="ml-lg-auto list-unstyled m-0">
                        <li><a href="https://wa.me/918618173141?text=Movingbay.org:%20<%20Please-type-your-query-here>." class="btn btn-trans-white btn-circled"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
  <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z"/>
</svg> WhatsApp</a></li>
                    </ul>
            </div> <!-- / .navbar-collapse -->
        </div> <!-- / .container -->
    </nav>
    

   <!-- HERO
    ================================================== -->
    <section class="page-banner-area page-about">
        <div class="overlay"></div>
        <!-- Content -->
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-9 col-md-12 col-12 text-center">
                    <div class="page-banner-content">
                        <h1 class="display-4 font-weight-bold">YOUR IDEAL MOVING PARTNER</h1>
                        <p>Household good relocation | Pet Moving | Immigration</p>
                    </div>
                </div>
            </div> <!-- / .row -->
        </div> <!-- / .container -->
    </section>

    <section class="section" id="service">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-lg-7 pl-4 text-center">
                    <div class="service-heading">
                        <h1>WHY MOVINGBAY?</h1>
                        <h4>Movingbay is a privately held organization providing global mobility services for over 20 years. We are a full service international relocation company. We provide a truly exceptional moving experience to our clients, their employees and their families; with our top priorities that yielded a phenomenal number of repeated clients</h4>
                    </div>
                </div>
            </div>
            
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6">
                    <div class="service-block media">
                        <div class="service-icon">
                            <i class="ti-reload"></i>
                        </div>
                        <div class="service-inner-content media-body">
                            <h4>Stress free relocation</h4>
                            <p>With our presence in East & West coast time zones, you are always working with a team in or near your time zone.</p>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4 mb-3 col-md-6">
                    <div class="service-block media">
                        <div class="service-icon">
                            <i class="ti-cloud"></i>
                        </div>
                        <div class="service-inner-content media-body">
                            <h4>Timely Communication</h4>
                            <p>We make our customer journey convenient by providing regular updates at various phases of relocation.</p>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4 mb-3 col-md-6">
                    <div class="service-block media ">
                        <div class="service-icon">
                            <i class="ti-world"></i>
                        </div>
                        <div class="service-inner-content media-body">
                            <h4>Personalized Attention</h4>
                            <p>1:1 Customer Service, with the assistance of 50+ agents worldwide to provide stellar moving services.</p>
                        </div>
                    </div>
                </div>
                
            </div>   
               
        </div>
    </section>    


<section class="section" id="projects-wrap">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-heading">
                        <h1 class="text-white">With access to over 1000 trusted agents worldwide through the network of International Association of Movers, there is no part of the world we cannot serve.</h1>
                    </div>
                </div>
                <div class="col-lg-6">
                    <p class="lead text-white">Regardless of the size of your move, we offer complete door-to-door moving and international relocation solution which fit your needs. With our presence in South East Asia, Middle East & East coast time zones, you are always working with a team in or near your time zone. </p>
                    <p class="lead text-white">To learn more about your relocation destination and required documentation for the moving process, simply speak to one of our experts. With years of experience, we can give you an accurate overview of the requirements for over 50 countries worldwide.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="projects" class="section-bottom">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6 col-sm-6 mb-5">
                    <div class="single-project">
                        <img src="images/projects/p-1.jpg" alt="" class="img-fluid">
                        <div class="project-content">
                            <h4>Household good relocation</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate eligendi consequuntur veniam quod</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 mb-5">
                    <div class="single-project">
                        <img src="images/projects/p-4.jpg" alt="" class="img-fluid">
                        <div class="project-content">
                            <h4>Pet moving</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate eligendi consequuntur veniam quod</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-8 ">
                    <div class="single-project">
                        <img src="images/projects/p-3.jpg" alt="" class="img-fluid">
                        <div class="project-content">
                            <h4>Corporate relocation</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate eligendi consequuntur veniam quod</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row py-4">
                <div class="col-lg-7 col-md-12 col-sm-12 ">
                    <div class="single-project">
                        <img src="images/bg/office_bg.jpg" alt="" class="img-fluid">
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12 ">
                    <div class="project-content-block">
                        <h4>Corporate Relocation</h4>
                        <h2>Planning to move your employees or company assets?</h2>
                        <p>No matter where you have the need to assign people internationally, Movingbay can assist with all of your needs.</p>
                        <button class="btn btn-primary btn-circled">Learn more</button>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <footer class="section " id="footer">
        <div class="overlay footer-overlay"></div>
        <!--Content -->
        <div class="container">
            <div class="row justify-content-start">
                <div class="col-lg-4 col-sm-12">
                    <div class="footer-widget">
                        <!-- Brand -->
                        <a href="index.html" class="footer-brand text-white">
                            <img src="images/blue-green-logo.png" alt="" class="img-fluid">
                        </a>
                        <p>MovingBay was formed by a group of Industry Experts with vast experience of handling any aspect of Relocation Requirement.</p>
                    </div>
                </div>

                <div class="col-lg-3 ml-lg-auto col-sm-12">
                    <div class="footer-widget">
                        <h3>Account</h3>
                        <!-- Links -->
                        <ul class="footer-links ">
                            <li>
                                <a href="#">
                                    Terms and conditions
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Privacy policy
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Help and support
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Frequently Asked Question
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>


                <div class="col-lg-2 col-sm-6">
                    <div class="footer-widget">
                        <h3>About</h3>
                        <!-- Links -->
                        <ul class="footer-links ">
                            <li>
                                <a href="#">
                                    Services
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    About Us
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Pricing
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Products Shop
                                </a>
                            </li>

                            <li>
                                <a href="#">
                                    Contact
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-2 col-sm-6">
                    <div class="footer-widget">
                        <h3>Socials</h3>
                        <!-- Links -->
                        <ul class="list-unstyled footer-links">
                            <li><a href="#"><i class="fab fa-facebook-f"></i>Facebook</a></li>
                            <li>
                            <a href="#"><i class="fab fa-twitter"></i>Twitter
                            </a></li>
                            <li><a href="#"><i class="fab fa-linkedin"></i>linkedin
                            </a></li>
                            <li><a href="#"><i class="fab fa-youtube"></i>YouTube
                            </a></li>
                        </ul>
                    </div>
                </div>
            </div> <!-- / .row -->


            <div class="row text-right pt-5">
                <div class="col-lg-12">
                    <!-- Copyright -->
                    <p class="footer-copy ">
                        &copy; Copyright <span class="current-year">Movingbay.org</span> All rights reserved.
                    </p>
                </div>
            </div> <!-- / .row -->
        </div> <!-- / .container -->
    </footer>


    <!--  Page Scroll to Top  -->

    <a class="scroll-to-top js-scroll-trigger" href="#top-header">
        <i class="fa fa-angle-up"></i>
    </a>


   


    <!-- 
    Essential Scripts
    =====================================-->

    
    <!-- Main jQuery -->
    <script src="{{ asset('plugins/jquery/jquery.min.js') }}" defer></script>
    <!-- Bootstrap 3.1 -->
    <script src="{{ asset('plugins/bootstrap/js/popper.min.js') }}" defer></script>
    <script src="{{ asset('plugins/bootstrap/js/bootstrap.min.js') }}" defer></script>
    <!-- Slick Slider -->
    <script src="{{ asset('plugins/slick-carousel/slick/slick.min.js') }}" defer></script>
    <script src="{{ asset('js/jquery.easing.1.3.js') }}" defer></script>
    <!-- Map Js -->
    <script src="{{ asset('plugins/google-map/gmap3.min.js') }}" defer></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDwIQh7LGryQdDDi-A603lR8NqiF3R_ycA"></script>

    <script src="{{ asset('js/form/contact.js') }}" defer></script>
    <script src="{{ asset('js/theme.js') }}" defer></script>

  </body>
  </html>
   
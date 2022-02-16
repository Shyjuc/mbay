<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="it">
  <meta name="keywords" content="Rapoo,creative, agency, startup,onepage, clean, modern,business, company,it">
  
  <meta name="author" content="themefisher.com">

  <title>MovingBay Relocation Services | Shipping Pets and Household goods to India</title>

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
    <div class="logo-bar d-none d-md-block d-lg-block bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-2">
                    <div class="logo d-none d-lg-block">
                        <!-- Brand -->
                        <a class="navbar-brand js-scroll-trigger" href="index.html">
                            <img src="images/blue-green-logo.png" alt="" class="img-fluid">
                        </a>
                    </div>
                </div>

                 <div class="col-lg-8 justify-content-end ml-lg-auto d-flex col-12">
                    <div class="top-info-block d-inline-flex">
                        <div class="icon-block">
                            <i class="ti-mobile" style="color: #8ec642;"></i>
                        </div>
                        <div class="info-block">
                            <h5 class="font-weight-500">+91-8618173141</h5>
                            <p>Call Free</p>
                        </div>
                    </div>

                    <div class="top-info-block d-inline-flex">
                        <div class="icon-block">
                            <i class="ti-email" style="color: #8ec642;"></i>
                        </div>
                        <div class="info-block">
                            <h5 class="font-weight-500">info@movingbay.org</h5>
                            <p>Email Us</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- NAVBAR
    ================================================= -->
    <div class="main-navigation menu-2" id="mainmenu-area">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-dark bg-gradient main-nav navbar-togglable rounded-radius">

                <a class="navbar-brand d-lg-none d-block" href="">
                    <img src="images/blue-green-logo.png" alt="" class="img-fluid">
                </a>
                <!-- Toggler -->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="fa fa-bars"></span>
                </button>

                <!-- Collapse -->
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <!-- Links -->
                    <ul class="navbar-nav ">
                        <li class="nav-item ">
                            <a href="index.html" class="nav-link js-scroll-trigger">
                                Home
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarWelcome" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Quotes
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarWelcome">
                                 <a class="dropdown-item " href="{{ url('/quotes') }}">
                                    Household Shipping.
                                </a>
                                <a class="dropdown-item " href="{{ url('/pet-shipping') }}">
                                    Pet Shipping.
                                </a> 
                            </div>
                        </li>
                        <li class="nav-item ">
                            <a href="{{ url('/about') }}" class="nav-link js-scroll-trigger">
                                About
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a href="{{ url('/regulations') }}" class="nav-link js-scroll-trigger">
                                Custom Regulations
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a href="{{ url('/shipping') }}" class="nav-link js-scroll-trigger">
                                Shipping Info
                            </a>
                        </li>

                        <li class="nav-item ">
                            <a href="{{ url('/contact') }}" class="nav-link">
                                Contact Us
                            </a>
                        </li>
                    </ul>

                    <ul class="ml-lg-auto list-unstyled m-0">
                        <li><a href="#" class="btn btn-trans-white btn-circled">Get a quote</a></li>
                    </ul>
                </div> <!-- / .navbar-collapse -->
            </nav>
        </div> <!-- / .container -->
    </div>



    <!-- HERO
    ================================================== -->
    <section class="banner-area py-5" id="banner">
       <div class="overlay"></div>
        <!-- Content -->
        <div class="container">
            <div class="row  align-items-center justify-content-center">
                <div class="col-md-12 col-lg-8">
                   <div class="banner-content text-center text-lg-left">
                        <!-- Heading -->
                        <h1 class="display-4 mb-4 ">
                            International<br>  Household<br> &amp; Pet Shipping
                        </h1>

                        <!-- Subheading -->
                        <p class="lead mb-5">
                            Want to ship your household stuff to India? <br>
                            Just fill our quote form and get free Shipping quotes for Shipping household goods to India
                        </p>

                        <!-- Button -->
                        <p class="mb-0">
                            <a href="#" target="_blank" class="btn btn-primary btn-circled">
                                Get Quote
                            </a>
                        </p>
                    </div>
                </div>
                
                <div class="col-lg-4 ">
                    <div class="banner-contact-form bg-white">
                        <h5>Get a Free Quote/Ask a Question</h5>
                        <form action="#" >
                            <div class="form-group">
                                <input type="text" name="name" id="name" class="form-control" placeholder="your Name">
                            </div>
                            <div class="form-group">
                                <input type="text" name="email" id="email" class="form-control" placeholder="your Email">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="subject" id="subject" placeholder="your Subject">
                            </div>
                            <div class="form-group">
                                <textarea name="message" id="message" cols="30" rows="4" class="form-control" placeholder="Your message"></textarea>
                            </div>
                            <a href="#" class="btn btn-dark btn-block btn-circled">Submit a query</a>
                        </form>
                    </div>
                </div>
            </div> <!-- / .row -->
        </div> <!-- / .container -->
    </section>


 <section class="section bg-grey" id="process">
        <div class="container">
            <div class="row justify-content-center mb-4">
                <div class="col-md-8 col-lg-6 text-center">
                    <div class="section-heading">
                        <!-- Heading -->
                        <h2 class="section-title ">
                            Explore Our Services
                        </h2>

                        <!-- Subheading -->
                        <p>
                            MovingBay was formed by a group of Industry Experts with vast experience of handling any aspect of Relocation Requirement. Our team handles every move, let it be household goods or Family Pets, it is handled with a personalized touch to make sure your Relocation is Smooth.
                        </p>
                    </div>
                </div>
            </div> <!-- / .row -->

            <div class="row justify-content-center">
                <div class="col-lg-4 col-sm-6 col-md-6">
                    <div class="process-block">
                        <img src="images/process/process-1.jpg" alt="House moving" class="img-fluid">

                        <h3>House Moving</h3>
                        <p>Nihil facere delectus eaque aut possimus nobis laudantium reprehenderit.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-md-6">
                    <div class="process-block">
                        <img src="images/process/process-2.jpg" alt="Pet Relocation" class="img-fluid">

                        <h3>Pet Relocation</h3>
                        <p>Nihil facere delectus eaque aut possimus nobis laudantium reprehenderit.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-md-6">
                    <div class="process-block">
                        <img src="images/process/process-3.jpg" alt="Relocation Services" class="img-fluid">

                        <h3>Relocation Services</h3>
                        <p>Nihil facere delectus eaque aut possimus nobis laudantium reprehenderit.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section" id="services-2">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6 text-center">
                    <div class="section-heading">
                        <!-- Heading -->
                        <h2 class="section-title mb-2 text-white">
                            Core Services
                        </h2>

                        <!-- Subheading -->
                        <p class="mb-5 text-white">
                            Our team comprise of moving experts who can cater any of your relocation requirement starting from Home Search, School Search, Settling In, Household Goods Moving, Pet Relocation, or any aspect of a relocation which you will be looking for.
                        </p>
                    </div>
                </div>
            </div> <!-- / .row -->

            <div class="row">
                <div class="col-lg-3 col-sm-6 col-md-6 mb-30">
                    <div class="web-service-block">
                        <img src="images/service/service1.png" alt="Household Shipping" width="90px" height="90px" class="img-fluid">
                        <h3>Household Shipping</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-md-6 mb-30">
                    <div class="web-service-block">
                        <img src="images/service/service2.png" alt="Household Shipping" width="90px" height="90px" class="img-fluid">
                        <h3>Pet Shipping</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-md-6 mb-30">
                    <div class="web-service-block">
                        <img src="images/service/service3.png" alt="Household Shipping" width="90px" height="90px" class="img-fluid">
                        <h3>Furniture Rentals</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6 col-md-6 ">
                    <div class="web-service-block">
                        <img src="images/service/service4.png" alt="Household Shipping" width="90px" height="90px" class="img-fluid">
                        <h3>Long &amp; Short Distance</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-md-6 ">
                    <div class="web-service-block">
                        <img src="images/service/service5.png" alt="Household Shipping" width="90px" height="90px" class="img-fluid">
                        <h3>International Moving</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-md-6 ">
                    <div class="web-service-block">
                        <img src="images/service/service6.png" alt="Household Shipping" width="90px" height="90px" class="img-fluid">
                        <h3>Car Moving</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-md-6 ">
                    <div class="web-service-block">
                        <img src="images/service/service7.png" alt="Household Shipping" width="90px" height="90px" class="img-fluid">
                        <h3>Corporate Relocation</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-md-6 ">
                    <div class="web-service-block">
                        <img src="images/service/service8.png" alt="Household Shipping" width="90px" height="90px" class="img-fluid">
                        <h3>Moving &amp; Hauling</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


<section class="section" id="service">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-lg-7 pl-4 text-center">
                    <div class="service-heading">
                        <h1>Get a better deal and start moving</h1>
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
                            <h4>International Household Moving</h4>
                            <p>Moving household Goods to / from India from anywhere.</p>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4 mb-3 col-md-6">
                    <div class="service-block media">
                        <div class="service-icon">
                            <i class="ti-cloud"></i>
                        </div>
                        <div class="service-inner-content media-body">
                            <h4>International Pet Moving</h4>
                            <p>Send your Pet from Any country to India.</p>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4 mb-3 col-md-6">
                    <div class="service-block media ">
                        <div class="service-icon">
                            <i class="ti-world"></i>
                        </div>
                        <div class="service-inner-content media-body">
                            <h4>Immigration services</h4>
                            <p>Provides immigration benefits to people who are planning to shift.</p>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4 mb-3 col-md-6">
                    <div class="service-block media ">
                        <div class="service-icon">
                            <i class="ti-server"></i>
                        </div>
                        <div class="service-inner-content media-body">
                            <h4>Domestic Moving</h4>
                            <p>Anywhere in India Relocation Services.</p>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6">
                    <div class="service-block media">
                        <div class="service-icon">
                            <i class="ti-world"></i>
                        </div>
                        <div class="service-inner-content media-body">
                            <h4>Domestic Pet Moving</h4>
                            <p>Within India Pet moving by Air.</p>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6">
                    <div class="service-block media">
                        <div class="service-icon">
                            <i class="ti-cloud"></i>
                        </div>
                        <div class="service-inner-content media-body">
                            <h4>Home Search</h4>
                            <p>Search home before you moving to a new location.</p>
                        </div>
                    </div>
                </div>
            </div>   
            
            <div class="row">
                <div class="col-lg-12 text-center">
                    <p class="pl-3">Want to know more about this? <a href="#">Contact us</a></p>
                </div>
            </div>    
        </div>
    </section>
    

<section class="section" id="section-testimonial">
        <div class="container">
           <div class="row align-items-center">
                <div class="col-lg-4 col-sm-12 col-md-12">
                    <div class="section-heading testimonial-heading">
                        <h1>What they say <br>about us</h1>
                        <p>Numquam doloribus impedit at consectetur molestiae tempora ratione possimus in veniam aperiam, eum consequuntur, unde. Earum ullam molestiae suscipit saepe sunt recusandae.</p>
                    </div>
                </div>
                <div class="col-lg-8 col-sm-12 col-md-12">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="test-inner ">
                               <div class="test-author-thumb d-flex">
                                   <img src="images/client/test-1.jpg" alt="Testimonial author" class="img-fluid">
                                   <div class="test-author-info">
                                       <h4>Testimonial 1</h4>
                                       <h6>Customer</h6>
                                   </div>
                               </div>

                                Quas ut distinctio tenetur animi nihil rem, amet dolorum totam. Ab repudiandae tempore qui fugiat amet ipsa id omnis ipsam, laudantium! Dolorem.

                                <i class="fa fa-quote-right"></i>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="test-inner ">
                               <div class="test-author-thumb d-flex">
                                   <img src="images/client/test-2.jpg" alt="Testimonial author" class="img-fluid">
                                   <div class="test-author-info">
                                       <h4>Testimonial 2</h4>
                                       <h6>Customer</h6>
                                   </div>
                               </div>

                                Quas ut distinctio tenetur animi nihil rem, amet dolorum totam. Ab repudiandae tempore qui fugiat amet ipsa id omnis ipsam, laudantium! Dolorem.

                                <i class="fa fa-quote-right"></i>
                            </div>
                        </div>
                    </div>
                    
                     
                </div>
            </div>
        </div>
    </section>
 <section class="section" id="blog">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6 text-center">
                    <div class="section-heading">
                        <!-- Heading -->
                        <h2 class="section-title">
                            Read our latest news
                        </h2>

                        <!-- Subheading -->
                        <p>
                            Our duty towards you is to share our experience we're reaching in our work path with you.
                        </p>
                    </div>
                </div>
            </div> <!-- / .row -->

            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6">
                    <div class="blog-box">
                        <div class="blog-img-box">
                            <img src="images/blog/blog-1.jpg" alt="" class="img-fluid blog-img">
                        </div>
                        <div class="single-blog">
                            <div class="blog-content">
                                <h6> 30 January 2022</h6>
                                <a href="#">
                                    <h3 class="card-title">Article 1 : Moving Tips And Checklist: How To Plan Relocation in 1 Month</h3>
                                </a>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                <a href="#" class="read-more">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="blog-box">
                        <div class="blog-img-box">
                            <img src="images/blog/blog-2.jpg" alt="" class="img-fluid blog-img">
                        </div>
                        <div class="single-blog">
                            <div class="blog-content">
                                <h6> 1 February 2022</h6>
                                <a href="#">
                                    <h3 class="card-title">Article 2 : Moving Tips And Checklist: How To Plan Relocation in 1 Month</h3>
                                </a>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                <a href="#" class="read-more">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-8">
                    <div class="blog-box">
                        <div class="blog-img-box">
                            <img src="images/blog/blog-3.jpg" alt="" class="img-fluid blog-img">
                        </div>
                        <div class="single-blog">
                            <div class="blog-content">
                                <a href="#">
                                    <h3 class="card-title">Article 3 : Moving Tips And Checklist: How To Plan Relocation in 1 Month</h3>
                                </a>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                <a href="#" class="read-more">Read More</a>
                            </div>
                        </div>
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
   
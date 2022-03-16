<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Movingbay is India's most trusted relocation service. We Provide all-inclusive services for shipping your pets and household goods">
  <meta name="keywords" content="pet shipping services,pet shipping india,pet shipping cost estimate,pet shipping companies,international pet moving,domestic pet relocation,household moving services,household shipping company,household shipping international,employee relocation,shipping from USA to India,shipping from Canada to India">
  
  <meta name="author" content="themefisher.com">

  <title>MovingBay | Pet shipping | Household good moving</title>

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
    <div class="logo-bar d-none d-md-block d-lg-block bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-2">
                    <div class="logo d-none d-lg-block">
                        <!-- Brand -->
                        <a class="navbar-brand js-scroll-trigger" href="{{ url('/') }}">
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

                <a class="navbar-brand d-lg-none d-block" href="{{ url('/') }}">
                    <img src="images/blue-green-logo.png" alt="Movingbay" class="img-fluid">
                </a>
                <!-- Toggler -->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="fa fa-bars"></span>
                </button>

                <!-- Collapse -->
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <!-- Links -->
                    @include('navmenu')

                    <ul class="ml-lg-auto list-unstyled m-0">
                        <li><a href="https://wa.me/918618173141?text=Movingbay.org:%20<%20Please-type-your-query-here>." class="btn btn-trans-white btn-circled"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
  <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z"/>
</svg> WhatsApp</a></li>
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
                        <h2 class="display-4 mb-4 ">
                            International<br>  Pet Shipping &amp;<br>  Household Good Moving
                        </h2>

                        <!-- Subheading -->
                        <p class="lead mb-5">
                            Want to ship your pets or household stuff to India or abroad? <br>
                            Just fill your requirement details and get free shipping quote.
                        </p>

                        <!-- Button -->
                        <p class="mb-0">
                            <a href="#" target="_blank" class="btn btn-primary btn-circled">
                                Get a Quote
                            </a>
                        </p>
                    </div>
                </div>
                
                <div class="col-lg-4 ">
                    <div class="banner-contact-form bg_trans shadow-lg">
                        <h5 style="color:#ffffff;">Get a Free Quote/Ask a Question</h5>
                        @if(Session::has('success'))
                        <span style="color:#8ec642;">{{Session::get('success')}}</span>
                        @endif
                        <form method="post" action="{{ route('contact.getquote') }}">
                        @csrf
                            <div class="form-group">
                                <input type="text" name="name" id="name" class="form-control" placeholder="your Name">
                            </div>
                            <div class="form-group">
                                <input type="text" name="email" id="email" class="form-control" placeholder="your Email">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="phone" id="phone" placeholder="your Phone">
                            </div>
                            <div class="form-group">
                                <textarea name="message" id="message" cols="30" rows="4" class="form-control" placeholder="Your message"></textarea>
                            </div>
                            <button type="submit" class="btn btn-dark btn-block btn-circled">Submit a query</a>
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
                            Explore Our Core Services
                        </h2>

                        <!-- Subheading -->
                        
                    </div>
                </div>
            </div> <!-- / .row -->

            <div class="row justify-content-center">
            <div class="col-lg-4 col-sm-6 col-md-6">
                    <div class="process-block">
                        <img src="images/process/process-2.jpg" alt="Pet Relocation" class="img-fluid">

                        <h3>Pet Relocation</h3>
                        <p>If you’re ready to move with your pet(s), you want to be certain they’ll be handled with the care and compassion you show for them daily.</p>
                        <a href="{{ url('/pet-relocation') }}" class="btn btn-info btn-outline">Read more</a>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-md-6">
                    <div class="process-block">
                        <img src="images/process/process-1.jpg" alt="House moving" class="img-fluid">

                        <h3>Household goods Moving</h3>
                        <p>At Movingbay, we’ve helped individuals move to exciting new locations all over the world, so let us know how we can help.</p>
                        <a href="{{ url('/household-relocation') }}" class="btn btn-info btn-outline">Read more</a>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-md-6">
                    <div class="process-block">
                        <img src="images/process/process-3.jpg" alt="Relocation Services" class="img-fluid">

                        <h3>Employee Relocation Services</h3>
                        <p>Our services take care of everything, from packing to relocation, immigration, short or long term home finding and orientation, we do it all</p>
                        <a href="{{ url('/employee-relocation') }}" class="btn btn-info btn-outline">Read more</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section" id="services-2">
        <div class="container">
        <div class="row justify-content-center mb-4">
                <div class="col-md-8 col-lg-6 text-center">
                    <div class="section-heading">
                        <!-- Heading -->
                        <h2 class="section-title ">
                            Get A Free Moving Quote<br/>
                        <small>Shifting within and between countries </small>
                        </h2>

                        <!-- Subheading -->
                        
                    </div>
                </div>
            </div> <!-- / .row -->
            <div class="row">
                <div class="col-lg-2 col-sm-6 col-md-6 mb-30">
                    <div class="web-service-block">
                        <img src="images/service/service3.png" alt="Household Shipping" width="90px" height="90px" class="img-fluid">
                        <h4 style="color:#ffffff;">Furniture Rentals</h4>
                    </div>
                </div>

                <div class="col-lg-2 col-sm-6 col-md-6 ">
                    <div class="web-service-block">
                        <img src="images/service/service4.png" alt="Household Shipping" width="90px" height="90px" class="img-fluid">
                        <h4 style="color:#ffffff;">Long &amp; Short Distance</h4>
                    </div>
                </div>
                <div class="col-lg-2 col-sm-6 col-md-6 ">
                    <div class="web-service-block">
                        <img src="images/service/service5.png" alt="Household Shipping" width="90px" height="90px" class="img-fluid">
                        <h4 style="color:#ffffff;">International Moving</h4>
                    </div>
                </div>
                <div class="col-lg-2 col-sm-6 col-md-6 ">
                    <div class="web-service-block">
                        <img src="images/service/service6.png" alt="Household Shipping" width="90px" height="90px" class="img-fluid">
                        <h4 style="color:#ffffff;">Car Moving</h4>
                    </div>
                </div>
                <div class="col-lg-2 col-sm-6 col-md-6 ">
                    <div class="web-service-block">
                        <img src="images/service/service8.png" alt="Household Shipping" width="90px" height="90px" class="img-fluid">
                        <h4 style="color:#ffffff;">Moving &amp; Hauling</h4>
                    </div>
                </div>
                <div class="col-lg-2 col-sm-6 col-md-6 ">
                    <div class="web-service-block">
                        <img src="images/service/service7.png" alt="Household Shipping" width="90px" height="90px" class="img-fluid">
                        <h4 style="color:#ffffff;">Corporate Relocation</h4>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center mb-4">
                <div class="col-md-8 col-lg-6 text-center">
                <a href="https://wa.me/918618173141?text=Movingbay.org:%20<%20Please-type-your-query-here>." class="btn btn-trans-white btn-sm btn-circled"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
  <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z"/>
</svg> Get Quote in WhatsApp</a>
                </div>
            </div>
            
        </div>
    </section>



    

<section class="section" id="section-testimonial">
        <div class="container">
           <div class="row align-items-center">
                <div class="col-lg-4 col-sm-12 col-md-12">
                    <div class="section-heading testimonial-heading">
                        <h1 style="color:#7577ec;">What they say <br>about us</h1>
                        <p>Movingbay offers a truly joined up partnership giving our clients the commitment of a successful relocation, provided through clear communication and strict compliance.</p>
                    </div>
                </div>
                <div class="col-lg-8 col-sm-12 col-md-12">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="test-inner" style="border-left: 3px solid #7577ec;">
                               <div class="test-author-thumb d-flex">
                                   <div class="test-author-info">
                                       <h4>Mr. Jane Allwyn</h4>
                                       <h6>Dallas, Texas</h6>
                                   </div>
                               </div>

                               Relocation just about adapting and adjusting to a new way of life, location. Movingbay is our trusted relocation assistance company. One of their key strengths is the support to their clients.

                                <i class="fa fa-quote-right"></i>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="test-inner" style="border-left: 3px solid #7577ec;">
                               <div class="test-author-thumb d-flex">
                                   <div class="test-author-info">
                                       <h4>Mr. Hamad Hussain</h4>
                                       <h6>Belfast, UK</h6>
                                   </div>
                               </div>

                               Professional approach from the survey till packing of the personal effects, crew quite experienced and professional. Service is highly appreciated as job has been nicely completed

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
                            Read Latest News and Guidelines
                        </h2>

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
                                <h6> 13 March 2022</h6>
                                <a href="{{ url('/pet-shipping-tips-preparing-your-international-travel') }}">
                                    <h3 class="card-title">Top 10 pet shipping tips while preparing your international travel</h3>
                                </a>
                                <p>Whether you are ready to move or just beginning the process, our moving planner includes the tips you need to plan a seamless transition.</p>
                                <a href="{{ url('/pet-shipping-tips-preparing-your-international-travel') }}" class="read-more">Read More</a>
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
                                <a href="{{ url('/relocation-tips-tricks-household-goods') }}">
                                    <h3 class="card-title">Most Useful relocation tips &amp; tricks for successful household shifting in 2022</h3>
                                </a>
                                <p>As safety and security of the goods is the ultimate concern of the moving people, planning a smooth and safe moving process should be utmost priority</p>
                                <a href="{{ url('/relocation-tips-tricks-household-goods') }}" class="read-more">Read More</a>
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
                            <h6> 15 January 2021</h6>
                                <a href="{{ asset('images/Movingbay_Checklist.pdf') }}">
                                    <h3 class="card-title">Moving Tips And Checklist: How To Plan Relocation in 1 Month</h3>
                                </a>
                                <p>Whether you are ready to move or just beginning the process, our 8-week moving planner includes the tips you need to plan a seamless transition.</p>
                                <a href="{{ asset('images/Movingbay_Checklist.pdf') }}" class="read-more">Download Checklist</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('footer')


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
   
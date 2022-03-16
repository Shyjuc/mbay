<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="it">
  <meta name="keywords" content="Rapoo,creative, agency, startup,onepage, clean, modern,business, company,it">
  
  <meta name="author" content="themefisher.com">

  <title>MovingBay Relocation Services | Shipping Pets and Household goods to India</title>

  <!-- bootstrap.min css -->
  <link rel="stylesheet" href="plugins/bootstrap/css/bootstrap.min.css">
  <!-- Animate Css -->
  <link rel="stylesheet" href="plugins/animate-css/animate.css">
  <!-- Icon Font css -->
  <link rel="stylesheet" href="plugins/fontawesome/css/all.css">
  <link rel="stylesheet" href="plugins/fonts/Pe-icon-7-stroke.css">
  <!-- Themify icon Css -->
  <link rel="stylesheet" href="plugins/themify/css/themify-icons.css">
  <!-- Slick Carousel CSS -->
  <link rel="stylesheet" href="plugins/slick-carousel/slick/slick.css">
  <link rel="stylesheet" href="plugins/slick-carousel/slick/slick-theme.css">

  <!-- Main Stylesheet -->
  <link rel="stylesheet" href="css/style.css">

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
            <a class="navbar-brand" href="index-3.html">
                <img src="images/blue-green-logo.png" alt="" class="img-fluid">
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
        </div> <!-- / .container -->
    </nav>
    

<!-- HERO
================================================== -->
<section class="page-banner-area page-contact">
    <div class="overlay"></div>
    <!-- Content -->
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-9 col-md-12 col-12 text-center">
                <div class="page-banner-content">
                    <h1 class="display-4 font-weight-bold">GET PET SHIPPING QUOTE</h1>
                    <p>Fill up quote form below to get your free moving Quote</p>
                </div>
            </div>
        </div> <!-- / .row -->
    </div> <!-- / .container -->
</section>



    <section class="section" id="contact">
        <div class="container">
            <div class="row mb-4">
                <div class="col-md-8 col-lg-6">
                    <!-- Heading -->
                    <h2 class="section-title mb-2 ">
                        Tell us about <span class="font-weight-normal">your requirement</span>
                    </h2>

                    <!-- Subheading -->
                    <p class="mb-5 ">
                        Please fill out the required fields below and click on the Submit button to send your message. 
                    </p>

                    @if(Session::has('success'))
                                <div class="alert alert-success text-center">
                                    {{Session::get('success')}}
                                </div>
                            @endif 

                </div>
            </div> <!-- / .row -->
        
        <form method="post" action="{{ route('contact.pet') }}">
            @csrf
            <div class="row">

                <div class="col-lg-6 col-md-6">
                    <!-- Contacts Form -->
                    
                    <div class="row">
                        
                        
                        <!-- Input -->
                        <div class="col-sm-6 mb-6">
                            <div class="form-group">
                                <label class="h6 small d-block text-uppercase">
                                    Your name
                                    <span class="text-danger">*</span>
                                </label>

                                <div class="input-group">
                                    <input class="form-control" name="fname" id="fname" required="" placeholder="First name" type="text">
                                </div>
                                @error('fname')
                                        <span class="alert alert-danger" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                     @enderror
                            </div>
                        </div>
                        <!-- End Input -->

                        <!-- Input -->
                        <div class="col-sm-6 mb-6">
                            <div class="form-group">
                                <label class="h6 small d-block text-uppercase">
                                    Last name
                                    <span class="text-danger">*</span>
                                </label>

                                <div class="input-group ">
                                    <input class="form-control" name="lname" id="lname" required="" placeholder="Last name" type="text">
                                </div>
                                    @error('lname')
                                        <span class="alert alert-danger" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                     @enderror
                            </div>
                        </div>
                        <!-- End Input -->

                        <!-- Input -->
                        <div class="col-sm-6 mb-6">
                            <div class="form-group">
                                <label class="h6 small d-block text-uppercase">
                                    Your Phone Number
                                    <span class="text-danger">*</span>
                                </label>

                                <div class="input-group ">
                                    <input class="form-control" id="phone" name="phone" required="" placeholder="Enter phone number" type="text">
                                </div>
                                @error('phone')
                                        <span class="alert alert-danger" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                     @enderror
                            </div>
                        </div>
                        <!-- End Input -->

                        <!-- Input -->
                        <div class="col-sm-6 mb-6">
                            <div class="form-group">
                                <label class="h6 small d-block text-uppercase">
                                    Your email address
                                    <span class="text-danger">*</span>
                                </label>

                                <div class="input-group ">
                                    <input class="form-control" name="email" id="email" required="" placeholder="john@gmail.com" type="email">
                                </div>
                                @error('email')
                                        <span class="alert alert-danger" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                @enderror
                            </div>
                        </div>
                        <!-- End Input -->


                           <!-- Input -->
                        <div class="col-sm-6 mb-6">
                            <div class="form-group">
                                <label class="h6 small d-block text-uppercase">
                                    Pet's name
                                    <span class="text-danger">*</span>
                                </label>

                                <div class="input-group">
                                    <input class="form-control" name="petname" id="petname" required="" placeholder="First name" type="text">
                                </div>
                                @error('petname')
                                        <span class="alert alert-danger" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                @enderror
                            </div>
                        </div>
                        <!-- End Input -->

                        <!-- Input -->
                        <div class="col-sm-6 mb-6">
                            <div class="form-group">
                                <label class="h6 small d-block text-uppercase">
                                    select species*
                                    <span class="text-danger">*</span>
                                </label>

                                <div class="input-group">
                                    <select class="form-control" name="species" id="species">
                                        <option value="Dog">Dog</option>
                                        <option value="Cat">Cat</option>
                                        <option value="Other">Other</option>
                                    </select>
                                    @error('species')
                                        <span class="alert alert-danger" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                @enderror
                                </div>
                            </div>
                        </div>
                        <!-- End Input -->

                        <!-- Input -->
                        <div class="col-sm-6 mb-6">
                            <div class="form-group">
                                <label class="h6 small d-block text-uppercase">
                                    Breed
                                    <span class="text-danger">*</span>
                                </label>

                                <div class="input-group ">
                                    <input class="form-control" name="breed" id="breed" required="" placeholder="Breed name" type="text">
                                </div>
                                @error('breed')
                                        <span class="alert alert-danger" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                @enderror
                            </div>
                        </div>
                        <!-- End Input -->

                        <!-- Input -->
                        <div class="col-sm-6 mb-6">
                            <div class="form-group">
                                <label class="h6 small d-block text-uppercase">
                                    Weights in Kgs
                                    <span class="text-danger">*</span>
                                </label>

                                <div class="input-group ">
                                    <input class="form-control" id="weight" name="weight" required="" placeholder="" type="text">
                                </div>
                                @error('weight')
                                        <span class="alert alert-danger" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                @enderror
                            </div>
                        </div>
                        <!-- End Input -->

                        <!-- Input -->
                        <div class="col-sm-6 mb-6">
                            <div class="form-group">
                                <label class="h6 small d-block text-uppercase">
                                    Age in Years
                                    <span class="text-danger">*</span>
                                </label>

                                <div class="input-group ">
                                    <input class="form-control" name="age" id="age" required="" placeholder="" type="text">
                                </div>
                                @error('age')
                                        <span class="alert alert-danger" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                @enderror
                            </div>
                        </div>
                        <!-- End Input -->

                        <!-- Input -->
                        <div class="col-sm-6 mb-6">
                            <div class="form-group">
                                <label class="h6 small d-block text-uppercase">
                                    Length of pet (Inches)
                                    <span class="text-danger">*</span>
                                </label>

                                <div class="input-group ">
                                    <input class="form-control" name="length" id="length" required="" placeholder="" type="text">
                                </div>
                                @error('length')
                                        <span class="alert alert-danger" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                @enderror
                            </div>
                        </div>
                        <!-- End Input -->

                        <!-- Input -->
                        <div class="col-sm-6 mb-6">
                            <div class="form-group">
                                <label class="h6 small d-block text-uppercase">
                                    Height of pet (Inches)
                                    <span class="text-danger">*</span>
                                </label>

                                <div class="input-group ">
                                    <input class="form-control" name="height" id="height" required="" placeholder="" type="text">
                                </div>
                                @error('height')
                                        <span class="alert alert-danger" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                @enderror
                            </div>
                        </div>
                        <!-- End Input -->
 
                         <!-- Input -->
                         <div class="col-sm-12 mb-12">
                         <div class="form-group mb-5">
                             <label class="h6 small d-block text-uppercase">
                                 How can we help you?
                                 <span class="text-danger">*</span>
                             </label>
 
                             <div class="input-group">
                                 <textarea class="form-control" rows="4" name="message" id="message" required="" placeholder="Enter your message"></textarea>
                             </div>
                             @error('message')
                                        <span class="alert alert-danger" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                @enderror
                         </div>
                        </div>
                         <!-- End Input -->

                    </div>

                
                <!-- End Contacts Form -->
                </div>

                <div class="col-lg-6">

                     <!-- Contacts Form -->
                     
                         <div class="row">
                            <div class="col-sm-12 mb-12">
                             <h5>Origin address*</h5>
                            </div>
                            

                            <!-- Input -->
                            <div class="col-sm-6 mb-6">
                                <div class="form-group">

                                    <div class="input-group">
                                        <input class="form-control" name="city" id="city" required="" placeholder="Departure City" type="text">
                                    </div>
                                    @error('city')
                                        <span class="alert alert-danger" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                @enderror
                                </div>
                            </div>
                            <!-- End Input -->

                            <!-- Input -->
                            <div class="col-sm-6 mb-6">
                                <div class="form-group">

                                    <div class="input-group">
                                        <input class="form-control" name="state" id="state" required="" placeholder="Departure State" type="text">
                                    </div>
                                    @error('state')
                                        <span class="alert alert-danger" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                @enderror
                                </div>
                            </div>
                            <!-- End Input -->

                            <!-- Input -->
                            <div class="col-sm-6 mb-6">
                                <div class="form-group">

                                    <div class="input-group">
                                        <input class="form-control" name="zip" id="zip" required="" placeholder="Zip code" type="text">
                                    </div>
                                    @error('zip')
                                        <span class="alert alert-danger" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                @enderror
                                </div>
                            </div>
                            <!-- End Input -->

                            <!-- Input -->
                            <div class="col-sm-6 mb-6">
                                <div class="form-group">
                            <div class="input-group ">
                                <select class="form-control" id="country" name="country" required="">
                                    <option value="">Departure Country</option>
                                    <option value="Afganistan">Afghanistan</option>
                                    <option value="Albania">Albania</option>
                                    <option value="Algeria">Algeria</option>
                                    <option value="American Samoa">American Samoa</option>
                                    <option value="Andorra">Andorra</option>
                                    <option value="Angola">Angola</option>
                                    <option value="Anguilla">Anguilla</option>
                                    <option value="Antigua & Barbuda">Antigua & Barbuda</option>
                                    <option value="Argentina">Argentina</option>
                                    <option value="Armenia">Armenia</option>
                                    <option value="Aruba">Aruba</option>
                                    <option value="Australia">Australia</option>
                                    <option value="Austria">Austria</option>
                                    <option value="Azerbaijan">Azerbaijan</option>
                                    <option value="Bahamas">Bahamas</option>
                                    <option value="Bahrain">Bahrain</option>
                                    <option value="Bangladesh">Bangladesh</option>
                                    <option value="Barbados">Barbados</option>
                                    <option value="Belarus">Belarus</option>
                                    <option value="Belgium">Belgium</option>
                                    <option value="Belize">Belize</option>
                                    <option value="Benin">Benin</option>
                                    <option value="Bermuda">Bermuda</option>
                                    <option value="Bhutan">Bhutan</option>
                                    <option value="Bolivia">Bolivia</option>
                                    <option value="Bonaire">Bonaire</option>
                                    <option value="Bosnia & Herzegovina">Bosnia & Herzegovina</option>
                                    <option value="Botswana">Botswana</option>
                                    <option value="Brazil">Brazil</option>
                                    <option value="British Indian Ocean Ter">British Indian Ocean Ter</option>
                                    <option value="Brunei">Brunei</option>
                                    <option value="Bulgaria">Bulgaria</option>
                                    <option value="Burkina Faso">Burkina Faso</option>
                                    <option value="Burundi">Burundi</option>
                                    <option value="Cambodia">Cambodia</option>
                                    <option value="Cameroon">Cameroon</option>
                                    <option value="Canada">Canada</option>
                                    <option value="Canary Islands">Canary Islands</option>
                                    <option value="Cape Verde">Cape Verde</option>
                                    <option value="Cayman Islands">Cayman Islands</option>
                                    <option value="Central African Republic">Central African Republic</option>
                                    <option value="Chad">Chad</option>
                                    <option value="Channel Islands">Channel Islands</option>
                                    <option value="Chile">Chile</option>
                                    <option value="China">China</option>
                                    <option value="Christmas Island">Christmas Island</option>
                                    <option value="Cocos Island">Cocos Island</option>
                                    <option value="Colombia">Colombia</option>
                                    <option value="Comoros">Comoros</option>
                                    <option value="Congo">Congo</option>
                                    <option value="Cook Islands">Cook Islands</option>
                                    <option value="Costa Rica">Costa Rica</option>
                                    <option value="Cote DIvoire">Cote DIvoire</option>
                                    <option value="Croatia">Croatia</option>
                                    <option value="Cuba">Cuba</option>
                                    <option value="Curaco">Curacao</option>
                                    <option value="Cyprus">Cyprus</option>
                                    <option value="Czech Republic">Czech Republic</option>
                                    <option value="Denmark">Denmark</option>
                                    <option value="Djibouti">Djibouti</option>
                                    <option value="Dominica">Dominica</option>
                                    <option value="Dominican Republic">Dominican Republic</option>
                                    <option value="East Timor">East Timor</option>
                                    <option value="Ecuador">Ecuador</option>
                                    <option value="Egypt">Egypt</option>
                                    <option value="El Salvador">El Salvador</option>
                                    <option value="Equatorial Guinea">Equatorial Guinea</option>
                                    <option value="Eritrea">Eritrea</option>
                                    <option value="Estonia">Estonia</option>
                                    <option value="Ethiopia">Ethiopia</option>
                                    <option value="Falkland Islands">Falkland Islands</option>
                                    <option value="Faroe Islands">Faroe Islands</option>
                                    <option value="Fiji">Fiji</option>
                                    <option value="Finland">Finland</option>
                                    <option value="France">France</option>
                                    <option value="French Guiana">French Guiana</option>
                                    <option value="French Polynesia">French Polynesia</option>
                                    <option value="French Southern Ter">French Southern Ter</option>
                                    <option value="Gabon">Gabon</option>
                                    <option value="Gambia">Gambia</option>
                                    <option value="Georgia">Georgia</option>
                                    <option value="Germany">Germany</option>
                                    <option value="Ghana">Ghana</option>
                                    <option value="Gibraltar">Gibraltar</option>
                                    <option value="Great Britain">Great Britain</option>
                                    <option value="Greece">Greece</option>
                                    <option value="Greenland">Greenland</option>
                                    <option value="Grenada">Grenada</option>
                                    <option value="Guadeloupe">Guadeloupe</option>
                                    <option value="Guam">Guam</option>
                                    <option value="Guatemala">Guatemala</option>
                                    <option value="Guinea">Guinea</option>
                                    <option value="Guyana">Guyana</option>
                                    <option value="Haiti">Haiti</option>
                                    <option value="Hawaii">Hawaii</option>
                                    <option value="Honduras">Honduras</option>
                                    <option value="Hong Kong">Hong Kong</option>
                                    <option value="Hungary">Hungary</option>
                                    <option value="Iceland">Iceland</option>
                                    <option value="Indonesia">Indonesia</option>
                                    <option value="India">India</option>
                                    <option value="Iran">Iran</option>
                                    <option value="Iraq">Iraq</option>
                                    <option value="Ireland">Ireland</option>
                                    <option value="Isle of Man">Isle of Man</option>
                                    <option value="Israel">Israel</option>
                                    <option value="Italy">Italy</option>
                                    <option value="Jamaica">Jamaica</option>
                                    <option value="Japan">Japan</option>
                                    <option value="Jordan">Jordan</option>
                                    <option value="Kazakhstan">Kazakhstan</option>
                                    <option value="Kenya">Kenya</option>
                                    <option value="Kiribati">Kiribati</option>
                                    <option value="Korea North">Korea North</option>
                                    <option value="Korea Sout">Korea South</option>
                                    <option value="Kuwait">Kuwait</option>
                                    <option value="Kyrgyzstan">Kyrgyzstan</option>
                                    <option value="Laos">Laos</option>
                                    <option value="Latvia">Latvia</option>
                                    <option value="Lebanon">Lebanon</option>
                                    <option value="Lesotho">Lesotho</option>
                                    <option value="Liberia">Liberia</option>
                                    <option value="Libya">Libya</option>
                                    <option value="Liechtenstein">Liechtenstein</option>
                                    <option value="Lithuania">Lithuania</option>
                                    <option value="Luxembourg">Luxembourg</option>
                                    <option value="Macau">Macau</option>
                                    <option value="Macedonia">Macedonia</option>
                                    <option value="Madagascar">Madagascar</option>
                                    <option value="Malaysia">Malaysia</option>
                                    <option value="Malawi">Malawi</option>
                                    <option value="Maldives">Maldives</option>
                                    <option value="Mali">Mali</option>
                                    <option value="Malta">Malta</option>
                                    <option value="Marshall Islands">Marshall Islands</option>
                                    <option value="Martinique">Martinique</option>
                                    <option value="Mauritania">Mauritania</option>
                                    <option value="Mauritius">Mauritius</option>
                                    <option value="Mayotte">Mayotte</option>
                                    <option value="Mexico">Mexico</option>
                                    <option value="Midway Islands">Midway Islands</option>
                                    <option value="Moldova">Moldova</option>
                                    <option value="Monaco">Monaco</option>
                                    <option value="Mongolia">Mongolia</option>
                                    <option value="Montserrat">Montserrat</option>
                                    <option value="Morocco">Morocco</option>
                                    <option value="Mozambique">Mozambique</option>
                                    <option value="Myanmar">Myanmar</option>
                                    <option value="Nambia">Nambia</option>
                                    <option value="Nauru">Nauru</option>
                                    <option value="Nepal">Nepal</option>
                                    <option value="Netherland Antilles">Netherland Antilles</option>
                                    <option value="Netherlands">Netherlands (Holland, Europe)</option>
                                    <option value="Nevis">Nevis</option>
                                    <option value="New Caledonia">New Caledonia</option>
                                    <option value="New Zealand">New Zealand</option>
                                    <option value="Nicaragua">Nicaragua</option>
                                    <option value="Niger">Niger</option>
                                    <option value="Nigeria">Nigeria</option>
                                    <option value="Niue">Niue</option>
                                    <option value="Norfolk Island">Norfolk Island</option>
                                    <option value="Norway">Norway</option>
                                    <option value="Oman">Oman</option>
                                    <option value="Pakistan">Pakistan</option>
                                    <option value="Palau Island">Palau Island</option>
                                    <option value="Palestine">Palestine</option>
                                    <option value="Panama">Panama</option>
                                    <option value="Papua New Guinea">Papua New Guinea</option>
                                    <option value="Paraguay">Paraguay</option>
                                    <option value="Peru">Peru</option>
                                    <option value="Phillipines">Philippines</option>
                                    <option value="Pitcairn Island">Pitcairn Island</option>
                                    <option value="Poland">Poland</option>
                                    <option value="Portugal">Portugal</option>
                                    <option value="Puerto Rico">Puerto Rico</option>
                                    <option value="Qatar">Qatar</option>
                                    <option value="Republic of Montenegro">Republic of Montenegro</option>
                                    <option value="Republic of Serbia">Republic of Serbia</option>
                                    <option value="Reunion">Reunion</option>
                                    <option value="Romania">Romania</option>
                                    <option value="Russia">Russia</option>
                                    <option value="Rwanda">Rwanda</option>
                                    <option value="St Barthelemy">St Barthelemy</option>
                                    <option value="St Eustatius">St Eustatius</option>
                                    <option value="St Helena">St Helena</option>
                                    <option value="St Kitts-Nevis">St Kitts-Nevis</option>
                                    <option value="St Lucia">St Lucia</option>
                                    <option value="St Maarten">St Maarten</option>
                                    <option value="St Pierre & Miquelon">St Pierre & Miquelon</option>
                                    <option value="St Vincent & Grenadines">St Vincent & Grenadines</option>
                                    <option value="Saipan">Saipan</option>
                                    <option value="Samoa">Samoa</option>
                                    <option value="Samoa American">Samoa American</option>
                                    <option value="San Marino">San Marino</option>
                                    <option value="Sao Tome & Principe">Sao Tome & Principe</option>
                                    <option value="Saudi Arabia">Saudi Arabia</option>
                                    <option value="Senegal">Senegal</option>
                                    <option value="Seychelles">Seychelles</option>
                                    <option value="Sierra Leone">Sierra Leone</option>
                                    <option value="Singapore">Singapore</option>
                                    <option value="Slovakia">Slovakia</option>
                                    <option value="Slovenia">Slovenia</option>
                                    <option value="Solomon Islands">Solomon Islands</option>
                                    <option value="Somalia">Somalia</option>
                                    <option value="South Africa">South Africa</option>
                                    <option value="Spain">Spain</option>
                                    <option value="Sri Lanka">Sri Lanka</option>
                                    <option value="Sudan">Sudan</option>
                                    <option value="Suriname">Suriname</option>
                                    <option value="Swaziland">Swaziland</option>
                                    <option value="Sweden">Sweden</option>
                                    <option value="Switzerland">Switzerland</option>
                                    <option value="Syria">Syria</option>
                                    <option value="Tahiti">Tahiti</option>
                                    <option value="Taiwan">Taiwan</option>
                                    <option value="Tajikistan">Tajikistan</option>
                                    <option value="Tanzania">Tanzania</option>
                                    <option value="Thailand">Thailand</option>
                                    <option value="Togo">Togo</option>
                                    <option value="Tokelau">Tokelau</option>
                                    <option value="Tonga">Tonga</option>
                                    <option value="Trinidad & Tobago">Trinidad & Tobago</option>
                                    <option value="Tunisia">Tunisia</option>
                                    <option value="Turkey">Turkey</option>
                                    <option value="Turkmenistan">Turkmenistan</option>
                                    <option value="Turks & Caicos Is">Turks & Caicos Is</option>
                                    <option value="Tuvalu">Tuvalu</option>
                                    <option value="Uganda">Uganda</option>
                                    <option value="United Kingdom">United Kingdom</option>
                                    <option value="Ukraine">Ukraine</option>
                                    <option value="United Arab Erimates">United Arab Emirates</option>
                                    <option value="United States of America">United States of America</option>
                                    <option value="Uraguay">Uruguay</option>
                                    <option value="Uzbekistan">Uzbekistan</option>
                                    <option value="Vanuatu">Vanuatu</option>
                                    <option value="Vatican City State">Vatican City State</option>
                                    <option value="Venezuela">Venezuela</option>
                                    <option value="Vietnam">Vietnam</option>
                                    <option value="Virgin Islands (Brit)">Virgin Islands (Brit)</option>
                                    <option value="Virgin Islands (USA)">Virgin Islands (USA)</option>
                                    <option value="Wake Island">Wake Island</option>
                                    <option value="Wallis & Futana Is">Wallis & Futana Is</option>
                                    <option value="Yemen">Yemen</option>
                                    <option value="Zaire">Zaire</option>
                                    <option value="Zambia">Zambia</option>
                                    <option value="Zimbabwe">Zimbabwe</option>
                                 </select>
                                 @error('country')
                                        <span class="alert alert-danger" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <!-- End Input -->


                    <div class="col-sm-12 mb-12">
                        <h5>Destination address*</h5>
                       </div>
                       

                       <!-- Input -->
                       <div class="col-sm-6 mb-6">
                           <div class="form-group">

                               <div class="input-group">
                                   <input class="form-control" name="dest_city" id="dest_city" required="" placeholder="Arrival City" type="text">
                               </div>
                               @error('country')
                                        <span class="alert alert-danger" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                @enderror
                           </div>
                       </div>
                       <!-- End Input -->

                       <!-- Input -->
                       <div class="col-sm-6 mb-6">
                           <div class="form-group">

                               <div class="input-group">
                                   <input class="form-control" name="dest_state" id="dest_state" required="" placeholder="Arrival State" type="text">
                               </div>
                               @error('country')
                                        <span class="alert alert-danger" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                @enderror
                           </div>
                       </div>
                       <!-- End Input -->

                       <!-- Input -->
                       <div class="col-sm-6 mb-6">
                           <div class="form-group">

                               <div class="input-group">
                                   <input class="form-control" name="dest_zip" id="dest_zip" required="" placeholder="Zip code" type="text">
                               </div>
                               @error('country')
                                        <span class="alert alert-danger" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                @enderror
                           </div>
                       </div>
                       <!-- End Input -->

                       <!-- Input -->
                       <div class="col-sm-6 mb-6">
                           <div class="form-group">
                       <div class="input-group ">
                           <select class="form-control" id="dest_country" name="dest_country" required="">
                               <option value="">Arrival Country</option>
                               <option value="Afganistan">Afghanistan</option>
                               <option value="Albania">Albania</option>
                               <option value="Algeria">Algeria</option>
                               <option value="American Samoa">American Samoa</option>
                               <option value="Andorra">Andorra</option>
                               <option value="Angola">Angola</option>
                               <option value="Anguilla">Anguilla</option>
                               <option value="Antigua & Barbuda">Antigua & Barbuda</option>
                               <option value="Argentina">Argentina</option>
                               <option value="Armenia">Armenia</option>
                               <option value="Aruba">Aruba</option>
                               <option value="Australia">Australia</option>
                               <option value="Austria">Austria</option>
                               <option value="Azerbaijan">Azerbaijan</option>
                               <option value="Bahamas">Bahamas</option>
                               <option value="Bahrain">Bahrain</option>
                               <option value="Bangladesh">Bangladesh</option>
                               <option value="Barbados">Barbados</option>
                               <option value="Belarus">Belarus</option>
                               <option value="Belgium">Belgium</option>
                               <option value="Belize">Belize</option>
                               <option value="Benin">Benin</option>
                               <option value="Bermuda">Bermuda</option>
                               <option value="Bhutan">Bhutan</option>
                               <option value="Bolivia">Bolivia</option>
                               <option value="Bonaire">Bonaire</option>
                               <option value="Bosnia & Herzegovina">Bosnia & Herzegovina</option>
                               <option value="Botswana">Botswana</option>
                               <option value="Brazil">Brazil</option>
                               <option value="British Indian Ocean Ter">British Indian Ocean Ter</option>
                               <option value="Brunei">Brunei</option>
                               <option value="Bulgaria">Bulgaria</option>
                               <option value="Burkina Faso">Burkina Faso</option>
                               <option value="Burundi">Burundi</option>
                               <option value="Cambodia">Cambodia</option>
                               <option value="Cameroon">Cameroon</option>
                               <option value="Canada">Canada</option>
                               <option value="Canary Islands">Canary Islands</option>
                               <option value="Cape Verde">Cape Verde</option>
                               <option value="Cayman Islands">Cayman Islands</option>
                               <option value="Central African Republic">Central African Republic</option>
                               <option value="Chad">Chad</option>
                               <option value="Channel Islands">Channel Islands</option>
                               <option value="Chile">Chile</option>
                               <option value="China">China</option>
                               <option value="Christmas Island">Christmas Island</option>
                               <option value="Cocos Island">Cocos Island</option>
                               <option value="Colombia">Colombia</option>
                               <option value="Comoros">Comoros</option>
                               <option value="Congo">Congo</option>
                               <option value="Cook Islands">Cook Islands</option>
                               <option value="Costa Rica">Costa Rica</option>
                               <option value="Cote DIvoire">Cote DIvoire</option>
                               <option value="Croatia">Croatia</option>
                               <option value="Cuba">Cuba</option>
                               <option value="Curaco">Curacao</option>
                               <option value="Cyprus">Cyprus</option>
                               <option value="Czech Republic">Czech Republic</option>
                               <option value="Denmark">Denmark</option>
                               <option value="Djibouti">Djibouti</option>
                               <option value="Dominica">Dominica</option>
                               <option value="Dominican Republic">Dominican Republic</option>
                               <option value="East Timor">East Timor</option>
                               <option value="Ecuador">Ecuador</option>
                               <option value="Egypt">Egypt</option>
                               <option value="El Salvador">El Salvador</option>
                               <option value="Equatorial Guinea">Equatorial Guinea</option>
                               <option value="Eritrea">Eritrea</option>
                               <option value="Estonia">Estonia</option>
                               <option value="Ethiopia">Ethiopia</option>
                               <option value="Falkland Islands">Falkland Islands</option>
                               <option value="Faroe Islands">Faroe Islands</option>
                               <option value="Fiji">Fiji</option>
                               <option value="Finland">Finland</option>
                               <option value="France">France</option>
                               <option value="French Guiana">French Guiana</option>
                               <option value="French Polynesia">French Polynesia</option>
                               <option value="French Southern Ter">French Southern Ter</option>
                               <option value="Gabon">Gabon</option>
                               <option value="Gambia">Gambia</option>
                               <option value="Georgia">Georgia</option>
                               <option value="Germany">Germany</option>
                               <option value="Ghana">Ghana</option>
                               <option value="Gibraltar">Gibraltar</option>
                               <option value="Great Britain">Great Britain</option>
                               <option value="Greece">Greece</option>
                               <option value="Greenland">Greenland</option>
                               <option value="Grenada">Grenada</option>
                               <option value="Guadeloupe">Guadeloupe</option>
                               <option value="Guam">Guam</option>
                               <option value="Guatemala">Guatemala</option>
                               <option value="Guinea">Guinea</option>
                               <option value="Guyana">Guyana</option>
                               <option value="Haiti">Haiti</option>
                               <option value="Hawaii">Hawaii</option>
                               <option value="Honduras">Honduras</option>
                               <option value="Hong Kong">Hong Kong</option>
                               <option value="Hungary">Hungary</option>
                               <option value="Iceland">Iceland</option>
                               <option value="Indonesia">Indonesia</option>
                               <option value="India">India</option>
                               <option value="Iran">Iran</option>
                               <option value="Iraq">Iraq</option>
                               <option value="Ireland">Ireland</option>
                               <option value="Isle of Man">Isle of Man</option>
                               <option value="Israel">Israel</option>
                               <option value="Italy">Italy</option>
                               <option value="Jamaica">Jamaica</option>
                               <option value="Japan">Japan</option>
                               <option value="Jordan">Jordan</option>
                               <option value="Kazakhstan">Kazakhstan</option>
                               <option value="Kenya">Kenya</option>
                               <option value="Kiribati">Kiribati</option>
                               <option value="Korea North">Korea North</option>
                               <option value="Korea Sout">Korea South</option>
                               <option value="Kuwait">Kuwait</option>
                               <option value="Kyrgyzstan">Kyrgyzstan</option>
                               <option value="Laos">Laos</option>
                               <option value="Latvia">Latvia</option>
                               <option value="Lebanon">Lebanon</option>
                               <option value="Lesotho">Lesotho</option>
                               <option value="Liberia">Liberia</option>
                               <option value="Libya">Libya</option>
                               <option value="Liechtenstein">Liechtenstein</option>
                               <option value="Lithuania">Lithuania</option>
                               <option value="Luxembourg">Luxembourg</option>
                               <option value="Macau">Macau</option>
                               <option value="Macedonia">Macedonia</option>
                               <option value="Madagascar">Madagascar</option>
                               <option value="Malaysia">Malaysia</option>
                               <option value="Malawi">Malawi</option>
                               <option value="Maldives">Maldives</option>
                               <option value="Mali">Mali</option>
                               <option value="Malta">Malta</option>
                               <option value="Marshall Islands">Marshall Islands</option>
                               <option value="Martinique">Martinique</option>
                               <option value="Mauritania">Mauritania</option>
                               <option value="Mauritius">Mauritius</option>
                               <option value="Mayotte">Mayotte</option>
                               <option value="Mexico">Mexico</option>
                               <option value="Midway Islands">Midway Islands</option>
                               <option value="Moldova">Moldova</option>
                               <option value="Monaco">Monaco</option>
                               <option value="Mongolia">Mongolia</option>
                               <option value="Montserrat">Montserrat</option>
                               <option value="Morocco">Morocco</option>
                               <option value="Mozambique">Mozambique</option>
                               <option value="Myanmar">Myanmar</option>
                               <option value="Nambia">Nambia</option>
                               <option value="Nauru">Nauru</option>
                               <option value="Nepal">Nepal</option>
                               <option value="Netherland Antilles">Netherland Antilles</option>
                               <option value="Netherlands">Netherlands (Holland, Europe)</option>
                               <option value="Nevis">Nevis</option>
                               <option value="New Caledonia">New Caledonia</option>
                               <option value="New Zealand">New Zealand</option>
                               <option value="Nicaragua">Nicaragua</option>
                               <option value="Niger">Niger</option>
                               <option value="Nigeria">Nigeria</option>
                               <option value="Niue">Niue</option>
                               <option value="Norfolk Island">Norfolk Island</option>
                               <option value="Norway">Norway</option>
                               <option value="Oman">Oman</option>
                               <option value="Pakistan">Pakistan</option>
                               <option value="Palau Island">Palau Island</option>
                               <option value="Palestine">Palestine</option>
                               <option value="Panama">Panama</option>
                               <option value="Papua New Guinea">Papua New Guinea</option>
                               <option value="Paraguay">Paraguay</option>
                               <option value="Peru">Peru</option>
                               <option value="Phillipines">Philippines</option>
                               <option value="Pitcairn Island">Pitcairn Island</option>
                               <option value="Poland">Poland</option>
                               <option value="Portugal">Portugal</option>
                               <option value="Puerto Rico">Puerto Rico</option>
                               <option value="Qatar">Qatar</option>
                               <option value="Republic of Montenegro">Republic of Montenegro</option>
                               <option value="Republic of Serbia">Republic of Serbia</option>
                               <option value="Reunion">Reunion</option>
                               <option value="Romania">Romania</option>
                               <option value="Russia">Russia</option>
                               <option value="Rwanda">Rwanda</option>
                               <option value="St Barthelemy">St Barthelemy</option>
                               <option value="St Eustatius">St Eustatius</option>
                               <option value="St Helena">St Helena</option>
                               <option value="St Kitts-Nevis">St Kitts-Nevis</option>
                               <option value="St Lucia">St Lucia</option>
                               <option value="St Maarten">St Maarten</option>
                               <option value="St Pierre & Miquelon">St Pierre & Miquelon</option>
                               <option value="St Vincent & Grenadines">St Vincent & Grenadines</option>
                               <option value="Saipan">Saipan</option>
                               <option value="Samoa">Samoa</option>
                               <option value="Samoa American">Samoa American</option>
                               <option value="San Marino">San Marino</option>
                               <option value="Sao Tome & Principe">Sao Tome & Principe</option>
                               <option value="Saudi Arabia">Saudi Arabia</option>
                               <option value="Senegal">Senegal</option>
                               <option value="Seychelles">Seychelles</option>
                               <option value="Sierra Leone">Sierra Leone</option>
                               <option value="Singapore">Singapore</option>
                               <option value="Slovakia">Slovakia</option>
                               <option value="Slovenia">Slovenia</option>
                               <option value="Solomon Islands">Solomon Islands</option>
                               <option value="Somalia">Somalia</option>
                               <option value="South Africa">South Africa</option>
                               <option value="Spain">Spain</option>
                               <option value="Sri Lanka">Sri Lanka</option>
                               <option value="Sudan">Sudan</option>
                               <option value="Suriname">Suriname</option>
                               <option value="Swaziland">Swaziland</option>
                               <option value="Sweden">Sweden</option>
                               <option value="Switzerland">Switzerland</option>
                               <option value="Syria">Syria</option>
                               <option value="Tahiti">Tahiti</option>
                               <option value="Taiwan">Taiwan</option>
                               <option value="Tajikistan">Tajikistan</option>
                               <option value="Tanzania">Tanzania</option>
                               <option value="Thailand">Thailand</option>
                               <option value="Togo">Togo</option>
                               <option value="Tokelau">Tokelau</option>
                               <option value="Tonga">Tonga</option>
                               <option value="Trinidad & Tobago">Trinidad & Tobago</option>
                               <option value="Tunisia">Tunisia</option>
                               <option value="Turkey">Turkey</option>
                               <option value="Turkmenistan">Turkmenistan</option>
                               <option value="Turks & Caicos Is">Turks & Caicos Is</option>
                               <option value="Tuvalu">Tuvalu</option>
                               <option value="Uganda">Uganda</option>
                               <option value="United Kingdom">United Kingdom</option>
                               <option value="Ukraine">Ukraine</option>
                               <option value="United Arab Erimates">United Arab Emirates</option>
                               <option value="United States of America">United States of America</option>
                               <option value="Uraguay">Uruguay</option>
                               <option value="Uzbekistan">Uzbekistan</option>
                               <option value="Vanuatu">Vanuatu</option>
                               <option value="Vatican City State">Vatican City State</option>
                               <option value="Venezuela">Venezuela</option>
                               <option value="Vietnam">Vietnam</option>
                               <option value="Virgin Islands (Brit)">Virgin Islands (Brit)</option>
                               <option value="Virgin Islands (USA)">Virgin Islands (USA)</option>
                               <option value="Wake Island">Wake Island</option>
                               <option value="Wallis & Futana Is">Wallis & Futana Is</option>
                               <option value="Yemen">Yemen</option>
                               <option value="Zaire">Zaire</option>
                               <option value="Zambia">Zambia</option>
                               <option value="Zimbabwe">Zimbabwe</option>
                            </select>
                            @error('dest_country')
                                        <span class="alert alert-danger" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                @enderror
                       </div>
                   </div>
               </div>
               <!-- End Input -->


                             

                            
 
                             <div class="w-100"></div>
 
                             
                         </div>


                          
 
                         <div class="">
                            <input name="submit" type="submit" class="btn btn-primary btn-circled" value="Send Query">
                        
                         </div>
                     
                     <!-- End Contacts Form -->
                 </div>
            </div>
        </form>
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
    <script src="plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 3.1 -->
    <script src="plugins/bootstrap/js/popper.min.js"></script>
    <script src="plugins/bootstrap/js/bootstrap.min.js"></script>
    <!-- Slick Slider -->
    <script src="plugins/slick-carousel/slick/slick.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <!-- Map Js -->
    <script src="plugins/google-map/gmap3.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDwIQh7LGryQdDDi-A603lR8NqiF3R_ycA"></script>

    <script src="js/form/contact.js"></script>
    <script src="js/theme.js"></script>

  </body>
  </html>
   
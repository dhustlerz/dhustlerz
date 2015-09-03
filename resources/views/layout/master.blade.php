<!DOCTYPE html>
<html>
  <head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="author" content="D-Hustlerz" />
  @yield('meta')
  <meta name="keywords" content="D-Hustlerz,music,videos,photography,online photography booking" />
  <title>D-HUSTLERZ</title>
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <link rel="icon" href="images/favicon.ico" type="image/x-icon" />
  {{-- <link rel="stylesheet"  href="{{ URL::asset('../resources/views/layout/css/style.css') }}" href="" id="ColorStyle"> --}}
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" id="ColorStyle">
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    @yield('stylesheets')
  </head>

  <body>

<body>
  <div class="container">
    <div class="row">
        <!-- =========== Begin:Header =========== -->
        <header class="clearfix" id="header">
            <!-- =========== Begin:SiteBrand =========== -->
            <div class="col-md-4">
                <a href="./index.php">
                    <h1 class="SiteBrand"></h1>
                </a>
            </div>
            <!-- =========== Finish:SiteBrand =========== -->
            <!-- =========== Begin:HeaderLinks =========== -->
            <div class="col-md-4 hidden-sm hidden-xs"></div>
            <!--<div style="float:right; background-color:#F00; margin-top:30px "  class="col-md-4 hidden-sm hidden-xs"></div>-->
            <!-- =========== Finish:HeaderSocials =========== -->
        </header>
    </div>
    <!-- =========== Finish:Search =========== -->
    <!-- =========== Finish:Header =========== -->
</div>
<!--

    ============================================

    NAVIGATION

    ============================================= -->
<div class="clearfix" id="NavigationWrapper">
    <div class="container">
        <div class="row">
            <!-- =========== Begin:Slogan =========== -->
            <div class="col-md-4 col-sm-12 RemovePaddingRight">
                <div class="Slogan">
                    <h3>WE ARE CREATIVE THINKERS</h3>
                </div>
            </div>
            <!-- =========== Finish:Slogan =========== -->
            <!-- =========== Begin:Navigation =========== -->
            <div class="col-md-8 col-sm-12 RemovePaddingLeft">
                <nav class="navbar navbar-default">
                    <div class="navbar-header">
                        <button class="navbar-toggle" data-target="#bs-example-navbar-collapse-1" data-toggle="collapse" type="button">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <div class="navigation collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav">
                            <li>
                                <a href="index.php">HOME</a>
                            </li>
                            <li>
                                <a href="about.php">ABOUT</a>
                            </li>
                            <li>
                                <a href="videogallery.php">VIDEOS</a>
                            </li>
                            <li>
                                <a href="photography_2.php">PHOTOGRAPHY</a>
                            </li>
                            <li>
                                <a href="contact_2.php">CONTACT US</a>
                            </li>
                            <li>
                                <a href="blog">Blog</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
            <!-- =========== Finish:Navigation =========== -->
        </div>
    </div>
    <!-- =========== Begin:StyleSwitcher =========== -->
    <div class="StyleSwitcher hidden-sm hidden-xs">
        <span class="fa fa-flow-parallel" id="OpenColorPicker" style="font-style: italic"></span>
    </div>
    <!-- =========== Finish:StyleSwitcher =========== -->
</div>


    @yield('content')
    <!--============================================CONTACT INFORMATION============================================= -->
<div class="Divider">
    <div class="container">
        <div class="ContactInformation">
            <a>CONTACT INFO</a>
        </div>
    </div>
</div>
<!--

    ============================================FOOTER

    ============================================= -->
<footer id="footer">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <!-- ----------- Begin:AboutUs ----------- -->
                <div class="AboutUs">
                    <!-- ----------- Begin:FooterSiteBrand ----------- -->
                    <div class="FooterSiteBrand">
                        <img src="../resources/views/mainsite/images/logo/footer-logo.png" title="Image title" alt="alternative information">
                        </div>
                        <!-- ----------- Finish:FooterSiteBrand ----------- -->
                        <p style="color:#FFF">

                    D-Hustlerz is a consortium trying to originate a new vision for the world by the means of                                             music, photography and dance. We are four members in team with vision to enhance originating talent of
                    the world. Three years back we started our journey in Lovely professional University, where we
                    collaborated with different people with talent in dance, rapping, music videos, web designing
                    and development.
                            <br/>
                    Recently we have started with new social web service of
                            <span style="font-weight:bold">
                                <a href="http://dhustlerz.com/bookmyphotoshoot.php" style="text-decoration:underline">
                    ONLINE PHOTOGRAPHY BOOKING</a>
                            </span>&nbsp;where our users can book their photography online choosing their
                    favourite photographers for various events.
                    Even different photographers can publish their work and get clients via

                            <span style="font-weight:bold">
                                <a href="http://www.dhustlerz.com/photographer_signup.php" style="text-decoration:underline">
                    Photographer Gateway.</a>
                            </span>
                            <br/>
                    Soon it will be coming with
                            <span style="font-weight:bold">
                    ONLINE T-SHIRT CUSTOMIZATION</span>&nbsp;service where anyone can customize and buy there T-Shirt online.

                        </p>
                        <!--<a href="sitemap.php">SITE MAP</a>-->
                    </div>
                    <!-- ----------- Finish:AboutUs ----------- -->
                </div>
                <!-- ----------- Begin:CommunicationPath ----------- -->
                <div class="col-sm-6">
                    <div class="CommunicationPath">
                        <ul class="media-list">
                            <li class="media">
                                <a class="pull-left">
                                    <i class="fa fa-phone"></i>
                                </a>
                                <div class="media-body">
                                    <h4 class="media-heading">Phone Number</h4>
                                     +1 519 992 3441 - Jashanpreet Singh
                                    <br>+91 9780407475 - Jeewan Malhi
                                    </div>
                                </li>
                                <li class="media">
                                    <a class="pull-left">
                                        <i class="fa fa-paper-plane"></i>
                                    </a>
                                    <div class="media-body">
                                        <h4 class="media-heading">Email Address</h4>
                                    info@dhustlerz.com


                                        <br>sales@dhustlerz.com


                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- ----------- Finish:CommunicationPath ----------- -->
                    </div>
                </div>
            </footer>
            <!--

    ============================================

    PRIVACY SECTION

    ============================================= -->
            <div class="PrivacySection">
                <div class="container">
                    <div class="row">
                        <ul>
                            <li>
                                <a href="https://www.facebook.com/0dhustlerz?ref=br_rs">FACEBOOK</a>
                            </li>
                            <li>
                                <a href="https://twitter.com/">TWITTER</a>
                            </li>
                            <li>
                                <a href="https://in.linkedin.com/">LINKEDIN</a>
                            </li>
                            <li>
                                <a href="https://plus.google.com/u/0/105617821550337892738/posts">GOOGLE +</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!--

    ============================================

    NEWSLETTER

    ============================================= -->
            <div class="NewsLetter">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-4"></div>
                        <div class="col-sm-8">
                            <div class="input-group">
                                <div class="form-control-wrapper clearfix"></div>
                                <span class="input-group-btn">
                                    <button class="btn btn-default" type="button" onClick="go_signup();">SIGN UP</button>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--

    ============================================

    COPYRIGHT

    ============================================= -->
            <div class="CopyRightWrapper">
                <div class="container">
                    <div class="row">
                        <div class="CopyRight">

                    &copy D-HUSTLERZ All Right Reserved

                </div>
                    </div>
                </div>
            </div>

  <!-- Latest compiled and minified JavaScript jQuery-->
  <script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
  <!-- Latest compiled and minified JavaScript jQuery UI-->
  <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
  <!-- Latest compiled and minified JavaScript Bootstrap -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>


  @yield('JavaScripts')
  </body>
</html>




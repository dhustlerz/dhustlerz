@extends('layout.master')

@section('meta')
  <meta name="description" content="D-Hustlerz is a consortium trying to originate a new vision for the world by the means of music, photography and dance. It comprises of four members that aims at providing vision to new talent. Started four years back at Lovely professional University, this group provides with videomaking, photography, and web development services.
  It has started with new concept of ONLINE PHOTOGRAPHY BOOKING where users can book photographers of their choice online for any event. And on the other side photographers can register here, create their portfolio and can earn for their work.
  Apart from this another service is of ONLINE T-SHIRT CUSTOMIZATION." />
@stop

@section('stylesheets')
  <link rel = "stylesheet" href = "../resources/views/mainsite/css/masterslider/style/masterslider.css" />
  <link rel = "stylesheet" href = "../resources/views/mainsite/css/masterslider/style/masterslider.css" />
  <link rel = "stylesheet" href = "../resources/views/mainsite/css/masterslider/skins/default/style.css" rel='stylesheet' type='text/css'/>
  <link rel = "stylesheet" href = "../resources/views/mainsite/css/masterslider/partialview/style/ms-partialview.css" rel='stylesheet' type='text/css'/>
  <link rel = "stylesheet" href = "../resources/views/mainsite/css/masterslider/staffcarousel/style/ms-staff-style.css" rel='stylesheet' type='text/css'/>
  <link rel = "stylesheet" href = "../resources/views/mainsite/css/fancybox/jquery.fancybox.css" type="text/css"/>
  <link rel = "stylesheet" href = "../resources/views/mainsite/css/style.css" href="" id="ColorStyle"/>
  <link rel = "stylesheet" href = "../resources/views/mainsite/css/theme-responsive.css" type="text/css"/>
@stop

@section('header')

@stop

@section('content')
    <!--
    ============================================
    HOME PAGE "CONTENT AND IMAGE" SLIDER
    ============================================= -->
    <div class="ms-partialview-template" id="partial-view-1">
      <!-- masterslider -->
      <div class="master-slider ms-skin-default" id="masterslider">
        <div class="ms-slide">
          <img data-src="../resources/views/mainsite/images/slider-images/i-am-ready.png" alt="I am ready" />

          <h5 class="ms-layer video-title video-top-title" style="left:180px; top:40px;line-height: 20px; " data-effect="left(150)" data-duration="3500" data-ease="easeOutExpo" data-delay="50">I'm Ready | RBT | D-Hustlerz</h5>

          <h4 class="ms-layer video-title" style="left:250px; top:60px ;line-height: 51px;" data-effect="front(500)" data-duration="5000" data-ease="easeOutExpo" data-delay="400"></h4>

          <h5 class="ms-layer video-title video-sub-title" style="left:410px; top:40px;line-height: 27px; " data-effect="right(50)" data-duration="3500" data-ease="easeOutExpo" data-delay="1000">Film By-D-Hustlerz</h5>

          <a href="https://www.youtube.com/v/e8KVuytUjKU" data-type="video"></a>
          <div class="ms-info">
            <h2>I'm Ready | RBT | D-Hustlerz | New Punjabi Desi Hiphop Song 2014</h2>
            <h4>Film By:D-Hustlerz</h4>

          </div>
        </div>
        <div class="ms-slide">
          <img src="" data-src="../resources/views/mainsite/images/slider-images/web-design.jpg" alt="lorem ipsum dolor sit" />
          <div class="ms-info">
            <h2>WEB DEVELOPMENT AND DESIGN</h2>
            <h4>Jashanpreet Singh</h4>
            <h4>Gunjit Kaur</h4>

          </div>
        </div>
        <div class="ms-slide">
          <img src="" data-src="../resources/views/mainsite/images/slider-images/camera.jpg" alt="lorem ipsum dolor sit" />
          <div class="ms-info">
            <h2>PHOTOGRAPHY</h2>
            <h4>Jeewan Malhi</h4>

          </div>
        </div>
        <div class="ms-slide">
          <img src="" data-src="../resources/views/mainsite/images/slider-images/cameraman_news.jpg" alt="lorem ipsum dolor sit" />
          <div class="ms-info">
            <h2>VIDEO DIRECTION</h2>
            <h4>Ampy Ramgharia</h4>

          </div>
        </div>
        <div class="ms-slide">
          <img src="" data-src="../resources/views/mainsite/images/slider-images/VideoEditor.jpg" alt="lorem ipsum dolor sit" />
          <div class="ms-info">
            <h2>VIDEO EDITING</h2>
            <h4>Jeewan Malhi</h4>

          </div>
        </div>

        <div class="ms-slide">
          <img src="" data-src="../resources/views/mainsite/images/slider-images/jack.jpg" alt="lorem ipsum dolor sit" />
          <div class="ms-info">
            <h2>CHOREOGRAPHY</h2>
            <h4>Jack Ameen</h4>

          </div>
        </div>

      </div>
      <!-- end of masterslider -->
    </div>

    <!--
    ============================================
    SERVICES & NEW PROJECT
    ============================================= -->
    <div class="container" style="margin-bottom: 10px;">
      <div class="row">
        <!-- ----------- Begin:ServicesMosaic ----------- -->
        <div class="col-sm-8">
          <div class="row">
            <!-- ----------- Begin:1stMosaic ----------- -->
            <div class="col-sm-6">
              <a href="videogallery.php">
                <div class="Mosaic WhiteSkin">
                  <img src="../resources/views/mainsite/images/icons/vdoicon.png" width="80" height="68" />
                  <h3>MUSIC VIDEOS</h3>
                  <p>Video helps capture and contextualize the world around us.</p>
                </div>
              </a>
            </div>
            <!-- ----------- Finish:1stMosaic ----------- -->

            <!-- ----------- Begin:2ndMosaic ----------- -->
            <div class="col-sm-6">
              <a href="http://dhustlerz.com/bookmyphotoshoot.php">
                <div class="Mosaic WhiteSkin">
                  <img src="../resources/views/mainsite/images/icons/photographyicon.png" width="80" height="68" />
                  <h3>PHOTOGRAPHY</h3>
                  <p>There are no rules for good photographs, there are only good photographs.</p>
                </div>
              </a>
            </div>
            <!-- ----------- Finish:2ndMosaic ----------- -->
          </div>
          <div class="row">
            <!-- ----------- Begin:3rdMosaic ----------- -->
            <div class="col-sm-6">
              <a href="https://www.facebook.com/0dhustlerz">
                <div class="Mosaic WhiteSkin">
                  <i class="fa fa-facebook VeryLargeSize"></i>
                  <h3>REACH US</h3>
                  <p>A brand is the way a business is personified in the minds of consumers.</p>
                </div>
              </a>
            </div>
            <!-- ----------- Finish:3rdMosaic ----------- -->

            <!-- ----------- Begin:4thMosaic ----------- -->
            <div class="col-sm-6">
              <a href="contact_2.php">
                <div class="Mosaic WhiteSkin">
                  <img src="../resources/views/mainsite/images/icons/support.png" width="80" height="68" />
                  <h3>HELP</h3>
                  <p>Keep calm and call a virtual assistant.
                    <br/>How may I assist you ?</p>
                </div>
              </a>
            </div>
            <!-- ----------- Finish:4thMosaic ----------- -->
          </div>
        </div>
        <!-- ----------- Finish:ServicesMosaic ----------- -->

        <!-- ----------- Begin:NewProject ----------- -->
        <div class="col-sm-4">
          <div class="NewProject WhiteSkin">
            <!-- ----------- Begin:NewProjectHeader ----------- -->
            <div class="NewProjectHeader">
              <!-- ----------- Begin:NewProjectTitle ----------- -->
              <div class="NewProjectTitle">
                <h4>NEW PROJECT</h4>
              </div>
              <!-- ----------- Finish:NewProjectTitle ----------- -->
              <a class="NewProjectSliderCtrls">
                <span id="slider-next">
                            </span>
              </a>
              <a class="NewProjectSliderCtrls">
                <span id="slider-prev">
                            </span>
              </a>
            </div>
            <!-- ----------- Finish:NewProjectHeader ----------- -->

            <!-- ----------- Begin:NewProjectImageSlides ----------- -->
            <div id="NewProjectImageSlides">
              <a href="videogallery.php">
                <img class="img-responsive" src="../resources/views/mainsite/images/new-project/always-with-u.jpg" title="Always With You" alt="alternative information">
              </a>
              <a href="#">
                <img class="img-responsive" src="../resources/views/mainsite/images/new-project/designtshirts.jpg" title="Image title" alt="alternative information">
              </a>
              <a href="bookmyphotoshoot.php">
                <img class="img-responsive" src="../resources/views/mainsite/images/new-project/photobooking.jpg" title="Image title" alt="alternative information">
              </a>
            </div>
            <!-- ----------- Finish:NewProjectImageSlides ----------- -->

            <!-- ----------- Begin:NewProjectContentSlides ----------- -->
            <div id="NewProjectContentSlides">
              <!-- ----------- Begin:1stContent ----------- -->
              <a data-slide-index="0">
                <div class="NewProjectContent">
                  <h4>
                                    MUSIC VIDEO
                                </h4>

                  <i>
                                    7th August 2014
                                </i>

                  <p>
                    Always with you
                    <br/> Daljit Sidhu ft Iam Døpe
                    <!--<span style="color:#b21c1c;font-size:16px; font-weight:bold">D-Hustlerz</span> -->

                  </p>
                </div>
              </a>
              <!-- ----------- Finish:1stContent ----------- -->

              <!-- ----------- Begin:2ndContent ----------- -->
              <a data-slide-index="1">
                <div class="NewProjectContent">
                  <h4>
                                    ONLINE T-SHIRT CUSTOMIZTION

                                </h4>

                  <i>
                                    Coming soon

                                </i>

                  <p>Customise your own T-shirts using your artwork or with your name/image/message or with available clipart or fonts.
                    <br/>
                    <!--<span style="color:#b21c1c;font-size:16px; font-weight:bold">D-Hustlerz</span>-->
                  </p>
                </div>
              </a>
              <!-- ----------- Finish:2ndContent ----------- -->

              <!-- ----------- Begin:3stContent ----------- -->
              <a data-slide-index="2">
                <div class="NewProjectContent">
                  <h4>ONLINE PHOTOGRAPHY BOOKING</h4>
                  <i>Launched</i>
                  <p>
                    This concept has been set up to make it as quick as possible for you to book a session that fits with your schedule.
                    <br/>
                    <!--<span style="color:#b21c1c;font-size:16px; font-weight:bold">D-Hustlerz</span>-->
                  </p>
                </div>
              </a>
              <!-- ----------- Finish:3stContent ----------- -->
            </div>
          </div>
        </div>
        <!-- ----------- Finish:NewProject ----------- -->
      </div>
    </div>



    <!--
    ============================================
    BACK TO UP
    ============================================= -->
    <div id="BackToUp">
      <div class="BackToUpButton">
        <span id="ScrollTop"><i class="fa fa-angle-up"></i>
            </span>
      </div>
    </div>

@stop

@section('JavaScripts')
  <!--Plugins-->
  <script src="../resources/views/mainsite/js/bootstrap-hover-dropdown.min.js"></script>
  <script src="../resources/views/mainsite/js/jquery.bxslider.min.js"></script>
  <!--<script src="js/jquery.nivo.slider.pack.js"></script><!-not required-->
  <script src="../resources/views/mainsite/js/owl-carousel/owl.carousel.js"></script>
  <script src="../resources/views/mainsite/js/masterslider/masterslider.min.js"></script>
  <script src="../resources/views/mainsite/js/masterslider/partialview/js/masterslider.partialview.dev.js"></script>
  <script src="../resources/views/mainsite/js/masterslider/staffcarousel/js/masterslider.staff.carousel.js"></script>
  <script src="../resources/views/mainsite/js/jquery.fancybox.js"></script>
  <script src="../resources/views/mainsite/js/jquery.easing.1.3.js"></script>
  <!--not required-->
  <script src="../resources/views/mainsite/js/progressbar-plugin.js"></script>
  <script src="../resources/views/mainsite/js/jquery.fittext.js"></script>
  <script src="../resources/views/mainsite/js/custom.js"></script>
  <!--<script src="js/color-picker.js"></script><!-not required-->
  <!--<script src="js/modernizr.js"></script><!-not required-->
  <script src="../resources/views/mainsite/js/jquery.retina.js"></script>
  <script type="text/javascript">
    var slider = new MasterSlider();
    slider.setup('masterslider', {
      width: 760,
      height: 400,
      space: 10,
      loop: true,
      autoplay: true,
      view: 'prtialwave'
    });

    slider.control('arrows');
    slider.control('slideinfo', {
      insertTo: "#partial-view-1",
      autohide: false
    });
    slider.control('circletimer', {
      color: "#FFFFFF",
      stroke: 9
    });

    var slider1 = new MasterSlider();
    slider1.setup('masterslider1', {
      loop: true,
      width: 240,
      height: 240,
      speed: 20,
      view: 'stffade',
      preload: 0,
      space: 0,
      wheel: true
    });
    slider1.control('arrows');
    slider1.control('slideinfo', {
      insertTo: '#staff-info'
    });
  </script>
@stop

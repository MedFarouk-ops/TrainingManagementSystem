<!DOCTYPE html>
<html class="wide wow-animation" lang="en">
  <head>
    <title>Home</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width height=device-height initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,600,700,800,900%7CBaloo">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('css/fonts.css')}}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <style>.ie-panel{display: none;background: #212121;padding: 10px 0;box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3);clear: both;text-align:center;position: relative;z-index: 1;} html.ie-10 .ie-panel, html.lt-ie-10 .ie-panel {display: block;}</style>
  </head>
  <body>
  <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>

                        @guest
                        <div class="btn-group">
                    <div class="action_btn">
                    <div class="dropdown">
                        <a class="btn btn-warning dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                           Login as ...
                        </a>
                        
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                            <a class="dropdown-item" href="{{ route('admin.dashboard') }}">Admin</a>
                            <a class="dropdown-item" href="{{ route('formateur.dashboard') }}">Formateur</a>
                            <a class="dropdown-item" href="{{ route('login') }}">Candidat</a>
                        </div>
                    </div>
                        @if (Route::has('register'))
                        <div class="dropdown">
                        <a class="btn btn-warning dropdown-toggle" href="#" role="button" id="dropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                           Register as ...
                        </a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink2">
                            <a class="dropdown-item" href="{{ route('formateur.register') }}">Formateur</a>
                            <a class="dropdown-item" href="{{ route('register') }}">Candidat</a>
                        </div>
                        </div>
                        </div>
                        </div>
                        @endif
                        @else
                        </div>
                            <div class="btn-group">
                            <div class="action_btn">
                            <div class="dropdown">
                                <a class="btn btn-warning dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                {{ Auth::user()->name }}
                                </a>
                                
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout From All Account</a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                    
                                    
                                    <a class="dropdown-item" href="{{ route('user.logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form-2').submit();">Logout</a>
                                    <form id="logout-form-2" action="{{ route('user.logout') }}"  style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </div>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
    <div class="ie-panel"><a href="http://windows.microsoft.com/en-US/internet-explorer/"><img src="images/ie8-panel/warning_bar_0000_us.jpg" height="52" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a></div>
    <div class="preloader">
      <div class="preloader-inner">
        <div class="preloader-top">
          <div class="preloader-top-sun">
            <div class="preloader-top-sun-bg"></div>
            <div class="preloader-top-sun-line preloader-top-sun-line-0"></div>
            <div class="preloader-top-sun-line preloader-top-sun-line-45"></div>
            <div class="preloader-top-sun-line preloader-top-sun-line-90"></div>
            <div class="preloader-top-sun-line preloader-top-sun-line-135"></div>
            <div class="preloader-top-sun-line preloader-top-sun-line-180"></div>
            <div class="preloader-top-sun-line preloader-top-sun-line-225"></div>
            <div class="preloader-top-sun-line preloader-top-sun-line-270"></div>
            <div class="preloader-top-sun-line preloader-top-sun-line-315"></div>
          </div>
        </div>
        <div class="preloader-bottom">
          <div class="preloader-bottom-line preloader-bottom-line-lg"></div>
          <div class="preloader-bottom-line preloader-bottom-line-md"></div>
          <div class="preloader-bottom-line preloader-bottom-line-sm"></div>
          <div class="preloader-bottom-line preloader-bottom-line-xs"></div>
        </div>
      </div>
    </div>
    <div class="page">
      <!-- Page Header-->
      <header class="section page-header page-header-2 section-custom-1-ally">
        <!-- RD Navbar-->
        <div class="rd-navbar-wrap">
          <nav class="rd-navbar rd-navbar-creative" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-md-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-static" data-lg-device-layout="rd-navbar-fixed" data-xl-layout="rd-navbar-static" data-xl-device-layout="rd-navbar-static" data-lg-stick-up-offset="155px" data-xl-stick-up-offset="155px" data-xxl-stick-up-offset="155px" data-lg-stick-up="true" data-xl-stick-up="true" data-xxl-stick-up="true">
            <div class="rd-navbar-main-outer">
              <div class="rd-navbar-main">
                <!-- RD Navbar Panel-->
                <div class="rd-navbar-panel">
                  <!-- RD Navbar Toggle-->
                  <button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar-nav-wrap, .rd-navbar-toggle-element"><span class="rd-navbar-toggle-inner"><span class="rd-navbar-toggle-element"><span></span></span><span class="rd-navbar-toggle-text on">Menu</span><span class="rd-navbar-toggle-text off">Close</span></span></button>
                  <!-- RD Navbar Brand-->
                  <div class="rd-navbar-brand"><a class="brand" href="index.html"><img class="brand-logo-dark" src="images/logo-default-195x39.png" alt="" width="195" height="39"/><img class="brand-logo-light" src="images/logo-inverse-195x39.png" alt="" width="195" height="39"/></a>
                  </div>
                </div>
                <div class="rd-navbar-aside-outer">
                  <button class="rd-navbar-aside-toggle" data-multitoggle="#rd-navbar-aside" aria-label="Aside Toggle"><span></span></button>
                  <div class="rd-navbar-aside" id="rd-navbar-aside">
                    <ul class="rd-navbar-aside-list">
                      <li><span class="icon mdi mdi-map-marker"></span><a href="#">9 Valley St. Brooklyn, NY 11203</a></li>
                      <li><span class="icon mdi mdi-phone"></span><a href="tel:#">1-800-346-6277</a></li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="rd-navbar-nav-wrap">
                <!-- RD Navbar Nav-->
                <ul class="rd-navbar-nav">
                  <li class="rd-nav-item active"><a class="rd-nav-link" href="index.html">Home</a>
                  </li>
                  <li class="rd-nav-item"><a class="rd-nav-link" href="about.html">About</a>
                  </li>
                  <li class="rd-nav-item"><a class="rd-nav-link" href="typography.html">Typography</a>
                  </li>
                  <li class="rd-nav-item"><a class="rd-nav-link" href="contact-us.html">Contact us</a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
        </div>
        <!-- Jumbotron 3-->
        <div class="jumbotron-3">
          <div class="parallax-container jumbotron-3-inner context-dark" data-parallax-img="images/bg-image-01.jpg">
            <div class="parallax-content">
              <div class="container">
                <div class="row">
                  <div class="col-md-8 col-lg-7 col-xl-7">
                    <div class="unit jumbotron-3-title wow fadeIn">
                      <div class="unit-left"><span class="icon linearicons-quote-open icon-lg"></span></div>
                      <div class="unit-body">
                        <h5 class="font-weight-regular line-height-title">Our language center offers group and personal lessons in English and other modern languages for all ages and levels of knowledge.</h5>
                      </div>
                    </div>
                    <div class="jumbotron-3-text wow fadeIn" data-wow-delay=".1s">
                      <h1 class="text-uppercase font-weight-strong text-decoration">Improve your<br><span class="font-weight-light">english&nbsp;</span>skills</h1>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </header>
      <!-- Tours-->
      <section class="section section-custom-1 bg-default">
        <div class="container">
          <div class="row row-50 justify-content-xl-between flex-lg-row-reverse">
            <div class="col-lg-5 col-xl-5">
              <div class="section-custom-1-block box-decoration">
                <div class="row row-40">
                  <div class="col-md-6 col-lg-12">
                    <div class="d-flex justify-content-between">
                      <h4 class="text-uppercase font-weight-sbold wow fadeIn">Book a free lesson</h4><span class="icon mdi icon-sm linearicons-pencil3"></span>
                    </div>
                    <!-- RD Mailform-->
                    <form class="rd-form rd-mailform form-lg" data-form-output="form-output-global" data-form-type="contact" method="post" action="{{ asset('bat/rd-mailform.php')}}">
                      <div class="form-wrap form-wrap-icon wow fadeIn" data-wow-delay=".05s">
                        <label class="form-label form-label-outside" for="contact-1-name">Name</label>
                        <input class="form-input" id="contact-1-name" type="text" name="name" data-constraints="@Required">
                        <div class="icon form-icon mdi mdi-account-outline"></div>
                      </div>
                      <div class="form-wrap form-wrap-icon wow fadeIn" data-wow-delay=".1s">
                        <label class="form-label form-label-outside" for="contact-1-phone">Phone</label>
                        <input class="form-input" id="contact-1-phone" type="text" name="phone" data-constraints="@PhoneNumber">
                        <div class="icon form-icon mdi mdi-phone"></div>
                      </div>
                      <div class="form-wrap form-wrap-icon wow fadeIn" data-wow-delay=".15s">
                        <label class="form-label form-label-outside" for="contact-1-email">E-mail</label>
                        <input class="form-input" id="contact-1-email" type="email" name="email" data-constraints="@Email @Required">
                        <div class="icon form-icon mdi mdi-email-outline"></div>
                      </div>
                      <div class="form-wrap wow fadeIn" data-wow-delay=".2s">
                        <button class="button button-lg button-icon button-2 button-primary" type="submit">book now</button>
                      </div>
                    </form>
                  </div>
                  <div class="col-md-6 col-lg-12">
                    <h5 class="text-uppercase wow fadeIn">Lots of Happy Students</h5>
                    <p class="text-gray-500 mt-30 wow fadeIn" data-wow-delay=".05s">We have over 4 thousand students</p>
                    <ul class="list-number mt-15 mt-md-30">
                      <li class="wow fadeIn" data-wow-delay=".1s">4</li>
                      <li class="wow fadeIn" data-wow-delay=".15s">1</li>
                      <li class="wow fadeIn" data-wow-delay=".2s">4</li>
                      <li class="wow fadeIn" data-wow-delay=".25s">5</li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-7 col-xl-6">
              <div class="inset-4">
                <div class="layout-2 wow fadeIn">
                  <h2 class="text-uppercase font-weight-bold">Courses We Offer</h2>
                  <div class="layout-2-item"><a class="button button-sm button-style-1" href="#">See All</a></div>
                </div>
                <div class="row row-30 mt-xl-60">
                  <div class="col-sm-6 wow fadeIn">
                    <article class="tour-minimal context-dark">
                      <div class="tour-minimal-inner img-overlay" style="background-image: url(images/home-3-2-258x273.jpg);">
                        <div class="tour-minimal-header">
                        </div>
                        <div class="tour-minimal-main">
                          <h3 class="tour-minimal-title font-weight-sbold"><a href="#">English for Beginners</a></h3>
                          <div class="tour-minimal-pricing">
                            <p class="tour-minimal-price tour-minimal-price-new">$25</p>
                          </div>
                          <p class="tour-minimal-comment">Price per lesson</p>
                        </div>
                        <div class="tour-minimal-caption">
                          <p>Our best English course for starter level.</p>
                        </div>
                      </div>
                    </article>
                  </div>
                  <div class="col-sm-6 wow fadeIn" data-wow-delay=".05s">
                    <article class="tour-minimal context-dark">
                      <div class="tour-minimal-inner img-overlay" style="background-image: url(images/home-3-3-258x273.jpg);">
                        <div class="tour-minimal-header">
                        </div>
                        <div class="tour-minimal-main">
                          <h3 class="tour-minimal-title font-weight-sbold"><a href="#">Online Learning</a></h3>
                          <div class="tour-minimal-pricing">
                            <p class="tour-minimal-price tour-minimal-price-new">$35</p>
                          </div>
                          <p class="tour-minimal-comment">Price per lesson</p>
                        </div>
                        <div class="tour-minimal-caption">
                          <p>Perfect if you prefer distance education.</p>
                        </div>
                      </div>
                    </article>
                  </div>
                  <div class="col-sm-6 wow fadeIn" data-wow-delay=".05s">
                    <article class="tour-minimal context-dark">
                      <div class="tour-minimal-inner img-overlay" style="background-image: url(images/home-3-4-258x273.jpg);">
                        <div class="tour-minimal-header">
                        </div>
                        <div class="tour-minimal-main">
                          <h3 class="tour-minimal-title font-weight-sbold"><a href="#">English for Business</a></h3>
                          <div class="tour-minimal-pricing">
                            <p class="tour-minimal-price tour-minimal-price-new">$40</p>
                          </div>
                          <p class="tour-minimal-comment">Price per lesson</p>
                        </div>
                        <div class="tour-minimal-caption">
                          <p>Business English course designed for managers.</p>
                        </div>
                      </div>
                    </article>
                  </div>
                  <div class="col-sm-6 wow fadeIn" data-wow-delay=".1s">
                    <article class="tour-minimal context-dark">
                      <div class="tour-minimal-inner img-overlay" style="background-image: url(images/home-3-5-258x273.jpg);">
                        <div class="tour-minimal-header">
                        </div>
                        <div class="tour-minimal-main">
                          <h3 class="tour-minimal-title font-weight-sbold"><a href="#">English for Kids</a></h3>
                          <div class="tour-minimal-pricing">
                            <p class="tour-minimal-price tour-minimal-price-new">$17</p>
                          </div>
                          <p class="tour-minimal-comment">Price per lesson</p>
                        </div>
                        <div class="tour-minimal-caption">
                          <p>Easy-to-learn English course for children.</p>
                        </div>
                      </div>
                    </article>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Featured Tours-->
      <section class="section section-1 bg-gray-100">
        <div class="container">
          <div class="row row-30 row-sm-50 justify-content-center justify-content-lg-between">
            <div class="col-sm-10 col-md-10 col-lg-8">
              <h2 class="text-uppercase font-weight-bold text-center text-md-left">Our Gallery</h2>
              <div class="post-corporate-gallery post-corporate-gallery-2 inset-1" data-lightgallery="group"><a class="post-corporate-thumbnail post-corporate-thumbnail-1 post-corporate-thumbnail-custom" href="images/group-01-original.jpg" data-lightgallery="item"><img class="post-corporate-thumbnail-image" src="images/group-01-722x490.jpg" alt="" width="722" height="490"/></a><a class="post-corporate-thumbnail post-corporate-thumbnail-5" href="images/group-02-original.jpg" data-lightgallery="item"><img class="post-corporate-thumbnail-image" src="images/group-02-360x326.jpg" alt="" width="360" height="326"/></a><a class="post-corporate-thumbnail post-corporate-thumbnail-5" href="images/group-03-original.jpg" data-lightgallery="item"><img class="post-corporate-thumbnail-image" src="images/group-03-360x326.jpg" alt="" width="360" height="326"/></a></div>
            </div>
            <div class="col-lg-4 offset-top-96">
              <div class="row row-40 row-md-50 row-xxl-80">
                <div class="col-md-6 col-lg-12">
                  <article class="box-8 mt-30 mt-xl-60 wow fadeIn" data-wow-delay=".1s">
                    <ul class="list-pricing">
                      <li><a href="#"><span class="list-pricing-title">Language for Business</span><span>$45</span></a></li>
                      <li><a href="#"><span class="list-pricing-title">English for Kids</span><span>$15</span></a></li>
                      <li><a href="#"><span class="list-pricing-title">Online Learning</span><span>$36</span></a></li>
                      <li><a href="#"><span class="list-pricing-title">German Club</span><span>$21</span></a></li>
                      <li><a href="#"><span class="list-pricing-title">Personal Lessons</span><span>$35</span></a></li>
                      <li><a href="#"><span class="list-pricing-title">Group Lessons</span><span>$34</span></a></li>
                      <li><a href="#"><span class="list-pricing-title">French for Beginners</span><span>$32</span></a></li>
                    </ul>
                  </article>
                </div>
                <div class="col-md-6 col-lg-12">
                  <h2 class="text-uppercase font-weight-bold text-center text-sm-left wow fadeIn">why choose us</h2>
                  <ul class="row list-group-2 row-13 row-md-30 mt-20 mt-xl-40">
                    <li class="col-sm-6 col-md-12 wow fadeIn" data-wow-delay=".05s">
                      <article class="lg-2-item">
                        <div class="lg-2-item-aside bg-box-1">
                          <div class="icon lg-2-item-icon mdi mdi-checkbox-marked-circle-outline"></div><span class="lg-2-item-counter"></span>
                        </div>
                        <div class="lg-2-item-main">
                          <h3 class="font-weight-regular lg-2-item-title">Quick Results</h3>
                          <p>Get quick and guaranteed results with the best teachers.</p>
                        </div>
                      </article>
                    </li>
                    <li class="col-sm-6 col-md-12 wow fadeIn" data-wow-delay=".1s">
                      <article class="lg-2-item">
                        <div class="lg-2-item-aside">
                          <div class="icon lg-2-item-icon mdi mdi-coin"></div><span class="lg-2-item-counter"></span>
                        </div>
                        <div class="lg-2-item-main">
                          <h3 class="font-weight-regular lg-2-item-title">Save Money</h3>
                          <p>You can save a lot of money on our lessons & resources.</p>
                        </div>
                      </article>
                    </li>
                    <li class="col-sm-6 col-md-12 wow fadeIn" data-wow-delay=".15s">
                      <article class="lg-2-item">
                        <div class="lg-2-item-aside bg-tertiary">
                          <div class="icon lg-2-item-icon mdi mdi-comment-multiple-outline"></div><span class="lg-2-item-counter"></span>
                        </div>
                        <div class="lg-2-item-main">
                          <h3 class="font-weight-regular lg-2-item-title">Get Support</h3>
                          <p>Our staff and teachers are always ready to help you.</p>
                        </div>
                      </article>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Join Our Newsletter -->
      <section class="section section-xl context-dark bg-image bg-overlay-1 text-center" style="background-image: url(images/bg-image-3.jpg);">
        <div class="container">
          <h2 class="text-uppercase font-weight-bold wow fadeIn">Join Our Newsletter</h2>
          <h3 class="font-weight-regular mt-md-20 mt-lg-40 wow fadeIn" data-wow-delay=".025s">Subscribe to our newsletter to receive the latest news & updates.</h3>
          <div class="block-2 block-centered mt-30 mt-lg-60 wow fadeIn" data-wow-delay=".05s">
            <form class="rd-form rd-mailform form-inline form-lg" data-form-output="form-output-global" data-form-type="subscribe" method="post" action="{{  asset('bat/rd-mailform.php')}}">
              <div class="form-wrap form-wrap-icon">
                <input class="form-input" id="subscribe-form-email" type="email" name="email" data-constraints="@Email @Required">
                <label class="form-label" for="subscribe-form-email">E-mail</label>
                <div class="icon form-icon form-icon-2 mdi mdi-email-outline"></div>
              </div>
              <div class="form-button">
                <button class="button button-lg button-primary" type="submit">Send</button>
              </div>
            </form>
          </div>
        </div>
      </section>
      <!-- Banner--><a class="section section-banner" href="https://www.templatemonster.com/intense-multipurpose-html-template.html" style="background-image: url(images/banner/background-03-1920x310.jpg); background-image: -webkit-image-set( url(images/banner/background-03-1920x310.jpg) 1x, url(images/banner/background-03-3840x620.jpg) 2x )"><img src="images/banner/foreground-03-1600x310.png" srcset="images/banner/foreground-03-1600x310.png 1x, images/banner/foreground-03-3200x620.png 2x" alt="" width="1600" height="310"></a>
      <!-- Page Footer-->
      <footer class="section footer-classic footer-classic-md">
        <div class="footer-classic-main">
          <div class="container">
            <div class="footer-classic-layout justify-content-sm-around justify-content-md-between">
              <div class="footer-classic-layout-item"><a class="brand" href="index.html"><img class="brand-logo-dark" src="images/logo-default-195x39.png" alt="" width="195" height="39"/><img class="brand-logo-light" src="images/logo-inverse-195x39.png" alt="" width="195" height="39"/></a>
                <div class="footer-classic-item-block footer-classic-item-block-1">
                  <h6>10000+ Satisfied Students</h6>
                  <div class="owl-carousel-quote-light">
                    <!-- Owl Carousel-->
                    <div class="owl-carousel" data-items="1" data-dots="false" data-nav="false" data-stage-padding="0" data-loop="true" data-margin="30" data-nav-custom="#footer-owl-nav" data-animation-in="fadeIn" data-animation-out="fadeOut" data-mouse-drag="false">
                      <blockquote class="quote-light quote-light-sm">
                        <div class="icon linearicons-quote-open text-primary icon-md"></div>
                        <div class="quote-light-main">
                          <div class="quote-light-text">
                            <q>The staff here is really supportive, teachers are great, the school has a good structure. Thank you!</q>
                          </div>
                          <cite class="quote-light-cite">Jane Smith</cite>
                        </div>
                      </blockquote>
                      <blockquote class="quote-light quote-light-sm">
                        <div class="icon linearicons-quote-open text-primary icon-md"></div>
                        <div class="quote-light-main">
                          <div class="quote-light-text">
                            <q>I am really enjoying my experience here. Teachers are very friendly and there is a friendly atmosphere.</q>
                          </div>
                          <cite class="quote-light-cite">Peter McMillan</cite>
                        </div>
                      </blockquote>
                      <blockquote class="quote-light quote-light-sm">
                        <div class="icon linearicons-quote-open text-primary icon-md"></div>
                        <div class="quote-light-main">
                          <div class="quote-light-text">
                            <q>I like that it has a busy atmosphere but it’s never stressful. Everyone is very nice and you can ask anything at any time.</q>
                          </div>
                          <cite class="quote-light-cite">Kate Wilson</cite>
                        </div>
                      </blockquote>
                    </div>
                    <div class="owl-nav" id="footer-owl-nav">
                      <button class="owl-arrow owl-arrow-prev" aria-label="Prev">
                        <svg width="20" height="16" viewBox="0 0 20 16" xmlns="http://www.w3.org/2000/svg">
                          <path d="M6.7,15.1c0.4,0.4,1,0.4,1.4,0c0.4-0.4,0.4-1,0-1.4L2.4,8l5.7-5.7c0.4-0.4,0.4-1,0-1.4c-0.4-0.4-1-0.4-1.4,0L0.3,7.3										c-0.4,0.4-0.4,1,0,1.4L6.7,15.1z M20,7H1v2h19V7z"></path>
                        </svg>
                      </button>
                      <div class="owl-nav-divider"></div>
                      <button class="owl-arrow owl-arrow-next" aria-label="Next">
                        <svg width="20" height="16" viewBox="0 0 20 16" xmlns="http://www.w3.org/2000/svg">
                          <path d="M19.7071 8.70711C20.0976 8.31658 20.0976 7.68342 19.7071 7.29289L13.3431 0.928932C12.9526 0.538408 12.3195 0.538408 11.9289 0.928932C11.5384 1.31946 11.5384 1.95262 11.9289 2.34315L17.5858 8L11.9289 13.6569C11.5384 14.0474 11.5384 14.6805 11.9289 15.0711C12.3195 15.4616 12.9526 15.4616 13.3431 15.0711L19.7071 8.70711ZM0 9H19V7L0 7L0 9Z"></path>
                        </svg>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="footer-classic-layout-item">
                <h6 class="footer-classic-title inset-3">Popular Courses</h6>
                <div class="footer-classic-item-block footer-classic-item-block-3">
                  <ul class="list-pricing">
                    <li><a href="#"><span class="list-pricing-title">English for Kids</span><span>$45</span></a></li>
                    <li><a href="#"><span class="list-pricing-title">Online Learning</span><span>$15</span></a></li>
                    <li><a href="#"><span class="list-pricing-title">German Club</span><span>$36</span></a></li>
                    <li><a href="#"><span class="list-pricing-title">Personal Lessons</span><span>$21</span></a></li>
                    <li><a href="#"><span class="list-pricing-title">Group Lessons</span><span>$35</span></a></li>
                  </ul>
                </div>
              </div>
              <div class="footer-classic-layout-item">
                <h6 class="footer-classic-title inset-3">Get in Touch</h6>
                <div class="footer-classic-item-block">
                  <ul class="list list-1">
                    <li><a href="#">Send a Message</a></li>
                    <li><a href="contact-us.html">Contacts</a></li>
                    <li><a href="#">Request a Callback</a></li>
                  </ul>
                  <ul class="list-inline list-inline-md">
                    <li><a class="link-2 icon mdi mdi-instagram" href="#"></a></li>
                    <li><a class="link-2 icon mdi mdi-facebook" href="#"></a></li>
                    <li><a class="link-2 icon mdi mdi-youtube-play" href="#"></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="container mt-0">
          <div class="divider-2"></div>
        </div>
        <div class="footer-classic-aside">
          <div class="container">
            <p class="rights"><span>&copy;&nbsp; </span><span class="copyright-year"></span><span>&nbsp;</span><span>Lingvo</span><span>. All rights reserved.</span><span> Design&nbsp;by&nbsp;<a href="https://www.templatemonster.com">TemplateMonster</a></span></p>
          </div>
        </div>
      </footer>
    </div>
    <div class="snackbars" id="form-output-global"></div>
    <script src="{{ asset('js/core.min.js')}}"></script>
    <script src="{{ asset('js/script.js')}}"></script>
  </body>
</html>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta name="description" content="Alexstrap Movie - HTML5 Bootstrap Landing Page Template">
  <meta name="viewport" content="minimum-scale=1, initial-scale=1, width=device-width, shrink-to-fit=no"><!-- Favicon-->
  {{-- <link rel="shortcut icon" href="./assets/favicons/favicon.ico">
  <link rel="apple-touch-icon" sizes="57x57" href="./assets/favicons/apple-icon-57x57.png">
  <link rel="apple-touch-icon" sizes="60x60" href="./assets/favicons/apple-icon-60x60.png">
  <link rel="apple-touch-icon" sizes="72x72" href="./assets/favicons/apple-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="76x76" href="./assets/favicons/apple-icon-76x76.png">
  <link rel="apple-touch-icon" sizes="114x114" href="./assets/favicons/apple-icon-114x114.png">
  <link rel="apple-touch-icon" sizes="120x120" href="./assets/favicons/apple-icon-120x120.png">
  <link rel="apple-touch-icon" sizes="144x144" href="./assets/favicons/apple-icon-144x144.png">
  <link rel="apple-touch-icon" sizes="152x152" href="./assets/favicons/apple-icon-152x152.png">
  <link rel="apple-touch-icon" sizes="180x180" href="./assets/favicons/apple-icon-180x180.png">
  <link rel="icon" type="image/png" sizes="192x192" href="./assets/favicons/android-icon-192x192.png">
  <link rel="icon" type="image/png" sizes="32x32" href="./assets/favicons/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="96x96" href="./assets/favicons/favicon-96x96.png"> --}}
  <link rel="icon" type="image/png" sizes="16x16" href="./assets/favicons/iconineza.png">
  <link rel="manifest" href="./assets/favicons/manifest.json">
  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="msapplication-TileImage" content="./assets/favicons/ms-icon-144x144.png"><!-- PWA primary color-->
  <meta name="theme-color" content="#303030">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700&amp;display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css"><!-- Facebook-->
  <meta property="author" content="luxi">
  <meta property="og:site_name" content="alexstrap.ux-maestro.com">
  <meta property="og:locale" content="en_US">
  <meta property="og:type" content="website"><!-- Twitter-->
  <meta property="twitter:site" content="luxi.ux-maestro.com">
  <meta property="twitter:domain" content="luxi.ux-maestro.com">
  <meta property="twitter:creator" content="luxi">
  <meta property="twitter:card" content="summary">
  <meta property="twitter:image:src" content="./assets/images/logo.png">
  <meta property="og:url" content="alexstrap.ux-maestro.com/movie">
  <meta property="og:title" content="Movie">
  <meta property="og:description" content="Alexstrap Movie - HTML5 Bootstrap Landing Page Template">
  <meta name="twitter:site" content="alexstrap.ux-maestro.com/movie">
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:image" content="/images/movie-logo.png">
  <meta property="og:image" content="/images/movie-logo.png">
  <meta property="og:image:width" content="1200">
  <meta property="og:image:height" content="630">
  <title>Ineza Medika - Home Page </title><!-- Styles-->
  <!-- Put the 3rd/plugins css here-->
  <link href="./assets/css/vendors/normalize.css" rel="stylesheet">
  <link href="./assets/css/vendors/bootstrap.css" rel="stylesheet">
  <link href="./assets/css/vendors/jquery.youtubebackground.css" rel="stylesheet">
  <link href="./assets/css/vendors/materialize.css" rel="stylesheet">
  <link href="./assets/css/vendors/hamburger-menu.css" rel="stylesheet">
  <link href="./assets/css/vendors/jquery.animateSlider.css" rel="stylesheet">
  <link href="./assets/css/vendors/animate.css" rel="stylesheet">
  <link href="./assets/css/vendors/animate-extends.css" rel="stylesheet">
  <link href="./assets/css/vendors/slick-carousel/slick.css" rel="stylesheet">
  <link href="./assets/css/vendors/slick-carousel/slick-theme.css" rel="stylesheet">
  <link href="./assets/css/styles.css" rel="stylesheet">
  <link href="./assets/css/develop.css" rel="stylesheet">
</head>

<body>
  <div id="preloader" style="position: fixed; z-index: 10000; background: #fafafa; width: 100%; height: 100%"><img style="opacity: 0.5; position: fixed; top: calc(50% - 50px); left: calc(50% - 50px)" src="./assets/images/loading.gif" alt="loading"></div>
  <div class="m-application theme--light transition-page" id="app">
    <div class="loading"></div>
    <div class="m-content passion money-var" id="main-wrap">
      <div>
        <div id="home"></div>
        <div class="main-wrap">
          <div class="sidenav mobile-nav" id="slide-menu">
            <div class="menu">
              <ul class="collection">
                <li class="collection-item" style="animation-duration: 0.25s"><a href="./" class="sidenav-close waves-effect menu-list">home</a></li>
                <li class="collection-item" style="animation-duration: 0.5s"><a href="./about" class="sidenav-close waves-effect menu-list">about</a></li>
                <li class="collection-item" style="animation-duration: 0.75s"><a class="sidenav-close waves-effect menu-list">product</a></li>
                <li class="collection-item" style="animation-duration: 1s"><a href="./our-outlet" class="sidenav-close waves-effect menu-list">our outlet</a></li>
                <li class="collection-item" style="animation-duration: 1s"><a class="sidenav-close waves-effect menu-list">articles</a></li>
                <li class="collection-item" style="animation-duration: 1.25s"><a class="sidenav-close waves-effect menu-list">contact us</a></li>
              </ul>
              <hr class="divider-sidebar">
              <ul class="collection">
                <li class="collection-item" style="animation-duration: 1.25s"><a class="sidenav-close waves-effect menu-list" href="login.html">login</a></li>
                <li class="collection-item" style="animation-duration: 1.25s"><a class="sidenav-close waves-effect menu-list" href="register.html">register</a></li>
              </ul>
            </div>
          </div>
          
          <!-- ##### HEADER #####-->
          <header class="app-bar header" id="header">
            <div class="container fixed-width-lg-up">
              <div class="header-content">
                <nav class="nav-logo nav-menu">
                  <button class="mobile-menu btn-icon waves-effect hamburger hamburger--spin show-md-down" id="mobile_menu" type="button">
                    <span class="hamburger-box"><span class="bar hamburger-inner"></span></span>
                  </button>
                  <div class="logo scrollnav">
                    <a href="#banner"><img src="./assets/images/logos/arnez.jpg" alt="logo arnez de Lourdes" /></a>
                  </div>
                  <div>
                    <div class="scrollactive-nav show-lg-up scrollnav">
                      <ul>
                        <li class="d-none"><a href="#banner"></a></li>
                        <li><a href="./" class="btn btn-flat anchor-link waves-effect">home</a></li>
                        <li><a href="./about" class="btn btn-flat anchor-link waves-effect">about</a></li>
                        <li><a class="btn btn-flat anchor-link waves-effect">product</a></li>
                        <li><a href="./our-outlet" class="btn btn-flat anchor-link waves-effect">our outlet</a></li>
                        <li><a class="btn btn-flat anchor-link waves-effect">articles</a></li>
                        <li><a class="btn btn-flat anchor-link waves-effect">contact us</a></li>
                      </ul>
                    </div>
                  </div>
                </nav>
              </div>
            </div>
          </header>
          <!-- ##### END HEADER #####-->

          @yield('content')

          <!-- ##### fOOTER #####-->
          <div id="footer">
            <div class="footer-deco">
              <div class="decoration">
                <svg class="left-deco" width="1045px" height="1468px" viewBox="0 0 1045 1468" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                  <g transform="translate(-1030.000000, 0.000000)">
                    <g transform="translate(950.000000, 0.000000)">
                      <path d="M0,0 L805.395445,0 C731.131815,0 740.666667,76.9414646 834,230.824394 C915.57424,365.319569 1045,513.536468 1045,652.024982 C1045,806.30828 951.877684,902.632061 904.5,1091.56209 C874.07902,1212.87314 909.795583,1338.35244 1011.64969,1468 L0,1468 L0,0 Z"></path>
                    </g>
                  </g>
                </svg>
                <div class="line-deco">
                  <svg class="right-deco-before" width="389px" height="1468px" viewBox="0 0 389 1468" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <g transform="translate(-2171.000000, 0.000000)">
                      <g transform="translate(-950.000000, 0.000000)">
                        <g transform="translate(950.000000, 0.000000)">
                          <path d="M2329.58044,-732.909805 L3294.66463,-608.836163 C3018.10652,-208.944402 2934.07929,71.8618948 3042.58292,233.582726 C3136.98689,374.288498 3255.13325,471.945016 3255.13325,636.668858 C3255.13325,820.179655 3107.51302,903.798038 3059.64228,1128.51906 C3028.9047,1272.81133 3063.63816,1429.66837 3163.84265,1599.0902 L2141.66463,1599.0902 L2329.58044,-732.909805 Z" transform="translate(2718.164626, 433.090195) rotate(179.000000) translate(-2718.164626, -433.090195) "></path>
                        </g>
                      </g>
                    </g>
                  </svg>
                  <svg class="right-deco" width="389px" height="1468px" viewBox="0 0 389 1468" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <g transform="translate(-2171.000000, 0.000000)">
                      <g transform="translate(-950.000000, 0.000000)">
                        <g transform="translate(950.000000, 0.000000)">
                          <path d="M2329.58044,-732.909805 L3294.66463,-608.836163 C3018.10652,-208.944402 2934.07929,71.8618948 3042.58292,233.582726 C3136.98689,374.288498 3255.13325,471.945016 3255.13325,636.668858 C3255.13325,820.179655 3107.51302,903.798038 3059.64228,1128.51906 C3028.9047,1272.81133 3063.63816,1429.66837 3163.84265,1599.0902 L2141.66463,1599.0902 L2329.58044,-732.909805 Z" transform="translate(2718.164626, 433.090195) rotate(179.000000) translate(-2718.164626, -433.090195) "></path>
                        </g>
                      </g>
                    </g>
                  </svg>
                </div>
              </div>
              {{-- <div class="action">
                <h4 class="use-text-title2">What are you waiting for?</h4>
                <a class="btn secondary btn-large waves-effect" href="#">Get Started</a>
              </div> --}}
              <footer class="footer">
                <div class="container">
                  <div class="row">
                    <div class="col-md-3 pa-4">
                      <div class="logo">
                        <img src="./assets/images/logos/arnez.jpg" alt="logo" />
                      </div>
                      <p class="body-2 show-md-up text-center">&copy; arnez de Lourdes 2022</p>
                    </div>
                    <div class="col-md-6 py-0 ps-6 pe-0">
                      <ul class="show-sm-down collapsible">
                        <li class="accordion-content">
                          <div class="collapsible-header">
                            <h6 class="title mb-4">Company</h6>
                            <i class="material-icons right arrow">expand_more</i>
                          </div>
                          {{-- <div class="collapsible-body">
                            <ul>
                              <li><a href="#team">Team</a></li>
                              <li><a href="#history">History</a></li>
                              <li><a href="#contact-us">Contact us</a></li>
                              <li><a href="#locations">Locations</a></li>
                            </ul>
                          </div> --}}
                        </li>
                        <li class="accordion-content">
                          <div class="collapsible-header">
                            <h6 class="title mb-4">Resources</h6>
                            <i class="material-icons right arrow">expand_more</i>
                          </div>
                          {{-- <div class="collapsible-body">
                            <ul>
                              <li><a href="#resource">Resource</a></li>
                              <li><a href="#resource-name">Resource name</a></li>
                              <li><a href="#another-resource">Another resource</a></li>
                              <li><a href="#final-resource">Final resource</a></li>
                            </ul>
                          </div> --}}
                        </li>
                        <li class="accordion-content">
                          <div class="collapsible-header">
                            <h6 class="title mb-4">Legal</h6>
                            <i class="material-icons right arrow">expand_more</i>
                          </div>
                          {{-- <div class="collapsible-body">
                            <ul>
                              <li><a href="#privacy-policy">Privacy policy</a></li>
                              <li><a href="#terms-of-use">Terms of use</a></li>
                            </ul>
                          </div> --}}
                        </li>
                      </ul>
                      <div class="row show-md-up justify-content-evenly">
                        <div class="col-sm-3 pa-4 px-md-0 site-map-item">
                          <h6 class="title-nav mb-4">Company</h6>
                          {{-- <ul>
                            <li><a href="#team">Team</a></li>
                            <li><a href="#history">History</a></li>
                            <li><a href="#contact-us">Contact us</a></li>
                            <li><a href="#locations">Locations</a></li>
                          </ul> --}}
                        </div>
                        <div class="col-sm-3 pa-4 px-md-0 site-map-item">
                          <h6 class="title-nav mb-4">Resources</h6>
                          {{-- <ul>
                            <li><a href="#resource">Resource</a></li>
                            <li><a href="#resource-name">Resource name</a></li>
                            <li><a href="#another-resource">Another resource</a></li>
                            <li><a href="#final-resource">Final resource</a></li>
                          </ul> --}}
                        </div>
                        <div class="col-sm-3 pa-4 px-md-0 site-map-item">
                          <h6 class="title-nav mb-4">Legal</h6>
                          {{-- <ul>
                            <li><a href="#privacy-policy">Privacy policy</a></li>
                            <li><a href="#terms-of-use">Terms of use</a></li>
                          </ul> --}}
                        </div>
                      </div>
                    </div>
                    <div class="col-md-3 pe-4 ps-0">
                      <div class="socmed">
                        <a class="btn-icon waves-effect"><span class="ion-social-facebook icon"></span></a>
                        <a class="btn-icon waves-effect"><span class="ion-social-twitter icon"></span></a>
                        <a class="btn-icon waves-effect"><span class="ion-social-instagram icon"></span></a>
                        <a class="btn-icon waves-effect"><span class="ion-social-linkedin icon"></span></a>
                      </div>
                      <div class="select-lang select-outlined">
                        <select class="select" id="lang_select">
                          <option value="ar">󠁥󠁮󠁧󠁿العربيّة</option>
                          <option value="de">Deutsch</option>
                          <option value="en" selected>English</option>
                          <option value="id">󠁥󠁮󠁧󠁿Bahasa Indonesia</option>
                          <option value="pt">󠁥󠁮󠁧󠁿Português</option>
                          <option value="zh">简体中文</option>
                        </select>
                      </div>
                    </div>
                  </div>
                  <p class="body-2 text-center show-sm-down">&copy; Alexstrap Movie 2020</p>
                </div>
              </footer>
            </div>
          </div>
          <!-- ##### END fOOTER #####-->

          <!-- ##### PAGE-NAV #####-->
          <div class="hidden-sm-down">
            <div class="page-nav" id="page_nav">
              <nav class="section-nav">
                <div class="scrollnav">
                  <ul>
                    <li style="top: 150px"><a class="tooltipped" href="#promotions" data-position="left" data-tooltip="promotions"></a></li>
                    <li style="top: 120px"><a class="tooltipped" href="#all-outlets" data-position="left" data-tooltip="all-outlets"></a></li>
                    <li style="top: 90px"><a class="tooltipped" href="#top" data-position="left" data-tooltip="top categories"></a></li>
                    <li style="top: 60px"><a class="tooltipped" href="#all" data-position="left" data-tooltip="all categories"></a></li>
                    <li style="top: 30px"><a class="tooltipped" href="#pricing" data-position="left" data-tooltip="pricing"></a></li>
                  </ul>
                </div>
              </nav>
              <div class="scrollnav">
                <a class="btn-floating btn-large primary tooltipped waves-effect waves-light" href="#home" data-position="left" data-tooltip="To Top">
                  <div class="icon material-icons">arrow_upward</div>
                </a>
              </div>
            </div>
          </div>
          <!-- ##### END PAGE-NAV #####-->

          <!-- ##### NOTIFICATION #####-->
          {{-- <div class="hidden-sm-down">
            <div class="alert full alert-dismissible fade show notification" role="alert">
              <div class="wrapper">
                <div class="content">
                  <div class="action">This is an example of a message that is commonly used for important information to visitors or users. Please click the button beside to close this message.</div>
                  <button class="btn btn-outlined waves-effect waves-light white" type="button" data-dismiss="alert" aria-label="Close">Accept</button>
                </div>
              </div>
            </div>
          </div> --}}
          <!-- ##### END NOTIFICATION #####-->

        </div>
      </div>
    </div>
  </div><!-- Scripts-->
  <!-- Put the 3rd/plugins javascript here-->
  <script src="./assets/js/vendors/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="./assets/js/vendors/bootstrap.min.js"></script>
  <script src="./assets/js/vendors/enquire.min.js"></script>
  <script src="./assets/js/vendors/jquery.enllax.min.js"></script>
  <script src="./assets/js/vendors/jquery.form-validator.min.js"></script>
  <script src="./assets/js/vendors/jquery.touchSwipe.min.js"></script>
  <script src="./assets/js/vendors/jquery.youtubebackground.js"></script>
  <script src="./assets/js/vendors/pace.min.js"></script>
  <script src="./assets/js/vendors/slick.min.js"></script>
  <script src="./assets/js/vendors/wow.min.js"></script>
  <script src="./assets/js/vendors/jquery.navScroll.min.js"></script>
  <script src="./assets/js/vendors/parallax.min.js"></script><!-- This assets are not avalaible in npm.js or it has been costumized-->
  <script src="./assets/js/vendors/modernizr-2.8.3-respond-1.4.2.min.js"></script>
  <script src="./assets/js/vendors/materialize.js"></script>
  <script src="./assets/js/vendors/jquery.animateSlider.js"></script>
  <script src="./assets/js/scripts.js"></script>
  <script src="./assets/js/develop.js"></script>
  <script>
    $(document).ready(function(){
      $('#exampleModal').modal('show');
    })
    </script>
</body>

</html>
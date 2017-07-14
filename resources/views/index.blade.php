<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>{{ __('menu.company_name') }}</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/lightbox.css" rel="stylesheet">
    <link href="{{ url('css/main.css') }}" rel="stylesheet">
    <link id="css-preset" href="css/presets/preset1.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">

    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->

    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css'>
    <link rel="apple-touch-icon" sizes="60x60" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/manifest.json">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="theme-color" content="#ffffff">
</head><!--/head-->

<body>

{{--<!--.preloader-->--}}
{{--<div class="preloader"><i class="fa fa-circle-o-notch fa-spin"></i></div>--}}
{{--<!--/.preloader-->--}}

<header id="home">
    <div id="home-slider" class="carousel slide carousel-fade" data-ride="carousel">
        <div class="carousel-inner">
            <div class="item active" style="background-image: url('images/slider/1.jpg')">
                <div class="caption">
                    <h1 class="animated fadeInLeftBig"><span>{{ __('menu.company_name') }}</span></h1>
                    <p class="animated fadeInRightBig">{{ __('menu.company_brief') }}</p>
                    <a data-scroll class="btn btn-start animated fadeInUpBig" href="{{ url('lang/zh-TW') }}">{{ __('menu.lang_zh-TW') }}</a>
                    <a data-scroll class="btn btn-start animated fadeInUpBig" href="{{ url('lang/zh-CN') }}">{{ __('menu.lang_zh-CN') }}</a>
                    <a data-scroll class="btn btn-start animated fadeInUpBig" href="{{ url('lang/en') }}">{{ __('menu.lang_en') }}</a>
                </div>
            </div>
            <div class="item" style="background-image: url('images/slider/2.jpg')">
                <div class="caption">
                    <h1 class="animated fadeInLeftBig"><span>{{ __('menu.company_name') }}</span></h1>
                    <p class="animated fadeInRightBig">{{ __('menu.company_brief') }}</p>
                    <a data-scroll class="btn btn-start animated fadeInUpBig" href="{{ url('lang/zh-TW') }}">{{ __('menu.lang_zh-TW') }}</a>
                    <a data-scroll class="btn btn-start animated fadeInUpBig" href="{{ url('lang/zh-CN') }}">{{ __('menu.lang_zh-CN') }}</a>
                    <a data-scroll class="btn btn-start animated fadeInUpBig" href="{{ url('lang/en') }}">{{ __('menu.lang_en') }}</a>
                </div>
            </div>
            <div class="item" style="background-image: url('images/slider/3.jpg')">
                <div class="caption">
                    <h1 class="animated fadeInLeftBig"><span>{{ __('menu.company_name') }}</span></h1>
                    <p class="animated fadeInRightBig">{{ __('menu.company_brief') }}</p>
                    <a data-scroll class="btn btn-start animated fadeInUpBig" href="{{ url('lang/zh-TW') }}">{{ __('menu.lang_zh-TW') }}</a>
                    <a data-scroll class="btn btn-start animated fadeInUpBig" href="{{ url('lang/zh-CN') }}">{{ __('menu.lang_zh-CN') }}</a>
                    <a data-scroll class="btn btn-start animated fadeInUpBig" href="{{ url('lang/en') }}">{{ __('menu.lang_en') }}</a>
                </div>
            </div>
        </div>
        <a class="left-control" href="#home-slider" data-slide="prev"><i class="fa fa-angle-left"></i></a>
        <a class="right-control" href="#home-slider" data-slide="next"><i class="fa fa-angle-right"></i></a>

        <a id="tohash" href="#services"><i class="fa fa-angle-down">{{ __('menu.go') }}</i></a>

    </div><!--/#home-slider-->
    <div class="main-nav">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">
                    <h1><img class="lazy lazy img-responsive" data-original="images/logo.png" alt="logo"></h1>
                </a>
            </div>
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li class="scroll active"><a href="#home">{{ __('menu.home') }}</a></li>
                    <li class="scroll"><a href="#services">{{ __('menu.services') }}</a></li>
                    <li class="scroll"><a href="#about-us">{{ __('menu.aboutus') }}</a></li>
                    <li class="scroll"><a href="#portfolio">{{ __('menu.environment') }}</a></li>
                    <li class="scroll"><a href="#contact">{{ __('menu.contact') }}</a></li>
                </ul>
            </div>
        </div>
    </div><!--/#main-nav-->
</header><!--/#home-->
<section id="services">
    <div class="container">
        <div class="row">
            <div class="heading text-center col-sm-8 col-sm-offset-2 wow fadeInUp" data-wow-duration="1200ms" data-wow-delay="300ms">
                <P><h2>{{ __('menu.services_brief') }}</h2></P>
            </div>
        </div>
        <div class="team-members">
            <div class="row">
                <div class="col-sm-3">
                    <div class="team-member wow flipInY" data-wow-duration="1000ms" data-wow-delay="300ms">
                        <div class="member-image">
                            <img class="img-responsive" src="images/team/1.jpg" alt="">
                        </div>
                        <div class="member-info">
                            <h3>{{ __('menu.services_office') }}</h3>
                            <p>{{ __('menu.services_office_brief') }}</p>
                        </div>

                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="team-member wow flipInY" data-wow-duration="1000ms" data-wow-delay="500ms">
                        <div class="member-image">
                            <img class="img-responsive" src="images/team/2.jpg" alt="">
                        </div>
                        <div class="member-info">
                            <h3>{{ __('menu.services_virtual_office') }}</h3>
                            <p>{{ __('menu.services_virtual_office_brief') }}</p>
                        </div>

                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="team-member wow flipInY" data-wow-duration="1000ms" data-wow-delay="800ms">
                        <div class="member-image">
                            <img class="img-responsive" src="images/team/3.jpg" alt="">
                        </div>
                        <div class="member-info">
                            <h3>{{ __('menu.services_meeting_room') }}</h3>
                            <p>{{ __('menu.services_meeting_room_brief') }}</p>
                        </div>

                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="team-member wow flipInY" data-wow-duration="1000ms" data-wow-delay="1100ms">
                        <div class="member-image">
                            <img class="img-responsive" src="images/team/4.jpg" alt="">
                        </div>
                        <div class="member-info">
                            <h3>{{ __('menu.services_secretary') }}</h3>
                            <p>{{ __('menu.services_secretary_brief') }}</p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section><!--/#services-->

<section id="about-us" class="parallax">
    <div class="container">
        <div class="row">
            <div class="col-sm-10">
                <div class="about-info wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
                    <h2>{{ __('menu.aboutus') }}</h2>
                    <p>{!! __('menu.aboutus_brief')  !!}  </p>

                </div>
            </div>

        </div>
    </div>
</section><!--/#about-us-->

    <section id="portfolio">
    <div class="container">
        <div class="row">
            <div class="heading text-center col-sm-8 col-sm-offset-2 wow fadeInUp" data-wow-duration="1000ms"
                 data-wow-delay="300ms">
                <h2>{{ __('menu.environment_brief') }}</h2>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-3">
                <div class="folio-item wow fadeInRightBig" data-wow-duration="1000ms" data-wow-delay="300ms">
                    <div class="folio-image">
                        <img class="lazy img-responsive" data-original="images/portfolio/1.jpg" alt="">
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="folio-item wow fadeInLeftBig" data-wow-duration="1000ms" data-wow-delay="400ms">
                    <div class="folio-image">
                        <img class="lazy img-responsive" data-original="images/portfolio/2.jpg" alt="">
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="folio-item wow fadeInRightBig" data-wow-duration="1000ms" data-wow-delay="500ms">
                    <div class="folio-image">
                        <img class="lazy img-responsive" data-original="images/portfolio/3.jpg" alt="">
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="folio-item wow fadeInLeftBig" data-wow-duration="1000ms" data-wow-delay="600ms">
                    <div class="folio-image">
                        <img class="lazy img-responsive" data-original="images/portfolio/4.jpg" alt="">
                    </div>

                </div>
            </div>
            <div class="col-sm-3">
                <div class="folio-item wow fadeInRightBig" data-wow-duration="1000ms" data-wow-delay="700ms">
                    <div class="folio-image">
                        <img class="lazy img-responsive" data-original="images/portfolio/5.jpg" alt="">
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="folio-item wow fadeInLeftBig" data-wow-duration="1000ms" data-wow-delay="800ms">
                    <div class="folio-image">
                        <img class="lazy img-responsive" data-original="images/portfolio/6.jpg" alt="">
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="folio-item wow fadeInRightBig" data-wow-duration="1000ms" data-wow-delay="900ms">
                    <div class="folio-image">
                        <img class="lazy img-responsive" data-original="images/portfolio/7.jpg" alt="">
                    </div>

                </div>
            </div>
            <div class="col-sm-3">
                <div class="folio-item wow fadeInLeftBig" data-wow-duration="1000ms" data-wow-delay="1000ms">
                    <div class="folio-image">
                        <img class="lazy img-responsive" data-original="images/portfolio/8.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="portfolio-single-wrap">
        <div id="portfolio-single">
        </div>
    </div><!-- /#portfolio-single-wrap -->
</section><!--/#portfolio-->

<section id="contact">
    <div id="google-map" class="wow fadeIn" data-latitude="24.982985" data-longitude="121.537527"
         data-wow-duration="1000ms" data-wow-delay="400ms"></div>
    <div id="contact-us" class="parallax">
        <div class="container">
            <div class="row">
                <div class="heading text-center col-sm-8 col-sm-offset-2 wow fadeInUp" data-wow-duration="1000ms"
                     data-wow-delay="300ms">
                    <h2>{{ __('menu.contact_brief') }}</h2>
            </div>
            </div>
            <div class="contact-form wow fadeIn" data-wow-duration="1000ms" data-wow-delay="600ms">
                <div class="row">
                    <div class="col-sm-6">
                        <form id="main-contact-form" name="contact-form" method="post" action="#">
                            <div class="row  wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="text" name="name" class="form-control" placeholder="{{ __('menu.enter_name') }}"
                                               required="required">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="email" name="email" class="form-control"
                                               placeholder="{{ __('menu.enter_email') }}" required="required">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="text" name="subject" class="form-control" placeholder="{{ __('menu.enter_subject') }}"
                                       required="required">
                            </div>
                            <div class="form-group">
                                <textarea name="message" id="message" class="form-control" rows="4"
                                          placeholder="{{ __('menu.enter_message') }}" required="required"></textarea>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn-submit">{{ __('menu.send_now') }}</button>
                            </div>
                        </form>
                    </div>
                    <div class="col-sm-6">
                        <div class="contact-info wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
                            <p>{{ __('menu.contact_detail') }}</p>
                            <ul class="address">
                                <li><i class="fa fa-map-marker"></i> <span> {{ __('menu.address') }}</span>{{ __('menu.address_info') }}</li>
                                <li><i class="fa fa-phone"></i> <span> {{ __('menu.phone') }}</span>{{ __('menu.phone_info') }}</li>
                                <li><i class="fa fa-envelope"></i> <span> {{ __('menu.email') }}</span><a
                                            href="">{{ __('menu.email_info') }}</a></li>
                                <li><i class="fa fa-globe"></i> <span> {{ __('menu.website') }}</span> <a href="">{{ __('menu.website_info') }}</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><!--/#contact-->
<footer id="footer">
    <div class="footer-top wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
        <div class="container text-center">
            <div class="footer-logo">
                <a href="index.html"><img class="lazy img-responsive" data-original="images/logo.png" alt=""></a>
            </div>
            {{--<div class="social-icons">--}}
                {{--<ul>--}}
                    {{--<li><a class="envelope" href="#"><i class="fa fa-envelope"></i></a></li>--}}
                    {{--<li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>--}}
                    {{--<li><a class="dribbble" href="#"><i class="fa fa-dribbble"></i></a></li>--}}
                    {{--<li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>--}}
                    {{--<li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>--}}
                    {{--<li><a class="tumblr" href="#"><i class="fa fa-tumblr-square"></i></a></li>--}}
                {{--</ul>--}}
            {{--</div>--}}
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <p>&copy; Hoil</p>
                </div>
                <div class="col-sm-6">
                    <p class="pull-right">Crafted by <a href="http://designscrazed.org/">1002</a></p>
                </div>
            </div>
        </div>
    </div>
</footer>

<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/jquery.lazyload.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
{{--<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA4f4ZSR8JvxM_A49FOREwUeKLWPRLrnXs&callback=initMap"--}}
        {{--type="text/javascript"></script>--}}
<script type="text/javascript" src="js/jquery.inview.min.js"></script>
<script type="text/javascript" src="js/wow.min.js"></script>
<script type="text/javascript" src="js/mousescroll.js"></script>
<script type="text/javascript" src="js/smoothscroll.js"></script>
<script type="text/javascript" src="js/jquery.countTo.js"></script>
<script type="text/javascript" src="js/lightbox.min.js"></script>
<script type="text/javascript" src="js/main.js"></script>

@if (getenv('APP_ENV') === 'local')
    <script id="__bs_script__">//<![CDATA[
        document.write("<script async src='http://HOST:3000/browser-sync/browser-sync-client.js?v=2.18.6'><\/script>".replace("HOST", location.hostname));
        //]]>
    </script>
@endif
</body>
</html>
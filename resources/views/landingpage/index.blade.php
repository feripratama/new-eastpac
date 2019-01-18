@php
    use App\LandingPageContent;
@endphp
<!DOCTYPE html>
<html lang="en" class="js">
<head>
	<meta charset="utf-8">
	<meta name="author" content="Softnio">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="ICO Crypto is a modern and elegant landing page, created for ICO Agencies and digital crypto currency investment website.">
	<!-- Fav Icon  -->
	<link rel="shortcut icon" href="{{asset('landingpage/images/logo2.png')}}">
	<!-- Site Title  -->
	<title>{{ App\SiteConfig::config('SITE_TITLE') }}</title>
	<!-- Vendor Bundle CSS -->
	<link rel="stylesheet" href="{{asset('landingpage/assets/css/vendor.bundle.css?ver=142')}}">
	<!-- Custom styles for this template -->
	<link rel="stylesheet" href="{{asset('landingpage/assets/css/style.css?ver=142')}}">
    <link rel="stylesheet" href="{{asset('landingpage/assets/css/theme-orange.css?ver=142')}}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('bower_components/font-awesome/css/font-awesome.min.css')}}">
    <!-- Additional CSS -->
    <link rel="stylesheet" href="{{asset('landingpage/assets/css/style-additional.css')}}">
</head>

<body class="theme-dark io-zinnia" data-spy="scroll" data-target="#mainnav" data-offset="80">

	<!-- Header -->
	<header class="site-header is-sticky">

        <!-- Place Particle Js -->
        <div id="particles-js" class="particles-container particles-js"></div>

        <!-- Start Navbar-full -->
        <div class="navbar navbar-full navbar-expand-lg is-transparent" id="mainnav">
            <a class="navbar-brand animated" data-animate="fadeInDown" data-delay=".65" href="./">
                <img class="logo logo-dark" alt="logo" src="{{asset('landingpage/images/logobaru.png')}}" >
                <img class="logo logo-light flip-logo" alt="logo" src="{{asset('landingpage/images/logo-full-white-new.png')}}">
            </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggle">
                <span class="navbar-toggler-icon">
                    <span class="ti ti-align-justify"></span>
                </span>
            </button>

            <!-- Start Navbar-collapse -->
                <div class="collapse navbar-collapse justify-content-between" id="navbarToggle">
                    <!-- Start navbar-nav -->
                    <ul class="navbar-nav animated remove-animation" data-animate="fadeInDown" data-delay=".75">
                        <li class="nav-item"><a class="nav-link menu-link" href="#about">About</a></li>
                        <li class="nav-item"><a class="nav-link menu-link" href="#benifits">Benefits</a></li>
                        <li class="nav-item"><a class="nav-link menu-link" href="#tokenSale">Token Sale</a></li>
                        <li class="nav-item"><a class="nav-link menu-link" href="#roadmap">Roadmap</a></li>
                        <li class="nav-item"><a class="nav-link menu-link" href="#team">Team</a></li>
                        <li class="nav-item"><a class="nav-link menu-link" href="#faq">FAQs</a></li>
                        <li class="nav-item"><a class="nav-link menu-link" href="#contact">Contact</a></li>
                    </ul>
                    <!-- End navbar-nav -->

                    <!-- Start navbar-btns -->
                    <ul class="navbar-btns animated remove-animation" data-animate="fadeInDown" data-delay=".85">
                        <li class="nav-item lang-switch">
                            <a class="" href="#" data-toggle="dropdown">English <em class="ti ti-angle-down"></em>
                            </a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">French</a>
                                <a class="dropdown-item" href="#">Chinese</a>
                                <a class="dropdown-item" href="#">Hindi</a>
                            </div>
                        </li>
                        @if(Auth::guest())
                        <li class="nav-item"><a class="nav-link btn btn-sm btn-outline menu-link" href="{{ route('register') }}">Register</a></li>
                        <li class="nav-item"><a class="nav-link btn btn-sm btn-outline menu-link" href="{{ route('login') }}">Log In</a></li>
                        @else
                        <li class="nav-item"><a class="nav-link btn btn-sm btn-outline menu-link" href="{{ route('home') }}">Dashboard</a></li>
                        @endif
                    </ul>
                    <!-- End navbar-btns -->
                </div>
                <!-- End Navbar-collapse -->
        </div>
        <!-- End Navbar-full -->

        <!-- Start header Banner/Slider -->
        <div id="header" class="banner banner-zinnia">
            <div class="ui-shape ui-shape-light ui-shape-header"></div>
            <div class="container">
                <div class="banner-content">
                    <div class="row align-items-center text-center justify-content-center">
                        <div class="col-sm-10 col-md-12 col-lg-10">
                            <div class="header-txt tab-center mobile-center">
                                @role('administrator')
                                <h1 class="animated" data-animate="fadeInUp" data-delay="1.25" id="txt-banner-1">{!!LandingPageContent::getJsonData('banner_1', 'banner_1', 'txt')!!}<br class="d-none d-xl-block"></h1>
                                <div class="row" id="txt-banner-1-ctrl" style="display:none">
                                    <div class="col-md-12 text-center">
                                        <a href="#" id="txt-banner-1-cancel" class="btn btn-success btn-edit"> <i class="fas fa-times"> </i> cancel </a>&nbsp;
                                        <a href="#" id="txt-banner-1-save" class="btn btn-success btn-edit"> <i class="fas fa-save"> </i> save </a>
                                    </div>
                                </div>
                                <!-- End fa-banner -->

                                @else
                                <h1 class="animated" data-animate="fadeInUp" data-delay="1.25">
                                    {!!
                                        LandingPageContent::getJsonData('banner_1', 'banner_1', 'txt')
                                    !!}
                                    <br class="d-none d-xl-block">
                                </h1>
                                @endrole
                                @role('administrator')
                                <h3 id="txt-banner-2">{!!
                                        LandingPageContent::getJsonData('banner_2', 'banner_2', 'txt')
                                    !!}
                                </h3>

                                <div class="row" id="txt-banner-2-ctrl" style="display:none">
                                    <div class="col-md-12">
                                        <a href="#" id="txt-banner-2-cancel" class="btn btn-success btn-edit pull-right" style="color:white;"> <i class="fas fa-times"> </i> cancel </a>&nbsp;
                                        <a href="#" id="txt-banner-2-save" class="btn btn-success btn-edit pull-right" style="color:white;"> <i class="fas fa-save"> </i> save </a>
                                    </div>
                                </div>
                                <!-- End btn-banner2 -->

                                @else
                                <h3 id="txt-banner-2">{!!
                                        LandingPageContent::getJsonData('banner_2', 'banner_2', 'txt')
                                    !!}
                                </h3>
                                @endrole
                                <div class="gaps size-1x d-none d-md-block">
                                </div>
                                <p class="lead animated" data-animate="fadeInUp" data-delay="1.35"><span class="info ">next offer will start again at 21:30 (+8 GMT)</span></p>
                                <div class="gaps size-1x d-none d-md-block"></div>
                                <ul class="btns animated" data-animate="fadeInUp" data-delay="1.45">
                                    <li><a href="{{route('register')}}" class="btn btn-icon-s3">JOIN PRE-SALE <i class="fas fa-angle-double-right"></i></a></li>
                                    <li><a href="#" class="btn btn-icon-s3">WHITE PAPER <i class="fas fa-angle-double-right"></i></a></li>
                                </ul>
                                <!-- End lead animated -->
                            </div>
                            <!-- End header-txt tab-center mobile-center -->
                        </div>
                        <!-- End col-sm-10 col-md-12 col-lg-10 -->
                    </div><!-- End row align-items-center text-center justify-content-center -->
                </div>
                <!-- End banner-content  -->
            </div>
            <!-- End container  -->
        </div>
        <!-- End header Banner/Slider -->

        <!-- Start presale-box -->
        <div class="presale-box animated" data-animate="fadeIn" data-delay="1.65">
            <div class="container">
                <div class="row no-gutters justify-content-center mid-box">
                    <div class="col-xl-4 col-md-5">
                        <div class="presale-countdown">
                            <h5>Pre-sale start in</h5>
                            <div class="token-countdown" data-date="2018/12/05">
                                <div id="clockdiv">

                                <div>
                                <span class="days"></span>
                                    <div class="smalltext">Days
                                    </div>
                                </div>
                                <!-- End days -->

                                <div>
                                <span class="hours"></span>
                                    <div class="smalltext">Hours</div>
                                </div>
                                <!-- End hours -->

                                <div>
                                <span class="minutes"></span>
                                    <div class="smalltext">Minutes</div>
                                </div>
                                <!-- End Minutes -->

                                <div>
                                    <span class="seconds"></span>
                                    <div class="smalltext">Seconds</div>
                                </div>
                                <!-- End seconds -->

                                </div>
                                <!-- End clockdiv -->
                            </div>
                            <!-- End token-countdown -->
                        </div>
                        <!-- End presale-countdown -->
                    </div>
                    <!-- col-xl-4 col-md-5  -->

                    <div class="col-xl-6 col-md-7">
                        <div class="presale-status">
                            <h5>Pre Sale</h5>
                                <div class="presale-bar">
                                    {{-- <div class="presale-bar-percent" style="width:35%"></div> --}}
                                    {{-- 50000/200000*100 --}}
                                    <div class="presale-bar-percent"
                                        style="width:{{ $dshare_persentase_progress_bar }}%;color:#444;">
                                    </div>
                                </div>
                                <!-- End presale-bar -->

                            <div class="presale-points d-flex justify-content-between">
                                <span>{{ number_format($dshare_sold) }} EAST ({{ $dshare_persentase_progress_bar }}%)
                                </span>
                                <span>{{ number_format($dshare_target) }} EAST (100%)</span>
                            </div>
                            <!-- End presale-points d-flex justify-content-between -->
                        </div>
                        <!-- End presale-status -->
                    </div>
                    <!-- End col-xl-6 col-md-7  -->
                </div><!-- End row no-gutters justify-content-center mid-box  -->
            </div><!-- End container  -->
        </div>
        <!-- End presale-box animated  -->
    </header>
    <!-- End Header -->

	<div class="gaps size-6x d-md-none"></div>
    <div class="gaps size-3x"></div>

    <!-- About EASTPAC -->
    <div class="section section-pad about-section no-pb section-bg" id="about">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-md-10">
                    <div class="section-head-s7" id="txt-about-1">
                        <h2 class="section-title-s7 animated" data-animate="fadeInUp" data-delay=".1">{!!LandingPageContent::getJsonData('about_1', 'about_1', 'title')!!}</h2>
                        <p class="lead animated" data-animate="fadeInUp" data-delay=".2">
                            {!!LandingPageContent::getJsonData('about_1', 'about_1', 'content')!!}
                        </p>
                    </div>
                    <!-- End section-head-s7 -->
                        @role('administrator')

                    <div class="row">
                        <div class="col-md-12 text-center">
                            <a href="#" class="btn btn-success btn-edit" style="" id="edit-about-1" onclick="return false;"><i class="fa fa-pencil"> Edit</i></a>
                            <a href="#" class="btn btn-success btn-edit" style="display:none;" id="save-about-1" onclick="return false;"><i class="fa fa-save"> Save</i></a>
                            <a href="#" class="btn btn-success btn-edit" style="display:none;" id="cancel-about-1" onclick="return false;"><i class="fa fa-times"> Cancel</i></a>
                        </div>
                        <!-- End col-md-12 text-center -->
                    </div>
                    <!-- End row -->
                        @endrole
                </div>
                <!-- End col-md-10 -->
            </div>
            <!-- End row justify-content-center text-center -->
        </div>
        <!-- End container -->
    </div>
    <!-- End section section-pad about-section no-pb section-bg -->
    <!-- End About Eastpac -->

    <!-- Start Section section-pad section-bg -->
    <div class="section section-pad section-bg" id="why">
        <div class="ui-shape ui-shape-s1"></div>
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-7 order-last">
                        <div class="animated" data-animate="fadeInUp" data-delay=".5">
                            <img id="file-img-1" src="{{asset('landingpage/images/zinnia/graph-zinnia-a.png')}}" alt="graph" style="max-height:430px;">
                            <input type="hidden" id="path-img-1" value="{{asset('landingpage/images/zinnia/graph-zinnia-a.png')}}">
                            @role('administrator')

                            <div class="row">
                                <div class="col-md-12 text-center">
                                    <input type="file" id="upload-img-1" style="display:none;" class="btn-for-upload">
                                </div>
                                <!-- End col-md-12 -->

                                <div class="col-md-12 text-center">
                                    <a href="#" class="btn btn-success btn-edit" style="" id="edit-img-1" onclick="return false;"><i class="fa fa-pencil"> Edit</i></a>
                                    <a href="#" class="btn btn-success btn-edit" style="display:none;" id="save-img-1" onclick="return false;"><i class="fa fa-save"> Save </i> </a>
                                    <a href="#" class="btn btn-success btn-edit" style="display:none;" id="cancel-img-1" onclick="return false;"><i class="fa fa-times" style=""> Cancel</i> </a>
                                </div>
                                <!-- End col-md-12 text-center -->
                            </div>
                            <!-- End row -->
                            @endrole
                        </div>
                        <!-- End animated -->
                    </div>
                    <!-- End col-lg-7 order-last -->

                    <div class="col-lg-5 text-center text-lg-left res-m-bttm">
                        <div class="text-block" id="txt-about-2">
                            <h2 class="animated" data-animate="fadeInUp" data-delay=".1">
                                {!!
                                    LandingPageContent::getJsonData('about_2', 'about_2', 'title')
                                !!}
                            </h2>

                            <p class="lead animated" data-animate="fadeInUp" data-delay=".2">
                                <strong>
                                    {!!
                                        LandingPageContent::getJsonData('about_2', 'about_2', 'content_0')
                                    !!}
                                </strong>
                            </p>

                            <p class="animated" data-animate="fadeInUp" data-delay=".3">
                                {!!
                                    LandingPageContent::getJsonData('about_2', 'about_2', 'content_1')
                                !!}
                            </p>

                            <p class="animated" data-animate="fadeInUp" data-delay=".4">
                                {!!
                                    LandingPageContent::getJsonData('about_2', 'about_2', 'content_2')
                                !!}
                            </p>
                        </div>
                        <!-- End text-block -->

                    @role('administrator')
                        <div class="row">
                            <div class="col-md-12 text-center">
                                <a href="#" class="btn btn-success btn-edit" style="" id="edit-about-2" onclick="return false;"><i class="fa fa-pencil"> Edit</i></a>
                                <a href="#" class="btn btn-success btn-edit" style="display:none;" id="save-about-2" onclick="return false;"><i class="fa fa-save"> Save </i> </a>
                                <a href="#" class="btn btn-success btn-edit" style="display:none;" id="cancel-about-2" onclick="return false;"><i class="fa fa-times" style=""> Cancel</i> </a>
                            </div>
                            <!-- End col-md-12 text-center -->
                        </div>
                        <!-- End role -->
                    @endrole
                    </div>
                    <!-- End col-lg-5 text-center text-lg-left res-m-bttm -->
                </div>
                <!-- End row  align-items-center -->
            </div>
            <!-- End container -->
    </div>
    <!-- End section section-pad section-bg -->


    <!-- Start Problem & solution Section -->
    <div class="section section-pad prblmsltn-section section-bg-alt" id="benifits">
        <div class="ui-shape ui-shape-s2"></div>
            <div class="container">
                <div class="row justify-content-center text-center">
	                <div class="col-md-6 col-sm-8">
	                    <div class="section-head-s7" id="txt-beneffit">
	                        <h2 class="section-title-s7 animated" data-animate="fadeInUp" data-delay=".1">
                            {!!
                                LandingPageContent::getJsonData('beneffit', 'beneffit', 'title')
                            !!}
                            </h2>

                            <p class="animated" data-animate="fadeInUp" data-delay=".2">
                                {!!
                                    LandingPageContent::getJsonData('beneffit', 'beneffit', 'content')
                                !!}
                            </p>
                        </div>
                        <!-- End section-head-s7 -->

                    @role('administrator')
                        <div class="row">
                            <div class="col-md-12 text-center" style="margin-bottom:20px;">
                                <a href="#" class="btn btn-success btn-edit" style="" id="edit-beneffit" onclick="return false;"><i class="fa fa-pencil"> Edit</i></a>
                                <a href="#" class="btn btn-success btn-edit" style="display:none;" id="save-beneffit" onclick="return false;"><i class="fa fa-save"> Save </i> </a>
                                <a href="#" class="btn btn-success btn-edit" style="display:none;" id="cancel-beneffit" onclick="return false;"><i class="fa fa-times" style=""> Cancel</i> </a>
                            </div>
                            <!-- End col-md-12 -->
                        </div>
                        <!-- End role -->
                    @endrole
                    </div>
                    <!-- End col-md-6 col-sm-8 -->
                </div>
                <!-- End row justify-content-center text-center -->

                <div class="prblmsltn-list">
                    <div class="prblmsltn-item">
                        <div class="row">
                            <div class="col-md-6 col-sm-12 animate-left delay-5ms">
                                <div class="prblm-item">
                                    <h2 class="prblm-title">Problem</h2>
                                    <h5 class="prblm-subtitle">Centralize Network</h5>
                                    <ul class="prblm-points">
                                        <li>What is the crypto tech? Lorem ipsum dolor sit amet, consectetur.</li>
                                        <li>Natural Language Understanding</li>
                                        <li>How to network with other investors / like-minded people?</li>
                                    </ul>
                                </div>
                                <!-- End prblm-item -->
                            </div>
                            <!-- End col-md-6 col-sm-12 animate-left delay-5ms -->

                            <div class="col-md-6 col-sm-12 animate-right delay-7ms">
                                <div class="sltn-item">
                                    <h2 class="sltn-title">Solution</h2>
                                    <h5 class="sltn-subtitle">Decentralize Network</h5>
                                    <ul class="sltn-points">
                                        <li>What is the crypto tech? Lorem ipsum dolor sit amet, consectetur.</li>
                                        <li>Natural Language Understanding</li>
                                        <li>How to network with other investors / like-minded people?</li>
                                    </ul>
                                </div>
                                <!-- End sltn-item -->
                            </div>
                            <!-- End col-md-6 col-sm-12 animate-right delay-7ms -->
                        </div>
                        <!-- End row -->
                    </div>
                    <!-- End prblmsltn-item -->

                    <div class="prblmsltn-item">
                        <div class="row">
                            <div class="col-md-6 col-sm-12 animate-left delay-5ms">
                                <div class="prblm-item">
                                    <h2 class="prblm-title">Problem</h2>
                                    <h5 class="prblm-subtitle">Centralize Network</h5>
                                    <ul class="prblm-points">
                                        <li>What is the crypto tech? Lorem ipsum dolor sit amet, consectetur.</li>
                                        <li>Natural Language Understanding</li>
                                        <li>How to network with other investors / like-minded people?</li>
                                    </ul>
                                </div>
                                <!-- End prblm-item -->
                            </div>
                            <!-- End col-md-6 col-sm-12 animate-left delay-5ms -->

                            <div class="col-md-6 col-sm-12 animate-right delay-7ms">
                                <div class="sltn-item">
                                    <h2 class="sltn-title">Solution</h2>
                                    <h5 class="sltn-subtitle">Decentralize Network</h5>
                                    <ul class="sltn-points">
                                        <li>What is the crypto tech? Lorem ipsum dolor sit amet, consectetur.</li>
                                        <li>Natural Language Understanding</li>
                                        <li>How to network with other investors / like-minded people?</li>
                                    </ul>
                                </div>
                                <!-- End sltn-item -->
                            </div>
                            <!-- End col-md-6 col-sm-12 animate-right delay-7ms -->
                        </div>
                        <!-- End row -->
                    </div>
                    <!-- End prblmsltn-item -->
                </div>
                <!-- End prblmsltn-list -->
            </div>
            <!-- End container -->
    </div>
    <!-- End section section-pad prblmsltn-section section-bg-alt -->


    <!-- Start Section -->
	<div class="section section-pad token-sale-section section-bg-zinnia" id="tokenSale">
	    <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-md-6">
                    <div class="section-head-s7">
                        <h2 class="section-title-s7 animated" data-animate="fadeInUp" data-delay=".1">EAST Tokens Details</h2>
                    </div>
                    <!-- End section-head-s7 -->
                </div>
                <!-- End col-md-6 -->
            </div>
            <!-- End row justify-content-center text-center -->
        </div>
        <!-- End container -->

        <div class="container">
            <div class="tokdis-list">
                <div class="row text-center text-lg-left">
                    <div class="col-md">
                        <div class="tokdis-item animated" id="txt-token-1" data-animate="fadeInUp" data-delay=".2">
                            <span>
                                {!!
                                    LandingPageContent::getJsonData('token_1', 'token_1', 'txt_2')
                                !!}
                            </span>
                            <h5>{!!
                                LandingPageContent::getJsonData('token_1', 'token_1', 'txt_1')
                            !!}</h5>
                        </div>
                        <!-- End tokdis-item animated -->

                        @role('administrator')
                        <div class="row">
                            <div class="col-md-12">
                                <a href="#" class="btn btn-success btn-edit" style="" id="edit-token-1" onclick="return false;"><i class="fa fa-pencil"> Edit</i></a>
                                <a href="#" class="btn btn-success btn-edit" style="display:none;" id="save-token-1" onclick="return false;"><i class="fa fa-save"> Save </i> </a>
                                <a href="#" class="btn btn-success btn-edit" style="display:none;" id="cancel-token-1" onclick="return false;"><i class="fa fa-times" style=""> Cancel</i> </a>
                            </div>
                            <!-- End col-md-12 -->
                        </div>
                        <!-- End row -->
                        @endrole
                    </div>
                    <!-- End col-md -->

                    <div class="col-md">
                        <div class="tokdis-item animated" id="txt-token-2" data-animate="fadeInUp" data-delay=".3">
                            <span>
                                {!!
                                    LandingPageContent::getJsonData('token_2', 'token_2', 'txt_2')
                                !!}
                            </span>
                            <h5>{!!
                                LandingPageContent::getJsonData('token_2', 'token_2', 'txt_1')
                            !!}</h5>
                        </div>
                        <!-- End tokdis-item animated -->
                        @role('administrator')
                        <div class="row">
                            <div class="col-md-12">
                                <a href="#" class="btn btn-success btn-edit" style="" id="edit-token-2" onclick="return false;"><i class="fa fa-pencil"> Edit</i></a>
                                <a href="#" class="btn btn-success btn-edit" style="display:none;" id="save-token-2" onclick="return false;"><i class="fa fa-save"> Save </i> </a>
                                <a href="#" class="btn btn-success btn-edit" style="display:none;" id="cancel-token-2" onclick="return false;"><i class="fa fa-times" style=""> Cancel</i> </a>
                            </div>
                            <!-- End col-md-12 -->
                        </div>
                        <!-- End row -->
                        @endrole
                    </div>
                    <!-- End col-md -->

                    <div class="col-md">
                        <div class="tokdis-item animated" id="txt-token-3" data-animate="fadeInUp" data-delay=".4">
                            <span>
                                {!!
                                    LandingPageContent::getJsonData('token_3', 'token_3', 'txt_2')
                                !!}
                            </span>
                            <h5>{!!
                                LandingPageContent::getJsonData('token_3', 'token_3', 'txt_1')
                            !!}</h5>
                        </div>
                        <!-- End tokdis-item animated -->
                        @role('administrator')
                        <div class="row">
                            <div class="col-md-12">
                                <a href="#" class="btn btn-success btn-edit" style="" id="edit-token-3" onclick="return false;"><i class="fa fa-pencil"> Edit</i></a>
                                <a href="#" class="btn btn-success btn-edit" style="display:none;" id="save-token-3" onclick="return false;"><i class="fa fa-save"> Save </i> </a>
                                <a href="#" class="btn btn-success btn-edit" style="display:none;" id="cancel-token-3" onclick="return false;"><i class="fa fa-times" style=""> Cancel</i> </a>
                            </div>
                            <!-- End col-md-12 -->
                        </div>
                        <!-- End row -->
                        @endrole
                    </div>
                    <!-- End col-md -->

                    <div class="col-lg-4">
                        <div class="tokdis-item animated" id="txt-token-4" data-animate="fadeInUp" data-delay=".5">
                            <span>
                                {!!
                                    LandingPageContent::getJsonData('token_4', 'token_4', 'txt_2')
                                !!}
                            </span>
                            <h5>{!!
                                LandingPageContent::getJsonData('token_4', 'token_4', 'txt_1')
                            !!}</h5>
                        </div>
                        <!-- End col-lg-4 -->
                        @role('administrator')
                        <div class="row">
                            <div class="col-md-12">
                                <a href="#" class="btn btn-success btn-edit" style="" id="edit-token-4" onclick="return false;"><i class="fa fa-pencil"> Edit</i></a>
                                <a href="#" class="btn btn-success btn-edit" style="display:none;" id="save-token-4" onclick="return false;"><i class="fa fa-save"> Save </i> </a>
                                <a href="#" class="btn btn-success btn-edit" style="display:none;" id="cancel-token-4" onclick="return false;"><i class="fa fa-times" style=""> Cancel</i> </a>
                            </div>
                            <!-- End col-md-12 -->
                        </div>
                        <!-- End rol -->
                        @endrole
                    </div>
                    <!-- End col-lg-4 -->
                </div>
                <!-- End row text-center text-lg-left -->
            </div>
            <!-- End tokdis-list -->
        </div>
        <!-- End container -->

        <div class="gaps size-2x d-none d-md-block"></div>
        <div class="gaps size-2x"></div>

        <div class="toktmln-list">
            <div class="container">
                <div class="row">
                    <div class="col-lg">
                        <div class="toktmln-item animated" data-animate="fadeInUp" data-delay=".6">
                            <div>
                                <span>Token Sale I</span>
                                <span>January 15- February 15</span>
                            </div>
                            <div>
                                <span>67% Bonus</span>
                                <span>$0.354344/token</span>
                            </div>
                        </div>
                        <!-- End toktmln-item animated -->
                    </div>
                    <!-- End col-lg -->

                    <div class="col-lg">
                        <div class="toktmln-item animated" data-animate="fadeInUp" data-delay=".7">
                            <div>
                                <span>Token Sale II</span>
                                <span>March 01 - March 15</span>
                            </div>
                            <div>
                                <span>40% Bonus</span>
                                <span>$0.354344/token</span>
                            </div>
                        </div>
                        <!-- End toktmln-item animated -->
                    </div>
                    <!-- End col-lg -->

                    <div class="col-lg">
                        <div class="toktmln-item animated" data-animate="fadeInUp" data-delay=".8">
                            <div>
                                <span>Token Sale III</span>
                                <span>March 25- April 15</span>
                            </div>
                            <div>
                                <span>20% Bonus</span>
                                <span>$0.354344/token</span>
                            </div>
                        </div>
                        <!-- End toktmln-item animated -->
                    </div>
                    <!-- End col-lg -->

                    <div class="col-lg">
                        <div class="toktmln-item animated" data-animate="fadeInUp" data-delay=".9">
                            <div>
                                <span>Token Sale VI</span>
                                <span>April 20- May 20</span>
                            </div>
                            <div>
                                <span>50% Bonus</span>
                                <span>$0.304344/token</span>
                            </div>
                        </div>
                        <!-- End toktmln-item animated -->
                    </div>
                    <!-- End col-lg -->

                    <div class="col-lg">
                        <div class="toktmln-item animated" data-animate="fadeInUp" data-delay="1">
                            <div>
                                <span>Token Sale V</span>
                                <span>June 01 - July 30</span>
                            </div>
                            <div>
                                <span>30% Bonus</span>
                                <span>$0.354344/token</span>
                            </div>
                        </div>
                        <!-- End toktmln-item animated -->
                        <div>
                        </div>
                    </div>
                    <!-- End col-lg -->
                </div>
                <!-- End row -->
            </div>
            <!-- end container -->
        </div>
        <!-- End toktmln-list -->

    </div>
	<!-- End Section -->

    <!-- Start Section -->
	<div class="section section-pad token-alocate-section section-bg" id="tokenAlocate">
        <div class="ui-shape ui-shape-s3"></div>
	        <div class="container">
                <div class="row justify-content-center text-center">
                    <div class="col-md-6">
                        <div class="section-head-s7">
                            <h2 class="section-title-s7 animated" data-animate="fadeInUp" data-delay=".1">Token Allocation Forecast</h2>
                        </div>
                        <!-- End section-head-s7 -->
                    </div>
                    <!-- end col-md-6 -->
                </div>
                <!-- End row justify-content-center text-center -->

                <div class="tab-s4">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs text-center animated" data-animate="fadeInUp" data-delay=".2">
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#tab-dist">Distribution </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#tab-fund">Funding Allocation</a>
                        </li>
                    </ul>
                    <!-- End nav nav-tabs -->

                    <div class="gaps size-2x"></div>
                    <div class="gaps size-3x d-none d-xl-block"></div>

                    <!-- Tab panes -->
                    <div class="tab-content animated" data-animate="fadeInUp" data-delay=".3">
                        <div class="tab-pane animate" id="tab-dist">
                            <div class="tkn-crt">
                                <div class="tkn-crt-img">
                                    <img src="{{asset('landingpage/images/zinnia/chart-zinnia-a.png')}}" alt="chart">
                                </div>
                                <!-- End tkn-crt-img -->

                                <ul class="tkn-crt-lst">
                                    <li class="tkn-crt-itm">
                                        <span class="tkn-crt-prcnt one"><span>60%</span></span><span class="tkn-crt-ttl">Token Sale Program</span>
                                    </li>

                                    <li class="tkn-crt-itm">
                                        <span class="tkn-crt-prcnt two"><span>8%</span></span><span class="tkn-crt-ttl">Reserve Fund</span>
                                    </li>

                                    <li class="tkn-crt-itm">
                                        <span class="tkn-crt-prcnt three"><span>15%</span></span><span class="tkn-crt-ttl">Team and Founders</span>
                                    </li>

                                    <li class="tkn-crt-itm">
                                        <span class="tkn-crt-prcnt four"><span>4%</span></span><span class="tkn-crt-ttl">Board Advisors</span>
                                    </li>

                                    <li class="tkn-crt-itm">
                                        <span class="tkn-crt-prcnt five"><span>7%</span></span><span class="tkn-crt-ttl">Ecosystem Development</span>
                                    </li>

                                    <li class="tkn-crt-itm">
                                        <span class="tkn-crt-prcnt five"><span>6%</span></span><span class="tkn-crt-ttl">Marketing and Bounty</span>
                                    </li>
                                </ul>
                                <!-- End tln-crt-lst ul -->
                            </div>
                            <!-- End tkn-crt -->
                        </div>
                        <!-- End tab-pane animated -->

                        <div class="tab-pane animate active show" id="tab-fund">
                            <div class="tkn-crt">
                                <div class="tkn-crt-img">
                                    <img src="{{asset('landingpage/images/zinnia/chart-zinnia-b.png')}}" alt="chart">
                                </div>
                                <!-- End tkn-crt-img -->

                                <ul class="tkn-crt-lst">
                                    <li class="tkn-crt-itm">
                                        <span class="tkn-crt-prcnt one"><span>40%</span></span><span class="tkn-crt-ttl">Product Develoment</span>
                                    </li>

                                    <li class="tkn-crt-itm">
                                        <span class="tkn-crt-prcnt two"><span>12%</span></span><span class="tkn-crt-ttl">Business Development</span>
                                    </li>

                                    <li class="tkn-crt-itm">
                                        <span class="tkn-crt-prcnt three"><span>20%</span></span><span class="tkn-crt-ttl">Marketing</span>
                                    </li>

                                    <li class="tkn-crt-itm">
                                        <span class="tkn-crt-prcnt four"><span>10%</span></span><span class="tkn-crt-ttl">Legal &amp; Regulation</span>
                                    </li>

                                    <li class="tkn-crt-itm">
                                        <span class="tkn-crt-prcnt five"><span>6%</span></span><span class="tkn-crt-ttl">Partner/Investor</span>
                                    </li>

                                    <li class="tkn-crt-itm">
                                        <span class="tkn-crt-prcnt six"><span>8%</span></span><span class="tkn-crt-ttl">Operational</span>
                                    </li>

                                    <li class="tkn-crt-itm">
                                        <span class="tkn-crt-prcnt seven"><span>4%</span></span><span class="tkn-crt-ttl">Contingency</span>
                                    </li>
                                </ul>
                                <!-- End tkn-crt-lst -->
                            </div>
                            <!-- End tkn-crt -->
                        </div>
                        <!-- End tab-content animated -->

                    </div>
                    <!-- End tab-content animated -->
                </div>
                <!-- End tab-custom-s4 -->
            </div>
            <!-- End container -->
    </div>
	<!-- End section section-pad token-alocate-section section-bg -->


	<!-- WhitePaper Section-pad -->
	<div class="section section-pad document-section section-bg-zinnia" id="documents">
	    <div class="container">
	        <div class="row justify-content-between align-items-center">
	            <div class="col-lg-5 res-m-bttm">
	                <div class="document-img-s3 animated" data-animate="fadeInUp" data-delay=".1">
	                    <img src="{{asset('landingpage/images/zinnia/documents-cover.png')}}" alt="documents">
	                </div>
                    <!-- End document-img-s3 -->
	            </div>
                <!-- End col-lg-5 res-m-bttm -->

	            <div class="col-lg-7 text-center text-lg-left">
	                <div class="section-head-s7">
                        <h2 class="section-title-s7 animated" data-animate="fadeInUp" data-delay=".2">Read Our Documents</h2>
                        <p class="animated" data-animate="fadeInUp" data-delay=".3">Here is our full documents that help you to understand about us.</p>
                    </div>
                    <!-- End section-head-s7 -->

                    <ul class="document-list">
                        <li class="animated" data-animate="fadeInUp" data-delay=".4">
                            <a href="#" class="btn btn-outline btn-dropdown" data-toggle="dropdown">White Paper <i class="fas fa-caret-down"></i></a>
                            <ul class="dropdown-menu dropdown-menu-right">
                                <li><a href="#">English</a></li>
                                <li><a href="#">Bahasa</a></li>
                                <li><a href="#">Russian</a></li>
                                <li><a href="#">Korea</a></li>
                            </ul>
                            <!-- End dropdown-menu dropdown-menu-right -->
                        </li>

                        <li class="animated" data-animate="fadeInUp" data-delay=".5">
                            <a href="#" class="btn btn-outline btn-dropdown" data-toggle="dropdown">One Pager <i class="fas fa-caret-down"></i></a>
                            <ul class="dropdown-menu dropdown-menu-right">
                                <li><a href="#">English</a></li>
                                <li><a href="#">Bahasa</a></li>
                                <li><a href="#">Russian</a></li>
                                <li><a href="#">Korea</a></li>
                            </ul>
                            <!-- End dropdown-menu dropdown-menu-right -->
                        </li>
<!--
                        <li class="animated" data-animate="fadeInUp" data-delay=".6"><a href="#" class="btn btn-outline">Privacy &amp; Policy</a></li>
                        <li class="animated" data-animate="fadeInUp" data-delay=".7"><a href="#" class="btn btn-outline">Terms of Coin Sale</a></li>
-->
                    </ul>
                    <!-- End document-list -->
	            </div>
                <!-- endcol-lg-7 text-center text-lg-left -->
	        </div>
            <!-- End row justify-content-between align-items-center -->
	    </div>
        <!-- End container -->
	</div>
	<!-- End section section-pad document-section section-bg-zinnia -->


	<!-- Technology Service Section -->
	<div class="section section-pad services-section section-bg" id="services">
        <div class="ui-shape ui-shape-s4"></div>
	        <div class="container">
                <div class="row justify-content-center text-center">
                    <div class="col-lg-6 col-sm-8">
                        <div class="section-head-s7" id="txt-token-11">
                            <h2 class="section-title-s7 animated" data-animate="fadeInUp" data-delay=".1">{!!
                                LandingPageContent::getJsonData('token_11', 'token_11', 'title')
                                !!}
                            </h2>
                            <p class="animated" data-animate="fadeInUp" data-delay=".2">{!!
                                LandingPageContent::getJsonData('token_11', 'token_11', 'content')
                                !!}
                            </p>
                        </div>
                        <!-- End section-head-s7 -->

                    @role('administrator')
                        <div class="row">
                            <div class="col-md-12 text-center" style="margin-bottom:20px;">
                                <a href="#" class="btn btn-success btn-edit" style="" id="edit-token-11" onclick="return false;"><i class="fa fa-pencil"> Edit</i></a>
                                <a href="#" class="btn btn-success btn-edit" style="display:none;" id="save-token-11" onclick="return false;"><i class="fa fa-save"> Save </i> </a>
                                <a href="#" class="btn btn-success btn-edit" style="display:none;" id="cancel-token-11" onclick="return false;"><i class="fa fa-times" style=""> Cancel</i> </a>
                            </div>
                            <!-- End col-md-12 text-center -->
                        </div>
                        <!-- End row -->
                    @endrole
                    </div>
                    <!-- End col-lg-6 col-sm-8 -->
	            </div>
                <!-- End row justify-content-center text-center -->

                <div class="row align-items-center">
                    <div class="col-lg-7 res-m-bttm">
                        <div class="row justify-content-between text-center text-lg-left">
                            <div class="col-xl-5 col-md-6">
                                <div class="service-item animated" data-animate="fadeInUp" data-delay=".4" id="txt-token-21">
                                    <div class="service-icon mx-auto mx-lg-0">
                                        <img src="{{asset('landingpage/images/zinnia/service-icon-a.png')}}" alt="icon">
                                    </div>
                                    <!-- End service-icon mx-auto mx-lg-0 -->

                                    <h5 class="service-title">{!!
                                        LandingPageContent::getJsonData('token_21', 'token_21', 'title')
                                    !!}</h5>
                                    <p>{!!
                                        LandingPageContent::getJsonData('token_21', 'token_21', 'content')
                                    !!}</p>
                                </div>
                                <!-- End service-icon mx-auto mx-lg-0 -->
                            @role('administrator')

                                <div class="row">
                                    <div class="col-md-12 text-center" style="margin-bottom:30px;">
                                        <a href="#" class="btn btn-success btn-edit" style="" id="edit-token-21" onclick="return false;"><i class="fa fa-pencil"> Edit</i></a>
                                        <a href="#" class="btn btn-success btn-edit" style="display:none;" id="save-token-21" onclick="return false;"><i class="fa fa-save"> Save </i> </a>
                                        <a href="#" class="btn btn-success btn-edit" style="display:none;" id="cancel-token-21" onclick="return false;"><i class="fa fa-times" style=""> Cancel</i> </a>
                                    </div>
                                    <!-- End col-md-12 text-center -->
                                </div>
                                <!-- End role -->
                            @endrole
	                        </div>
                            <!-- End col-xl-5 col-md-6 -->

                            <div class="col-xl-5 col-md-6">
                                <div class="service-item animated" data-animate="fadeInUp" data-delay=".5" id="txt-token-22">
                                    <div class="service-icon mx-auto mx-lg-0">
                                        <img src="{{asset('landingpage/images/zinnia/service-icon-b.png')}}" alt="icon">
                                    </div>
                                    <!-- End service-item animated -->
                                    <h5 class="service-title">{!!
                                        LandingPageContent::getJsonData('token_22', 'token_22', 'title')
                                    !!}</h5>
                                    <p>{!!
                                        LandingPageContent::getJsonData('token_22', 'token_22', 'content')
                                    !!}</p>
                                </div>
                                <!-- End service-item animated -->

                            @role('administrator')
                                <div class="row">
                                    <div class="col-md-12 text-center">
                                        <a href="#" class="btn btn-success btn-edit" style="" id="edit-token-22" onclick="return false;"><i class="fa fa-pencil"> Edit</i></a>
                                        <a href="#" class="btn btn-success btn-edit" style="display:none;" id="save-token-22" onclick="return false;"><i class="fa fa-save"> Save </i> </a>
                                        <a href="#" class="btn btn-success btn-edit" style="display:none;" id="cancel-token-22" onclick="return false;"><i class="fa fa-times" style=""> Cancel</i> </a>
                                    </div>
                                    <!-- End col-md-12 text-center -->
                                </div>
                                <!-- End row -->
                            @endrole
	                        </div>
                            <!-- End col-xl-5 col-md-6 -->

                            <div class="col-xl-5 col-md-6">
                                <div class="service-item animated" data-animate="fadeInUp" data-delay=".6" id="txt-token-23">
                                    <div class="service-icon mx-auto mx-lg-0">
                                        <img src="{{asset('landingpage/images/zinnia/service-icon-c.png')}}" alt="icon">
                                    </div>
                                    <!-- End service-icon mx-auto mx-lg-0 -->
                                    <h5 class="service-title">{!!
                                        LandingPageContent::getJsonData('token_23', 'token_23', 'title')
                                    !!}</h5>
                                    <p>{!!
                                        LandingPageContent::getJsonData('token_23', 'token_23', 'content')
                                    !!}</p>
                                </div>
                                <!-- End service-item animated -->
                                @role('administrator')

                                <div class="row">
                                    <div class="col-md-12 text-center">
                                        <a href="#" class="btn btn-success btn-edit" style="" id="edit-token-23" onclick="return false;"><i class="fa fa-pencil"> Edit</i></a>
                                        <a href="#" class="btn btn-success btn-edit" style="display:none;" id="save-token-23" onclick="return false;"><i class="fa fa-save"> Save </i> </a>
                                        <a href="#" class="btn btn-success btn-edit" style="display:none;" id="cancel-token-23" onclick="return false;"><i class="fa fa-times" style=""> Cancel</i> </a>
                                    </div>
                                    <!-- End col-md-12 -->
                                </div>
                                <!-- End row -->
                                @endrole
	                        </div>
                            <!-- End col-xl-5 col-md-6 -->

                            <div class="col-xl-5 col-md-6">
                                <div class="service-item animated" data-animate="fadeInUp" data-delay=".7" id="txt-token-24">
                                    <div class="service-icon mx-auto mx-lg-0">
                                        <img src="{{asset('landingpage/images/zinnia/service-icon-d.png')}}" alt="icon">
                                    </div>
                                    <!-- End service-icon mx-auto mx-lg-0 -->
                                    <h5 class="service-title">{!!
                                        LandingPageContent::getJsonData('token_24', 'token_24', 'title')
                                    !!}</h5>
                                    <p>{!!
                                        LandingPageContent::getJsonData('token_24', 'token_24', 'content')
                                    !!}</p>
                                </div>
                                <!-- End service-item animated -->
                                @role('administrator')

                                <div class="row">
                                    <div class="col-md-12 text-center">
                                        <a href="#" class="btn btn-success btn-edit" style="" id="edit-token-24" onclick="return false;"><i class="fa fa-pencil"> Edit</i></a>
                                        <a href="#" class="btn btn-success btn-edit" style="display:none;" id="save-token-24" onclick="return false;"><i class="fa fa-save"> Save </i> </a>
                                        <a href="#" class="btn btn-success btn-edit" style="display:none;" id="cancel-token-24" onclick="return false;"><i class="fa fa-times" style=""> Cancel</i> </a>
                                    </div>
                                    <!-- End col-md-12 -->
                                </div>
                                <!-- End rol -->
                                @endrole
	                        </div>
                            <!-- End col-xl-5 col-md-6 -->
	                    </div>
                        <!-- End row justify-content-between text-center text-lg-left -->

                        <!-- Start btns text-center -->
                        <ul class="btns text-center text-lg-left animated" data-animate="fadeInUp" data-delay=".8">
                            <li><a href="#" class="btn btn-sm">Download Now</a></li>
                            <li>
                                <a href="#"><em class="fab fa-apple"></em></a>
                                <a href="#"><em class="fab fa-android"></em></a>
                                <a href="#"><em class="fab fa-windows"></em></a>
                            </li>
                        </ul>
                        <!-- End btns text-center text-lg-left animated -->

	                </div>
                    <!-- End col-lg-7 res-m-bttm -->

                    <div class="col-lg-5 order-first order-lg-last res-m-bttm">
                        <div class="service-img animated" data-animate="fadeInUp" data-delay=".3">
                            <img src="{{asset('landingpage/images/zinnia/app-screen2.png')}}" alt="app-screen">
                        </div>
                        <!-- End col-lg-5 order-first order-lg-last res-m-bttm -->
                    </div>
                    <!-- End col-lg-5 order-first order-lg-last res-m-bttm -->

	            </div><!-- End row align-items-center -->

	        </div>
            <!-- End container -->

	</div>
	<!-- End section section-pad services-section section-bg -->

	<!-- Roadmap Section -->
	<div class="section section-pad roadmap-section section-bg-zinnia" id="roadmap">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-md-12">
                     <div class="section-head-s7">
                        <!-- <h2 class="section-title-s7 animated" data-animate="fadeInUp" data-delay=".1">Roadmap</h2> -->
                        <img src="{{asset('landingpage/images/roadmap.png')}}">
                    </div>
                    <!-- End Section-head-s7 -->
	            </div>
                <!-- End col-md-6 -->
	        </div>
        </div>
        <!-- End container -->
    </div>
    <!-- End section section-pad roadmap-section section-bg-zinnia -->


	<!-- Team Section -->
	<div class="section section-pad section-bg" id="team">
        <div class="ui-shape ui-shape-s5"></div>
            <div class="container">
                <div class="row justify-content-center text-center">
                    <div class="col-xl-6 col-lg-8">
                        <div class="section-head-s7" id="txt-team">
                            <h2 class="section-title-s7 animated" data-animate="fadeInUp" data-delay=".1">{!!
                                LandingPageContent::getJsonData('team', 'team', 'title')
                            !!}</h2>
                            <p class="animated" data-animate="fadeInUp" data-delay=".2">{!!
                                LandingPageContent::getJsonData('team', 'team', 'content')
                            !!}</p>
                        </div>
                        <!-- End section-head-s7 -->

                        @role('administrator')
                        <div class="row" style="">
                            <div class="col-md-12 text-center" style="margin-bottom:40px;">
                                <a href="#" class="btn btn-success btn-edit" style="" id="edit-team" onclick="return false;"><i class="fa fa-pencil"> Edit</i></a>
                                <a href="#" class="btn btn-success btn-edit" style="display:none;" id="save-team" onclick="return false;"><i class="fa fa-save"> Save </i> </a>
                                <a href="#" class="btn btn-success btn-edit" style="display:none;" id="cancel-team" onclick="return false;"><i class="fa fa-times" style=""> Cancel</i> </a>
                            </div>
                            <!-- End col-md-12 -->
                        </div>
                        <!-- End row -->
                        @endrole
                    </div>
                    <!-- End col-xl-6 col-lg-8 -->
                </div>
                <!-- End row justify-content-center text-center -->

                <div class="row justify-content-center text-center">
                    <div class="col-sm-6 col-lg-3">
                        <div class="team-circle animated" data-animate="fadeInUp" data-delay=".3">
                            <div class="team-photo">
                                <img src="{{asset('landingpage/images/team-walter.jpg')}}" alt="" />
                                <a href="#team-profile-1" class="expand-trigger content-popup"></a>
                            </div>
                            <!-- End team-photo -->

                            <div class="team-info">
                                <h5 class="team-name">Walter Kaminski</h5>
                                <span class="team-title">CEO</span>
                                <ul class="team-social">
                                    <li><a href=""><em class="fab fa-facebook-f"></em></a></li>
                                    <li><a href=""><em class="fab fa-linkedin-in"></em></a></li>
                                    <li><a href=""><em class="fab fa-twitter"></em></a></li>
                                </ul>
                            </div>
                            <!-- End team-photo -->

                            <!-- Start .team-profile  -->
                            <div id="team-profile-1" class="team-profile mfp-hide">
                                <button title="Close" type="button" class="mfp-close">×</button>
                                <div class="container-fluid">
                                    <div class="row no-mg">
                                        <div class="col-md-6">
                                            <div class="team-profile-photo">
                                                <img src="{{asset('landingpage/images/team-walter.jpg')}}" alt="" />
                                            </div>
                                            <!-- End team-progilr-photo -->
                                        </div>
                                        <!-- End col-md-6  -->

                                        <div class="col-md-6">
                                            <div class="team-profile-info">
                                                <h3 class="name">Walter Kaminski</h3>
                                                <p class="sub-title">CEO</p>
                                                <ul class="tpi-social">
                                                    <li><a href=""><em class="fab fa-facebook-f"></em></a></li>
                                                    <li><a href=""><em class="fab fa-linkedin-in"></em></a></li>
                                                    <li><a href=""><em class="fab fa-twitter"></em></a></li>
                                                </ul>
                                                <p>is a career professional who brings a wealth of experience in Medical & Healthcare, Leisure & Lifestyle including Gaming and Casinos, Commercial Agriculture Mainly Crude Palm Oil, Livestock Breeding and Aqt1aculture. Transport Logistic both Freight and Passengers (Ground and Aviation), Mining and Mineral processing, IT Solutions including Financial Technology,Block-chain and Crypto tokens, Telecom munication and Media, Capital Markets. Infrastructure including Toll Roads, Airports and Power Generations (Coal Fire Gas Turbine and Renew-ables) Oil & Gas and Property Development  & Construction.
                                                </p>
                                                <p>He has successfully managed, advised and directed public and private companies on debt and equity financing, mergers and acquisitions and corporate restructuring. </p>
                                            </div>
                                            <!-- End team-profile-info -->
                                        </div><!-- End col-md-6  -->

                                    </div>
                                    <!-- End row no-mg  -->
                                </div>
                                <!-- End container-fluid  -->
                            </div>
                            <!-- End team-profile-1  -->

                        </div>
                        <!-- End team-circle animated -->
                    </div>
                    <!-- End col-sm-6 col-lg-3  -->

                    <div class="col-sm-6 col-lg-3">
                        <div class="team-circle animated" data-animate="fadeInUp" data-delay=".4">
                            <div class="team-photo">
                                <img src="{{asset('landingpage/images/team-iliya.jpeg')}}" alt="team">
                                <a href="#team-profile-2" class="expand-trigger content-popup"></a>
                            </div>
                            <!-- End team-photo -->

                            <div class="team-info">
                                <h5 class="team-name">Iliya Bugaev</h5>
                                <span class="team-title">CTO</span>
                                <ul class="team-social">
                                    <li><a href=""><em class="fab fa-facebook-f"></em></a></li>
                                    <li><a href=""><em class="fab fa-linkedin-in"></em></a></li>
                                    <li><a href=""><em class="fab fa-twitter"></em></a></li>
                                </ul>
                            </div>
                            <!-- End team-photo -->

                            <!-- Start .team-profile  -->
                            <div id="team-profile-2" class="team-profile mfp-hide">
                                <button title="Close" type="button" class="mfp-close">×</button>
                                <div class="container-fluid">
                                    <div class="row no-mg">
                                        <div class="col-md-6">
                                            <div class="team-profile-photo">
                                                <img src="{{asset('landingpage/images/team-iliya.jpeg')}}" alt="team" />
                                            </div>
                                            <!-- End team-profile -->
                                        </div>
                                        <!-- End col-md-6  -->

                                        <div class="col-md-6">
                                            <div class="team-profile-info">
                                                <h3 class="name">Iliya Bugaev</h3>
                                                <p class="sub-title">CTO</p>
                                                <ul class="tpi-social">
                                                    <li><a href=""><em class="fab fa-facebook-f"></em></a></li>
                                                    <li><a href=""><em class="fab fa-linkedin-in"></em></a></li>
                                                    <li><a href=""><em class="fab fa-twitter"></em></a></li>
                                                </ul>
                                                <p>One of the pioneers and core leaders of blockchain technology and manage the economics/valuation models for various real estate and travel/leisure industries. Drove the blockchain to Rusia Blockchain Association. Versed team development BS, Econimics & Cybernetics, top 5 student nationwide.</p>
                                                <p>Tenetur quos facere magnam volupt ates quas esse Sedrep ell endus mole stiae tates quas esse Sed repell endus molesti aela uda ntium quis quam iusto minima thanks.</p>
                                            </div>
                                            <!-- End team-profile-info -->
                                        </div>
                                        <!-- End col-md--6 -->

                                    </div>
                                    <!-- End row no-mg  -->
                                </div>
                                <!-- End container-fluid  -->
                            </div>
                            <!-- End team-profile-2  -->

                        </div>
                        <!-- End team-circle animated -->
                    </div>
                    <!-- End col-sm-6 col-lg-3  -->


                    <div class="col-sm-6 col-lg-3">
                        <div class="team-circle animated" data-animate="fadeInUp" data-delay=".5">
                            <div class="team-photo">
                                <img src="{{asset('landingpage/images/team-ruslana.jpeg')}}" alt="team">
                                <a href="#team-profile-3" class="expand-trigger content-popup"></a>
                            </div>
                            <!-- End team-photo -->

                            <div class="team-info">
                                <h5 class="team-name">Ruslana Golunova</h5>
                                <span class="team-title">Team</span>
                                <ul class="team-social">
                                    <li><a href=""><em class="fab fa-facebook-f"></em></a></li>
                                    <li><a href=""><em class="fab fa-linkedin-in"></em></a></li>
                                    <li><a href=""><em class="fab fa-twitter"></em></a></li>
                                </ul>
                            </div>
                            <!-- End team-info -->

                            <!-- Start .team-profile  -->
                            <div id="team-profile-3" class="team-profile mfp-hide">
                                <button title="Close" type="button" class="mfp-close">×</button>
                                <div class="container-fluid">
                                    <div class="row no-mg">
                                        <div class="col-md-6">
                                            <div class="team-profile-photo">
                                                <img src="{{asset('landingpage/images/team-ruslana.jpeg')}}" alt="team" />
                                            </div>
                                            <!-- End team-profile-photo -->
                                        </div>
                                        <!-- End col-md-6  -->

                                        <div class="col-md-6">
                                            <div class="team-profile-info">
                                                <h3 class="name">Ruslana Golunova</h3>
                                                <p class="sub-title">Team</p>
                                                <ul class="tpi-social">
                                                    <li><a href=""><em class="fab fa-facebook-f"></em></a></li>
                                                    <li><a href=""><em class="fab fa-linkedin-in"></em></a></li>
                                                    <li><a href=""><em class="fab fa-twitter"></em></a></li>
                                                </ul>
                                                <p>Seasoned operation management and global product development and service delivery operation and Russia specializing in the field of software application, focus on blockchain. MA, Advance Project Management, Khabarovsk State University, Standford Center for Professional Development.
                                                </p>
                                            </div>
                                            <!-- End team-profile-info -->
                                        </div>
                                        <!-- End col-md-6  -->

                                    </div>
                                    <!-- End row no-mg  -->
                                </div>
                                <!-- End container-fluid -->
                            </div>
                            <!-- End team-profile-3  -->

                        </div>
                        <!-- End team-circle animated -->
                    </div>
                    <!-- End col-sm-6 col-lg-3 -->
                </div>
                <!-- End row justify-content-center text-center  -->

                <div class="row">
                    <div class="col-md-12">
                        <div class="gaps size-2x"></div>
                        <h3 class="sub-heading ucap animated" data-animate="fadeInUp" data-delay=".7">Advisors</h3>
                        <div class="gaps size-2x"></div>
                    </div>
                    <!-- end col-md-12 -->
                </div>
                <!-- End row -->

                <div class="row justify-content-center text-center">
                    <div class="col-lg-3 col-sm-6">
                        <div class="team-circle animated" data-animate="fadeInUp" data-delay=".8">
                            <div class="team-photo">
                                <img src="{{asset('landingpage/images/team-alex.jpeg')}}" alt="team">
                                <a href="#team-profile-5" class="expand-trigger content-popup"></a>
                            </div>
                            <!-- End team-photo -->

                            <div class="team-info">
                                <h5 class="team-name">Alex Caracao</h5>
                                <span class="team-title">Board Advisor</span>
                                <ul class="team-social">
                                    <li><a href=""><em class="fab fa-facebook-f"></em></a></li>
                                    <li><a href=""><em class="fab fa-linkedin-in"></em></a></li>
                                    <li><a href=""><em class="fab fa-twitter"></em></a></li>
                                </ul>
                            </div>
                            <!-- End team-info -->

                            <!-- Start .team-profile  -->
                            <div id="team-profile-5" class="team-profile mfp-hide">
                                <button title="Close" type="button" class="mfp-close">×</button>
                                <div class="container-fluid">
                                    <div class="row no-mg">
                                        <div class="col-md-6">
                                            <div class="team-profile-photo">
                                                <img src="{{asset('landingpage/images/team-alex.jpeg')}}" alt="team" />
                                            </div>
                                            <!-- End team-profile-photo -->
                                        </div>
                                        <!-- End col-md  -->

                                        <div class="col-md-6">
                                            <div class="team-profile-info">
                                                <h3 class="name">Alex Caracao</h3>
                                                <p class="sub-title">Board Advisor</p>
                                                <ul class="tpi-social">
                                                    <li><a href=""><em class="fab fa-facebook-f"></em></a></li>
                                                    <li><a href=""><em class="fab fa-linkedin-in"></em></a></li>
                                                    <li><a href=""><em class="fab fa-twitter"></em></a></li>
                                                </ul>
                                                <p>Highly passionate, strategical-focused professional, who has acquired extensive domestic and international knowledge by actively working in Australia and China. With over thirty-eight years of experience in the Real Estate Industry, and a proven track record of success, I have positively contributed to the commercial strategies of multi-national organisations while also establishing and driving the success of my own real estate agencies and that of others nationally. </p>
                                                <p>As an energetic, motivational leader, I am able to lead and empower a high-performing team while driving the development and execution of Sale Strategies to propel performance, profitability and return on investments. Additionally, I can provide advice, expertise, and support in the following area's</p>

                                                <ul>Skills:
                                                     <li>-Strategic and Operational Planning</li>
                                                     <li>-ASX Managing Director & CEO -2010-2011 & 2017-2018</li>
                                                     <li>-Sale of Mining Resource Mandate</li>
                                                     <li>-Property Management</li>
                                                     <li>-Commercial Real Estate</li>
                                                     <li>-Residential Real Estate</li>
                                                     <li>-International Real Estate</li>
                                                     <li>-Project Management</li>
                                                     <li>-Concrete Construction </li>
                                                     <li>-Land Subdivision </li>
                                                     <li>-Site Amalgamation </li>
                                                     <li>-Real Estate Economics </li>
                                                     <li>-Business Analysis </li>
                                                     <li>-Contract Management</li>
                                                     <li>-Buyer Representation</li>
                                                     <li>-Sales Management</li>
                                                     <li>-Executive Leadership</li>
                                                     <li>-Franchising</li>
                                                </ul>
                                            </div>
                                            <!-- End team-profile-info -->
                                        </div>
                                        <!-- End col-md-6  -->
                                    </div>
                                    <!-- End row no-mg  -->
                                </div>
                                <!-- End container-fluid  -->
                            </div>
                            <!-- End team-profile-5  -->

                        </div>
                        <!-- End team-circle animated -->
                    </div>
                    <!-- End col-lg-3 col-sm-6  -->

                    <div class="col-lg-3 col-sm-6">
                        <div class="team-circle animated" data-animate="fadeInUp" data-delay=".9">
                            <div class="team-photo">
                                <img src="{{asset('landingpage/images/team-yamaji.jpeg')}}" alt="team">
                                <a href="#team-profile-6" class="expand-trigger content-popup"></a>
                            </div>
                            <!-- End team-photo -->

                            <div class="team-info">
                                <h5 class="team-name">Steven Yamaji</h5>
                                <span class="team-title">Board Advisor</span>
                                <ul class="team-social">
                                    <li><a href=""><em class="fab fa-facebook-f"></em></a></li>
                                    <li><a href=""><em class="fab fa-linkedin-in"></em></a></li>
                                    <li><a href=""><em class="fab fa-twitter"></em></a></li>
                                </ul>
                            </div>
                            <!-- End team-info -->

                            <!-- Start .team-profile  -->
                            <div id="team-profile-6" class="team-profile mfp-hide">
                                <button title="Close" type="button" class="mfp-close">×</button>
                                <div class="container-fluid">
                                    <div class="row no-mg">
                                        <div class="col-md-6">
                                            <div class="team-profile-photo">
                                                <img src="{{asset('landingpage/images/team-yamaji.jpeg')}}" alt="team" />
                                            </div>
                                            <!-- End team-profile-photo -->
                                        </div>
                                        <!-- End col-md-6  -->

                                        <div class="col-md-6">
                                            <div class="team-profile-info">
                                                <h3 class="name">Steven Yamaji</h3>
                                                <p class="sub-title">Board Advisor</p>
                                                <ul class="tpi-social">
                                                    <li><a href=""><em class="fab fa-facebook-f"></em></a></li>
                                                    <li><a href=""><em class="fab fa-linkedin-in"></em></a></li>
                                                    <li><a href=""><em class="fab fa-twitter"></em></a></li>
                                                </ul>
                                                <p>Enterpreneur and market marker 0f +25 years with +10 countries bussiness leadership experiences. Industry focus on blockchain, software, apps, internet, telecom, and PBO. Successfully executed a number of global partnership and M&A transaction. </p>
                                                <p>MBA, Standford University, Graduate School of Bussiness, Palo Alto, California, USA BA, International Studies, Sophia University, Tokyo, Japan </p>
                                            </div>
                                            <!-- End team-profile-info -->
                                        </div>
                                        <!-- End col-md-6  -->

                                    </div>
                                    <!-- End row no-mg  -->
                                </div>
                                <!-- End container-fluid  -->
                            </div>
                            <!-- End team-profile-6  -->
                        </div>
                        <!-- End team-circle animated -->
                    </div>
                    <!-- End col-lg-3 col-sm-6  -->

                    <div class="col-lg-3 col-sm-6">
                        <div class="team-circle animated" data-animate="fadeInUp" data-delay=".9">
                            <div class="team-photo">
                                <img src="{{asset('landingpage/images/team-rudi.jpeg')}}" alt="team">
                                <a href="#team-profile-7" class="expand-trigger content-popup"></a>
                            </div>
                            <!-- End team-photo -->

                            <div class="team-info">
                                <h5 class="team-name">Dr. Rudi Rusdiah BE,MA</h5>
                                <span class="team-title">Board Advisor</span>
                                <ul class="team-social">
                                    <li><a href=""><em class="fab fa-facebook-f"></em></a></li>
                                    <li><a href=""><em class="fab fa-linkedin-in"></em></a></li>
                                    <li><a href=""><em class="fab fa-twitter"></em></a></li>
                                </ul>
                            </div>
                            <!-- End team-info -->

                            <!-- Start .team-profile  -->
                            <div id="team-profile-7" class="team-profile mfp-hide">
                                <button title="Close" type="button" class="mfp-close">×</button>
                                <div class="container-fluid">
                                    <div class="row no-mg">
                                        <div class="col-md-6">
                                            <div class="team-profile-photo">
                                                <img src="{{asset('landingpage/images/team-rudi.jpeg')}}" alt="team" />
                                            </div>
                                            <!-- End team-profile-photo -->
                                        </div>
                                        <!-- End col-md-6  -->

                                        <div class="col-md-6">
                                            <div class="team-profile-info">
                                                <h3 class="name">Dr. Rudi Rusdiah BE,MA</h3>
                                                <p class="sub-title">Board Advisor</p>
                                                <ul class="tpi-social">
                                                    <li><a href=""><em class="fab fa-facebook-f"></em></a></li>
                                                    <li><a href=""><em class="fab fa-linkedin-in"></em></a></li>
                                                    <li><a href=""><em class="fab fa-twitter"></em></a></li>
                                                </ul>
                                                <p>Chairman ABDI (Asosiasi Big Data Indonesia) http://www.abdi.id;
                                                Vice Chairman Mastel (Masyarakat Telematika);
                                                Member of National Cyber-Desk, MenkoPolhukam (2014-2015).
                                                CEO ShopITE.ID (http://www.shopite.id ) Enterprise IT eCatalog & PT Micronics Internusa
                                                Chief Editor News Portal & Majalah Komite.ID (http://www.komite.id ) </p>
                                                <p>Lecturer/Dosen Mkom, Universitas Budi Luhur: ICT Strategy & Policy; Data Security; Data Transmissions.

                                                S1 / BE Electrical Engineering dari Carleton University (1979), Ottawa, Canada , S2 / MA International Relations, University GajahMada (2009), S3 / Doctor Economic (Sustainable Development), University Trisakti. Lahir di Surabaya (1956). Alumni PPRA XLII/2008 of Lemhannas  (National Resilience Institute)

                                                Two days Workshop Blockchain in March with Rosebay, Inc. Blockchain consultant.
                                                Media Partner several block chain event: Crypto Revolution@Kempinski; Mia Crypto@Shangrilla Hotel etc...
                                                Workshop BlockChain with PT Telkom Bandung, Nexa Hotel 15 May 2018  in May 2018 as speaker and as steering commitee    http://bit.ly/id150518
                                                Seminar workshop Panelist/ Narasumber Big Data @ Smart City Expo2017; Communics Indonesia 2016; IESE – Ecommerce Summit 2017; E2ECommerce Expo; on Cyber Security @IIXS – Internet Expo 2016; CSI (Cyber Security Indonesia)
                                                Memimpin Delegasi NGO RI bersama DELRI  untuk WSIS Geneva 2003/ Tunis, 2005. Anggota TKTI (Tim Koordinasi Telematika Indonesia), Anggota Pokja draft RUU Cyberlaw (UU ITE); </p>
                                            </div>
                                            <!-- End team-profile-info -->
                                        </div>
                                        <!-- End col-md-6  -->

                                    </div>
                                    <!-- End row no-mg  -->
                                </div>
                                <!-- End container-fluid  -->
                            </div>
                            <!-- End team-profile-6  -->
                        </div>
                        <!-- End team-circle animated -->
                    </div>
                    <!-- End col-lg-3 col-sm-6  -->



                </div>
                <!-- End row justify-content-center text-center  -->
        </div>
        <!-- End container -->
    </div>
	<!-- End Section Products -->

    <!-- Start section section-pad section-bg-zinnia -->
	<div class="section section-pad section-bg-zinnia" id="partners" style="padding-bottom: 0px !important">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-6 offset-md-3">
                    <div class="section-head">
                        <h3 class="section-title-md animated" data-animate="fadeInUp" data-delay=".1">Our Products</h3>
                    </div>
                    <!-- end section-head -->
                </div>
                <!-- end col-md-6 offset-md-3 -->
            </div>
            <!-- end row text-center -->

            <div class="partner-list">
                <div class="row text-center">
                    <div class="col-sm col-6"></div>
                        <div class="col-sm col-6">
                            <div class="single-partner animated" data-animate="fadeInUp" data-delay=".2">
                                <img src="{{asset('landingpage/images/1.png')}}" alt="partner">
                            </div>
                            <!-- end single-partner animated -->
                        </div>
                        <!-- end col-sm col-6 -->

                    <div class="col-sm col-6">
                        <div class="single-partner animated" data-animate="fadeInUp" data-delay=".3">
                            <img src="{{asset('landingpage/images/2.png')}}" alt="partner">
                        </div>
                        <!-- end single-partner animated -->
                    </div>
                    <!-- end col-sm col-6 -->

                    <div class="col-sm col-6">
                        <div class="single-partner animated" data-animate="fadeInUp" data-delay=".4">
                            <img src="{{asset('landingpage/images/3.png')}}" alt="partner">
                        </div>
                        <!-- end single-partner -->
                    </div>
                    <!-- end col-sm col-6 -->

                    <div class="col-sm col-6">
                        <div class="single-partner animated" data-animate="fadeInUp" data-delay=".5">
                            <img src="{{asset('landingpage/images/4.png')}}" width="90%" alt="partner">
                        </div>
                        <!-- end col single-partner animated -->
                    </div>
                    <!-- end col-sm col-6 -->

                    <div class="col-sm col-6"></div>

                    <div class="row text-center">
                        <div class="col-sm col-6"></div>
                        <div class="col-sm col-6">
                            <div class="single-partner animated" data-animate="fadeInUp" data-delay=".6">
                                <img src="{{asset('landingpage/images/5.png')}}" alt="partner">
                            </div>
                            <!-- end single-partner animated -->
                        </div>
                        <!-- end col-sm col-6 -->

                        <div class="col-sm col-6">
                            <div class="single-partner animated" data-animate="fadeInUp" data-delay=".7">
                                <img src="{{asset('landingpage/images/6.png')}}" alt="partner">
                            </div>
                            <!-- end single-partner animated -->
                        </div>
                        <!-- end col-sm col-6 -->

                        <div class="col-sm col-6">
                                <div class="single-partner animated" data-animate="fadeInUp" data-delay=".8">
                                    <img src="{{asset('landingpage/images/7.png')}}" alt="partner">
                                </div>
                                <!-- end single-partner animated -->
                        </div>
                        <!-- end col-sm col-6 -->

                        <div class="col-sm col-6">
                                <div class="single-partner animated" data-animate="fadeInUp" data-delay=".9">
                                    <img src="{{asset('landingpage/images/8.png')}}" alt="partner">
                                </div>
                                <!-- end single-partner animated -->
                        </div>
                        <!-- end col-sm col-6 -->

                        <div class="col-sm col-6"></div>
                </div>
                    <!-- end row text-center -->
            </div>
                <!-- end partner-list -->
        </div>
        <!-- end container -->
    </div>
    <!-- end section section-pad section-bg-zinnia -->


	<!-- Start Section -->
	<div class="section section-pad-md section-bg" id="faq">
	    <div class="ui-shape ui-shape-s6"></div>
            <div class="container">
                <div class="row justify-content-center text-center">
                    <div class="col-md-7">
                        <div class="section-head-s7" id="txt-faq">
	                        <h2 class="section-title-s7 animated text-section" data-animate="fadeInUp" data-delay=".1">{!!
                            LandingPageContent::getJsonData('faq', 'faq', 'title')
                            !!}
                            </h2>
	                        <p class="animated text-section" data-animate="fadeInUp" data-delay=".2">{!!
                            LandingPageContent::getJsonData('faq', 'faq', 'content')
                            !!}
                            </p>
                        </div>
                        <!-- end section-head-s7 -->
                    @role('administrator')

                        <div class="row" style="">
                            <div class="col-md-12 text-center" style="margin-bottom:40px;">
                                <a href="#" class="btn btn-success btn-edit" style="" id="edit-faq" onclick="return false;"><i class="fa fa-pencil"> Edit</i></a>
                                <a href="#" class="btn btn-success btn-edit" style="display:none;" id="save-faq" onclick="return false;"><i class="fa fa-save"> Save </i></a>
                                <a href="#" class="btn btn-success btn-edit" style="display:none;" id="cancel-faq" onclick="return false;"><i class="fa fa-times" style=""> Cancel</i></a>
                            </div>
                            <!-- end col-md-12 -->
                        </div>
                        <!-- end row -->
                    @endrole
                    </div>
                    <!-- end col-md-7 -->
	            </div>
                <!-- end row justify-content-center text-center -->

                <div class="row align-items-center justify-content-center">
                    <div class="col-md-10">
                        <div class="tab-custom-s3">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs text-center justify-content-center animated" data-animate="fadeInUp" data-delay=".1">
                                <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#tab-1">General</a>
                                </li>

                                <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#tab-2">Pre-IDSO &amp; IDSO</a>
                                </li>

                                <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#tab-3">Tokens</a>
                                </li>
                            </ul>
                            <!-- end nav nav-tabs text-center -->
                            <div class="gaps size-1x"></div>

                             <!-- Tab panes -->
                            <div class="tab-content animated" data-animate="fadeInUp" data-delay=".2">
                                <div class="tab-pane fade show active" id="tab-1">
                                        <div class="accordion-s2" id="accordion-1">
                                            <div class="card active">
                                                <div class="card-header">
                                                    <h5>
                                                    <a data-toggle="collapse" data-target="#collapse-1-1">
                                                        What is EAST COIN?<span class="plus-minus"><span class="ti ti-angle-up"></span></span>
                                                    </a>
                                                    </h5>
                                                </div>
                                                <!-- end card-header -->

                                                <div id="collapse-1-1" class="collapse show" data-parent="#accordion-1">
                                                    <div class="card-body">
                                                        <p style="color:#fe4350">IDSO Crypto - is unique blockchain platform; that is secure, smart and easy-to-use platform, and completely disrupting the way businesses raise capital,  and the way investors buy and sell. </p>
                                                    </div>
                                                    <!-- end card-body -->
                                                </div>
                                                <!-- end collapse-1-1 -->
                                            </div>
                                            <!-- end card-active -->

                                            <div class="card">
                                                <div class="card-header">
                                                    <h5>
                                                        <a class="collapsed" data-toggle="collapse" data-target="#collapse-1-2">
                                                            What cryptocurrencies can I use to purchase?<span class="plus-minus"><span class="ti ti-angle-up"></span></span>
                                                        </a>
                                                    </h5>
                                                </div>
                                                <!-- end card-header -->

                                                <div id="collapse-1-2" class="collapse" data-parent="#accordion-1">
                                                    <div class="card-body">
                                                        <p style="color:#fe4350">IDSO Crypto - is unique platform; that is secure, smart and easy-to-use platform, and completely disrupting the way businesses raise capital.
                                                        </p>
                                                    </div>
                                                    <!-- end card-body -->
                                                </div>
                                                <!-- end collapse-1-2 -->
                                            </div>
                                            <!-- end card -->

                                            <div class="card">
                                                <div class="card-header">
                                                    <h5>
                                                        <a class="collapsed" data-toggle="collapse" data-target="#collapse-1-3">
                                                            How can I participate in the EAST Token sale?<span class="plus-minus"><span class="ti ti-angle-up"></span></span>
                                                        </a>
                                                    </h5>
                                                </div>
                                                <!-- end card-header -->

                                                <div id="collapse-1-3" class="collapse" data-parent="#accordion-1">
                                                    <div class="card-body">
                                                        <p style="color:#fe4350">IDSO Crypto - is unique platform; that is secure, smart and easy-to-use platform, and completely disrupting the way businesses raise capital.</p>
                                                    </div>
                                                    <!-- end card-body -->
                                                </div>
                                                <!-- end collapse-1-3 -->
                                            </div>
                                            <!-- end card -->

                                            <div class="card">
                                                <div class="card-header">
                                                    <h5>
                                                        <a class="collapsed" data-toggle="collapse" data-target="#collapse-1-4">
                                                            How do I benefit from the EAST Token?<span class="plus-minus"><span class="ti ti-angle-up"></span></span>
                                                        </a>
                                                    </h5>
                                                </div>
                                                <!-- end card-header -->

                                                <div id="collapse-1-4" class="collapse" data-parent="#accordion-1">
                                                    <div class="card-body">
                                                        <p style="color:#fe4350">IDSO Crypto - is unique platform; that is secure, smart and easy-to-use platform, and completely disrupting the way businesses raise capital.</p>
                                                    </div>
                                                    <!-- end card-body -->
                                                </div>
                                                <!-- end collapse-1-4 -->
                                            </div>
                                            <!-- end card -->
                                        </div>
                                        <!-- end accordion-s2 -->

                                    </div>
                                    <!-- end tab-pane fade show active -->

                                    <div class="tab-pane fade" id="tab-2">
                                        <div class="accordion-s2" id="accordion-2">
                                            <div class="card active">
                                                <div class="card-header">
                                                    <h5>
                                                        <a data-toggle="collapse" data-target="#collapse-2-1">
                                                            Which of us ever undertakes laborious?<span class="plus-minus"><span class="ti ti-angle-up"></span></span>
                                                        </a>
                                                    </h5>
                                                </div>
                                                <!-- end card-header -->

                                                <div id="collapse-2-1" class="collapse show" data-parent="#accordion-2">
                                                    <div class="card-body">
                                                        <p style="color:#fe4350">IDSO Crypto - is unique platform; that is secure, smart and easy-to-use platform, and completely disrupting the way businesses raise capital.</p>
                                                    </div>
                                                    <!-- end card-body -->
                                                </div>
                                                <!-- end collapse-2-1 -->
                                            </div>
                                            <!-- end card-active -->

                                            <div class="card">
                                                <div class="card-header">
                                                    <h5>
                                                        <a class="collapsed" data-toggle="collapse" data-target="#collapse-2-2">
                                                            Who do not know how to pursue rationally?<span class="plus-minus"><span class="ti ti-angle-up"></span></span>
                                                        </a>
                                                    </h5>
                                                </div>
                                                <!-- end card-header -->

                                                <div id="collapse-2-2" class="collapse" data-parent="#accordion-2">
                                                    <div class="card-body">
                                                        <p style="color:#fe4350">IDSO Crypto - is unique platform; that is secure, smart and easy-to-use platform, and completely disrupting the way businesses raise capital.</p>
                                                    </div>
                                                    <!-- end card-body -->
                                                </div>
                                                <!-- end collapse-2-2 -->
                                            </div>
                                            <!-- end card -->

                                            <div class="card">
                                                <div class="card-header">
                                                    <h5>
                                                        <a class="collapsed" data-toggle="collapse" data-target="#collapse-2-4">
                                                            Their separate existence is a myth?<span class="plus-minus"><span class="ti ti-angle-up"></span></span>
                                                        </a>
                                                    </h5>
                                                </div>
                                                <!-- end card-header -->

                                                <div id="collapse-2-4" class="collapse" data-parent="#accordion-2">
                                                    <div class="card-body">
                                                        <p style="color:#fe4350">IDSO Crypto - is unique platform; that is secure, smart and easy-to-use platform, and completely disrupting the way businesses raise capital.</p>
                                                    </div>
                                                    <!-- end card-body -->
                                                </div>
                                                <!-- end collapse-2-4 -->
                                            </div>
                                            <!-- end card -->

                                            <div class="card">
                                                <div class="card-header">
                                                    <h5>
                                                        <a class="collapsed" data-toggle="collapse" data-target="#collapse-2-3">
                                                            Pityful a rethoric question ran over her cheek?<span class="plus-minus"><span class="ti ti-angle-up"></span></span>
                                                        </a>
                                                    </h5>
                                                </div>
                                                <!-- end card-header -->

                                                <div id="collapse-2-3" class="collapse" data-parent="#accordion-2">
                                                    <div class="card-body">
                                                        <p style="color:#fe4350">IDSO Crypto - is unique platform; that is secure, smart and easy-to-use platform, and completely disrupting the way businesses raise capital.</p>
                                                    </div>
                                                    <!-- end card-body -->
                                                </div>
                                                <!-- end collapse-2-3 -->
                                            </div>
                                            <!-- end card -->
                                        </div>
                                        <!-- end accordion-s2 -->
                                    </div>
                                    <!-- end tab-pane fade -->

                                    <div class="tab-pane fade" id="tab-3">
                                        <div class="accordion-s2" id="accordion-3">
                                            <div class="card active">
                                                <div class="card-header">
                                                    <h5>
                                                        <a data-toggle="collapse" data-target="#collapse-3-1">
                                                            When she reached the first hills?<span class="plus-minus"><span class="ti ti-angle-up"></span></span>
                                                        </a>
                                                    </h5>
                                                </div>
                                                <!-- end card-header -->

                                                <div id="collapse-3-1" class="collapse show" data-parent="#accordion-3">
                                                    <div class="card-body">
                                                        <p style="color:#fe4350">IDSO Crypto - is unique platform; that is secure, smart and easy-to-use platform, and completely disrupting the way businesses raise capital.</p>
                                                    </div>
                                                    <!-- end card-body -->
                                                </div>
                                                <!-- end collapse-3-1 -->
                                            </div>
                                            <!-- end card-active -->

                                            <div class="card">
                                                <div class="card-header">
                                                    <h5>
                                                        <a class="collapsed" data-toggle="collapse" data-target="#collapse-3-2">
                                                            Big Oxmox advised her not to do?<span class="plus-minus"><span class="ti ti-angle-up"></span></span>
                                                        </a>
                                                    </h5>
                                                </div>
                                                <!-- end card-header -->

                                                <div id="collapse-3-2" class="collapse" data-parent="#accordion-3">
                                                    <div class="card-body">
                                                        <p style="color:#fe4350">IDSO Crypto - is unique platform; that is secure, smart and easy-to-use platform, and completely disrupting the way businesses raise capital.</p>
                                                    </div>
                                                    <!-- end card-body -->
                                                </div>
                                                <!-- end collapse-3-2 -->
                                            </div>
                                            <!-- end card -->

                                            <div class="card">
                                                <div class="card-header">
                                                    <h5>
                                                        <a class="collapsed" data-toggle="collapse" data-target="#collapse-3-3">
                                                            Which roasted parts of sentences fly into your mouth?<span class="plus-minus"><span class="ti ti-angle-up"></span></span>
                                                        </a>
                                                    </h5>
                                                </div>
                                                <!-- end card-header -->

                                                <div id="collapse-3-3" class="collapse" data-parent="#accordion-3">
                                                    <div class="card-body">
                                                        <p style="color:#fe4350">IDSO Crypto - is unique platform; that is secure, smart and easy-to-use platform, and completely disrupting the way businesses raise capital.</p>
                                                    </div>
                                                    <!-- end card-body -->
                                                </div>
                                                <!-- end collapse-3-3 -->
                                            </div>
                                            <!-- end card -->

                                            <div class="card">
                                                <div class="card-header">
                                                    <h5>
                                                        <a class="collapsed" data-toggle="collapse" data-target="#collapse-3-4">
                                                            Vokalia and Consonantia, there live?<span class="plus-minus"><span class="ti ti-angle-up"></span></span>
                                                        </a>
                                                    </h5>
                                                </div>
                                                <!-- end card-header -->

                                                <div id="collapse-3-4" class="collapse" data-parent="#accordion-3">
                                                    <div class="card-body">
                                                        <p style="color:#fe4350">IDSO Crypto - is unique platform; that is secure, smart and easy-to-use platform, and completely disrupting the way businesses raise capital.</p>
                                                    </div>
                                                    <!-- end card-body -->
                                                </div>
                                                <!-- end collapse-3-4 -->
                                            </div>
                                            <!-- end card -->
                                        </div>
                                        <!-- end accordion-s2 -->
                                    </div>
                                    <!-- end tab-pane fade -->
	                        </div>
                            <!-- end tab-content animated -->
	                    </div>
                        <!-- end tab-custom-s3 -->
	                </div>
                    <!-- end col-md-10 -->
	            </div>
                <!-- end row align-items-center justify-content-center -->
	        </div>
            <!-- end container -->
	</div>
	<!-- End section section-pad-md section-bg -->


	<!-- Start Section -->
	<div class="section section-pad-md section-bg-alt" id="contact">
	    <div class="ui-shape ui-shape-s7"></div>
	        <div class="container">
	            <div class="row text-center">
	                <div class="col">
	                    <div class="section-head-s7">
                            <h2 class="section-title-s7 animated text-contact" data-animate="fadeInUp" data-delay=".1">Contact EASTERN PACIFIC</h2>
                            <p class="animated text-contact" data-animate="fadeInUp" data-delay=".2">Any question? Reach out to us and we’ll get back to you shortly.</p>
	                    </div>
                        <!-- end section-head-s7 -->
	                </div>
                    <!-- end col -->
                </div>
                <!-- end row text-center -->

	            <div class="row justify-content-center">
	                <div class="col-lg-8">
                        <ul class="contact-info">
                            <li class="animated" data-animate="fadeInUp" data-delay=".3"><em class="fa fa-phone"></em><br><span>{!! App\SiteConfig::config('CONTACT_PHONE_NUMBER') !!}</span></li>
                            <li class="animated" data-animate="fadeInUp" data-delay=".4"><em class="fa fa-envelope"></em><br><span> {!! App\SiteConfig::config('CONTACT_EMAIL') !!}</span></li>
                            <li class="animated" data-animate="fadeInUp" data-delay=".5"><em class="fa fa-building"></em><br><span>{!! App\SiteConfig::config('CONTACT_ADDRESS') !!}</span></li>
                        </ul>
	                </div>
                    <!-- end col-lg-8 -->
                </div>
                <!-- end row justify-content-centers -->

	            <div class="row justify-content-center">
	                <div class="col-lg-8">
	                    <form id="contact-form" class="form-message text-center show-error-hint" action="form/contact.php" method="post">
	                        <div class="form-results"></div>
	                            <div class="input-field animated" data-animate="fadeInUp" data-delay=".6">
                                    <input name="contact-name" type="text" class="input-line required">
                                    <label class="input-title">Your Name</label>
                                </div>
                                <!-- end input-field animated -->

	                            <div class="input-field animated" data-animate="fadeInUp" data-delay=".7">
                                    <input name="contact-email" type="email" class="input-line required email">
                                    <label class="input-title">Your Email</label>
                                </div>
                                <!-- end input-field animated -->

                                <div class="input-field animated" data-animate="fadeInUp" data-delay=".8">
                                    <textarea name="contact-message" class="txtarea input-line required"></textarea>
                                    <label class="input-title">Your Message</label>
                                </div>
                                <!-- end input-field animated -->

                                <input type="text" class="d-none" name="form-anti-honeypot" value="">
                                <div class="input-field animated" data-animate="fadeInUp" data-delay=".9">
                                    <button type="submit" class="btn">Submit</button>
	                            </div>
                                <!-- end dinput-field animated -->
                        </form>
                        <!-- end contact-form -->
	                </div>
                    <!-- end col-lg -->
	            </div>
                <!-- end justify-content-center -->
	        </div>
            <!-- end container -->
	</div>
	<!-- End section section-pad-md section-bg-alt -->

	<!-- Start Section -->
	<div class="section footer-section section-pad-md no-pb">
        <div class="ui-shape ui-shape-light ui-shape-footer"></div>
	        <div class="container">
	            <div class="row">
                    <div class="col-lg-3 col-sm">
                        <div class="widget-item">
                            <h5 class="widget-title">RESOURCES</h5>
                            <ul class="widget-links">
                                <li><a href="#">Watch Demo</a></li>
                                <li><a href="#">Whitepaper</a></li>
                                <li><a href="#">Integration &amp; API</a></li>
                                <li><a href="#">Privacy &amp; policy</a></li>
                            </ul>
                        </div>
                        <!-- end widget-item -->
                    </div>
                    <!-- .end col-lg-3 col-sm -->

                    <div class="col-lg-3 col-sm">
                        <div class="widget-item">
                            <h5 class="widget-title">Company</h5>
                            <ul class="widget-links">
                                <li class="nav-item"></li>
                                <li><a href="#">Home</a></li>
                                <li><a href="#about">About</a></li>
                                <li><a href="#benifits">Benefit</a></li>
                                <li><a href="#tokenSale">Token Sale</a></li>
                                <li><a href="#roadmap">Roadmap</a></li>
                                <li><a href="#team">Team</a></li>
                                <li><a href="#faq">FAQs</a></li>
                                <li><a href="#contact">Contact</a></li>
                            </ul>
                        </div>
                        <!-- end widget-item -->
                    </div>
                    <!-- end col-lg-3 col-sm -->

                    <div class="col-lg-3">
                        <div class="widget-item">
                            <h5 class="widget-title widget-title-ncap">NewsLetter</h5>
                            <div class="widget-subsctibe">
                                <p>We promise to reshape the landscape of e-commerce the same way the last generation of internet-based innovations did.
                                Get connected with us to get the latest update.</p>
	                        <!--<form id="subscribe-form" action="form/subscribe.php" method="post" class="subscription-form subscription-form-sm">
                                <input type="text" name="youremail" class="input-round required email" placeholder="Enter mail" >
                                <input type="text" class="d-none" name="form-anti-honeypot" value="">
                                <button type="submit" class="btn btn-plane"><i class="fas fa-paper-plane"></i></button>
                                <div class="subscribe-results"></div>
                            </form>-->


                                <ul class="social-bottom" data-animate="fadeIn" data-delay="1.55" style="z-index:999;">
                                    <li><a href="#"><em class="fab fa-facebook-f"></em></a></li>
                                    <li><a href="#"><em class="fab fa-twitter"></em></a></li>
                                    <li><a href="#"><em class="fab fa-youtube"></em></a></li>
                                    <li><a href="#"><em class="fab fa-github"></em></a></li>
                                    <li><a href="#"><em class="fab fa-bitcoin"></em></a></li>
                                    <li><a href="#"><em class="fab fa-medium-m"></em></a></li>
                                </ul>
                            </div>
                            <!-- end widget-subscribe -->
                        </div>
                        <!-- end widget-item -->
	                </div>
                    <!-- end col-lg-3 -->
	            </div>
                <!-- end row -->

                <div class="footer-bottom">
                    <div class="row align-items-center">
                        <div class="col-sm-6 res-m-bttm">
                            <a class="footer-brand" href="./">
                                <img class="logo logo-light" alt="logo" src="{{asset('landingpage/images/logo-full-white.png')}}" srcset="images/logo-full-white2x.png 2x" style="height: 50px; width:150px;">
                            </a>
                        </div>
                        <!-- end col-sm-6 res-m-bttm -->

                        <div class="col-sm-6 text-sm-right">
                            <span class="copyright-text"> &copy; EASTERN PACIFIC, 2019</span>
                        </div>
                        <!-- end col-sm-6 text-sm-right -->
                    </div>
                    <!-- end row align-items-center -->
                </div>
                <!-- end footer-bottom -->
            </div>
            <!-- end container -->
	</div>
	<!-- End section footer-section section-pad-md no-pb -->

    </div>

	<!-- Preloader !remove please if you do not want -->
	<div id="preloader">
            <div id="loader"><img src="{{asset('landingpage/images/logo2.png')}}" width="100%" height="100%"></div>
            <div class="loader-section loader-top"></div>
            <div class="loader-section loader-bottom"></div>
    </div>
	<!-- Preloader End -->

	<!-- JavaScript (include all script here) -->
	<script src="{{asset('landingpage/assets/js/script-countdown.js')}}"></script>
	<script src="{{asset('landingpage/assets/js/jquery.bundle.js?ver=142')}}"></script>
    <script src="{{asset('landingpage/assets/js/script.js?ver=142')}}"></script>

    @role('administrator')
    <script src="{{asset('dist/js/sweetalert/sweetalert.min.js')}}"></script>
    <script>
        route = {
           EDIT_CONTENT_UPDATE :'{{route('editcontent.update')}}',
            TOKEN : '{{csrf_token()}}'

        }
    </script>
    <script src="{{asset('landingpage/assets/script.js')}}"></script>
    @endrole

    <script>
        $.ajax({
            method: "get",
            url: "http://api.eastpac.local/api/test?param=1",
            success: function(a) {
                console.log(a)
            }
        })
    </script>
</body>
</html>

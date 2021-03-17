<!DOCTYPE html>
<html lang="en" class="no-js">
<!-- BEGIN HEAD -->

<head>
    <meta charset="utf-8" />
    <title>Sunday Chukwuebuka Madubuike-Porfolio</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta content="" name="description" />
    <meta content="" name="author" />

    <!-- GLOBAL MANDATORY STYLES -->
    <link href="http://fonts.googleapis.com/css?family=Hind:300,400,500,600,700" rel="stylesheet" type="text/css">
    <link href="{{ asset( 'vendor/simple-line-icons/css/simple-line-icons.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />

    <!-- PAGE LEVEL PLUGIN STYLES -->
    <link href="{{asset('ncss/animate.css')}}" rel="stylesheet">

    <!-- THEME STYLES -->
    <link href="{{ asset('ncss/layout.min.css') }}" rel="stylesheet" type="text/css" />

    <!-- Favicon -->
    <link rel="shortcut icon" href="favicon.ico" />
</head>
<!-- END HEAD -->

<!-- BODY -->

<body id="body" data-spy="scroll" data-target=".header">

    <!--========== HEADER ==========-->
    <header class="header navbar-fixed-top">
        <!-- Navbar -->
        <nav class="navbar" role="navigation">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="menu-container js_nav-item">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".nav-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="toggle-icon"></span>
                    </button>

                    <!-- Logo -->
                    <div class="logo">
                        <a class="logo-wrap" href="#body">
                            <img class="logo-img logo-img-main" src="img/logoart.png" alt="Sunny Lenz">
                            <img class="logo-img logo-img-active" src="img/logart.png" alt="Sunny Lenz">
                        </a>
                    </div>
                    <!-- End Logo -->
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse nav-collapse">
                    <div class="menu-container">
                        <ul class="nav navbar-nav navbar-nav-right">
                            <li class="js_nav-item nav-item"><a class="nav-item-child nav-item-hover" href="#body">Home</a></li>
                            <li class="js_nav-item nav-item"><a class="nav-item-child nav-item-hover" href="#about">About</a></li>
                            <li class="js_nav-item nav-item"><a class="nav-item-child nav-item-hover" href="#experience">Experience</a></li>
                            <li class="js_nav-item nav-item"><a class="nav-item-child nav-item-hover" href="#work">Work</a></li>
                            <!-- <li class="js_nav-item nav-item"><a class="nav-item-child nav-item-hover" href="#blog">Blog</a></li> -->
                            <li class="js_nav-item nav-item"><a class="nav-item-child nav-item-hover" href="#contact">Contact</a></li>
                        </ul>
                    </div>
                </div>
                <!-- End Navbar Collapse -->
            </div>
        </nav>
        <!-- Navbar -->
    </header>
    <!--========== END HEADER ==========-->

    <!--========== SLIDER ==========-->
    <div class="promo-block parallax-window" data-parallax="scroll" data-image-src="img/1920x1080/mine.jpg">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="promo-block-divider">
                        <h1 class="promo-block-title">Sunday <br />Chukwuebuka</h1>
                        <p class="promo-block-text">Web,Mobile &amp; Cinematography </p>
                    </div>
                    @if(Session::has('success'))
                                    <div class=" alert alert-success form-group" role="alert">
                                       {{Session::get('success')}} 
                                    </div>

                                    @endif
                    <ul class="list-inline">
                        <li><a href="https://web.facebook.com/sunday.madubuike.1/" class="social-icons"><i
                                    class="icon-social-facebook"></i></a></li>
                        <li><a href="https://twitter.com/sunnylearner" class="social-icons"><i
                                    class="icon-social-twitter"></i></a></li>
                        <li><a href="https://www.instagram.com/sunny_lenz" class="social-icons"><i
                                    class="icon-social-instagram"></i></a></li>
                        <li><a href="https://github.com/sunnylearne" class="social-icons"><i
                                    class="icon-social-github"></i></a></li>
                        <li><a href="https://www.linkedin.com/in/sunday-chukwuebuka-madubuike-594252192/" class="social-icons"><i class="icon-social-linkedin"></i></a></li>
                    </ul>
                </div>
            </div>
            <!--// end row -->
        </div>
    </div>
    <!--========== SLIDER ==========-->

    <!--========== PAGE LAYOUT ==========-->
    <!-- About -->
    
    <div id="about">
        <div class="container content-lg">
            <div class="row">
                <div class="col-sm-3 sm-margin-b-30">
                    <div class="text-right sm-text-left">
                        <h2 class="margin-b-0">Intro</h2>
                        <p>What I am all about.</p>
                    </div>
                </div>
                <div class="col-sm-8 col-sm-offset-1">
                    <div class="margin-b-60">
                        <p>I am Madubuike Sunday Chukwuebuka, a Software Engineer who is passionate about solving complex problems by Building technological solutions out of business needs. I have 2 years of experience working on web and mobile applications.
                        </p>
                        <p>I can fit into any of the phases of the software development life cycle and I can work both individually or collaboratively.
                        </p>

                        <p>I am also passionate about Photography. My experience in Photography is age-long. Nothing makes me much happier than having good gears with beautiful clients.
                        </p>

                        <p>
                            Cinematography was my first love and the passion to do it professionally is still burning in my heart. For that, I pushed myself to become a video editor.I had lots of projects such as weddings and other ceremonies.
                        </p>

                        <p>I also have a thing to do with music. I mean, i found myself in love with music and it became so dear and precious to me. This made me learn to play the piano and currently i am on my fastest lane to learning violin. I visualise
                            myself with microphone all the time.
                        </p>

                        <p>
                            i love beautiful things. i love to see that care has gone into something. i love to see how something can be tranformed into its nice-looking part...
                        </p>
                    </div>

                    <!-- Progress Box -->


                    <div class="progress-box">
                        <h5>HTML5 <span class="color-heading pull-right">96%</span></h5>
                        <div class="progress">
                            <div class="progress-bar bg-color-base" role="progressbar" data-width="96"></div>
                        </div>
                    </div>

                    <div class="progress-box">
                        <h5>CSS <span class="color-heading pull-right">50%</span></h5>
                        <div class="progress">
                            <div class="progress-bar bg-color-base" role="progressbar" data-width="50"></div>
                        </div>
                    </div>

                    <div class="progress-box">
                        <h5>JavaSript <span class="color-heading pull-right">52%</span></h5>
                        <div class="progress">
                            <div class="progress-bar bg-color-base" role="progressbar" data-width="52"></div>
                        </div>
                    </div>

                    <div class="progress-box">
                        <h5>Node Js <span class="color-heading pull-right">52%</span></h5>
                        <div class="progress">
                            <div class="progress-bar bg-color-base" role="progressbar" data-width="52"></div>
                        </div>
                    </div>

                    <div class="progress-box">
                        <h5>PHP <span class="color-heading pull-right">87%</span></h5>
                        <div class="progress">
                            <div class="progress-bar bg-color-base" role="progressbar" data-width="87"></div>
                        </div>
                    </div>
                    <div class="progress-box">
                        <h5>Laravel <span class="color-heading pull-right">87%</span></h5>
                        <div class="progress">
                            <div class="progress-bar bg-color-base" role="progressbar" data-width="87"></div>
                        </div>
                    </div>

                    <div class="progress-box">
                        <h5>Flutter & Dart <span class="color-heading pull-right">77%</span></h5>
                        <div class="progress">
                            <div class="progress-bar bg-color-base" role="progressbar" data-width="77"></div>
                        </div>
                    </div>

                    <div class="progress-box">
                        <h5>Photography <span class="color-heading pull-right">80%</span></h5>
                        <div class="progress">
                            <div class="progress-bar bg-color-base" role="progressbar" data-width="80"></div>
                        </div>
                    </div>

                    <div class="progress-box">
                        <h5>Cinematography <span class="color-heading pull-right">70%</span></h5>
                        <div class="progress">
                            <div class="progress-bar bg-color-base" role="progressbar" data-width="70"></div>
                        </div>
                    </div>

                    <div class="progress-box">
                        <h5>Adobe Photoshop & Premiere Pro <span class="color-heading pull-right">60%</span></h5>
                        <div class="progress">
                            <div class="progress-bar bg-color-base" role="progressbar" data-width="60"></div>
                        </div>
                    </div>
                    <!-- End Progress Box -->
                </div>
            </div>
            <!--// end row -->
        </div>
    </div>
    <!-- End About -->

    <!-- Experience -->
    <div id="experience">
        <div class="bg-color-sky-light" data-auto-height="true">
            <div class="container content-lg">
                <div class="row">
                    <div class="col-sm-3 sm-margin-b-30">
                        <div class="text-right sm-text-left">
                            <h2 class="margin-b-0">Experience</h2>
                            <p>Would get you jealous.</p>
                        </div>
                    </div>
                    <div class="col-sm-8 col-sm-offset-1">
                        <div class="row row-space-2 margin-b-4">
                            <div class="col-md-4 md-margin-b-4">
                                <div class="service" data-height="height">
                                    <div class="service-element">
                                        <i class="service-icon icon-rocket"></i>
                                    </div>
                                    <div class="service-info">
                                        <h3>FRONT-END</h3>
                                        <p class="margin-b-5">...beautiful and responsive interfaces to suit your business needs... clean and minimalistic design</p>
                                    </div>
                                    <a href="#" class="content-wrapper-link"></a>
                                </div>
                            </div>
                            <div class="col-md-4 md-margin-b-4">
                                <div class="service bg-color-base wow zoomIn" data-height="height" data-wow-duration=".3" data-wow-delay=".1s">
                                    <div class="service-element">
                                        <i class="service-icon color-white icon-settings"></i>
                                    </div>
                                    <div class="service-info">
                                        <h3 class="color-white">BACK-END</h3>
                                        <p class="color-white margin-b-5">...powerful back-end design with security consciousness
                                        </p>
                                    </div>
                                    <a href="#" class="content-wrapper-link"></a>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="service" data-height="height">
                                    <div class="service-element">
                                        <i class="service-icon icon-screen-smartphone"></i>
                                    </div>
                                    <div class="service-info">
                                        <h3>MOBILE</h3>
                                        <p class="margin-b-5">...user-friendly and super fast robust mobile apps to suit your needs</p>
                                    </div>
                                    <a href="#" class="content-wrapper-link"></a>
                                </div>
                            </div>
                        </div>
                        <!--// end row -->
                    </div>
                </div>
                <!--// end row -->
            </div>
        </div>
    </div>
    <!-- End Experience -->

    <!-- Work -->
    <div id="work">
        <div class="container content-lg">
            <div class="row">
                <div class="col-sm-3 sm-margin-b-30">
                    <div class="text-right sm-text-left">
                        <h2 class="margin-b-0">Works</h2>
                        <p>I build the real value.</p>
                    </div>
                </div>
                <div class="col-sm-8 col-sm-offset-1">
                    <!-- Masonry Grid -->
                    <div class="masonry-grid row row-space-2">
                        <div class="masonry-grid-sizer col-xs-6 col-sm-6 col-md-1"></div>
                        <div class="masonry-grid-item col-xs-12 col-sm-6 col-md-8 margin-b-4">
                            <!-- Work -->
                            <div class="work work-popup-trigger">
                                <div class="work-overlay">
                                    <img class="full-width img-responsive" src="img/800x400/01.jpg" alt="Portfolio Image">
                                </div>
                                <div class="work-popup-overlay">
                                    <div class="work-popup-content">
                                        <a href="javascript:void(0);" class="work-popup-close">Hide</a>
                                        <div class="margin-b-30">
                                            <h3 class="margin-b-5">Art Of Coding</h3>
                                            <span>Clean &amp; Minimalistic Design</span>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-8 work-popup-content-divider sm-margin-b-20">
                                                <div class="margin-t-10 sm-margin-t-0">
                                                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id
                                                        est laborum.</p>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.</p>
                                                    <ul class="list-inline work-popup-tag">
                                                        <li class="work-popup-tag-item"><a class="work-popup-tag-link" href="#">Design,</a></li>
                                                        <li class="work-popup-tag-item"><a class="work-popup-tag-link" href="#">Coding,</a></li>
                                                        <li class="work-popup-tag-item"><a class="work-popup-tag-link" href="#">Portfolio</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="margin-t-10 sm-margin-t-0">
                                                    <p class="margin-b-5"><strong>Project Leader:</strong> Sunny Lenz
                                                    </p>
                                                    <p class="margin-b-5"><strong>Designer:</strong> EmeCindy</p>
                                                    <p class="margin-b-5"><strong>Developer:</strong> Sunny Lenz</p>
                                                    <p class="margin-b-5"><strong>Customer:</strong> Keenthemes</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Work -->
                        </div>
                        <div class="masonry-grid-item col-xs-12 col-sm-6 col-md-4 margin-b-4">
                            <!-- Work -->
                            <div class="work work-popup-trigger">
                                <div class="work-overlay">
                                    <img class="full-width img-responsive" src="img/397x400/01.jpg" alt="Portfolio Image">
                                </div>
                                <div class="work-popup-overlay">
                                    <div class="work-popup-content">
                                        <a href="javascript:void(0);" class="work-popup-close">Hide</a>
                                        <div class="margin-b-30">
                                            <h3 class="margin-b-5">Art Of Coding</h3>
                                            <span>Clean &amp; Minimalistic Design</span>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-8 work-popup-content-divider sm-margin-b-20">
                                                <div class="margin-t-10 sm-margin-t-0">
                                                    <p>its ok if you are bad at school, you have to become a good person. help people who are sick.
                                                    </p>
                                                    <p>if someone is hungry,share food with them. Dont turn away when someone needs help. fight people who hurt the weak.
                                                    </p>
                                                    <ul class="list-inline work-popup-tag">
                                                        <li class="work-popup-tag-item"><a class="work-popup-tag-link" href="#">Design,</a></li>
                                                        <li class="work-popup-tag-item"><a class="work-popup-tag-link" href="#">Coding,</a></li>
                                                        <li class="work-popup-tag-item"><a class="work-popup-tag-link" href="#">Portfolio</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="margin-t-10 sm-margin-t-0">
                                                    <p class="margin-b-5"><strong>Project Leader:</strong> John Doe</p>
                                                    <p class="margin-b-5"><strong>Designer:</strong> Alisa Keys</p>
                                                    <p class="margin-b-5"><strong>Developer:</strong> Mark Doe</p>
                                                    <p class="margin-b-5"><strong>Customer:</strong> Keenthemes</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Work -->
                        </div>
                        <div class="masonry-grid-item col-xs-12 col-sm-6 col-md-4 md-margin-b-4">
                            <!-- Work -->
                            <div class="work work-popup-trigger">
                                <div class="work-overlay">
                                    <img class="full-width img-responsive" src="img/397x300/01.jpg" alt="Portfolio Image">
                                </div>
                                <div class="work-popup-overlay">
                                    <div class="work-popup-content">
                                        <a href="javascript:void(0);" class="work-popup-close">Hide</a>
                                        <div class="margin-b-30">
                                            <h3 class="margin-b-5">Art Of Coding</h3>
                                            <span>Clean &amp; Minimalistic Design</span>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-8 work-popup-content-divider sm-margin-b-20">
                                                <div class="margin-t-10 sm-margin-t-0">
                                                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id
                                                        est laborum.</p>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.</p>
                                                    <ul class="list-inline work-popup-tag">
                                                        <li class="work-popup-tag-item"><a class="work-popup-tag-link" href="#">Design,</a></li>
                                                        <li class="work-popup-tag-item"><a class="work-popup-tag-link" href="#">Coding,</a></li>
                                                        <li class="work-popup-tag-item"><a class="work-popup-tag-link" href="#">Portfolio</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="margin-t-10 sm-margin-t-0">
                                                    <p class="margin-b-5"><strong>Project Leader:</strong> John Doe</p>
                                                    <p class="margin-b-5"><strong>Designer:</strong> Alisa Keys</p>
                                                    <p class="margin-b-5"><strong>Developer:</strong> Mark Doe</p>
                                                    <p class="margin-b-5"><strong>Customer:</strong> Keenthemes</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Work -->
                        </div>
                        <div class="masonry-grid-item col-xs-12 col-sm-6 col-md-4 md-margin-b-4">
                            <!-- Work -->
                            <div class="work work-popup-trigger">
                                <div class="work-overlay">
                                    <img class="full-width img-responsive" src="img/397x300/02.jpg" alt="Portfolio Image">
                                </div>
                                <div class="work-popup-overlay">
                                    <div class="work-popup-content">
                                        <a href="javascript:void(0);" class="work-popup-close">Hide</a>
                                        <div class="margin-b-30">
                                            <h3 class="margin-b-5">Art Of Coding</h3>
                                            <span>Clean &amp; Minimalistic Design</span>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-8 work-popup-content-divider sm-margin-b-20">
                                                <div class="margin-t-10 sm-margin-t-0">
                                                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id
                                                        est laborum.</p>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.</p>
                                                    <ul class="list-inline work-popup-tag">
                                                        <li class="work-popup-tag-item"><a class="work-popup-tag-link" href="#">Design,</a></li>
                                                        <li class="work-popup-tag-item"><a class="work-popup-tag-link" href="#">Coding,</a></li>
                                                        <li class="work-popup-tag-item"><a class="work-popup-tag-link" href="#">Portfolio</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="margin-t-10 sm-margin-t-0">
                                                    <p class="margin-b-5"><strong>Project Leader:</strong> John Doe</p>
                                                    <p class="margin-b-5"><strong>Designer:</strong> Alisa Keys</p>
                                                    <p class="margin-b-5"><strong>Developer:</strong> Mark Doe</p>
                                                    <p class="margin-b-5"><strong>Customer:</strong> Keenthemes</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Work -->
                        </div>
                        <div class="masonry-grid-item col-xs-12 col-sm-6 col-md-4">
                            <!-- Work -->
                            <div class="work work-popup-trigger">
                                <div class="work-overlay">
                                    <img class="full-width img-responsive" src="img/397x300/03.jpg" alt="Portfolio Image">
                                </div>
                                <div class="work-popup-overlay">
                                    <div class="work-popup-content">
                                        <a href="javascript:void(0);" class="work-popup-close">Hide</a>
                                        <div class="margin-b-30">
                                            <h3 class="margin-b-5">Art Of Coding</h3>
                                            <span>Clean &amp; Minimalistic Design</span>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-8 work-popup-content-divider sm-margin-b-20">
                                                <div class="margin-t-10 sm-margin-t-0">
                                                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id
                                                        est laborum.</p>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.</p>
                                                    <ul class="list-inline work-popup-tag">
                                                        <li class="work-popup-tag-item"><a class="work-popup-tag-link" href="#">Design,</a></li>
                                                        <li class="work-popup-tag-item"><a class="work-popup-tag-link" href="#">Coding,</a></li>
                                                        <li class="work-popup-tag-item"><a class="work-popup-tag-link" href="#">Portfolio</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="margin-t-10 sm-margin-t-0">
                                                    <p class="margin-b-5"><strong>Project Leader:</strong> Sunday Chukwuebuka
                                                    </p>
                                                    <p class="margin-b-5"><strong>Designer:</strong> Alisa Keys</p>
                                                    <p class="margin-b-5"><strong>Developer:</strong> Mark Doe</p>
                                                    <p class="margin-b-5"><strong>Customer:</strong> Keenthemes</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Work -->
                        </div>
                    </div>
                    <!-- End Masonry Grid -->
                </div>
            </div>
            <!--// end row -->
        </div>
    </div>
    <!-- End Work -->


    <!-- Contact Us -->
    <div id="contact">
        <div class="container content-lg">
            <div class="row">
                <div class="col-sm-3 sm-margin-b-30">
                    <div class="text-right sm-text-left">
                        <h2 class="margin-b-0">Contact Me</h2>
                        <p>Send me a message.</p>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <div class="col-sm-8 col-sm-offset-1 ">
                            <div class="margin-b-60 ">
                                <form action="{{route('store')}}" method="POST">
                                    @csrf

                                    
                                    <div class="form-group ">
                                        <label for="name ">Name</label>
                                        <input type="text " name="name" placeholder="type your name here " class="form-control" value="{{ old('name') }}" required>
                                        @error('name')
                                            <div class="alert-danger">
                                                {{$message}}
                                            </div>
                                        @enderror
                                    </div>

                                    <div class="form-group ">
                                    <label for="email ">Email</label>
                                        <input type="email " name="email" placeholder="type your Email address here " class="form-control form-control-lg" value="{{ old('name') }}" required>
                                        
                                        @error('email')
                                            <div class="alert-danger">
                                                {{$message}}
                                            </div>
                                        @enderror
                                    </div>

                                    <div class="form-group ">
                                    <label for="phone ">Phone number</label>
                                        <input type="text " name="phone" placeholder="type your phone number here " class="form-control form-control-lg" value="{{ old('phone') }}" required>
                                        
                                        @error('phone')
                                            <div class="alert-danger">
                                                {{$message}}
                                            </div>
                                        @enderror
                                    </div>

                                    <div class="form-group ">
                                    <label for="message">Message</label>
                                        <textarea class="form-control " placeholder="...your message here... "value="{{ old('name') }}" name="message" id=" " cols="30 " rows="10 "required></textarea>
                                        
                                        @error('message')
                                            <div class="alert-danger">
                                                {{$message}}
                                            </div>
                                        @enderror
                                    </div>

                                    <button class="btn btn-success float-right" type="submit ">Submit <i class="service-icon icon-wallet "></i>
                                    </button>
                                

                                </form>
                            </div>

                        </div>
                    </div>

                </div>


            </div>
            <!--// end row -->
        </div>
    </div>
    <!-- End Contact Us -->


    <!-- Contact -->
    <div id="contact ">
        <div class="bg-color-sky-light ">
            <div class="container content-lg ">
                <div class="row ">
                    <div class="col-sm-3 sm-margin-b-30 ">
                        <div class="text-right sm-text-left ">
                            <h2 class="margin-b-0 ">Contacts</h2>
                            <p>Hire me.</p>
                        </div>
                    </div>
                    <div class="col-sm-8 col-sm-offset-1 ">
                        <div class="row ">
                            <div class="col-md-3 col-xs-6 md-margin-b-30 ">
                                <h5>Location</h5>
                                <a href="# ">Imo, Nigeria</a>
                            </div>
                            <div class="col-md-3 col-xs-6 md-margin-b-30 ">
                                <h5>Phone</h5>
                                <a href="# ">+2348131538090</a>
                            </div>
                            <div class="col-md-3 col-xs-6 ">
                                <h5>Email</h5>
                                <a href="mailto:ikesundayshield@gmail.com ">ikesundayshield@gmail.com</a>
                            </div>
                            <div class="col-md-3 col-xs-6 ">
                                <h5>Web</h5>
                                <a href="# ">codewithlenz.com</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--// end row -->
            </div>
        </div>
    </div>
    <!-- End Contact -->
    <!--========== END PAGE LAYOUT ==========-->

    <!--========== FOOTER ==========-->
    <footer class="footer ">
        <div class="content container ">
            <div class="row ">
                <div class="col-xs-6 ">
                    <img class="footer-logo " src="img/logart.png " alt="lenz Logo ">
                </div>
                <div class="col-xs-6 text-right sm-text-left ">
                    <p class="margin-b-0 "><a class="fweight-700 " href="http://keenthemes.com/preview/aircv/ ">sunny
                            lenz</a> Theme Powered by: <a class="fweight-700 " href="http://www.keenthemes.com/ ">KeenThemes.com</a>
                    </p>
                </div>
            </div>
            <!--// end row -->
        </div>
    </footer>
    <!--========== END FOOTER ==========-->

    <!-- Back To Top -->
    <a href="javascript:void(0); " class="js-back-to-top back-to-top ">Top</a>

    <!-- JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
    <!-- CORE PLUGINS -->
    <script src="{{ asset('vendor/jquery.min.js') }} " type="text/javascript "></script>
    <script src="{{ asset('vendor/jquery-migrate.min.js') }} " type="text/javascript "></script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.min.js') }} " type="text/javascript "></script>

    <!-- PAGE LEVEL PLUGINS -->
    <script src="{{ asset('vendor/jquery.easing.js') }} " type="text/javascript "></script>
    <script src="{{ asset('vendor/jquery.back-to-top.js') }} " type="text/javascript "></script>
    <script src="{{ asset('vendor/jquery.smooth-scroll.js') }} " type="text/javascript "></script>
    <script src="{{ asset('vendor/jquery.wow.min.js') }} " type="text/javascript "></script>
    <script src="{{ asset('vendor/jquery.parallax.min.js') }} " type="text/javascript "></script>
    <script src="{{ asset('vendor/jquery.appear.js') }} " type="text/javascript "></script>
    <script src="{{ asset('vendor/masonry/jquery.masonry.pkgd.min.js') }} " type="text/javascript "></script>
    <script src="{{ asset('vendor/masonry/imagesloaded.pkgd.min.js') }} " type="text/javascript "></script>

    <!-- PAGE LEVEL SCRIPTS -->
    <script src="{{ asset('njs/layout.min.js') }} " type="text/javascript "></script>
    <script src="{{ asset('njs/components/progress-bar.min.js') }} " type="text/javascript "></script>
    <script src="{{ asset('njs/components/masonry.min.js') }} " type="text/javascript "></script>
    <script src="{{ asset('njs/components/wow.min.js') }} " type="text/javascript "></script>

</body>
<!-- END BODY -->

</html>
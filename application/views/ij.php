<!doctype html>
<html class="no-js" lang="en-US">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- SITE TITLE -->
    <title><?= $title ?></title>

    <!-- =========================
       Meta Information
    ============================== -->
    <meta name="description" content="iJournal - Aplikasi Pengumuman PPDB Online Berbasis Android">
    <meta name="keywords" content="iJournal, Pengumuman PPDB, Aplikasi Android PPDB">
    <meta name="author" content="Kelompok 4">

    <!-- =========================
       favicon and app touch icon
    ============================== -->
    <link rel="shortcut icon" href="<?= base_url()?>ijournal/favicon.ico"/>
    <link rel="apple-touch-icon" href="<?= base_url()?>ijournal/apple-touch-icon.png">


    <!-- =========================
       Bootstrap and animation
    ============================== -->
    <link rel="stylesheet" href="<?= base_url()?>ijournal/css/bootstrap.css">
    <link rel="stylesheet" href="<?= base_url()?>ijournal/css/animate.min.css">

    <!-- =========================
       Fonts, typography and icons
    ============================== -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="<?= base_url()?>ijournal/css/font-awesome.css">
    <link rel="stylesheet" href="<?= base_url()?>ijournal/css/typography.css">

    <!-- =========================
       Carousel, lightbox and circle generator
    ============================== -->
    <link rel="stylesheet" href="<?= base_url()?>ijournal/css/owl.carousel.css">
    <link rel="stylesheet" href="<?= base_url()?>ijournal/css/owl.theme.css">
    <link rel="stylesheet" href="<?= base_url()?>ijournal/css/nivo-lightbox.css">
    <link rel="stylesheet" href="<?= base_url()?>ijournal/css/nivo-lightbox-default.css">
    <link rel="stylesheet" href="<?= base_url()?>ijournal/css/jquery.circliful.css">

    <!-- ***** Custom Stylesheet ***** -->
    <link rel="stylesheet" href="<?= base_url()?>ijournal/css/main-green.css">

    <!-- ***** Responsive fixes ***** -->
    <link rel="stylesheet" href="<?= base_url()?>ijournal/css/responsive.css">

    <!-- Header scripts -->
    <script src="<?= base_url()?>ijournal/js/vendor/modernizr-2.8.3.min.js"></script>
    <script src="<?= base_url()?>ijournal/js/queryloader2.min.js"></script>

    <!-- =========================
       Preloader
    ============================== -->
    <script>
        window.addEventListener('DOMContentLoaded', function() {
            "use strict";
            new QueryLoader2(document.querySelector("body"), {
                barColor: "#F64C73",
                backgroundColor: "#111",
                percentage: true,
                barHeight: 1,
                minimumTime: 200,
                fadeOutTime: 1000
            });
        });
        var alert_color_success_background = '#F64C73';
        var alert_color_error_background = '#CF000F';

    </script>
</head>
<body>
    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

    <!-- =========================
       Fullscreen menu
    ============================== -->
    <div class="mobilenav">
        <ul>
            <li data-rel="#header">
                <span class="nav-label">Home</span>
            </li>
            <li data-rel="#about-us">
                <span class="nav-label">About Us</span>
            </li>
            <li data-rel="#our-team">
                <span class="nav-label">Why Choose Us</span>
            </li>
            <li data-rel="#our-team">
                <span class="nav-label">Our Team</span>
            </li>
            <li data-rel="#footer">
                <span class="nav-label">Contact Us</span>
            </li>
        </ul>
    </div>  <!-- *** end Full Screen Menu *** -->

    <!-- *****  hamburger icon ***** -->
    <a href="javascript:void(0)" class="menu-trigger">
       <div class="hamburger">
         <div class="menui top-menu"></div>
         <div class="menui mid-menu"></div>
         <div class="menui bottom-menu"></div>
       </div>
    </a>


    <!-- =========================
       Header
    ============================== -->
    <header id="header">
        <div id="myCarousel" class="carousel slide">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
                <li data-target="#myCarousel" data-slide-to="3"></li>
            </ol>

            <!-- Wrapper for Slides -->
            <div class="carousel-inner">

                <!-- *****  Logo ***** -->
                <div class="logo-container">
                    <a href="#">
                        <img src="<?= base_url()?>ijournal/img/logo-header.png" alt="iJournal Banner">
                    </a>
                </div>

                <!-- =========================
                   Header item 1
                ============================== -->
                <div class="item active">

                    <!-- Set the first background image using inline CSS below. -->
                    <div class="fill" style="background-image:url('<?= base_url()?>ijournal/img/slider/slider-1.png');">
                    </div>
                    <div class="carousel-caption">
                        <h1 class="light margin-bottom-medium mat-none"><strong class="bold-text">MUDAH</strong></h1>
                        <p class="light margin-bottom-medium">Sekarang kamu bisa melihat jurnal PPDB di manapun dan kapanpun</p>
                        <div class="call-button">
                            <div class="row">
                                <div class="col-md-4 col-md-offset-2 col-sm-4 col-sm-offset-2 col-xs-12">
                                    <a href="#our-team" class="button pull-right internal-link light hvr-grow" data-rel="#our-team">Our Team</a>
                                </div>
                                <div class="col-md-4 col-sm-4 col-xs-12">
                                    <a href="#about-us" class="button pull-left internal-link light hvr-grow" data-rel="#about-us">About Us</a>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                    <div class="overlay"></div>
                </div>

                <!-- =========================
                   Header item 2
                ============================== -->
                <div class="item">

                    <!-- Set the second background image using inline CSS below. -->
                    <div class="fill" style="background-image:url('<?= base_url()?>ijournal/img/slider/slider-2.png');"></div>
                    <div class="carousel-caption">
                        <h1 class="light margin-bottom-medium mat-none"><strong class="bold-text">CEPAT</strong></h1>
                        <p class="light">Informasi yang kamu dapat lebih cepat dan selalu up to date</p>
                        <div class="call-button">
                            <div class="row">
                                <div class="col-md-4 col-md-offset-2 col-sm-4 col-sm-offset-2 col-xs-12">
                                    <a href="#our-team" class="button pull-right internal-link light hvr-grow" data-rel="#our-team">Our Team</a>
                                </div>
                                <div class="col-md-4 col-sm-4 col-xs-12">
                                    <a href="#about-us" class="button pull-left internal-link light hvr-grow" data-rel="#about-us">About Us</a>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                    <div class="overlay"></div>
                </div>

                <!-- =========================
                   Header item 3
                ============================== -->
                <div class="item">

                    <!-- Set the third background image using inline CSS below. -->
                    <div class="fill" style="background-image:url('<?= base_url()?>ijournal/img/slider/slider-3.png');"></div>
                    <div class="carousel-caption">
                        <h1 class="light margin-bottom-medium mat-none"><strong class="bold-text">MOBILITAS</strong></h1>
                        <p class="light">Kamu tidak perlu bolak-balik ke SMA untuk melihat jurnal</p>
                        <div class="call-button">
                            <div class="row">
                                <div class="col-md-4 col-md-offset-2 col-sm-4 col-sm-offset-2 col-xs-12">
                                    <a href="#our-team" class="button pull-right internal-link light hvr-grow" data-rel="#our-team">Our Team</a>
                                </div>
                                <div class="col-md-4 col-sm-4 col-xs-12">
                                    <a href="#about-us" class="button pull-left internal-link light hvr-grow" data-rel="#about-us">About Us</a>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                    <div class="overlay"></div>
                </div>

                <!-- =========================
                   Header item 4
                ============================== -->
                <div class="item">

                    <!-- Set the third background image using inline CSS below. -->
                    <div class="fill" style="background-image:url('<?= base_url()?>ijournal/img/slider/slider-4.png');"></div>
                    <div class="carousel-caption">
                        <h1 class="light margin-bottom-medium mat-none"><strong class="bold-text">SEKALI KLIK</strong></h1>
                        <p class="light">Informasi dengan sekali klik dari smartphone kamu</p>
                        <div class="call-button">
                            <div class="row">
                                <div class="col-md-4 col-md-offset-2 col-sm-4 col-sm-offset-2 col-xs-12">
                                    <a href="#our-team" class="button pull-right internal-link light hvr-grow" data-rel="#our-team">Our Team</a>
                                </div>
                                <div class="col-md-4 col-sm-4 col-xs-12">
                                    <a href="#about-us" class="button pull-left internal-link light hvr-grow" data-rel="#about-us">About Us</a>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                    <div class="overlay"></div>
                </div>

            </div> <!-- *** end wrapper *** -->

            <!-- Carousel Controls -->
            <a class="left carousel-control hidden-xs" href="#myCarousel" data-slide="prev">
                <span class="icon-prev icon-arrow-left"></span>
            </a>
            <a class="right carousel-control hidden-xs" href="#myCarousel" data-slide="next">
                <span class="icon-next icon-arrow-right"></span>
            </a>
        </div>
    </header> <!-- *** end Header *** -->

    <!-- =========================
       About Us
    ============================== -->
    <section id="about-us" class="about-us">
        <div class="overlay">
            <div class="container padding-top-large">
                <?php foreach($dataabout as $row) { ?>
                <h2>
                    <strong class="bold-text">About</strong>
                    <span class="light-text main-color">US</span>
                </h2>
                <div class="line main-bg"></div>
                <div class="row margin-bottom-medium">
                    <div class="col-md-7">
                        <div class="jumbo-text light-text margin-top-medium wow slideInLeft" data-wow-duration="2s">
                            <strong class="bold-text"><?= $row->judul ?>,</strong> <?= $row->tagline ?>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <img src="<?= base_url()?>ijournal/img/about-side-side.png" alt="About Us Big Image" class="center-block img-responsive">
                    </div>
                    <div class="clearfix"></div>
                </div>
                <p class="margin-bottom-medium wow slideInUp"><?= $row->detail_aboutus ?></p>
                <?php } ?>
            </div>
        </div>
    </section> <!-- *** end About Us *** -->


    <!-- =========================
       Why Coose Us
    ============================== -->
    <section id="why-choose-us" class="why-choose-us">
        <div class="container margin-top-large">
            <h2>
                Why
                <strong class="bold-text">Choose</strong>
                <span class="light-text main-color">Us</span>
            </h2>
            <div class="line main-bg margin-bottom-large"></div>

            <div class="row text-center">

                <!-- *****  Service Single ***** -->
                <div class="col-md-4">
                    <div class="service wow slideInLeft">
                        <div class="icon"><i class="icon-mobile"></i></div>
                        <h4>Mobile <strong>App Design</strong></h4>
                        <p>Design Feature yang interaktif dan atraktif, support feksibility support.</p>
                    </div>
                </div>

                <!-- *****  Service Single ***** -->
                <div class="col-md-4">
                    <div class="service wow fadeInUp">
                        <div class="icon"><i class="icon-heart"></i></div>
                        <h4>Love <strong>Our Client</strong></h4>
                        <p>Helping our client is our passion. We love our clients because they teach us new things every day.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="service wow slideInRight">
                        <div class="icon"><i class="icon-code"></i></div>
                        <h4><strong>Framework</strong> Integrated</h4>
                        <p>Terintegrasi dengan framework menjadikan pekerjaan yang kompleks dapat diselesaikan lebih mudah.</p>
                    </div>
                </div>

                <!-- *****  Service Single ***** -->
                <div class="col-md-4">
                    <div class="service wow slideInLeft">
                        <div class="icon"><i class="icon-mobile"></i></div>
                        <h4><strong>Real-Time</strong> Data</h4>
                        <p>Sistem akan memproses secara langsung setiap perubahan data dalam waktu nyata (real-time).</p>
                    </div>
                </div>

                <!-- *****  Service Single ***** -->
                <div class="col-md-4">
                    <div class="service wow fadeInUp">
                        <div class="icon"><i class="icon-web-browser"></i></div>
                        <h4><strong>Service and</strong> Maintenance</h4>
                        <p>Gabung dengan kami dan anda akan mendapatkan pelayanan dan solusi pemeliharaan terbaik.</p>
                    </div>
                </div>

                <!-- *****  Service Single ***** -->
                <div class="col-md-4">
                    <div class="service wow slideInRight">
                        <div class="icon"><i class="icon-office"></i></div>
                        <h4><strong>Trust in</strong> Our Experience</h4>
                        <p>Trust our experience in reapir, design and maintenance.</p>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div> <!-- *** end row *** -->
        </div> <!-- *** end container *** -->
    </section> <!-- *** end Why Choose Us *** -->

    <!-- =========================
       Our Team
    ============================== -->
    <section id="our-team" class="our-team">
        <div class="container padding-top-large">
            <h2 class="wow fadeInRight" data-wow-duration="1.5s" data-wow-delay=".5s">
                Our
                <strong class="bold-text">Awesome</strong>
                <span class="light-text main-color">Team</span>
            </h2>
            <div class="line main-bg margin-bottom-medium"></div>
            <div class="row">
                <!-- ***** Team member 1 section ***** -->
                    <div class="col-md-4 col-md-offset-4 col-sm-6 col-xs-12 margin-bottom-large">
                        <!-- ***** Team member-1 ***** -->
                        <div class="team-member center-block wow fadeInLeft" data-wow-duration="1.5s" data-wow-delay="1s">
                            <img src="<?= base_url()?>ijournal/img/team/project-manager.jpg" class="img-responsive" alt="Jack Smith">
                            <div class="team-overlay text-center">
                                <div class="info">
                                    <h3><strong>M. Rizaludin, M.Kom</strong></h3>
                                    <p>Project Manager</p>
                                </div>
                                <div class="learn-more" data-toggle="modal" data-target="#team-member-0">
                                    <strong>Selengkapnya</strong>
                                </div>
                            </div>
                        </div> <!-- *** end Team member-1 *** -->
                        <!-- Team Member-1 Modal -->
                        <div class="modal fade contact-form" id="team-member-1" tabindex="-1" role="dialog" aria-labelledby="team-member-1" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                    <div class="modal-body member-info">
                                        <div class="row">
                                            <div class="col-md-5 col-sm-5">
                                                <figure>
                                                    <img src="<?= base_url()?>ijournal/img/team/big/team-member-1.jpg" alt="Jack Smith">
                                                </figure>
                                            </div>
                                            <div class="col-md-7 col-sm-7">
                                                <div class="description">
                                                    <h3><strong class="bold-text">Erik Wibowo</strong></h3>
                                                    <div class="light-text">UI & UX Designer</div>
                                                    <div class="about margin-top-medium">
                                                        <blockquote>
                                                            quotesnya taruh disini
                                                        </blockquote>
                                                    </div>
                                                    <div class="member-skills">
                                                        <div id="skill-1" class="member-skill" data-dimension="100" data-text="Corel" data-width="10" data-fontsize="16" data-percent="40" data-fgcolor="#F64C73" data-bgcolor="#eee"></div>
                                                        <div id="skill-2" class="member-skill" data-dimension="100" data-text="AI" data-width="10" data-fontsize="16" data-percent="10" data-fgcolor="#F64C73" data-bgcolor="#eee"></div>
                                                        <div id="skill-3" class="member-skill" data-dimension="100" data-text="Java" data-width="10" data-fontsize="16" data-percent="50" data-fgcolor="#F64C73" data-bgcolor="#eee"></div>
                                                        <div id="skill-4" class="member-skill" data-dimension="100" data-text="Php" data-width="10" data-fontsize="16" data-percent="60" data-fgcolor="#F64C73" data-bgcolor="#eee"></div>
                                                    </div>
                                                </div> <!-- *** end description *** -->
                                            </div> <!-- *** end col-md-7 *** -->
                                        </div> <!-- *** end row *** -->
                                    </div> <!-- *** end modal-body *** -->
                                </div> <!-- *** end modal-content *** -->
                            </div> <!-- *** end modal-dialog *** -->
                        </div> <!-- *** end Contact Form modal *** -->
                    </div> <!-- *** end Team member 1 section *** -->
                <!-- ***** Team member 1 section ***** -->
            </div>
            <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-12 margin-bottom-large">
                    <!-- ***** Team member-1 ***** -->
                    <div class="team-member center-block wow fadeInLeft" data-wow-duration="1.5s" data-wow-delay="1s">
                        <img src="<?= base_url()?>ijournal/img/team/team-member-1.jpg" class="img-responsive" alt="Jack Smith">
                        <div class="team-overlay text-center">
                            <div class="info">
                                <h3><strong>Erik Wibowo</strong></h3>
                                <p>UI & UX Designer</p>
                            </div>
                            <div class="learn-more" data-toggle="modal" data-target="#team-member-1">
                                <strong>Selengkapnya</strong>
                            </div>
                        </div>
                    </div> <!-- *** end Team member-1 *** --
                    <!-- Team Member-1 Modal -->
                    <div class="modal fade contact-form" id="team-member-0" tabindex="-1" role="dialog" aria-labelledby="team-member-0" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                <div class="modal-body member-info">
                                    <div class="row">
                                        <div class="col-md-5 col-sm-5">
                                            <figure>
                                                <img src="<?= base_url()?>ijournal/img/team/big/project-manager.jpg" alt="Jack Smith">
                                            </figure>
                                        </div>
                                        <div class="col-md-7 col-sm-7">
                                            <div class="description">
                                                <h3><strong class="bold-text">M. Rizaludin, M.Kom</strong></h3>
                                                <div class="light-text">Project Manager</div>
                                                <div class="about margin-top-medium">
                                                    <blockquote>
                                                        quotesnya taruh disini
                                                    </blockquote>
                                                </div>
                                                    <div class="member-skills">
                                                        <div id="skill-1" class="member-skill" data-dimension="100" data-text="Corel" data-width="10" data-fontsize="16" data-percent="40" data-fgcolor="#F64C73" data-bgcolor="#eee"></div>
                                                        <div id="skill-2" class="member-skill" data-dimension="100" data-text="AI" data-width="10" data-fontsize="16" data-percent="10" data-fgcolor="#F64C73" data-bgcolor="#eee"></div>
                                                        <div id="skill-3" class="member-skill" data-dimension="100" data-text="Java" data-width="10" data-fontsize="16" data-percent="50" data-fgcolor="#F64C73" data-bgcolor="#eee"></div>
                                                        <div id="skill-4" class="member-skill" data-dimension="100" data-text="Php" data-width="10" data-fontsize="16" data-percent="60" data-fgcolor="#F64C73" data-bgcolor="#eee"></div>
                                                    </div>
                                            </div> <!-- *** end description *** -->
                                        </div> <!-- *** end col-md-7 *** -->
                                    </div> <!-- *** end row *** -->
                                </div> <!-- *** end modal-body *** -->
                            </div> <!-- *** end modal-content *** -->
                        </div> <!-- *** end modal-dialog *** -->
                    </div> <!-- *** end Contact Form modal *** -->
                </div> <!-- *** end Team member 1 section *** -->
                <!-- ***** Team member 2 section ***** -->
                <div class="col-md-3 col-sm-6 col-xs-12 margin-bottom-large">
                    <!-- ***** Team member-2 ***** -->
                    <div class="team-member center-block wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="1s">
                        <img src="<?= base_url()?>ijournal/img/team/team-member-2.jpg" class="img-responsive" alt="John Doe">
                        <div class="team-overlay text-center">
                            <div class="info">
                                <h3><strong>Dewi Sakinah</strong></h3>
                                <p>Front-end Developer</p>
                            </div>
                            <div class="learn-more" data-toggle="modal" data-target="#team-member-2">
                                <strong>Selengkapnya</strong>
                            </div>
                        </div>
                    </div> <!-- *** end Team member-1 *** -->
                    <!-- Team Member-2 Modal -->
                    <div class="modal fade contact-form" id="team-member-2" tabindex="-1" role="dialog" aria-labelledby="team-member-2" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                <div class="modal-body member-info">
                                    <div class="row">
                                        <div class="col-md-5 col-sm-5">
                                            <figure>
                                                <img src="<?= base_url()?>ijournal/img/team/big/team-member-2.jpg" alt="John Doe">
                                            </figure>
                                        </div>
                                        <div class="col-md-7 col-sm-7">
                                            <div class="description">
                                                <h3><strong class="bold-text">Dewi Sakinah</strong></h3>
                                                <div class="light-text">Front-end Developer</div>
                                                <div class="about margin-top-medium">
                                                    <blockquote>
                                                        quotesnya taruh disini
                                                    </blockquote>
                                                </div>
                                                <div class="member-skills">
                                                    <div id="skill-5" class="member-skill" data-dimension="100" data-text="Django" data-width="10" data-fontsize="16" data-percent="35" data-fgcolor="#F64C73" data-bgcolor="#eee"></div>
                                                    <div id="skill-6" class="member-skill" data-dimension="100" data-text="Laravel" data-width="10" data-fontsize="16" data-percent="70" data-fgcolor="#F64C73" data-bgcolor="#eee"></div>
                                                    <div id="skill-7" class="member-skill" data-dimension="100" data-text="NodeJS" data-width="10" data-fontsize="16" data-percent="80" data-fgcolor="#F64C73" data-bgcolor="#eee"></div>
                                                    <div id="skill-8" class="member-skill" data-dimension="100" data-text="WP" data-width="10" data-fontsize="16" data-percent="60" data-fgcolor="#F64C73" data-bgcolor="#eee"></div>
                                                </div>
                                            </div> <!-- *** end description *** -->
                                        </div> <!-- *** end col-md-7 *** -->
                                    </div> <!-- *** end row *** -->
                                </div> <!-- *** end modal-body *** -->
                            </div> <!-- *** end modal-content *** -->
                        </div> <!-- *** end modal-dialog *** -->
                    </div> <!-- *** end Contact Form modal *** -->
                </div> <!-- *** end Team member 2 section *** -->
                <!-- ***** Team member 3 section ***** -->
                <div class="col-md-3 col-sm-6 col-xs-12 margin-bottom-large">
                    <!-- ***** Team member-1 ***** -->
                    <div class="team-member center-block wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="1s">
                        <img src="<?= base_url()?>ijournal/img/team/team-member-3.jpg" class="img-responsive" alt="Jack Sparrow">
                        <div class="team-overlay text-center">
                            <div class="info">
                                <h3><strong>Qomariyah</strong></h3>
                                <p>Back-end Developer</p>
                            </div>
                            <div class="learn-more" data-toggle="modal" data-target="#team-member-3">
                                <strong>Selengkapnya</strong>
                            </div>
                        </div>
                    </div> <!-- *** end Team member-3 *** -->
                    <!-- Team Member-3 Modal -->
                    <div class="modal fade contact-form" id="team-member-3" tabindex="-1" role="dialog" aria-labelledby="team-member-3" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                <div class="modal-body member-info">
                                    <div class="row">
                                        <div class="col-md-5 col-sm-5">
                                            <figure>
                                                <img src="<?= base_url()?>ijournal/img/team/big/team-member-3.jpg" alt="">
                                            </figure>
                                        </div>
                                        <div class="col-md-7 col-sm-7">
                                            <div class="description">
                                                <h3><strong class="bold-text">Qomariyah</strong></h3>
                                                <div class="light-text">Back-end Developer</div>
                                                <div class="about margin-top-medium">
                                                    <blockquote>
                                                        quotesnya taruh disini
                                                    </blockquote>
                                                </div>
                                                <div class="member-skills">
                                                    <div id="skill-9" class="member-skill" data-dimension="100" data-text="PS" data-width="10" data-fontsize="13" data-percent="35" data-fgcolor="#F64C73" data-bgcolor="#eee"></div>
                                                    <div id="skill-10" class="member-skill" data-dimension="100" data-text="HTML" data-width="10" data-fontsize="13" data-percent="70" data-fgcolor="#F64C73" data-bgcolor="#eee"></div>
                                                    <div id="skill-11" class="member-skill" data-dimension="100" data-text="CSS" data-width="10" data-fontsize="13" data-percent="80" data-fgcolor="#F64C73" data-bgcolor="#eee"></div>
                                                    <div id="skill-12" class="member-skill" data-dimension="100" data-text="PHP" data-width="10" data-fontsize="13" data-percent="60" data-fgcolor="#F64C73" data-bgcolor="#eee"></div>
                                                </div>
                                            </div> <!-- *** end description *** -->
                                        </div> <!-- *** end col-md-7 *** -->
                                    </div> <!-- *** end row *** -->
                                </div> <!-- *** end modal-body *** -->
                            </div> <!-- *** end modal-content *** -->
                        </div> <!-- *** end modal-dialog *** -->
                    </div> <!-- *** end Contact Form modal *** -->
                </div> <!-- *** end Team member 3 section *** -->
                <!-- ***** Team member 4 section ***** -->
                <div class="col-md-3 col-sm-6 col-xs-12 margin-bottom-large">
                    <!-- ***** Team member-1 ***** -->
                    <div class="team-member center-block wow fadeInRight" data-wow-duration="1.5s" data-wow-delay="1s">
                        <img src="<?= base_url()?>ijournal/img/team/team-member-4.jpg" class="img-responsive" alt="George Wyne">
                        <div class="team-overlay text-center">
                            <div class="info">
                                <h3><strong>Afrizal Ahmed Alfarid</strong></h3>
                                <p>Database Administrator</p>
                            </div>
                            <div class="learn-more" data-toggle="modal" data-target="#team-member-4">
                                <strong>Learn More</strong>
                            </div>
                        </div>
                    </div> <!-- *** end Team member-4 *** -->
                    <!-- Team Member-4 Modal -->
                    <div class="modal fade contact-form" id="team-member-4" tabindex="-1" role="dialog" aria-labelledby="team-member-4" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                <div class="modal-body member-info">
                                    <div class="row">
                                        <div class="col-md-5 col-sm-5">
                                            <figure>
                                                <img src="<?= base_url()?>ijournal/img/team/big/team-member-4.jpg" alt="">
                                            </figure>
                                        </div>
                                        <div class="col-md-7 col-sm-7">
                                            <div class="description">
                                                <h3><strong class="bold-text">Afrizal Ahmed Alfarid</strong></h3>
                                                <div class="light-text">Database Administrator</div>
                                                <div class="about margin-top-medium">
                                                    <blockquote>
                                                        quotesnya taruh disini
                                                    </blockquote>
                                                </div>
                                                <div class="member-skills">
                                                    <div id="skill-13" class="member-skill" data-dimension="100" data-text="AI" data-width="10" data-fontsize="24" data-percent="35" data-fgcolor="#F64C73" data-bgcolor="#eee"></div>
                                                    <div id="skill-14" class="member-skill" data-dimension="100" data-text="PS" data-width="10" data-fontsize="24" data-percent="70" data-fgcolor="#F64C73" data-bgcolor="#eee"></div>
                                                    <div id="skill-15" class="member-skill" data-dimension="100" data-text="AF" data-width="10" data-fontsize="24" data-percent="80" data-fgcolor="#F64C73" data-bgcolor="#eee"></div>
                                                    <div id="skill-16" class="member-skill" data-dimension="100" data-text="WP" data-width="10" data-fontsize="24" data-percent="60" data-fgcolor="#F64C73" data-bgcolor="#eee"></div>
                                                </div>
                                            </div> <!-- *** end description *** -->
                                        </div> <!-- *** end col-md-7 *** -->
                                    </div> <!-- *** end row *** -->
                                </div> <!-- *** end modal-body *** -->
                            </div> <!-- *** end modal-content *** -->
                        </div> <!-- *** end modal-dialog *** -->
                    </div> <!-- *** end Contact Form modal *** -->
                </div> <!-- *** end Team member 4 section *** -->
            </div>
        </div>
    </section> <!-- *** end Our Team *** -->


    <!-- =========================
       Footer
    ============================== -->
    <footer id="footer" class="footer">
        <div class="container padding-large text-center">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <figure class="margin-bottom-medium">
                        <img src="<?= base_url()?>ijournal/img/logo.png" class="footer-logo" alt="Krefolio">
                    </figure>
                    <p class="margin-bottom-medium">Aplikasi Informasi Pengumuman (Jurnal) Penerimaan Peserta Didik Baru Sekolah Menengah Di Kabupaten Pekalongan berbasis android dan web.</p>

                    <!-- =========================
                       Social icons
                    ============================== -->
                    <ul class="social margin-bottom-medium">
                        <li class="facebook hvr-pulse"><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li class="twitter hvr-pulse"><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li class="g-plus hvr-pulse"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        <li class="linkedin hvr-pulse"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        <li class="youtube hvr-pulse"><a href="#"><i class="fa fa-youtube"></i></a></li>
                        <li class="instagram hvr-pulse"><a href="#"><i class="fa fa-instagram"></i></a></li>
                        <li class="behance hvr-pulse"><a href="#"><i class="fa fa-behance"></i></a></li>
                        <li class="dribbble hvr-pulse"><a href="#"><i class="fa fa-dribbble"></i></a></li>
                    </ul>
                    <p class="copyright">
                        &copy; Copyright <?= date('Y') ?> iJournal - All Rights reserved
                    </p>
                </div>
            </div>
        </div>
    </footer> <!-- *** end Footer *** -->

    <!-- =========================
       Back to top button
    ============================== -->
    <div class="back-to-top" data-rel="header">
        <i class="icon-up"></i>
    </div>

    <!-- =========================
     JavaScripts
    ============================== -->
    <script src="<?= base_url()?>ijournal/js/vendor/jquery-1.11.1.js"></script>
    <script src="<?= base_url()?>ijournal/js/vendor/jquery-migrate-1.2.1.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBOsiOjjoOiFBmXLU0adNjsnCKLpcDfRyI"></script>
    <script src="<?= base_url()?>ijournal/js/twitterFetcher_min.js"></script>
    <script src="<?= base_url()?>ijournal/js/vendor/bootstrap.js"></script>
    <script src="<?= base_url()?>ijournal/js/wow.min.js"></script>
    <script src="<?= base_url()?>ijournal/js/imagesloaded.pkgd.min.js"></script>
    <script src="<?= base_url()?>ijournal/js/jquery.easing.min.js"></script>
    <script src="<?= base_url()?>ijournal/js/appear.js"></script>
    <script src="<?= base_url()?>ijournal/js/jquery.circliful.min.js"></script>
    <script src="<?= base_url()?>ijournal/js/owl.carousel.min.js"></script>
    <script src="<?= base_url()?>ijournal/js/nivo-lightbox.min.js"></script>
    <script src="<?= base_url()?>ijournal/js/isotope.pkgd.min.js"></script>
    <script src="<?= base_url()?>ijournal/js/notie.js"></script>
    <script src="<?= base_url()?>ijournal/js/main.js"></script>
</body>
</html>

<!DOCTYPE html>
<html lang="en">

<!-- Basic -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">

<!-- Mobile Metas -->
<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

<!-- Site Metas -->
<title>Desa Mayong - Bali</title>
<meta name="keywords" content="">
<meta name="description" content="">
<meta name="author" content="">

<!-- Site Icons -->
<link rel="shortcut icon" href="<?= base_url('assets1/'); ?>images/favicon.ico" type="image/x-icon" />
<link rel="apple-touch-icon" href="<?= base_url('assets1/'); ?>images/apple-touch-icon.png">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="<?= base_url('assets1/'); ?>css/bootstrap.min.css">
<!-- Site CSS -->
<link rel="stylesheet" href="<?= base_url('assets1/'); ?>style.css">
<!-- Responsive CSS -->
<link rel="stylesheet" href="<?= base_url('assets1/'); ?>css/responsive.css">
<!-- Custom CSS -->
<link rel="stylesheet" href="<?= base_url('assets1/'); ?>css/custom.css">
<script src="<?= base_url('assets1/'); ?>js/modernizr.js"></script> <!-- Modernizr -->

<!--[if lt IE 9]>
      <script src="<?= base_url('assets1/'); ?>https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="<?= base_url('assets1/'); ?>https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top" class="politics_version">

    <!-- LOADER -->
    <div id="preloader">
        <div class="loader">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div><!-- end loader -->
    <!-- END LOADER -->

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand js-scroll-trigger" href="<?= base_url('assets1/'); ?>#page-top">
                <img class="img-fluid" src="<?= base_url('assets1/'); ?>images/" alt="" />
            </a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fa fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav text-uppercase ml-auto">
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger active" href="<?= base_url('assets1/'); ?>#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="<?= base_url('assets1/'); ?>#about">About Us</a>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="<?= base_url('assets1/'); ?>#contact">Contact Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="<?= base_url('assets1/'); ?>#contact">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div id="home" class="ct-header ct-header--slider ct-slick-custom-dots">
        <div class="ct-slick-homepage" data-arrows="true" data-autoplay="false">
            <img class="ct-header tablex item" src="<?= base_url('assets1/'); ?>images/mayong.jpg">
            <div class="ct-u-display-tablex">
                <div class="inner">
                    <div class="container">
                        <div class="row">

                        </div>
                    </div>
                </div>
            </div>
            </img>

        </div><!-- .ct-slick-homepage -->
    </div><!-- .ct-header -->

    <div id="about" class="section wb">
        <?php foreach ($informasi as $val) { ?>
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="message-box">
                            <h2>Pariwisata Desa Mayong - Bali</h2>
                            <p> <?= $val['deskripsi']; ?> </p>
                            </p>

                            <ul>
                                <li><b>Follow Me</b></li>
                                <li><a href="<?= base_url('assets1/'); ?>#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="<?= base_url('assets1/'); ?>#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href="<?= base_url('assets1/'); ?>#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                <li><a href="<?= base_url('assets1/'); ?>#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                <li><a href="<?= base_url('assets1/'); ?>#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                                <li><a href="<?= base_url('assets1/'); ?>#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
                            </ul>

                            <a class="btn-new from-middle animated" href="<?= base_url('assets1/'); ?>google.com">Baca Selengkapnya</a>
                        </div><!-- end messagebox -->
                    </div><!-- end col -->

                    <div class="col-md-6">
                        <div class="right-box-pro wow fadeIn">
                            <img src="<?= base_url('assets1/'); ?>images/mayong3.jpg" alt="" class="img-fluid img-rounded fat-ab">
                        </div><!-- end media -->
                    </div><!-- end col -->
                <?php } ?>
                </div><!-- end row -->
            </div><!-- end container -->
    </div><!-- end section -->



    <div id="portfolio" class="section lb">
        <div class="container">
            <div class="section-title text-center">
                <h3>Desa Mayong</h3>
            </div><!-- end title -->

            <div class="gallery-list row">
                <?php foreach ($daftar_wisata as $val) { ?>

                    <div class="col-md-4 col-sm-6 gallery-grid gal_a gal_b">
                        <div class="gallery-single spi-hr fix hover">
                            <img width="360" height="180" src="<?= base_url('media/images/' . $val['foto']); ?>" alt="">
                            <div class="text-hover">
                                <h3><?= $val['nama_wisata']; ?> </h3>
                            </div>
                            <div class="img-overlay">
                                <a href="'Frontend/detail_jasa/' . $val['id_jasa']" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="fa fa-picture-o"></i></a>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>


        <div id="contact" class="section db">
            <div class="container">
                <div class="section-title text-center">
                    <h3>Contact Me</h3>
                    <p>Quisque eget nisl id nulla sagittis auctor quis id. Aliquam quis vehicula enim, non aliquam risus.</p>
                </div><!-- end title -->

                <div class="row">
                    <div class="col-md-12">
                        <div class="contact_form">
                            <div id="message"></div>
                            <form id="contactForm" name="sentMessage" novalidate="novalidate">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input class="form-control" id="name" type="text" placeholder="Your Name" required="required" data-validation-required-message="Please enter your name.">
                                            <p class="help-block text-danger"></p>
                                        </div>
                                        <div class="form-group">
                                            <input class="form-control" id="email" type="email" placeholder="Your Email" required="required" data-validation-required-message="Please enter your email address.">
                                            <p class="help-block text-danger"></p>
                                        </div>
                                        <div class="form-group">
                                            <input class="form-control" id="phone" type="tel" placeholder="Your Phone" required="required" data-validation-required-message="Please enter your phone number.">
                                            <p class="help-block text-danger"></p>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <textarea class="form-control" id="message" placeholder="Your Message" required="required" data-validation-required-message="Please enter a message."></textarea>
                                            <p class="help-block text-danger"></p>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="col-lg-12 text-center">
                                        <div id="success"></div>
                                        <button id="sendMessageButton" class="sim-btn btn-new from-middle animated" data-text="Send Message" type="submit">Send Message</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div><!-- end col -->
                </div><!-- end row -->
            </div><!-- end container -->
        </div><!-- end section -->

        <div class="copyrights">
            <div class="container">
                <div class="footer-distributed">
                    <div class="footer-left">
                        <p class="footer-company-name">All Rights Reserved. &copy; 2018 <a href="<?= base_url('assets1/'); ?>#">Nickie</a> Design By :
                            <a href="<?= base_url('assets1/'); ?>https://html.design/">html design</a></p>
                    </div>
                </div>
            </div><!-- end container -->
        </div><!-- end copyrights -->

        <a href="<?= base_url('assets1/'); ?>#" id="scroll-to-top" class="dmtop global-radius"><i class="fa fa-angle-up"></i></a>

        <!-- ALL JS FILES -->
        <script src="<?= base_url('assets1/'); ?>js/all.js"></script>
        <!-- Camera Slider -->
        <script src="<?= base_url('assets1/'); ?>js/jquery.mobile.customized.min.js"></script>
        <script src="<?= base_url('assets1/'); ?>js/jquery.easing.1.3.js"></script>
        <script src="<?= base_url('assets1/'); ?>js/parallaxie.js"></script>
        <script src="<?= base_url('assets1/'); ?>js/slick.min.js"></script>
        <script src="<?= base_url('assets1/'); ?>js/animated-slider.js"></script>
        <!-- Contact form JavaScript -->
        <script src="<?= base_url('assets1/'); ?>js/jqBootstrapValidation.js"></script>
        <script src="<?= base_url('assets1/'); ?>js/contact_me.js"></script>
        <!-- ALL PLUGINS -->
        <script src="<?= base_url('assets1/'); ?>js/custom.js"></script>
</body>

</html>
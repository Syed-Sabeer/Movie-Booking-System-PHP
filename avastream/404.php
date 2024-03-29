<?php 
include("nav.php");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Basic Page -->
    <meta charset="UTF-8">
    <title>Ava Stream - Movies & Tv Shows Bootstrap 4 Template</title>
    <!-- Mobile Specific -->
    <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <!-- Favicon -->
    <link href="images/favicon.png" rel="shortcut icon" type="image/x-icon">
    <link href="images/favicon.png" rel="icon" type="image/x-icon">
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Fontawesome Styles -->
    <link href="css/fontawesome.min.css" rel="stylesheet">
    <!-- Iconfonts Styles -->
    <link href="css/icofont.css" rel="stylesheet">
    <!-- Owl Carousel Styles -->
    <link href="css/owl.carousel.min.css" rel="stylesheet">
    <link href="css/owl.theme.default.min.css" rel="stylesheet">
    <!-- Slick Slider Styles -->
    <link href="css/slick.css" rel="stylesheet">
    <link href="css/slick-theme.css" rel="stylesheet">
    <!-- Swiper Slider Styles -->
    <link href="css/swiper.min.css" rel="stylesheet">
    <!-- Animate Styles -->
    <link href="css/animate.css" rel="stylesheet">
    <!-- Hover Styles -->
    <link href="css/hover-min.css" rel="stylesheet">
    <!-- Magnific Styles -->
    <link href="css/magnific-popup.css" rel="stylesheet">
    <!-- Bootstrap Datepicker Styles -->
    <link href="css/bootstrap-datepicker.min.css" rel="stylesheet">
    <!-- Main Styles -->
    <link href="css/style.css" rel="stylesheet">
    <!-- Responsive Styles -->
    <link href="css/responsive.css" rel="stylesheet">
    <!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
    <!--[if lt IE 9]>
          <script src="js/html5shiv.js"></script>
          <script src="js/respond.min.js"></script>
        <![endif]-->
</head>

<body>

    <div class="main" id="main">

        <!-- Start Main Content -->
        <div class="main-content">
            <section class="404">
                <div class="container">
                    <div class="row">
                        <div class="content error-page text-center col">
                            <div class="error-code">
                                <h2>404</h2>
                            </div>
                            <!-- Error Code end -->
                            <div class="error-message">
                                <h3>Oops... Page Not Found!</h3>
                            </div>
                            <!-- Error Message end -->
                            <div class="error-body">
                                <p>
                                    Try using the button below to go to main page of the site
                                </p>
                                <a href="index.html" class="btn hvr-sweep-to-right">Back to Home Page</a>
                            </div>
                            <!-- Error Body end -->
                        </div>
                        <!-- Content end -->
                    </div>
                    <!-- Row end -->
                </div>
                <!-- Container end -->
            </section>
            <!-- 404 Section end -->
        </div>
        <!-- Main Content End -->
        <?php  
include("footer.php");
?>

    </div>
    <!-- Main Class End -->
    <!-- Start Search Modal -->
    <div class="zoom-anim-dialog mfp-hide modal-searchPanel search-form" id="search-popup">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="search-panel">
                    <form class="search-group">
                        <div class="input-group">
                            <input class="form-control" name="s" placeholder="Search" type="search" value=""> <button class="input-group-btn search-button"><i class="fas fa-search"></i></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- End Search Modal -->
    <!-- Start Filter Sidebar -->
    <div class="filter-sidebar" id="f-Sidebar">
        <a class="closebtn" href="javascript:void(0)" onclick="closeNav()"><i class="fas fa-times"></i></a>
        <div class="filter-accordion" id="accordion">
            <div class="card">
                <div class="card-header" id="headingOne">
                    <h2 class="mb-0"><button aria-controls="type" aria-expanded="false" class="d-flex align-items-center justify-content-between btn btn-link collapsed" data-target="#type" data-toggle="collapse">Display Type <span class="icofont-circled-down"></span></button></h2>
                </div>
                <!-- Card Header End -->
                <div aria-labelledby="headingOne" class="collapse" data-parent="#accordion" id="type">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-6 col-xl mb-xl-0">
                                <a class="btn d-block" href="#">All</a>
                            </div>
                            <!-- Col End -->
                            <div class="col-6 col-xl mb-xl-0">
                                <a class="btn d-block" href="#">Drama</a>
                            </div>
                            <!-- Col End -->
                        </div>
                        <!-- Row End -->
                        <div class="row">
                            <div class="col-6 col-xl mb-xl-0">
                                <a class="btn d-block" href="#">Action</a>
                            </div>
                            <!-- Col End -->
                            <div class="col-6 col-xl mb-xl-0">
                                <a class="btn d-block" href="#">Romantic</a>
                            </div>
                            <!-- Col End -->
                        </div>
                        <!-- Row End -->
                        <div class="row">
                            <div class="col-6 col-xl mb-xl-0">
                                <a class="btn d-block" href="#">Crime</a>
                            </div>
                            <!-- Col End -->
                            <div class="col-6 col-xl mb-xl-0">
                                <a class="btn d-block" href="#">Excitement</a>
                            </div>
                            <!-- Col End -->
                        </div>
                        <!-- Row End -->
                        <div class="row">
                            <div class="col-6 col-xl mb-xl-0">
                                <a class="btn d-block" href="#">Comedy</a>
                            </div>
                            <!-- Col End -->
                            <div class="col-6 col-xl mb-xl-0">
                                <a class="btn d-block" href="#">Ambiguity</a>
                            </div>
                            <!-- Col End -->
                        </div>
                        <!-- Row End -->
                        <div class="row">
                            <div class="col-6 col-xl mb-xl-0">
                                <a class="btn d-block" href="#">Adventures</a>
                            </div>
                            <!-- Col End -->
                            <div class="col-6 col-xl mb-xl-0">
                                <a class="btn d-block" href="#">Fantasia</a>
                            </div>
                            <!-- Col End -->
                        </div>
                        <!-- Row End -->
                        <div class="row">
                            <div class="col-6 col-xl mb-xl-0">
                                <a class="btn d-block" href="#">Horror</a>
                            </div>
                            <!-- Col End -->
                            <div class="col-6 col-xl mb-xl-0">
                                <a class="btn d-block" href="#">Fiction</a>
                            </div>
                            <!-- Col End -->
                        </div>
                        <!-- Row End -->
                    </div>
                    <!-- Card Body End -->
                </div>
                <!-- Type Collapse End -->
            </div>
            <!-- Card End -->
            <div class="card">
                <div class="card-header" id="headingTwo">
                    <h2 class="mb-0"><button aria-controls="production" aria-expanded="false" class="d-flex align-items-center justify-content-between btn btn-link collapsed" data-target="#production" data-toggle="collapse">Year of Production <span class="icofont-circled-down"></span></button></h2>
                </div>
                <!-- Card Header End -->
                <div aria-labelledby="headingTwo" class="collapse" data-parent="#accordion" id="production">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-4 col-xl mb-xl-0">
                                <a class="btn d-block" href="#">All</a>
                            </div>
                            <!-- Col End -->
                            <div class="col-4 col-xl mb-xl-0">
                                <a class="btn d-block" href="#">2000</a>
                            </div>
                            <!-- Col End -->
                            <div class="col-4 col-xl mb-xl-0">
                                <a class="btn d-block" href="#">2001</a>
                            </div>
                            <!-- Col End -->
                        </div>
                        <!-- Row End -->
                        <div class="row">
                            <div class="col-4 col-xl mb-xl-0">
                                <a class="btn d-block" href="#">2002</a>
                            </div>
                            <!-- Col End -->
                            <div class="col-4 col-xl mb-xl-0">
                                <a class="btn d-block" href="#">2003</a>
                            </div>
                            <!-- Col End -->
                            <div class="col-4 col-xl mb-xl-0">
                                <a class="btn d-block" href="#">2004</a>
                            </div>
                            <!-- Col End -->
                        </div>
                        <!-- Row End -->
                        <div class="row">
                            <div class="col-4 col-xl mb-xl-0">
                                <a class="btn d-block" href="#">2005</a>
                            </div>
                            <!-- Col End -->
                            <div class="col-4 col-xl mb-xl-0">
                                <a class="btn d-block" href="#">2006</a>
                            </div>
                            <!-- Col End -->
                            <div class="col-4 col-xl mb-xl-0">
                                <a class="btn d-block" href="#">2007</a>
                            </div>
                            <!-- Col End -->
                        </div>
                        <!-- Row End -->
                        <div class="row">
                            <div class="col-4 col-xl mb-xl-0">
                                <a class="btn d-block" href="#">2008</a>
                            </div>
                            <!-- Col End -->
                            <div class="col-4 col-xl mb-xl-0">
                                <a class="btn d-block" href="#">2009</a>
                            </div>
                            <!-- Col End -->
                            <div class="col-4 col-xl mb-xl-0">
                                <a class="btn d-block" href="#">2010</a>
                            </div>
                            <!-- Col End -->
                        </div>
                        <!-- Row End -->
                        <div class="row">
                            <div class="col-4 col-xl mb-xl-0">
                                <a class="btn d-block" href="#">2011</a>
                            </div>
                            <!-- Col End -->
                            <div class="col-4 col-xl mb-xl-0">
                                <a class="btn d-block" href="#">2012</a>
                            </div>
                            <!-- Col End -->
                            <div class="col-4 col-xl mb-xl-0">
                                <a class="btn d-block" href="#">2013</a>
                            </div>
                            <!-- Col End -->
                        </div>
                        <!-- Row End -->
                        <div class="row">
                            <div class="col-4 col-xl mb-xl-0">
                                <a class="btn d-block" href="#">2014</a>
                            </div>
                            <!-- Col End -->
                            <div class="col-4 col-xl mb-xl-0">
                                <a class="btn d-block" href="#">2015</a>
                            </div>
                            <!-- Col End -->
                            <div class="col-4 col-xl mb-xl-0">
                                <a class="btn d-block" href="#">2016</a>
                            </div>
                            <!-- Col End -->
                        </div>
                        <!-- Row End -->
                        <div class="row">
                            <div class="col-4 col-xl mb-xl-0">
                                <a class="btn d-block" href="#">2017</a>
                            </div>
                            <!-- Col End -->
                            <div class="col-4 col-xl mb-xl-0">
                                <a class="btn d-block" href="#">2018</a>
                            </div>
                            <!-- Col End -->
                            <div class="col-4 col-xl mb-xl-0">
                                <a class="btn d-block" href="#">2019</a>
                            </div>
                            <!-- Col End -->
                        </div>
                        <!-- Row End -->
                        <div class="row">
                            <div class="col-4 col-xl mb-xl-0">
                                <a class="btn d-block" href="#">2020</a>
                            </div>
                            <!-- Col End -->
                            <div class="col-4 col-xl mb-xl-0">
                                <a class="btn d-block" href="#">2021</a>
                            </div>
                            <!-- Col End -->
                            <div class="col-4 col-xl mb-xl-0">
                                <a class="btn d-block" href="#">2022</a>
                            </div>
                            <!-- Col End -->
                        </div>
                        <!-- Row End -->
                    </div>
                    <!-- Card Body End -->
                </div>
                <!-- Production Collapse End -->
            </div>
            <!-- Card End -->
            <div class="card">
                <div class="card-header" id="headingThree">
                    <h2 class="mb-0"><button aria-controls="quality" aria-expanded="false" class="d-flex align-items-center justify-content-between btn btn-link collapsed" data-target="#quality" data-toggle="collapse">Display Quality <span class="icofont-circled-down"></span></button></h2>
                </div>
                <!-- Card Header End -->
                <div aria-labelledby="headingThree" class="collapse" data-parent="#accordion" id="quality">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-6 col-xl mb-xl-0">
                                <a class="btn d-block" href="#">All</a>
                            </div>
                            <!-- Col End -->
                            <div class="col-6 col-xl mb-xl-0">
                                <a class="btn d-block" href="#">720p HDTV</a>
                            </div>
                            <!-- Col End -->
                        </div>
                        <!-- Row End -->
                        <div class="row">
                            <div class="col-6 col-xl mb-xl-0">
                                <a class="btn d-block" href="#">1080p BluRay</a>
                            </div>
                            <!-- Col End -->
                            <div class="col-6 col-xl mb-xl-0">
                                <a class="btn d-block" href="#">720p BluRay</a>
                            </div>
                            <!-- Col End -->
                        </div>
                        <!-- Row End -->
                        <div class="row">
                            <div class="col-6 col-xl mb-xl-0">
                                <a class="btn d-block" href="#">1080p WEB-DL</a>
                            </div>
                            <!-- Col End -->
                            <div class="col-6 col-xl mb-xl-0">
                                <a class="btn d-block" href="#">720p WEBRip</a>
                            </div>
                            <!-- Col End -->
                        </div>
                        <!-- Row End -->
                        <div class="row">
                            <div class="col-6 col-xl mb-xl-0">
                                <a class="btn d-block" href="#">720p HD</a>
                            </div>
                            <!-- Col End -->
                            <div class="col-6 col-xl mb-xl-0">
                                <a class="btn d-block" href="#">1080p HD</a>
                            </div>
                            <!-- Col End -->
                        </div>
                        <!-- Row End -->
                        <div class="row">
                            <div class="col-6 col-xl mb-xl-0">
                                <a class="btn d-block" href="#">HDTV</a>
                            </div>
                            <!-- Col End -->
                            <div class="col-6 col-xl mb-xl-0">
                                <a class="btn d-block" href="#">720p WEB-Dl</a>
                            </div>
                            <!-- Col End -->
                        </div>
                        <!-- Row End -->
                    </div>
                    <!-- Card Body End -->
                </div>
                <!-- Quality Collapse End -->
            </div>
            <!-- Card End -->
            <div class="card">
                <div class="card-header" id="headingFour">
                    <h2 class="mb-0"><button aria-controls="country" aria-expanded="false" class="d-flex align-items-center justify-content-between btn btn-link collapsed" data-target="#country" data-toggle="collapse">Country of Production <span class="icofont-circled-down"></span></button></h2>
                </div>
                <!-- Card Header End -->
                <div aria-labelledby="headingThree" class="collapse" data-parent="#accordion" id="country">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-6 col-xl mb-xl-0">
                                <a class="btn d-block" href="#">All</a>
                            </div>
                            <!-- Col End -->
                            <div class="col-6 col-xl mb-xl-0">
                                <a class="btn d-block" href="#">France</a>
                            </div>
                            <!-- Col End -->
                        </div>
                        <!-- Row End -->
                        <div class="row">
                            <div class="col-6 col-xl mb-xl-0">
                                <a class="btn d-block" href="#">Canada</a>
                            </div>
                            <!-- Col End -->
                            <div class="col-6 col-xl mb-xl-0">
                                <a class="btn d-block" href="#">China</a>
                            </div>
                            <!-- Col End -->
                        </div>
                        <!-- Row End -->
                        <div class="row">
                            <div class="col-6 col-xl mb-xl-0">
                                <a class="btn d-block" href="#">Argentina</a>
                            </div>
                            <!-- Col End -->
                            <div class="col-6 col-xl mb-xl-0">
                                <a class="btn d-block" href="#">Australia</a>
                            </div>
                            <!-- Col End -->
                        </div>
                        <!-- Row End -->
                        <div class="row">
                            <div class="col-6 col-xl mb-xl-0">
                                <a class="btn d-block" href="#">United States</a>
                            </div>
                            <!-- Col End -->
                            <div class="col-6 col-xl mb-xl-0">
                                <a class="btn d-block" href="#">Germany</a>
                            </div>
                            <!-- Col End -->
                        </div>
                        <!-- Row End -->
                        <div class="row">
                            <div class="col-6 col-xl mb-xl-0">
                                <a class="btn d-block" href="#">Japan</a>
                            </div>
                            <!-- Col End -->
                            <div class="col-6 col-xl mb-xl-0">
                                <a class="btn d-block" href="#">Italy</a>
                            </div>
                            <!-- Col End -->
                        </div>
                        <!-- Row End -->
                    </div>
                    <!-- Card Body End -->
                </div>
                <!-- Country Collapse End -->
            </div>
            <!-- Card End -->
            <div class="card">
                <div class="card-header" id="headingFive">
                    <h2 class="mb-0"><button aria-controls="language" aria-expanded="false" class="d-flex align-items-center justify-content-between btn btn-link collapsed" data-target="#language" data-toggle="collapse">The Language <span class="icofont-circled-down"></span></button></h2>
                </div>
                <!-- Card Header End -->
                <div aria-labelledby="headingThree" class="collapse" data-parent="#accordion" id="language">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-6 col-xl mb-xl-0">
                                <a class="btn d-block" href="#">All</a>
                            </div>
                            <!-- Col End -->
                            <div class="col-6 col-xl mb-xl-0">
                                <a class="btn d-block" href="#">Arabic</a>
                            </div>
                            <!-- Col End -->
                        </div>
                        <!-- Row End -->
                        <div class="row">
                            <div class="col-6 col-xl mb-xl-0">
                                <a class="btn d-block" href="#">English</a>
                            </div>
                            <!-- Col End -->
                            <div class="col-6 col-xl mb-xl-0">
                                <a class="btn d-block" href="#">German</a>
                            </div>
                            <!-- Col End -->
                        </div>
                        <!-- Row End -->
                        <div class="row">
                            <div class="col-6 col-xl mb-xl-0">
                                <a class="btn d-block" href="#">Spanish</a>
                            </div>
                            <!-- Col End -->
                            <div class="col-6 col-xl mb-xl-0">
                                <a class="btn d-block" href="#">French</a>
                            </div>
                            <!-- Col End -->
                        </div>
                        <!-- Row End -->
                        <div class="row">
                            <div class="col-6 col-xl mb-xl-0">
                                <a class="btn d-block" href="#">Italian</a>
                            </div>
                            <!-- Col End -->
                            <div class="col-6 col-xl mb-xl-0">
                                <a class="btn d-block" href="#">Russian</a>
                            </div>
                            <!-- Col End -->
                        </div>
                        <!-- Row End -->
                        <div class="row">
                            <div class="col-6 col-xl mb-xl-0">
                                <a class="btn d-block" href="#">Japanese</a>
                            </div>
                            <!-- Col End -->
                            <div class="col-6 col-xl mb-xl-0">
                                <a class="btn d-block" href="#">Chinese</a>
                            </div>
                            <!-- Col End -->
                        </div>
                        <!-- Row End -->
                    </div>
                    <!-- Card Body End -->
                </div>
                <!-- Language Collapse End -->
            </div>
            <!-- Card End -->
        </div>
        <!-- Filter Accordion End -->
    </div>
    <!-- Filter Sidebar End -->

    <!-- Javascript Files
    ================================================== -->
    <!-- Initialize jQuery Library -->
    <script src="js/jquery.js"></script>
    <!-- Popper jQuery -->
    <script src="js/popper.min.js"></script>
    <!-- Bootstrap jQuery -->
    <script src="js/bootstrap.min.js"></script>
    <!-- jQuery Owl Carousel -->
    <script src="js/owl.carousel.min.js"></script>
    <!-- jQuery Slick Slider -->
    <script src="js/slick.min.js"></script>
    <!-- jQuery Slick Animation -->
    <script src="js/slick-animation.min.js"></script>
    <!-- jQuery Pop-up Search -->
    <script src="js/jquery.magnific-popup.min.js"></script>
    <!-- jQuery Swiper Slider -->
    <script src="js/swiper.min.js"></script>
    <!-- jQuery Datepicker -->
    <script src="js/bootstrap-datepicker.min.js"></script>
    <!-- JQuery Sidebar -->
    <script src="js/sidebar.js"></script>
    <!-- Template Custom -->
    <script src="js/main.js"></script>

</body>

</html>

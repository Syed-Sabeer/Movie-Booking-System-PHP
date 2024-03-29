<?php
include("connection.php");
$user = "SELECT * FROM `users`";
$userdetail = mysqli_query($con ,$user);

$movies = "SELECT * FROM `movies`";
$userdetail = mysqli_query($con ,$movies);

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
   
</head>

<body>
   
    <div class="main" id="main">
 
<?php 
include("nav.php");
?>

        <!-- Start Sub Header Section -->
        <div class="sub-header">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-sm-12">
                        <nav aria-label="breadcrumb" class="text-center breadcrumb-nav">
                            <h2 class="Page-title">About Us</h2>
                            <ol class="breadcrumb">
                                <li>
                                    <i class="fa fa-home"></i>
                                    <a href="index.php">Home</a>
                                    <i class="fa fa-angle-right"></i>
                                </li>
                                <li><a href="about.php">About Us</a></li>
                            </ol>
                        </nav>
                        <!-- Breadcrumb End -->
                    </div>
                    <!-- Col End -->
                </div>
                <!-- Row End -->
            </div>
            <!-- Container end -->
        </div>
        <!-- Sub Header Section End -->
        <!-- Start Main Content -->
        <div class="main-content">
            <!-- Start Our Statistics Section -->
            <section class="statistics">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <h2 class="block-title">Our Statistics</h2>
                        </div>
                        <!-- Col End -->
                    </div>
                    <!-- Row End -->
                    
                    <div class="row">
                    <?php 

$sql_movie = "SELECT COUNT(*) as row_count_movie FROM `movies`";
$result_movie = $con->query($sql_movie);	
$row_movie = $result_movie->fetch_assoc();
$rowCount_movie = $row_movie['row_count_movie'];

?>
                        <div class="col-6 col-xl mb-5 mb-xl-0">
                            <div class="icon-box text-center">
                                <div class="icon"><i class="fas fa-video"></i></div>
                                <div class="number" data-from="10" data-to="9300" data-time="1000"><?php echo $rowCount_movie ?></div>
                                <p>Movies</p>
                            </div>
                            <!-- Icon Box End -->
                        </div>
                        <!-- Col End -->
                      


                        <?php 
						$sql_user = "SELECT COUNT(*) as row_counts_user FROM `users`";
						$result_user = $con->query($sql_user);	
$row_user = $result_user->fetch_assoc();
$rowCount_user = $row_user['row_counts_user'];


?>
                        <!-- Col End -->
                        <div class="col-6 col-xl mb-5 mb-xl-0">
                            <div class="icon-box text-center">
                                <div class="icon"><i class="fas fa-users"></i></div>
                                <div class="number" data-from="10" data-to="1500" data-time="1000"><?php echo $rowCount_user ?></div>
                                <p>Members</p>
                            </div>
                            <!-- Icon Box End -->
                        </div>
                        <!-- Col End -->
                       
                    </div>
                    <!-- Row end -->
                </div>
                <!-- Container end -->
            </section>
            <!-- Our Statistics Section End -->
            <div class="gap-50"></div>
            <!-- Start Subscribe Section -->
            <section class="subscribe section-parallax">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <img class="img-fluid mb-4" src="images/about/05.png" alt="">
                        </div>
                        <!-- Col End -->
                        <div class="col-md-6">
                            <h2 class="mb-4">And If You
                                Join the Experience?</h2>
                            <p class="mb-4">True friendship is perhaps the only relation that survives the trials and tribulations of time and remains unconditional. A unique blend of affection, loyalty, love, respect, trust and loads of fun is perhaps what describes the true meaning of friendship. Similar interests, mutual respect and strong attachment with each other are what friends share between each other. These are just the general traits of a friendship. To experience what is friendship, one must have true friends, who are indeed rare treasure.</p>
                            <a class="btn hvr-sweep-to-right" href="signup.php">Register Now</a>
                        </div>
                        <!-- Col End -->
                    </div>
                    <!-- Row end -->
                </div>
                <!-- Container end -->
            </section>
            <!-- Subscribe Section End -->
            <div class="gap-50"></div>
            <!-- Start Our Team Section -->
            <section class="our-team">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <h2 class="block-title">Our Team</h2>
                        </div>
                        <!-- Col End -->
                    </div>
                    <!-- Row end -->
                    <div class="row">
                       
                        <div class="col-6 col-xl mb-5 mb-xl-0">
                            <div class="card team-box">
                                <div class="team-box-img">
                                    <img src="images/about/02.jpg" class="img-fluid img-zoom" alt="">
                                </div>
                                <div class="card-body">
                                    <h2 class="card-title team-box-name">Taimoor Ali</h2>
                                    <span>Designer</span>
                                </div>
                            </div>
                            <!-- Team Box End -->
                        </div>
                        <!-- Col End -->
                        <div class="col-6 col-xl mb-5 mb-xl-0">
                            <div class="card team-box">
                                <div class="team-box-img">
                                    <img src="images/about/03.jpg" class="img-fluid img-zoom" alt="">
                                </div>
                                <div class="card-body">
                                    <h2 class="card-title team-box-name">Syed Sabeer Faisal</h2>
                                    <span>Developer</span>
                                </div>
                            </div>
                            <!-- Team Box End -->
                        </div>
                        <!-- Col End -->
                        <div class="col-6 col-xl mb-5 mb-xl-0">
                            <div class="card team-box">
                                <div class="team-box-img">
                                    <img src="images/about/04.jpg" class="img-fluid img-zoom" alt="">
                                </div>
                                <div class="card-body">
                                    <h2 class="card-title team-box-name">Muhammad Ahmed</h2>
                                    <span>Data Inserter</span>
                                </div>
                            </div>
                            <!-- Team Box End -->
                        </div>
                        <!-- Col End -->
                    </div>
                    <!-- Row end -->
                </div>
                <!-- Container end -->
            </section>
            <!-- Our Team Section End -->
        </div>
        <!-- Main Content End -->
        <?php  
include("footer.php");
?>
    </div>
    <!-- Main Class End -->


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

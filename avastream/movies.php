<?php
include("./connection.php");
include("nav.php");
function getMovieDetails($con, $movie_id) {
    $query = "SELECT * FROM movies WHERE id = '$movie_id'";
    $result = mysqli_query($con, $query);
    return mysqli_fetch_assoc($result);
}

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

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
    <!--[if lt IE 9]>
          <script src="js/html5shiv.js"></script>
          <script src="js/respond.min.js"></script>
        <![endif]-->
        
    <style>
        .wrap_elips {
	white-space: nowrap ;
	overflow: hidden ;
	text-overflow: ellipsis ;
  }
  .red-c{
    color: red;
    font-weight: bold;
  }
    </style>
</head>

<body>

    <!-- Preloader End -->
    <div class="main" id="main">
   <!-- Start Swiper Slider -->
        <div class="swiper-container loading">
            <div class="swiper-wrapper">
            <?php
     
     $query = "SELECT movie_id FROM popular_movies";
     $result = mysqli_query($con, $query);
     while ($row = mysqli_fetch_assoc($result)) {
       $movie_id = $row['movie_id'];
       $movie = getMovieDetails($con, $movie_id);
       echo '    

                <div class="swiper-slide swiper-bg" style="background-image:url(\'../Main Assests/images/movies/'.$movie['image'].'\')">
                    <img src="images/movies/01.jpg" class="entity-img" alt="">
                    <div class="top-badge">
                        <div class="video-badge">
                            <img class="img-fluid" src="images/top-movies.png" alt="">
                        </div>
                    </div>
                    <div class="content">
                        <p class="title" data-swiper-parallax="-30%" data-swiper-parallax-scale=".7" class="wrap_elips">'.$movie['name'].'</p>
                        <span class="caption mb-4" data-swiper-parallax="-20%"><span style="color:red; font-weight:bold;">Tagline:</span> '.$movie['tagline'].'</span>
                        <div class="slider-buttons d-flex align-items-center" data-swiper-parallax="-30%" data-swiper-parallax-scale=".7">
                        <a class="btn hvr-sweep-to-right" href="movie-single.php?movie_id='.$movie_id.'" tabindex="0"> Details</a>
                        <a class="btn hvr-sweep-to-right ml-3" href="movie_booking.php?id='.$movie_id.'" tabindex="0"><i class="fa-solid fa-ticket"></i> Book Now</a>
                        </div>
                    </div>
                </div>


                ' ;
     }
                ?>
         

            </div>
            <!-- Swiper Wrapper -->
            <div class="swiper-button-prev swiper-button-white"></div>
            <div class="swiper-button-next swiper-button-white"></div>
            <!-- navigation buttons -->
        </div>
        <!-- End Swiper Slider -->
        <!-- Start Main Content -->
        <div class="main-content" >
            <!-- Start Recently Added Section -->
            <section class="recently-added">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <h2 class="block-title">Upcoming Movies</h2>
                            <!-- Start Pupular Slider -->
                            <div id="pupular-slider" class="owl-carousel owl-theme">

                            <?php
          // Fetch and display upcoming movies
$query = "SELECT movie_id FROM upcoming_movies";
$result = mysqli_query($con, $query);
while ($row = mysqli_fetch_assoc($result)) {
  $movie_id = $row['movie_id'];
  $movie = getMovieDetails($con, $movie_id);
  echo '
                            
                                <div class="item">
                                    <div class="video-block">
                                        <div class="video-thumb position-relative thumb-overlay">
                                            <a href="#"><img class="img-fluid" src="../Main Assests/images/movies/'.$movie['image'].'" alt=""></a>
                                            <div class="box-content">
                                                <ul class="icon">
                                                <li>
                                                <a href="movie_booking.php?id='.$movie_id.'"><i class="fa-solid fa-ticket"></i></a>
                                            </li>
                                            <li>
                                                <a href="movie-single.php?movie_id='.$movie_id.'"><i class="fas fa-info"></i></a>
                                            </li>
                                                </ul>
                                            </div>
                                            <!-- Box Content End -->
                                        </div>
                                        <!-- Video Thumb End -->
                                        <div class="video-content">
                                            <h2 class="video-title"><a href="movie-single.php?movie_id='.$movie_id.'">'.$movie['name'].'</a></h2>
                                            <div class="video-info d-flex align-items-center">
                                            <span class="video-year red-c" style="color:red;">'.$movie['release_date'].'</span> <span class="video-age"><i class="fa-solid fa-star red-c"></i> '.$movie['imdb'].'</span> <span class="video-type"><i class="fa-regular fa-clock red-c"></i> '.$movie['runtime'].' min</span>
                                            </div>
                                        </div>
                                        <!-- video Content End -->
                                    </div>
                                    <!-- video Block End -->
                                </div>
                            '; }
                            ?>



                                <!-- Owl Slider End -->
                            </div>
                            <!-- Pupular Slider End -->
                        </div>
                        <!-- Col End -->
                    </div>
                    <!-- Row End -->
                </div>
                <!-- Container End -->
            </section>
            <!-- Recently Added Section End -->
            <!-- Start Hollywood Movies Section -->
            <section class="hollywood-movies">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <h2 class="block-title">Popular Movies</h2>
                        </div>
                    </div>
                    <div class="row">
                    <?php
          // Fetch and display upcoming movies
$query = "SELECT movie_id FROM popular_movies";
$result = mysqli_query($con, $query);
while ($row = mysqli_fetch_assoc($result)) {
  $movie_id = $row['movie_id'];
  $movie = getMovieDetails($con, $movie_id);
  echo '

                        <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-2">
                            <div class="video-block">
                                <div class="video-thumb position-relative thumb-overlay">
                                    <a href="#"><img class="img-fluid" src="../Main Assests/images/movies/'.$movie['image'].'" alt=""></a>
                                    <div class="box-content">
                                        <ul class="icon">
                                        <li>
                                        <a href="movie_booking.php?id='.$movie_id.'"><i class="fa-solid fa-ticket"></i></a>
                                    </li>
                                    <li>
                                        <a href="movie-single.php?movie_id='.$movie_id.'"><i class="fas fa-info"></i></a>
                                    </li>
                                        </ul>
                                    </div>
                                    <!-- Box Content End -->
                                </div>
                                <!-- Video Thumb End -->
                                <div class="video-content">
                                    <h2 class="video-title"><a href="movie-single.php?movie_id='.$movie_id.'">'.$movie['name'].'</a></h2>
                                    <div class="video-info d-flex align-items-center">
                                    <span class="video-year">'.$movie['release_date'].'</span>
                                    <span class="video-age">'.$movie['rated'].'</span>
                                    <span class="video-type">'.$movie['imdb'].'</span>
                                    </div>
                                </div>
                                <!-- video Content End -->
                            </div>
                            <!-- video Block End -->
                        </div>
                        <!-- Col End -->
'; }
?>


                    </div>
                    <!-- Row End -->
                </div>
                <!-- Container End -->
            </section>
            <!-- Hollywood Movies Section End -->
            <!-- Start Award-Winning Movies Section -->
            <section class="award-winning">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <h2 class="block-title">SUGGESTED FOR YOU</h2>
                        </div>
                    </div>
                    <div class="row">



                     
<?php
                    // Fetch and display upcoming movies
$query = "SELECT movie_id FROM suggested_movies";
$result = mysqli_query($con, $query);

while ($row = mysqli_fetch_assoc($result)) {
    $movie_id = $row['movie_id'];
    $movie = getMovieDetails($con, $movie_id); // Assuming getMovieDetails is defined elsewhere
    
    echo '
            
                        <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-2">
                            <div class="video-block">
                                <div class="video-thumb position-relative thumb-overlay">
                                    <a href="#"><img alt="" class="img-fluid" src="../Main Assests/images/movies/'.$movie['image'].'"></a>
                                    <div class="box-content">
                                        <ul class="icon">
                                        <li>
                                        <a href="movie_booking.php?id='.$movie_id.'"><i class="fa-solid fa-ticket"></i></a>
                                    </li>
                                    <li>
                                        <a href="movie-single.php?movie_id='.$movie_id.'"><i class="fas fa-info"></i></a>
                                    </li>
                                        </ul>
                                    </div>
                                    <!-- Box Content End -->
                                </div>
                                <!-- Video Thumb End -->
                                <div class="video-content">
                                    <h2 class="video-title"><a href="movie-single.php?movie_id='.$movie_id.'">'.$movie['name'].'</a></h2>
                                    <div class="video-info d-flex align-items-center">
                                        <span class="video-year">'.$movie['release_date'].'</span> <span class="video-age">'.$movie['rated'].'</span> <span class="video-type">'.$movie['imdb'].'</span>
                                    </div>
                                </div>
                                <!-- video Content End -->
                            </div>
                            <!-- video Block End -->
                        </div>
                        <!-- Col End -->

'; }
?>




                    </div>
                    <!-- Row End -->
                </div>
                <!-- Container End -->
            </section>
            <!-- Award-Winning Movies Section End -->
        </div>
        <!-- Main Content End -->
      
        <?php 

include("footer.php");
?>
    </div>
    <!-- Main Class End -->
>

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
    <script src="js/swiper-custom.js"></script>
    <!-- jQuery Datepicker -->
    <script src="js/bootstrap-datepicker.min.js"></script>
    <!-- JQuery Sidebar -->
    <script src="js/sidebar.js"></script>
    <!-- Template Custom -->
    <script src="js/main.js"></script>

</body>

</html>

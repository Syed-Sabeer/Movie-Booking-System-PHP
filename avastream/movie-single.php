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

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

        <link rel="stylesheet" href="./css/style2.css">
</head>

<body>
 

    <div class="main" id="main">
 
       
        <!-- Start Main Content -->
        <div class="main-content">

            <!-- Start Play Details Section -->
            <section class="play-details">
                <div class="container-fluid">
<?php
include("./connection.php");

function getMovieDetails($con, $id) {
    $query = "SELECT * FROM movies WHERE id = '$id'";
    $result = mysqli_query($con, $query);
    return mysqli_fetch_assoc($result);
}

if (isset($_GET['movie_id'])) {
    $id = $_GET['movie_id'];
} elseif (isset($_GET['id'])) {
    $id = $_GET['id'];
} else {
    // Handle the case when neither movie_id nor id is provided
    // You can display an error message or redirect the user
    exit("Movie ID not provided.");
}

$movie = getMovieDetails($con, $id);

    
    if ($movie) {

echo'
                    <div class="row">
                        <div class="col-md-3">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="play-thumb mb-4">
                                        <img class="img-fluid" src="../Main Assests/images/movies/'.$movie['image'].'" alt="">
                                       
                                    </div>
                                   
                                </div>
                                <!-- Col End -->
                            </div>
                            <!-- Row End -->
                        </div>
                        <!-- Col End -->
                        <div class="col-md-9">
                            <div class="play-details-content">
                                <div class="title-block d-flex align-items-center justify-content-between">
                                    <h2 class="play-title">'.$movie['name'].'</h2>
                                </div>
                                <!-- Title Block -->
                                <div class="details-info mb-4">
                                    <span><i class="icofont-user mr-2" aria-hidden="true"></i> '.$movie['rated'].'</span>
                                    <span><i class="fa-regular fa-clock red-c"></i> '.$movie['runtime'].'min</span>
                                    <span class="red-c" style="color:red;"> '.$movie['release_date'].'</span>
                                    <span><i class="fa-solid fa-star red-c"></i> '.$movie['imdb'].'</span>
                                   
                                </div>
                                <!-- Details Info -->
                                <div class="details-desc">
                                    <p>'.$movie['description'].'</p>
                                </div>
                                <div class="details-desc">
                                <p><span class="red-c">Tagline:</span> '.$movie['tagline'].'</p>
                            </div>
                                <!-- Details Desc -->
                                <div class="movie-persons mb-4">
                                    <div class="person-block">
                                        <h5 class="title">Genre</h5>
                                        <p class="name">'.$movie['genre'].'</p>
                                    </div>
                                    <!-- Person Block -->
                                    <div class="person-block">
                                        <h5 class="title">Cast</h5>
                                        <p>'.$movie['cast'].'</p>
                                    </div>
                                    <!-- Person Block -->
                                </div>
                                <!-- Movie Persons -->
                                <div class="details-buttons">
                                    <div class="row d-flex align-items-center">
                                        
                                        <div class="col-6 col-xl mb-xl-0 mb-3">
                                            <a href="movie_booking.php?id='.$id.'" class="btn d-block hvr-sweep-to-right" tabindex="0"></i>Book Now</a>
                                        </div>
                                        <!-- Col End -->

                                        
                                      
            


                                       
                                       
                                           
                                        </div>
                                        <!-- Col End -->

                                        <div style="margin-top:10%;">
                                        <h5 class="title">Watch Trailer</h5>
                                        <iframe width="100%" height="500px" src="https://www.youtube.com/embed/'.$movie['trailer_link'].'"
                                            frameborder="0" allowfullscreen="1" title="" class="img-cover iframes-trailer mt-3" loading="lazy"></iframe>
                            
</div>
                                        
                                    </div>
                                    <!-- Row End -->
                                </div>
                                <!-- Details Buttons End -->
                            </div>
                            <!-- Details Content End -->
                        </div>
                        <!-- Col End -->
                    </div>



                    
                 
';
    }

?>


                </div>
                <!-- Container End -->
            </section>
            <!-- Play Details Section End -->
           
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

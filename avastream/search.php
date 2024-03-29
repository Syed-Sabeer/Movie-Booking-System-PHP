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
    <link rel="stylesheet" href="myProjects/webProject/icofont/css/icofont.min.css">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

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
    
    <link rel="stylesheet" href="./css/style2.css">
</head>




<?php
include("connection.php");
include("nav.php");


// Get the search query from the URL parameter
$search_query = $_GET['s'];

// Prepare the SQL query
$query = "SELECT * FROM movies WHERE name LIKE '%$search_query%'";

// Execute the query
$result = $con->query($query);
?>
  <!-- Start Trending Section -->
  <section class="trending">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <h2 class="block-title">Search Results for &nbsp;<span class="red-c"> <?php echo $search_query ?></span></h2>
                            <div class="row">
<?php

// Display the search results
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {

echo '
        <!-- Col End -->
        <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-2">
            <div class="video-block">
                <div class="video-thumb position-relative thumb-overlay">
                    <a href="#"><img alt="'. $row['name'] .'" class="img-fluid" src="../Main Assests/images/movies/'.$row['image'].'"></a>
                    <div class="box-content">
                        <ul class="icon">
                        <li>
                        <a href="movie_booking.php?id='.$row['id'].'"><i class="fa-solid fa-ticket"></i></a>
                    </li>
                            <li>
                                <a href="movie-single.php?id='.$row['id'].'"><i class="fas fa-info"></i></a>
                            </li>
                        </ul>
                    </div>
                    <!-- Box Content End -->
                </div>
                <!-- Video Thumb End -->
                <div class="video-content">
                    <h2 class="video-title"><a href="movie-single.php?id='.$row['id'].'">'. $row['name'] .'</a></h2>
                    <div class="video-info d-flex align-items-center">
                        <span class="video-year">'. $row['release_date'] .'</span> <span class="video-age">'. $row['rated'] .'</span> <span class="video-type">'. $row['imdb'] .'</span>
                    </div>
                </div>
                <!-- video Content End -->
            </div>
            <!-- video Block End -->
        </div>
        <!-- Col End -->

        ';
     
    }
} else {
    echo "No results found.";
}

?>

                              
                              
</div>
                            <!-- Row End -->
                        </div>
                    </div>
                    <!-- Row End -->
                </div>
                <!-- Container End -->
            </section>
            <!-- Trending Section End -->

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
    <script src="js/swiper-custom.js"></script>
    <!-- jQuery Datepicker -->
    <script src="js/bootstrap-datepicker.min.js"></script>
    <!-- JQuery Sidebar -->
    <script src="js/sidebar.js"></script>
    <!-- Template Custom -->
    <script src="js/main.js"></script>

</body>

</html>





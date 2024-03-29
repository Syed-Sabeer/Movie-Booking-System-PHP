<?php
include("./connection.php");
include("./nav.php")
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

    <style>
        .genre-h1{
            text-align: center;
            
        }
    </style>
</head>
<body>

<!DOCTYPE html>
<html>
<head>
    <title>Movies by Genre</title>
</head>
<body>
    <?php
   
   include("./connection.php");


    $selectedGenre = $_GET['genre'];

    // Query movies with the selected genre in the comma-separated string
    $sql = "SELECT * FROM movies WHERE CONCAT(',', genre, ',') LIKE '%$selectedGenre%'";
    $result = $con->query($sql);

    if ($result->num_rows > 0) {
        echo "<h1 class='genre-h1 mt-5'>All $selectedGenre Movies</h1>";

echo'
<!-- Start Trending Section -->
<section class="trending">
              <div class="container-fluid">
                  <div class="row">
                      <div class="col-lg-12">
                       
                          <div class="row">
';


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
            // Display other movie details as needed
        }


    } else {
        echo "<h2>No movies found in the $selectedGenre genre.</h2>";
    }

    // Close the database connection
   
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

</body>
</html>

     
    



    
</body>
</html>

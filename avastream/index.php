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
    <link rel="stylesheet" href="myProjects/webProject/icofont/css/icofont.min.css">

    <script src="jquery-3.6.4.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

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
    
    
    <link rel="stylesheet" href="css/style2.css">
    <link rel="stylesheet" href="css/style4.css">


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
    
    
    <link rel="stylesheet" href="css/style2.css">
    <link rel="stylesheet" href="css/style4.css">

    <style>
        .wrap_elips {
	white-space: nowrap ;
	overflow: hidden ;
	text-overflow: ellipsis ;
  }
    </style>
</head>

<body>

   
    <div class="main" id="main">
       
        <!-- Start Main Slider -->
        <div class="main-slider" id="main-slider">
            <div class="slider big-slider slider-wrap">
                
            <?php
     
     $query = "SELECT movie_id FROM now_in_theatres";
     $result = mysqli_query($con, $query);
     while ($row = mysqli_fetch_assoc($result)) {
       $movie_id = $row['movie_id'];
       $movie = getMovieDetails($con, $movie_id);
       echo '    
         
                <div class="slide slick-bg bg-3" style="background-image: url(\'../Main Assests/images/movies/'.$movie['imagename_cover'].'\');">
                    <div class="container-fluid position-relative h-100">
                        <div class="slider-content h-100">
                            <div class="row align-items-center h-100">
                                <div class="col-xl-6 col-lg-12 col-md-12">
                                  <h3 data-animation-in="fadeInUp" data-delay-in="1"><span class="badge bg-warning text-dark">'.$movie['tagline'].'</span></h3>
                                    <h1 data-animation-in="fadeInUp" data-delay-in="1">'.$movie['name'].'</h1>
                                    <div class="slide-info" data-animation-in="fadeInUp" data-delay-in="1">
                                        <span>'.$movie['release_date'].'</span> <span class="radius">'.$movie['rated'].'</span> <span>'.$movie['runtime'].'m</span>
                                    </div>
                                    <p data-animation-in="fadeInUp" data-delay-in="1">'.$movie['description'].'</p>
                                    <div class="slider-buttons d-flex align-items-center" data-animation-in="fadeInUp" data-delay-in="1">
                                    <a class="btn hvr-sweep-to-right" href="movie-single.php?movie_id='.$movie_id.'" tabindex="0"> Details</a>
                                    <a class="btn hvr-sweep-to-right ml-3" href="movie_booking.php?id='.$movie_id.'" tabindex="0"><i class="fa-solid fa-ticket"></i> Book Now</a>
                                    </div>
                                </div>
                                <!-- Col End -->
                            </div>
                            <!-- Row End -->
                        </div>
                        <!-- Slider Content End -->
                    </div>
                    <!-- Container End -->
                </div>
                '; }
?>




            </div>
            <!-- Slide Wrap End -->
        </div>
        <!-- Main Slider End -->
        <!-- Start Main Content -->
        <div class="main-content">
            <!-- Start Main Tabs Section -->
            <section class="main-tabs">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="season-tabs">
                                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link active" data-toggle="pill" href="#pills-additions" role="tab" aria-selected="true">Popular</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" data-toggle="pill" href="#pills-movies" role="tab" aria-selected="false">Top Rated</a>
                                    </li>
                                   
                                </ul>
                            </div>
                            <!-- Season Tabs End -->
                            <div class="tab-content" id="pills-tabContent">
                                <div id="pills-additions" class="tab-pane animated fadeInRight show active">
                                    <div class="row">
                                    <?php
     
$query = "SELECT movie_id FROM popular_movies";
$result = mysqli_query($con, $query);
while ($row = mysqli_fetch_assoc($result)) {
  $movie_id = $row['movie_id'];
  $movie = getMovieDetails($con, $movie_id);
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
                                                    <h2 class="video-title"><a href="movie-single.php?movie_id='.$movie_id.'" class="wrap_elips">'.$movie['name'].'</a></h2>
                                                    <div class="video-info d-flex align-items-center">
                                                        <span class="video-year">'.$movie['release_date'].'</span> <span class="video-age">'.$movie['rated'].'</span> <span class="video-type">'.$movie['imdb'].'</span>
                                                    </div>
                                                </div>
                                                <!-- video Content End -->
                                            </div>
                                            <!-- video Block End -->
                                        </div>
'; }
?>
                                       
                                    </div>
                                    <!-- Row End -->
                                </div>
                                <!-- Tap Pane 1 End -->
                                <div id="pills-movies" class="tab-pane animated fadeInRight">
                                    <div class="row">
<?php 
        
          $query = "SELECT movie_id FROM top_rated_movies";
          $result = mysqli_query($con, $query);
          while ($row = mysqli_fetch_assoc($result)) {
            $movie_id = $row['movie_id'];
            $movie = getMovieDetails($con, $movie_id);
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
                    <h2 class="video-title"><a href="movie-single.php?movie_id='.$movie_id.'" class="wrap_elips">'.$movie['name'].'</a></h2>
                    <div class="video-info d-flex align-items-center">
                        <span class="video-year">'.$movie['release_date'].'</span> <span class="video-age">'.$movie['rated'].'</span> <span class="video-type">'.$movie['imdb'].'</span>
                    </div>
                </div>
                <!-- video Content End -->
            </div>
            <!-- video Block End -->
        </div>
                                       '; }
                                       ?>

                                    </div>
                                    <!-- Row End -->
                                </div>
                                <!-- Tap Pane 2 End -->
                              
                            </div>
                            <!-- Tab Content End -->
                        </div>
                        <!-- Col End -->
                    </div>
                    <!-- Row End -->
                </div>
                <!-- Container End -->
            </section>
            <!-- Main Tabs Section End -->
            <?php


    // Step 2: Retrieve all movies from the database
    $sql = "SELECT genre FROM movies";
    $result = $con->query($sql);

    // Step 3: Process the data and count the movies for each genre
    $genreCount = array();
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $genres = explode(",", $row["genre"]);
            foreach ($genres as $genre) {
                $genre = trim($genre); // Remove leading/trailing whitespace
                if (!isset($genreCount[$genre])) {
                    $genreCount[$genre] = 1;
                } else {
                    $genreCount[$genre]++;
                }
            }
        }
    }

    ?>

            <section class="category container-fluid mt-4" id="category">

            <div class="col-md-12">
                            <h2 class="block-title">Genre</h2>
                        </div>

                        
<div class="category-grid">


<div class="category-card">
<img src="../Main Assests/images/fix/action.jpg" alt="" class="card-img">
<div class="name" onclick="showMovies('Action')">Action</div>
<div class="total"><?php echo isset($genreCount['Action']) ? $genreCount['Action'] : 0; ?></div>
</div>

<div class="category-card">
<img src="../Main Assests/images/fix/comedy.jpg" alt="" class="card-img">
<div class="name" onclick="showMovies('Comedy')">Comedy</div>
<div class="total"><?php echo isset($genreCount['Comedy']) ? $genreCount['Comedy'] : 0; ?></div>
</div>

<div class="category-card">
<img src="../Main Assests/images/fix/thriller.webp" alt="" class="card-img">
<div class="name" onclick="showMovies('Thriller')">Thriller</div>
<div class="total"><?php echo isset($genreCount['Thriller']) ? $genreCount['Thriller'] : 0; ?></div>
</div>

<div class="category-card">
<img src="../Main Assests/images/fix/horror.jpg" alt="" class="card-img">
<div class="name" onclick="showMovies('Horror')">Horror</div>
<div class="total"><?php echo isset($genreCount['Horror']) ? $genreCount['Horror'] : 0; ?></div>
</div>

<div class="category-card">
<img src="../Main Assests/images/fix/adventure.jpg" alt="" class="card-img">
<div class="name" onclick="showMovies('Adventure')">Adventure</div>
<div class="total"><?php echo isset($genreCount['Adventure']) ? $genreCount['Adventure'] : 0; ?></div>
</div>

<div class="category-card">
<img src="../Main Assests/images/fix/animated.jpg" alt="" class="card-img">
<div class="name" onclick="showMovies('Animation')">Animated</div>
<div class="total"><?php echo isset($genreCount['Animation']) ? $genreCount['Animation'] : 0; ?></div>
</div>

<div class="category-card">
<img src="../Main Assests/images/fix/crime.jpg" alt="" class="card-img">
<div class="name" onclick="showMovies('Crime')">Crime</div>
<div class="total"><?php echo isset($genreCount['Crime']) ? $genreCount['Crime'] : 0; ?></div>
</div>

<div class="category-card">
<img src="../Main Assests/images/fix/sci-fi.jpg" alt="" class="card-img">
<div class="name" onclick="showMovies('Science-fiction')">SCI-FI</div>
<div class="total"><?php echo isset($genreCount['Science-fiction']) ? $genreCount['Science-fiction'] : 0; ?></div>
</div>

</div>

</section>

<script>
        function showMovies(genre) {
            window.location.href = `genre.php?genre=${genre}`;
        }
    </script>


            <!-- Start Pupular Section -->
            <section class="pupular">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <h2 class="block-title">Upcoming Movies</h2>
                            <!-- Start Pupular Slider -->
                            <div class="owl-carousel owl-theme" id="pupular-slider">

                            
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
                                                <span class="video-year red-c" style="color:red;">'.$movie['release_date'].'</span> <span class="video-age"><i class="fa-solid fa-star red-c"></i> '.$movie['imdb'].'</span> <span class="video-type"><i class="fa-regular fa-clock red-c"></i> '.$movie['runtime'].' min</span>
                                            </div>
                                        </div>
                                        <!-- video Content End -->
                                    </div>
                                    <!-- video Block End -->
                                </div>
                                
      

                                ';
         

                            }
                            ?>                          



                            </div>
                            <!-- Pupular Slider End -->
                        </div>
                        <!-- Col End -->
                    </div>
                    <!-- Row End -->
                </div>
                <!-- Container End -->
            </section>
            <!-- Pupular Section End -->
            <!-- Start Office Box Section -->
            <section class="office-box">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <h2 class="block-title">NOW IN THEATRES</h2>
                        </div>
                        <!-- Col End -->
                    </div>
                    <!-- Row End -->
                    <div class="row">
                        <div class="col-lg-12">
                            <!-- Start Swiper Slider -->
                            <div class="swiper-container loading pt-0">
                                <div class="swiper-wrapper">
                                <?php
// Fetch and display upcoming movies
$query = "SELECT movie_id FROM now_in_theatres";
$result = mysqli_query($con, $query);

while ($row = mysqli_fetch_assoc($result)) {
    $movie_id = $row['movie_id'];
    $movie = getMovieDetails($con, $movie_id); // Assuming getMovieDetails is defined elsewhere
    
    echo '<div class="swiper-slide swiper-bg" style="background-image:url(\'../Main Assests/images/movies/'.$movie['image'].'\')">;


            <img alt="" class="entity-img" src="images/movies/05.jpg">
            <div class="top-badge">
                <div class="video-badge"><img alt="" class="img-fluid" src="images/top-movies.png"></div>
            </div>
            <div class="content">
                <p class="title" data-swiper-parallax="-30%" data-swiper-parallax-scale=".7">' . $movie['name'] . '</p>
                <span class="caption mb-4" data-swiper-parallax="-20%">' . $movie['description'] . '</span>
                <div class="slider-buttons d-flex align-items-center" data-swiper-parallax="-30%" data-swiper-parallax-scale=".7">
                    <a class="btn hvr-sweep-to-right" href="movie-single.php?movie_id='.$movie_id.'" tabindex="0"> Details</a>
                    <a class="btn hvr-sweep-to-right ml-3" href="movie_booking.php?id='.$movie_id.'" tabindex="0"><i class="fa-solid fa-ticket"></i> Book Now</a>
                </div>
            </div>
        </div>';
}
?>

                                </div>
                                <!-- Swiper Wrapper End -->
                                <div class="swiper-button-prev swiper-button-white"></div>
                                <div class="swiper-button-next swiper-button-white"></div>
                                <!-- Navigation Buttons End -->
                            </div>
                            <!-- End Swiper Slider -->
                        </div>
                        <!-- Col End -->
                    </div>
                    <!-- Row End -->
                </div>
                <!-- Container End -->
            </section>
            <!-- Office Box Section End -->
    
            <!-- Start Last Seasons Section -->
            <section class="last-seasons pb-0">
    <div class="last-season" style="background-image: linear-gradient(to top, #202020, rgb(2 2 2 / 90%)), url(images/parallax/best-series.jpg);">
        <div class="container-fluid">
            <div class="season-header text-center">
                <h5 class="mb-4">Top Movies</h5>
                <h2 class="mb-4">By Years</h2>
                <p class="mb-4">Choose Any Year</p>
            </div>
            <!-- Season Header End -->

            <div class="season-tabs">
                <ul class="nav nav-pills mb-3 justify-content-center mb-5" id="pills-tab-seasons" role="tablist">
                    <?php
                    include("connection.php");
                    $years = array(2021, 2022, 2023);

                    foreach ($years as $index => $year) {
                        $isActive = $year === 2021 ? 'active' : ''; // Set 'active' for 2021
                        echo '
                        <li class="nav-item" role="presentation">
                            <a class="nav-link ' . $isActive . '" data-toggle="pill" href="#pills-' . $year . '" role="tab" aria-selected="true">' . $year . '</a>
                        </li>';
                    }
                    ?>
                </ul>

                <div class="tab-content" id="pills-tab-Content">
                    <?php
                    foreach ($years as $year) {
                        


                        $sql = "SELECT * FROM movies WHERE (release_date) = $year ORDER BY imdb DESC LIMIT 6";
                        $result = $con->query($sql);

                        echo '<div id="pills-' . $year . '" class="tab-pane animated fadeInRight ' . $isActive . '">';
                        echo '<div class="row">';

                        while ($row = $result->fetch_assoc()) {
                            $movieName = $row['name'];
                            $releaseDate = $row['release_date'];
                            $imdb = $row['imdb'];

                            echo '<div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-2">';
                            echo '<div class="video-block">';
                            echo '<div class="video-thumb position-relative thumb-overlay">';
                            echo '<a href="#"><img alt="" class="img-fluid" src="../Main Assests/images/movies/'.$row['image'].'"></a>';
                            echo '<div class="box-content">';
                            echo '<ul class="icon">';
                            echo ' <li>
                            <a href="movie_booking.php?id='.$row['id'].'"><i class="fa-solid fa-ticket"></i></a>
                        </li>
                        <li>
                            <a href="movie-single.php?movie_id='.$row['id'].'"><i class="fas fa-info"></i></a>
                        </li>';
                            echo '</ul>';
                            echo '</div>'; // Box Content End
                            echo '</div>'; // Video Thumb End
                            echo '<div class="video-content">';
                            echo '<h2 class="video-title"><a href="movie-single.php?movie_id='.$row['id'].'" class="wrap_elips">' . $row['name'] . '</a></h2>';
                            echo '<div class="video-info d-flex align-items-center">';
                            echo ' <span class="video-year">'.$row['release_date'].'</span> <span class="video-age">'.$row['rated'].'</span> <span class="video-type">'.$row['imdb'].'</span>';
                            echo '</div>';
                            echo '</div>'; // video Content End
                            echo '</div>'; // video Block End
                            echo '</div>';
                        }

                        echo '</div>'; // Row End
                        echo '</div>'; // Tab Pane End
                    }
                    ?>
                     <script>
    $(document).ready(function() {
        <?php
        foreach ($years as $index => $year) {
            $isActive = $year === 2021 ? 'active' : '';
            echo '$("#pills-' . $year . '").addClass("' . $isActive . '");';
        }
        ?>
        
        $(".nav-link").on("click", function() {
            $(".tab-pane").removeClass("show active");
            var tabId = $(this).attr("href");
            $(tabId).addClass("show active");
        });
    });
    </script>
                </div>
                <!-- Tab Content End -->
            </div>
            <!-- Season tabs End -->
        </div>
        <!-- Container End -->
    </div>
    <!-- Last Season End -->
</section>

            <!-- Last Seasons Section End -->
            <!-- Start Suggested Section -->
            <section class="suggested pt-0">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <h2 class="block-title">Suggested For You</h2>
                        </div>
                        <!-- Col End -->
                    </div>
                    <!-- Row End -->
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
            <!-- Suggested Section End -->
        </div>
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

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


</body>

</html>

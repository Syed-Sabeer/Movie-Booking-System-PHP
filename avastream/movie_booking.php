<?php
// include("nav.php");
include("./connection.php");
function getMovieDetails($con, $id) {
    $query = "SELECT * FROM movies WHERE id = '$id'";
    $result = mysqli_query($con, $query);
    return mysqli_fetch_assoc($result);
}
?>


<!DOCTYPE html>


<html lang="zxx">


<head>

<?php 

include("nav.php");
?>
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
    
    <!-- <link rel="stylesheet" href="./css/style2.css"> -->


    <!-- <link rel="stylesheet" type="text/css" href="./css/bootstrap.css" /> -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" type="text/css" href="css/style2.css" />
<link rel="stylesheet" type="text/css" href="css/style2_responsive.css" />

<style>
    ul{
        list-style: none;
    }
    body{
        background-color: #202020 ;
    }
   
</style>
</head>
<body style="background-color: #202020;">



<div class="prs_title_main_sec_wrapper">
<div class="prs_title_img_overlay"></div>
<div class="container">
<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<div class="prs_title_heading_wrapper">
<h2>Movie Booking</h2>
<ul>
<li><a href="#">Home</a>
</li>
<li>&nbsp;&nbsp; >&nbsp;&nbsp; Movie Booking</li>
</ul>
</div>
</div>
</div>
</div>
</div>


<div class="prs_booking_main_div_section_wrapper">
<div class="prs_top_video_section_wrapper">
<div class="container">
<div class="row">
<div class="col-md-12">
<?php
if (isset($_GET['id'])) {
    $id = $_GET['id'];
} elseif (isset($_GET['id'])) {
    $id = $_GET['id'];
} else {
    // Handle the case when neither id nor id is provided
    // You can display an error message or redirect the user
    exit("Movie ID not provided.");
}

$movie = getMovieDetails($con, $id);

    
    if ($movie) {
    $backgroundImageUrl = "../Main Assests/images/movies/" . $movie['image'];
    
    echo '
    <div class="st_video_slider_inner_wrapper float_left" style="background: url(\'' . $backgroundImageUrl . '\') 50% 0 repeat-y;">
        <div class="st_video_slider_overlay"></div>
        <div class="st_video_slide_sec float_left">
            <a rel="external" href="https://www.youtube.com/watch?v='.$movie['trailer_link'].'" title="title" class="test-popup-link">
            <i class="fa-regular fa-circle-play" style="font-size:65px; color:red;"></i>
            </a>
    

<h3>'.$movie['name'].'</h3>
<p>ENGLISH, HINDI, TAMIL</p>
<h4>'.$movie['genre'].'</h4>
<h5><span>'.$movie['rated'].'</span> <span>'.$movie['imdb'].'</span> </h5>
</div>
<div class="st_video_slide_social float_left">
<div class="st_slider_rating_btn_heart st_slider_rating_btn_heart_5th">


</div>
<div class="st_video_slide_social_left float_left">
<ul>
<li><a href="#"><i class="fa-brands fa-facebook-f"></i></a>
</li>
<li><a href="#"><i class="fa-brands fa-twitter"></i></a>
</li>
<li><a href="#"><i class="fa-brands fa-instagram"></i></a>
</li>
<li><a href="#"><i class="fa-brands fa-youtube"></i></a>
</li>
</ul>
</div>
<div class="st_video_slide_social_right float_left">
<ul>
<li data-animation="animated fadeInUp" class><i class="far fa-calendar-alt"></i> '.$movie['release_date'].'</li>
<li data-animation="animated fadeInUp" class><i class="far fa-clock"></i> '.$movie['runtime'].' mins</li>
</ul>
</div>
</div>
</div>





</div>
</div>
</div>
</div>


<div class="st_slider_rating_main_wrapper float_left">
<div class="container">
<div class="st_calender_tabs" >
<ul class="nav nav-tabs" >
<li class="active" > <a data-toggle="tab" href="#home" ><span>' . strtoupper(substr(date('D', strtotime($movie['day1_date'])), 0, 3)) . '</span> <br>' . date('d', strtotime($movie['day1_date'])) . '</a>
</li>
<li class="nav-item">
<a data-toggle="tab" href="#menu1"> <span>' . strtoupper(substr(date('D', strtotime($movie['day2_date'])), 0, 3)) . '</span>
<br>' . date('d', strtotime($movie['day2_date'])) . '</a>
</li>
<li>
<a data-toggle="tab" href="#menu2"> <span>' . strtoupper(substr(date('D', strtotime($movie['day3_date'])), 0, 3)) . '</span>
<br>' . date('d', strtotime($movie['day3_date'])) . '</a>
</li>

</ul>
</div>
</div>
</div>


<div class="st_slider_index_sidebar_main_wrapper st_slider_index_sidebar_main_wrapper_booking float_left">
<div class="container">
<div class="row">
<div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
<div class="st_indx_slider_main_container float_left">
<div class="row">
<div class="col-md-12">
<div class="tab-content">


<div id="home" class="tab-pane active">
<div class="st_calender_contant_main_wrapper float_left">
    
<div class="st_calender_row_cont float_left">
<div class="st_calender_asc">

<div class="st_calen_asc_heart_cont">
<h3>Time 1</h3>
</div>
</div>
<div class="st_calen_asc_tecket_time_select">
<ul>
<li> <span>
<h4>Rs.'.$movie['price_1'].'</h4>
<p class="asc_pera2">Filling Fast</p>
</span>
<a href="booking_type.php?id='.$id.'&day=1&time=day1_time1&date=day1_date">' . date('h:i A', strtotime($movie['day1_time1'])) . '</a>
</li>
</ul>
</div>
</div>
<div class="st_calender_row_cont st_calender_row_cont2 float_left">
<div class="st_calender_asc">
<div class="st_calen_asc_heart_cont">
<h3>Time 2</h3>
</div>
</div>
<div class="st_calen_asc_tecket_time_select">
<ul>
<li> <span>
<h4>Rs.'.$movie['price_1'].'</h4>
<p class="asc_pera2">Filling Fast</p>
</span>
<a href="booking_type.php?id='.$id.'&day=1&time=day1_time2&date=day1_date">' . date('h:i A', strtotime($movie['day1_time2'])) . '</a>
</li>

</ul>
</div>
</div>

<div class="st_calender_row_cont st_calender_row_cont2 st_calender_row_cont_last float_left">
<div class="st_calender_asc">

<div class="st_calen_asc_heart_cont">
<h3>Time 3</h3>

</div>
</div>
<div class="st_calen_asc_tecket_time_select">
<ul>
<li> <span>
<h4>Rs.'.$movie['price_1'].'</h4>
<p class="asc_pera2">Filling Fast</p>
</span>
<a href="booking_type.php?id='.$id.'&day=1&time=day1_time3&date=day1_date">' . date('h:i A', strtotime($movie['day1_time3'])) . '</a>
</li>

</ul>
</div>
</div>
</div>





</div>

<div id="menu1" class="tab-pane fade">
<div class="st_calender_contant_main_wrapper float_left">
    
<div class="st_calender_row_cont float_left">
<div class="st_calender_asc">

<div class="st_calen_asc_heart_cont">
<h3>Time 1</h3>
</div>
</div>
<div class="st_calen_asc_tecket_time_select">
<ul>
<li> <span>
<h4>Rs.'.$movie['price_2'].'</h4>
<p class="asc_pera2">Filling Fast</p>
</span>
<a href="booking_type.php?id='.$id.'&day=2&time=day2_time1&date=day2_date">' . date('h:i A', strtotime($movie['day2_time1'])) . '</a>
</li>
</ul>
</div>
</div>
<div class="st_calender_row_cont st_calender_row_cont2 float_left">
<div class="st_calender_asc">
<div class="st_calen_asc_heart_cont">
<h3>Time 2</h3>
</div>
</div>
<div class="st_calen_asc_tecket_time_select">
<ul>
<li> <span>
<h4>Rs.'.$movie['price_2'].'</h4>
<p class="asc_pera2">Filling Fast</p>
</span>
<a href="booking_type.php?id='.$id.'&day=2&time=day2_time2&date=day2_date">' . date('h:i A', strtotime($movie['day2_time2'])) . '</a>
</li>

</ul>
</div>
</div>

<div class="st_calender_row_cont st_calender_row_cont2 st_calender_row_cont_last float_left">
<div class="st_calender_asc">

<div class="st_calen_asc_heart_cont">
<h3>Time 3</h3>

</div>
</div>
<div class="st_calen_asc_tecket_time_select">
<ul>
<li> <span>
<h4>Rs.'.$movie['price_2'].'</h4>
<p class="asc_pera2">Filling Fast</p>
</span>
<a href="booking_type.php?id='.$id.'&day=2&time=day2_time3&date=day2_date">' . date('h:i A', strtotime($movie['day2_time3'])) . '</a>
</li>

</ul>
</div>
</div>
</div>
</div>

<div id="menu2" class="tab-pane fade">
<div class="st_calender_contant_main_wrapper float_left">
    
<div class="st_calender_row_cont float_left">
<div class="st_calender_asc">

<div class="st_calen_asc_heart_cont">
<h3>Time 1</h3>
</div>
</div>
<div class="st_calen_asc_tecket_time_select">
<ul>
<li> <span>
<h4>Rs.'.$movie['price_3'].'</h4>
<p class="asc_pera2">Filling Fast</p>
</span>
<a href="booking_type.php?id='.$id.'&day=3&time=day3_time1&date=day3_date">' . date('h:i A', strtotime($movie['day3_time1'])) . '</a>
</li>
</ul>
</div>
</div>
<div class="st_calender_row_cont st_calender_row_cont2 float_left">
<div class="st_calender_asc">
<div class="st_calen_asc_heart_cont">
<h3>Time 2</h3>
</div>
</div>
<div class="st_calen_asc_tecket_time_select">
<ul>
<li> <span>
<h4>Rs.'.$movie['price_3'].'</h4>
<p class="asc_pera2">Filling Fast</p>
</span>
<a href="booking_type.php?id='.$id.'&day=3&time=day3_time2&date=day3_date">' . date('h:i A', strtotime($movie['day3_time2'])) . '</a>
</li>

</ul>
</div>
</div>

<div class="st_calender_row_cont st_calender_row_cont2 st_calender_row_cont_last float_left">
<div class="st_calender_asc">

<div class="st_calen_asc_heart_cont">
<h3>Time 3</h3>

</div>
</div>
<div class="st_calen_asc_tecket_time_select">
<ul>
<li> <span>
<h4>Rs.'.$movie['price_3'].'</h4>
<p class="asc_pera2">Filling Fast</p>
</span>
<a href="booking_type.php?id='.$id.'&day=3&time=day3_time3&date=day3_date">' . date('h:i A', strtotime($movie['day3_time3'])) . '</a>
</li>

</ul>
</div>
</div>
</div>
</div>



';
}

?>



</div>
</div>
</div>
</div>
</div>







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
<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
<div class="prs_mcc_left_side_wrapper">
<div class="prs_mcc_bro_title_wrapper">
<h2>browse title</h2>
<ul>

<li><i class="fa fa-caret-right"></i> &nbsp;&nbsp;&nbsp;<a onclick="showMovies('Action')">Action <span><?php echo isset($genreCount['Action']) ? $genreCount['Action'] : 0; ?></span></a>
</li>
<li><i class="fa fa-caret-right"></i> &nbsp;&nbsp;&nbsp;<a onclick="showMovies('Comedy')">Comedy <span><?php echo isset($genreCount['Comedy']) ? $genreCount['Comedy'] : 0; ?></span></a>
</li>

<li><i class="fa fa-caret-right"></i> &nbsp;&nbsp;&nbsp;<a onclick="showMovies('Thriller')">Thriller <span><?php echo isset($genreCount['Thriller']) ? $genreCount['Thriller'] : 0; ?></span></a>
</li>
<li><i class="fa fa-caret-right"></i> &nbsp;&nbsp;&nbsp;<a onclick="showMovies('Horror')">Horror <span><?php echo isset($genreCount['Horror']) ? $genreCount['Horror'] : 0; ?></span></a>
</li>

<li><i class="fa fa-caret-right"></i> &nbsp;&nbsp;&nbsp;<a onclick="showMovies('Adventure')">Adventure <span><?php echo isset($genreCount['Adventure']) ? $genreCount['Adventure'] : 0; ?></span></a>
</li>
<li><i class="fa fa-caret-right"></i> &nbsp;&nbsp;&nbsp;<a onclick="showMovies('Animation')">Animation <span><?php echo isset($genreCount['Animation']) ? $genreCount['Animation'] : 0; ?></span></a>
</li>

<li><i class="fa fa-caret-right"></i> &nbsp;&nbsp;&nbsp;<a onclick="showMovies('Crime')">Crime <span><?php echo isset($genreCount['Crime']) ? $genreCount['Crime'] : 0; ?></span></a>
</li>
<li><i class="fa fa-caret-right"></i> &nbsp;&nbsp;&nbsp;<a onclick="showMovies('Science-fiction')">Sci-fi <span><?php echo isset($genreCount['Science-fiction']) ? $genreCount['Science-fiction'] : 0; ?></span></a>
</li>



</ul>
</div>
<script>
        function showMovies(genre) {
            window.location.href = `genre.php?genre=${genre}`;
        }
    </script>


</div>
</div>  
</div>
</div>
</div>
</div>



<?php 

include("footer.php");
?>




<script src="./js/jquery_min.js"></script>
<script src="./js/bootstrap.js"></script>

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
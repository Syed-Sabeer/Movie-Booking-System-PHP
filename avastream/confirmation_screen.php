<!DOCTYPE html>

<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="zxx">
<!--[endif]-->
<head>
<meta charset="utf-8" />
<title>Movie Pro Responsive HTML Template</title>
<meta content="width=device-width, initial-scale=1.0" name="viewport" />
<meta name="description" content="Movie Pro" />
<meta name="keywords" content="Movie Pro" />
<meta name="author" content />
<meta name="MobileOptimized" content="320" />

<link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

<link rel="stylesheet" type="text/css" href="css/style2.css" />
<link rel="stylesheet" type="text/css" href="css/responsive2.css" />


<link rel="shortcut icon" type="image/png" href="images/header/favicon.ico" />
<style>
    body,
html {
	font-family: 'Lato', sans-serif;
	font-size: 16px;
	line-height: 23px;
	color: #707070;
	padding-right: 0 !important;
	overflow-x: hidden;
}


h2,
h3,
h4,
h5,
h6 {
	font-family: 'Poppins', sans-serif;
	line-height: 1.1;
	font-weight: 400;
	color: #222222;
	margin: 0;
	padding: 0;
}

p {
	margin: 0;
}

ul {
	list-style: none;
	margin: 0;
	padding: 0;
}
.prs_title_main_sec_wrapper {
	background: url('../images/content/about/banner.jpg') 50% 0 repeat-y;
	background-repeat: no-repeat;
	background-position: center 0;
	background-size: cover;
	width: 100%;
	height: 100%;
	float: left;
	position: relative;
	padding-top: 75px;
	text-align: center;
}

.prs_title_img_overlay {
	position: absolute;
	left: 0%;
	right: 0%;
	top: 0%;
	bottom: 0%;
	background: rgba(0, 0, 0, 0.8);
}

.prs_title_heading_wrapper {
	float: left;
	width: 100%;
}

.prs_title_heading_wrapper h2 {
	font-size: 36px;
	color: #ffffff;
	font-weight: bold;
	text-transform: uppercase;
}

.prs_title_heading_wrapper ul {
	display: inline-block;
	background: rgba(255, 255, 255, 0.13);
	padding: 10px 30px;
	margin-top: 40px;
	position: relative;
	top: 4px;
}

.prs_title_heading_wrapper li {
	float: left;
	color: #ff4444;
}

.prs_title_heading_wrapper li a {
	color: #ffffff;
	-webkit-transition: all 0.5s;
	-o-transition: all 0.5s;
	-ms-transition: all 0.5s;
	-moz-transition: all 0.5s;
	transition: all 0.5s;
}

.prs_title_heading_wrapper li a:hover {
	color: #ff4444;
	-webkit-transition: all 0.5s;
	-o-transition: all 0.5s;
	-ms-transition: all 0.5s;
	-moz-transition: all 0.5s;
	transition: all 0.5s;
}

.float_left {
	float: left;
	width: 100%;
}

.rating:not(:checked)>label:hover,
.rating:not(:checked)>label:hover~label {
	color: #ff4444;
}

i:before {
	margin-left: 0 !important;
}

.st_bcc_main_wrapper {
	padding-top: 100px;
	padding-bottom: 100px;
	display: inline-block;
	width: 100%;
	text-align: left;
}

.st_bcc_heading_wrapper {
	text-align: center;
	border-bottom: 2px solid #D8D8D8;
	padding-bottom: 60px;
}

.st_bcc_heading_wrapper i {
	font-size: 60px;
	color: #6cc77c;
}

.st_bcc_heading_wrapper h3 {
	padding-top: 30px;
	font-size: 32px;
	color: rgba(0, 0, 0, 0.54);
	letter-spacing: 0.5px;
}

.st_bcc_heading_wrapper h3 span {
	font-size: 32px;
	color: rgba(0, 0, 0, 0.87);
	letter-spacing: 0.5px;
	font-weight: 600;
}

.st_bcc_ticket_boxes_wrapper {
	background: #FFFFFF;
	border-radius: 8px;
	box-shadow: 0 2px 8px 0 rgba(0, 0, 0, 0.12);
	position: relative;
	margin-top: 60px;
	padding: 30px;
}

.st_bcc_ticket_boxes_wrapper:after {
	content: '';
	width: 50px;
	height: 50px;
	background: rgb(247, 247, 247);
	position: absolute;
	left: -25px;
	top: 30%;
	border-radius: 100%;
}

.st_bcc_ticket_boxes_wrapper:before {
	content: '';
	width: 50px;
	height: 50px;
	background: rgb(247, 247, 247);
	position: absolute;
	right: -25px;
	top: 30%;
	border-radius: 100%;
}

.st_bcc_tecket_top_hesder {
	text-align: center;
	padding-top: 30px;
	padding-bottom: 60px;
	border-bottom: 1px dashed #979797;
}

.st_bcc_tecket_top_hesder p {
	font-size: 24px;
	color: #ff4444;
	text-transform: uppercase;
	font-weight: 600;
}

.st_bcc_tecket_top_hesder span {
	font-size: 16px;
	color: rgba(0, 0, 0, 0.38);
	text-align: center;
	font-weight: 600;
	padding-top: 10px;
	display: inline-block;
}

.st_bcc_tecket_bottom_right_wrapper {
	float: left;
	width: 200px;
	text-align: center;
	padding-left: 47px;
}

.st_bcc_tecket_bottom_left_wrapper {
	float: left;
	width: calc(100% - 200px);
	position: relative;
}

.st_purchase_img {
	position: absolute;
	top: 50px;
	right: 220px;
}

.st_bcc_tecket_bottom_left_wrapper:after {
	content: '';
	background: #ded0d0;
	height: 1px;
	width: 100%;
	position: absolute;
	left: 0;
	right: 0;
	bottom: -15px;
}

.st_bcc_tecket_bottom_hesder {
	background: rgba(216, 216, 216, 0.12);
	padding: 30px;
	margin-top: 40px;
}

.st_bcc_tecket_bottom_inner_left {
	float: left;
	width: auto;
}

.st_bcc_tecket_bottom_inner_right {
	float: right;
	width: auto;
	text-align: center;
}

.st_bcc_teckt_bot_inner_img {
	float: left;
	width: auto;
}

.st_bcc_teckt_bot_inner_img_cont {
	float: left;
	width: auto;
	padding-left: 20px;
}

.st_bcc_teckt_bot_inner_img_cont h4 {
	font-size: 16px;
	color: rgba(0, 0, 0, 0.87);
	letter-spacing: 0.57px;
	font-weight: 800;
}

.st_bcc_teckt_bot_inner_img_cont h5 {
	font-size: 14px;
	color: rgba(0, 0, 0, 0.87);
	letter-spacing: 0.7px;
	padding-top: 5px;
	font-weight: 500;
}

.st_bcc_teckt_bot_inner_img_cont h3 {
	font-size: 14px;
	color: rgba(0, 0, 0, 0.87);
	letter-spacing: 0.7px;
	padding-top: 10px;
	font-weight: 500;
}

.st_bcc_teckt_bot_inner_img_cont h6 {
	font-size: 14px;
	color: rgba(0, 0, 0, 0.87);
	letter-spacing: 0.7px;
	font-weight: 500;
	padding-top: 15px;
	line-height: 19px;
}

.st_bcc_tecket_bottom_inner_right i {
	color: #111;
	font-size: 26px;
}

.st_bcc_main_main_wrapper {
	text-align: center;
}

.st_bcc_tecket_bottom_inner_right h3 {
	font-size: 16px;
	color: rgba(0, 0, 0, 0.87);
	letter-spacing: 0.8px;
	text-align: center;
	line-height: 21px;
	font-weight: 600;
	padding-top: 10px;
}

.st_bcc_tecket_bottom_inner_right h3 span {
	font-size: 12px;
}

.st_bcc_tecket_bottom_right_wrapper h4 {
	font-size: 16px;
	color: rgba(0, 0, 0, 0.87);
	letter-spacing: 1px;
	padding-top: 10px;
	line-height: 25px;
}

.st_bcc_tecket_bottom_left_price_wrapper {
	float: left;
	width: calc(100% - 200px);
}

.st_bcc_tecket_bottom_left_price_wrapper h4 {
	float: left;
	font-size: 18px;
	color: rgba(0, 0, 0, 0.87);
	letter-spacing: 0.9px;
	font-weight: 700;
}

.st_bcc_tecket_bottom_left_price_wrapper h5 {
	float: right;
	font-size: 18px;
	color: rgba(0, 0, 0, 0.87);
	letter-spacing: 0.9px;
	font-weight: 700;
}

.booking_type_back {
	background: #f6f6f6;
}
</style>

</head>
<body class="booking_type_back">
    <div class="prs_title_main_sec_wrapper">
        <div class="prs_title_img_overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="prs_title_heading_wrapper">
                        <h2>Confirmation Screen</h2>
                        <ul>
                            <li><a href="index.php">Home</a></li>
                            <li>&nbsp;&nbsp; >&nbsp;&nbsp; Confirmation Screen</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php
    // Check if the required parameters are present in the URL
    if (isset($_GET['movie_id']) && isset($_GET['day']) && isset($_GET['time']) && isset($_GET['ticket_class']) && isset($_GET['selected_price'])&& isset($_GET['date'])) {
        // Retrieve the details from the URL parameters
        $movieId = $_GET['movie_id'];
        $day = $_GET['day'];
        $time = $_GET['time'];
		$date = $_GET['date'];
        $ticketClass = $_GET['ticket_class'];
        $selectedPrice = $_GET['selected_price'];

        // Calculate the total price including additional fees
        $donationValue = isset($_GET['donation']) ? 2 : 0;
        $totalPrice = $selectedPrice + $donationValue + 70 + 60 + 60;

        // Fetch movie details from the database using $movieId
        include("connection.php"); // Include your database connection code
        $query = "SELECT * FROM movies WHERE id = '$movieId'";
        $result = mysqli_query($con, $query);
        $movie = mysqli_fetch_assoc($result);

        if ($movie) {
            echo '<div class="st_bcc_main_main_wrapper float_left">';
            echo '<div class="st_bcc_main_wrapper">';
            echo '<div class="container">';
            echo '<div class="row">';
            echo '<div class="col-md-12">';
            echo '<div class="st_bcc_heading_wrapper float_left">';
            echo '<i class="fa fa-check-circle"></i>';
            echo '<h3>Payment of <span>Rs ' . $_GET['total_amount'] . '</span> Complete successfully</h3>';
            echo '</div>';
            echo '</div>';
            echo '<div class="col-md-12">';
            echo '<div class="st_bcc_ticket_boxes_wrapper float_left">';
            echo '<div class="st_bcc_tecket_top_hesder float_left">';
            echo '<p>Your Booking is Confirmed!</p>';
            echo '<span>Booking ID : 7</span>';
            echo '</div>';
            echo '<div class="st_bcc_tecket_bottom_hesder float_left">';
            echo '<div class="st_bcc_tecket_bottom_left_wrapper">';
            echo '<div class="st_bcc_tecket_bottom_inner_left">';
            echo '<div class="st_bcc_teckt_bot_inner_img">';
            echo '<img src="../Main Assests/images/movies/'.$movie['image'].'" width="85" height="127" alt="img">';
            echo '</div>';
            echo '<div class="st_bcc_teckt_bot_inner_img_cont">';
            echo '<h4>' . $movie['name'] . '</h4>';
            echo '<h5>' . $movie['tagline'] . '</h5>';
            echo '<h3>' . $movie[$date].' </h3>';
			echo '<h3>' . date('h:i A', strtotime($time)) .  '</h3>';
            // echo '<h6>' . $_GET['']; // Add theater details if needed
            echo '</h6>';
            echo '</div>';
            echo '<div class="st_purchase_img">';
            echo '<img src="../Main Assests/images/fix/pur2.png" alt="img">';
            echo '</div>';
            echo '</div>';
            echo '<div class="st_bcc_tecket_bottom_inner_right">';
            echo '<i class="fas fa-chair"></i>';
            echo '<h3>TICKET <br><span>' . $ticketClass . '</span></h3>';
            echo '</div>';
            echo '</div>';
            echo '<div class="st_bcc_tecket_bottom_right_wrapper">';
            echo '<img src="../Main Assests/images/fix/qr.png" alt="img">';
            echo '<h4>Booking ID<br> 7</h4>';
            echo '</div>';
            echo '<div class="st_bcc_tecket_bottom_left_price_wrapper">';
            echo '<h4>Total Amount</h4>';
            echo '<h5>Rs' . $_GET['total_amount'] . '</h5>';
            echo '</div>';
            echo '</div>';
            echo '</div>';
            echo '</div>';
            echo '</div>';
            echo '</div>';
            echo '</div>';
            echo '</div>';
            echo '</div>';
        } else {
            echo "Movie not found.";
        }
    } else {
        echo "Required parameters not provided.";
    }
    ?>
</body>
</html>
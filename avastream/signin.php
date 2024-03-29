<?php
// Start session at the beginning of the script
session_start();

include("connection.php");

$error_message = ""; // Initialize the error message

if (isset($_POST["btn"])) {
    $Email2 = $_POST["email2"];
    $Pass2 = $_POST["password2"];

    // Using prepared statements to prevent SQL injection
    $signin = "SELECT * FROM `users` WHERE email = ? AND password = ?";
    $stmt = mysqli_prepare($con, $signin);
    mysqli_stmt_bind_param($stmt, "ss", $Email2, $Pass2);
    mysqli_stmt_execute($stmt);

    $result = mysqli_stmt_get_result($stmt);
    $num = mysqli_num_rows($result);

    if ($num != 0) {
        $array = mysqli_fetch_assoc($result);
        $_SESSION['user'] = $array['username'];
        
        header("location:index.php");
        exit();
    } else if ($Email2 == 'admin@gmail.com' && $Pass2 == 'admin') {
        header("location:../Admin Panel/index.php");
        exit();
    } else {
        $error_message = "Username or Password is Incorrect";
    }
}
?>
<!--  -->

<?php 

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
	<link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style3.css">



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



  
	<!-- Favicons -->
	<link rel="icon" type="image/png" href="icon/favicon-32x32.png" sizes="32x32">
	<link rel="apple-touch-icon" href="icon/favicon-32x32.png">

	<meta name="description" content="Online Movies, TV Shows & Cinema HTML Template">
	<meta name="keywords" content="">
	<meta name="author" content="Dmitry Volkov">
	<title>FlixGo – Online Movies, TV Shows & Cinema HTML Template</title>
    <style>
body{
    background-color:#202020;
}
</style>
</head>
<body>

<?php
    include("nav.php"); // Include nav.php after session_start() and connection
    ?>

	<div class="sign section--bg" data-bg="img/bg/section__bg.jpg">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="sign__content">
						<!-- registration form -->
						<form action="#" class="sign__form" method="post">
							<a href="index.html" class="sign__logo">
								<img src="../Main Assests/images/fix/logo.png" alt="">
							</a>


							<div class="sign__group">
								<input type="text" class="sign__input signbar_input" placeholder="Email" name="email2">
							</div>

							<div class="sign__group">
								<input type="password" class="sign__input signbar_input" placeholder="Password" name="password2">
                
							</div>
                            <p class="error-message " style="color: red;" ><?php echo isset($error_message) ? $error_message : ""; ?></p>


							
							<button class="sign__btn" type="submit" name="btn"><span>Sign in</span></button>

              <span class="sign__text">Don't haves an account? <a href="./signup.php">Sign up!</a></span>
						</form>
						<!-- registration form -->
					</div>
				</div>
			</div>
		</div>
	</div>

 
<?php
include("footer.php")
?>

</body>
</html>
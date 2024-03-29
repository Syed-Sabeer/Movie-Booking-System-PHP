<?php

session_start();
  
    include("./connection.php");

    if (isset($_POST["btn"])) {
        $firstname = $_POST["f-name"];
        $lastname = $_POST["l-name"];
        $username = $_POST["u-name"];
        $email = $_POST["email"];
        $password = $_POST["password"];
        $date_created = date('Y-m-d H:i:s');

        if (empty($firstname) || empty($lastname) || empty($username) || empty($email) || empty($password)) {
            echo "<script>$(document).ready(function() { $('#sign-error').html('Please fill all fields.'); });</script>";
        } else {
            $insert = "INSERT INTO `users`(`firstname`, `lastname`, `username`, `email`, `password`, `datecreated`) VALUES ('$firstname','$lastname','$username','$email','$password','$date_created')";
            $run = mysqli_query($con, $insert);

            if ($run) {
                header("location: signin.php");
                exit; 
            }
        }
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

	<!-- CSS -->
	

	<!-- Favicons -->
	<link rel="icon" type="image/png" href="icon/favicon-32x32.png" sizes="32x32">
	<link rel="apple-touch-icon" href="icon/favicon-32x32.png">

	<meta name="description" content="Online Movies, TV Shows & Cinema HTML Template">
	<meta name="keywords" content="">
	<meta name="author" content="Dmitry Volkov">
	<title>FlixGo – Online Movies, TV Shows & Cinema HTML Template</title>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


    <script>
        $(document).ready(function() {
            // Function to check if the username exists in the database
            function checkUsername() {
                var username = $("input[name='u-name']").val();
                $.ajax({
                    url: "check_username.php", // Replace with the PHP file that checks the username
                    method: "POST",
                    data: { username: username },
                    success: function(response) {
                        if (response === "exists") {
                            $("#u-error").html("Username already exists!");
                        } else {
                            $("#u-error").html("");
                        }
                        checkButtonStatus();
                    }
                });
            }

            // Function to check if the email exists in the database
            function checkEmail() {
                var email = $("input[name='email']").val();
                $.ajax({
                    url: "check_email.php", // Replace with the PHP file that checks the email
                    method: "POST",
                    data: { email: email },
                    success: function(response) {
                        if (response === "exists") {
                            $("#e-error").html("Email already exists!");
                        } else {
                            $("#e-error").html("");
                        }
                        checkButtonStatus();
                    }
                });
            }

            // Function to check the overall button status and enable/disable it accordingly
            function checkButtonStatus() {
                var usernameError = $("#u-error").html();
                var emailError = $("#e-error").html();
                $("button[name='btn']").prop("disabled", usernameError || emailError);
            }

            // Function to check if any of the input fields are empty
            function checkEmptyFields() {
                var firstname = $("input[name='f-name']").val();
                var lastname = $("input[name='l-name']").val();
                var username = $("input[name='u-name']").val();
                var email = $("input[name='email']").val();
                var password = $("input[name='password']").val();

                var isEmpty = !firstname || !lastname || !username || !email || !password;
                if (isEmpty) {
                    $("#sign-error").html("Please fill all fields.");
                } else {
                    $("#sign-error").html("");
                }

                checkButtonStatus();
            }

            // Bind events to input fields to trigger validation
            $("input[name='u-name']").on("input", checkUsername);
            $("input[name='email']").on("input", checkEmail);
            $("input").on("input", checkEmptyFields);
        });
    </script>
   
 

    <?php  

    ?>

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
								<img src="./assets/images/logo.png" alt="">
							</a>

							<div class="sign__group">
								<input type="text" class="sign__input signbar_input" placeholder="First Name" name="f-name">
							</div>
              <div class="sign__group">
								<input type="text" class="sign__input signbar_input" placeholder="Last Name" name="l-name">
							</div>
              <div class="sign__group">
								<input type="text" class="sign__input signbar_input" placeholder="Username" name="u-name">
                                <p id="u-error" style="color: red;"></p>
							</div>

							<div class="sign__group">
								<input type="text" class="sign__input signbar_input" placeholder="Email" name="email">
                                <p id="e-error" style="color: red;"></p>
							</div>

							<div class="sign__group">
								<input type="password" class="sign__input signbar_input" placeholder="Password" name="password">
							</div>

							


							
							<button class="sign__btn signup" type="submit" name="btn"><span>Sign up</span></button>
                            <p id="sign-error" style="color: red;"></p>

							<span class="sign__text">Already have an account? <a href="signin.php">Sign in!</a></span>
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
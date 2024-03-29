<?php 
error_reporting(E_ALL);
ini_set('display_errors', 1);

include("./connection.php");
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



        <?php
    

    $usernameToFind = $_SESSION['user'];
    $sql = "SELECT id FROM users WHERE username = '$usernameToFind'";
$result = $con->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $userId = $row["id"];



    $update_id = $userId;
$query = "SELECT * FROM `users` WHERE id = $update_id";

$run = mysqli_query($con , $query);
$record = mysqli_fetch_array($run);

function escape_string($value) {
    global $con;
    return mysqli_real_escape_string($con, $value);
}


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
            $update = "UPDATE `users` SET `firstname`='" . escape_string($firstname) . "', `lastname`='" . escape_string($lastname) . "', `username`='" . escape_string($username) . "', `email`='" . escape_string($email) . "', `password`='" . escape_string($password) . "' WHERE `id` = $update_id";


            $run = mysqli_query($con, $update);

            if ($run) {
                echo "<script>alert('success')</script>";
                exit; 
            }
        }
    }


    // echo "User ID for username $usernameToFind is: $userId";
} else {
    echo "not working";
}


    ?>
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
   
 

</head>

<body>
  
    <div class="main" id="main">
     
    
        <!-- Start Main Content -->
        <div class="main-content">
            <!-- Start Account Settings Section -->
            <section class="account-settings">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="content-settings">
                                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link active" data-toggle="pill" href="#pills-profile" role="tab" aria-selected="true">Profile Settings</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" data-toggle="pill" href="#pills-account" role="tab" aria-selected="false">Account Settings</a>
                                    </li>
                                </ul>
                                <div class="tab-content" id="pills-tabContent">
                                    <div id="pills-profile" class="tab-pane animated fadeInRight show active">
                                        <!-- Start Form -->
                                        <form id="profile-settings-form" action="account-settings.php" method="post">

                                            <div class="error-container"></div>
                                            <div class="row">
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <div class="settings-avatar">
                                                            <img src="images/avatar/user.jpg" class="img-fluid d-block mx-auto mb-3" alt="User avatar">
                                                            <div class="change-avatar"><a href="#">Edit</a></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Col End -->
                                                <div class="col-md-10">
                                                    <h2 ><?php echo $record[3] ?></h2>
                                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                                                </div>
                                                <!-- Col End -->
                                            </div>
                                            <!-- Row End -->
                                            <h5 class="mb-3 mt-3 pb-3 section-border">General Information</h5>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Username</label>
                                                        <input class="form-control form-control-name" name="u-name" id="username" type="text" placeholder="Enter your Username" value="<?php echo $record[3] ?>">
                                                        <p id="u-error" style="color: red;"></p>
                                                    </div>
                                                </div>
                                                <!-- Col End -->
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Email Address</label>
                                                        <input type="email" class="form-control" name="email" placeholder="Enter your email" value="<?php echo $record[4] ?>">
                                                        <p id="e-error" style="color: red;"></p>
                                                    </div>
                                                </div>
                                                <!-- Col End -->
                                            </div>
                                            <!-- Row End -->
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>First Name</label>
                                                        <input class="form-control form-control-name" name="f-name" id="first-name" type="text" placeholder="Enter your First Name" value="<?php echo $record[1] ?>">
                                                    </div>
                                                </div>
                                                <!-- Col End -->

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Last Name</label>
                                                        <input class="form-control form-control-name" name="l-name" id="last-name" type="text" placeholder="Enter your Last Name" value="<?php echo $record[2] ?>">
                                                    </div>
                                                </div>
                                                <!-- Col End -->
                                            </div>
                                            <!-- Row End -->
                                            <h5 class="mb-3 mt-3 pb-3 section-border">Change Password</h5>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Current Password</label>
                                                        <input type="password" class="form-control" name="current-password" id="current-password" placeholder="Enter your Current Password" value="">
                                                    </div>
                                                </div>
                                                <!-- Col End -->
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>New Password</label>
                                                        <input type="password" class="form-control" name="password" id="new-password" placeholder="Enter your New Password" value="">
                                                    </div>
                                                </div>
                                                <!-- Col End -->
                                            </div>
                                            <!-- Row End -->
                                            <h5 class="mb-3 mt-3 pb-3 section-border">Personal Information</h5>
                                            <div id="sandbox-container" class="form-group">
                                                <label>Date of Birth</label>
                                                <input type="text" class="form-control" name="date-of-birth" id="date-of-birth" placeholder="Enter your Date of Birth" value="01/20/2021">
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Gender</label>
                                                        <select class="form-control" name="select-plan" aria-label="Default select example" id="select-gender">
                                                            <option value="1" selected="selected">Male</option>
                                                            <option value="2">Female</option>
                                                        </select>
                                                    </div>
                                                </div>
                                               
                                            </div>
                                            <!-- Row End -->
                                            <div class="form-group d-flex align-items-center mt-3">
                                            <button class="hvr-sweep-to-right btn btn-primary" type="submit" name="btn"><span>Save</span></button>
                            <p id="sign-error" style="color: red;"></p>
                                                
                                                <a href="index.php" class="hvr-sweep-to-right btn btn-primary ml-3">Cancel</a>
                                            </div>


                                            
							
                                        </form>
                                        <!-- Form End -->
                                    </div>
                              
                                </div>
                            </div>
                            <!-- Content Settings End -->
                        </div>
                        <!-- Col End -->
                    </div>
                    <!-- Row End -->
                </div>
                <!-- Container End -->
            </section>
            <!-- Account Settings Section End -->
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

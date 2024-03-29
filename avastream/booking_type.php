
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
      body{
        background-color: #202020 !important;
      }
   .main-footer{
    margin-top: 10%;
   }

   
   body,
html {
	font-family: 'Lato', sans-serif;
	font-size: 16px;
	line-height: 23px;
	color: #707070;
	padding-right: 0 !important;
	overflow-x: hidden;
	background-color: #202020 !important;
}



a {
	/* color: #797979; */
	text-decoration: none;
}

a:hover,
a:focus {
	/* color: #707070; */
	text-decoration: none;
	outline: none;
}

h3,
h5 {
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

input,
button {
	outline: none;
}
input:focus,
button:focus {
	outline: none;
	box-shadow: none;
}

ul {
	list-style: none;
	margin: 0;
	padding: 0;
}
.main-footer{
	margin-top: 10%;
}
    </style>

    
</head>

<?php 
include("nav.php");
?>

<div style="background-color:#202020;">

<body class="booking_type_back">



<div class="st_dtts_wrapper float_left" style="background-color:#202020;">
<div class="container">
<div class="row">
    
<?php
include("./connection.php");
function getMovieDetails($con, $id) {
  $query = "SELECT * FROM movies WHERE id = '$id'";
  $result = mysqli_query($con, $query);
  return mysqli_fetch_assoc($result);
}

if (isset($_GET['movie_id']) && isset($_GET['date']) && isset($_GET['time']) && isset($_GET['day'])) {
  $id = $_GET['movie_id'];
  $day = $_GET['day'];
  $time = $_GET['time'];
  $date = $_GET['date'];

} elseif (isset($_GET['id']) && isset($_GET['date']) && isset($_GET['time']) && isset($_GET['day'])) {
  $id = $_GET['id'];
  $day = $_GET['day'];
  $time = $_GET['time'];
  $date = $_GET['date'];
} else {
  // Handle the case when the required parameters are not provided
  exit("Required parameters not provided.");
}
$movie = getMovieDetails($con, $id);
$ticketUrl = "confirmation_screen.php?movie_id=$id&day=$day&time=$time&date=$date";
    if ($movie) {
        // Determine the selected day and time based on the values received
        $selected_day = $day;
        $selected_time = $time;
        $selected_date = $date;
        
        // Get the corresponding price for the selected day and time
        if (isset($movie['price_' . $day])) {
          $selected_price = $movie['price_' . $day];
      } else {
          // Handle the case when the key doesn't exist
          $selected_price = 0; // or another default value
      }
      
        
  echo '


<div class="col-xl-8 col-lg-8 col-md-12 col-sm-12 col-12">
<div class="st_dtts_left_main_wrapper float_left">
<div class="row">
<div class="col-md-12">
<div class="st_dtts_ineer_box float_left">
<ul>

<li><span class="dtts1">Movie</span> <span class="dtts2">'.$movie['name'].'</span>
</li>
<li><span class="dtts1">Date</span> <span class="dtts2">' . $movie[$selected_date]. '</span>
</li>
<li><span class="dtts1">Time</span> <span class="dtts2">' . date('h:i A', strtotime($movie[$selected_time])) . '</span>
</li>


</ul>
</div>
</div>
<div class="col-md-12">
<div class="st_cherity_section float_left">
<div class="st_cherity_img float_left">
<img src="../Main Assests/images/movies/' . $movie['image']. '" width="auto" height="500px" alt="img">
</div>
<div class="st_cherity_img_cont float_left">
<div class="box">
<p class="cc_pc_color1">
<input type="checkbox" id="donationCheckbox" name="cb">
<label for="donationCheckbox"><span>ADD Rs. 2</span> to your transaction as a donation. (Uncheck if you do not wish to donate)</label>
</div>
</div>
</div>
</div>
<div class="col-md-12">
<div class="st_cherity_btn float_left">
	<div class="d-flex" style="display: flex;">
<h3>SELECT TICKET CLASS</h3>
<i class="fa-solid fa-question" style="color: #fff; margin-top: 4%; margin-left: 2%;"></i>
</div>
<ul>
<li><button class="ticket-type button_class" onclick="ticket_select(this)" value="900">GOLD</button></li>
<li><button class="ticket-type button_class" onclick="ticket_select(this)" value="2000">Platinum</button></li>
<li><button class="ticket-type button_class" onclick="ticket_select(this)" value="3500">Box</button></li>

<li>
	<!-- Add an ID to the "Proceed to Pay" link button for easier manipulation -->
	<a id="proceedToPayBtn" class="ptp-btn-disabled" href="' . $ticketUrl . '">Proceed to Pay</a>
  </li>
</ul>

</div>
</div>
</div>
</div>
</div>
<div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
<div class="row">
<div class="col-md-12">
<div class="st_dtts_bs_wrapper float_left">
<div class="st_dtts_bs_heading float_left">
<p>Booking summary</p>
</div>
<div class="st_dtts_sb_ul float_left">
<ul>
<li>Ticket


<br> <span id="ticketprice">Rs . ' . $selected_price . '</span>
</li>

<li>Class
<br> <span id="output">Rs .</span>
</li>

<li>Donation
<br> <span id="check">Rs. 0</span>
</li>
<li>Internet handling fees <span>Rs.70.80</span>
</li>
</ul>
<p>Booking Fees <span>Rs.60.00</span>
</p>
<p>Integrated GST (IGST) @ 18% <span>Rs.60.00</span>
</p>
</div>
<div class="st_dtts_sb_h2 float_left">
<h3>Sub total <span id="totalprice">Rs.</span></h3>
<h5 >Payable Amount <span id="totalprice2">Rs.</span></h5>
</div>



</div>
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
<script>
	function ticket_select(clickedButton) {
	  // Get all the buttons with the class "ticket-type"
	  var ticketButtons = document.querySelectorAll(".ticket-type");
  
	  // Remove the "ticket-type-active" class from all buttons
	  ticketButtons.forEach(function(button) {
		button.classList.remove("ticket-type-active");
	  });
  
	  // Add the "ticket-type-active" class only to the clicked button
	  clickedButton.classList.add("ticket-type-active");
  
	  // Enable or disable the "Proceed to Pay" link button based on ticket selection
	  var proceedToPayBtn = document.getElementById("proceedToPayBtn");
	  var isActive = false;
  
	  // Check if any ticket type button is active
	  ticketButtons.forEach(function(button) {
		if (button.classList.contains("ticket-type-active")) {
		  isActive = true;
		}
	  });
  
	  // Add or remove the appropriate classes based on ticket selection
	  if (isActive) {
		proceedToPayBtn.classList.add("ptp-btn-active");
		proceedToPayBtn.classList.remove("ptp-btn-disabled");
		proceedToPayBtn.removeAttribute("disabled"); // Re-enable the link button
	  } else {
		proceedToPayBtn.classList.add("ptp-btn-disabled");
		proceedToPayBtn.classList.remove("ptp-btn-active");
		proceedToPayBtn.setAttribute("disabled", "disabled"); // Disable the link button
	  }
	}
  </script>


<script>
		//* Isotope js
		    function protfolioIsotope(){
		        if ( $('.st_fb_filter_left_box_wrapper').length ){ 
		            // Activate isotope in container
		            $(".protfoli_inner, .portfoli_inner").imagesLoaded( function() {
		                $(".protfoli_inner, .portfoli_inner").isotope({
		                    layoutMode: 'masonry',  
		                }); 
		            });  
		            
		            // Add isotope click function 
		            $(".protfoli_filter li").on('click',function(){
		                $(".protfoli_filter li").removeClass("active");
		                $(this).addClass("active"); 
		                var selector = $(this).attr("data-filter");
		                $(".protfoli_inner, .portfoli_inner").isotope({
		                    filter: selector,
		                    animationOptions: {
		                        duration: 450,
		                        easing: "linear",
		                        queue: false,
		                    }
		                });
		                return false;
		            });  
		        };
		    }; 
		 protfolioIsotope (); 
		 
		  function changeQty(increase) {
				            var qty = parseInt($('.select_number').find("input").val());
				            if (!isNaN(qty)) {
				                qty = increase ? qty + 1 : (qty > 1 ? qty - 1 : 1);
				                $('.select_number').find("input").val(qty);
				            } else {
				                $('.select_number').find("input").val(1);
				            }
				        }
	</script>

<?php
$selected_price = 100; // Example value
?>
<script>
var buttons = document.querySelectorAll(".button_class");
var output = document.getElementById("output");
var total_price = document.getElementById("totalprice");
var total_price2 = document.getElementById("totalprice2");
var donationCheckbox = document.getElementById("donationCheckbox");
var db = document.getElementById("check");

// Function to update the total price
function updateTotalPrice() {
    var buttonValue = parseInt(output.textContent.replace("Rs. ", ""));
    
    var selectedPrice = <?php echo $selected_price; ?>;
    var donationValue = donationCheckbox.checked ? 2 : 0;
    var sum = selectedPrice + buttonValue + donationValue + 70 + 60 + 60;
    
    total_price.textContent = " Rs. " + sum;
    total_price2.textContent = " Rs. " + sum;
    db.textContent = " Rs. " + donationValue;

    // Update the Proceed to Pay link with parameters
    updateProceedToPayLink(sum);
}

// Update the Proceed to Pay link with the calculated sum
function updateProceedToPayLink(totalAmount) {
    var selectedButton = document.querySelector(".ticket-type-active");
    if (selectedButton) {
        var selectedPrice = parseInt(selectedButton.value);
        var donationValue = donationCheckbox.checked ? 2 : 0;
        
        var movieId = <?php echo $id; ?>;
        var selectedDay = "<?php echo $day; ?>";
        var selectedDate = "<?php echo $date; ?>";
        var selectedTime = "<?php echo $time; ?>";
        var ticketClass = selectedButton.textContent;
        
        var newHref = "confirmation_screen.php" +
            "?movie_id=" + movieId +
            "&day=" + selectedDay +
            "&date=" + selectedDate +
            "&time=" + selectedTime +
            "&ticket_class=" + ticketClass +
            "&selected_price=" + selectedPrice +
            "&donation=" + donationValue +
            "&total_amount=" + totalAmount;
        
        var proceedToPayBtn = document.getElementById("proceedToPayBtn");
        proceedToPayBtn.href = newHref;
    }
}

buttons.forEach(function(button) {
    button.addEventListener("click", function() {
        var buttonValue = parseInt(button.value);
        output.textContent = "Rs. " + buttonValue;
        updateTotalPrice();
    });
});

donationCheckbox.addEventListener("change", function() {
    updateTotalPrice();
});
</script>

<div style="color: #202020;">
  dlhfjldhgj.ldfhgjldf
</div>

<?php 

include("footer.php");
?>


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
</div>
</html>

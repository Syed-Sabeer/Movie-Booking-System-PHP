<?php
// Check if the required parameters are present in the URL
if (isset($_GET['movie_id']) && isset($_GET['day']) && isset($_GET['time']) && isset($_GET['ticket_class']) && isset($_GET['selected_price'])) {
    // Retrieve the details from the URL parameters
    $movieId = $_GET['movie_id'];
    $day = $_GET['day'];
    $time = $_GET['time'];
    $ticketClass = $_GET['ticket_class'];
    $selectedPrice = $_GET['selected_price'];

    // Calculate the total price including additional fees
    $donationValue = isset($_GET['donation']) ? 2 : 0;
    $totalPrice = $selectedPrice + $donationValue + 70 + 60 + 60;

    // Connect to your database and fetch movie details based on the $movieId
    // Replace this with your actual database connection code
    include("connection.php"); // Include your database connection code
    $query = "SELECT * FROM movies WHERE id = '$movieId'";
    $result = mysqli_query($con, $query);
    $movie = mysqli_fetch_assoc($result);

    // Display the fetched details
    if ($movie) {
        echo "Movie Name: " . $movie['name'] . "<br>";
        echo "Booking Date: " . $day . "<br>";
        echo "Booking Time: " . date('h:i A', strtotime($time)) . "<br>";
        // Display other details you want to show

        echo "Ticket Class: $ticketClass<br>";
        echo "Selected Price: Rs. $selectedPrice<br>";
        echo "Donation: Rs. $donationValue<br>";
        echo "Total Price: Rs. $totalPrice<br>";
    } else {
        echo "Movie not found.";
    }
} else {
    echo "Required parameters not provided.";
}
?>

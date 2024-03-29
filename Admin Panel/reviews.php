<?php
include("nav.php");
?>
<?php
include("nav.php");
?>


<?php

include("./conncection.php");

// Function to retrieve movie details by ID from the main movie table
function getMovieDetails($con, $movie_id) {
    $query = "SELECT * FROM movies WHERE id = '$movie_id'";
    $result = mysqli_query($con, $query);
    return mysqli_fetch_assoc($result);
}

// Fetch and display top rated movies
$query = "SELECT movie_id FROM top_rated_movies";
$result = mysqli_query($con, $query);

echo "<h2>Top Rated Movies</h2>";
echo "<table>";
while ($row = mysqli_fetch_assoc($result)) {
    $movie_id = $row['movie_id'];
    $movie = getMovieDetails($con, $movie_id);
    // Display movie details in table rows
    // Modify the table structure and data to suit your requirements
    echo "<tr><td>".$movie['name']."</td><td>".$movie['description']."</td><td>".$movie['imdb']."</td></tr>";
}
echo "</table>";

// Fetch and display popular movies
$query = "SELECT movie_id FROM popular_movies";
$result = mysqli_query($con, $query);

echo "<h2>Popular Movies</h2>";
echo "<table>";
while ($row = mysqli_fetch_assoc($result)) {
    $movie_id = $row['movie_id'];
    $movie = getMovieDetails($con, $movie_id);
    // Display movie details in table rows
    // Modify the table structure and data to suit your requirements
	echo "<tr><td>".$movie['name']."</td><td>".$movie['description']."</td><td>".$movie['imdb']."</td></tr>";
}
echo "</table>";

// Fetch and display upcoming movies
$query = "SELECT movie_id FROM upcoming_movies";
$result = mysqli_query($con, $query);

echo "<h2>Upcoming Movies</h2>";
echo "<table>";
while ($row = mysqli_fetch_assoc($result)) {
    $movie_id = $row['movie_id'];
    $movie = getMovieDetails($con, $movie_id);
    // Display movie details in table rows
    // Modify the table structure and data to suit your requirements
	echo "<tr><td>".$movie['name']."</td><td>".$movie['description']."</td><td>".$movie['imdb']."</td></tr>";
}
echo "</table>";
?>

	<!-- JS -->
	<script src="js/bootstrap.bundle.min.js"></script>
	<script src="js/smooth-scrollbar.js"></script>
	<script src="js/slimselect.min.js"></script>
	<script src="js/admin.js"></script>
</body>
</html>
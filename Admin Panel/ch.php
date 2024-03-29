<?php
include("connection.php");
$years = array(2021, 2022, 2023);

foreach ($years as $year) {
    $sql = "SELECT movie_name, release_date, imdb FROM movies WHERE YEAR(release_date) = $year ORDER BY imdb DESC LIMIT 6";
    $result = $conn->query($sql);

    echo "<h2>$year Movies</h2>";
    echo "<ul>";

    while ($row = $result->fetch_assoc()) {
        $movieName = $row['movie_name'];
        $releaseDate = $row['release_date'];
        $imdb = $row['imdb'];

        echo "<li>$movieName (Released: $releaseDate) - IMDb: $imdb</li>";
    }

    echo "</ul>";
}
?>

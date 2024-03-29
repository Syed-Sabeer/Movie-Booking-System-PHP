<?php
include("connection.php");

$years = array(2021,2022);

foreach ($years as $year) {
    $sql = "SELECT name, release_date, imdb FROM movies WHERE (release_date) = $year ORDER BY imdb DESC LIMIT 6";
    $result = $con->query($sql);

    echo "<h2>$year Movies</h2>";
    echo "<ul>";

    while ($row = $result->fetch_assoc()) {
        $movieName = $row['name'];
        $releaseDate = $row['release_date'];
        $imdb = $row['imdb'];

        echo "<li>$movieName (Released: $releaseDate) - IMDb: $imdb</li>";
    }

    echo "</ul>";
}
?>

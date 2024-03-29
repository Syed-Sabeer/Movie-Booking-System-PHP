<?php
// search.php

include("./conncection.php");

if (isset($_GET['query'])) {
    $searchQuery = $_GET['query'];
    $pageNo = isset($_GET['page_no']) ? $_GET['page_no'] : 1;
    $recordsPerPage = 10;
    $offset = ($pageNo - 1) * $recordsPerPage;

    $query = "SELECT * FROM movies WHERE name LIKE '%$searchQuery%' OR imdb LIKE '%$searchQuery%' OR release_date LIKE '%$searchQuery%' LIMIT $offset, $recordsPerPage";
    $result = mysqli_query($con, $query);

    $searchResults = array();
    while ($data = mysqli_fetch_assoc($result)) {
        $searchResults[] = $data;
    }

    echo json_encode($searchResults);
}

?>

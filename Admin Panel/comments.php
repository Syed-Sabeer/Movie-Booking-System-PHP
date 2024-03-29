
<?php
include("nav.php");
?>
<style>
	.sign__form label{
		color: #fff;
	}
	.sign__group{
		margin-top: 3%;
	}
</style>
<!-- main content -->
<main class="main">
    <div class="container-fluid">
        <div class="row">
            <!-- main title -->
            <div class="col-12">
                <div class="main__title">
                    <h2>Modify Home Page</h2>
                </div>
            </div>
            <!-- end main title -->

            <!-- form -->
            <div class="col-12">
                <form class="sign__form sign__form--add" method="post" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-12 col-xl-7">
                            <div class="row">



                            <div class="col-12">
                                    <div class="sign__group">
									<label for="top_rated_movies">Top Rated Movies (6 max)</label>
									<input type="text" class="sign__input" placeholder="enter id top rated movies" name="top_rated_movies" id="top_rated_movies">
                                    </div>
                                </div>


                                <div class="col-12">
                                    <div class="sign__group">
									<label for="popular_movies">Popular Movies (6 max)</label>
									<input type="text" class="sign__input" placeholder="enter id for popular movies" name="popular_movies" id="popular_movies">
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="sign__group">
									<label for="suggested_movies">Suggested For You (6 max)</label>
									<input type="text" class="sign__input" placeholder="enter id for suggested movies" name="suggested_movies" id="suggested_movies">
                                    </div>
                                </div>

                                

                                <div class="col-12">
                                    <div class="sign__group">
									<label for="upcoming_movies">Upcoming Movies (12 max)</label>
									<input type="text" class="sign__input" placeholder="enter id for upcoming movies" name="upcoming_movies" id="upcoming_movies">
                                    </div>
                                </div>


                                <div class="col-12">
                                    <div class="sign__group">
									<label for="upcoming_movies">Now in Theatres (5 max)</label>
									<input type="text" class="sign__input" placeholder="enter id for now in theatre movies" name="now_in_theatres" id="now_in_theatres">
                                    </div>
                                </div>
                                
                        

                        <div class="col-12">
                            <button type="submit" class="sign__btn sign__btn--small" name="btn"><span>Publish</span></button>
                        </div>
                    </div>
                </form>
            </div>
            <!-- end form -->
        </div>
    </div>
</main>

<?php  
include("./conncection.php");
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $top_rated_movies = $_POST["top_rated_movies"];
    $popular_movies = $_POST['popular_movies'];
    $upcoming_movies = $_POST['upcoming_movies'];
    $now_in_theatres = $_POST['now_in_theatres'];
    $suggested_movies = $_POST['suggested_movies'];

    // Validate and sanitize the input (you may add more validation as per your requirements)
    $top_rated_movies = mysqli_real_escape_string($con, $top_rated_movies);
    $popular_movies = mysqli_real_escape_string($con, $popular_movies);
    $upcoming_movies = mysqli_real_escape_string($con, $upcoming_movies);
    $now_in_theatres = mysqli_real_escape_string($con, $now_in_theatres);
    $suggested_movies = mysqli_real_escape_string($con, $suggested_movies);

    // Split the input strings into arrays
    $top_rated_movies_array = explode(',', $top_rated_movies);
    $popular_movies_array = explode(',', $popular_movies);
    $upcoming_movies_array = explode(',', $upcoming_movies);
    $now_in_theatres_array = explode(',', $now_in_theatres);
    $suggested_movies_array = explode(',', $suggested_movies);

    // Truncate existing tables to ensure a fresh start
    mysqli_query($con, "TRUNCATE TABLE top_rated_movies");
    mysqli_query($con, "TRUNCATE TABLE popular_movies");
    mysqli_query($con, "TRUNCATE TABLE upcoming_movies");
    mysqli_query($con, "TRUNCATE TABLE now_in_theatres");
    mysqli_query($con, "TRUNCATE TABLE suggested_movies");

    // Insert the new movie IDs into their respective tables
    foreach ($top_rated_movies_array as $movie_id) {
        $query = "INSERT INTO top_rated_movies (movie_id) VALUES ('$movie_id')";
        mysqli_query($con, $query);
    }

    foreach ($popular_movies_array as $movie_id) {
        $query = "INSERT INTO popular_movies (movie_id) VALUES ('$movie_id')";
        mysqli_query($con, $query);
    }

    foreach ($upcoming_movies_array as $movie_id) {
        $query = "INSERT INTO upcoming_movies (movie_id) VALUES ('$movie_id')";
        mysqli_query($con, $query);
    }

    foreach ($now_in_theatres_array as $movie_id) {
        $query = "INSERT INTO now_in_theatres (movie_id) VALUES ('$movie_id')";
        mysqli_query($con, $query);
    }

    foreach ($suggested_movies_array as $movie_id) {
        $query = "INSERT INTO suggested_movies (movie_id) VALUES ('$movie_id')";
        mysqli_query($con, $query);
    }

  
}

?>

<!-- JS -->
<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/smooth-scrollbar.js"></script>
<script src="js/slimselect.min.js"></script>
<script src="js/admin.js"></script>
</body>
</html>

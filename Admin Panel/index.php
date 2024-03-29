<?php
include("./conncection.php");
include("nav.php");

$user = "SELECT * FROM `users`";
$userdetail = mysqli_query($con ,$user);

$movies = "SELECT * FROM `movies`";
$userdetail = mysqli_query($con ,$movies);


function getMovieDetails($con, $movie_id) {
    $query = "SELECT * FROM movies WHERE id = '$movie_id'";
    $result = mysqli_query($con, $query);
    return mysqli_fetch_assoc($result);
}
?>


	<!-- main content -->
	<main class="main">
		<div class="container-fluid">
			<div class="row">
				<!-- main title -->
				<div class="col-12">
					<div class="main__title">
						<h2>Dashboard</h2>

						<a href="add-item.php" class="main__title-link"><span>add item</span></a>
					</div>
				</div>
				<!-- end main title -->
			</div>

			<div class="row">
				<!-- stats -->
				<div class="col-12 col-sm-6 col-xl-6">
					<div class="stats">

					<?php 
						$sql_user = "SELECT COUNT(*) as row_counts_user FROM `users`";
						$result_user = $con->query($sql_user);	
$row_user = $result_user->fetch_assoc();
$rowCount_user = $row_user['row_counts_user'];


?>

						<span>Total Users</span>
						<p><?php echo $rowCount_user ?></p>
						<img src="img/graph-bar.svg" alt="">
					</div>
				</div>
				<!-- end stats -->

				<!-- stats -->
				<div class="col-12 col-sm-6 col-xl-6">
					<div class="stats">

					
					<?php 

$sql_movie = "SELECT COUNT(*) as row_count_movie FROM `movies`";
$result_movie = $con->query($sql_movie);	
$row_movie = $result_movie->fetch_assoc();
$rowCount_movie = $row_movie['row_count_movie'];

?>
						<span>Total Movies</span>
						<p><?php echo $rowCount_movie ?></p>
						<img src="img/film.svg" alt="">
					</div>
				</div>
				<!-- end stats -->

		

				<!-- dashbox -->
				<div class="col-12 col-xl-6">
					<div class="dashbox">
						<div class="dashbox__title">
							<h3><img src="img/award.svg" alt=""> Top Rated Movies</h3>

							<div class="dashbox__wrap">
								<a class="dashbox__refresh" href="index.php"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M21,11a1,1,0,0,0-1,1,8.05,8.05,0,1,1-2.22-5.5h-2.4a1,1,0,0,0,0,2h4.53a1,1,0,0,0,1-1V3a1,1,0,0,0-2,0V4.77A10,10,0,1,0,22,12,1,1,0,0,0,21,11Z"/></svg></a>
								<a class="dashbox__more" href="catalog.php">View All</a>
							</div>
						</div>

						<div class="dashbox__table-wrap dashbox__table-wrap--1">
							<table class="dashbox__table">
								<thead>
									<tr>
										<th>ID</th>
										<th>NAME</th>
										<th>RELEASE DATE</th>
										<th>RATING</th>
									</tr>
								</thead>
								<tbody>

								
<?php

// Fetch top rated movie IDs from the top_rated_movies table
$query = "SELECT movie_id FROM top_rated_movies";
$result = mysqli_query($con, $query);
while ($row = mysqli_fetch_assoc($result)) {
    $movie_id = $row['movie_id'];
    $movie = getMovieDetails($con, $movie_id);
  
  echo '
									<tr>
										<td>
											<div class="dashbox__table-text">'.$movie['id'].'</div>
										</td>
										<td>
											<div class="dashbox__table-text"><a href="#">'.$movie['name'].'</a></div>
										</td>
										<td>
											<div class="dashbox__table-text">'.$movie['release_date'].'</div>
										</td>
										<td>
											<div class="dashbox__table-text dashbox__table-text--rate">'.$movie['imdb'].'</div>
										</td>
									</tr>

';
}
?>

								</tbody>
							</table>
						</div>
					</div>
				</div>
				<!-- end dashbox -->

				<!-- dashbox -->
				<div class="col-12 col-xl-6">
					<div class="dashbox">
						<div class="dashbox__title">
							<h3><img src="img/film.svg" alt=""> Popular Movies</h3>

							<div class="dashbox__wrap">
								<a class="dashbox__refresh" href="index.php"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M21,11a1,1,0,0,0-1,1,8.05,8.05,0,1,1-2.22-5.5h-2.4a1,1,0,0,0,0,2h4.53a1,1,0,0,0,1-1V3a1,1,0,0,0-2,0V4.77A10,10,0,1,0,22,12,1,1,0,0,0,21,11Z"/></svg></a>
								<a class="dashbox__more" href="catalog.php">View All</a>
							</div>
						</div>

						<div class="dashbox__table-wrap dashbox__table-wrap--2">
							<table class="dashbox__table">
								<thead>
									<tr>
										<th>ID</th>
										<th>NAME</th>
										<th>RELEASE DATE</th>
										<th>RATING</th>
									</tr>
								</thead>
								<tbody>
									<?php 
									$query = "SELECT movie_id FROM popular_movies";
									$result = mysqli_query($con, $query);

									while ($row = mysqli_fetch_assoc($result)) {
										$movie_id = $row['movie_id'];
										$movie = getMovieDetails($con, $movie_id);
										echo '
									<tr>
										<td>
											<div class="dashbox__table-text">'.$movie['id'].'</div>
										</td>
										<td>
											<div class="dashbox__table-text"><a href="#">'.$movie['name'].'</a></div>
										</td>
										<td>
											<div class="dashbox__table-text">'.$movie['release_date'].'</div>
										</td>
										<td>
											<div class="dashbox__table-text dashbox__table-text--rate">'.$movie['imdb'].'</div>
										</td>
									</tr>
									';
									}

									?>
							
								</tbody>
							</table>
						</div>
					</div>
				</div>
				<!-- end dashbox -->

				<!-- dashbox -->
				<div class="col-12 col-xl-6">
					<div class="dashbox">
						<div class="dashbox__title">
							<h3><img src="img/user-circle.svg" alt=""> Upcoming Movies</h3>

							<div class="dashbox__wrap">
								<a class="dashbox__refresh" href="index.php"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M21,11a1,1,0,0,0-1,1,8.05,8.05,0,1,1-2.22-5.5h-2.4a1,1,0,0,0,0,2h4.53a1,1,0,0,0,1-1V3a1,1,0,0,0-2,0V4.77A10,10,0,1,0,22,12,1,1,0,0,0,21,11Z"/></svg></a>
								<a class="dashbox__more" href="catalog.php">View All</a>
							</div>
						</div>

						<div class="dashbox__table-wrap dashbox__table-wrap--3">
							<table class="dashbox__table">
								<thead>
									<tr>
										<th>ID</th>
										<th>NAME</th>
										<th>RELEASE DATE</th>
										<th>RATING</th>
									</tr>
								</thead>
								<tbody>
<?php
								// Fetch and display upcoming movies
$query = "SELECT movie_id FROM upcoming_movies";
$result = mysqli_query($con, $query);

while ($row = mysqli_fetch_assoc($result)) {
    $movie_id = $row['movie_id'];
    $movie = getMovieDetails($con, $movie_id);
	echo '
									<tr>
										<td>
											<div class="dashbox__table-text">'.$movie['id'].'</div>
										</td>
										<td>
											<div class="dashbox__table-text">'.$movie['name'].'</div>
										</td>
										<td>
											<div class="dashbox__table-text">'.$movie['release_date'].'</div>
										</td>
										<td>
											<div class="dashbox__table-text">'.$movie['imdb'].'</div>
										</td>
									</tr>
									';
}
?>
							
								</tbody>
							</table>
						</div>
					</div>
				</div>
				<!-- end dashbox -->

					<!-- dashbox -->
					<div class="col-12 col-xl-6">
					<div class="dashbox">
						<div class="dashbox__title">
							<h3><img src="img/user-circle.svg" alt="">Movies In Theatres</h3>

							<div class="dashbox__wrap">
								<a class="dashbox__refresh" href="index.php"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M21,11a1,1,0,0,0-1,1,8.05,8.05,0,1,1-2.22-5.5h-2.4a1,1,0,0,0,0,2h4.53a1,1,0,0,0,1-1V3a1,1,0,0,0-2,0V4.77A10,10,0,1,0,22,12,1,1,0,0,0,21,11Z"/></svg></a>
								<a class="dashbox__more" href="catalog.php">View All</a>
							</div>
						</div>

						<div class="dashbox__table-wrap dashbox__table-wrap--3">
							<table class="dashbox__table">
								<thead>
									<tr>
										<th>ID</th>
										<th>NAME</th>
										<th>RELEASE DATE</th>
										<th>RATING</th>
									</tr>
								</thead>
								<tbody>
<?php
								// Fetch and display upcoming movies
$query = "SELECT movie_id FROM now_in_theatres";
$result = mysqli_query($con, $query);

while ($row = mysqli_fetch_assoc($result)) {
    $movie_id = $row['movie_id'];
    $movie = getMovieDetails($con, $movie_id);
	echo '
									<tr>
										<td>
											<div class="dashbox__table-text">'.$movie['id'].'</div>
										</td>
										<td>
											<div class="dashbox__table-text">'.$movie['name'].'</div>
										</td>
										<td>
											<div class="dashbox__table-text">'.$movie['release_date'].'</div>
										</td>
										<td>
											<div class="dashbox__table-text">'.$movie['imdb'].'</div>
										</td>
									</tr>
									';
}
?>
							
								</tbody>
							</table>
						</div>
					</div>
				</div>
				<!-- end dashbox -->



					<!-- dashbox -->
					<div class="col-12 col-xl-6">
					<div class="dashbox">
						<div class="dashbox__title">
							<h3><img src="img/user-circle.svg" alt="">Suggested For You</h3>

							<div class="dashbox__wrap">
								<a class="dashbox__refresh" href="index.php"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M21,11a1,1,0,0,0-1,1,8.05,8.05,0,1,1-2.22-5.5h-2.4a1,1,0,0,0,0,2h4.53a1,1,0,0,0,1-1V3a1,1,0,0,0-2,0V4.77A10,10,0,1,0,22,12,1,1,0,0,0,21,11Z"/></svg></a>
								<a class="dashbox__more" href="catalog.php">View All</a>
							</div>
						</div>

						<div class="dashbox__table-wrap dashbox__table-wrap--3">
							<table class="dashbox__table">
								<thead>
									<tr>
										<th>ID</th>
										<th>NAME</th>
										<th>RELEASE DATE</th>
										<th>RATING</th>
									</tr>
								</thead>
								<tbody>
<?php
								// Fetch and display upcoming movies
$query = "SELECT movie_id FROM suggested_movies";
$result = mysqli_query($con, $query);

while ($row = mysqli_fetch_assoc($result)) {
    $movie_id = $row['movie_id'];
    $movie = getMovieDetails($con, $movie_id);
	echo '
									<tr>
										<td>
											<div class="dashbox__table-text">'.$movie['id'].'</div>
										</td>
										<td>
											<div class="dashbox__table-text">'.$movie['name'].'</div>
										</td>
										<td>
											<div class="dashbox__table-text">'.$movie['release_date'].'</div>
										</td>
										<td>
											<div class="dashbox__table-text">'.$movie['imdb'].'</div>
										</td>
									</tr>
									';
}
?>
							
								</tbody>
							</table>
						</div>
					</div>
				</div>
				<!-- end dashbox -->

		
			</div>
		</div>
	</main>
	<!-- end main content -->

	<!-- JS -->
	<script src="js/bootstrap.bundle.min.js"></script>
	<script src="js/smooth-scrollbar.js"></script>
	<script src="js/slimselect.min.js"></script>
	<script src="js/admin.js"></script>
</body>
</html>
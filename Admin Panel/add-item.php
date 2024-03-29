<?php
include("nav.php");
?>

<!-- main content -->
<main class="main">
    <div class="container-fluid">
        <div class="row">
            <!-- main title -->
            <div class="col-12">
                <div class="main__title">
                    <h2>Add New Movie</h2>
                </div>
            </div>
            <!-- end main title -->

            <!-- form -->
            <div class="col-12">
                <form class="sign__form sign__form--add" method="post" enctype="multipart/form-data" >
                    <div class="row">
                        <div class="col-12 col-xl-7">
                            <div class="row">
                                <div class="col-12">
                                    <div class="sign__group">
                                        <input type="text" class="sign__input" placeholder="Title" name="m-name">
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="sign__group">
                                        <textarea id="text" class="sign__textarea" placeholder="Description" name="m-desc"></textarea>
                                    </div>
                                </div>

                                <div class="col-12 col-xl-6">
                                    <div class="sign__group">
                                        <div class="sign__gallery">
                                            <label id="gallery1" for="sign__gallery-upload">Upload Poster (600x900)</label>
                                            <input data-name="#gallery1" id="sign__gallery-upload" class="sign__gallery-upload" type="file" accept=".png, .jpg, .jpeg" name="m-image">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 col-xl-6">
                                    <div class="sign__group">
                                        <input type="text" class="sign__input" placeholder="Trailer Link" name="m-trailer">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-xl-5">
                            <div class="row">
                                <div class="col-12 col-xl-6">
                                    <div class="sign__group">
                                        <input type="text" class="sign__input" placeholder="IMDB" name="m-imdb">
                                    </div>
                                </div>

                                <div class="col-12 col-xl-6">
                                    <div class="sign__group">
                                        <input type="text" class="sign__input" placeholder="Release Date" name="m-rel_date">
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="sign__group">
                                        <select class="sign__selectjs" id="sign__genre" multiple name="m-genre[]">
                                            <option value="Action">Action</option>
                                            <option value="Animation">Animation</option>
											<option value="Adventure">Adventure</option>
											<option value="SuperNatural">SuperNatural</option>
                                            <option value="Comedy">Comedy</option>
                                            <option value="Crime">Crime</option>
                                            <option value="Drama">Drama</option>
                                            <option value="Fantasy">Fantasy</option>
                                            <option value="Historical">Historical</option>
                                            <option value="Horror">Horror</option>
                                            <option value="Romance">Romance</option>
                                            <option value="Science-fiction">Science-fiction</option>
                                            <option value="Thriller">Thriller</option>
                                            <option value="Western">Western</option>
                                            <option value="Other">Other</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-12 col-xl-6">
                                    <div class="sign__group">
                                        <input type="text" class="sign__input" placeholder="Run time" name="m-runtime">
                                    </div>
                                </div>

                                <div class="col-12 col-xl-6">
                                    <div class="sign__group">
                                        <input type="text" class="sign__input" placeholder="Rated" name="m-rated">
                                    </div>
                                </div>

								
                                <div class="col-12 col-xl-12">
                                    <div class="sign__group">
                                        <input type="text" class="sign__input" placeholder="Tagline" name="m-tagline">
                                    </div>
                                </div>
                            </div>
                        </div>

                        

                        <div class="col-12 col-xl-4 mt-2" style="background-color:#2b2b31; color:#fff;">
            <div class="sign__group">
                <label for="sign__cover-upload">Upload Banner {optional} (1920x1080)</label>
                <input type="file" accept=".png, .jpg, .jpeg" name="cover-image">
            </div>
        </div>


                        <div class="col-12 col-xl-8 mt-2">
                            <div class="sign__group">
                                <input type="text" class="sign__input" placeholder="Cast" name="m-cast">
                            </div>
                        </div>

                     

                        <div class="row mt-4">
                            <label style="color: #fff;" class="mb-2">Day 1</label>
                            <div class="col-12 col-xl-4">
                                <div class="sign__group">
                                    <input type="text" class="sign__input" placeholder="Choose Date" onfocus="(this.type='date')" name="day1_date">
                                </div>
                            </div>

                            <div class="col-12 col-xl-2">
                                <div class="sign__group">
                                    <input type="text" class="sign__input" placeholder="Choose 1st time" onfocus="(this.type='time')" name="day1_time1">
                                </div>
                            </div>

                            <div class="col-12 col-xl-2">
                                <div class="sign__group">
                                    <input type="text" class="sign__input" placeholder="Choose 2nd time" onfocus="(this.type='time')" name="day1_time2">
                                </div>
                            </div>

                            <div class="col-12 col-xl-2">
                                <div class="sign__group">
                                    <input type="text" class="sign__input" placeholder="Choose 3rd time" onfocus="(this.type='time')" name="day1_time3">
                                </div>
                            </div>

                            <div class="col-12 col-xl-2">
                                <div class="sign__group">
                                    <input type="text" class="sign__input" placeholder="Ticket Price"  name="price_1">
                                </div>
                            </div>

                        </div>

                        <div class="row mt-4">
                            <label style="color: #fff;" class="mb-2">Day 2</label>
                            <div class="col-12 col-xl-4">
                                <div class="sign__group">
                                    <input type="text" class="sign__input" placeholder="Choose Date" onfocus="(this.type='date')" name="day2_date">
                                </div>
                            </div>

                            <div class="col-12 col-xl-2">
                                <div class="sign__group">
                                    <input type="text" class="sign__input" placeholder="Choose 1st time" onfocus="(this.type='time')" name="day2_time1">
                                </div>
                            </div>

                            <div class="col-12 col-xl-2">
                                <div class="sign__group">
                                    <input type="text" class="sign__input" placeholder="Choose 2nd time" onfocus="(this.type='time')" name="day2_time2">
                                </div>
                            </div>

                            <div class="col-12 col-xl-2">
                                <div class="sign__group">
                                    <input type="text" class="sign__input" placeholder="Choose 3rd time" onfocus="(this.type='time')" name="day2_time3">
                                </div>
                            </div>

                            <div class="col-12 col-xl-2">
                                <div class="sign__group">
                                    <input type="text" class="sign__input" placeholder="Ticket Price"  name="price_2">
                                </div>
                            </div>
                        </div>

                        <div class="row mt-4">
                            <label style="color: #fff;" class="mb-2">Day 3</label>
                            <div class="col-12 col-xl-4">
                                <div class="sign__group">
                                    <input type="text" class="sign__input" placeholder="Choose Date" onfocus="(this.type='date')" name="day3_date">
                                </div>
                            </div>

                            <div class="col-12 col-xl-2">
                                <div class="sign__group">
                                    <input type="text" class="sign__input" placeholder="Choose 1st time" onfocus="(this.type='time')" name="day3_time1">
                                </div>
                            </div>

                            <div class="col-12 col-xl-2">
                                <div class="sign__group">
                                    <input type="text" class="sign__input" placeholder="Choose 2nd time" onfocus="(this.type='time')" name="day3_time2">
                                </div>
                            </div>

                            <div class="col-12 col-xl-2">
                                <div class="sign__group">
                                    <input type="text" class="sign__input" placeholder="Choose 3rd time" onfocus="(this.type='time')" name="day3_time3">
                                </div>
                            </div>
                            <div class="col-12 col-xl-2">
                                <div class="sign__group">
                                    <input type="text" class="sign__input" placeholder="Ticket Price"  name="price_3">
                                </div>
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
function escape_string($value) {
    global $con;
    return mysqli_real_escape_string($con, $value);
}

if (isset($_POST['btn'])) {
    $posterFilename = $_FILES['m-image']['name'];
    $coverFilename = "";

    // Check if a cover image was uploaded
    if ($_FILES['cover-image']['error'] === 0) {
        $coverFilename = $_FILES['cover-image']['name'];
        $coverTemp = $_FILES['cover-image']['tmp_name'];
        $coverType = $_FILES['cover-image']['type'];
        move_uploaded_file($coverTemp, "../Main Assests/images/movies/$coverFilename");
    }

    foreach ($_POST as $key => $value) {
        if (is_array($value)) {
            $_POST[$key] = implode(",", array_map('escape_string', $value));
        } else {
            $_POST[$key] = escape_string($value);
        }
    }

    $name = $_POST["m-name"];
    $description = $_POST["m-desc"];
    $trailer = $_POST["m-trailer"];
    $imdb = $_POST["m-imdb"];
    $release_date = $_POST["m-rel_date"];
    $genre = $_POST["m-genre"] ?? '';
    $runtime = $_POST["m-runtime"];
    $rated = $_POST["m-rated"];
    $tagline = $_POST["m-tagline"];
    $cast = $_POST["m-cast"];
    $day1_date = $_POST["day1_date"];
    $day1_time1 = $_POST["day1_time1"];
    $day1_time2 = $_POST["day1_time2"];
    $day1_time3 = $_POST["day1_time3"];
    $price_1 = $_POST["price_1"];
    $day2_date = $_POST["day2_date"];
    $day2_time1 = $_POST["day2_time1"];
    $day2_time2 = $_POST["day2_time2"];
    $day2_time3 = $_POST["day2_time3"];
    $price_2 = $_POST["price_2"];
    $day3_date = $_POST["day3_date"];
    $day3_time1 = $_POST["day3_time1"];
    $day3_time2 = $_POST["day3_time2"];
    $day3_time3 = $_POST["day3_time3"];
    $price_3 = $_POST["price_3"];

    $size = $_FILES['m-image']['size'];
    $temp = $_FILES['m-image']['tmp_name'];
    $type = $_FILES['m-image']['type'];

    move_uploaded_file($temp, "../Main Assests/images/movies/$posterFilename");

    if (strtolower($type) == "image/jpg"
        || strtolower($type) == "image/jpeg"
        || strtolower($type) == "image/png") {

        $imagename = $_FILES['m-image']['name'];

        $insert = "INSERT INTO `movies`(`name`, `description`, `image`, `imagename_cover`, `trailer_link`, `imdb`, `release_date`, `genre`, `runtime`, `rated`, `tagline`, `cast`, `day1_date`, `day1_time1`, `day1_time2`, `day1_time3`,`price_1`, `day2_date`, `day2_time1`, `day2_time2`, `day2_time3`,`price_2`, `day3_date`, `day3_time1`, `day3_time2`, `day3_time3`,`price_3`) VALUES 
        ('$name','$description','$posterFilename','$coverFilename','$trailer','$imdb','$release_date','$genre','$runtime','$rated','$tagline', '$cast','$day1_date','$day1_time1','$day1_time2','$day1_time3','$price_1','$day2_date','$day2_time1','$day2_time2','$day2_time3','$price_2','$day3_date','$day3_time1','$day3_time2','$day3_time3','$price_3')";

        $run = mysqli_query($con, $insert);

    } else {
        echo "Invalid file type. Please upload a JPG, JPEG, or PNG image.";
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

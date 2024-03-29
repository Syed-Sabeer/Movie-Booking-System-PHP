<?php
if (isset($_GET['data'])) {
    $jsonData = $_GET['data'];
    $selectedOptions = json_decode($jsonData);

    // Here, you should have a mapping of option values to image names and corresponding names
    $optionData = [
        'option1' => ['name' => 'Option 1', 'image' => 'path_to_image1.jpg'],
        'option2' => ['name' => 'Option 2', 'image' => 'path_to_image2.jpg'],
        // Add more mappings for each option value
    ];

    // Display the selected options with images and names
    foreach ($selectedOptions as $option) {
        if (isset($optionData[$option])) {
            $name = $optionData[$option]['name'];
            $image = $optionData[$option]['image'];
            echo "<div><img src='$image' alt='$name'><p>$name</p></div>";
        }
    }
}
?>

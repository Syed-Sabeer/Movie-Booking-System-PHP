<?php
include("./conncection.php");

if (isset($_GET['deleteid']) && !empty($_GET['deleteid'])) {
    $deleteId = $_GET['deleteid'];

    // Perform the DELETE operation using the provided ID
    $sql = "DELETE FROM `movies` WHERE `id` = ?";
    $stmt = $con->prepare($sql);
    $stmt->bind_param("i", $deleteId);
    if ($stmt->execute()) {
        // Successfully deleted the item
        header("Location: catalog.php"); // Redirect to the catalog page after deletion
        exit;
    } else {
        // Error occurred while deleting
        echo "Error deleting item: " . $stmt->error;
    }
}

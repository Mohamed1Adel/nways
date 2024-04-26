<?php
include("../include/function.php");

// Check if hotel ID is provided via GET parameter
if (isset($_GET['id'])) {
    $hotel_id = $_GET['id'];

    // Retrieve hotel details including image filenames
    $sql_select = "SELECT * FROM hotels WHERE id = $hotel_id";
    $result_select = $conectDB->query($sql_select);

    if ($result_select->num_rows > 0) {
        $row_select = $result_select->fetch_assoc();
        $hotel_title = $row_select['title'];
        $images_string = $row_select['imgs']; // Assuming images are stored as comma-separated filenames

        // Delete hotel record from database
        $sql_delete = "DELETE FROM hotels WHERE id = $hotel_id";

        if ($conectDB->query($sql_delete) === TRUE) {
            // Delete associated images from upload folder
            $uploadDir = 'uploads/';
            $images = explode(',', $images_string);
            foreach ($images as $image) {
                $imagePath = $uploadDir . $image;
                if (file_exists($imagePath)) {
                    unlink($imagePath); // Delete image file
                }
            }

            echo '<script>
            alert("hotel deleted successfully");
            window.location.href= "../all_hotels.php";
            </script>';
        } else {
            echo "Error deleting hotel: " . $conectDB->error;
        }
    } else {
        echo "Hotel not found.";
    }
} else {
    echo "Hotel ID not provided.";
}

$conectDB->close();
?>


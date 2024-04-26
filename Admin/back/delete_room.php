<?php
include("../include/function.php");

// Check if room ID is provided via GET parameter
if (isset($_GET['id']) && isset($_GET['hid'])) {
    $room_id = $_GET['id'];
    $hid = $_GET['hid'];

    // Retrieve room details including image filenames
    $sql_select = "SELECT * FROM rooms WHERE id = $room_id";
    $result_select = $conectDB->query($sql_select);

    if ($result_select->num_rows > 0) {
        $row_select = $result_select->fetch_assoc();
        $room_title = $row_select['title'];
        $images_string = $row_select['images']; // Assuming images are stored as comma-separated filenames

        // Delete room record from database
        $sql_delete = "DELETE FROM rooms WHERE id = $room_id";

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
            alert("room deleted successfully");
            window.location.href= "../update_hotel.php?id='.$hid.'";
            </script>';
        } else {
            echo "Error deleting room: " . $conectDB->error;
        }
    } else {
        echo "Room not found.";
    }
} else {
    echo "Room ID not provided.";
}

$conectDB->close();
?>
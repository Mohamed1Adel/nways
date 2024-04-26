<?php
include("../include/function.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $hotel_id = $_POST['hotel_id'];
    $title = $_POST['title'];
    $ar_title = $_POST['ar_title'];
    $description = $_POST['description'];
    $ar_description = $_POST['ar_description'];
    $video_link = $_POST['video_link'];
    $price = $_POST['price'];
    $location = $_POST['location'];
    $ar_location = $_POST['ar_location'];
    $city = $_POST['city'];
    $ar_city = $_POST['ar_city'];
    $stars = $_POST['stars'];
    $status = $_POST['status'] ?? "0";
    $offer = $_POST['offer'] ?? "0";
    $curr_time = time();

    // Fetch Existing Image Names
    $sql_select = "SELECT imgs FROM hotels WHERE id = $hotel_id";
    $result_select = $conectDB->query($sql_select);

    if ($result_select->num_rows > 0) {
        $row_select = $result_select->fetch_assoc();
        $existing_images = $row_select['imgs'];

        // Handle Image Uploads
        $uploadDir = 'uploads/';
        if (!empty($_FILES['images']['name'][0])) {
            // Delete old images from upload folder and database
            $old_images = explode(',', $existing_images);
            foreach ($old_images as $old_image) {
                $old_image_path = $uploadDir . $old_image;
                if (file_exists($old_image_path)) {
                    unlink($old_image_path); // Delete old image file
                }
            }
            
            // Upload new images
            $new_image_names = [];
            foreach ($_FILES['images']['tmp_name'] as $key => $tmp_name) {
                $file_name = $_FILES['images']['name'][$key];
                $file_tmp = $_FILES['images']['tmp_name'][$key];
                $file_path = $uploadDir .  $curr_time . $file_name;

                if (move_uploaded_file($file_tmp, $file_path)) {
                    $new_image_names[] = $curr_time . $file_name;
                }
            }

            $new_images = implode(',', $new_image_names);
        } else {
            // No new images uploaded, retain existing images
            $new_images = $existing_images;
        }

        // Update Hotel Details in Database
        $sql_update = "UPDATE hotels SET 
                       title = '$title', 
                       ar_title = '$ar_title', 
                       description = '$description', 
                       ar_description = '$ar_description', 
                       video_link = '$video_link', 
                       price = '$price', 
                       location = '$location', 
                       ar_location = '$ar_location', 
                       city = '$city', 
                       ar_city = '$ar_city', 
                       stars = +$stars, 
                       status = +$status,
                       offer = +$offer,
                       imgs = '$new_images'
                       WHERE id = $hotel_id";

        if ($conectDB->query($sql_update) === TRUE) {
            echo '<script>
            alert("hotel updated successfully");
            window.location.href= "../update_hotel.php?id='.$hotel_id.'";
            </script>';
        } else {
            echo "Error updating hotel: " . $conectDB->error;
        }
    } else {
        echo "Hotel not found.";
    }
}

$conectDB->close();
?>

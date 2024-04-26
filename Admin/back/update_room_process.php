<?php
include("../include/function.php");



if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $room_id = $_POST['room_id'];
    $hid = $_POST['hid'];

    $title = $_POST['title'];
    $ar_title = $_POST['ar_title'];
    $description = $_POST['description'];
    $ar_description = $_POST['ar_description'];
    $price = $_POST['price'];
    $pads = $_POST['peds'];
    $palcon = $_POST['palcon'] ?? "0";
    $air = $_POST['air'] ?? "0";
    $bath = $_POST['bath'] ?? "0";
    $space = $_POST['space'];
    $wifi = $_POST['wifi'] ?? "0";
    $heater = $_POST['heater'] ?? "0";
    $panio = $_POST['panio'] ?? "0";
    $status = $_POST['status'] ?? "0";
    $curr_time = time();
    // Handle Image Uploads
    $uploadDir = 'uploads/';
    $room_images = [];
    if (!empty($_FILES['images']['name'][0])) {
        // Delete old images from database and upload folder
        $sql_select = "SELECT images FROM rooms WHERE id = $room_id";
        $result_select = $conectDB->query($sql_select);
        if ($result_select->num_rows > 0) {
            $row_select = $result_select->fetch_assoc();
            $old_images = explode(',', $row_select['images']);
            foreach ($old_images as $old_image) {
                $old_image_path = $uploadDir . $old_image;
                if (file_exists($old_image_path)) {
                    unlink($old_image_path); // Delete old image file
                }
            }
        }

        // Upload new images
        foreach ($_FILES['images']['tmp_name'] as $key => $tmp_name) {
            $file_name = $_FILES['images']['name'][$key];
            $file_tmp = $_FILES['images']['tmp_name'][$key];
            $file_path = $uploadDir . $curr_time . $file_name;

            if (move_uploaded_file($file_tmp, $file_path)) {
                $room_images[] = $curr_time . $file_name;
            }
        }
    }

    $images_string = implode(',', $room_images);

    // Update room data in database
    $sql_update = "UPDATE rooms SET 
                   title = '$title', 
                   title = '$title', 
                   ar_title = '$ar_title', 
                   description = '$description', 
                   ar_description = '$ar_description',
                   price = '$price', 
                   pads = $pads, 
                   palcon = +$palcon, 
                   air = +$air, 
                   bath = +$bath, 
                   space = '$space', 
                   wifi = +$wifi, 
                   heater = +$heater, 
                   panio = +$panio, 
                   status = +$status,   
                   images = '$images_string'
                   WHERE id = $room_id";

    if ($conectDB->query($sql_update) === TRUE) {
        echo '<script>
        alert("room updated successfully");
        window.location.href= "../update_hotel.php?id='.$hid.'";
        </script>';
    } else {
        echo "Error updating room: " . $conectDB->error;
    }
}

$conectDB->close();
?>

<?php
include("../include/function.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $hotel_id = $_POST['hotel_id'];
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
//   echo $hotel_id . $title . $description.$pads.$palcon.$air.$bath. $space.$wifi .$heater.$panio.$status;
   // Handle Image Uploads
    $uploadDir = 'uploads/';
    $room_images = [];
    if (!empty($_FILES['images']['name'][0])) {
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

    // Insert room data into database
    $sql = "INSERT INTO rooms (title,ar_title, description,ar_description, pads, images,
      palcon, air,bath , space, wifi,heater ,panio ,hotel_id ,status , price ) 
            VALUES ('$title','$ar_title', '$description','$ar_description', $pads, '$images_string', +$palcon, +$air,+$bath,$space,+$wifi,+$heater,+$panio,$hotel_id,+$status,'$price')";
    // $sql = "INSERT INTO rooms (hotel_id, title, desc, price, images, status) 
    //         VALUES ($hotel_id, '$title', '$description', '$price', '$images_string', 1)";

    if ($conectDB->query($sql) === TRUE) {
        header("Location: ../update_hotel.php?id=$hotel_id");
        exit;
    } else {
        echo "Error adding room: " . $conectDB->error;
    }
}

$conectDB->close();
?>

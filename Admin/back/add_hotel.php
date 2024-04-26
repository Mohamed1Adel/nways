<?php

include("../include/function.php");

// Process Form Submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = $_POST['title'];
    $ar_title = $_POST['ar_title'];
    $description = $_POST['description'];
    $ar_description = $_POST['ar_description'];
    $city = $_POST['city'];
    $ar_city = $_POST['ar_city'];
    $video_link = $_POST['video_link'];
    $price = $_POST['price'];
    $location = $_POST['location'];
    $ar_location = $_POST['ar_location'];
    $stars = $_POST['stars'];
    $status = $_POST['status'] ?? "0";
    $offer = $_POST['offer'] ?? "0";
    $curr_time = time();
    // Upload Images
    $imgNames = [];
    $uploadDir = 'uploads/';
    foreach ($_FILES['images']['tmp_name'] as $key => $tmp_name) {
        $file_name = $_FILES['images']['name'][$key];
        $file_tmp = $_FILES['images']['tmp_name'][$key];
        $file_path = $uploadDir . $curr_time . $file_name;

        if (move_uploaded_file($file_tmp, $file_path)) {
            $imgNames[] = $curr_time . $file_name;
        }
    }

    // Insert Data into Database
    $imgs = implode(',', $imgNames);
    $sql = "INSERT INTO hotels (title,ar_title, description,ar_description, imgs, video_link, price, location,ar_location, stars, status, offer,city,ar_city)
            VALUES ('$title', '$ar_title','$description','$ar_description', '$imgs', '$video_link', '$price', '$location','$ar_location', '$stars', +$status, +$offer,'$city','$ar_city')";

    if ($conectDB->query($sql) === TRUE) {
        echo "Hotel added successfully.";
    } else {
        echo "Error: " . $sql . "<br>" . $conectDB->error;
    }
}

$conectDB->close();
?>

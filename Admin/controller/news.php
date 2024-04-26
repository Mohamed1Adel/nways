<?php
    include "../include/function.php";
    $action = $_POST["action"];
    switch ($action) {
        case "add":
                $title = $_POST["title"];
                $date = $_POST["date"];
                $image = $_POST["image"];
                $content = $_POST["content"];
                $status = $_POST["status"];
                mysqli_query($conectDB, "INSERT INTO news SET title = '".$title."', date = '".$date."', image = '".$image."', content = '".$content."' , status = '".$status."'");
        break; 
        case "delete":
                $id = $_POST["row"];
                mysqli_query($conectDB, "DELETE FROM news WHERE id = '".$id."'");
        break;
        case "edit":
                $id = $_POST["id"];
                $title = $_POST["title"];
                $date = $_POST["date"];
                $image = $_POST["image"];
                $content = $_POST["content"];
                $status = $_POST["status"];
                mysqli_query($conectDB, "UPDATE news SET title = '".$title."', date = '".$date."', image = '".$image."', content = '".$content."' , status = '".$status."' WHERE id = '".$id."'");
        break;
        default:
    }

?>
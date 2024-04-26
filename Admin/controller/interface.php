<?php
    include "../include/function.php";
    $action = $_POST["action"];
    switch ($action) {
        case "updatelinks":
                $link1title = $_POST["link1title"];
                $link2title = $_POST["link2title"];
                $link3title = $_POST["link3title"];
                $link4title = $_POST["link4title"];
                $link5title = $_POST["link5title"];
                $link1url = $_POST["link1url"];
                $link2url = $_POST["link2url"];
                $link3url = $_POST["link3url"];
                $link4url = $_POST["link4url"];
                $link5url = $_POST["link5url"];
                
                mysqli_query($conectDB, "UPDATE links SET 
                    link1title = '".$link1title."', 
                    link2title = '".$link2title."', 
                    link3title = '".$link3title."', 
                    link4title = '".$link4title."', 
                    link5title = '".$link5title."',
                    link1url = '".$link1url."', 
                    link2url = '".$link2url."', 
                    link3url = '".$link3url."', 
                    link4url = '".$link4url."', 
                    link5url = '".$link5url."' WHERE id = '1'");
        break; 

        case "updatecontact":
                $address = $_POST["address"];
                $phone = $_POST["phone"];
                $hotline = $_POST["hotline"];
                $email = $_POST["email"];
                $twitter = $_POST["twitter"];
                $facebook = $_POST["facebook"];
                $instagram = $_POST["instagram"];
                $youtube = $_POST["youtube"];
                $linkedin = $_POST["linkedin"];
                $googlemap = $_POST["googlemap"];
                
                mysqli_query($conectDB, "UPDATE contactus SET 
                    address = '".$address."', 
                    phone = '".$phone."', 
                    hotline = '".$hotline."', 
                    email = '".$email."', 
                    twitter = '".$twitter."',
                    facebook = '".$facebook."', 
                    instagram = '".$instagram."', 
                    youtube = '".$youtube."', 
                    linkedin = '".$linkedin."', 
                    googlemap = '".$googlemap."' WHERE id = '1'");
        break; 

        case "updateanalytics":
                $val1 = $_POST["val1"];
                $val2 = $_POST["val2"];
                $val3 = $_POST["val3"];
                $link1title = $_POST["link1title"];
                $link1url = $_POST["link1url"];
                
                mysqli_query($conectDB, "UPDATE links SET link1title = '".$link1title."', link1url = '".$link1url."' WHERE id = '2'");
                mysqli_query($conectDB, "UPDATE analytics SET value1 = '".$val1."', value2 = '".$val2."', value3 = '".$val3."' WHERE id = '1'");
        break;  

        case "updateslidestatus":
                $id = $_POST["id"];
                $status = $_POST["status"];
                mysqli_query($conectDB, "UPDATE slideshow SET status = '".$status."' WHERE id = '".$id."'");
        break; 

        case "updatepartnersstatus":
                $id = $_POST["id"];
                $status = $_POST["status"];
                mysqli_query($conectDB, "UPDATE partners SET status = '".$status."' WHERE id = '".$id."'");
        break;
        
        default:
    }

?>
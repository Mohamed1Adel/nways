<?php
    include "../include/function.php";
    $action = $_POST["action"];
    switch ($action) {
        case "updateprofile":
                $fullname = $_POST["fullname"];
                $jobtitle = $_POST["jobtitle"];
                $email = $_POST["email"];
                $phone = $_POST["phone"];
                $username = $_POST["username"];
                $sid = $_POST["sid"];
                mysqli_query($conectDB, "UPDATE users SET fullname = '".$fullname."', jobtitle = '".$jobtitle."', email = '".$email."', phone = '".$phone."' WHERE sid = '".$sid."'");
        break; 

        case "updatepassword":
                $oldpassword = $_POST["oldpassword"];
                $newpassword = $_POST["newpassword"];
                $username = $_POST["username"];
                $sid = $_POST["sid"];
                $mdpass = md5($oldpassword);
                $Nmdpass = md5($newpassword);
		        $data = mysqli_fetch_array(mysqli_query($conectDB, "SELECT COUNT(*) FROM users WHERE sid='".$sid."' and password='".$mdpass."'"));
        		if ($data[0] == 1) {
        			mysqli_query($conectDB, "UPDATE users SET password = '".$Nmdpass."' WHERE sid = '".$sid."'");
        			echo "1";	
        		} else {
        			echo "0";
        		}		        
		        
                
        break;
        
        default:
    }

?>
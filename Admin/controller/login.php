<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        include "include/function.php";
        session_start();
    
        $username = $_POST["username"];
        $password = $_POST["password"];
        $mdpass = md5($password);
		$data = mysqli_fetch_array(mysqli_query($conectDB, "SELECT COUNT(*) FROM users WHERE username='".$username."' and password='".$mdpass."'"));
		
		if ($data[0] == 1) {
				$_SESSION['username'] = $username;
				$tm = time();
                $si = "$username$tm";
                $sid = md5($si);
                $_SESSION['sid'] = $sid;
                mysqli_query($conectDB, "UPDATE users SET sid='".$sid."' WHERE username='".$username."'");
                header('Location: index');
				
		} else {
				echo "<script>setTimeout(function(){ $('#alert').show() }, 1000);</script>";
		}
    }
?>
<?php

    $conectDB = mysqli_connect("localhost", "root", "", "bright_ways");
   
    if($conectDB === false){
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }
	
    mysqli_set_charset($conectDB,"utf8");    
    date_default_timezone_set('Asia/Riyadh');
    $tm = time();




	function is_user(){
		if (isset($_SESSION['username']))
			return true;
	}

	function redirect($url){
		header('Location: ' .$url);
		exit;
	}



?>
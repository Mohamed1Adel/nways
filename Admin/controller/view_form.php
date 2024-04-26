<?php
    include "../include/function.php";
    $action = $_POST["action"];
    switch ($action) {
        case "edit_row":
                $form = $_POST["form"];
                $row = $_POST["row"];
                $table = $_POST["table"];
                $value = $_POST["value"];
                mysqli_query($conectDB, "UPDATE ".$form." SET ".$table." = '".$value."' WHERE id = '".$row."'");
        break; 
	
        default:
    }

?>
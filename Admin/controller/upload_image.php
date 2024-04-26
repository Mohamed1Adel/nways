<?php

$f_name = $_REQUEST['filename'];
$dir = $_REQUEST['dir'];


if(isset($_FILES["file"]["name"])){

     // File name
     $filename = $_FILES['file']['name'];
    
     // Location
     $location = $dir . "/" .$filename;

     // File size
     $filesize = $_FILE['file']['size'];

     // Maximum file size in bytes
     $max_size = 2000000; // 2MB

     if ($filesize > $max_size) {

           // Return response
           $response['status'] = 0;
           $response['msg'] = "The file exceeds the maximum file size of 2 MB.";
           echo json_encode($response);
           exit;
     }

     // Extension
     $extension = pathinfo($location,PATHINFO_EXTENSION);
     $extension = strtolower($extension);

     // Allowed file extensions 
     $acceptfile_ext = array("jpg");

     // Check file extension 
     if(in_array($extension,$acceptfile_ext)){
          
          // Upload file
          if (move_uploaded_file($_FILES["file"]["tmp_name"], $location)) {
                rename($location, $dir . "/" . $f_name.'.'.$extension);

                // Return response
                $response['status'] = 1;
                $response['msg'] = "File uploaded successfully.";
                echo json_encode($response);
                exit;

          }
     }else{

          // Return response
          $response['status'] = 0;
          $response['msg'] = "Invalid file extension.";
          echo json_encode($response);
          exit;
     }

}
?>
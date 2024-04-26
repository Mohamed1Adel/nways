<?php
include ('include/header.php');
?>

<?php 
$general = mysqli_fetch_array(mysqli_query($conectDB, "SELECT * FROM general_setting WHERE id='1'"));
echo $general['sitename'];

?>
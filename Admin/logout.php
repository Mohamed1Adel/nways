<?php
require_once('include/function.php');
session_start();

if(session_destroy())
	redirect('login');
	exit;
?>
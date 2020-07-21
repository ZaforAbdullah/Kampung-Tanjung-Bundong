<?php
include("config.php");

if (isset($_GET['del'])) {
	$mykad  = $_GET['del'];
	mysqli_query($con, "DELETE FROM borang WHERE mykad=$mykad");
	$_SESSION['message'] = "Address deleted!"; 
	header('location: view.php');}


?>
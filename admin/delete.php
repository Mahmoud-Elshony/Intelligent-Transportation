<?php
	$id=$_GET['id'];
	include('conn.php');
	mysqli_query($conn,"delete from `customer` where customer_id='$id'");
	header('location:users.php');
?>
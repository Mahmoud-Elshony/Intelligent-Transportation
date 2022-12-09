<?php
	$id=$_GET['id'];
	include('conn.php');
	mysqli_query($conn,"delete from `propety` where id='$id'");
	header('location:View.php');
?>
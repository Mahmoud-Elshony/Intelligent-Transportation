'<?php
	include('conn.php');
	
	$username = $_POST['username']; 
	$email=$_POST['email'];
	$password=$_POST['password'];
	$customer_contact=$_POST['customer_contact'];
	$cus_address=$_POST['cus_address'];
	$card_num=$_POST['card_num'];
	$balance=$_POST['balance'];

	mysqli_query($conn,"INSERT INTO `customer`(`customer_name`, `customer_address`, `customer_contact`, `customer_email`, `customer_card_num`, `password`, `balance`) VALUES 
	('$username','$cus_address','$customer_contact','$email','$card_num','$password','$balance')");
	
	
	$target_dir = "userimg/";
	$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
	$uploadOk = 1;
	$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

	// Check if image file is a actual image or fake image
	if(isset($_POST["submit"])) {
	$check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
	if($check !== false) {
		echo "File is an image - " . $check["mime"] . ".";
		$uploadOk = 1;
	} else {
		echo "File is not an image.";
		$uploadOk = 1;
	}
	}

	// Check if file already exists
	if (file_exists($target_file)) {
	echo "Sorry, file already exists.";
	$uploadOk = 0;
	}

	// Check if $uploadOk is set to 0 by an error
	if ($uploadOk == 0) {
	echo "Sorry, your file was not uploaded.";
	// if everything is ok, try to upload file
	} else {
	if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
		echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
	} else {
		echo "Sorry, there was an error uploading your file.";
	}
	}

	rename($target_file,$target_dir.$username.".jpg");
	header('location:users.php');
?>


<?php
	include('conn.php');
			$id=$_GET['id'];
	        $username = $_POST['username']; 
            $email=$_POST['email'];
			$password=$_POST['password'];
			$card_num=$_POST['card_num'];
			$balance=$_POST['balance'];



	
	mysqli_query($conn,"UPDATE `customer` SET balance=$balance, customer_card_num=$card_num , customer_name='$username', customer_email='$email' , password='$password'  where customer_id='$id'");
	header('location:users.php');
?>
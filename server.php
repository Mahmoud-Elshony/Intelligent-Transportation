<?php 
	session_start();
	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\SMTP;
	use PHPMailer\PHPMailer\Exception;
	//Load Composer's autoloader
	require 'C:\xampp\phpMyAdmin\vendor\autoload.php';
	
	///
	require 'C:\xampp\phpMyAdmin\vendor\PHPMailer-master/src/Exception.php';
	require 'C:\xampp\phpMyAdmin\vendor\PHPMailer-master/src/PHPMailer.php';
	require 'C:\xampp\phpMyAdmin\vendor\PHPMailer-master/src/SMTP.php';
	
	// use PHPMailer\PHPMailer\PHPMailer;
	// use PHPMailer\PHPMailer\SMTP;
	// use PHPMailer\PHPMailer\Exception;
	// require 'C:\xampp\vendor\autoload.php';
	// //require 'C:\xampp\vendor\phpmailer\phpmailer\src\PHPMailer.php';
	// require 'C:\xampp\vendor\phpmailer\phpmailer\src\SMTP.php';
	
	// //Create an instance; passing `true` enables exceptions
	// $mail = new PHPMailer(true);
	$mail = new PHPMailer(true);



	// variable declaration
	$username = "";
	$email    = "";
	$errors = array(); 
	$_SESSION['success'] = "";

	// connect to database
	$db = mysqli_connect('localhost', 'root', '', 'credit_card');

	// REGISTER USER
	if (isset($_POST['reg_user'])) {
		// receive all input values from the form into the variable
		$username = mysqli_real_escape_string($db, $_POST['username']);
		$email = mysqli_real_escape_string($db, $_POST['email']);
		$password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
		$password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

		// form validation: ensure that the form is correctly filled
		if (empty($username)) { array_push($errors, "برجاء ادخال اسم المستخدم"); }
		if (empty($email)) { array_push($errors, "برجاء ادخال البريد الالكتروني الخاص بك"); }
		if (empty($password_1)) { array_push($errors, "برجاء ادخال كلمة السر"); }

		if ($password_1 != $password_2) {
			array_push($errors, "كلمة السر غير متطابقة ");
		}

		// register user if there are no errors in the form
		if (count($errors) == 0) {
			$password = $password_1;//encrypt the password before saving in the database
			$query = "INSERT INTO customer (customer_name, customer_email, password) 
					  VALUES('$username', '$email', '$password')";
			mysqli_query($db, $query);



			try {
				//Server settings
				$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
				$mail->isSMTP();                                            //Send using SMTP
				$mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
				$mail->SMTPAuth   = true;                                   //Enable SMTP authentication
				$mail->Username   = 'transportationintelligent@gmail.com';                     //SMTP username
				$mail->Password   = 'cusyguotagmbogez';                               //SMTP password
				$mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
				$mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
			
				//Recipients
				$mail->setFrom('transportationintelligent@gmail.com', 'INT Transportation');
				$mail->addAddress($email);     //Add a recipientبريد العكيل
			
				//Content
				$mail->isHTML(true);                                  //Set email format to HTML
				$mail->Subject = 'Payment confirmation';
				$mail->Body    = 'hello DEAR CUSTOMER ,welcome to int tran';
				$mail->send();
				echo 'Message has been sent';
				
			
			} catch (Exception $e) {
				echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
			}











			$_SESSION['username'] = $username;
			$_SESSION['success'] = "لقد قمت بتسجيل دخولك بنجاح";
			header('location: home.php');
		}

	}

	// ... 

	// LOGIN USER
	if (isset($_POST['login_user'])) {
		$username = mysqli_real_escape_string($db, $_POST['username']);
		$password = mysqli_real_escape_string($db, $_POST['password']);

		if (empty($username)) {
			array_push($errors, "اسم المستخدم مطلوب من فضلك");
		}
		if (empty($password)) {
			array_push($errors, "كلمة السر مطلوبة من فضلك ");
		}

		if (count($errors) == 0) {
			$password = $password;
			$query = "SELECT * FROM customer WHERE customer_email='$username' AND password='$password'";
			$results = mysqli_query($db, $query);

			if (mysqli_num_rows($results) == 1) {
				$_SESSION['username'] = $username;
				$_SESSION['success'] = "تم تسجيل دخولك بنجاح ";
				header('location: home.php');
			}else {
				array_push($errors, "يوجد خطا فى البيانات المدخلة");
			}
		}
	}

?>
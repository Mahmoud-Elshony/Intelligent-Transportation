<?php


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



 $conn = mysqli_connect('localhost', 'root', '', 'credit_card');
 $cus_card_num = mysqli_real_escape_string($conn, $_GET['cus_card_num']);
 $cont = mysqli_real_escape_string($conn, $_GET['cont']);
 $payment_type="";
 if($cont==20){ echo $payment_type="تاكسي";}
 if($cont==30){ echo $payment_type="مونريل";}
 if($cont==10){ echo $payment_type="قطار";}
 if($cont==25){ echo $payment_type="اوتوبيس";}
 $thedate=date("Y-m-d");
 $thetime=date("h:i:sa");
 $w = mysqli_query($conn, "SELECT * FROM `customer` WHERE customer_card_num=$cus_card_num") or die(mysqli_connect_error());
 //$s = mysqli_num_rows($w);
 $rows = mysqli_fetch_array($w);
 $email=$rows['customer_email'];
 $query = "UPDATE `customer` SET `balance`=`balance`-$cont WHERE customer_card_num ='$cus_card_num'";

 
 $results = mysqli_query($conn, $query);
if($results){
  echo "tm bnga7";
  $query ="INSERT INTO `payment`(`payment_date`, `payment_time`, `payment_amount`, `payment_type`, `payment_details`, `purchase_user_card`) VALUES ('$thedate','$thetime','$cont','دفع تذكرة','$payment_type','$cus_card_num')";
    $results = mysqli_query($conn, $query);if($results){echo"14444444444444444444444444444444";}
  //emal send
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
      $mail->Body    = 'hello DEAR CUSTOMER , Payment confirm '.$_GET['cont'] .' from your balnace ';
      $mail->send();
      echo 'Message has been sent';
      header('location:../../users.php');

  } catch (Exception $e) {
      echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
  }




  }else{echo"error in system";}
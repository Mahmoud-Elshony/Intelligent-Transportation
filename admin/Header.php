
<?php 
ob_start();
session_start();
$con=mysqli_connect('localhost','root','','credit_card');
?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> لوحة التحكم </title>
    <link rel="stylesheet" type="text/css" href="style.css">

    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/bootstrap-rtl.css" rel="stylesheet">
    <link href="css/frame.css" rel="stylesheet">
    <link href="css/font-awesome.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap-select.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link href="css/mobile.css" rel="stylesheet">

    <!--<link rel="stylesheet" href="css/english.css">-->



</head>
<body dir="rtl">

<div class="master">
    <!--<header>

        <div class="bg-logo">
            <div class="container">
                <img src="images/logo.png" alt="">
            </div>
        </div>
    </header>

-->

<div class='nav'  >
<h3 style="margin-right:150px" >لوحة تحكم موقع النقل الذكي</h3>
  <ul dir="rtl">
    <li><a href='index.php'>الصفحة الرئيسية</a></li>
    <li><a href='add_customer.php'>اضافة المستخدمين</a></li>
    <li><a href='users.php'>إدارة المستخدمين</a></li>
    <!--<li><a href='insert.php'> إضافة مستخدم ومعلومات البطاقة  </a></li>   <li><a href='View.php'>ادارة المستخدمين  </a></li>-->
	 <li><a href='logout.php'>تسجيل الخروج   </a></li>
    <li class='lamp'><span></span></li>
  </ul>

</div>




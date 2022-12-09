<?php 
	session_start(); 

	if (!isset($_SESSION['username'])) {
		$_SESSION['msg'] = "برجاء تسجيل الدخول اولا";
		header('location: login.php');
	}

	if (isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['username']);
		header("location: login.php");
	}

?>
<?php include('Header.php') ?>

<br><br>        <div class="alert alert-success" role="alert" style="font-size:large;text-align:justify; font-family: ge1 ; color: #000; margin-right: 100px; margin-left: 50px; ">
<strong>الصفحة الشخصية    </strong>
<br><br>	
		
<p> <a href="logout.php" style="color: red;">تسجيل الخروج من الموقع</a> </p>
<br>
</div>
<div class="container" style="font-size:large;text-align:justify; font-family: ge1 ;">
<div class="jumbotron jumbotron-fluid">
<br>

	<div class="content">

		<!-- notification message -->
		<?php if (isset($_SESSION['success'])) : ?>
			<div class="error success" >
				<h3>
					<?php 
						echo $_SESSION['success']; 
						unset($_SESSION['success']);
					?>
				</h3>
			</div>
		<?php endif ?>

		<!-- logged in user information -->
		<?php  if (isset($_SESSION['username'])) : ?>
			<p>مرحبا  بك  <strong><?php echo $_SESSION['username']; ?></strong></p>
		<?php endif ?>
				
		 		<button type="button" class="btn btn-success"><a href="booking.php" style="font-size:18px">  اضغط هنا الان لحجز تذكره</a> </button>
	

		
	</div>
<?php include('Footer.php') ?>
<?php include('server.php') ?>
<?php include('Header.php') ?>


<br><br>        <div class="alert alert-success" role="alert" style="font-size:large;text-align:justify; font-family: ge1 ; color: #000; margin-right: 100px; margin-left: 50px; ">
<strong>تسجيل الدخول   </strong>
<br>
</div>
<div class="container" style="font-size:large;text-align:justify; font-family: ge1 ;">
<div class="jumbotron jumbotron-fluid">
<br>

	<form method="post" action="login.php">

		<?php include('errors.php'); ?>

		<div class="input-group">
			<label>ادخل البريد الاكتروني</label><br>
			<input type="text"  style="width:550px" name="username" class="form-control " placeholder="أدخل الاسم" >
		</div>
		<div class="input-group">
			<label>ادخل كلمة السر</label><br>
			<input type="password"  style="width:550px"  name="password" class="form-control" placeholder="ادخل كلمة السر">
		</div>
		<div class="input-group"><br>
			<button type="submit"  class="btn btn-info"  name="login_user">تسجيل الدخول</button>
		</div>
		<p>
			لست عضوا برجاء التسجيل فى الموقع <a href="register.php">التسجيل فى الموقع</a>
		</p>
	</form>
<?php include('Footer.php') ?>
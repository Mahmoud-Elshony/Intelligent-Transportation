<?php include('server.php') ?>
<?php include('Header.php') ?>

<br><br>        <div class="alert alert-success" role="alert" style="font-size:large;text-align:justify; font-family: ge1 ; color: #000; margin-right: 100px; margin-left: 50px; ">
<strong>التسجيل فى الموقع  </strong>
<br>
</div>
<div class="container" style="font-size:large;text-align:justify; font-family: ge1 ;">
<div class="jumbotron jumbotron-fluid">
<br>


	<form method="post" action="register.php">

		<?php include('errors.php'); ?>

		<div class="input-group">
			<label>الاسم </label> <br>
			<input style="width:550px" type="text" name="username" class="form-control " placeholder="أدخل الاسم" value="<?php echo $username; ?>">
		</div>
		<div class="input-group">
			<label>الايميل</label><br>
			<input style="width:550px" type="email" name="email" class="form-control" placeholder="ادخل الايميل" value="<?php echo $email; ?>">
		</div>
		<div class="input-group">
			<label>كلمة السر</label><br>
			<input style="width:550px" type="password"  class="form-control" placeholder="ادخل كلمة السر" name="password_1">
		</div>
		<div class="input-group">
			<label>اعادة كلمة السر</label><br>
			<input style="width:550px" type="password" class="form-control" placeholder="تكرار كلمة السر"  name="password_2">
		</div><br>
		<div><label>رقم الهاتف</label><br><input type="text" value="" name="customer_contact"><br><br>
</div><div><label>العنوان</label><br><input type="text" value="" name="cus_address"><br><br>
		</div>
		<div class="input-group">
			<button type="submit" style="font-size:22px"  class="btn btn-info" name="reg_user">سجل الان</button>
		</div><br><br>
		<p >
			فى حالة لو لديك حساب بالموقع 
			<button type="button" class="btn btn-success"><a href="login.php">قم بتسجيل الدخول</a></button>

		</p>
	</form>
</div></div>

<?php include('Footer.php') ?>
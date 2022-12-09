
<?php

  include("header.php");
	include('conn.php');
?>
 <section id="all">

        <div class="container">
            <div class="content col-xs-12 col-md-12">

<div class="jumbotron jumbotron-fluid" >
  <div class="container">

	<form method="POST" action="add_user.php"  enctype="multipart/form-data" style="font-family:he1 ; font-size:16px">
	<fieldset>
	<legend>اضافة مستخدم جديد <legend><hr>

		<label>اسم المستخدم</label><br><input type="text" value="" name="username"><br><br>
		<label>الايميل</label><br><input type="text" value="" name="email"><br><br>
		<label>كلمة السر</label><br><input type="text" value="" name="password"><br><br>
		
		<label>رقم الهاتف</label><br><input type="text" value="" name="customer_contact"><br><br>
		<label>العنوان</label><br><input type="text" value="" name="cus_address"><br><br>
			
		<label>رقم البطاقة</label><br><input type="text" value="" name="card_num"><br><br>
		<label>الرصيد</label><br><input type="text" value="" name="balance"><br><br>
		<lable> الصورة الشخصيه</lable><input type="file" name="fileToUpload" id="fileToUpload"><br><br>
		
		<input type="submit" name="submit" Value="اضافة" ><br><br>
		<button type="button" class="btn btn-success"><a href="users.php">للعودة </a></button>
		</fieldset>
	</form>
	
	</div>
	</div>
          </div>
  
</div>



          


    

    </section>

    <?php

         include("footer.php");
	?>
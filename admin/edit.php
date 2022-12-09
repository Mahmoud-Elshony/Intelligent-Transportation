
<?php

  include("header.php");
	include('conn.php');
	$id=$_GET['id'];
	$query=mysqli_query($conn,"select * from `customer` where customer_id='$id'");
	$row=mysqli_fetch_array($query);
?>
 <section id="all">

        <div class="container">
            <div class="content col-xs-12 col-md-12">

<div class="jumbotron jumbotron-fluid" >
  <div class="container">

	<form method="POST" action="update.php?id=<?php echo $id; ?> "  style="font-family:he1 ; font-size:16px">
	<fieldset>
	<legend> تعديل البيانات</legend>
		<label>اسم المستخدم</label><br><input type="text" value="<?php echo $row['customer_name']; ?>" name="username"><br><br>
		<label>الايميل</label><br><input type="text" value="<?php echo $row['customer_email']; ?>" name="email"><br><br>
		<label>كلمة السر</label><br><input type="text" value="<?php echo $row['password']; ?>" name="password"><br><br>
		<label>رقم البطاقة</label><br><input type="text" value="<?php echo $row['customer_card_num']; ?>" name="card_num"><br><br>
		<label>الرصيد</label><br><input type="text" value="<?php echo $row['balance']; ?>" name="balance"><br><br>
		
		
		<input type="submit" name="submit" Value="تعديل" ><br><br>
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
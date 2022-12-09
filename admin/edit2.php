
<?php

  include("header.php");
	include('conn.php');
	$id=$_GET['id'];
	$query=mysqli_query($conn,"select * from `propety` where id='$id'");
	$row=mysqli_fetch_array($query);
?>
 <section id="all">

        <div class="container">
            <div class="content col-xs-12 col-md-12">

<div class="jumbotron jumbotron-fluid" >
  <div class="container">

	<form method="POST" action="update2.php?id=<?php echo $id; ?> "  style="font-family:he1 ; font-size:16px">
	<fieldset>
	<legend> تعديل بيانات العقار</legend>
		<label>اسم العقار</label><input type="text" value="<?php echo $row['name']; ?>" name="name"><br><br>
		<label>تكلفة العقار</label><input type="text" value="<?php echo $row['monthly']; ?>" name="monthly"><br><br>
		<label>العنوان</label><input type="text" value="<?php echo $row['address']; ?>" name="address"><br><br>
		
		<label>الصلاحية</label><input type="text" value="<?php echo $row['access']; ?>" name="access"><br><br>
		<label>مساحة العقار</label><input type="text" value="<?php echo $row['floor']; ?>" name="floor"><br><br>
		<label>الخدمات المتاحة</label><input type="text" value="<?php echo $row['utility']; ?>" name="utility"><br><br>
		<label>وصف العقار</label><br><br>
		<textarea name="descrip" cols="50" rows="6"><?php  echo $row['descrip'];?></textarea><br><br>

		<label>اسم صاحب العقار</label><input type="text" value="<?php echo $row['ContactName']; ?>" name="ContactName"><br><br>
		<label>البريد الالكترونى</label><input type="text" value="<?php echo $row['ContactEmail']; ?>" name="ContactEmail"><br><br>
				<label>الموبايل</label><input type="text" value="<?php echo $row['ContactMobile']; ?>" name="ContactMobile"><br><br>
         <label>صورة العقار</label> <input type="file" name="images" /><img src="uploads/<?php echo $row['images']; ?>" width="200" height="200"/><br><br>

		<input type="submit" name="submit" Value="تعديل" ><br><br>
		<button type="button" class="btn btn-success"><a href="View.php">للعودة </a></button>
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
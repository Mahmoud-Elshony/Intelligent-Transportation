<?php include 'header.php'; ?>
<?php

$mysqli=new mysqli('localhost','root','','property');
	if($mysqli->connect_error){

		printf("can not connect databse %s\n",$mysqli->connect_error);
		exit();
	}

if(isset($_POST['submit'])){

	$name=$_POST['name'];
	$monthly=$_POST['monthly'];
	$address=$_POST['address'];
	$access=$_POST['access'];
	$floor=$_POST['floor'];
	$utility=$_POST['utility'];
	$ContactName=$_POST['ContactName'];
	$ContactEmail=$_POST['ContactEmail'];
	$ContactMobile=$_POST['ContactMobile'];
	$descrip=mysqli_real_escape_string($mysqli ,$_POST['descrip']);
	
	$target_dir="uploads/";
	$target_file= $target_dir . basename($_FILES["images"]["name"]);
	$temp_file=$_FILES["images"]["name"];
	move_uploaded_file($_FILES["images"]["tmp_name"], $target_file);
	
	
	$query="INSERT INTO propety (name,monthly,address,access,floor,utility,descrip,images,ContactName,ContactEmail,ContactMobile) VALUES ('$name','$monthly','$address','$access','$floor','$utility','$descrip','$temp_file' , '$ContactName' , '$ContactEmail' , '$ContactMobile' )";
	$insert=$mysqli->query($query);
	$last_id = $mysqli->insert_id;
	$c=count($_FILES['img']['name']);
	if($insert){

		if($c < 10){

			for ($i=0; $i <$c; $i++) { 
				$img_name=$_FILES['img']['name'][$i];
				move_uploaded_file($_FILES['img']['tmp_name'][$i] , "uploads/" .$img_name);
				$query_multi="INSERT INTO details(images,proid) VALUES ('$img_name','$last_id')";
				$ins=$mysqli->query($query_multi);
			}
			// else{
			// 	echo "MAX LIMIT EXCEED";
			// }

		}

	}


}


?>
<br><br><br><br><br>
<div class="container" style="font-size:large;text-align:justify; font-family: ge1 ;">
<div class="container"> 

<form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
  <fieldset>
    <legend>إضافة مسخدمين  </legend>
    <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">اسم العقار</label>
      <div class="col-lg-10">
        <input type="text" name="name" class="form-control"  placeholder="ٍاسم العقار">
      </div>
    </div>
    <div class="form-group">
      <label for="inputPassword" class="col-lg-2 control-label">الايجار الشهرى</label>
      <div class="col-lg-10">
        <input type="text" name="monthly" class="form-control"  placeholder="الايجار الشهر">
      </div>
    </div>
    <div class="form-group">
      <label for="textArea" class="col-lg-2 control-label">العنوان</label>
      <div class="col-lg-10">
        <textarea class="form-control" name="address" rows="3" id="textArea"></textarea>
      </div>
    </div>
    <div class="form-group">
      <label for="inputPassword" class="col-lg-2 control-label">الصلاحية</label>
      <div class="col-lg-10">
        <input type="text" name="access" class="form-control"  placeholder="الصلاحية">
      </div>
    </div>
    <div class="form-group">
      <label for="inputPassword" class="col-lg-2 control-label">مساحة العقار</label>
      <div class="col-lg-10">
        <input type="text" name="floor" class="form-control"  placeholder="مساحة العقار">
      </div>
    </div>
    <div class="form-group">
      <label for="inputPassword" class="col-lg-2 control-label">الخدمات المتوفرة</label>
      <div class="col-lg-10">
        <input type="text" name="utility" class="form-control"  placeholder="الخدمات">
      </div>
    </div>

    <div class="form-group">
      <label for="textArea" class="col-lg-2 control-label">الوصف</label>
      <div class="col-lg-10">
        <textarea class="form-control" name="descrip" rows="3" id="textArea"></textarea>
      </div>
    </div>
	    <legend>بيانات التواصل  </legend>

	    <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">اسم صاحب العقار</label>
      <div class="col-lg-10">
        <input type="text" name="ContactName" class="form-control"  placeholder="ٍاسم صاحب العقار">
      </div>
    </div>
		    <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label"> ايميل التواصل </label>
      <div class="col-lg-10">
        <input type="text" name="ContactEmail" class="form-control"  placeholder="ٍايميل التواصل">
      </div>
    </div>
		    <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">رقم التليفون </label>
      <div class="col-lg-10">
        <input type="text" name="ContactMobile" class="form-control"  placeholder="ٍرقم التليفون">
      </div>
    </div>
	    <legend>الصور   </legend>

    <div class="form-group">
      <label for="textArea" class="col-lg-2 control-label">الصورة الرئيسية للعقار</label>
      <div class="col-lg-10">
        <input type="file" name="images">
      </div>
    </div>
    <div class="form-group">
      <label for="textArea" class="col-lg-2 control-label">صور الغرف</label>
      <div class="col-lg-10">
        <input type="file" name="img[]" multiple>
      </div>
    </div>

    <div class="form-group">
      <div class="col-lg-10 col-lg-offset-2">
        <button type="submit" name="submit" class="btn btn-primary">تسجيل بيانات العقار</button>
		<button type="reset" class="btn btn-danger">الغاء</button>

      </div>
    </div>
  </fieldset>
</form>

</div>


<?php  include 'footer.php' ; ?>
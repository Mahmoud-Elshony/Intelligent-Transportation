<?php include 'header.php'; ?>
<?php    
$mysqli=new mysqli('localhost','root','','property');
	if($mysqli->connect_error){

		printf("can not connect databse %s\n",$mysqli->connect_error);
		exit();
	}

	$query="SELECT * FROM propety";
	$read=$mysqli->query($query);




?>

 
<br><br>        <div class="alert alert-success" role="alert" style="font-size:large;text-align:justify; font-family: ge1 ; color: #000; margin-right: 100px; margin-left: 50px; ">
<strong> واجهة حجز التذاكر</strong>
<br>
</div>
<div class="container" style="font-size:large;text-align:justify; font-family: ge1 ;">
<div class="jumbotron jumbotron-fluid">
<br>
<table class="table table-striped table-hover ">
            <label >اختر نوع المواصله</label>
                <select name="cont" id="">
                
                  <option value="20">تاكسي</option>
                  <option value="30">مونريل</option>
                  <option value="10">قطار</option>
                  <option value="25">اوتوبيس</option>
                </select>
            <label >اختر محطة القيام</label>
                <select name="cont" id="">
                  <option value="20">قويسنا</option>
                  <option value="30">المحله</option>
                  <option value="10">طنطا</option>
                  <option value="25">الممنصوره</option>
                </select>
            <label >اختر محطة الوصول</label>
                <select name="cont" id="">
                  <option value="20">قويسنا</option>
                  <option value="30">المحله</option>
                  <option value="10">طنطا</option>
                  <option value="25">المنصوره</option>
                </select>
                <label >اختر عدد الافراد</label>
                <select name="cont" id="">
                
                  <option value="20">1</option>
                  <option value="30">2</option>
                  <option value="10">3</option>
                  <option value="25">4</option>
                </select>

              <input type="submit" name="" id="" value="احجز يابن الوارمة">


</table> 
	

</div>

<?php  include 'footer.php' ; ?>

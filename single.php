<?php include 'header.php'; ?>

<?php

$mysqli=new mysqli('localhost','root','','property');
	if($mysqli->connect_error){

		printf("can not connect databse %s\n",$mysqli->connect_error);
		exit();
	}

if(isset($_GET['posts'])){

	$id=$_GET['posts'];
	$query2= "SELECT * FROM propety where id='$id'";
	$readd=$mysqli->query($query2);
    $readd2=$mysqli->query($query2);
}

?>

<style type="text/css">
	
.rooms img{
	width: 80px;
	height: 80px;
}

</style>
<br><br>        <div class="alert alert-success" role="alert" style="font-size:large;text-align:justify; font-family: ge1 ; color: #000; margin-right: 100px; margin-left: 50px; ">
<strong>تفاصيل العقار  </strong>
</div>
<div class="container" style="font-size:large;text-align:justify; font-family: ge1 ;">
<div class="jumbotron jumbotron-fluid">
<br>
<br>
	<table class="table table-striped table-hover ">
  <thead>
    <tr>
      <th>العنوان</th>
      <th>الصلاحية </th>
      <th>مساحة العقار</th>
      <th>الخدمات المتاحة</th>
      <th>الوصف </th>
      <th>صور العقار</th>
    </tr>
  </thead>
  <tbody>
  <?php while ($row= $readd->fetch_assoc()) { ?>

    <tr>
      <td> <?php echo $row['address'];  ?></td>
      <td><?php echo $row['access'];  ?></td>
      <td><?php echo $row['floor'];  ?></td>
      <td><?php echo $row['utility'];  ?></td>
      <td><?php echo $row['descrip'];  ?></td>
      <td class="rooms">

      		<?php  $image_name="SELECT * FROM propety as p join details as d 
      					on p.id =d.proid where d.proid =".$row['id'];
      					$read1=$mysqli->query($image_name);

      					foreach ($read1 as $value) { ?>

      						<img src="admin/uploads/<?php echo $value['images']; ?>" />
      						
      					<?php  } ?>
      					</td>
    </tr>
<?php   } ?>

  </tbody>

</table> 
	<table class="table table-striped table-hover ">
  <thead>
    <tr>
      <th>صاحب العقار</th>
      <th>الايميل </th>
      <th>التليفون</th>
    </tr>
  </thead>
  <tbody>
  <?php while ($row= $readd2->fetch_assoc()) { ?>

    <tr>
      <td> <?php echo $row['ContactName'];  ?></td>
      <td><?php echo $row['ContactEmail'];  ?></td>
      <td><?php echo $row['ContactMobile'];  ?></td>

    </tr>
<?php   } ?>

  </tbody>

</table> 
  <button type="button" class="btn btn-success"><a href="RevReal.php">العودة لصفحة العقارات</a></button>
</div>




<?php  include 'footer.php' ; ?>
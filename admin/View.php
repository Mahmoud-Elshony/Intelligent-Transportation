<?php
    require_once('header.php');
$conn = mysqli_connect("localhost","root","","property");


   $sel="select * from 	propety";
   $qry=mysqli_query($conn,$sel);



?>


</div>
<br><br><br><br>

<div class="container" style="text-align:justify; font-family: ge1 ;">
<div class="jumbotron jumbotron-fluid">
<br>
<br>
	<table class="table table-striped table-hover ">
  <thead>
    <tr>
			<th >رقم العقار </th>
				<th >اسم العقار </th>
				<th >تكلفة العقار </th>
				<th>العنوان</th>
				<th>الصلاحية</th>
				<th>مساحة العقار </th>
				<th >الخدمات المتاحة</th>
				<th >وصف العقار</th>
				<th >اسم صاحب العقار</th>
				<th >البريد الالكترونى</th>
				<th >الموبايل</th> <th >صورة العقار</th>	<th ></th>	
    </tr>
  </thead>
  <tbody>

  </form>
				<?php
					
					$query=mysqli_query($conn,"select * from `propety`");
					while($row=mysqli_fetch_array($query)){
						?>
						<tr >
						
							<td ><?php echo $row['id']; ?></td>
							<td ><?php echo $row['name']; ?></td>
							<td> <?php echo $row['monthly']; ?></td>
							<td><?php echo $row['address']; ?></td>
							<td ><?php echo $row['access']; ?></td>
							<td ><?php echo $row['floor']; ?></td>
							<td ><?php echo $row['utility']; ?></td>
	                       
								<td  ><?php echo $row['descrip']; ?></td>
								<td  ><?php echo $row['ContactName']; ?></td>
								<td ><?php echo $row['ContactEmail']; ?></td>
								<td ><?php echo $row['ContactMobile']; ?></td>	
								<td><img src="uploads/<?php echo $row['images'];?>" width="60" height="60"/></td>								
									<td ><button type="button" class="btn btn-success"><a href="edit2.php?id=<?php echo $row['id']; ?>">تعديل البيانات</a></button><br><br>
							<button type="button" class="btn btn-danger"><a href="delete2.php?id=<?php echo $row['id']; ?> " >حذف البيانات </a></button>

							</td>
						</tr>
						<?php
					}
				?>
  </tbody>






			<tbody>
			            
			</tbody>
		</table>        
				<br><br>		 
	
					 
					 
	
	</div>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
         <?php

        require_once('footer.php');
		?>


<?php
   include("header.php");

?>
 <section id="all">

        <div class="container">
            <div class="content col-xs-12 col-md-12">

<div class="jumbotron jumbotron-fluid" >
  <div class="container">

       <form action="#" method="POST" style="font-family:he1 ; font-size:18px">
	             <h3>بيانات المستخدمين   </h3>
             <table class="table table-striped"  dir="rtl">
			<thead>
				<th>اسم المستخدم</th>
				<th>الايميل</th>
				<th>كلمة السر</th>
				<th>رقم الكارت</th>	
				<th>الرصيد</th>
				
				
		
			</thead>
			<tbody>
				<?php
					
					$query=mysqli_query($con,"SELECT * FROM `customer`");
					while($row=mysqli_fetch_array($query)){
						?>
						<tr>
							<td><?php echo $row['customer_name']; ?></td>
							<td><?php echo $row['customer_email']; ?></td>
							<td><?php echo $row['password']; ?></td>
							<td><?php echo $row['customer_card_num'];?></td>
							<td><?php echo $row['balance'];?></td>
							
							
							
							<td>	
								<button type="button" class="btn btn-success"><a href="edit.php?id=<?php echo $row['customer_id']; ?>">تعديل البيانات</a></button>
							    <button type="button" class="btn btn-danger"><a href="delete.php?id=<?php echo $row['customer_id']; ?> " >حذف البيانات </a></button>

								<button type="button" class="btn btn-his" style="background-color:#bfbfbf" ><a href="payment_history.php?card_num=<?php echo $row['customer_card_num']; ?> " >payment_history</a></button>

								</td>
						</tr>
						<?php
					}
				?>
			</tbody>
		</table>
	</div>
          </div>
  
</div>

</div>

          


    

    </section>
               
         <?php

         include("footer.php");

         ?>
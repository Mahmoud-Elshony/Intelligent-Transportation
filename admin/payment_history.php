<?php
   include("header.php");
   $card_num=$_GET['card_num'];
?>
 <section id="all">

        <div class="container">
            <div class="content col-xs-12 col-md-12">

<div class="jumbotron jumbotron-fluid" >
  <div class="container">

       <form action="#" method="POST" style="font-family:he1 ; font-size:18px">
	             <h3>سجل العمليات للمسخدم   </h3>
             <table class="table table-striped"  dir="rtl">
			<thead>
				<th>id</th>
				<th>تاريخ العمليه</th>
				<th>وقت العمليه</th>
				<th>التكلفه</th>	
				<th>تفاصيل</th>
				<th>النوع</th>
				
				
		
			</thead>
			<tbody>
				<?php
					
					$query=mysqli_query($con,"SELECT * FROM `payment` WHERE `purchase_user_card`=$card_num");
					while($row=mysqli_fetch_array($query)){
						?>
						<tr>
							<td><?php echo $row['payment_id']; ?></td>
							<td><?php echo $row['payment_date']; ?></td>
							<td><?php echo $row['payment_time']; ?></td>
							<td><?php echo $row['payment_amount'];?></td>
							<td><?php echo $row['payment_type'];?></td>
							<td><?php echo $row['payment_details'];?></td>
							
							
							
							
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
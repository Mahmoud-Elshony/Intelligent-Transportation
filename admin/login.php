<?php

   require_once('header.php');

   if(isset($_POST['submit'])){
   $username=$_POST['username'];
   $password=$_POST['password'];

   $sel="SELECT * from admin where username='$username' and password = '$password'";

   $qry=mysqli_query($con,$sel);

   $row=mysqli_fetch_array($qry);

   $num=mysqli_num_rows($qry);
   if($num == 1){
   	if($row['admin'] == 1){

         $_SESSION['username'] = $username;
         $_SESSION['password'] = $password;
         $_SESSION['admin'] = $row['admin'];
   		header('Location:index.php');

   }
   if($row['admin'] != 1){
         $_SESSION['username'] = $username;
         $_SESSION['username'] = $username;

   }
}
   if($num != 1){

   	header('Location:login.php');
   }

    
}

   

?>
<br><br>    <br><br><br>    <div class="alert alert-success" role="alert" style="font-size:large;text-align:justify; font-family: ge1 ; color: #000; margin-right: 100px; margin-left: 50px; ">
<strong>تسجيل الدخول للوحة التحكم   </strong>
<br>
</div>
<div class="container" style="font-size:large;text-align:justify; font-family: ge1 ;">
<div class="jumbotron jumbotron-fluid">
<br>
            

                     <form class="customform" action="<?php $PHP_SELF; ?>" method="post">
				
					 		<div class="input-group">
							<label>اسم المدير</label><br>
							<input type="text"  style="width:550px" name="username" class="form-control " placeholder="اسم المدير" >
						</div>
					 	<div class="input-group">
							<label>ادخل كلمة السر</label><br>
							<input type="password"  style="width:550px"  name="password" class="form-control" placeholder="ادخل كلمة السر">
						</div>
             
								<div class="input-group"><br>
								<button type="submit"  class="btn btn-info"  name="submit">تسجيل الدخول</button>
							</div>
                       
                     </form>

                     

                  </div>
                  </center>

         <?php

         require_once('footer.php');

         ?>
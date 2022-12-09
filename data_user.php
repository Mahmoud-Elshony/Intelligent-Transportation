<?php 
	session_start(); 
  $conn = mysqli_connect('localhost', 'root', '', 'credit_card');
  $cus_card_num = mysqli_real_escape_string($conn, $_GET['cus_card_num']);
  $w = mysqli_query($conn, "SELECT * FROM `customer` WHERE customer_card_num=$cus_card_num") or die(mysqli_connect_error());
  $c = mysqli_num_rows($w);

	// if (!isset($_SESSION['username'])) {
	// 	$_SESSION['msg'] = "برجاء تسجيل الدخول اولا";
	// 	header('location: login.php');
	// }

	// if (isset($_GET['logout'])) {
	// 	session_destroy();
	// 	unset($_SESSION['username']);
	// 	header("location: login.php");
	// }

?>
<?php include('Header.php') ?>

    <div class="alert alert-success" role="alert" style="font-size:large;text-align:justify; font-family: ge1 ; color: #000; margin-right: 100px; margin-left: 50px; ">

<br><br>	
		





<style>
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 300px;
  margin: auto;
  text-align: center;
  font-family: arial;
  background-color:#fff3e6;
  font-family: inherit;
}

.title {
  color: grey;
  font-size: 18px;
}

button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}

a {
  text-decoration: none;
  font-size: 22px;
  color: black;
}

button:hover, a:hover {
  opacity: 0.7;
}
</style>


<h2 style="text-align:center">البيانات الشخصية</h2>

<div class="card">
  
    <?php

if($c==0)
{echo "لم يتم العثور علي المستخدم ";}
else{
      while($rows = mysqli_fetch_array($w)){
        echo '<img src=admin/userimg/'.$rows['customer_name']. '.jpg alt="John" style="width:100%">';
        echo "اسم المستخدم <br> " . $rows['customer_name'];echo" <br>  <br>";
        echo"العنوان <br> " . $rows['customer_address'];echo" <br><br>";
        echo "رقم الهاتف <br> " . $rows['customer_contact'];echo" <br><br>";
              echo"البريد الاكتروني  <br>". $rows['customer_email'];echo" <br><br>";

        
    }}
 ?>
  <p><button>Contact</button></p>
</div>



<?php include('Footer.php') ?>
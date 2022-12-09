<?php
$conn = mysqli_connect('localhost', 'root', '', 'credit_card');
$cus_card_num = mysqli_real_escape_string($conn, $_GET['cus_card_num']);
$q = mysqli_query($conn, "SELECT * FROM `card_detals` WHERE card_number=$cus_card_num") or die(mysqli_connect_error());
$w = mysqli_query($conn, "SELECT * FROM `customer` WHERE customer_card_num=$cus_card_num") or die(mysqli_connect_error());
$c = mysqli_num_rows($q);
$s = mysqli_num_rows($w);
if($c==0)
{echo "card number not found";}
else{
    while($rows = mysqli_fetch_array($w)){
        echo "اسم المستخدم = " . $rows['customer_name'];echo"<br>";
        echo"العنوان = " . $rows['customer_address'];echo"<br>";
        echo "رقم الهاتف = " . $rows['customer_contact'];echo"<br>";
        echo"id = ". $rows['customer_id'];echo"<br>";
        echo"البريد الاكتروني = ". $rows['customer_email'];echo"<br>";

        
    }
    while($row = mysqli_fetch_array($q)){echo"<br>";
        echo "رقم الكارت = ". $row['card_number'];echo"<br>";
        echo"الؤصيد = <h3> " .$row['balance'];echo"<br>";

        
    }

   
}

?>
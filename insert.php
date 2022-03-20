<?php
session_start();
require_once ("dbcon.php");


if(isset($_POST['btn'])){
     $card_ID=$_POST['ID'];
     $card_name=$_POST['name'];
     $card_program=$_POST['program'];
     $card_intake=$_POST['intake'];
     $card_date=date_format(date_create($_POST['validity']),"Y-m-d");
     $card_blood=$_POST['blood'];
     $card_barcode=substr(md5( $card_ID),0,10);
}


   $sqlQuery = "INSERT INTO `tbl_info`(`card_ID`, `card_name`, `card_program`, `card_intake`, `card_blood`, `card_barcode`, `card_date`) 
   VALUES ('$card_ID','$card_name','$card_program','$card_intake','$card_blood','$card_barcode','$card_date')";

   $result1 = mysqli_query($conn,$sqlQuery);

   $sqlQuery2 = "INSERT INTO `tbl_user`(`card_ID`, `card_password`, `card_status`) 
   VALUES ('$card_ID','".rand(1111,9999)."','0')";

   $result2 = mysqli_query($conn,$sqlQuery2);

  if($result1 &&  $result1){
		$_SESSION['msg'] = "<h4 style='color:blue'>Data Succefully Inserted</h4>";
	}else{
		$_SESSION['msg'] = "<h4 style='color:red'>Not Inserted</h4>";
	}
   
    header('location:index.php');
 ?>
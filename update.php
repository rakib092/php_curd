<?php
session_start();
require_once ("dbcon.php");


if(isset($_POST['btn'])=="update"){
     $card_ID=$_POST['ID'];
     $card_name=$_POST['name'];
     $card_program=$_POST['program'];
     $card_intake=$_POST['intake'];
     $card_date=date_format(date_create($_POST['validity']),"Y-m-d");
     $card_blood=$_POST['blood'];
     $card_barcode=substr(md5( $card_ID),0,10);

     $sql="UPDATE `tbl_info` SET `card_name`='$card_name',`card_program`='$card_program',`card_intake`='$card_intake',`card_blood`='$card_blood',`card_barcode`='$card_barcode',`card_date`='$card_date' WHERE `card_ID`='$card_ID'";
     $result = mysqli_query($conn,$sql);

     if($result){
           $_SESSION['msg'] = "<h4 style='color:blue'>Data Succefully Inserted</h4>";
       }else{
           $_SESSION['msg'] = "<h4 style='color:red'>Not Inserted</h4>";
       }
      
       header('location:show.php');
    }
<?php
require_once ("dbcon.php");

  $id= $_GET['id'];
  $sqlQuery="DELETE FROM `tbl_info` WHERE `card_ID`='$id'";
 
  mysqli_query($conn,$sqlQuery);
  header('location:show.php');

?>

<?php 
	session_start();
	require_once ("dbcon.php");
	$id=$_GET['id']; 
	$sql = "SELECT * FROM tbl_info WHERE card_ID='$id'";
	$qryUpdate = mysqli_query($conn,$sql);	
    $row=mysqli_fetch_assoc($qryUpdate);
   
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
    
 <div class="container">
  <?php
   if($_SESSION['msg']){
	    echo $_SESSION['msg'];
		echo $_SESSION['msg']="";
   }
?> 
  <div class="card">
  <div class="card-header"><h2>Basic Curd Operation</h2></div>
   <div class="card-body">
    <form action="update.php" method="post" enctype="multipart">
				<table align="center">
					<tr>
						<td> 
							<label>ID:: </label>
							<input type="text" value="<?php echo $row['card_ID'];?>" name="ID" />
						</td>
						<td>
							<label>| NAME:: </label>
							<input type="text" value="<?php echo $row['card_name'];?>" name="name" />
						</td>
					</tr>
					<tr>
						<td> 
							<label>PROGRAM:: </label>
							<input type="radio" name="program" value="CSE" <?php if($row['card_program']=="CSE") {echo "checked";}?> /> CSE | 
							<input type="radio" name="program" value="EEE" <?php if($row['card_program']=="EEE") {echo "checked";}?> /> EEE |
							<input type="radio" name="program" value="Textile" <?php if($row['card_program']=="Textile") {echo "checked";}?> /> Textile
						</td>
						<td>
							<label> | INTAKE:: </label>
							<input type="number" value="<?php echo $row['card_intake'];?>" name="intake" />
						</td>
					</tr>
					<tr>
						<td> 
							<label>BLOOD:: </label>
							<select name="blood">
								<option value="-99">Select Blood Group</option>
								<option value="A+" <?php if($row['card_blood']=="A+") {echo "selected";}?> >A+</option>
								<option value="A-" <?php if($row['card_blood']=="A-") {echo "selected";}?>>A-</option>
								<option value="B+" <?php if($row['card_blood']=="B+") {echo "selected";}?>>B+</option>
								<option value="B-" <?php if($row['card_blood']=="B-") {echo "selected";}?>>B-</option>
								<option value="AB+" <?php if($row['card_blood']=="AB+") {echo "selected";}?>>AB+</option>
								<option value="AB-" <?php if($row['card_blood']=="AB-") {echo "selected";}?>>AB-</option>
							</select>
						</td>
						<td>
							<label>| VALIDITY: </label>
							<input type="date" value="<?php echo $row['card_date'];?>" name="validity" />
						</td>
					</tr>
					<tr>
						<th colspan="2"><input type="submit" name="btn" value="update" /></th>
					</tr>
				</table>
			</form>
    </div>
  </div>
</div>

</body>
</html>
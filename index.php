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
  session_start();
   if($_SESSION['msg']){
	    echo $_SESSION['msg'];
		echo $_SESSION['msg']="";
   }
?>
  <div class="card">
  <div class="card-header"><h2>Basic Curd Operation</h2></div>
   <div class="card-body">
    <form action="insert.php" method="post" enctype="multipart">
				<table align="center">
					<tr>
						<td> 
							<label>ID:: </label>
							<input type="text" name="ID" />
						</td>
						<td>
							<label>| NAME:: </label>
							<input type="text" name="name" />
						</td>
					</tr>
					<tr>
						<td> 
							<label>PROGRAM:: </label>
							<input type="radio" name="program" value="CSE" /> CSE | 
							<input type="radio" name="program" value="EEE" /> EEE |
							<input type="radio" name="program" value="Textile" /> Textile
						</td>
						<td>
							<label> | INTAKE:: </label>
							<input type="number" name="intake" />
						</td>
					</tr>
					<tr>
						<td> 
							<label>BLOOD:: </label>
							<select name="blood">
								<option value="-99">Select Blood Group</option>
								<option value="A+">A+</option>
								<option value="A-">A-</option>
								<option value="B+">B+</option>
								<option value="B-">B-</option>
								<option value="AB+">AB+</option>
								<option value="AB-">AB-</option>
							</select>
						</td>
						<td>
							<label>| VALIDITY: </label>
							<input type="date" name="validity" />
						</td>
					</tr>
					<tr>
						<th colspan="2"><input type="submit" name="btn" value="Insert" /></th>
					</tr>
				</table>
			</form>
    </div>
  </div>
</div>

</body>
</html>
<?php

require_once ("dbcon.php");

$sqlShow = "SELECT * FROM tbl_info";
$qryShow = mysqli_query($conn,$sqlShow);
$numData = mysqli_num_rows($qryShow);
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
          <table class="table table-bordered">
              <tr>
                    <th>ID</th>
					<th>NAME</th>
					<th>PROGRAM</th>
					<th>INTAKE</th>
					<th>BLOOD</th>
                    <th>Action</th>
              </tr>
               
              <?php

                  while($row=mysqli_fetch_assoc($qryShow)){
                        ?>
                      <tr>
                        <td><?php echo $row['card_ID']; ?></td>
					    <td><?php echo $row['card_name']; ?></td>
                        <td><?php echo $row['card_program']; ?></td>
					    <td><?php echo $row['card_intake']; ?></td>
                        <td><?php echo $row['card_blood']; ?></td>
                        <td>
                            <a href="delete.php?id=<?php echo $row['card_ID']; ?>">Delete</a> |
                            <a href="edit.php?id=<?php echo $row['card_ID']; ?>">Edit</a>
                        </td>
                      </tr>
                     <?php     
                  }
              ?>
          </table>
      </div>
</body>
</html>
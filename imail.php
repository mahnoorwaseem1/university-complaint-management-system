<?php
include "config.php";
?>

<?php
$sql="SELECT * FROM  `complaint` ";
$qry=mysqli_query($conn,$sql);

while ($row=mysqli_fetch_assoc($qry)) 
 {
 	$id=$row['Id'];
	$nos=$row['Students_Name'];
	$roll=$row['Students_Enrollment']; 
 }
?>
<!DOCTYPE html>
<html>
<head>
<title>admin-Details</title>
  <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<style >
	body
	{
		background:"#003d66" ;
		color: white;
	}
</style>
<body class="bg-dark">
<center><br><br><br>
	<h4> Roll No:  <?php echo  "$roll"; ?> </h4><br>
	<form action="mail.php" method="post" >
	<table>
		<tr><td>Your's Complaint No:</td> <td><input class="form-control" type="text" value="<?php echo "$id"; ?>" ></td></tr>
       <tr> <td><br>Name:</td> <td><br><input class="form-control" type="text" name="name" value="<?php echo "$nos"; ?>" ></td></tr>
		<tr><td><br><label for="email" autocomplete="off">Email-id:</label></td>
		<td><br><input class="form-control" type="text" name="email" required ></td></tr>
		<tr><td><br><label for="phno" autofill="off">Phone No:</label></td>
		<td><br><input class="form-control" type="text" name="phno" required></td></tr>
	</table><br><br>
	<input class="btn btn-success" type="submit" name="submit" value="Send">
	</form>
</center>
</body>
</html>
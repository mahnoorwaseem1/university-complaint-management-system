<?php
include "config.php";
session_start();

$depart = $_SESSION['depart'];
$role = $_SESSION['role'];

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
<style type="text/css">

#con
	{
	width: 542px;
	padding: 30px;
	border:1px solid black;
	}

</style>
<body>

<?php
$sql="SELECT * FROM complaint where Id='$_GET[id]'" ;
$qry=mysqli_query($conn,$sql);
while ($row=mysqli_fetch_assoc($qry)) 
 {
	$id=$row['Id'];
	$Stu_name=$row['Students_Name'];
  	$roll=$row['Students_Enrollment'];
	$category=$row['Category'];
	$depart=$row['Department'];
 	$date=$row['Date_of_complaint'];
	$descrip=$row['Description'];
	$file=$row['ComplaintDocx'];
  $action=$row['Action'];
 } 	
?> <br><center>
<div style="background-color:#094c72; padding:7px; color: white; width:542px "><center><h2>Admin-Action</h2></center></div>
<div id="con"> 
<form method="post" action="detail.php">
	<table class="table">				
	   <tr><th>Complaint No:</th> <td><?php echo $_GET['id']; ?></td></tr>
       <tr> <th>Name:</th> <td><?php echo "$Stu_name"; ?></td></tr>
       <tr> <th>Roll NO:</th> <td><?php echo "$roll"; ?></td></tr>
       <tr> <th>Category of complaint:</th> <td><?php echo "$category"; ?></td></tr>
       <tr> <th>Date of complaint:</th><td><?php echo "$date"; ?></td></tr>
       <tr> <th>Department:</th><td><?php echo "$depart"; ?></td></tr>
       <tr> <th>Description:</th><td><?php echo "$descrip"; ?></td></tr>
       <tr> <th>File Uploads:</th><td><?php echo "$file"; ?></td></tr>
       <tr> <th>Action</th><td><?php echo "$action"; ?></td></tr>       
	</table></form><br>	
</div>
<form action="detail.php" method="post">
	<input type="text" name="id" value="<?php echo $_GET['id'] ?>" hidden><br><br>
    <center>
	Action: &nbsp;<select name="action">
	   <option>Not Yet</option>
       <option>In-Process</option>
       <option>Closed</option></select>
	<input type="submit" name="btn" value="Update Data" ><br><br></center>
</form>
<?php

	if(isset($_POST['btn']))
	{
	$id=$_POST['id'];
	$action=$_POST['action']; 


	if($action == 'In-Process'){

	$qry="UPDATE `complaint` SET `action`='In-Process' WHERE `Id`=$id";
	$res=mysqli_query($conn,$qry); 
	header("Location:penframe.php");
	}
	elseif($action == 'Closed')
	{
	$qry="UPDATE `complaint` SET `action`='Closed' WHERE `Id`=$id";
	$resi=mysqli_query($conn,$qry); 
	header("Location:closeframe.php");
	}
	else
	{
		echo " can't Updated..!";
	}
	}
?>
</div></center>
</body>
</html>
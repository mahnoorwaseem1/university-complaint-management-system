<?php
include "config.php";
?>


<!DOCTYPE html>
<html>
<head>
  <title>Database</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />

<style>
.row{
	height:80px;
	background-color:#059BC9;
	opacity:0.8;
  }
</style>
</head>

<body> 
<div class="row">
  <div class="col-sm-4"></div>
  <div class="col-sm-6">
  <h2 class="p-3 text-center text-white">University Complaint Management System</h2>
  </div> 
</div>

  <div class="container col-12 pt-4">
  <h2> View Complaint's </h2>
  <h5>Student's Complaint Details</h5>
<table class="table table-hover table-bordered">
  <thead class="bg-info ">
<?php
echo "<tr>";
  echo "<th>Your's Complaint No</th>";
  echo "<th>Student's Name</th>";
  echo "<th>Student's Rollno</th>";
  echo "<th>Categories </th>";
  echo "<th>Department</th>";
  echo "<th>Date of complaint</th>";
  echo "<th>Description</th>";
  echo "<th>File Uploads</th>";
  echo "<th>Status</th>";
  echo "<th>Action</th>";
  echo "<tr>";
    
$sql="SELECT * FROM `complaint` where `Students_Enrollment`= '$_GET[rn]'";
$result= mysqli_query($conn,$sql);
  ?>
  </thead>
  <tbody>
  <?php

	while ($row=mysqli_fetch_assoc($result)) {
    $id=$row['Id'];
    $Stu_name=$row['Students_Name'];
    $roll=$row['Students_Enrollment'];
    $category=$row['Category'];
    $depart=$row['Department'];
    $date=$row['Date_of_complaint'];
    $descrip=$row['Description'];
    $file=$row['ComplaintDocx'];
    $action=$row['Action'];

  echo "<tr > <td>$id</td>";
  echo " <td>$Stu_name</td>";
  echo " <td>$roll</td>";
  echo " <td>$category</td>";
  echo " <td>$depart</td>";
  echo " <td>$date</td>";
  echo " <td>$descrip</td>";
  echo " <td>$file</td>";
  echo " <td>$action</td>";
  echo "<td><a href=\"complaint.php?id=".$row['Id']."\"class='fa fa-pencil btn edit bg-primary text-white'></a>
  <a href=\"delete.php?delete=".$row['Id']."\"class='fa fa-trash btn delete bg-danger text-white'></a></td></tr>";
 	}
?>
</body>
</table>
</div>
<center>
<button type="button" class="btn btn-danger"><a href="userhome.php" style="text-decoration: none; color: white;" >Close</a></center>
</body>
</html>
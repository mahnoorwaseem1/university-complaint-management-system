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
<body>
<?php
      if($role=="Admin"){
        $sql="SELECT * from complaint where action='Closed'";
        $records=mysqli_query($conn,$sql);
      }else{
        $sql="SELECT * from complaint where action='Closed' and Department='$depart'";
        $records=mysqli_query($conn,$sql);
      }

      
    ?>    
<div class="container" style="padding-left:10px"><br>
  <h2> Closed Complaint Data </h2>
  <h5>Student's Complaint Details</h5><br>           
  <table class="table table-hover table-bordered">
  <thead class="bg-info ">
      <tr>
        <th>Complaint No</th>
        <th>Student's Name</th>
        <th>Student's Rollno</th>
        <th>Categories</th>
        
        <th>Department</th>
        <th>Date Of Complaint</th>
        <th>Description</th>
        <th>Uploads</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <tr>
 <?php
  while($user=mysqli_fetch_assoc($records))
  {
    echo "<tr>";
    echo "<td>".$user['Id']."</td>";
    echo "<td>".$user['Students_Name']."</td>";
    echo "<td>".$user['Students_Enrollment']."</td>";
    echo "<td>".$user['Category']."</td>";
    echo "<td>".$user['Department']."</td>";
    echo "<td>".$user['Date_of_complaint']."</td>";
    echo "<td>".$user['Description']."</td>";
    echo "<td>".$user['ComplaintDocx']."</td>";
    echo "<td>".$user['Action']."</td>";
  // echo "<td><a href=\"detail.php?id=".$user['id']."\"class='btn btn-warning'>action</a></td>";
} echo "</tr>";
    
?>  
  </tr>  
  </tbody>

  </table>
  </div></body></html>
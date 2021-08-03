<?php
include "config.php";
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
    

      $sql="SELECT * from complain where action='Closed'";
      $records=mysqli_query($con,$sql);
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
        <th>Date Of Complaint</th>
        <th>Department</th>
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
  echo "<td>".$user['id']."</td>";
  echo "<td>".$user['name']."</td>";
  echo "<td>".$user['roll']."</td>";
  echo "<td>".$user['category']."</td>";
  echo "<td>".$user['date']."</td>";
  echo "<td>".$user['depart']."</td>";
  echo "<td>".$user['subject']."</td>";
  echo "<td>".$user['file']."</td>";
  echo "<td>".$user['action']."</td>";
  // echo "<td><a href=\"detail.php?id=".$user['id']."\"class='btn btn-warning'>action</a></td>";
} echo "</tr>";
    
?>  
  </tr>  
  </tbody>

  </table>
  </div></body></html>
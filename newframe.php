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
  <link rel="stylesheet" type="text/css" href="css/admin.css">
  <style>
.thead{
  color:white;
  background-color:##094c72; 
}
    </style>
</head>
<script type="text/javascript">
    function popwin()
    {
      window.open("detail.php", "myWindow", "width=600,height=800");
    }

</script>
<body>
<?php
     if($role=="Admin"){
      $sql="SELECT * from complaint where action='Not Yet'";
      $records=mysqli_query($conn,$sql);

     }else{

      $sql="SELECT * from complaint where action='Not Yet'  and Department='$depart' ";
      $records=mysqli_query($conn,$sql);
     }

      
      
    ?>    
<div class="container" style="padding-left:10px"><br>
  <h2> View Complaints </h2><br>
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
        
        <th colspan=2>Action</th>
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
    echo "<td><a href=\"detail.php?id=".$user['Id']."\"class='btn btn-warning'>action</a></td>";
  } echo "</tr>";
    
?> 
</tr>
  </table>
</div></div>
</body>
</html>
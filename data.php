<?php
include "config.php";
?>
<!DOCTYPE html>
<head>
<title>admin-Details</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

 
  <style>
.row{
	height:80px;
	background-color:#059BC9;
	opacity:0.8;
  }
  .top-bar{
	height:80px;
	background:#059BC9;
	opacity:0.8;
}
</style>
</head>
<script type="text/javascript">
    function popwin()
    {
      window.open("imail.php", "myWindow", "width=600,height=600");
    }
</script>
<body>


<?php
$id=$_POST['id'];
$name=$_POST['name'];
$roll=$_POST['roll'];
$category=$_POST['category'];
$depart=$_POST['depart'];
$date=$_POST['current_date'];
$subject=$_POST['subject'];
$file=$_POST['file'];
$action=$_POST['action'];
$sql="INSERT INTO `complaint` VALUES ('$name','$roll','$category','$depart','$date','$subject','$file','$action')";
$qry=mysqli_query($conn,$sql);
	if(!$qry)
	{
		echo mysqli_error($conn);
	}
	else
	{
		//echo "Sucessfully Value inserted";
  }

?>
<?php
$sql="SELECT * FROM  `complaint` ";
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
?>
<!-- <div class="top-bar">
  <h2 class="p-3 text-center text-white">University Complaint Management System</h2>
</div> -->
<div class="container pt-5">
  <h2> View Complaint's </h2>
  <h5>Student's Complaint Details</h5>
  <div class="table-responsive">          
  <table id="myTable" class="table table-hover table-bordered">
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
        <td><?php echo "$id"; ?></td>
        <td><?php echo "$name"; ?></td>
        <td><?php echo "$roll"; ?></td>
        <td><?php echo "$category"; ?></td>
        <td><?php echo "$depart"; ?></td>
        <td><?php echo "$date"; ?></td>
        <td><?php echo "$subject"; ?></td>
        <td><?php echo "$file"; ?></td>
        <td><?php echo "$action"; ?></td>
      </tr>
    </tbody>
  </table></div>
  <div class="col-sm-8" style="padding-left:35% ">
 <button  onclick="popwin()" class="btn btn-primary">Submit</button></a>
 <button type="button" class="btn btn-warning"><a href="userhome.php" style="text-decoration: none; color: white;" >Cancel</a></button>  
</div>

</body>
</html>

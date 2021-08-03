<?php
include "config.php";
?>
<?php


$result= mysqli_query($conn,"SELECT COUNT(1) FROM complaint WHERE Action = 'Not Yet'");
$row = mysqli_fetch_array($result);
$pending= $row[0];

$result1= mysqli_query($conn,"SELECT COUNT(1) FROM complaint WHERE Action = 'In-Process'");
$row1 = mysqli_fetch_array($result1);
$progress= $row1[0];

$result2= mysqli_query($conn,"SELECT COUNT(1) FROM complaint WHERE Action = 'Closed'");
$row2 = mysqli_fetch_array($result2);
$closed= $row2[0];


?>
<html>
	<head>   
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="main.css">
  <link rel="stylesheet" type="text/css" href="css/admin.css">

  <title>Complaint system</title>
<style>
  li a{
    color:white;
  }
  li a:hover{
    color:rgb(243, 9, 67);
    font-size:15px;
	
  }
  /* .para{
	color:#0B3861;
	font-size:18px;
	font-family:Verdana, Arial, Helvetica, sans-serif;
	text-decoration:none;
} */
#file1,#file2,#file3{
width:300px; 
display:inline-block;
font-size:140px;
color:white;
padding:20px;
border-bottom:1px solid black;
}
#file1:hover{
border:1px solid black;
}
#file1:hover #pen{
display:block;
}
#file2:hover{
border:1px solid black;
}
#file2:hover #pen2{
display:block;
}
#file3:hover{
border:1px solid black;
}	
#file3:hover #pen3{
display:block;
}
#file12:hover #pen{
display:block;
}
#pen,#pen2,#pen3{
display:none;
font-size:18px;
text-align:center;
border-bottom:0.5px solid black;
}
.thead{
font-size:large;
}
.top-bar{
		height:70px;
		background:#059BC9;
		opacity:0.7;
}
</style>

<script>
</script>
</head>
<body>
<div class="top-bar">
  <h2 class="p-3 text-center text-white">University Complaint Management System</h2>
</div>
    <div class="row bg-white" >
    <div class="col-sm-2 " style=" background-color:#0c3953;height:570px;">
        <div style="background-color:#094c72;padding:16px;color: white; text-align: center;font-size:18px;width:106%;">
        <b><label>Manage Complaints</label></b>
        </div>
        <ul style="font-size: 16px; margin-left:-14%;">
        <li><a href="admin/users.php">Create Users</li></a><br><br>
        <li><a href="newcomp.php">New Complaints</li></a><br><br>
        <li><a href="pencomp.php">Pending Complaints</li></a><br><br>
        <li><a href="closecomp.php">Closed Complaints</li></a><br><br>
        <li><a href="compdet.php">Complaints Details</li></a><br><br>
        <li><a href="dashboard.php">Back to home</li></a><br><br>
        <li><a href="index.php">Logout</li></a></ul><br><br>
      </div>
      <!-- <iframe src="adminframe.php" ></iframe> -->
<div class="col-sm-9">
<h2  style="color: darkcyan" class="pt-4 ml-4">Welcome to Admin Panel Dashboard<hr class="bg-dark"/></h2><br><br>
<!----------------------------------------------------------------------------------------DASHBOARD-->
<!-- <h2 class="pt-4 ml-4">Dashboard<hr class="bg-dark"/></h2><br><br> -->
<center>
<div class="bg-info" id="file1" onclick="pending()" style="cursor:pointer;">
<i class="fa fa-file-text" style=""></i>
<p class="pt-3" id="file12" style="display:block;font-size:15px;text-align:center;">Pending complaints<div id="pen"><?php echo $pending; ?></div></p>
</div>
<div  class=" ml-5"id="file2" style="background-color:#929fba;">
<i class="fa fa-file-text" style="cursor:pointer;" onclick="inpro()"></i>
<p  class="pt-3" id="file22" style="display:block;font-size:15px;text-align:center;">In progress complaints<div id="pen2"><?php echo $progress; ?></div></p>
</div>
<div  class="ml-5" id="file3"  style=" background-color:#2BBBAD;">
<i class="fa fa-file-text" style="cursor:pointer;" onclick="complcomp()"></i>
<p  class="pt-3" id="file32" style="display:block;font-size:15px;text-align:center;">Closed complaints<div id="pen3"><?php echo $closed; ?></div></p>
</div></center>


<!---------------------------------------------DASHBOARD-->
<!----------------------------------------------pending-->

</div>
</div>

<!----------------------------------------------------------------------------------------DASHBOARD-->

                <!-- /.row -->

 


<!-- <div class="para" >NED University, the complain Redressal Cell attempts to address genuine problems and complaints of students whatever be the nature of the problem. 
   Students are encouraged to use the suggestion boxes placed on different sections of the campus to express constructive suggestions and grievances.
   They may also approach the members of the cell or any of their other teachers as is comfortable to them.
   The Grievance cell or Online university complaint management system is also empowered to look into matters of harassment.Anyone with a genuine grievance
   may approach the department members in person, or in consultation with the officer in-charge Student's Grievance Cell. 
   In case the person is unwilling to appear in self, grievances may be dropped in writing at the letterbox/ suggestion box of the Grievance Cell 
   at Administrative Block. The objective of this system is to develop a responsive and accountable attitude among all the stakeholders in order to maintain a harmonious 
   educational atmosphere in the institute.</div>
    -->
</div>
</div>
	</body>
</html>
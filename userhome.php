 <?php
 include "config.php";
 session_start();
 ?>
 <!DOCTYPE html>
<html>
<head>
	<title>Profile</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	<style>
	.top-bar{
		height:70px;
		background:#059BC9;
		opacity:0.7;
}
	.col-sm-3{
		width:50%;	
		height:624px;
	}
	table
	{
		margin-left: 12px;
	}
    #service img
	{		
		width:120px;
		height:120px;
	}
	#service a {
		text-decoration:none;
	}	
	h4:hover{
		font-weight:bold;
		font-family:'helvetica';
	}
</style>
    <script type="text/javascript">
    function popwin()
    {
      window.open("status.php", "myWindow", "width=600,height=800");
    }

</script>


</head>
<body >
<div class="top-bar ">
  <h2 class="p-3 text-center text-white">University Complaint Management System</h2>
</div>
<div class="row">
<div class="col-sm-3 text-white" style="background-color:#0c3953;">
<?php
	
	
		$enroll=$_POST['enrollment'];
		$_SESSION["Enrollment"] = $enroll;
		$pass=$_POST['pass'];
	
	$qry=mysqli_query($conn,"SELECT * FROM `register` WHERE Enrollment='$enroll'AND Password='$pass'") or die("plz check the query");
	if(mysqli_num_rows($qry)!=1)
		{
		header("location:login.php?mes=<p class='crt'>.That Rollno is not be found or wrong pssword <br> Plz Login/Sign-up Here..</p>");
		}
	while ($row=mysqli_fetch_array($qry))
			{
			$username=$row[2];
			$depart=$row[3];
			$email=$row[4];
		}
?>  
<br><br><br>
<h2 align="center"> <?php echo $username?></h2><br>
<table style="font-size:16px">
<center><img class="rounded-circle" src="img/id.jpg" width="100px" height="100px"></center><br><br>

		<tr><td>Enrollment No : </td><td>&nbsp;<?php echo $enroll ?></td></tr>
		<tr><td>Department : </td><td>&nbsp;<?php echo $depart ?></td></tr>
		<tr><td>Email : </td><td>&nbsp;<?php echo $email ?></td></tr>
	</table><br><br><br>
	<div class="text-center">
        <button type="button" id="postYourAdd" onclick="postYourAdd()" class="btn btn-warning"
		 style="text-decoration: none; color: white; font-size:17px;"> Make complaint</button><br><br>

        <button type="button" class="btn btn-info">  <a href="status.php? rn=<?php echo $enroll ?>" 
		style="text-decoration: none; color: white; font-size:17px;">Complaint Status</a></button><br><br>
		
        <button type="button" class="btn btn-danger"><a href="logout.php" style="text-decoration: none; 
		color: white;font-size:17px;">Logout</a></button>
		</div></div>
		
<div class="col-sm-9">
<iframe src="homeframe.php" id="forPostyouradd" width=100% height="620px" style="margin-left:-15px;"></iframe>
</div>
<Script>
function postYourAdd () {
    //var iframe = $("#forPostyouradd");
	$('#forPostyouradd').attr('src', 'complaint.php? rn=<?php echo $enroll ?>');
    
}
</script>

</body>
</html>

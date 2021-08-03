<?php
  include("config.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>login</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="style.css">
	<style>
	
	body{
		background-image:url('img/bac.jpg');
		background-size: cover;

	}
	.top-bar{
		height:80px;
		background:#059BC9;
		opacity:0.8;
}
h1{
	font-size:40px;
	font-family:verdana;
}
	a,td{
		color:white;
	}
	a:hover{
		color:blue;
	}
.footer
{
	background:#059BC9;
	margin-top:8%;
}
.err , .err1, .crt
{
	color: red;
}

.btn{
	width:100px;
}

	</style>
</head>
<body>

<div class="top-bar">
  <h2 class="p-3 text-center text-white"> University Complaint Management System</h2>
</div>
	<br><br><br>
<center>
<?php
		if(isset($_GET["mes"]))
		echo $_GET["mes"];
	?>
<div class="row">
<div class="col-sm-4 "></div>
<div class="col-sm-4 " style=" background: rgba(0, 0, 0, 0.4);">	
<br><legend class="text-white ">User-Login</legend><hr class="bg-white">
    <form method="POST" action="userhome.php" >
	<table>
	    <tr><td>Enrollment No:</td>
		<td><input type="Text" placeholder="enter your Enrollment No" class="form-control ml-4" name="enrollment" required="required" ></td></tr>
		<tr><td><br>Password :</td>
		<td><br><input type="Password" placeholder="enter your password" name="pass" required="required" class="form-control ml-4" ></td></tr><br>
		</table><br><br>
		<input type="submit" class="btn btn-info ml-5" value="Login" name="submit" required>
       <input type="reset" class="btn btn-danger ml-3" value="Reset" ><br><br>
        <a  href="register.php"><u>New User Registration</u> </a>
	</form>
	<br>
	<?php

if(isset($_POST["submit"])) 
{
	$enroll=$_POST["enrollment"];
	// $email=$_POST["email"];
	if($enroll!="" && $pass!="")
	{
		$sql="SELECT `Enrollment`,`` FROM `register` WHERE Enrollment='$enroll' AND pass1='$pass'";
		$result=$conn->query($sql);
		//print_r($result);
		if($result->num_rows==1)
		{   session_start();
			$_SESSION["enrollment"]=$enroll;
			$_SESSION["pass"]=$pass;
			header("location:userhome.php");
			header("location:complaint.php");	
		}
		if ( in_array($_SESSION['user']['role'], ["Admin"])) {
			$_SESSION['message'] = "You are now logged in";
			// redirect to admin area
			header('location: dashboard.php');
			exit(0);
		} else {
			$_SESSION['message'] = "You are now enrolled..";
			// redirect to public area
			header('location: index.php');				
			exit(0);
		}
		}
else
{
echo "<center><p class='err'>Invalid Rollno or Password</p></center>";		
}
}
echo "<center><p >Please Enter the Correct credentials</p></center>";

?>
	</div></div>
<!-- Footer -->
<div class="footer p-2">
	<p class="text-white ">Copyright &copy; <a href="https://www.neduet.edu.pk">Department of Software Engineering</a> | University Complaint Management System 2021</p>
</div>
</center>
</body>
</html>
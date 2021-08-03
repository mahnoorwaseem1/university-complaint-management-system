<!DOCTYPE html>
<html>
<head>
	<title>Welcome Page</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<style type="text/css">

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
.card{
	background:none;
	border:none;
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
	margin-top:13%;
	color:white;
}
a:hover{
	color:blue;
}
</style>
<body>
<div class="top-bar">
  <h2 class="p-5 text-center text-white">University Complaint Management System</h2>

</div><br><br><br><br><br><br>
<center>
<div class="row">
<div class="col-sm-4"></div>
<div class="col-sm-8">
<div class="card-columns">
<div class="card" style="width:68%"><img class="card-img-top ml-5" src="img/user.png"  style="width:160px"/>
<div class="card-body">
  <a href="login.php" class="btn btn-light ml-5" style="color:#04B4AE">User Login</a></div></div>
<div class="card" style="width:30%"><img class="card-img-top ml-4" src="img/admin.png"  style="width:160px"/>
 <div class="card-body">
  <a href="admin.php" class="btn btn-light ml-5" style="color:#04B4AE">Admin Login</a></div></div>
  </div></div></div>
<!-- Footer -->
<div class="footer p-3">
	<p class="text-white ">Copyright &copy; <a href="https://www.neduet.edu.pk">Department of Software Engineering</a>
	 | University Complaint Management System 2021</p>
</div>
</center>
</body>
</html>
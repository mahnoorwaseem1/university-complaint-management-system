<!DOCTYPE html>
<html>
<head>
  <title>Admin</title>
  <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <style>
  body{
    background-image: url('img/bac.jpg');
    background-size: cover;
  }
  .card{
	background:none;
	border:none;
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
	margin-top:10%;
}

  </style>

</head>
<script language="javascript">
function pasuser(form)
 {
  if (form.id.value=="admin")
  { 
    if (form.pass.value=="admin")
    {              
      location="adminhome.php" 
    } 
    else
      {
      alert("Invalid Password")
      }
    } 
  else
    { 
     alert("Invalid UserID")
    }
  }
</script>

<body>
  <center>
  <div class="top-bar">
  <h2 class="p-3 text-center text-white">University Complaint Management System</h2>
</div><br><br><br><br>
  <!-- <div class="card" style="width:30%"><img class="card-img-top" src="img/admin.png"  style="width:140px"/></div> -->
  <div class="col-sm-4 "></div>
  <div class="col-sm-4 " style=" background: rgba(0, 0, 0, 0.4);">	<br>
  <legend class="text-white ">Admin-Login</legend><hr class="bg-white"><br>
  <form name="login"  autocomplete="off">
    <table>
      <tr><td>Admin_ID:</td>
        <td><input name="id" type="text" class="form-control ml-4" placeholder="enter your id"></td></tr>
          <tr><td><br>Password:</td>
        <td><br><input name="pass" type="password" class="form-control ml-4" placeholder="enter your password"></td></tr>
        </table><br><br>
          <input class="btn btn-success ml-4" type="button" value="Login" onClick="pasuser(this.form)" >
          <input class="btn btn-danger ml-3" type="Reset" ><br><br>
          <a  href="index.php"><u>Back to main page</u> </a>
      </form>
      <br><br>
   </div>
   <!-- Footer -->
<div class="footer p-1">
	<p class="text-white ">Copyright &copy; <a href="https://www.neduet.edu.pk">Department of Software Engineering</a> | University Complaint Management System 2021</p>
</div>
  </center> 
</body>
</html>
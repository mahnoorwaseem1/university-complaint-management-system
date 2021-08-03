<?php
  include("config.php");
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>register</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/style.css">
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

  </style>
  </head>
  <body>
  <div class="top-bar">
  <h2 class="p-3 text-center text-white">University Complaint Mangement System</h2>
</div>
  <br><br>
  <center>
  <div class="col-sm-4 "></div>
  <div class="col-sm-4 " style=" background: rgba(0, 0, 0, 0.4);">
  <br><legend class="text-white ">SIGN UP</legend><hr class="bg-white">
    <form method="POST" action="register.php">
<table>
  <tr>
    <td>Enrollment No :</td>
    <td><input type="text"  placeholder="Enter your enrollment" class="form-control ml-2" name="enrollment" required></td>
  </tr>
  <tr>
    <td><br>User Name :</td>
    <td ><br><input type="Text" placeholder="Enter your name" class="form-control ml-2" name="uname" required></td>
  </tr>
  <tr>
    <td><br>Department :</td>
    <td><br><select  class="form-control ml-2" name="depart" required>
    <option>Select your Department</option>
      <option>BE SE</option>
      
      <option>BE CS</option>
      
      <option>BE FE</option>
      
      <option>BS Mt</option>
      
    </select></td>
  </tr>
  <tr>
    <td><br>Email-ID :</td>
    <td><br><input type="email"  placeholder="Enter your email-id" class="form-control ml-2"  name="email" required></td>
  </tr>
  <tr>
    <td><br>Password :</td>
    <td><br><input type="Password"  placeholder="Enter your Password" class="form-control ml-2" name="Password" required></td>
  </tr>
<tr>
    <td><br>Confirm Password :</td>
    <td><br><input type="password"  placeholder="Confirm password" class="form-control ml-2"  name="ConfirmPassword" required></td>
  </tr>  <br></table>  <br><br>
<input type="submit" class="btn btn-success" value="Submit" name="submit" >
<input type="reset" class="btn btn-danger ml-3" value="Cancel" ><br><br>
<!-- <a  href="login.php" >Already Registered..! </a>   -->
</form>  
<br>
<?php
    if(isset($_POST["submit"]))
    {
      $enrollno=$_POST["enrollment"];
      $username=$_POST["uname"];
      $depart=$_POST["depart"];
      $email=$_POST["email"];
      $pass1=$_POST["Password"];
      $pass2=$_POST["ConfirmPassword"];

  if( $enrollno!=="" && $username!=="" && $depart!=="" && $email!=="" && $pass1!=="" && $pass2!="")
    {
      if($pass1==$pass2)
      {
        $sql="INSERT INTO `register`( `Enrollment`, `Username`,`Department`,`Email`,`Password`, `ConfirmPasword`) VALUES ('$enrollno','$username','$depart','$email','$pass1','$pass2')";
          if($conn->query($sql))
          {
          header("location:login.php?mes=<p class='crt'>You Are Registered Successfully ...Please Login Here..</p>");
          }
          else
          {
          echo"<p class='err'>Error....!Try Again Later..!</p>";
          }
      }
      else
      {
        echo"<p class='err1'> password must be same..?</p>";
      }
    } 
    }
    ?>
	</div>
</div>
<!-- Footer -->
<div class="footer p-1">
	<p class="text-white ">Copyright &copy; <a href="https://www.neduet.edu.pk">Department of Software Engineering</a> | Complaint Management System 2021</p>
</div>
</center>
</body>
</html>
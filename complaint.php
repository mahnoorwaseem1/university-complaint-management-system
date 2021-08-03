<?php
	session_start();
 
	include 'config.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>complaint</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

  <style>
    body{
      background:#f2f2f2;
    }
    .form-panel {
    background: #ffffff;
    margin-left: 50px;
    margin-right:50px;
    padding: 10px;
    box-shadow: 4px 4px 8px rgba(0,0,0,.4);
    }
    label{
      font-weight:bold;
    }
    .form-inline {
    border-bottom: 1px solid #eff2f7;
    padding-bottom: 15px;
    margin-bottom: 15px;
    } 
  </style>
</head>

<body>

  <!-- <div class="col-sm-12" style="background-color:#059BC9; opacity:0.8;"><br><br> -->
  <!-- <h2 class="p-3 text-white ml-5 text-center">University Complaint Management System</h2></div> -->
<!-- </div> -->
<br><br>
<?php
//
$sql ="SELECT * FROM `register` where Enrollment='$_GET[rn]'";
$qry= mysqli_query($conn,$sql);
while ($row = mysqli_fetch_assoc($qry))  
{
$name=$row['Username'];
$dep=$row['Department'];

};  
?>
<h1 class="ml-5"> Register Complaint</h1>        
<!--FORM ELELEMNTS -->
<div class="form-panel">
<form action="data.php" method="post" name="complaint" >
<table>
<tr><td><input type="hidden" name="id" class="form-control" placeholder="You must to Post This"></td></tr>
<tr><td><label class="ml-4">Student's Name</label></td>
<td><input type="text" name="name" placeholder="Student Name.." value="<?php echo $name; ?>"/>


</td>
<td><label class="ml-5" style="margin-left:-5%;">Student's Roll No</label> </td>
<td><input type="text" name="roll" placeholder="Student RollNO.." value="<?php echo $_GET['rn']; ?>" class="form-control" > </td></tr><br>
<tr>
<td><br><label class="ml-4">Categories</label></td>
<td><br>
<select  name="category" class="form-control" required="required">
<option value="" selected disabled>Select the category</option>
  <option>Academics</option>
  <option>Accounts</option>
  <option>Library</option>
  <option>Transport Service</option>
  <option>Classrooms</option>
  <option>Teacher</option>
  <option>Labs</option>
  <option>Canteen</option>
  <option>Others</option>
  </select></td>
<td><br><label class="ml-5">Department</label></td>
<td><br>
<input name="depart" value="<?php echo $dep ?>" class="form-control" required  ></td></tr>
<tr>
<td><br><label class="ml-4">Date of complaint</label></td>
<td><br><input type="text" id="" class="form-control" name="current_date" value="<?php echo date("Y.m.d")?>"></td></tr>
<tr>
<td><br><label class="ml-4">Description</label></td>
<td><br><textarea id="subject" name="subject" placeholder="Write about your complaint" rows="4" cols="50" class="form-control" required></textarea>
</td></tr>
<tr>
<td><br><label class="ml-4">Complaint Related Docx(if any)</label></td>
<td><br><input type="file" name="file" class="form-control" value=""></td></tr>
<tr>
<td><input type="text" name="action" value="Not Yet" hidden></td></tr>
</table><br>
<div class="col-sm-8" style="padding-left:40% ">
  <input type="submit" class="btn btn-info" value="Submit">
  <button type="button" class="btn btn-danger"><a href="logout.php" style="text-decoration: none; color: white;" > logout</a></button>
  </div><br>
</form>
</div></div></div>
</body>
</html>



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
  li a{
    color:white;
  }
  li a:hover{
    color:rgb(243, 9, 67);
    font-size:15px;
  }
  .top-bar{
		height:70px;
		background:#059BC9;
		opacity:0.7;
}
    </style>
</head>

<body>
<div class="top-bar">
  <h2 class="p-3 text-center text-white">University Complaint Management System</h2>
</div>
    <div class="row bg-white" >
    <div class="col-sm-2 " style=" background-color:#0c3953;height:615px;">
        <div style="background-color:#094c72;padding:16px;color: white; text-align: center;font-size:18px;width:106%;">
        <b><label>Manage Complaints</label></b>
       </div>
       <br>
       <ul style="font-size: 16px; margin-left:-14%;">
       <li><a href="admin/users.php">Create Users</li></a><br><br>
        <li><a href="newcomp.php">New Complaints</li></a><br><br>
        <li><a href="pencomp.php">Pending Complaints</li></a><br><br>
        <li><a href="closecomp.php">Closed Complaints</li></a><br><br>
        <li><a href="compdet.php">Complaints Details</li></a><br><br>
        <li><a href="dashboard.php">Back to home</li></a><br><br>
        <li><a href="index.php">Logout</li></a></ul><br><br>
      </div>
      <iframe src="penframe.php" style="height:615px; width:1250px; padding=10px;" ></iframe>
    </div>

</body>
</html>
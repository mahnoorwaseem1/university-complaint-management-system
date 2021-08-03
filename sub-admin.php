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
	<link href="https://fonts.googleapis.com/css?family=Averia+Serif+Libre|Noto+Serif|Tangerine" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/admin.css">
  <style>
    li a{
    color:white;
  }
  li a:hover{
    color:rgb(243, 9, 67);
    font-size:15px;
  }
  .form-control{
	  width:200%;
  }
 a {
   color:white
 }
 .col-sm-2{ 
  width:240px;
  height:100%; 
  padding:0;
  background-color:#0c3953;
  }
  .row{
    margin:0;
    padding:0;
    height:615px;
    width:100%;
	float: right;
	background-color:white;
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
        <div style="background-color:#094c72;padding:16px;color: white; text-align: center;font-size:18px;">
        <b><label>Manage Complaints</label></b>
        </div>
        <ul style="font-size: 16px; margin-left:-14%;">
        <li><a href="newcomp.php">New Complaints</li></a>
        <li><a href="pencomp.php">Pending Complaints</li></a>
        <li><a href="closecomp.php">Closed Complaints</li></a>
        <li><a href="compdet.php">Complaints Details</li></a>
        <li><a href="dashboard.php">Back to home</li></a>
        <li><a href="index.php">Logout</li></a></ul>
      </div>
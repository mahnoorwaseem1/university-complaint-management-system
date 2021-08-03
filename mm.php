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
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
	<style>
    button{
        
    }
    </style>

    <script type="text/javascript">
    function popwin()
    {
      window.open("aser.php", "myWindow", "width=600,height=800");
    }

</script>
</head>
	<body onLoad="MM_preloadImages('img/h1.jpeg','img/h2.jpg','img/h3.jpg','img/h4.jpg','img/h5.jpg','img/h6.jpg','img/h7.jpg','img/h8.jpg')" style="background-image:url(img/comp.jpg);background-size:cover">
	<div  style="background-color: #eee; height:70px;padding-top:5px">
	<center>
	  <h2>University Complaint Management System</h2></center>
</div>
<div class="col-lg-3 bg-dark text-white" >
    <br><br><br>
    <h2 align="center">'s profile</h2><br>
        <table style="font-size:16px">
            <center><img src="img/prf.jpg" width="100px" height="100px"><center><br><br><br>
            <tr><td><b>Name : </b></td><td></td></tr>
            <tr><td><b>Department : </b></td><td></td></tr>
            <tr><td><b>Email : </b></td><td></td></tr>
        </table><br><br><br>
        <div class=" text-center">
        <button type="button" class="btn btn-warning"><a href="comp.php? rn=<?php echo $roll ?>" style="text-decoration: none; color: white;" > Make Complaint</a></button><br><br>
        <button type="button" class="btn btn-info"><a   href="aser.php? rn=<?php echo $roll ?>" style="text-decoration: none; color: white; ">Complaint's Status</a></button><br><br>
        <button type="button" class="btn btn-danger"><a href="logout.php" style="text-decoration: none; color: white;">Logout</a></button><br>
        <br><br></div></div>
<div class="col-sm-4"></div>
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
		width:24%;	
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
<div id="service">
<table style="margin-top:8%; margin-left:4%;">
	<tr>
		<td><a href="academic.php"><div class="bg-info text-center" style="width:245px; height:200px;"><img src="img/academ.png"><h4 class="p-2 text-white">ACADEMICS</h4></div></a></td>
		<td><a href="account.php"> <div class=" text-center ml-3" style="width:245px; height:200px; background-color:#ffd54f ; "><img src="img/acco.png"><h4 class="p-2  text-white">ACCOUNTS</h4></div></a></td>
		<td><a href="library.php" ><div class="text-center ml-3" style="width:245px; height:200px; background-color:#2BBBAD;"><img src="img/lib1.png"><h4 class="p-2 text-white">LIBRARY</h4></div></a></td>
		<td><a href="van.php"><div class=" text-center ml-3" style="width:245px; height:200px;background-color:#ef5350;"><img src="img/vans1.png"><h4 class="p-2 text-white">VAN SERVICE</h4></div></a></td>
	</tr>
	<tr>
		<td><br><br><a href="rooms.php"> <div class=" text-center" style="width:245px; height:200px; background-color:#f06292;"><img src="img/class1.png"><h4 class=" p-3 text-center text-white">ROOMS</h4></div></a></td>
		<td><br><br><a href="teacher.php"> <div class=" text-center ml-3" style="width:245px; height:200px;background-color:#929fba;"><img src="img/teach1.png"><h4 class="p-3 text-center text-white">TEACHERS</h4></div></a></td>
		<td><br><br><a href="lab.php"><div class=" text-center ml-3" style="width:245px; height:200px; background-color:#757575;"><img src="img/lab1.png"><h4 class="p-3 text-center text-white">LABS</h4></div></a></td>
		<td><br><br><a href="canteen.php"><div class=" text-center ml-3" style="width:245px; height:200px;background-color:#26c6da;"><img src="img/can1.png"><h4 class="p-3 text-center text-white">CANTEEN</h4></div></a></td>
	</tr>
</table>	
</div>
</body>
</html>

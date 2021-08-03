<?php  include('../config.php'); ?>

<?php  include ('includes/admin_functions.php')?>

<?php 
	// Get all admin users from DB
	$admins = getAdminUsers();
	$roles = ['Admin'];				
?>



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
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
  <link rel="stylesheet" type="text/css" href="../css/admin.css">
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
<div class="row" >
<div class="col-sm-2" >
        <div style="background-color:#094c72;padding:15px;color: white; text-align: center;font-size:18px;">
        <b><label>Manage Complaints</label></b><br>
        </div><br>
        <ul style="font-size: 16px; list-style:none;">
        <li><a href="users.php">Create Users</li></a><br><br>
        <li><a href="../newcomp.php">New Complaints</li></a>
		<br><br>
        <li><a href="../pencomp.php">Pending Complaints</li></a>
		<br><br>
        <li><a href="../closecomp.php">Closed Complaints</li></a><br><br>
        <li><a href="../compdet.php">Complaints Details</li></a><br><br>
        <li><a href="../dashboard.php">Back to home</li></a><br><br>
        <li><a href="../index.php">Logout</li></a></ul><br><br>
      </div>
<div class="col-sm-4 "><br><br>
<h3>Create/Edit Admin</h1><br>
<form method="post" action="user.php" >
  <table >
	<!-- validation errors for the form -->
	
    <tr><td>
	<!-- if editing user, the id is required to identify that user -->

		<input class="form-control" type="hidden" name="admin_id" value="<?php echo $admin_id; ?>"></td></tr>

    <tr><td><input class="form-control" type="text" name="username" value="<?php echo $username; ?>" placeholder="Username"></td></tr>
	<tr><td><br><input class="form-control" type="email" name="email" value="<?php echo $email ?>" placeholder="Email"></td></tr>
	<tr><td><br><select  class="form-control" name="depart" value="<?php echo $depart ?>" required >
      <option value="" selected disabled>Select Department</option>
      <option>BE S.E</option>
      <option>BE C.S</option>
      
      <option>BE F.E</option>
	  
	  <option>BE Mt</option>
	  
    </select></td></tr>
	<tr><td><br><input class="form-control" type="password" name="password" placeholder="Password"></td></tr>
	<tr><td><br><input class="form-control" type="password" name="pass2" placeholder="Password confirmation"></td></tr>
	<tr><td><br><select class="form-control" name="role">
		<option value="" selected disabled>Assign role</option>
		<option>Sub-Admin</option>
		<?php foreach ($roles as $key => $role): ?>
			<option value="<?php echo $role; ?>"><?php echo $role; ?></option>
		<?php endforeach ?>
	</select></td></tr>
    <tr><td><br>
	<!-- if editing user, display the update button instead of create button -->
	<?php if ($isEditingUser === true): ?> 
		<button type="submit" class="btn btn-info" name="update_admin">UPDATE</button>
	<?php else: ?>
		<button type="submit" class="btn btn-info" name="create_admin">Save User-Admin</button>
	<?php endif ?></td></tr></table>
</form>
</div>
<!-- // Middle form - to create and edit -->
<div class="col-sm-5"><br><br>
<h3>Admin Data</h1><br>

<?php if (empty($admins)): ?>
<h3 class="text-danger">No admins in the database.</h3>
<?php else: ?>

<table class="table table-bordered" >
	<thead class="bg-info">
		<th>Id</th>
		<th>Username</th>
        <th>Email</th>
		<th>Department</th>
		<th>Role</th>
		<th colspan="2" class='text-center'>Action</th>
	</thead>
	<tbody>
        <?php 
            $sql="SELECT * FROM `users`";
            $qry=mysqli_query($conn,$sql);
            while ($row=mysqli_fetch_assoc($qry))  
            {
                $id= $row['id'];
                $username= $row['username'];
                $email= $row['email'];
                $department= $row['department'];
                $role= $row['role'];

                echo "<tr>";
                echo "<td> $id</td>";
                echo "<td> $username</td>";
                echo "<td> $email</td>";
                echo "<td> $department</td>";
                echo "<td> $role</td>";
                echo "<td><a class='fa fa-pencil btn edit bg-primary text-white' href='user.php?edit-admin=$id'></a></td>";
                echo "<td><a class='fa fa-trash btn delete bg-danger text-white' href='user.php?delete-admin=$id'></a></td>";
                echo "</tr>";

            }
            ?>
	</tbody>
</table></div>
<?php endif ?>
</div>
		<!-- // Display records from DB -->
	</div></div>
</body>
</html>







	<?php /*foreach ($admins as $key => $admin): ?>
		<tr>
			<td><?php echo $key + 1; ?></td>
			<td>
				<?php echo $admin['username']; ?>, &nbsp;
				<?php echo $admin['email']; ?>	
			</td>
			<td><?php echo $admin['depart']; ?></td>
			<td><?php echo $admin['role']; ?></td>
			<td>
				<a class="fa fa-pencil btn edit bg-primary text-white"
					href="users.php?edit-admin=<?php echo $admin['id'] ?>">
				</a>
			</td>
			<td>
				<a class="fa fa-trash btn delete bg-danger text-white" 
					href="users.php?delete-admin=<?php echo $admin['id'] ?>">
				</a>
			</td>
		</tr>*/?>



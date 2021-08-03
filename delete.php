<?php
include "config.php";
?>
<?php
// Admin user variables
$isEditingUser = false;
$name = "";
$roll = "";


// if user clicks the Edit admin button
if (isset($_GET['edit'])) {
	$isEditingUser = true;
	$id = $_GET['edit'];
	editDet($id);
}
// if user clicks the update admin button
if (isset($_POST['update'])) {
	updateDet($_POST);
}
// if user clicks the Delete admin button
if (isset($_GET['delete'])) {
	$id = $_GET['delete'];
	deleteDet($id);
}
/* * * * * * * * * * * * * * * * * * * * *
* - Takes admin id as parameter
* - Fetches the admin from database
* - sets admin fields on form for editing
* * * * * * * * * * * * * * * * * * * * * */
function editDet($id)
{
	global $con, $name, $isEditingUser, $roll, $category, $depart;
	$sql = "SELECT * FROM complain WHERE id=$id LIMIT 1";
	$result = mysqli_query($con, $sql);
	$comp = mysqli_fetch_assoc($result);
	// set form values ($username and $email) on the form to be updated
    $name = $comp['name'];
    $roll = $comp['roll'];
    $depart = $comp['depart'];
}

/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * 
* - Receives admin request from form and updates in database
* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */
function updateDet($request_values){
	global $con,$errors , $isEditingUser, $category,$descrip,$id, $file,$action;
	// get id of the admin to be updated
	$id = $request_values['id'];
	// set edit state to false
	$isEditingUser = false;
	$category = esc($request_values['category']);
	$descrip = esc($request_values['subject']);
	$file = esc($request_values['file']);
	$action = esc($request_values['action']);
	// register user if there are no errors in the form
	if (count($errors) == 0) {
		$query = "UPDATE complain SET category='$category', subject='$descrip', file='$file', action='$action' WHERE id=$admin_id";
		mysqli_query($con, $query);
		$_SESSION['message'] = "Data updated successfully";
		header('location: status.php');
		exit(0);
	}
}
// delete admin user 
function deleteDet($id) {
    
	$sql = "DELETE FROM complaint WHERE Id=$id";
	if (mysqli_query($conn,$sql)) {
		$_SESSION['message'] = "Data successfully deleted";
		header("location:status.php");
		exit(0);
	}
}
?>


<?php 
// Admin user variables
$admin_id = 0;
$isEditingUser = false;
$username = "";
$role = "";
$email = "";
$depart ="";
// general variables
$errors = [];

/* - - - - - - - - - - 
-  Admin users actions
- - - - - - - - - - -*/
// if user clicks the Edit admin button
if (isset($_GET['edit-admin'])) {
	$isEditingUser = true;
	$id = $_GET['edit-admin'];
	editAdmin($id);
}
// if user clicks the update admin button
if (isset($_POST['update_admin'])) {
	updateAdmin($id);
}
// if user clicks the Delete admin button
if (isset($_GET['delete-admin'])) {
	$admin_id = $_GET['delete-admin'];
	deleteAdmin($admin_id);
}
/* - - - - - - - - - - - -
-  Admin users functions
- - - - - - - - - - - - -*/
/* * * * * * * * * * * * * * * * * * * * * * *
* - Receives new admin data from form
* - Create new admin user
* - Returns all admin users with their roles 
* * * * * * * * * * * * * * * * * * * * * * */
function createAdmin($request_values){
	global $conn, $errors, $role, $username, $email;
	$username = esc($request_values['username']);
	$email = esc($request_values['email']);
	$depart = esc($request_values['depart']);
	$password = esc($request_values['password']);
	$passwordConfirmation = esc($request_values['pass2']);

	if(isset($request_values['role'])){
		$role = esc($request_values['role']);
	}
	// form validation: ensure that the form is correctly filled
	if (empty($username)) { array_push($errors, "Uhmm...We need username"); }
	if (empty($email)) { array_push($errors, "Oops.. Email is missing"); }
	if (empty($depart)) { array_push($errors, "Oops.. Department is missing"); }
	if (empty($role)) { array_push($errors, "Role is required for admin users");}
	if (empty($password)) { array_push($errors, "uh-oh you forgot the password"); }
	if ($password != $passwordConfirmation) { array_push($errors, "The two passwords do not match"); }
	// Ensure that no user is registered twice. 
	// the email and usernames should be unique
	$user_check_query = "SELECT * FROM users WHERE username='$username' 
							OR email='$email' LIMIT 1";
	$result = mysqli_query($conn, $user_check_query);
	$user = mysqli_fetch_assoc($result);
	if ($user) { // if user exists
		if ($user['username'] === $username) {
		  array_push($errors, "Username already exists");
		}
		if ($user['email'] === $email) {
		  array_push($errors, "Email already exists");
		}
	}
	// register user if there are no errors in the form
	if (count($errors) == 0) {
		$password = md5($password);//encrypt the password before saving in the database
		$query = "INSERT INTO users (username, email,depart, role, password, created_at, updated_at) 
				  VALUES('$username', '$email', '$depart','$role', '$password', now(), now())";
		mysqli_query($conn, $query);
		$_SESSION['message'] = "Admin user created successfully";
		header('location: users.php');
		exit(0);
	}
}
/* * * * * * * * * * * * * * * * * * * * *
* - Takes admin id as parameter
* - Fetches the admin from database
* - sets admin fields on form for editing
* * * * * * * * * * * * * * * * * * * * * */
function editAdmin($id)
{
	global $conn, $username, $role, $isEditingUser, $id, $email,$depart;
	$sql = "SELECT * FROM users WHERE id= '$id' ";
	$result = mysqli_query($conn, $sql);
	while ($admin = mysqli_fetch_assoc($result)){
	// set form values ($username and $email) on the form to be updated
	$username = $admin['username'];
	$email = $admin['email'];
	$depart= $admin['department'];
	$password= $admin['password'];
	// $role = $admin['role'];
}
}

/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * 
* - Receives admin request from form and updates in database
* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */
function updateAdmin($id){
	global $conn, $id, $errors, $role, $username, $isEditingUser, $admin_id, $email ,$depart;
	// set edit state to false
	$isEditingUser = false;
	$username = $_POST['username'];
	$email = $_POST['email'];
	$depart = $_POST['depart'];
	$password = $_POST['password'];
	if(isset($_POST['role'])){
		$role = $_POST['role'];
	}
	// register user if there are no errors in the form
	if (count($errors) == 0) {
		//encrypt the password (security purposes)
		$password = md5($password);

		$query = "UPDATE users SET username='$username', email='$email', department='$depart', role='$role', password='$password' WHERE id=$id";
		mysqli_query($conn, $query);

		$_SESSION['message'] = "Admin user updated successfully";
		header('location: user.php');
		exit(0);
	}
}
// delete admin user 
function deleteAdmin($id) {
	global $conn;
	$sql = "DELETE FROM users WHERE id=$id";
	if (mysqli_query($conn, $sql)) {
		$_SESSION['message'] = "User successfully deleted";
		header("location: user.php");
		exit(0);
	}
}
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * 
* - Returns all admin users and their corresponding roles
* * * * * * * * * * * * * * * * * * * * * * * * * * * * * */
function getAdminUsers(){
	global $conn, $roles;
	$sql = "SELECT * FROM users";
	$result = mysqli_query($conn, $sql) or die( mysqli_error($conn));;
	$users = mysqli_fetch_assoc($result);
	return $users;
}

// Receives a string like 'Some Sample String'
// and returns 'some-sample-string'
function makeSlug(String $string){
	$string = strtolower($string);
	$slug = preg_replace('/[^A-Za-z0-9-]+/', '-', $string);
	return $slug;
}
?>
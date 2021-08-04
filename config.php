<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ramsha";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection

if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
  }
  // Create database
// $sql = "CREATE DATABASE ramsha";
// if (mysqli_query($conn, $sql)) {
//   echo "Database created successfully";
// } else {
//   echo "Error creating database: " . mysqli_error($conn);
// }


// sql to create table for user registration
// $sql = "CREATE TABLE register (
//   Id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
//   Enrollment VARCHAR(30) NOT NULL,
//   Username VARCHAR(30) NOT NULL,
//   Department VARCHAR(30) NOT NULL,
//   Email VARCHAR(50),
//   Password VARCHAR(50),
//   ConfirmPasword VARCHAR(50)
//   )";
  
//   if ($conn->query($sql) === TRUE) {
//     echo "Table Register created successfully";
//   } else {
//     echo "Error creating table: " . $conn->error;
//   }

  //sql to create table for complaint
// $sql = "CREATE TABLE complaint (
//   Id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
//   Students_Name VARCHAR(30) NOT NULL,
//   Students_Enrollment VARCHAR(30) NOT NULL,
//   Category VARCHAR(30) NOT NULL,
//   Department VARCHAR(30) NOT NULL,
//   Date_of_complaint DATE ,
//   Description VARCHAR(30) NOT NULL,
//   ComplaintDocx VARCHAR(30) NOT NULL,
//   Action VARCHAR(30) NOT NULL
//   )";
  
//   if ($conn->query($sql) === TRUE) {
//     echo "Table Complaint created successfully";
//   } else {
//     echo "Error creating table: " . $conn->error;
//   }

// $sql = "CREATE TABLE users (
//   Id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
//   Username VARCHAR(30) NOT NULL,  
//   Email VARCHAR(50),
// Department VARCHAR(30) NOT NULL,
//   Password VARCHAR(50),
//   Role VARCHAR(50)
//   )";
  
//   if ($conn->query($sql) === TRUE) {
//     echo "Table Users created successfully";
//   } else {
//     echo "Error creating table: " . $conn->error;
//   }

 // define global constants
//  define ('ROOT_PATH', realpath(dirname(__FILE__)));
//  define('BASE_URL', 'http://localhost/Complaints-master/');

//  require_once('select_db.php');
//  $table_user = "Create Table new (
// 	RollNO INT(11) ,
// 	name VARCHAR(30) NOT NULL,
// 	depart VARCHAR(30) NOT NULL,
// 	email VARCHAR(50),
// 	pass1 VARCHAR(11),
// 	pass2 VARCHAR(11),
// 	 )";

// if(mysqli_query($conn, $table_user))
// 	 {
// 		echo"table new created successfully";
// 	 }
// else{
// 	echo"error creating table ".mysqli_error($con);
// }
// ?>

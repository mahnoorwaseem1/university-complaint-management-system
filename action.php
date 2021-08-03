<?php 
include "config.php" ;

function redirect($location){
    header("Location: $location");
}

$input = filter_input_array(INPUT_POST);

 $query = " UPDATE complaint  SET action = 'action is taken' WHERE id = ". mysqli_real_escape_string($conn ,$_GET['id']) ."";

 mysqli_query($conn, $query);
 redirect("http://localhost/complaints-master/detframe.php")



?>

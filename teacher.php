<?php
session_start();
$enroll = $_SESSION["Enrollment"];

?>
<!DOCTYPE html>
<html>
<head>
<title>Complaint </title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    
  <style>
    .jumbotron{
      background-color:#f0ad4e;
      opacity:0.9;
    }
    p{
      font-size:17px;
    }
    </style>
</head>
<body >
<div class="jumbotron text-center">
  <h1 >Teachers</h1>
 
</div>
  
<div class="container">
  <div class="col">

<h2>You can complain related to:</h2>
<p>1. Not teaching good</p>
<p>2. Coming late in class</p>
<p>3. Giving a lot of assignment</p>
<p>4.Not Sincere</p>
<p>5. Taking lot of quizzes</p>
<p></p>
      
</div>
  </div>
<br><br>
<center>
<button type="button" class="btn btn-warning"><a href="complaint.php? rn=<?php echo $enroll ?>" style="text-decoration: none; color: white; font-size:16px;" > Make Complaint</a></button></center>
</div>

</body>
</html>
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
<body>

<div class="jumbotron text-center">
  <h1>Lab Sections</h1>
</div>  
<div class="container">
  <div class="col">
  <h2>You can complain related to:</h2>
   <h4><b>Computer Lab</b></h4>
     <p>1. Issues in UG Computing Lab</p>
     <p>2. Issues in PG Computing Lab</p>
  <h4><b>Laboratory</b></h4>
      <p>1. Physics Lab</p>
      <p>2. Chemistry Lab</p>
      <p>3. Microbiology Lab</p>
      <p>4. Electronic science Lab</p>
      <p>5. Biotechnolgy Lab</p>
     
   </table>
     </div>  </div></div><br><center>
     <button type="button" class="btn btn-warning"><a href="complaint.php? rn=<?php echo $enroll ?>" style="text-decoration: none; color: white; font-size:16px;" > Make Complaint</a></button></center>
</body>
</html>
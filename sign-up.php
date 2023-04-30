<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>

<?php

include "connection.php";

if(isset($_POST['submit'])){

$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$email=$_POST['email'];
$password=md5($_POST['password']);
$gender=$_POST['gender'];



$sql= "INSERT INTO users (fname,lname,email,password,gender) VALUES ('$firstname','$lastname','$email','$password','$gender')";
$result=mysqli_query($conn,$sql);
if($result){
header('location:view.php');
}else{
echo "no record created ";
}




}else{
// echo "Complete the whole fields to continue";
// }
}


?>


  <div class="container">


<form method="POST">
 <div class="mb-3">
  <label for="firstname" class="form-label">Firstname</label>
  <input type="text" class="form-control" id="firstname" placeholder="Enter your firstname" name="firstname">
</div>
 <div class="mb-3">
  <label for="lastname" class="form-label">Lastname</label>
  <input type="text" class="form-control" id="lastname" placeholder="Enter your lastname" name="lastname">
</div>
 <div class="mb-3">
  <label for="email" class="form-label">Email</label>
  <input type="email" class="form-control" id="email" placeholder="sammy@example.com" name="email">
</div>
 <div class="mb-3">
  <label for="password" class="form-label">Password</label>
  <input type="password" class="form-control" id="password" placeholder="Enter your password" name="password">
</div>
 <div class="mb-3">
  <label for="Gender" class="form-label">Gender</label>
  <div class="form-check">
  <input class="form-check-input" type="radio" name="gender" id="male" value="male">
  <label class="form-check-label" for="male">
    Male
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="gender" id="male" value="female">
  <label class="form-check-label" for="male">
   Female
  </label>
</div>
<button type="submit" class="btn btn-primary mt-3" name="submit">Submit</button>
</div>

</form>


</div>
  
  
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>crud operation</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>
    <div class="container">
    <button class="btn btn-primary my-5"><a href="sign-up.php" class="text-light text-decoration-none
    ">Add User</a></button>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Email</th>
      <th scope="col">Password</th>
      <th scope="col">Gender</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
   <?php
include 'connection.php';
$sql="SELECT * FROM users";
$result=mysqli_query($conn,$sql);

if($result){
   
    while( $row=mysqli_fetch_assoc($result)){
        $id=$row['id'];
        $fname=$row['fname'];
        $Lname=$row['Lname'];
        $password=$row['password'];
        $gender=$row['gender'];
        $email=$row['email'];

        echo '<tr>
        <td>'.$id.'</td>
        <td>'.$fname.'</td>
        <td>'.$Lname.'</td>
        <td>'.$email.'</td>
        <td>'.$password.'</td>
        <td>'.$gender.'</td>
        <td><button class="btn btn-danger"><a href="delete.php?delete_id='.$id.' "class="text-light text-decoration-none"/>Delete</button>
         <button class="btn btn-info"><a href="update.php?update_id='.$id.'" class="text-light text-decoration-none"/>Update</button></td>
        </tr>';
    }

   
}





   ?>
  </tbody>
</table>
    </div>
   
</body>
</html>
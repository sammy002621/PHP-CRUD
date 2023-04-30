<?php

$servername='localhost';
$username='root';
$password='';
$dbname='student_db';

$conn=mysqli_connect($servername,$username,$password,$dbname);
if(!$conn){
    echo "connection failed";
}else{
    // echo "connected successfully";
}

echo "<br/> <br/>"

// if($conn->connect_error){
//     echo"Connection failed".$conn->connect_error;
// }

?>
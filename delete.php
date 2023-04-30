<?php

include 'connection.php';
if(isset($_GET['delete_id'])){
    $id=$_GET['delete_id'];
    $sql="DELETE FROM Users WHERE id =$id";
    $result=mysqli_query($conn,$sql);
    if($result){
       header('location:view.php');
    }else{
        echo "record not deleted";
    }
}
?>
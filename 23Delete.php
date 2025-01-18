<?php
include '23conn.php';

if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];

    $sql="DELETE FROM `curd` WHERE id=$id";
    $result=mysqli_query($conn,$sql);
    if($result){
        // echo "Delete successfully";
        header('location:23display.php');
    }
    else{
       die(mysqli_error($conn)); 
    }
}

?>
<?php
@include 'connect.php';

if(isset($_GET['deletedid'])){
    $id = $_GET['deletedid'];

    $delete = "DELETE FROM `crud` WHERE userID = $id";
    $result = mysqli_query($con,$delete);
    if($result){
        header("location:display.php");
    }else{
        die(mysqli_error($con));
    }
}
?>
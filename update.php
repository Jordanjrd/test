<?php
session_start();
require('conn.php');

if(isset($_POST['update_profile'])){
    $user_name=$_POST['name_user'];
    $user_num=$_POST['num'];
    $user_email=$_POST['email_user'];
    $id=$_GET['id'];

    $updateSql="UPDATE tbl_user SET 
    name='$user_name',
    phone_num='$user_num'
    WHERE ID='$id' ";

    $sql=mysqli_query($conn,$updateSql);
    $_SESSION["username"]=$user_name;
     header("location:../profile");
}



?>
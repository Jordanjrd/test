<?php
session_start();
require('conn.php');

if(isset($_POST['delete_account'])){
   $email= $_SESSION['email'];

    $updateSql="DELETE FROM tbl_user  
   
    WHERE email='$email' ";

    $sql=mysqli_query($conn,$updateSql);
 include('logout.php');
     header("location:../index");
}



?>
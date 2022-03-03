<?php
session_start();
require("conn.php");
$_SESSION['login']=false;
if (isset($_POST['Reg_user'])){
  $user_name=$_POST['name_user'];
  $user_num=$_POST['num'];
  $user_email=$_POST['email_user'];
  $pwd=$_POST['pwd'];
  $pwd=password_hash($pwd, PASSWORD_DEFAULT);

$sql="INSERT INTO tbl_user(name,phone_num,email,pwd) VALUES ('$user_name','$user_num','$user_email','$pwd');";

$query=mysqli_query($conn,$sql);
$_SESSION["username"]=$user_name;
$_SESSION['login']=true;
$_SESSION['email']=$user_email;
header("location:../index2");
}

?>



<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Register</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../style.css" >
    </head>
    <body>
<form action="../register" method="post">


<label for="user_name" value="Name">Name</label><br>
<input type="text" name="name_user" value="" id="user_name" required><br>

<label for="Phone_num" value="Name">Phone Number</label><br>
<input type="text" name="num" value="" id="Phone_num" required><br>

<label for="email_add" value="Name">Email Address</label><br>
<input type="email" name="email_user" value="" id="email_add" required><br>

<label for="pwd" value="Name">password</label><br>
<input type="password" name="pwd" value="" id="pwd" required><br>

<input type="submit" id="register_user"name="Reg_user" value="Register">
<br>
<input type="reset" id="reset"name="Reg_reset" value="Clear form">
</form>
        Already have an account? <a href="../login">Login Now</a>
        <script src="" async defer></script>
    </body>
</html>
<?php 
session_start();
require('conn.php');
$email=$_SESSION['email'];
include('header2.php');

$query="SELECT * 
FROM tbl_user
WHERE email='$email'
LIMIT 1";
$sql=mysqli_query($conn,$query);
$_SESSION['login'];
$_SESSION["username"];
$row=mysqli_fetch_array($sql);
$id=$row['ID'];




if($_SESSION['login']==false){
    header("location:../login");
}else{

?>



<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Profile</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../style.css" >
    </head>
    <body>


<form action="../update?action=edit&id=<?php echo $id; ?>" method="post">


<label for="user_name" value="Name">Name</label><br>
<input type="text" name="name_user" value="<?php echo $row['name']; ?>" id="user_name" required><br>

<label for="Phone_num" value="Name">Phone Number</label><br>
<input type="text" name="num" value="<?php echo $row['phone_num']; ?>" id="Phone_num" required><br>



<input type="submit" id="register_user"name="update_profile" value="Update Profile">
<br>
<input type="reset" id="reset"name="Reg_reset" value="Reset">
</form>
<form method="post" action="delete?action=remove&id=<?php echo $row['ID']; ?>">
 
<input type="submit" id="del_account"name="delete_account" value="Delete Account">   
</form>
<?php
        }

?>
<?php
session_start();

require("conn.php");

$_SESSION['login']=false;
if(isset($_POST['Login'])){
    $user_email=$_POST['email_user'];
    $pwd=$_POST['pwd'];
    $sql="SELECT *
    FROM tbl_user
    WHERE email='$user_email'
    ";
    $query=mysqli_query($conn,$sql);
    while($row=mysqli_fetch_array($query)){
        if(password_verify($pwd,$row['pwd'])){

            $_SESSION['login']=true;
            $_SESSION["username"]=$row['name'];
            $_SESSION['email']=$user_email;
            header("location:../index2");
        }else{
            echo "<script>alert ('Invalid data.') </script> .<br/>";
        }
    }
}

?>
<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Login</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../style.css">
    </head>
    <body>
 
    <form action="../login" method="post">

        <label for="email_add" value="Name">Email Address</label><br>
        <input type="email" name="email_user" value="" id="email_add" required><br>

        <label for="pwd" value="Name">password</label><br>
        <input type="password" name="pwd" value="" id="pwd" required><br>

        <input type="submit" id="register_user"name="Login" value="Login">
        <br>
        <input type="reset" id="reset"name="Reg_reset" value="Clear form">
    
    </form>    
        Do not have an account? <a href="../register">register now</a>
        <script src="" async defer></script>
    </body>
</html>
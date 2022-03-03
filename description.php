<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Menu Details</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../style.css">
    </head>
    <body>


<?php
try{
include('header.php');
require('conn.php');

$id=$_GET['id'];
$query="SELECT * 
FROM menu
WHERE ID=$id
";
$sql=mysqli_query($conn,$query);
$row=mysqli_fetch_array($sql);
?>

<div class="descriptionContainer">
<?php
if ($id!=$row['ID']){
    header("location:../404");
}else{
?>
        <div class="des_img_container">
         
            <img src="../img/<?php echo $row['photo'];?>" class="des_img" alt="<?php echo $row['foodName'];?>" srcset="">
        </div>

        <div class="des_detail_container">
                <h1><?php echo $row['foodName'];?></h1>
                <sub>rs </sub>  <strong><?php echo $row['price'];?></strong>
                <br>
                <p><?php echo $row['description'];?></p>
        </div>

        <div class="des_btn_container">
           <button class="back"> <a href="../menu">back to menu</a></button>
            <button class="order">order</button>         
        </div>
<?php
}

?>
</div>


<?php include('footer.php'); ?>
<?php
}
catch(Exception $e){
    header("location:../404");
}
?>
    </body>
</html>
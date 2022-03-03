<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>MauResto</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../style.css">
    </head>
    <body>
<?php 
include('header.php');
require('conn.php');
$query="SELECT * 
FROM menu
ORDER BY ID DESC
";
$sql=mysqli_query($conn,$query);

?>
 
     <div class="container">
<?php 
while(
    $row=mysqli_fetch_array($sql)
    
    )
{
?>
        <div class="bestSeller">
            <img src="../img/<?php echo $row['photo'];?>" class="img_bestSeller" alt="<?php echo $row['foodName'];?>" srcset="">
            <br>
                <p class="foodName">
                  <strong><?php echo $row['foodName'];?></strong>
                </p>
                <p class="foodPrice">
               <sub>rs </sub>  <strong><?php echo $row['price'];?></strong>
                </p>
                <a href="../description/<?php echo $row['ID'];?>">
                <button class="viewMenu" value="View Menu">View Menu</button>
                </a>
         </div>

<?php
}
?>
           <br>
           <br>
<?php include('footer.php')?>
        <script src="" async defer></script>
    </body>
</html>
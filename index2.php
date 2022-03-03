
<?php 
session_start();
include('header2.php');
require('conn.php');
$query="SELECT * 
FROM menu
WHERE category='bestseller'
ORDER BY ID DESC
LIMIT 3";
$sql=mysqli_query($conn,$query);
$_SESSION['login'];
$_SESSION["username"];
if($_SESSION['login']==false){
    header("location:login");
}else{
?>

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

        <img src="../img/banner.jpg" alt="MauResto banner" id="banner" srcset="">
        <br>
        <h3>Welcome back <?php echo $_SESSION["username"]; ?></h3>
        <h1>Best Seller</h1>
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
         



    </div>

    <a href="menu">
    <button class="btn_menu" value=" Menu">Go To Menu</button>
    </a>
<br>
<h1>about us</h1>
<P class="aboutus">
    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
</P>

<P class="aboutus">
    <P class="aboutus">
        It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).
    </P>
</P>
<?php include('footer.php')?>
        <script src="" async defer></script>
        <?php
        }
        ?>
    </body>
</html>
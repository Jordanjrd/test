<header>
   <?php
   $user=$_SESSION["username"];
   ?>
            
            <ul class="ul_nav">
                <li class="li_nav"><a href="../index2">Home</a></li>
                <li class="li_nav"><a href="../menu">Menu</a></li>
                <li class="li_nav"><a href="../order">My Order</a></li>
                <li class="li_nav"><a href="../profile/<?php echo $user; ?>">profile</a></li>
                <li class="li_nav"><a href="../logout">log out</a></li>
            </ul>

    
            </header>
            <br>
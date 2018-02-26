<?php 
//Start the session
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <!--Link to stylesheet-->
       <link rel="stylesheet" href="Ebus.css" type="text/css"/>
       <!--Page Title-->
        <title>Receipt</title>
    </head>
    <body>
    <ul>
      <li><a href="Ebus1.php"><img src="http://www.free-icons-download.net/images/shopping-cart-logo-icon-70706.png" width="100" height="100"></a></li>
     </ul>
      <br/>
      <br/>
      <!--creates the moving title on the page-->
      <marquee direction="right">Target Cloud Services</marquee>
      <br/>
      <br/>
      <!--adding a confirmation tick-->
      <center>
      <img src="http://sweetclipart.com/multisite/sweetclipart/files/check_mark_green_circle.png" width="150" height="150" align="center">
      <p>Thank you for your order!</p>
      </center>
        <!--Center all text-->
        <center>
        <!--Heading-->
        <h1>Purchase Receipt</h1>
        <!--Business details-->
        <p>Target Cloud Services<br/>
        Frankfield Industrial Estate<br/>
        Dublin 4<br/>
        Ireland</p>
        <!--heading-->
        <h2><strong>Details:</strong></h2>
        <!--Set session variables-->
        <?php
        $_SESSION["name"]= $_POST["name"];
        $_SESSION["email"]= $_POST["email"];
        ?>

        <?php
        //Echo session variables that were set on previous pages and above
        echo "Name:" . $_SESSION["name"],"<br/>";
        echo "Email:" . $_SESSION["email"] . " . ","<br/>";
        echo "Total Price: " . $_SESSION["total"] . " . ";
        ?>
        <br/>
        <br/>
        <p>Thank you for shopping at Target Cloud Services.<br/>
        If you have any queries related to your product or any future problems pleases feel free to contact our customer services team.</p>
        Freephone at 1800 345 4545 between 9pm and 5pm Monday to Saturday.<br/>
        Or email us at targetcloudserviceshelp@gmail.com</p>
        </center>
    </body>
</html>

<?php 
//Start the session
session_start();
?>
<!DOCTYPE html>
<!--closing tags-->
<html>
    <head>
        <meta charset="UTF-8">
        <!--Link to stylesheet-->
       <link rel="stylesheet" href="Ebus.css" type="text/css"/>
       <!--Page Title-->
        <title>Receipt</title>
    </head>
    <body class="body1">
        <!--navigation bar-->
        <div class="topnav">
        <a href= "../homepage.html">Home</a>
        <a href= "Ebus1.php">Products Page</a>
        <a href= "Ebus2.php">Payment Details</a>
        <a href= "terms.html">T&C's</a>
        </div>
    <ul>
        <!--printer image-->
    <li class="printer"><img src="http://www.clipartbest.com/cliparts/6ni/Xan/6niXan9cB.png" onclick="alert('Your receipt has been sent to your printer')" alt="printer image" width="100" height="100"></li>
        <!--shopping cart image-->
    <li class="cartebus3"><a href="Ebus1.php"><img src="http://www.free-icons-download.net/images/shopping-cart-logo-icon-70706.png" alt="shopping cart image" width="100" height="100"></a></li>
     </ul>
      <br/>
      <br/>
      <!--creates the moving title on the page-->
      <marquee direction="right" bgcolor="#00ace6" height="50px" style="font-size:35px">Target Cloud Services</marquee>
      <br/>
      <br/>
      <!--adding a confirmation tick-->
      <img src="http://sweetclipart.com/multisite/sweetclipart/files/check_mark_green_circle.png" alt="confirmation tick" width="150" height="150">
      <p>Thank you for your order!</p>
        <!--Heading-->
        <h1>Purchase Receipt</h1>
        <!--Business details-->
        <p>Target Cloud Services<br/>
        Frankfield Industrial Estate<br/>
        Dublin 4<br/>
        Ireland</p>
        <!--heading-->
        <h2><strong>Details:</strong></h2>
        <?php
        //Set session variables
        $_SESSION["name"]= $_POST["name"];
        $_SESSION["email"]= $_POST["email"];
        $_SESSION["address"]= $_POST["address"];
        $_SESSION["addresstwo"]= $_POST["addresstwo"];
        $_SESSION["city"]= $_POST["city"];
        $_SESSION["post"]= $_POST["post"];
        $_SESSION["country"]= $_POST["country"];
        ?>

        <?php
        //Echo session variables that were set on previous pages and above
        echo "Name:" . $_SESSION["name"],"<br/>";
        echo "Email:" . $_SESSION["email"],"<br/>";
        echo "Total Price:" . $_SESSION["total"],"<br/>";
        echo "Address:" . $_SESSION["address"],"<br/>";
        echo "Address 2:" . $_SESSION["addresstwo"],"<br/>";
        echo "City:" . $_SESSION["city"],"<br/>";
        echo "Postcode:" . $_SESSION["post"],"<br/>";
        echo "Country:" . $_SESSION["country"];
        ?>
        <br/>
        <br/>
        <br/>
        <br/>
        <br/>
        <!--navigation button-->
        <form style="display: inline" action="/homepage.html" method="get">
              <button class="home3">Home</button>
            </form>
        <!--adding a dividing line on the page-->
        <hr>
        <!--paragrpahs-->
        <p class="para1">Thank you for shopping at Target Cloud Services.<br/>
        If you have any queries related to your product or any future problems pleases feel free to contact our customer services team.</p>
        <p class="para1">Freephone at 1800 345 4545 between 9pm and 5pm Monday to Saturday.<br/>
        Or email us at targetcloudserviceshelp@gmail.com</p>
        <!--closing tags-->
    </body>
</html>
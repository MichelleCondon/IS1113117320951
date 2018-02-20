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
        <!--Center all text-->
        <center>
        <!--Heading-->
        <h4>Purchase Receipt</h4>
        
        <?php
         $_SESSION["name"]= $_POST["name"];
            $_SESSION["email"]= $_POST["email"];
        ?>
        
        <?php
        //Echo session variables that were set on previous pages
        echo "Name:" . $_SESSION["name"] . " . ";
        echo "Email:" . $_SESSION["email"] . " . ";
        echo "Total Price: " . $_SESSION["total"] . " . ";
        ?>
        </center>
    </body>
</html>

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
         <style>
body {
     background-image: url("http://eskipaper.com/images/blurred-background-1.jpg");
     background-repeat:no-repeat;
     background-size:cover;
     font-size:25px;
}
        </style>
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
        echo "Name:" . $_SESSION["name"] . " . ","<br/>";
        echo "Email:" . $_SESSION["email"] . " . ","<br/>";
        echo "Total Price: " . $_SESSION["total"] . " . ";
        ?>
        </center>
    </body>
</html>

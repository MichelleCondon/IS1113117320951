<?php 
//Start the session
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <style>
body {
     background-image: url("http://eskipaper.com/images/blurred-background-1.jpg");
     background-repeat:no-repeat;
     background-size:cover;
     font-size:25px;
}
        </style>
        <title>Receipt</title>
    </head>
    <body>
        <center>
        <h4>Receipt</h4>
        
        <?php
        //Echo session variables that were set on previous pages
        echo "Name" . $_SESSION["name"] . " . ";
        echo "Total Price " . $_SESSION["total"] . " . ";
    
        ?>
        </center>
    </body>
</html>

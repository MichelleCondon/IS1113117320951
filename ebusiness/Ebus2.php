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
         <!--Page Title-->
        <title>Payment</title>
        <link rel="stylesheet" href="Ebus.css" type="text/css"/>
         <!--jQuery-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    </head>
    
    <body>
        <center>
        <header>
            <div class ="formpage">
            <h4>Please enter your payment details</h4>
            </header>
            <br/>
            
            <form action="Ebus3.php"  METHOD="POST">
              
              <label for="user_pin">PIN:</label>
                <input type="password" id="user_pin" placeholder="Card PIN" maxlength="4">
              <br/>
              
              <label for="name">Name:</label>
              <input type="text" name="name" placeholder="Name" maxlength="20" required=''>
              
              <br/>
              <label for="email">Email:</label>
              <input type="email" name="email" placeholder="Email" required=''>
              <br/>
             
     
            
            <br/>
            <button type="submit" id="btnPurchase" disabled>Proceed with Purchase</button>
            
            </div>
                   </form>
            
            <button onClick="validateDetails()" class="determine">Validate</button>
                        
            <script type="text/javascript" src="ebus2_validator.js"></script>
           
            <?php
            //Set session variables
           
            $_SESSION["total"]= $_POST["total"];
            ?>
            
           
   
    </body>
</html>
<?php 
//Start the session
session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <!--html styling-->
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
         <script type="text/javascript" src="cost_calc.js"></script>
    </head>
    
    <body>
        <!--centers all text and images within tags-->
        <center>
        <header>
            <!--heading-->
            <h4>Please enter your payment details</h4>
            </header>
            <br/>
            <!--payment method label-->
            <label for="visa">
                  <input type="radio" id="visa" onClick="disablebtnProceed()"/>
                  <img src="http://www.travelandtourismnews.com/wp-content/uploads/2008/07/logo-visa.jpg" width="100" height="70">
                  <img src="http://cdn.blogosfere.it/virtualearn/images/mastercard.png" width="100" height="70">
                  <img src="http://1000logos.net/wp-content/uploads/2017/09/Amex-Logo.png" width="100" height="70">
              </label>
              <!--paypal option-->
              <label for="paypal">
                  <input type="radio" id="paypal" onClick="disablebtnProceed()"/>
                  <img src="https://blogs-images.forbes.com/mfonobongnsehe/files/2014/09/paypal.jpg" width="100" height="70">
              </label>
              <br/>
              
            <form action="Ebus3.php"  METHOD="POST">
                
              <label for="cardnumber">Card Number:</label>
              <input type="number" name="cardnumber" id="cardnumber" placeholder="Card Number" maxlength="16" required=''>
              <br/>
              
              <label for="cardname">Name on Card:</label>
              <input type="text" name="cardname" placeholder="Name on Card" maxlength="16" required=''>
              <br/>
              
              <label for="cvc">Security Code:</label>
              <input type="number" name="cvc" placeholder="Security Code" maxlength="3" required=''>
              <br/>
              
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
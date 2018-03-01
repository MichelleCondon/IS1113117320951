<?php 
//Start the session
session_start();
?>

<!DOCTYPE html>
<!--opening tags-->
<html>
    <head>
         <!--Page Title-->
        <title>Payment</title>
        <!--linking to stylesheet-->
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
            <!--payment method labels-->
            <!--Visa option-->
            <label for="visa" class="visalabel">
                  <input type="radio" name="payment" id="visa" onClick="disablebtnProceed()"/>
                  <img src="http://www.travelandtourismnews.com/wp-content/uploads/2008/07/logo-visa.jpg" width="100" height="70">
              </label>
            <!--Mastercard option-->
            <label for="mastercard" class="mclabel">
                  <input type="radio" name="payment" id="mastercard" onClick="disablebtnProceed()"/>
                  <img src="http://cdn.blogosfere.it/virtualearn/images/mastercard.png" width="100" height="70">
              </label>
              <!--paypal option-->
              <label for="paypal">
                  <input type="radio" name="payment" id="paypal" onClick="disablebtnProceed()"/>
                  <img src="https://blogs-images.forbes.com/mfonobongnsehe/files/2014/09/paypal.jpg" width="100" height="70">
              </label>
              <br/>
              <br/>
             <!--used to display session variables on ebus 3-->
            <form action="Ebus3.php"  METHOD="POST">
              <!--card number label-->
              <center>
              <label for="cardnumber">Card Number:</label>
              
              <input type="number" name="cardnumber" id="cardnumber" placeholder="Card Number" maxlength="16" required=''>
              <br/>
              <!--card name label-->
              <label for="cardname">Name on Card:</label>
              <input type="text" name="cardname" id="cardname" placeholder="Name on Card" maxlength="20" required=''>
              <br/>
              <!--security card label-->
              <label for="cvc">Security Code:</label>
              <input type="number" name="cvc" id="security_code" placeholder="Security Code" maxlength="3" required=''>
              <br/>
              <!--pin label-->
              <label for="user_pin">PIN:</label>
            <input type="password" id="user_pin" placeholder="Card PIN" maxlength="4" required=''>
              <br/>
              <!--name label-->
              <label for="name">Name:</label>
              <input type="text" name="name" id="name" placeholder="Name" maxlength="20" required=''>
              
              <br/>
              <!--email label-->
              <label for="email">Email:</label>
              <input type="email" name="email" id="email" placeholder="Email" required=''>
              <br/>
             </center>
             <br/>
             <input type="checkbox" name="terms" value="terms"> By continuing it means you have agreed to our <a href= "terms.html">terms and conditions</a><br>
            <!--proceed button-->
            <br/>
            <button type="submit" id="btnPurchase" class="pro" disabled>Proceed with Purchase</button>
                <!--closing form tag-->
                  </form>
            <!--calls the function validate details when clicked-->
            <button onClick="validateDetails()" class="determine">Validate</button>
                        
            <script type="text/javascript" src="ebus2_validator.js"></script>
           
            <?php
            //Set session variables
            $_SESSION["total"]= $_POST["total"];
            ?>
            <!--closing tags-->
     </body>
</html>
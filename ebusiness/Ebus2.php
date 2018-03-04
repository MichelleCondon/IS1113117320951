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
                  <input type="radio" name="payment" id="visa" checked onClick="disablebtnProceed()"/>
                  <img src="http://www.travelandtourismnews.com/wp-content/uploads/2008/07/logo-visa.jpg" width="100" height="70" required>
              </label>
            <!--Mastercard option-->
            <label for="mastercard" class="mclabel">
                  <input type="radio" name="payment" id="mastercard" checked onClick="disablebtnProceed()"/>
                  <img src="http://cdn.blogosfere.it/virtualearn/images/mastercard.png" width="100" height="70" required>
              </label>
              <!--paypal option-->
              <label for="paypal">
                  <input type="radio" name="payment" id="paypal" checked onClick="disablebtnProceed()"/>
                  <img src="https://blogs-images.forbes.com/mfonobongnsehe/files/2014/09/paypal.jpg" width="100" height="70" required>
              </label>
              <br/>
              <br/>
             <!--used to display session variables on ebus 3-->
            <form action="Ebus3.php"  METHOD="POST">
              <!--card number label-->
              <center>
              <label for="cardnumber" class="lcardnumber">Card Number:</label>
              <!--text box-->
              <input type="number" name="cardnumber" id="cardnumber" placeholder="Card Number" maxlength="16" required=''style="width:300px; height=30px font-size:22px;">
              <br/>
              <!--card name label-->
              <label for="cardname" class="lcardname">Name on Card:</label>
              <!--text box-->
              <input type="text" name="cardname" id="cardname" placeholder="Name on Card" maxlength="20" required='' style="width:300px; height=30px font-size:22px;">
              <br/>
              <!--security card label-->
              <label for="cvc" class="lcvc">Security Code:</label>
              <!--text box-->
              <input type="number" name="cvc" id="security_code" placeholder="Security Code" maxlength="3" required='' style="width:300px; height=50px font-size:40px;">
              <br/>
              <!--pin label-->
              <label for="user_pin" class="lpin">PIN:</label>
              <!--text box-->
              <input type="password" id="user_pin" placeholder="Card PIN" maxlength="4" required='' style="width:300px; height=30px font-size:22px;">
              <!--javascript function-->
              <!--code obtained from https://www.w3schools.com/jsref/jsref_isnan.asp-->
              <script>
             function myFunction() {
             var x;
            // Get the value of the input field with id="user_pin"
            x = document.getElementById("user_pin").value;
            // If x is Not a Number
            if (isNaN(x)) {
             window.alert("Incorrect Pin, please try again");
           } else {
            enablebtnPurchase();
           }
             }
            </script>
              <br/>
              <!--name label-->
              <label for="name" class="lname">Name:</label>
              <!--text  box-->
              <input type="text" name="name" id="name" placeholder="Name" maxlength="20" required='' style="width:300px; height=30px font-size:22px;">
              
              <br/>
              <!--email label-->
              <label for="email" class="lemail">Email:</label>
              <!--text box-->
              <input type="email" name="email" id="email" placeholder="Email" required='' style="width:300px; height=30px font-size:22px;">
              <br/>
              <!--heading-->
              <h4><strong>Billing address</strong></h4>
              <!--label-->
              <label for="address1" class="add1">Address Line 1:</label>
              <!--text  box-->
              <input type="text" name="address" id="address_1" placeholder="Address Line 1" required='' style="width:300px; height=30px font-size:22px;">
              <!--label-->
              <label for="address2" class="add2">Address Line 2:</label>
              <!--text  box-->
              <input type="text" name="addresstwo" id="address_2" placeholder="Address Line 2" required='' style="width:300px; height=30px font-size:22px;">
              <!--label-->
              <label for="city" class="city">City:</label>
              <!--text  box-->
              <input type="text" name="city" id="city1" placeholder="City" required='' style="width:300px; height=30px font-size:22px;">
              <!--label-->
              <label for="postcode" class="postcode">Post Code:</label>
              <!--text  box-->
              <input type="text" name="post" id="post1" placeholder="Post Code" required='' style="width:300px; height=30px font-size:22px;">
              <!--label-->
              <label for="country" class="country">Country:</label>
              <!--text  box-->
              <input type="text" name="country" id="country1" placeholder="Country" required='' style="width:300px; height=30px font-size:22px;">
              
             </center>
             <br/>
             <br/>
             <br/>
             <br/>
             <br/>
             <!--checkbox-->
             <input type="checkbox"  name="terms" value="terms" checked> By continuing it means you have agreed to our <a href= "terms.html" onclick="alert('Please note that any information already entered will not be saved when you leave this page')">terms and conditions</a><br>
             <p>*Please click validate before proceeding with purchase</p>
            <!--proceed button-->
            <button type="submit" id="btnPurchase" class="pro" disabled>Proceed with Purchase</button>
                <!--closing form tag-->
                  </form>
            <!--calls the function validate details when clicked-->
            <button onClick="validateDetails(); myFunction()" class="determine">Validate</button>
            <a href= "Ebus1.php"><button class="exit">Previous</button></a>
            <script type="text/javascript" src="ebus2_validator.js"></script>
           
            <?php
            //Set session variables
           $_SESSION["total"]= $_POST["total"];
            ?>
            <!--closing tags-->
     </body>
</html>
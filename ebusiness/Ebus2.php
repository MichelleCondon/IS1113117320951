<?php 
//Start the session
session_start();
?>

<!DOCTYPE html>
<html>
    <head>
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
              <input type="text" name="username" placeholder="Name" maxlength="20" required=''>
              
              <br/>
              <label for="email">Email:</label>
              <input type="email" name="useremail" placeholder="Email" required=''>
              <br/>
              <button onClick="validateDetails()" class="determine">Validate</button>
            </form>
            
            <br/>
            <button type="submit" id="btnPurchase" disabled>Proceed with Purchase</button>
            
            </div>
            
            <script type="text/javascript" src="ebus2_validator.js"></script>
                
            <? php
            //Set session variables
            $_SESSION["total"] - $_POST["total"]
            ?>
    </center>
    </body>
</html>
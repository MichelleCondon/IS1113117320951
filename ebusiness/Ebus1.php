<?php 
//Start the session
session_start();
?>

<!DOCTYPE html>
<html>
    <head>
      <!--Page Title-->
        <title>Products</title>
        <link rel="stylesheet" href="Ebus.css" type="text/css"/>
        <!--jQuery-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script type="text/javascript" src="cost_calc.js"></script>
        <!--Adding colour to header and adding a background image-->
    </head>
    
    <body class="body">
        <center>
        <header>
            <!--Page Heading-->
            <h4 class="heading">Select a Product</h4>
            </header>
            <br/>
            
            <form method="POST" action="Ebus2.php">
              <!--Labels for products-->
              <!--Label for Salesforce-->
              <label for="salesforce">
                <input type="radio" id="salesforce" name="product" checked onClick="disablebtnProceed()"/>
                SalesForce @ $100
              </label>
              
              <br/>
              <br/>
              <!--Cloud 9 label-->
              <label for="cloud 9">
                  <input type="radio" id="cloud 9" name="product" checked onClick="disablebtnProceed()"/>
                  Cloud 9 @ $200
              </label>
              
              <br/>
              <br/>
              <!--Amazon Web Services label-->
              <label for="aws">
                <input type="radio" id="aws" name="product" onClick="disablebtnProceed()"/>
                Amazon Web Services @ $300
              </label>
              
              <br/>
              <br/>
              <!--Gmail Label-->
              <label for="gmail">
                  <input type="radio" id="gmail" name="product" onClick="disablebtnProceed()"/>
                  Gmail @ $400
              </label>
              
              <br/>
              <br/>
              <!--Subtotal Label-->
              <label for="subtotal">
                Sub Total
                <input type="text" id="subtotal" value="0.00" readonly/>
              </label>
              
              <br/>
              <br/>
              <!--Discount Label-->
              <label for="discount">
                  Discount @ 5%:
                  <input type="text" id="discount" value=0.00 readonly/>
              </label>
              
              <br/>
              <br/>
              <!--Vat Label-->
              <label for ="vat">
                  Vat @ 10%:
                  <input type="text" id=vat value=0.00 readonly/>
              </label>
              
              <br/>
              <br/>
              <!--Total Label-->
              <label for="total">
                Total:
                <input type="text" id="total" value="0.00" name="total" readonly/>
              </label>
    
              <br/>
              <br/>
              <!--Add to shopping cart button-->
              <button type= "submit" id="btnProceed" class="cart" disabled>Add to Shopping Cart</button>
            
            </form>
            
            <br/>
            <!--Buttons to calculate and navigate-->
            <button onClick="calcSub()" class="calculate">Calculate Cost</button>
            <a href= "Ebus1.php"><button class="clear">Clear Choice</button></a>
            
            <?php
            //Set session variables
            $_SESSION["total"] - $_POST["total"]
            ?>
    </center>
    </body>
</html>
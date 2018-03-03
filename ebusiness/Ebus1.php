<?php 
//Start the session
session_start();
?>

<!DOCTYPE html>
<!--opening tags-->
<html>
    <head>
        <!--Page Title-->
        <title>Products</title>
        <!--linking to stylesheet-->
        <link rel="stylesheet" href="Ebus.css" type="text/css"/>
        <!--jQuery-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script type="text/javascript" src="cost_calc.js"></script>
    </head>
    
    <body>
      <!--navigation bar links-->
    <div class="topnav">
        <a href= "../homepage.html">Home</a>
        <a href= "../Cloud Services Vendor/cloudservice.html">Product Info</a>
    </div>
      <!--centers all elements within the tags-->
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
                <!--radio button-->
                <input type="radio" id="salesforce" name="product" checked onClick="disablebtnProceed()"/>
                SalesForce @ $100
              </label>
              
              <br/>
              <br/>
              <!--Cloud 9 label-->
              <label for="cloud 9">
                <!--radio button-->
                <input type="radio" id="cloud 9" name="product" checked onClick="disablebtnProceed()"/>
                  Cloud 9 @ $200
              </label>
              
              <br/>
              <br/>
              <!--Amazon Web Services label-->
              <label for="aws">
                <!--radio button-->
                <input type="radio" id="aws" name="product" onClick="disablebtnProceed()"/>
                Amazon Web Services @ $300
              </label>
              
              <br/>
              <br/>
              <!--Gmail Label-->
              <label for="gmail">
                <!--radio button-->
                <input type="radio" id="gmail" name="product" onClick="disablebtnProceed()"/>
                  Gmail @ $400
              </label>
              
              <br/>
              <br/>
              <!--Subtotal Label-->
              <label for="subtotal">
                Sub Total
                <!--text box-->
                <input type="text" id="subtotal" value="0.00" readonly/>
              </label>
              
              <br/>
              <br/>
              <!--Discount Label-->
              <label for="discount">
                  Discount @ 5%:
                  <!--text box-->
                  <input type="text" id="discount" value=0.00 readonly/>
              </label>
              
              <br/>
              <br/>
              <!--Vat Label-->
              <label for ="vat">
                  Vat @ 10%:
                  <!--text box-->
                  <input type="text" id=vat value=0.00 readonly/>
              </label>
              
              <br/>
              <br/>
              <!--Total Label-->
              <label for="total">
                Total:
                <!--text box-->
                <input type="text" id="total" value="0.00" name="total" readonly/>
              </label>
              <p>*Please click calculate cost then add to cart</p>
              <!--Add to shopping cart button-->
              <button type= "submit" id="btnProceed" class="cart" disabled>Add to Shopping Cart</button>
            
            </form>
            
            <!--Buttons to calculate and navigate-->
            <!--calls the function calcSub()-->
            <button onClick="calcSub()" class="calculate">Calculate Cost</button>
            <a href= "Ebus1.php"><button class="clear">Clear Choice</button></a>
            </center>
            <!--Navigational button-->
            <a href= "/homepage.html"><button class="exit">Exit</button></a>
          <?php
            //Set session variables
            $_SESSION["total"] - $_POST["total"]
            ?>
            <!--closing tags-->
    </body>
</html>
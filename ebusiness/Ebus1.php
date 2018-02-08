<!DOCTYPE html>
<html>
    <head>
        <title>Select Product</title>
        
        <!--jQuery-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script type="text/javascript" src="cost_calc.js"></script>
        <!--Adding colour to header and adding a background image-->
        <style>
          .heading{
        font-family: Arial;
        text-align: center;
        Padding:10px;
        background-color:#00ace6;
        color:White;
          }
          .body {
      background-image: url("http://eskipaper.com/images/blurred-background-1.jpg");
      background-repeat:no-repeat;
      background-size:cover;
      font-size:25px;
          }
        </style>

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
              <label for="salesforce">
                <input type="radio" id="salesforce" name="product" checked onClick="disablebtnProceed()"/>
                SalesForce @ $100
              </label>
              
              <br/>
              <br/>
              
              <label for="cloud 9">
                  <input type="radio" id="cloud 9" name="product" checked onClick="disablebtnProceed()"/>
                  Cloud 9 @ $200
              </label>
              
              <br/>
              <br/>
              
              <label for="aws">
                <input type="radio" id="aws" name="product" onClick="disablebtnProceed()"/>
                Amazon Web Services @ $300
              </label>
              
              <br/>
              <br/>
              
              <label for="gmail">
                  <input type="radio" id="gmail" name="product" onClick="disablebtnProceed()"/>
                  Gmail @ $400
              </label>
              
              <br/>
              <br/>
              
              <label for="subtotal">
                Sub Total
                <input type="text" id="subtotal" value="0.00" readonly/>
              </label>
              
              <br/>
              <br/>
              
              <label for="discount">
                  Discount @ 5%
                  <input type="text" id="discount" value=0.00 readonly/>
              </label>
              
              <br/>
              <br/>
              
              <label for ="vat">
                  Vat @ 10%
                  <input type="text" id=vat value=0.00 readonly/>
              </label>
              
              <br/>
              <br/>
              
              <label for="total">
                Total
                <input type="text" id="total" value="0.00" readonly/>
              </label>
    
              <br/>
              <br/>
              
              <button type="submit" id="btnProceed" disabled>Add to Shopping Cart</button>
            
            </form>
            
            <br/>
            <!--Buttons to calculate and navigate-->
            <button onClick="calcSub()">Calculate Cost</button>
            <a href="Ebus1.php"><button class ="button">Clear Choice</button></a>
    </center>
    </body>
</html>
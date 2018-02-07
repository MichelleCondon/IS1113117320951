<!DOCTYPE html>
<html>  
    <head>  
        <title>Select Product</title>
        
        <!--JQuery-->
        <script src="https://ajax.googleleapis/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="text/javascript" src="cost_calc.js"></script>
    
    <style>
header{
    background-color:#00ace6;
    color:white;
}
</style>
    </head>
    
    
    <body>
    <center>
        <header>
        <h1>Select a Product</h1>
        </header>
        <br/>
        
        <form method="POST" action="Ebus2.php">
            
           <label for="Salesforce">
               <input type="radio" id="salesforce" name="product" checked onClick="disablebtnProceed()"/>
               SalesForce @ $100
           </label>
            
            <br/>
            
            <label for="aws">
               <input type="radio" id="aws" name="product"  checked onClick="disablebtnProceed()"/>
                Amazon Web Services @ $300
           </label>
           
           <br/>
           <label for="cloud9">
               <input type="radio" id="cloud9" name="product"  checked onClick="disablebtnProceed()"/>
                Cloud 9 @ $200
           </label>
           
           <br/>
           <label for="Gmail">
               <input type="radio" id="Gmail" name="product"  checked onClick="disablebtnProceed()"/>
                Gmail @ $400
           </label>
           <br/>
           <br/>
           
           
            <label for="subtotal">
                Sub total
               <input type="text" id="subtotal" value="0.00" readonly/>
           </label>
           
           <br/>
           
            
            <label for="total">
                Total
               <input type="text" id="total" value="0.00" readonly/>
           </label>
           
           <br/>
           
           <button type="submit" id="btnProceed" disabled>Add to Shopping Cart</button>
           
           </form>
           
           <br/>
           <button onClick="calcSub()">Calculate Cost</button>
           <a role="button" href="Ebus1.php">Clear Choice</a>
        </center>
    </body>
</html>
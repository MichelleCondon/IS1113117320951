<!DOCTYPE html>
<html>
    <head>
        <!--Page title-->
        <title>Enter Details</title>
        
        <!--jQuery-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    </head>
    
    <body>
    <center>
        <header>
            <h4>Please enter your payment details</h4>
            </header>
            <br/>
            
            <form action="Ebus3.php"  method="POST">
              
              <label for="name">Name:</label>
                <input type="text" id="name" placeholder="Name" maxlength="30">
               <button type="submit" id="btnPurchase" disabled>Proceed with Purchase</button>
              
            </form>
            <form action="Ebus3.php"  method="POST">
              
              <label for="user_pin">PIN</label>
                <input type="password" id="user_pin" placeholder="Card PIN" maxlength="4">
               <button type="submit" id="btnPurchase" disabled>Proceed with Purchase</button>
              
            </form>
            <form action="Ebus3.php"  method="POST">
              
              <label for="email">Email</label>
                <input type="text" id="email" placeholder="Email" maxlength="50">
               <button type="submit" id="btnPurchase" disabled>Proceed with Purchase</button>
              
            </form>
            
            <br/>
            <button onClick="validateDetails"Validate</button>
            
            
            
            <script type="text/javascript" src="ebus2_validator.js"></script>
                
    </center>
    </body>
</html>
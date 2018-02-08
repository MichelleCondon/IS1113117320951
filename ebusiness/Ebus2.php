<!DOCTYPE html>
<html>
    <head>
        <title>Enter Details</title>
        
        <!--jQuery-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <style>
            header{
                color:white;
                background:#00ace6;
            }
        </style>
    </head>
    
    <body>
        <center>
        <header>
            <h4>Please enter your payment details</h4>
            </header>
            <br/>
            
            <form action="Ebus3.php"  method="POST">
              
              <label for="user_pin">PIN</label>
                <input type="password" id="user_pin" placeholder="Card PIN" maxlength="4">
               <button type="submit" id="btnPurchase" disabled>Proceed with Purchase</button>
              
            </form>
            
            <br/>
            <button onClick="validateDetails()">Validate</button>
            
            
            
            <script type="text/javascript" src="ebus2_validator.js"></script>
                
    </center>
    </body>
</html>
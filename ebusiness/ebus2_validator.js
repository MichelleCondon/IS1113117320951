/*global $ */

function validateDetails(){
    //declaring variables
    var pin;
    var cardnumber;
    var cardname;
    var cvc;
    //if the pin is empty an alert pops up
    pin = document.getElementById("user_pin").value;
     if (pin == "") {
        alert("Please enter your PIN");
    }
    //if the pin is smaller than 4 digits an alert pops up
    else if (String(pin).length < 4){
        alert("Incorrect pin, please try again");
    }
     //if the pin is larger than 4 digits an alert pops up
    else if (String(pin).length > 4){
        alert("Incorrect pin, please try again");
    }
    //if the card number is empty an alert pops up
    cardnumber = document.getElementById("cardnumber").value;
     if (cardnumber == "") {
        alert("Please enter your card details");
    }
    //if the pin is smaller than 16 digits an alert pops up
    else if (String(cardnumber).length < 16){
        alert("Invalid Card Number, please try again");
    }
    //if the pin is larger than 16 digits an alert pops up
     else if (String(cardnumber).length > 16){
        alert("Invalid Card Number, please try again");
    }
    //if the card name is empty an alert pops up
     cardname = document.getElementById("cardname").value;
     if (cardname == "") {
        alert("Please enter your card details");
    }
    //if the pin is larger than 20 digits an alert pops up
    else if (String(cardname).length > 20){
        alert("Please make sure your name is correct");
    }
    //if the security code is empty an alert pops up
     cvc = document.getElementById("security_code").value;
     if (cvc == "") {
        alert("Please enter your security code");
    }
    //if the pin is smaller than 3 digits an alert pops up
    else if (String(cvc).length < 3){
        alert("Please make sure your PIN is accurate");
    }
    //if the pin is larger than 3 digits an alert pops up
    else if (String(cvc).length > 3){
        alert("Please make sure your PIN is accurate");
    }
    else {
        enablebtnPurchase();
    }//end function

function enablebtnPurchase(){
     $('#btnPurchase').prop('disabled', false);
} //end function
function disablebtnPurchase() {
    $('#btnPurchase').prop('disabled', true);
}//end function
}//end function
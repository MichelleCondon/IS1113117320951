/*global $ */

function validateDetails(){
    var pin;
    var cardnumber;
    var cardname;
    var cvc;
    pin = document.getElementById("user_pin").value;
     if (pin == "") {
        alert("Please enter your PIN, name and email");
    }
    else if (String(pin).length < 4){
        alert("Please make sure your PIN is accurate");
    }
    cardnumber = document.getElementById("cardnumber").value;
     if (cardnumber == "") {
        alert("Please enter your card details");
    }
    else if (String(cardnumber).length < 16){
        alert("Invalid Card Number, please try again");
    }
     cardname = document.getElementById("cardname").value;
     if (cardname == "") {
        alert("Please enter your card details");
    }
    else if (String(cardname).length > 20){
        alert("Please make sure your name is correct");
    }
     cvc = document.getElementById("security_code").value;
     if (cvc == "") {
        alert("Please enter your card details");
    }
    else if (String(cvc).length < 3){
        alert("Please make sure your PIN is accurate");
    }
    else {
        enablebtnPurchase();
    }
function enablebtnPurchase(){
     $('#btnPurchase').prop('disabled', false);
}
function disablebtnPurchase() {
    $('#btnPurchase').prop('disabled', true);
}
}
/*global $ */

function validateDetails(){
    var pin;
    var cardnumber;
    pin = document.getElementById("user_pin").value;
     if (pin == "") {
        alert("Please enter your PIN, name and email");
    }
    else if (String(pin).length < 4){
        alert("Please make sure your PIN is accurate");
    }
    cardnumber = document.getElementById("cardnumber").value;
     if (cardnumber == "") {
        alert("Please enter your Card Number");
    }
    else if (String(cardnumber).length < 16){
        alert("Invalid Card Number, please try again");
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
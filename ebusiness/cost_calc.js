/* global $ */
//We must calculate VAT and discount ourself

function calcSub()
{
    var argSubTotal; //Creates Variable
    
    if (document.getElementById('Salesforce').checked)
    {
        argSubTotal = 100; //If salesforce is checked the variable = 100
    }
    else {
        argSubTotal = 300; //Other option has a value of 300
    }
    display(argSubTotal); //Passing variable in the display function
}
function display(parm1) //parm1 equals value of argSubTotal
{
    
    document.getElementById("subtotal").value = parm1;
    document.getElementById("total").value = parm1;
    
    enablebtnProceed();
}

function enablebtnProceed()
{
    $('#btnProceed').prop('disabled', false);//find btnProceed go into properties and enable btn
}

function disablebtnProceed()
{
    $('#btnProceed').prop('disabled', true);
}
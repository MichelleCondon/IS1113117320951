/* global $ */

function calcSub()// Creating a function to calculate
{
    var argSubTotal
    
    if(document.getElementById('salesforce').checked)
    {
        argSubTotal = 100;
    } else if(document.getElementById('cloud 9').checked)
    {
        argSubTotal = 200; //If cloud 9 is checked the variable = 200
      
    } else if(document.getElementById('aws').checked)
    {
        argSubTotal = 300;//If amazon web services is checked the variable = 300
    } else {
        argSubTotal = 400; //Gmail has a value of 400
    }
    calcDisVatTotal(argSubTotal);
    //Passing variable in the display function
}
function calcDisVatTotal(parmSubTotal){
    var argSubTotal;
    var argDiscount;
    var argVat;
    var argTotal;//Creates Variable

    argDiscount = argSubTotal * 0.05;
        argVat = (argSubTotal - argDiscount) * 0.10;
        argTotal = (argSubTotal - argDiscount) + argVat;
        display(argSubTotal,argDiscount,argVat,argTotal);
}
function display(parm1,parm2,parm3,parm4) //parm1 equals value of argSubTotal
{
    
    document.getElementById("subtotal").value = parm1;
    document.getElementById("discount").value = parm2;
    document.getElementById("vat").value = parm3;
    document.getElementById("total").value = parm4;
    
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
   
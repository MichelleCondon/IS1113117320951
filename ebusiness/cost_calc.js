/* global $ */

function calcSub()// Creating a function to calculate
{
    var argSubTotal;
    var argDiscount;
    var argVat;
    var argTotal;
    
    if(document.getElementById('salesforce').checked)
    {
        argSubTotal = 100;
        argDiscount = argSubTotal * 0.05;
        argVat = (argSubTotal - argDiscount) * 0.10;
        argTotal = (argSubTotal - argDiscount) + argVat;
        display(argSubTotal,argDiscount,argVat,argTotal);
    } else if(document.getElementById('cloud 9').checked)
    {
        argSubTotal = 200;//If cloud 9 is checked the variable = 200
        argDiscount = argSubTotal * 0.05;
        argVat = (argSubTotal - argDiscount) * 0.10;
        argTotal = (argSubTotal - argDiscount) + argVat;
        display(argSubTotal,argDiscount,argVat,argTotal);
      
    } else if(document.getElementById('aws').checked)
    {
        argSubTotal = 300;//If amazon web services is checked the variable = 300
        argDiscount = argSubTotal * 0.05;
        argVat = (argSubTotal - argDiscount) * 0.10;
        argTotal = (argSubTotal - argDiscount) + argVat;
        display(argSubTotal,argDiscount,argVat,argTotal);
    } else {
        argSubTotal = 400; //Gmail has a value of 400
        argDiscount = argSubTotal * 0.05;
        argVat = (argSubTotal - argDiscount) * 0.10;
        argTotal = (argSubTotal - argDiscount) + argVat;
        display(argSubTotal,argDiscount,argVat,argTotal);
    }
    display(argSubTotal);
    show(argDiscount);
    clear(argVat);
    determine(argTotal);
    //Passing variable in the display function
}
function display(parm1) //parm1 equals value of argSubTotal
{
    
    document.getElementById("subtotal").value = parm1;
    
    enablebtnProceed();
}
function show(parm2) //parm1 equals value of argSubTotal
{
    
    document.getElementById("discount").value = parm2;
    
    enablebtnProceed();
}
function clear(parm3) //parm1 equals value of argSubTotal
{
    
    document.getElementById("vat").value = parm3;
    
    enablebtnProceed();
}
function determine(parm4) //parm1 equals value of argSubTotal
{
    
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
   
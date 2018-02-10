/* global $ */

function calcSub(argSubTotal)// Creating a function to calculate
{
    var argSubTotal;
    var argDiscount;
    var argVat;
    var argTotal;
    var discountAmt;
    var vatAmt;
    var totalprice;
    
    if(document.getElementById('salesforce').checked)
    {
        argSubTotal = 100;
        
    } else if(document.getElementById('cloud 9').checked)
    {
        argSubTotal = 200;//If cloud 9 is checked the variable = 200
        
      
    } else if(document.getElementById('aws').checked)
    {
        argSubTotal = 300;//If amazon web services is checked the variable = 300
        
    } else {
        argSubTotal = 400; //Gmail has a value of 400
        
    }
  calcDisVatTotal(argSubTotal)
}
function calcDisVatTotal(parmSubTotal){
    var discountAmt;
    var vatAmt;
    var totalprice;
    var argSubTotal;
     if(document.getElementById('salesforce').checked)
    {
        discountAmt = argSubTotal * 0.05;
        vatAmt = (argSubTotal - discountAmt) * 0.10;
        totalprice = (argSubTotal - discountAmt) + vatAmt;
    } else if(document.getElementById('cloud 9').checked)
    {
        discountAmt = argSubTotal * 0.05;
        vatAmt = (argSubTotal - discountAmt) * 0.10;
        totalprice = (argSubTotal - discountAmt) + vatAmt;
    } else if(document.getElementById('aws').checked)
    {
        discountAmt = argSubTotal * 0.05;
        vatAmt = (argSubTotal - discountAmt) * 0.10;
        totalprice = (argSubTotal - discountAmt) + vatAmt;
    } else {
        discountAmt = argSubTotal * 0.05;
        vatAmt = (argSubTotal - discountAmt) * 0.10;
        totalprice = (argSubTotal - discountAmt) + vatAmt;
        display(subTotal,discountAmt,vatAmt,totalprice)
}
function display(parm1,parm2,parm3,parm4) //parm1 equals value of argSubTotal
{
    
    document.getElementById("subtotal").value = parm1;
    document.getElementById("discountAmt").value = parm2;
    document.getElementById("vatAmt").value = parm3;
    document.getElementById("totalprice").value = parm4;
    
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
   
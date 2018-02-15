/* global $ */
function calcSub(argSubTotal)// Creating a function to calculate
{
    var argSubtotal;
    var argDiscount;
    var argVat;
    var argTotal;
    
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
     if(document.getElementById('salesforce').checked)
    {
        argDiscount = argSubTotal * 0.05;
       
        argVat = (argSubTotal - argDiscount) * 0.10;
       
        argTotal = (argSubTotal - argDiscount) + argVat;
        
        
    } else if(document.getElementById('cloud 9').checked)
    {
        argDiscount = argSubTotal * 0.05;
        argVat = (argSubTotal - argDiscount) * 0.10;
        argTotal = (argSubTotal - argDiscount) + argVat;
        
    } else if(document.getElementById('aws').checked)
    {
        argDiscount = argSubTotal * 0.05;
        argVat = (argSubTotal - argDiscount) * 0.10;
        argTotal = (argSubTotal - argDiscount) + argVat;
    } else {
        argDiscount = argSubTotal * 0.05;
        argVat = (argSubTotal - argDiscount) * 0.10;
        argTotal = (argSubTotal - argDiscount) + argVat;
        
        display(argSubTotal);
        show(argDiscount);
        see(argVat);
        have(argTotal);
}
function display(parm1) //parm1 equals value of argSubTotal
{
    
    document.getElementById("subtotal").value = parm1;
    
    enablebtnProceed();
}
function show(parm2)
{
    document.getElementById("discount").value = parm2;
     enablebtnProceed();
}
function see(parm3)
{
    document.getElementById("vat").value = parm3;
     enablebtnProceed();
}
function have(parm4)
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
   
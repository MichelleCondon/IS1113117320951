/* global $ */

function calcSub()// Creating a function to calculate
  {
    var argSubTotal; //Creates Variable
      
        if(document.getElementById('salesforce').checked){
       argSubTotal = 100; //If salesforce is checked then the subtotal is 100
 }
        else if(document.getElementById('cloud 9').checked){
        argSubTotal = 200; //If cloud 9 is checked then the subtotal is 200
 }
        else if(document.getElementById('aws').checked){
        argSubTotal= 300; //If amazon web services is checked then the subtotal is 300
 }
        else{
        argSubTotal=400; //anything else means the subtotal is 400
 }
    calcDisVatTotal(argSubTotal);//calling function and passing the sub total as an argument
}//end function
function calcDisVatTotal(parmSubTotal){ // parmSubTotal receives the sub total
    var subTotal; // creates variables
    var discountAmt;
    var vatAmt;
    var totalPrice;
    
    subTotal = parmSubTotal; // calculate the subtotal
    discountAmt = (subTotal * 0.05); //calculate the discount
    vatAmt = (subTotal-discountAmt) * 0.10; //calculate the vat
    totalPrice = (subTotal - discountAmt) + vatAmt; //calculates total price
   
    display(subTotal,discountAmt,vatAmt,totalPrice); //calls the function display and passes it 4 arguments
}//end function
function display(parm1,parm2,parm3,parm4){ //function receives the value of the 4 arguments passed
    document.getElementById("subtotal").value = parm1; //displays sub total
    document.getElementById("discount").value = parm2; // displays discount
    document.getElementById("vat").value = parm3; // displays vat 
    document.getElementById("total").value = parm4; // displays total
    enablebtnProceed(); //goes to the function and enables the button
}//end function

function enablebtnProceed()
{
    $('#btnProceed').prop('disabled', false); //find button proceed go into properties and enable button
}//end function
function disablebtnProceed()
{
    $('#btnProceed').prop('disabled', true);//find button proceed go into properties and disable button
}//end function
  
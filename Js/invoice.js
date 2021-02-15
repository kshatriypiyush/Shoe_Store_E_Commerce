function getfast(){
document.getElementById("price").innerHTML="$"+localStorage.getItem("amount");
document.getElementById("quantity").innerHTML=localStorage.getItem("quantity");
document.getElementById("Total").innerHTML=" $"+localStorage.getItem("amount");
document.getElementById("cartquant").innerHTML=localStorage.getItem("quantity");

var tax=0;
var tps=0;
var tvq=0;
tax = localStorage.getItem("amount");
tps= tax*0.05;
tvq=tax*0.09975;

var total=0;
total = parseFloat(tax)+parseFloat(tps)+parseFloat(tvq);
document.getElementById("tax").innerHTML="TPS:$"+tps.toFixed(2)+" TVQ:$"+tvq.toFixed(2);
document.getElementById("cartprice").innerHTML="$"+total.toFixed(2);

}
/*  document.getElementById("price").innerHTML="hello piyush"; */
/*document.getElementById("quantity").innerHTML=window.quant; */

function getdetails(){
var amount=0;
var quant=0;
window.amount = document.getElementById("searchit").value;
window.quant = document.getElementById("quant").value;
localStorage.setItem("amount",window.amount);
localStorage.setItem("quantity",window.quant);
location.href="Js/Checkout.php";

}

function addingcart()
{
var price=0;
var quantity=0;
var operation = 0;
var quant2 = Array(); 
var pricearray = Array();
var operationarray = Array();
 for (var i = 1; i <= 18; i++) 
 {
	
    if(parseInt(document.getElementById("quantity"+i).value) != 0)
    {
       pricearray[i] = parseFloat(document.getElementById("shoe"+i).value);

       quant2[i] = parseFloat(document.getElementById("quantity"+i).value);  

       price += pricearray[i];
       quantity += quant2[i];
       operationarray[i] = pricearray[i] * quant2[i];
       operation += operationarray[i];
    }
    else
    {
        
    }
    
 }
document.getElementById("searchit").value= operation;
document.getElementById("quant").value= quantity;
}

function paymentdone(){
	
	alert("The Payment was successfully recorded!!");
	alert("Thank you for shopping with us!");
}

function redo(){
	document.getElementById("cname").value="";
	document.getElementById("ccnum").value="";
	document.getElementById("expmonth").value="";
	document.getElementById("expyear").value="";
	document.getElementById("cvv").value="";
	document.getElementById("zip").value="";
	document.getElementById("fname").value="";
	document.getElementById("email").value="";
	document.getElementById("adr").value="";
	document.getElementById("city").value="";
	document.getElementById("state").value="";
	
}

/* Code is Made by Piyush and Manan*/
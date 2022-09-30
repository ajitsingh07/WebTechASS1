let chequing = 5000;

function validation(){
   let amount = document.querySelector("#amount");
   
   if(amount.value > 5000){
    alert("Not Enough Balance");
   }
   else{
    alert("Money Sent: Your Balance " + amount.value);
    chequing-= amount;
   }

}
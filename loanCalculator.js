

 loanCalculator=(e)=>{

 const loanAmount = document.getElementById('loan').value;
 const loanDuration = document.getElementById('duration').value;
 const calculate= document.getElementById('calculate');
 const  result= document.getElementById('result')


 e.preventDefault();
 const fivePercent=Number(loanAmount)*0.05;
 const loanPerMonth= Number(loanAmount)/ Number(loanDuration);
 const amountToPay=Number(fivePercent) + Number(loanPerMonth);

    if(loanAmount > 3000000 ){
      result.textContent = `${loanAmount}NGN is above our policy limit of NGN3,000,000.`;
      }
     else if(loanDuration > 12 ){
      result.textContent = `${loanDuration} Month(s) is above our policy limit of 12 MONTHS`;
      }
      else{
           result.textContent = `Estimated Monthly Repayment On Borrowing ${loanAmount}NGN
             	                   for ${loanDuration} Month(s) is ${amountToPay}`;
          }
          }
             calculate.addEventListener('click',loanCalculator);
           


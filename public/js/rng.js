// RNG THRE BUTTONS FUNCTIONS
function getRndInteger25(min, max) 
{
    var current = Math.floor(Math.random() * (max - min)) + min;
    var result;
     if (current >= 25 ) {
         document.getElementById('answer').style.background ='red';
         result = "No";
     }
     else {
         document.getElementById('answer').style.background ='green';
         result = "Yes";
     }
     return  result + " " + current;
}

 function getRndInteger50(min, max) 
{
    var current = Math.floor(Math.random() * (max - min)) + min;
    var result;
     if (current >= 50 ) {
         document.getElementById('answer').style.background ='red';
         result = "No";
     }
     else {
         document.getElementById('answer').style.background ='green';
         result = "Yes";
     }
     return  result + " " + current;
}
 
 function getRndInteger75(min, max) 
 {
    var current = Math.floor(Math.random() * (max - min)) + min;
    var result;
     if (current <= 75 ) {
         document.getElementById('answer').style.background ='green';
         result = "Yes";
     }
     else {
         document.getElementById('answer').style.background ='red';
         result = "No";
     }
     return  result + " " + current;
}

//TIMER FUNCTIONS
let clock = "";

function timer()
{
    let current = Math.floor(Math.random() * (100 - 0)) + 0;

    document.getElementById('timerResult').innerHTML = current;
}
 
function runTimer() 
{ 
    let seconds = document.getElementById('seconds').value;

    $delay = seconds * 1000;  

    if(clock == "")
    {
        clock = setInterval(timer, $delay);
    }
    
}

function stopTimer()
{
    clearInterval(clock); 
    clock = "";
}

// Onclick effects for occurrencess buttons
function occurrences(string2)
{   let occurances = document.getElementById("pre-flop-raise-occurrences");   
    //let string2 = string;
    if(string2 == "decreasePreFlopRaise")
    {
        if(occurances.value > 0)
        {
            occurances.value--;
        }
    }  
    if(string2 == "increasePreFlopRaise")
    {
        if(occurances.value >= 0)
        {
            occurances.value++;
        }
    } 
}

// PRE-FLOP RAISE
function increasePreFlopRaiseOccurrences(){
    let occurances = document.getElementById("pre-flop-raise-occurrences");

    if(occurances.value >= 0)
    {
        occurances.value++;
    }
}

function decreasePreFlopRaiseOccurrences(){
    let occurances = document.getElementById("pre-flop-raise-occurrences");

    if(occurances.value > 0)
    {
        occurances.value--;
    }
}

// PRE-FLOP AGGRESSION
function increasePreFlopAggressionOccurrences(){
    let occurances = document.getElementById("pre-flop-aggression-occurrences");

    if(occurances.value >= 0)
    {
        occurances.value++;
    }
}

function decreasePreFlopAggressionOccurrences(){
    let occurances = document.getElementById("pre-flop-aggression-occurrences");

    if(occurances.value > 0)
    {
        occurances.value--;
    }
}

// POST-FLOP AGGRESSION
function increasePostFlopAggressionOccurrences(){
    let occurances = document.getElementById("post-flop-aggression-occurrences");

    if(occurances.value >= 0)
    {
        occurances.value++;
    }
}

function decreasePostFlopAggressionOccurrences(){
    let occurances = document.getElementById("post-flop-aggression-occurrences");

    if(occurances.value > 0)
    {
        occurances.value--;
    }
}

// Slider change functions
const slider = document.getElementById("pre-flop-raise");

slider.addEventListener('input', (event) => {
   // console.log(slider.value)
    let rangeValue = slider.value;

    if(rangeValue <= 20)
    {
        slider.style.backgroundColor = "rgb(255, 255, 0)";
    } 
    else if (rangeValue <= 40)
    {
       slider.style.backgroundColor = "rgb(255, 225 , 0)";
    }
    else if (rangeValue <= 60)
    {
       slider.style.backgroundColor = "rgb(255, 192 , 0)";
    }
    else if (rangeValue <= 80)
    {
       slider.style.backgroundColor = "rgb(255, 128, 0)";
    }
    else
    {
        slider.style.backgroundColor = "rgb(255, 0, 0)";  
    }
});


// Onclick effects for occurrencess buttons
function occurrences(input)
{   
    const preFlopRaiseOccurrences = document.getElementById("pre-flop-raise-occurrences"); 
    const preFlopAggressionOccurrences = document.getElementById("pre-flop-aggression-occurrences");  
    
    // PFRaise
    if(input == "decreasePreFlopRaise")
    {
        if(preFlopRaiseOccurrences.value > 0)
        {
            preFlopRaiseOccurrences.value--;
            
        }
    }  
    if(input == "increasePreFlopRaise")
    {
        if(preFlopRaiseOccurrences.value >= 0)
        {
            preFlopRaiseOccurrences.value++;
            
        }
    } 

    // PFAgression
    if(input == "decreasePreFlopAggression")
    {
        if(preFlopAggressionOccurrences.value > 0)
        {
            preFlopAggressionOccurrences.value--;
            
        }
    }  
    if(input == "increasePreFlopAggression")
    {
        if(preFlopAggressionOccurrences.value >= 0)
        {
            preFlopAggressionOccurrences.value++;
            
        }
    } 
 

}


// Slider change functions
// const slider = document.getElementById("pre-flop-raise");

// slider.addEventListener('input', (event) => {
//    // console.log(slider.value)
//     let rangeValue = slider.value;

//     if(rangeValue <= 20)
//     {
//         slider.style.backgroundColor = "rgb(255, 255, 0)";
//     } 
//     else if (rangeValue <= 40)
//     {
//        slider.style.backgroundColor = "rgb(255, 225 , 0)";
//     }
//     else if (rangeValue <= 60)
//     {
//        slider.style.backgroundColor = "rgb(255, 192 , 0)";
//     }
//     else if (rangeValue <= 80)
//     {
//        slider.style.backgroundColor = "rgb(255, 128, 0)";
//     }
//     else
//     {
//         slider.style.backgroundColor = "rgb(255, 0, 0)";  
//     }
// });


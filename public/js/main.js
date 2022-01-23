// Onclick effects for occurrencess buttons

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

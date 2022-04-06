let step = "heroOne";

function cards(card)
{
    let btn = "btn" + card

    if(step == "heroOne")
    {
        document.getElementById("heroCardOne").value = card

        document.getElementById(btn).disabled = true

        step = "heroTwo" 

        document.getElementById("heroCardTwo").focus()
        
    }
    else if(step == "heroTwo")
    {
        document.getElementById("heroCardTwo").value = card

        document.getElementById(btn).disabled = true

        step = "villianOne" 

        document.getElementById("villianCardOne").focus()

    }
    else if(step == "villianOne")
    {
        document.getElementById("villianCardOne").value = card

        document.getElementById(btn).disabled = true

        step = "villianTwo" 

        document.getElementById("villianCardTwo").focus()

    }
    else if(step == "villianTwo")
    {
        document.getElementById("villianCardTwo").value = card

        document.getElementById(btn).disabled = true

        step = "flop" 
    }

}
let step = "heroOne";

function heroCard(card)
{
    let btn = "btn" + card
    
    if(step == "heroTwo")
    {
        document.getElementById("heroCardTwo").value = card

        document.getElementById(btn).disabled = true

        step = "villianOne" 
    }

    if(step == "heroOne")
    {
        document.getElementById("heroCardOne").value = card

        document.getElementById(btn).disabled = true

        step = "heroTwo" 
    }

}
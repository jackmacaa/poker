function heroCard(card)
{
    if(document.getElementById("heroCardOne").value != "" && document.getElementById("heroCardTwo").value == "")
    {
        document.getElementById("heroCardTwo").value = card;

        btn = "btn" + card;

        document.getElementById(btn).disabled = true;
    }
    if(document.getElementById("heroCardOne").value == "")
    {
        document.getElementById("heroCardOne").value = card;

        btn = "btn" + card;

        document.getElementById(btn).disabled = true;
    }
 
}
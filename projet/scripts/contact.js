function surligne(champ, erreur)
{
    if (erreur)
        champ.style.backgroundColor = "#fba";  
}

function verifMail(champ)
{
    var regex = /^[a-zA-Z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$/;
    if (!regex.test(champ.value))
    {
        surligne(champ,true);
        return false;
    }
    else
    {
        surligne(champ, false);
        return true;
    }
}
let odp = document.getElementById("odp")

function licz(form1)
{
    let a = form1.a.value
    let b = form1.b.value
    let c = form1.c.value
    let delta = 0
    
    if(a == "" || b == "" || c == "")
        alert("Wypełnij formularz")
    else
    {
        if(a == 0)
            odp.innerHTML = "To nie jest funkcja kwadratowa"
        else
        {
            delta = Math.pow(b, 2) - 4 * a * c
            if(delta < 0)
                odp.innerHTML = "Nie ma miejsc zerowych"
            else if(delta == 0 && b < 0 && c < 0)
                odp.innerHTML = "Funkcja f(x)="+a+"x<sup>2</sup>+"+b+"x+"+c+" wynosi <b>1</b>"
            else if(delta == 0 && c < 0)
                odp.innerHTML = "Funkcja f(x)="+a+"x<sup>2</sup>+"+b+"x"+c+" wynosi <b>1</b>"
            else if(delta == 0 && b < 0)
                odp.innerHTML = "Funkcja f(x)="+a+"x<sup>2</sup>"+b+"x+"+c+" wynosi <b>1</b>"
            
                else if(delta > 0 && b < 0 && c < 0)
                odp.innerHTML = "Funkcja f(x)="+a+"x<sup>2</sup>+"+b+"x+"+c+" wynosi <b>2</b>"
            else if(delta > 0 && c < 0)
                odp.innerHTML = "Funkcja f(x)="+a+"x<sup>2</sup>+"+b+"x"+c+" wynosi <b>2</b>"
            else if(delta > 0 && b < 0)
                odp.innerHTML = "Funkcja f(x)="+a+"x<sup>2</sup>"+b+"x+"+c+" wynosi <b>2</b>"
        }
    }
    
}
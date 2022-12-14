function funkcja_liniowa()
{
    

    if(a >= 0 && b >= 0)
        document.write("Wzór funkcji: f(x) = " + a + "x + " + b)
    else if(a <= 0 && b >= 0)
        document.write("Wzór funkcji: f(x) = " + a + "x + " + b)
    else if(a <= 0 && b <= 0)
        document.write("Wzór funkcji: f(x) = " + a + "x  " + b)
    else
        document.write("Wzór funkcji: f(x) = " + a + "x  " + b)

    if(a==0)
        document.write("<br>Funkcja stała<br>")
    else if(a > 0)
        document.write("<br>Funkcja rosnąca<br>")
    else
        document.write("<br>Funkcja malejąca<br>")

    if(a==0 && b==0)
        document.write("Funkcja ma wiele miejsc zerowych")
    else if(a==0 && b!=0)
        document.write("Funkcja nie ma miejsc zerowych")
    else
        document.write("Funkcja ma jedno miejse zerowe x<sub>0</sub> = " + -1*b/a)    
}
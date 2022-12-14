let a = prompt("Podaj pierwszą liczbę:")
let b = prompt("Podaj drugą liczbę:")

function mnozenie(a, b)
{
    let wynik = prompt("Podaj wynik " + a + " * " + b + " = ")
    if(a * b == wynik)
        document.write("Poprawny wynik")
    else
        document.write("Błąd! Poprawny wynik to: " + a + " * " + b + " = " + a*b)
}
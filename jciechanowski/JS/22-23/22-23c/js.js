function zmien(liczba)
{
    let doZmiany = document.getElementsByClassName(liczba)
    for(let i=0; i<doZmiany.length; i++)
    doZmiany[i].style.background = "yellow"
}
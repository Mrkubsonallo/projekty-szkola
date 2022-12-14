function zmien(liczba)
{
    let doZmiany = document.getElementById(liczba)
    //doZmiany.style.background = "yellow"
    doZmiany.innerHTML = "<mark>" + doZmiany.innerHTML + "</mark>"
}
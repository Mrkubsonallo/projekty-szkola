let odp = document.getElementById("odp")

function licz(form1)
{
    let a = form1.boka.value
    let b = form1.bokb.value
    let pole = a * b
    let obw = 2 * a + 2 * b
    odp.innerHTML = "Pole wynosi: " + pole + "<br>Obwód wynosi: " + obw
}
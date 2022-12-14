function check()
{
    let a = document.getElementById("a").value
    let b = document.getElementById("b").value
    let result = document.getElementById("result")

    result.innerHTML = "Większa liczba spośród podanych to: " + Math.max(a, b)
}
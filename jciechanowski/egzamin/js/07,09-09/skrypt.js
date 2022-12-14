const click = document.getElementById("send")
const result = document.getElementById("wynik")

const short = document.getElementById("krotkie")
const medium = document.getElementById("srednie")
const halflong = document.getElementById("poldlugie")
const long = document.getElementById("dlugie")

click.addEventListener('click', ()=>{
    if(short.checked)
        result.innerHTML = short.value
    else if(medium.checked)
        result.innerHTML = medium.value
    else if(halflong.checked)
        result.innerHTML = halflong.value
    else if(long.checked)
        result.innerHTML = long.value
})
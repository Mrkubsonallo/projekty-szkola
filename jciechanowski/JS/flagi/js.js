const butt = document.getElementById("start")
const odp = document.getElementById("odp")
const error = document.getElementById("error")

butt.addEventListener('click', start())

const panstwa = []
panstwa[0] = "Polska"
panstwa[1] = "Niemcy"
panstwa[2] = "Belgia"
panstwa[3] = "Czechy"

function insert()
{
    let text = document.getElementById("inp_text").value
    let napis = ""
    for(let i = 0; i<=panstwa.length-1; i++)
    {
        if(panstwa[i] == text)
        {
            napis += panstwa[i] + "<br>"
            error.innerHTML = ""
            odp.innerHTML = napis
        }
            
        else
            error.innerHTML = "Nie poprawne państwo"
    }
}
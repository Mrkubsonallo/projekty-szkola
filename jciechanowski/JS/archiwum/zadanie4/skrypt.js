const add = document.querySelector("#add")
const list = document.querySelector("#list")

add.addEventListener('click', ()=>{
    const text = document.querySelector("#text").value
    const option = document.createElement("option")
    option.appendChild(document.createTextNode(text))
    list.appendChild(option)
})
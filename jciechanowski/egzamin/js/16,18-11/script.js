const btn1 = document.querySelector("#btn1")
const btn2 = document.querySelector("#btn2")
const btn3 = document.querySelector("#btn3")
const sel = document.querySelector("#select")
const size = document.querySelector("#size")
const chbox = document.querySelector("#chbox")
const radio1 = document.querySelector("#radio1")
const radio2 = document.querySelector("#radio2")
const radio3 = document.querySelector("#radio3")
const right = document.querySelector("#right")
const image1 = document.querySelector("#image")
const ul = document.querySelector("#ul")

btn1.addEventListener("click", ()=>{
    right.style.backgroundColor = "Indigo"
})
btn2.addEventListener("click", ()=>{
    right.style.backgroundColor = "SteelBlue"
})
btn3.addEventListener("click", ()=>{
    right.style.backgroundColor = "Olive"
})
sel.addEventListener('change', ()=>{
    right.style.color = sel.value
})
size.addEventListener('change', ()=>{
    right.style.fontSize = size.value
})
chbox.addEventListener('click', ()=>{
    if(chbox.checked)
        image1.style.border = "solid 1px white"
    else
        image1.style.border = 0
})
radio1.addEventListener('click', ()=>{
    ul.classList.add("disc")
    ul.classList.remove("square")
    ul.classList.remove("circle")
})
radio2.addEventListener('click', ()=>{
    ul.classList.remove("disc")
    ul.classList.add("square")
    ul.classList.remove("circle")
})
radio3.addEventListener('click', ()=>{
    ul.classList.remove("disc")
    ul.classList.remove("square")
    ul.classList.add("circle")
})
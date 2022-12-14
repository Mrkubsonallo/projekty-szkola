//Z3d
const letter = document.querySelector(".letter")
const small = document.querySelector("#small")
const medium = document.querySelector("#medium")
const large = document.querySelector("#large")
const lorem = document.querySelector("#lorem")
size = 14

small?.addEventListener('click', ()=>{
    if(size > 0)
        size -= 2
    lorem.style.fontSize = size + "px"
})

medium?.addEventListener('click', ()=>{
    size = 14
    lorem.style.fontSize = size + "px"
})

large?.addEventListener('click', ()=>{
    size += 2
    lorem.style.fontSize = size + "px"        
})
//Z3e
const b = document.querySelector("#b")
const em = document.querySelector("#em")
const color = document.querySelector("#color")
const select = document.querySelector("#select")

b.addEventListener("click", ()=>{
    if(lorem.classList != "em")
        if(lorem.classList != "b")
            lorem.classList.add("b")
        else
            lorem.classList.remove("b")
})

em.addEventListener("click", ()=>{
    if(lorem.classList != "b")
        if(lorem.classList != "em")
           lorem.classList.add("em")
        else
            lorem.classList.remove("em")
})

color.addEventListener("change", ()=>{
    lorem.style.color = color.value
})

select.addEventListener("change", ()=>{
    lorem.style.fontSize = select.value + "px"
})
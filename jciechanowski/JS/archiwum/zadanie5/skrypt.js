const small = document.querySelector("#small")
const medium = document.querySelector("#medium")
const big = document.querySelector("#big")
const paragraf = document.querySelector(".paragraf")

small.addEventListener('click', ()=>{
    paragraf.classList.remove("big")
    paragraf.classList.remove("medium")
    paragraf.classList.add("small")
})

medium.addEventListener('click', ()=>{
    paragraf.classList.remove("big")
    paragraf.classList.remove("small")
    paragraf.classList.add("medium")
})

big.addEventListener('click', ()=>{
    paragraf.classList.remove("small")
    paragraf.classList.remove("medium")
    paragraf.classList.add("big")
})
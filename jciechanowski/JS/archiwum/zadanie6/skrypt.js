const font = document.querySelector("#font")
const bold = document.querySelector("#bold")
const ital = document.querySelector("#ital")
const color = document.querySelector("#color")


bold.addEventListener('click', ()=>{
    const paragraf = document.querySelector("#paragraf")
    paragraf.style.fontWeight = "bold"
})
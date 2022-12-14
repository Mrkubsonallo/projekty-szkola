const hov = document.getElementsByClassName("hover")

hov.addEventListener('mousemove', ()=>{
    for(let i=0; i<hov.length; i++)
    hov[i].style.background = "yellow"
})
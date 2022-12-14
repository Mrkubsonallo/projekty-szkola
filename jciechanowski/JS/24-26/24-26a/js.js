const par = document.getElementById('par')
const par2 = document.getElementById('par')
const par3 = document.getElementById('par')

par.addEventListener('dblclick', ()=>{
    if(par.classList == 'red')
    {
        par.style.color = 'black'
        par.classList.remove('red')
    }
        
    else
    {
        par.style.color = 'red'
        par.classList.add('red')
    }
        
})
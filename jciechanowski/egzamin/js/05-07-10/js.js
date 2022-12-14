const send = document.querySelector("#send")
const reset = document.querySelector("#reset")
const result = document.querySelector("#result")

send.addEventListener('click', ()=>{
    let fname = document.querySelector("#fname")
    let lname = document.querySelector("#lname")
    let email = document.querySelector("#email")
    let usl = document.getElementById("usl");
    let value = usl.options[usl.selectedIndex].value;
    let opt = usl.options[usl.selectedIndex].text;

    result.innerHTML = fname.value + " " + lname.value + "<br>" + email.value.toLowerCase() + "<br>" + opt
})

reset.addEventListener('click', ()=>{
    let fname = document.querySelector("#fname")
    let lname = document.querySelector("#lname")
    let email = document.querySelector("#email")
    let check = document.querySelector("#chek")
    
    fname.value = ''
    lname.value = ''
    email.value = ''
    check.checked = false
})
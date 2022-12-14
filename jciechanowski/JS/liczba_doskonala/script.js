const check = document.querySelector("#check")
let num = document.querySelector("#liczba")
const res = document.querySelector("#result")
let sum = 1

check.addEventListener('click', ()=>{
    let pier = Math.sqrt(num.value)
    for(i = 2; i < pier; i++)
        if(num.value % i == 0)
            sum += i + num.value/i

    if(sum == num.value && num.value != 1)
        res.innerHTML = "Liczba " + num.value + " jest liczbą doskonałą."
    else
        res.innerHTML = "Liczba " + num.value + " nie jest liczbą doskonałą."
    sum = 1
})
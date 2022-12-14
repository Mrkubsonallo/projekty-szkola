//Zadanie 1
const clicked = document.querySelector('#click_me')

clicked.addEventListener('dblclick', ()=>{
    if(clicked.style.color == "red")
    clicked.style.color = "#dbdbdb"
    else
    clicked.style.color = "red"
})

//Zadanie 2
const sent = document.querySelector('#sent')
const results = document.querySelector('#result')

sent.addEventListener('click', ()=>{
    const get = document.querySelector('#get').value
    if(get.charAt(0) == "-")
    results.innerHTML = "Liczba ujemna"
    else if(get == 0)
    results.innerHTML = "Zero"
    else
    results.innerHTML = "Liczba dodatnia"
})

//Zadanie 3
const sent_pole = document.querySelector('#sent_pole')
const results_pole = document.querySelector('#result_pole')

sent_pole.addEventListener('click', ()=>{
    //console.log('działa')
    let get_pole = parseInt(document.querySelector('#get_pole').value)
    let pole = Math.pow(get, 2)
    let obw = 4*get
    //console.log(obw)
    results_pole.innerHTML = "Pole kwadratu wynosi: "+pole+", a obwód wynosi: "+obw
})

//Zadanie 4
const sent_liczba = document.querySelector('#sent_liczba')
const result_liczba = document.querySelector('#result_liczba')

sent_liczba.addEventListener('click', ()=>{
    let liczba_min = parseInt(document.querySelector('#liczba_min').value)
    let liczba_max = parseInt(document.querySelector('#liczba_max').value)

    for(let i = liczba_min; i <= liczba_max; i++)
    {
        if(i % 2 == 0)
        var rezultat = i + ", "
    }
    result_liczba.innerHTML = rezultat
    //rezultat.slice(0, -2)
})
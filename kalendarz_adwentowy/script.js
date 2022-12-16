window.onload = calendar_build()

function calendar_build()
{
    let date = new Date
    let month = date.getDate()

    let num = 1
    const calendar = document.getElementById('calendar')
    for(let i=1; i<25; i++)
    {
        if(i>=1 && i<=4)
            calendar.innerHTML += '<div class="row1" id="field'+i+'">'+i+'</div>'
        else if(i>=5 && i<=8)
            calendar.innerHTML += '<div class="row2" id="field'+i+'">'+i+'</div>'
        else if(i>=9 && i<=12 )
            calendar.innerHTML += '<div class="row3" id="field'+i+'">'+i+'</div>'
        else if(i>=13 && i<=16)
            calendar.innerHTML += '<div class="row4" id="field'+i+'">'+i+'</div>'
        else if(i>=17 && i<=20)
            calendar.innerHTML += '<div class="row5" id="field'+i+'">'+i+'</div>'
        else if(i>=21 && i<=24)
            calendar.innerHTML += '<div class="row6" id="field'+i+'">'+i+'</div>'
    }

    for(i=1; i<=month; i++)
    {   
        if(i<=month)
        {
            let element = document.getElementsByTagName('div')[i]
            element.setAttribute('onclick', 'clicked(this)')
            console.log(i)
        }
    }
}

function clicked(element)
{
    console.log(element.getAttribute('id'))
}
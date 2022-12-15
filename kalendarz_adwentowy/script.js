function calendar_build()
{
    let num = 0
    const calendar = document.getElementById('calendar')
    for(let i=0; i<24; i++)
    {
            num ++
            calendar.innerHTML += '<div id="field'+i+'" class="row'+num+'"></div>'
    }
}
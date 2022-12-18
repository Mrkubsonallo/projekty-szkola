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

    calendar.innerHTML += '<div id="door_content" onclick="content_close(this)"></div>'

    for(i=1; i<=month; i++)
    {   
        let element = document.getElementsByTagName('div')[i]
        element.setAttribute('onclick', 'clicked(this)')
        element.setAttribute('onmouseover', 'hover(this)')
        element.setAttribute('onmouseout', 'hover_out(this)')

    }
}

function hover(element)
{
    element.style.cursor = "pointer"
}

function hover_out(element)
{
    element.style.cursor = "default"
}

function clicked(element)
{
    let elem_id = element.getAttribute('id')
    const door_content = document.querySelector('#door_content')

    switch(elem_id)
    {
        case 'field1':
            door_content.style.visibility = 'visible'
            door_content.innerHTML = '<p>„Jingle Bells” zostało napisane na Święto Dziękczynienia, nie na Boże Narodzenie. Piosenka została napisana w 1857 roku przez Jamesa Lorda Pierponta i wydana pod tytułem „One Horse Open Sleigh”.</p><p id="disclamer">Naciśnij na okienko aby zamknąć</p>'
        break;
        case 'field2':
            door_content.style.visibility = 'visible'
            door_content.innerHTML = '<audio controls><source src="https://przysiek-michalici.pl/wp-content/uploads/2019/01/Gdy-się-Chrystus-rodzi-Wniebogłosy.mp3" type="audio/mpeg"></audio><p id="disclamer">Naciśnij na okienko aby zamknąć</p>'
        break;
        case 'field3':
            door_content.style.visibility = 'visible'
            door_content.innerHTML = '<p>Wizerunek Świętego Mikołaja lecącego saniami powstał w 1819 r. i został stworzony przez Waszyngtona Irvinga, tego samego autora, który wymyślił Bezgłowego Jeźdźca.</p><p id="disclamer">Naciśnij na okienko aby zamknąć</p>'
        break;
        case 'field4':
            door_content.style.visibility = 'visible'
            door_content.innerHTML = '<audio controls><source src="https://przysiek-michalici.pl/wp-content/uploads/2019/01/Cicha-noc-Wniebogłosy.mp3" type="audio/mpeg"></audio><p id="disclamer">Naciśnij na okienko aby zamknąć</p>'
        break;
        case 'field5':
            door_content.style.visibility = 'visible'
            door_content.innerHTML = '<p>Dom towarowy Montgomery Ward stworzył Rudolfa Renifera jako sztuczkę marketingową zachęcającą dzieci do kupowania ich świątecznych kolorowanek. Oryginalny Rudolph nie miał czerwonego nosa. W tamtych czasach czerwony nos był postrzegany jako objaw alkoholizmu, a Montgomery Ward nie chciał, by wyglądał jak pijak. Żeby dokończyć oryginalny obrazek, prawie nazywał się Reginald lub Rollo.</p><p id="disclamer">Naciśnij na okienko aby zamknąć</p>'
        break;
        case 'field6':
            door_content.style.visibility = 'visible'
            door_content.innerHTML = '<audio controls><source src="https://przysiek-michalici.pl/wp-content/uploads/2019/01/Kolęda-Wniebogłosy-Wniebogłosy.mp3" type="audio/mpeg"></audio><p id="disclamer">Naciśnij na okienko aby zamknąć</p>'
        break;
        case 'field7':
            door_content.style.visibility = 'visible'
            door_content.innerHTML = '<p>Mikołaj nie zawsze był ubrany na czerwono. Przed latami 30-stymi istniało wiele różnych odmian Mikołaja, w różnych kolorach. Niektórzy twierdzą, że współczesny wizerunek Mikołaja został stworzony przez Coca-Colę, ale nie jest to ścisła prawda. Oryginalny czerwony Mikołaj stał się popularny w USA i Kanadzie w XIX wieku dzięki wpływom karykaturzystów.</p><p id="disclamer">Naciśnij na okienko aby zamknąć</p>'
        break;
        case 'field8':
            door_content.style.visibility = 'visible'
            door_content.innerHTML = '<audio controls><source src="https://przysiek-michalici.pl/wp-content/uploads/2019/01/Największy-Gazda-Wniebogłosy-Tintinnabula-Angelorum.mp3" type="audio/mpeg"></audio><p id="disclamer">Naciśnij na okienko aby zamknąć</p>'
        break;
        case 'field9':
            door_content.style.visibility = 'visible'
            door_content.innerHTML = '<p>1066 roku Król Anglii Wilhelm I został koronowany w dniu Bożego Narodzenia.</p><p id="disclamer">Naciśnij na okienko aby zamknąć</p>'
        break;
        case 'field10':
            door_content.style.visibility = 'visible'
            door_content.innerHTML = '<audio controls><source src="https://przysiek-michalici.pl/wp-content/uploads/2019/01/Świeć-gwiazdeczko-Wniebogłosy-Tintinnabula-Angelorum.mp3" type="audio/mpeg"></audio><p id="disclamer">Naciśnij na okienko aby zamknąć</p>'
        break;
        case 'field11':
            door_content.style.visibility = 'visible'
            door_content.innerHTML = '<p>1640 roku Szkocja zniosła obchodzenie Bożego Narodzenia, aż do 1958 r., kiedy to stało się ono prawnym świętem.</p><p id="disclamer">Naciśnij na okienko aby zamknąć</p>'
        break;
        case 'field12':
            door_content.style.visibility = 'visible'
            door_content.innerHTML = '<p>Podczas wizyty w Finlandii Mikołaj zostawia za sobą sanie i jeździ na kozie o imieniu Ukko. Ukko jest ze słomy, ale jest wystarczająco silny, aby wozić Świętego Mikołaja.</p><p id="disclamer">Naciśnij na okienko aby zamknąć</p>'
        break;
        case 'field13':
            door_content.style.visibility = 'visible'
            door_content.innerHTML = '<p>Amerykańska oficjalna narodowa choinka świąteczna znajduje się w parku narodowym King’s Canyon w Kalifornii. Choinka, ma ponad 90 metrów wysokości.</p><p id="disclamer">Naciśnij na okienko aby zamknąć</p>'
        break;
        case 'field14':
            door_content.style.visibility = 'visible'
            door_content.innerHTML = '<audio controls><source src="https://przysiek-michalici.pl/wp-content/uploads/2019/01/Gore-gwiazda-Jezusowi-Wniebogłosy-Tintinnabula-Angelorum.mp3" type="audio/mpeg"></audio><p id="disclamer">Naciśnij na okienko aby zamknąć</p>'
        break;
        case 'field15':
            door_content.style.visibility = 'visible'
            door_content.innerHTML = '<p>Jemioła pochodzi od anglosaskiego słowa misteltan, które oznacza „mała gałązka gnoju”, ponieważ roślina rozprzestrzenia się przez ptasie odchody.</p><p id="disclamer">Naciśnij na okienko aby zamknąć</p>'
        break;
        case 'field16':
            door_content.style.visibility = 'visible'
            door_content.innerHTML = '<audio controls><source src="https://przysiek-michalici.pl/wp-content/uploads/2019/01/Wśród-nocnej-ciszy-Tintinnabula-Angelorum.mp3" type="audio/mpeg"></audio><p id="disclamer">Naciśnij na okienko aby zamknąć</p>'
        break;
        case 'field17':
            door_content.style.visibility = 'visible'
            door_content.innerHTML = '<p> Przy rozdawaniu prezentów w Holandii św. Mikołajowi towarzyszy jego sługa, Czarny, który jest odpowiedzialny za faktyczne zrzucanie prezentów w kominach swoich odbiorców. Karze również złe dzieci, wkładając je do torby i wywożąc do Hiszpanii.</p><p id="disclamer">Naciśnij na okienko aby zamknąć</p>'
        break;
        case 'field18':
            door_content.style.visibility = 'visible'
            door_content.innerHTML = '<audio controls><source src="https://przysiek-michalici.pl/wp-content/uploads/2019/01/Dzisiaj-w-Betlejem-Tintinnabula-Angelorum.mp3" type="audio/mpeg"></audio><p id="disclamer">Naciśnij na okienko aby zamknąć</p>'
        break;
        case 'field19':
            door_content.style.visibility = 'visible'
            door_content.innerHTML = '<p>Dwa tygodnie przed świętami Bożego Narodzenia to jeden z dwóch najbardziej popularnych momentów na zerwanie związku. Według danych analizowanych z postów i statusów na Facebooku, pary mają większe szanse na zakończenie związku na dwa tygodnie przed świętami Bożego Narodzenia i dwa tygodnie po walentynkach. Święta Bożego Narodzenia są jednak najmniej popularnym dniem rozstań.</p><p id="disclamer">Naciśnij na okienko aby zamknąć</p>'
        break;
        case 'field20':
            door_content.style.visibility = 'visible'
            door_content.innerHTML = '<audio controls><source src="https://przysiek-michalici.pl/wp-content/uploads/2019/01/Kolęda-Maryi-Tintinnabula-Angelorum.mp3" type="audio/mpeg"></audio><p id="disclamer">Naciśnij na okienko aby zamknąć</p>'
        break;
        case 'field21':
            door_content.style.visibility = 'visible'
            door_content.innerHTML = '<p>„Cicha noc” została po raz pierwszy zaśpiewana w ramach nabożeństwa kościelnego w Austrii. Użyto gitary, ponieważ organy kościelne były tak bardzo zardzewiałe, że nie można było na nich grać.</p><p id="disclamer">Naciśnij na okienko aby zamknąć</p>'
        break;
        case 'field22':
            door_content.style.visibility = 'visible'
            door_content.innerHTML = '<audio controls><source src="https://przysiek-michalici.pl/wp-content/uploads/2019/01/Mario-czy-już-wiesz-Tintinnabula-Angelorum.mp3" type="audio/mpeg"></audio><p id="disclamer">Naciśnij na okienko aby zamknąć</p>'
        break;
        case 'field23':
            door_content.style.visibility = 'visible'
            door_content.innerHTML = '<p>Pierwsze komercyjne kartki bożonarodzeniowe zostały zamówione przez urzędnika Sir Henry’ego Cole’a w Londynie w 1843 roku. Z rodziną pijącą wino, jedna z nich została sprzedana za 8469 funtów w 2014 roku.</p><p id="disclamer">Naciśnij na okienko aby zamknąć</p>'
        break;
        case 'field24':
            door_content.style.visibility = 'visible'
            door_content.innerHTML = '<p>1 na 3 mężczyzn czeka z zakupami pod choinkę aż do Wigilii.</p><p id="disclamer">Naciśnij na okienko aby zamknąć</p>'
        break;
    }
}

function content_close(element)
{
    element.style.visibility = 'hidden'
}
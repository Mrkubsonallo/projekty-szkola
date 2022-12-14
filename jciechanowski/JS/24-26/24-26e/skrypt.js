 function klawisz(event)
		{
            var znak = event.key;
			if (znak == "b")
			document.body.style.backgroundColor = "blue"; 
			else if (znak == "g")
			document.body.style.backgroundColor = "green";
			else if (znak == "r")
			document.body.style.backgroundColor = "red"; 
			else 
			document.body.style.backgroundColor = "white"; 
		}
//funzione per selezionare il punteggio di ogni domanda

function selectScore (nodo, radioImgCont, indice, values) 
	{
		var radioImg = radioImgCont.getElementsByTagName('a'); //individuo le immagini score
		var radioInput = radioImgCont.getElementsByTagName('input'); //individuo gli eventuali radio e il campo hidden
		
		if(nodo.nodeName.toLowerCase()=='a') //se sto cliccando su un'immagine
			{
				for(i=0; i<radioImg.length; i++)  //assegno classi accese o spente
				{
					radioImg[i].className = 'off';
				}
				
				radioImg [indice].className = 'on';
					
				for(i=0; i<radioInput.length; i++) 
				{
					radioInput[i].checked = false; //se sto cliccando su un'immagine disattivo l'eventuale radio button
				}
			}
				
		else if (nodo.nodeName.toLowerCase()=='input') //se sto cliccando su un radio disattivo le immagini
			{
				for(i=0; i<radioImg.length; i++) 
				{
					radioImg[i].className = 'off';
				}
			}
				
		for(i=0; i<radioInput.length; i++) //riempio il campo nascosco con il valore selezionato
			{
				if(radioInput[i].type=='hidden') 
					{
						radioInput[i].value = values;
						
					}
				
			}
	}
			

//funzione per il counter textarea
		var nCarMax = 500;
		window.onload = function()
		{
			if(document.getElementById('stepQuestionarioText')) 
			{
				document.getElementById('stepQuestionarioText').counter.value = nCarMax;
			}
		}
		
		function ContaCaratteri(form)
		{
			form.counter.value = nCarMax - form.text.value.length; //aggiorno il counter togliendo i caratteri inseriti
			if (form.text.value.length > nCarMax) //controllo di non superare il limite max di caratteri
			{
				form.text.value = form.text.value.substr(0, nCarMax);
				form.counter.value = 0;
			 }

		}

		function skippaEContaCaratteri(counterName, textAreaName){
			var text =  document.getElementsByName(textAreaName)[0];
			var count = document.getElementsByName(counterName)[0];
			var regEx = /[^a-z0-9àèéìòóù\.,\?\!\s@€\(\):]/ig;

			if (nCarMax < text.value.length) {
				count.value = 0;
				text.value = text.value.substr(0,nCarMax);
			} else {
				count.value = nCarMax - text.value.length;
			}
			
			text.value = text.value.replace(regEx, '');
		}

//funzione per gestire gli errori e mandare agli step successivi
function goTonextStep(form, btn) 
	{
	var radioInput = form.getElementsByTagName('input');
	var radioImg = form.getElementsByTagName('a');
	var textInput = form.getElementsByTagName('textarea');
	
	var condizione = false; //pongo la condizione false
		for(i=0; i<radioImg.length; i++) 
			{
				if(radioImg[i].className=='on') {condizione=true;} //se almeno una img selezionata invio
			}
		for(i=0; i<radioInput.length; i++) 
			{
				if(radioInput[i].type == 'radio' && (radioInput[i].checked)) {condizione=true;} //se radio selezionato invio
			}
		
		for(i=0; i<textInput.length; i++) 
			{
				if(textInput[i].value.length!=0) {condizione=true;} //se radio selezionato invio
			}
		
		if(condizione == true) 
			{
				form.getElementsByTagName('span')[0].style.visibility='hidden'; //se condizione superata msg errore nascosto e vai allo step successivo
				form.submit();
			}
		if(condizione == false) {form.getElementsByTagName('span')[0].style.visibility='visible';} //se condizione NON superata msg errore visualizzato con inline per centrarlo rispetto div suo contenitore
	}
	
	
// Rileva il massimo z-index in tutto il documento corrente
function getNextHighestZindex()
{
	var highestIndex = 0;
	var currentIndex = 0;
	var elArray = Array();
	if (navigator.userAgent.indexOf("MSIE 5.5") > -1)
	{
		elArray = document.all;
	}
	else
	{
		elArray = document.getElementsByTagName('*');
	}

	for(var i=0; i < elArray.length; i++){
		if(window.getComputedStyle){
			currentIndex = parseFloat(document.defaultView.getComputedStyle(elArray[i],null).getPropertyValue('z-index'));
			if(!isNaN(currentIndex) && currentIndex >= highestIndex && currentIndex < 16777271){highestIndex = currentIndex;}
		}
		if (elArray[i].currentStyle){
			//stile dell'elemento
			currentIndex = parseFloat(elArray[i].currentStyle['zIndex']);
			if(!isNaN(currentIndex) && currentIndex >= highestIndex && currentIndex < 16777271){highestIndex = currentIndex;}
		}
		if (elArray[i].style.zIndex){
			//stile dell'elemento
			currentIndex = parseFloat(elArray[i].style.zIndex);
			if(!isNaN(currentIndex) && currentIndex >= highestIndex && currentIndex < 16777271){highestIndex = currentIndex;}
		}
	}
	return(highestIndex+1);
}

//scrolling amount
function getScrollY() {
	if(navigator.appName != "Microsoft Internet Explorer"){
		return window.pageYOffset;
	}
	else
	{
		if (navigator.userAgent.indexOf("MSIE 5.5") > -1)
		{
			return document.body.scrollTop;
		}
		else
		{
			return document.documentElement.scrollTop;
		}
	}
}

function getPageHeight ()
{
	if (navigator.appName != "Microsoft Internet Explorer")
	{
		return window.innerHeight;
	} 
	else 
	{
		if (navigator.userAgent.indexOf("MSIE 5.5") > -1)
		{
			return document.body.offsetHeight;
		}
		else
		{
			return document.documentElement.clientHeight;
		}

	}
}
function getPageWidth ()
{
	if (navigator.appName != "Microsoft Internet Explorer")
	{
		return document.body.clientWidth;
	} 
	else 
	{
		if(navigator.userAgent.indexOf("MSIE 5.5") > -1)
		{
			return document.body.offsetWidth;
		}
		else
		{
			return document.documentElement.clientWidth;
		}
	}
}
function arrangeSelect (idElement)
{
	if (idElement)
	{
		var x = document.getElementsByTagName("select").length;	
		x = document.getElementsByTagName("select");
		for (i = x.length; i; x[--i].style.visibility='hidden');
		var y = document.getElementById(idElement).getElementsByTagName('select');
		for (i = y.length; i; x[--i].style.visibility='visible');
	}
	else
	{
		x = document.getElementsByTagName("select");
		for (i = x.length; i; x[--i].style.visibility='visible');
	}
}	
	
//oscura tutto
function obscurateAll (opacitylevel)
{
	//controlla che tutto non sia gi� oscurato da qualcosa
	if (!document.getElementById('layerpop'))
	{
		var layerpop = document.createElement('DIV');
		layerpop.id='layerpop';
		document.body.appendChild(layerpop);
		if (document.getElementById('overlayerLight')) 
			{ 
				document.getElementById('layerpop').className = "overlayerchiaro"; 
			}
				
		//document.body.appendChild(layerpop);
		//imposta l'oscuratore layerpop al massimo dei livelli
		document.getElementById('layerpop').style.zIndex = getNextHighestZindex();

		//imposta l'altezza di layerpop a tutto schermo e appende le funzioni di scrolling e resizing all'oscuratore
		if(navigator.appName != "Microsoft Internet Explorer")
		{ 
			document.getElementById('layerpop').style.height = window.height + 'px'; 
			document.getElementById('layerpop').style.marginTop = getScrollY() + 'px';
		} 
		else 
		{ 
			document.getElementById('layerpop').style.height = getPageHeight() + 'px';  
			document.getElementById('layerpop').style.marginTop = getScrollY() + 'px';
		} 
		
		obscuratescroll = new Function ('document.getElementById(\'layerpop\').style.marginTop = getScrollY() + \'px\';');
		obscurateresize = new Function ('document.getElementById(\'layerpop\').style.height = getPageHeight() + \'px\';');
		
		if (window.attachEvent)
		{
			window.attachEvent("onresize", obscurateresize);
			window.attachEvent("onscroll", obscuratescroll);
		}
		else
		{
			window.addEventListener("scroll",obscuratescroll, false);
			window.addEventListener("DOMMouseScroll", obscuratescroll, false);
			window.addEventListener("resize", obscurateresize, false);
		}		
		
		if (opacitylevel)
		{
			layerpop.style.opacity = opacitylevel/10;
			layerpop.style.filter = 'alpha(opacity=' + opacitylevel * 10 + ')';
		}
	}
}

function unobscurateAll ()
{
	if (window.attachEvent)
	{
		window.detachEvent("onresize",obscurateresize);
		window.detachEvent("onscroll", obscuratescroll);
	}
	else
	{
		window.removeEventListener("scroll", obscuratescroll, false);
		window.removeEventListener("DOMMouseScroll", obscuratescroll, false);
		window.removeEventListener("resize",obscurateresize, false);
	}		
	document.body.removeChild(document.getElementById('layerpop'));
}
	
	
//funzione per aprire overlayer

//funzione che apre un popup con overlayer
//mode = 'fixed' overlayer con margin-top fisso da css
//mode = 'floating' overlayer sempre centrato nella pagina
function openPopOverLayer (idElement, mode, opacitylevel)
{
	if (opacitylevel) {obscurateAll(opacitylevel)}
	else {obscurateAll()}
	
	document.body.insertBefore(document.getElementById(idElement), document.body.getElementsByTagName('div')[0]);
	document.getElementById(idElement).style.display='block';
	
	
	//allocazione funzioni scrolling e resizing
	popfixedalertresize = new Function ('document.getElementById(\''+ idElement + '\').style.marginLeft = Math.round((getPageWidth() - document.getElementById(\''+ idElement + '\').offsetWidth)/2) + \'px\';');
	popalertscroll = new Function ('document.getElementById(\''+ idElement + '\').style.marginTop = getScrollY() + Math.round((getPageHeight() - document.getElementById(\''+ idElement + '\').offsetHeight)/2) + \'px\';');
	popalertresize = new Function ('document.getElementById(\''+ idElement + '\').style.marginLeft = Math.round((getPageWidth() - document.getElementById(\''+ idElement + '\').offsetWidth)/2) + \'px\';document.getElementById(\''+ idElement + '\').style.marginTop = getScrollY() + Math.round((getPageHeight() - document.getElementById(\''+ idElement + '\').offsetHeight)/2) + \'px\';');
	
	//controlla se deve fissare la X o renderla dinamica
	if (mode == 'fixed')
	{
		document.getElementById(idElement).style.marginLeft = Math.round((getPageWidth() - document.getElementById(idElement).offsetWidth)/2) + 'px';
		//riallinea l'oggetto orizzontalmente sul resize
		if (window.attachEvent)
		{
			window.attachEvent("onresize", popfixedalertresize);
		}
		else
		{
			window.addEventListener("resize", popfixedalertresize, false);
		}
	}
	else
	{
		if(document.getElementById(idElement).offsetHeight < getPageHeight ())
		{
			document.getElementById(idElement).style.marginLeft = Math.round((getPageWidth() - document.getElementById(idElement).offsetWidth)/2) + 'px';
			document.getElementById(idElement).style.marginTop = getScrollY() + Math.round((getPageHeight() - document.getElementById(idElement).offsetHeight)/2) + 'px';
			//riallinea l'oggetto sia verticalmente che orizzontalmente
			if (window.attachEvent)
			{
				window.attachEvent("onscroll", popalertscroll);
				window.attachEvent("onresize", popalertresize);
			}
			else
			{
				window.addEventListener("scroll", popalertscroll, false);
				window.addEventListener("resize", popalertresize , false);
			}
		}
		else
		{
			document.getElementById(idElement).style.marginLeft = Math.round((getPageWidth() - document.getElementById(idElement).offsetWidth)/2) + 'px';
			if (getScrollY() + getPageHeight() - document.getElementById(idElement).offsetHeight < 0)
			{
				document.getElementById(idElement).style.marginTop = '0px';
			}
			else
			{
				document.getElementById(idElement).style.marginTop = getScrollY() + getPageHeight() - document.getElementById(idElement).offsetHeight  + 'px';
			}
		}
	}
	arrangeSelect(idElement);
	//Becca lo zIndex dell'overlay coprente
	document.getElementById(idElement).style.zIndex = getNextHighestZindex();
}

//chiude l'overlayer + l'oscuratore
function closePopOverLayer (idElement)
{
	if (window.attachEvent)
		{
			if (popfixedalertresize) window.detachEvent("onresize", popfixedalertresize);
			if (popalertscroll) window.detachEvent("onscroll", popalertscroll);
			if (popalertresize) window.detachEvent("onresize", popalertresize);
		}
		else
		{
			if (popfixedalertresize) window.removeEventListener("resize", popfixedalertresize, false);
			if (popalertscroll) window.removeEventListener("scroll", popalertscroll, false);
			if (popalertresize) window.removeEventListener("resize", popalertresize , false);
		}

	document.getElementById(idElement).style.display='none';
	arrangeSelect();
	unobscurateAll ();
}
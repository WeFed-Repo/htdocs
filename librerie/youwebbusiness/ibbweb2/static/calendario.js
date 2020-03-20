		// ==================== Funzione per la visualizzazione del calendario 06/11/2003 ============================
		
		//   funzione per la gestione del calendario flash
		//   reso compatibile con ie5 e superiori, netscape7, mozilla1.5
		
		//   uso:  showHideFla(inpDate,form,calNum)
		//   dove: inpDate e' il nome dell'input text per la data
		//   dove: form è il nome del form passato dalla pagina chiamante
		//   dove: calNum è' il numero del calendario selezionato
		
		//   created by Lorenzo, Guerrino, Piero

		var objDay;			 // data selezionata nell'oggetto flah calendar
		var nomeform
				
		// ######################## IMPORTANTE #############################
		// NEL FILE XSL CHIAMANTE LA SEGUENTE FUNZIONE GLI ID DEI CALENDARI 
		// DEVONO ESSERE CHIAMATI Cal1, Cal2,...., Cal(n) IN ORDINE CORRETTO
		// #################################################################
		
		/*
			<FUNZIONE label="contaCal">
			<AUTORE>Piero / Lorenzo / Guerrino</AUTORE>
			<COMMENTO>Funzione che conta il numero di oggetti calendario nella pagina.</COMMENTO>
			</FUNZIONE>
		*/
		
		function contaCal(){
			var i = 1;
			while(true) {
				if(document.getElementById('Cal' + i)) i++;
				else break;
			}
			return(i - 1);
		}
		
		/*
			<FUNZIONE label="showHideFla">
			<AUTORE>Piero / Lorenzo / Guerrino</AUTORE>
			<COMMENTO>visualizza o nasconde l'oggetto calendario</COMMENTO>
			<PARAMETRO label="inpDate" DESCRIZIONE=""/>
			<PARAMETRO label="form" DESCRIZIONE=""/>
			<PARAMETRO label="calNum" DESCRIZIONE=""/>
			</FUNZIONE>
		*/		
		
		function showHideFla(inpDate,form,calNum)
		{
			nomeform = form;
			totaleCalendari = contaCal();
			if (inpDate.indexOf('\[')==-1)
			{
				objDate= 'document.' + form + '[\'' + inpDate + '\']';
			}
			else
			{
				//trovo il nome dell'oggetto

				objDate = form + "_" + inpDate.replace(/\./g, "_");
				objDate= objDate.replace(/\[/g, "_");
				objDate= objDate.replace(/\]/g, "_");
			}
			nomeCampo = inpDate;
			// ciclo che va a settare la visibilita' o non dei calendari
			for (i=1; i<=totaleCalendari; i++){
				if (i == calNum){
					document.getElementById('Cal' + i).style.display = 'inline';
				}
				else
				{
					document.getElementById('Cal' + i).style.display = 'none';
				}
			}	
		}
		
		/*
			<FUNZIONE label="Calendar">
			<AUTORE>Piero / Lorenzo / Guerrino</AUTORE>
			<COMMENTO>funzione che riporta la data nell' input text</COMMENTO>
			<PARAMETRO label="year" DESCRIZIONE=""/>
			<PARAMETRO label="month" DESCRIZIONE=""/>
			<PARAMETRO label="day" DESCRIZIONE=""/>
			<PARAMETRO label="status" DESCRIZIONE=""/>
			</FUNZIONE>
		*/		
		
		function Calendar(year,month,day,status)
		{
			totaleCalendari = contaCal();
			
			/*if (objDate.indexOf("bonificoSepa")==-1)
			{
				if (day.substring(0,1)=='0')
				{
					day=day.substring(1,2);
				}
				if (month.substring(0,1)=='0')
				{
					month=month.substring(1,2);
				}
				if (year < 1920)
				{
					year=1920;
				}
			}*/
			if (year < 1920)
				{
					year=1920;
				}
			if (status=="Cancel")
			{
				// ciclo che chiude i calendari nell'evento close del calendario
				for (i=1; i<=totaleCalendari; i++){
					document.getElementById('Cal' + i).style.display = 'none';
				}
			}
			else
			{
				if (!eval(objDate).disabled)
				{
					if (objDate.indexOf("\[")!=-1)
					{
						eval(objDate).value= day + "/" + month + "/" + year;
					}
					else 
					{
						document.getElementById(objDate).value = day + "/" + month + "/" + year;
					}
				}
				
				
								
				// ciclo che chiude i calendari dopo la selezione della data
				for (i=1; i<=totaleCalendari; i++){
					document.getElementById('Cal' + i).style.display = 'none';
				}
				
				// Controllo se nell'Input Text ci sono delle funzioni nell'onchange, se ci sono le faccio chiamare
				var eventoOnChange = eval(objDate).onchange;
				if (eventoOnChange != null)
					eventoOnChange();
			}
		}


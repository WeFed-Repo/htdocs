	// piero bargellini
	// attenzione!!!!!!!
	// il form dei filtri DEVE sempre chiamarsi 'setfilter'
	// !!!!!!!!!!!!!!!!
	
	/*
		<FUNZIONE label="setVisibility">
		<AUTORE>Piero Bargellini</AUTORE>
		<COMMENTO>Nasconde o visualizza i filtri da impostare nell'onload</COMMENTO>
		</FUNZIONE>
	*/	
	
	function setVisibility(){
		if(document.setfilter.filtroVisibilita){
			if(document.setfilter.filtroVisibilita.value == 'false'){
				if(document.all) document.getElementById('filtro').style.display ='none';
				document.setfilter.bottoneFiltro.value = '>> ' + msg_avanzate;
			}else{
				if(document.all) document.getElementById('filtro').style.display ='block';
				document.setfilter.bottoneFiltro.value = '<< ' + msg_avanzate;
			}
		}
	}
	
	/*
		<FUNZIONE label="collaps">
		<AUTORE>Piero Bargellini</AUTORE>
		<COMMENTO>Nasconde o visualizza i filtri da impostare nell'onclick del bottone</COMMENTO>
		</FUNZIONE>
	*/
	
	// nasconde o visualizza i filtri da impostare nell'onclick del bottone
	function collaps(){						
		if(document.getElementById('filtro').style.display =='none'){
			if(document.all) document.getElementById('filtro').style.display = 'block';
			document.setfilter.bottoneFiltro.value= '<< ' + msg_avanzate;
		}else{
			if(document.all) document.getElementById('filtro').style.display = 'none';
			document.setfilter.bottoneFiltro.value = '>> ' + msg_avanzate;
		}
	}
	
	/*
		<FUNZIONE label="setFilterDefined">
		<AUTORE>Piero Bargellini</AUTORE>
		<COMMENTO>Setta il campo filtroVisibilita</COMMENTO>
		</FUNZIONE>
	*/	
	
	function setFilterDefined(){
		var stringField = null;
		var isFilterDefined = document.setfilter.filtroVisibilita;
		isFilterDefined.value = false;
		for(i=0;i<filtri_avanzati.length;i++)
		{
			stringField = "document.setfilter." + filtri_avanzati[i] + ".value";
			if (eval(stringField)!='') isFilterDefined.value = true;
		}
	}
	
	/*
		<FUNZIONE label="setNumRecHidden">
		<AUTORE>Piero Bargellini</AUTORE>
		<COMMENTO>Setta il campo hidden max_items_number col valore del combo selezionato</COMMENTO>
		</FUNZIONE>
	*/	
	
	function setNumRecHidden(){
		document.setfilter.max_items_number.value = document.setfilter.numRows[document.setfilter.numRows.selectedIndex].value;
	}
	
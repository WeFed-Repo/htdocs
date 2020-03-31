function MM_openBrWindow(theURL,winName,features) { //v2.0
  window.open(theURL,winName,features);
}
//---------------------------------------------------------------------
//Funzione che inizializza provincia o stato
function CreaProvincia(Provincia,VarAus,Iniziale,definizione,IndiceInizio) {
var i;
var j = IndiceInizio;
var h = definizione;
for (i in VarAus)
 {
	
	if((VarAus[i][0] == "") || (VarAus[i][1] == ""))
	 {
	  ;
	 }
	 else
	{
	Provincia.options[j] = new Option(VarAus[i][0]);
	Provincia.options[j].value = VarAus[i][1];
    if(VarAus[i][0]==Iniziale)
	  {
	  	h = j;
	  }
    }
	j++;
}
Provincia.options[h].selected = true; 
}
//---------------------------------------------------------------------------------------
function InviaDati(Tipo) { //v2.0
 //Controllo la correttezza dei dati inseriti dall'utente
 
 if (document.FormStato.PStato.options[document.FormStato.PStato.selectedIndex].value == "")
 	{
	 it_alert_error('MSG-00058');
	}
 else
 	{
	if (Tipo == 0) 
        {
	 //Inizializzo i campi della form principale     
	 opener.parent.document.SaveForm.PCodiceStatoNascita.value=VarAusStati[document.FormStato.PStato.selectedIndex-1][1];
	 opener.parent.document.SaveForm.PStatoNascita.value=VarAusStati[document.FormStato.PStato.selectedIndex-1][0];
	 opener.parent.document.SaveForm.PStatoProvNascita.value=VarAusStati[document.FormStato.PStato.selectedIndex-1][0];
	    //ch910: settato a EE
        opener.parent.document.SaveForm.PProvinciaNascita.value="EE";
 		opener.parent.document.SaveForm.PCodiceComuneNascita.value="";
 		opener.parent.document.SaveForm.PNatoA.value="";
 		opener.parent.document.SaveForm.PNatoProvA.value="";
	 
	 window.close();
	} 
        if (Tipo == 1) 
        {
       opener.parent.document.SaveForm.PStatoCit.options[0].value=VarAusStati[document.FormStato.PStato.selectedIndex-1][0];
	   opener.parent.document.SaveForm.PStatoCit.options[0].text=VarAusStati[document.FormStato.PStato.selectedIndex-1][0];
	   opener.parent.document.SaveForm.PStatoCit.options[0].selected=true; 
	   window.close();
	} 
        if (Tipo == 2) 
        {
       opener.parent.document.SaveForm.PNazioneResidenza.options[0].value=VarAusStati[document.FormStato.PStato.selectedIndex-1][0];
	   opener.parent.document.SaveForm.PNazioneResidenza.options[0].text=VarAusStati[document.FormStato.PStato.selectedIndex-1][0];
	   opener.parent.document.SaveForm.PNazioneResidenza.options[0].selected=true; 
	   window.close();
	} 
       if (Tipo == 3) 
       {
       opener.parent.document.SaveForm.PNazioneDomicilio.options[0].value=VarAusStati[document.FormStato.PStato.selectedIndex-1][0];
	   opener.parent.document.SaveForm.PNazioneDomicilio.options[0].text=VarAusStati[document.FormStato.PStato.selectedIndex-1][0];
	   opener.parent.document.SaveForm.PNazioneDomicilio.options[0].selected=true; 
	   window.close();
	   
	} 
        if (Tipo == 4) 
        {
       opener.parent.document.SaveForm.PNazioneAltro.options[0].value=VarAusStati[document.FormStato.PStato.selectedIndex-1][0];
	   opener.parent.document.SaveForm.PNazioneAltro.options[0].text=VarAusStati[document.FormStato.PStato.selectedIndex-1][0];
	   opener.parent.document.SaveForm.PNazioneAltro.options[0].selected=true; 
	   window.close();
	   
	} 
        if (Tipo == 5) 
        {
       opener.parent.document.SaveForm.PStatoDocumento.value=VarAusStati[document.FormStato.PStato.selectedIndex-1][0];
	   opener.parent.document.SaveForm.PStatoProvDocumento.value=VarAusStati[document.FormStato.PStato.selectedIndex-1][0];
	   opener.parent.document.SaveForm.PProvinciaDocumento.value="";
 	   opener.parent.document.SaveForm.PComuneDocumento.value="";
 	   opener.parent.document.SaveForm.PComuneProvDocumento.value="";
	   
	   window.close();
	}     
	if (Tipo == 6)
	{
	 opener.parent.document.SaveForm.PNazioneAltro.value=VarAusStati[document.FormStato.PStato.selectedIndex-1][0];
	 opener.parent.document.SaveForm.PNazioneCorrispondenza.value=VarAusStati[document.FormStato.PStato.selectedIndex-1][0];
	 window.close();
	}   
	if (Tipo == 7)
	{
         opener.parent.document.SaveForm.PNazioneResidenza.value=VarAusStati[document.FormStato.PStato.selectedIndex-1][0];
         if(opener.parent.document.SaveForm.PNazioneValoreResidenza != undefined)
         {
         	opener.parent.document.SaveForm.PNazioneValoreResidenza.value=VarAusStati[document.FormStato.PStato.selectedIndex-1][0];
         }
         window.close();
        } 
  } 
}

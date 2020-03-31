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
//-----------------------------------------------------------------------------------------
function InviaDati(tipo) { //v2.0
 
 if (document.FormComuni.PComune.options[document.FormComuni.PComune.selectedIndex].value == "")
 	{
	 it_alert_error('MSG-00058');
	}
 else
 	{ if (tipo == 0)
 				 {
 		opener.document.SaveForm.PProvinciaNascita.value=VarAusComuni[document.FormComuni.PComune.selectedIndex-1][3];
 		opener.document.SaveForm.PCodiceComuneNascita.value=VarAusComuni[document.FormComuni.PComune.selectedIndex-1][2];
 		opener.document.SaveForm.PNatoA.value=VarAusComuni[document.FormComuni.PComune.selectedIndex-1][1];
 		opener.document.SaveForm.PNatoProvA.value=VarAusComuni[document.FormComuni.PComune.selectedIndex-1][1]+" ("+VarAusComuni[document.FormComuni.PComune.selectedIndex-1][3]+")";
		opener.document.SaveForm.PStatoNascita.value= "ITALIA";
		opener.document.SaveForm.PStatoProvNascita.value= "ITALIA";		
		window.close()		 	
 		}
	  if (tipo == 1) 
         {
 		//Inizializzo i campi della form principale     
 		opener.document.SaveForm.PProvinciaResidenza.value=VarAusComuni[document.FormComuni.PComune.selectedIndex-1][3];
 		opener.document.SaveForm.PCAPResidenza.value=VarAusComuni[document.FormComuni.PComune.selectedIndex-1][2];
 		opener.document.SaveForm.PComuneResidenza.value=VarAusComuni[document.FormComuni.PComune.selectedIndex-1][1];
 		opener.document.SaveForm.PComuneProvResidenza.value=VarAusComuni[document.FormComuni.PComune.selectedIndex-1][1]+" ("+VarAusComuni[document.FormComuni.PComune.selectedIndex-1][3]+")";
		opener.document.SaveForm.PCAPControlloResidenza.value=VarAusComuni[document.FormComuni.PComune.selectedIndex-1][2];
		window.close() 
	 } 
        if (tipo == 2) 
       {
	   opener.document.SaveForm.PProvinciaDomicilio.value=VarAusComuni[document.FormComuni.PComune.selectedIndex-1][3];
 	   opener.document.SaveForm.PCAPDomicilio.value=VarAusComuni[document.FormComuni.PComune.selectedIndex-1][2];
       opener.document.SaveForm.PComuneDomicilio.options[0].value=VarAusComuni[document.FormComuni.PComune.selectedIndex-1][1];
	   opener.document.SaveForm.PComuneDomicilio.options[0].text=VarAusComuni[document.FormComuni.PComune.selectedIndex-1][0];
	   opener.document.SaveForm.PComuneDomicilio.options[0].selected=true; 
	   window.close();
	} 
       if (tipo == 3) 
       {
	    opener.document.SaveForm.PProvinciaAltro.value=VarAusComuni[document.FormComuni.PComune.selectedIndex-1][3];
 		opener.document.SaveForm.PCAPAltro.value=VarAusComuni[document.FormComuni.PComune.selectedIndex-1][2];
 		opener.document.SaveForm.PComuneAltro.value=VarAusComuni[document.FormComuni.PComune.selectedIndex-1][1];
 		opener.document.SaveForm.PComuneProvAltro.value=VarAusComuni[document.FormComuni.PComune.selectedIndex-1][1]+" ("+VarAusComuni[document.FormComuni.PComune.selectedIndex-1][3]+")";
		opener.document.SaveForm.PCAPControlloAltro.value=VarAusComuni[document.FormComuni.PComune.selectedIndex-1][2]; 
	   window.close();
	} 
        if (tipo  == 4) 
        {
	   opener.document.SaveForm.PProvinciaDocumento.value=VarAusComuni[document.FormComuni.PComune.selectedIndex-1][3];
 	   opener.document.SaveForm.PComuneDocumento.value=VarAusComuni[document.FormComuni.PComune.selectedIndex-1][1];
 	   opener.document.SaveForm.PComuneProvDocumento.value=VarAusComuni[document.FormComuni.PComune.selectedIndex-1][1]+" ("+VarAusComuni[document.FormComuni.PComune.selectedIndex-1][3]+")";
	   opener.document.SaveForm.PStatoDocumento.value = "ITALIA";
	   opener.document.SaveForm.PStatoProvDocumento.value = "ITALIA"
		window.close();
	}		
	}
}

//-----------------------------------------------------------------------------
function CreaListaSelect(Provincia,VarAus,Iniziale,definizione,IndiceInizio) {
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
//
//SoloPositivo = 1 --> il numero non puo' essere negativo
//
//SoloPositivo = 2 --> il numero non puo' essere positivo
//
//SoloPositivo = 0 --> il numero puo' essere sia positivo che negativo
//---------------------------------------------------------------------
function ControllaNumeroPuntoVirgola(ParNumero,Massimo,Minimo,SoloPositivo) {
var err = 0;
var numeri = "-+0123456789.,";
var SoloNumeri = "0123456789";
var separatori = ".,";
var separatoreOK = ".";
var temp;
var aus = "";
var NumeroNumeri = 0;
var numeroVirgole = 0;
if (ParNumero != "")
{
  if (Massimo != "")
     if (parseInt(ParNumero)>parseInt(Massimo))
       		 return "ERRORE";
  if (Minimo != "")
        if (parseInt(ParNumero)<parseInt(Minimo))
       		 return "ERRORE"; 
  
  temp = ParNumero.lastIndexOf("+");
  if ( temp != "-1" && temp != "0") 
    	return "ERRORE";
  if (temp != "-1" && SoloPositivo == 2)
	return "ERRORE";
  temp = ParNumero.lastIndexOf("-");
  if ( temp != "-1" && temp != "0") 
    	return "ERRORE";
  if (temp != "-1" && SoloPositivo == 1)
	return "ERRORE";
  if (temp != "0" && SoloPositivo == 2 && ParNumero != 0 )
	return "ERRORE";
  temp = "";
  aus = ParNumero.substring(parseInt(ParNumero.length)-1, parseInt(ParNumero.length)); 
  if (separatori.indexOf(aus) != "-1") 
  		return "ERRORE";
  aus = "";
  for (var i=0; i< ParNumero.length; i++) {
  		temp = "" + ParNumero.substring(i, i+1);  
  		if (numeri.indexOf(temp) == "-1") 
    			return "ERRORE";
                if (NumeroNumeri == 0 && SoloNumeri.indexOf(temp) != "-1") 
    			NumeroNumeri = 1;
  		if (separatori.indexOf(temp) == "-1")  
     			aus = aus + temp;
  		else
    		{
     			aus = aus + separatoreOK;
     			numeroVirgole++;
    		}
   }
   if (NumeroNumeri == 0)
        return "ERRORE";
   if (numeroVirgole > 1)
   		return "ERRORE";
   else
   		return aus;
   
}
else
  return aus;
}
//-------------------------------------------------------------------------
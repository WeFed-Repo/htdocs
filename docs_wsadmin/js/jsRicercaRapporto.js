//Funzione che inizializza provincia o stato
function CreaLista(Provincia,VarAus,Iniziale,definizione,IndiceInizio) {
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
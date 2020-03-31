//-------------------------------------------------------------------------
//Se il CODICE FISCALE contiene ' do errore
function ControllaPresenzaApice(ParStringa) {
var temp;
for (var i=0; i<= ParStringa.length; i++) {
  temp = "" + ParStringa.substring(i, i+1);
  if (temp == "'")
    return 1;
}
return 0;
}
//---------------------------------------------------------------------
function ControllaEmail(ParEmail)
{
var prima;
var ultima;
var dimensione;
var inizio;
var spazi;
var DopoEt;
var PrimaEt;
var speciali;
prima =	ParEmail.indexOf("@");
spazi = ParEmail.indexOf(" ");
  if (prima == -1)
	  return 1;
  //La @ non deve essere la prima lettera

  if (prima == 0)
	 return 1;
  ultima = ParEmail.lastIndexOf("@");
  //Non devono esistere piu' @
  if (prima != ultima)
	return 1;

  if (spazi!= -1)
	  return 1;

  speciali= ParEmail.indexOf("(");
  if (speciali!= -1)
	  return 1;
  speciali= ParEmail.indexOf(")");
  if (speciali!= -1)
	  return 1;
  speciali= ParEmail.indexOf("<");
  if (speciali!= -1)
	  return 1;
  speciali= ParEmail.indexOf(">");
  if (speciali!= -1)
	  return 1;
  speciali= ParEmail.indexOf(",");
  if (speciali!= -1)
	  return 1;
  speciali= ParEmail.indexOf(";");
  if (speciali!= -1)
	  return 1;
  speciali= ParEmail.indexOf(":");
  if (speciali!= -1)
	  return 1;
  speciali= ParEmail.indexOf('"');
  if (speciali!= -1)
	  return 1;

  speciali= ParEmail.indexOf("[");
  if (speciali!= -1)
	  return 1;
  speciali= ParEmail.indexOf("]");
  if (speciali!= -1)
	  return 1;


  //Deve esserci almeno un . dopo @
  dimensione = ParEmail.length;
  inizio = prima + 1;
  PrimaEt = ParEmail.substring(0,prima);
  DopoEt = ParEmail.substring(prima+1,dimensione);

  prima = DopoEt.indexOf(".");
  //Deve esserci almeno una lettera tra @  il .
  if ((prima == 0) || (prima == -1))
	return 1;
  dimensione = DopoEt.length - prima -1;
  //Deve esserci almeno una lettera dopo il .
  if (dimensione == 0)
	return 1;
  return 0;
}
//--------------------------------------------------------------------
function ControllaTelefono(ParTelefono) {
var valido = "0123456789/";
var temp;
var prima;
var ultima;
var dimensione;
var Lettere;
if (ParTelefono.length > 0)
{
	for (var i=0; i<= ParTelefono.length; i++)
	{
	  temp = "" + ParTelefono.substring(i, i+1);
	  if (valido.indexOf(temp) == "-1")
	    return 1;
	 }
	prima =	ParTelefono.indexOf("/");
	/*
		Non obbligo più l'utente ha inserire lo / nel numero di telefono
		if (prima == -1)
		{
		  return 1;
		}
		else
		{
	*/
		  if ((prima == 0) || (prima == 1))   return 1;
		  /*
		  --Non è piu' obbligatorio che un numero di telefono inizi con lo zero
		  Lettere = ParTelefono.indexOf("0");
		  if (Lettere != 0) return 1;
		  */
		  dimensione = ParTelefono.length - prima -1;
		  if (dimensione == 0)  return 1;
		  return 0;
	//}
}
return 0;
}
//---------------------------------------------------------------------

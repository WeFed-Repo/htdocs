//ch 910---------------------------------------------------------------------
//serve per eliminarele lettere accentate-----------------------------------

function checkAccenti(campo){
	
		var s = campo.value;
		var s1 = "";
		var accento="'";
		for (i = 0; i < s.length; i++) {
		    var carattere = s.charCodeAt(i);
			switch(carattere) { 
				case 192 : s1=s1+ 'A' + accento; break;
				case 193 : s1=s1+ 'A' + accento; break;
				case 200 : s1=s1+ 'E' + accento; break;
				case 201 : s1=s1+ 'E' + accento; break;
				case 204 : s1=s1+ 'I' + accento; break;
				case 205 : s1=s1+ 'I' + accento; break;
				case 210 : s1=s1+ 'O' + accento; break;
				case 211 : s1=s1+ 'O' + accento; break;
				case 217 : s1=s1+ 'U' + accento; break;
				case 218 : s1=s1+ 'U' + accento; break;
				case 224 : s1=s1+ 'a' + accento; break;
				case 225 : s1=s1+ 'a' + accento; break;
				case 232 : s1=s1+ 'e' + accento; break;
				case 233 : s1=s1+ 'e' + accento; break;
				case 236 : s1=s1+ 'i' + accento; break;
				case 237 : s1=s1+ 'i' + accento; break;
				case 242 : s1=s1+ 'o' + accento; break;
				case 243 : s1=s1+ 'o' + accento; break;
				case 249 : s1=s1+ 'u' + accento; break;
				case 250 : s1=s1+ 'u' + accento; break;
				case 186 : s1=s1+ " "; break;
				case 176 : s1=s1+ " "; break;
				case 167 : s1=s1+ " "; break;
				case 248 : s1=s1+ " "; break;

				default : s1=s1+s.charAt(i); ;
			}
		
		}
		campo.value=s1;
	}


function trim(stringa){    
	while (stringa.substring(0,1) == ' ') {        
		stringa = stringa.substring(1, stringa.length);
    }    
    while (stringa.substring(stringa.length-1, stringa.length) == ' ') {        
    	stringa = stringa.substring(0,stringa.length-1);    
    }    
    return stringa;
}


//Controllo la correttezza dei dati inseriti dall'utente
//-------------------------------------------------------------------------------
function NonDisponibile(Tipo) { //v2.0
 it_alert_error('MSG-00132');
 document.SaveForm.PConsenso1[0].checked=true;
}

//---------------------------------------------------------------------
//--questa funzione se il codice fiscale è errato non permette di proseguire
//-- se si modifica questa modifcare anche l'altra:InviaDatiSenzaBloccoCodFisc
function InviaDati(DataOggi,VettoreRelEntiTipi,PuoModificareDatiSoggetto) { //v2.0

 //Creo le date in funzione del giorno, mese, anno indicati dall'utente
 document.SaveForm.PDataNascita.value =  document.SaveForm.PGiornoNascita.value + "/" + document.SaveForm.PMeseNascita.value + "/" + document.SaveForm.PAnnoNascita.value;



 document.SaveForm.PDataDocumento.value =  document.SaveForm.PGiornoDocumento.value + "/" + document.SaveForm.PMeseDocumento.value + "/"  + document.SaveForm.PAnnoDocumento.value;






var OK = 1;
//Controllo se l'utente ha inserito tutti i campi obbligatori
if (OK == 1)
{
 if (document.SaveForm.PNome.value == "")
    {           it_alert_error('MSG-00012');

		document.SaveForm.PNome.focus();
		OK = 0;
	}
}

if (OK == 1)
{
 if (document.SaveForm.PCognome.value == "")
    {

                it_alert_error('MSG-00012');
		document.SaveForm.PCognome.focus();
		OK = 0;
	}
}



if (OK == 1)
{
 if (document.SaveForm.PStatoNascita.value == "")
     {

                alert(it_text_error('MSG-00012')+' - stato di nascita');
		//document.SaveForm.PStatoNascita.focus();
		OK = 0;
	}
}

if (OK == 1)
{
 if (ControlloCodiceNascita() == 0 && PuoModificareDatiSoggetto == "Y")
      {
                it_alert_error('MSG-00198');
		//document.SaveForm.PComuneNascita.focus();
		OK = 0;
	}
}

if (OK == 1)
{
 if ((document.SaveForm.PGiornoNascita.value == "") ||      (document.SaveForm.PMeseNascita.value == "") ||
	 (document.SaveForm.PAnnoNascita.value == ""))
     {
	 	it_alert_error('MSG-00012');
		document.SaveForm.PGiornoNascita.focus();
		OK = 0;
	}
}

if (OK == 1)
{
 if (PuoModificareDatiSoggetto == "Y")
 {
	 if (document.SaveForm.PSesso.selectedIndex == 0)
	     {
		 	it_alert_error('MSG-00012');
			document.SaveForm.PSesso.focus();
			OK = 0;
		}
 }
 else
 {
 	if (document.SaveForm.PSesso.value == "")
	     {
		 	it_alert_error('MSG-00012');
			OK = 0;
		}
 }
}

if (OK == 1)
{
 if (PuoModificareDatiSoggetto == "Y")
 {
	if (document.SaveForm.PStatoCivile.selectedIndex == 0)
	{
		it_alert_error('MSG-00012');
		document.SaveForm.PStatoCivile.focus();
		OK = 0;
	}
 }
 else
 {
 	if (document.SaveForm.PStatoCivile.value == "")
	{
		it_alert_error('MSG-00012');
		OK = 0;
	}
 }
}


if (OK == 1)
{
 if (document.SaveForm.PCodFiscale.value == "")
     {
	 	it_alert_error('MSG-00012');
		document.SaveForm.PCodFiscale.focus();
		OK = 0;
	}
}

if (OK == 1)
{
 if (document.SaveForm.PIndirizzoResidenza.value == "")
     {
	 	it_alert_error('MSG-00012');
		document.SaveForm.PIndirizzoResidenza.focus();
		OK = 0;
	}
}



if (OK == 1)
{
 if (document.SaveForm.PComuneResidenza.value == "")
     {
	 	alert(it_text_error('MSG-00012')+" - comune residenza");
		//document.SaveForm.PComuneResidenza.focus();
		OK = 0;
	}
}

if (OK == 1)
{
 if (document.SaveForm.PCAPResidenza.value == "")
     {
	 	it_alert_error('MSG-00012');
		document.SaveForm.PCAPResidenza.focus();
		OK = 0;
	}
}

if (OK == 1)
{
 if (document.SaveForm.PIndirizzoAltro.value == "")
     {
	 	it_alert_error('MSG-00012');
		document.SaveForm.PIndirizzoAltro.focus();
		OK = 0;
	}
}

if (OK == 1)
{
 if (document.SaveForm.PComuneAltro.value == "")
     {
	 	alert(it_text_error('MSG-00012')+" - comune corrispondenza");
		//document.SaveForm.PComuneAltro.focus();
		OK = 0;
	}
}

if (OK == 1)
{
 if (document.SaveForm.PCAPAltro.value == "")
     {
	 	it_alert_error('MSG-00012');
		document.SaveForm.PCAPAltro.focus();
		OK = 0;
	}
}

if (OK == 1)
{
 if (document.SaveForm.PEMail.value == "")
     {
	 	it_alert_error('MSG-00012');
		document.SaveForm.PEMail.focus();
		OK = 0;
	}
}

if (OK == 1)
{
 if ( (document.SaveForm.PTelefonoAbitazione.value == "") &&
	  (document.SaveForm.PTelefonoUfficio.value == "") && (document.SaveForm.PTelefonoCellulare.value == "") )
     {
	 	it_alert_error('MSG-00012');
		document.SaveForm.PTelefonoAbitazione.focus();
		OK = 0;
	}
}

if (OK == 1)
{
 if ((document.SaveForm.PGiornoDocumento.value == "") ||      (document.SaveForm.PMeseDocumento.value == "") ||
	 (document.SaveForm.PAnnoDocumento.value == ""))
     {
	 	it_alert_error('MSG-00012');
		document.SaveForm.PGiornoDocumento.focus();
		OK = 0;
	}
}


if (OK == 1)
{
 if (
     (ControllaNumero(document.SaveForm.PGiornoNascita.value)==1) ||
     (ControllaNumero(document.SaveForm.PMeseNascita.value)==1) ||
     (ControllaNumero(document.SaveForm.PAnnoNascita.value)==1) ||
     (document.SaveForm.PAnnoNascita.value.length!=4) ||
     (checkdate1(document.SaveForm.PGiornoNascita.value,document.SaveForm.PMeseNascita.value,document.SaveForm.PAnnoNascita.value)==1)
	 )
      {
	 	it_alert_error('MSG-00022');
		document.SaveForm.PGiornoNascita.focus();
		OK = 0;
	}
}

if (OK == 1)
{
 if (
     (ControllaNumero(document.SaveForm.PGiornoDocumento.value)==1) ||
     (ControllaNumero(document.SaveForm.PMeseDocumento.value)==1) ||
     (ControllaNumero(document.SaveForm.PAnnoDocumento.value)==1) ||
     (document.SaveForm.PAnnoDocumento.value.length!=4) ||
     (checkdate1(document.SaveForm.PGiornoDocumento.value,document.SaveForm.PMeseDocumento.value,document.SaveForm.PAnnoDocumento.value)==1)
	 )
      {
	 	it_alert_error('MSG-00022');
		document.SaveForm.PGiornoDocumento.focus();
		OK = 0;
	}
}

//Determino se la data del documento ? o non ? maggiore della data di oggi


var DataDocumento;
//Creo la data documento come YYYYMMDD
if(document.SaveForm.PGiornoDocumento.value.length == 1)
{
	if(document.SaveForm.PMeseDocumento.value.length == 1)
	{
DataDocumento=document.SaveForm.PAnnoDocumento.value+'0'+document.SaveForm.PMeseDocumento.value+'0'+document.SaveForm.PGiornoDocumento.value;
	}
	else
	{
DataDocumento=document.SaveForm.PAnnoDocumento.value+document.SaveForm.PMeseDocumento.value+'0'+document.SaveForm.PGiornoDocumento.value;
	}
}
else
{
	if(document.SaveForm.PMeseDocumento.value.length == 1)
	{
DataDocumento=document.SaveForm.PAnnoDocumento.value+'0'+document.SaveForm.PMeseDocumento.value+document.SaveForm.PGiornoDocumento.value;
	}
	else
	{
DataDocumento=document.SaveForm.PAnnoDocumento.value+document.SaveForm.PMeseDocumento.value+document.SaveForm.PGiornoDocumento.value;
	}
}
if (OK == 1)
{
 if ( DataDocumento > DataOggi  )
     {
	 	it_alert_error('MSG-00050');
		document.SaveForm.PGiornoDocumento.focus();
		OK = 0;
	}
}



//Determino se la data di nascita ? o non ? maggiore della data di oggi


var DataNascita;
//Creo la data documento come YYYYMMDD
if(document.SaveForm.PGiornoNascita.value.length == 1)
{
	if(document.SaveForm.PMeseNascita.value.length == 1)
	{
DataNascita=document.SaveForm.PAnnoNascita.value+'0'+document.SaveForm.PMeseNascita.value+'0'+document.SaveForm.PGiornoNascita.value;
	}
	else
	{
DataNascita=document.SaveForm.PAnnoNascita.value+document.SaveForm.PMeseNascita.value+'0'+document.SaveForm.PGiornoNascita.value;
	}
}
else
{
	if(document.SaveForm.PMeseNascita.value.length == 1)
	{
DataNascita=document.SaveForm.PAnnoNascita.value+'0'+document.SaveForm.PMeseNascita.value+document.SaveForm.PGiornoNascita.value;
	}
	else
	{
DataNascita=document.SaveForm.PAnnoNascita.value+document.SaveForm.PMeseNascita.value+document.SaveForm.PGiornoNascita.value;
	}
}
if (OK == 1)
{
 if ( DataNascita > DataOggi  )
     {
	 	it_alert_error('MSG-00050');

		document.SaveForm.PGiornoNascita.focus();
		OK = 0;
	}
}


//Determino dalla data di nascita se ? o non ? maggiorenne


var DataNascitaPiu18;
var MeseNascitaPiu18;
AnnoNascitaPiu18 = parseInt(document.SaveForm.PAnnoNascita.value) + 18;
//Creo la data documento come YYYYMMDD
if(document.SaveForm.PGiornoNascita.value.length == 1)
{
	if(document.SaveForm.PMeseNascita.value.length == 1)
	{
DataNascitaPiu18=AnnoNascitaPiu18+'0'+document.SaveForm.PMeseNascita.value+'0'+document.SaveForm.PGiornoNascita.value;
	}
	else
	{
DataNascitaPiu18=AnnoNascitaPiu18+document.SaveForm.PMeseNascita.value+'0'+document.SaveForm.PGiornoNascita.value;
	}
}
else
{
	if(document.SaveForm.PMeseNascita.value.length == 1)
	{
DataNascitaPiu18=AnnoNascitaPiu18+'0'+document.SaveForm.PMeseNascita.value+document.SaveForm.PGiornoNascita.value;
	}
	else
	{
DataNascitaPiu18=AnnoNascitaPiu18+document.SaveForm.PMeseNascita.value+document.SaveForm.PGiornoNascita.value;
	}
}




if (OK == 1)
{
 if ( DataNascitaPiu18 > DataOggi  )
     {
	 	it_alert_error('MSG-00079');
                document.SaveForm.PGiornoNascita.focus();
		OK = 0;
	}
}


//Determino se la data del documento ? o non ? maggiore della data di nascita

if (OK == 1)
{
 if ( DataNascita > DataDocumento  )
     {
	 	it_alert_error('MSG-00068');
		document.SaveForm.PGiornoDocumento.focus();
		OK = 0;
	}
}

if (OK == 1)
{
 if (document.SaveForm.PNumeroDocumento.value == "")
     {
	 	it_alert_error('MSG-00012');
		document.SaveForm.PNumeroDocumento.focus();
		OK = 0;
	}
}

if (OK == 1)
{
//Controllo la corrispondensa TIPO DOCUMENTO - ENTE DOCUMENTO
var i;
var EsisteLegame = 0;
for (i in VettoreRelEntiTipi)
 {
  if(
    (VettoreRelEntiTipi[i][0] == document.SaveForm.PTipoDocumento.options[document.SaveForm.PTipoDocumento.selectedIndex].value)
      &&
    (VettoreRelEntiTipi[i][1] == document.SaveForm.PEnteDocumento.options[document.SaveForm.PEnteDocumento.selectedIndex].value)
    )
	 {
	  	EsisteLegame = 1;
	 }


}
if ( EsisteLegame == 1 )
      {

		OK = 1;
	}
 else
 	{
                it_alert_error('MSG-00049');
		document.SaveForm.PEnteDocumento.focus();
		OK = 0;
	}
}

if (OK == 1)
{
 if (document.SaveForm.PStatoDocumento.value == "")
      {
	 	alert(it_text_error('MSG-00012')+' - stato documento');
		//document.SaveForm.PStatoDocumento.focus();
		OK = 0;
	}
}

if (OK == 1)
{
 if (
      (document.SaveForm.PStatoDocumento.value == "ITALIA" && document.SaveForm.PComuneDocumento.value == "") ||
	  (document.SaveForm.PStatoDocumento.value != "ITALIA" && document.SaveForm.PComuneDocumento.value != "")
	)
      {
	 	it_alert_error('MSG-00035');
		//document.SaveForm.PComuneDocumento.focus();
		OK = 0;
	}
}



//if (OK == 1)
//{
// if (
//    ((document.SaveForm.PCittadinanza[0].checked == true) && (document.SaveForm.PStatoCit.selectedIndex == 0)) ||
//    ((document.SaveForm.PCittadinanza[1].checked == true) && (document.SaveForm.PStatoCit.selectedIndex == 1))
//	)
//      {
//	 	alert(messaggio[17]);
//		document.SaveForm.PStatoCit.focus();
//		OK = 0;
//	}
//}

if (OK == 1)
{
 if (PuoModificareDatiSoggetto == "Y")
 {
	 if (
	    document.SaveForm.PStatoCit.options[document.SaveForm.PStatoCit.selectedIndex].value == ""
		)
	      {
		 	 it_alert_error('MSG-00012');
			document.SaveForm.PStatoCit.focus();
			OK = 0;
		}
 }
 else
 {
 	 if (
	    document.SaveForm.PStatoCit.value == ""
		)
	      {
		 	it_alert_error('MSG-00012');
			OK = 0;
		}
 }
}

if (OK == 1)
{
 if (ControllaEmail(document.SaveForm.PEMail.value)==1)
      {
	 	it_alert_error('MSG-00020');
		document.SaveForm.PEMail.focus();
		OK = 0;
	}
}

if (OK == 1)
{
 if (ControllaTelefono(document.SaveForm.PTelefonoAbitazione.value)== 1)
      {
	 	it_alert_error('MSG-00021');
		document.SaveForm.PTelefonoAbitazione.focus();
		OK = 0;
	}
}

if (OK == 1)
{
 if (ControllaTelefono(document.SaveForm.PTelefonoUfficio.value)==1)
      {
	 	it_alert_error('MSG-00021');
		document.SaveForm.PTelefonoUfficio.focus();
		OK = 0;
	}
}

if (OK == 1)
{
 if (ControllaTelefono(document.SaveForm.PTelefonoCellulare.value)==1)
      {
	 	it_alert_error('MSG-00021');
		document.SaveForm.PTelefonoCellulare.focus();
		OK = 0;
	}
}

if (OK == 1)
{
 if (ControllaTelefono(document.SaveForm.PFax.value)==1)
      {
	 	it_alert_error('MSG-00021');
		document.SaveForm.PFax.focus();
		OK = 0;
	}
}




if (OK == 1)
{
 if (
      (ControllaNumero(document.SaveForm.PCAPResidenza.value) == 1) ||
      (document.SaveForm.PCAPResidenza.value.length != 5)
    )
   {
	 	it_alert_error('MSG-00036');
		document.SaveForm.PCAPResidenza.focus();
		OK = 0;
	}
}

if (OK == 1)
{
var Aus;
var Aus1;
var Aus2;
var Aus3;
Aus = document.SaveForm.PCAPResidenza.value.substring(0,1);
Aus1 = document.SaveForm.PCAPResidenza.value.substring(1,2);
Aus2 = document.SaveForm.PCAPControlloResidenza.value.substring(0,1);
Aus3 = document.SaveForm.PCAPControlloResidenza.value.substring(1,2);
if (
 (Aus != Aus2) || (Aus1 != Aus3)
  )
      {
	 	it_alert_error('MSG-00052');
		document.SaveForm.PCAPResidenza.focus();
		OK = 0;
	}
}

if (OK == 1)
{
 if (
      (ControllaNumero(document.SaveForm.PCAPAltro.value) == 1)  ||
      (document.SaveForm.PCAPAltro.value.length != 5)
    )

      {
	 	it_alert_error('MSG-00036');
		document.SaveForm.PCAPAltro.focus();
		OK = 0;
	}
}

if (OK == 1)
{
var Aus;
var Aus1;
var Aus2;
var Aus3;
Aus = document.SaveForm.PCAPAltro.value.substring(0,1);
Aus1 = document.SaveForm.PCAPAltro.value.substring(1,2);
Aus2 = document.SaveForm.PCAPControlloAltro.value.substring(0,1);
Aus3 = document.SaveForm.PCAPControlloAltro.value.substring(1,2);
if (
 (Aus != Aus2) || (Aus1 != Aus3)
  )
      {
	 	it_alert_error('MSG-00052');
		document.SaveForm.PCAPAltro.focus();
		OK = 0;
	}
}






if (OK == 1)
{
 if (document.SaveForm.PCodFiscale.value.length != 16)

      {
	 	it_alert_error('MSG-00042');
		document.SaveForm.PCodFiscale.focus();
		OK = 0;
	}
}

if (OK == 1)
{
 if (controllaAlfanumerico(document.SaveForm.PNumeroDocumento.value) == 1)

      {
	 	it_alert_error('MSG-00045');
		document.SaveForm.PNumeroDocumento.focus();
		OK = 0;
	}
}

if (OK == 1)
{
  if (ControllaPresenzaApice(document.SaveForm.PCodFiscale.value.toUpperCase())==1)
   {
     it_alert_error('MSG-00066');
     OK = 0;
     document.SaveForm.PCodFiscale.focus();
   }
}





if (OK == 1)
{
  if (testCodiceFiscale(document.SaveForm.PCodFiscale.value.toUpperCase())==true)
	{

      OK = 1;
      }
   else
    {
     it_alert_error('MSG-00066');
     OK = 0;
     document.SaveForm.PCodFiscale.focus();
    }
}




document.SaveForm.PCodFiscale.value = document.SaveForm.PCodFiscale.value.toUpperCase();
document.SaveForm.PNome.value = document.SaveForm.PNome.value.toUpperCase();
document.SaveForm.PCognome.value = document.SaveForm.PCognome.value.toUpperCase();




if (OK == 1)
{
//Controllo il campo cognome
var CodiceFiscaleOK = 0;
var StringaErroreCodiceFiscale = "Errore: \n\r";
var Ritorno;
var Cognome1 = calcolaCognome(document.SaveForm.PCognome.value);
var Cognome2 = document.SaveForm.PCodFiscale.value.substring(0,3);
if (Cognome1 != Cognome2)
{
	CodiceFiscaleOK = 1;
        StringaErroreCodiceFiscale = StringaErroreCodiceFiscale+' '+it_text_error('MSG-00142')+'\n\r';
}
//Controllo il campo cognome
var Nome1 = calcolaNome(document.SaveForm.PNome.value);
var Nome2 = document.SaveForm.PCodFiscale.value.substring(3,6);
if (Nome1 != Nome2)
{
	CodiceFiscaleOK = 1;
        StringaErroreCodiceFiscale = StringaErroreCodiceFiscale+' '+it_text_error('MSG-00143')+'\n\r';
}

//ch 910
//Controllo il campo del comune di nascita
if (OK == 1)
{

	var codiceCitta1 = document.SaveForm.PCodFiscale.value.substring(11,15);
	var codiceCitta2 = document.SaveForm.PCodiceComuneNascita.value;
	if (codiceCitta2 != 'EE'){
		if (codiceCitta1 != codiceCitta2) {
			CodiceFiscaleOK = 1;
        	StringaErroreCodiceFiscale = StringaErroreCodiceFiscale+' '+it_text_error('MSG-00224')+'\n\r';
		}
	}
}

//Controllo il campo data di nascita e sesso
if (PuoModificareDatiSoggetto == "Y")
 {
var Giorno1 = calcolaGiorno(document.SaveForm.PGiornoNascita.value,document.SaveForm.PSesso[document.SaveForm.PSesso.selectedIndex].value);
 }
else
 {
var Giorno1 = calcolaGiorno(document.SaveForm.PGiornoNascita.value,document.SaveForm.PSesso.value);
 }
var Giorno2 = document.SaveForm.PCodFiscale.value.substring(9,11);
var Mese1 = calcolaMese(document.SaveForm.PMeseNascita.value);
var Mese2 = document.SaveForm.PCodFiscale.value.substring(8,9);
var Anno1 = calcolaAnno(document.SaveForm.PAnnoNascita.value);
var Anno2 = document.SaveForm.PCodFiscale.value.substring(6,8);
if ((Giorno1 != Giorno2) || (Mese1 != Mese2) || (Anno1 != Anno2))
{
	CodiceFiscaleOK = 1;
	StringaErroreCodiceFiscale = StringaErroreCodiceFiscale+' '+it_text_error('MSG-00144')+'\n\r';
}
if (CodiceFiscaleOK == 1)
{
	//ch910 inibita la forzatura
	/* Ritorno=confirm(StringaErroreCodiceFiscale+' '+it_text_error('MSG-00145'));
        if (Ritorno == false)
         {
		OK = 0;
         }
    */
    OK = 0;
    alert(StringaErroreCodiceFiscale+' '+it_text_error('MSG-00225'));
}
}


//------------------------CONTROLLO LA BANCA PRESSO CUI HAI IL CONTO-------------------------
if (OK == 1 && document.SaveForm.TipoRapporto.value == "A")
{
 if (	document.SaveForm.PBancaContoIntesaPreesistente[document.SaveForm.PBancaContoIntesaPreesistente.selectedIndex].value == "" &&
 		document.SaveForm.PContoIntesaPreesistente[1].checked == true )
    {
    	it_alert_error('MSG-00185');
    	document.SaveForm.PBancaContoIntesaPreesistente.focus();
	 	OK = 0;
	}
}
//------------------FINE CONTROLLO LA BANCA PRESSO CUI HAI IL CONTO----------------------------






//Controllo il trattamento dei dati personali dell'utente
if (OK == 1) {
	if (
	     ((document.SaveForm.PLettoDati[0].checked  != true) && (document.SaveForm.PLettoDati[1].checked  != true))  ||
		 ((document.SaveForm.PPrivacy_E3[0].checked != true) && (document.SaveForm.PPrivacy_E3[1].checked != true)) ||
		 ((document.SaveForm.PPrivacy_E4[0].checked != true) && (document.SaveForm.PPrivacy_E4[1].checked != true)) ||
		 ((document.SaveForm.PPrivacy_F1[0].checked != true) && (document.SaveForm.PPrivacy_F1[1].checked != true)) ||
		 ((document.SaveForm.PPrivacy_F2[0].checked != true) && (document.SaveForm.PPrivacy_F2[1].checked != true))
	  )
     {
	   alert(it_text_error('MSG-00012')+' ('+it_text_error('MSG-00054')+')');
	   OK = 0;
	  }
}

//Altre informazioni
if (OK == 1)
 {
	if 	(document.SaveForm.PTitoloStudio.value == "")
	{
	  document.SaveForm.PTitoloStudio.value = document.SaveForm.PTitoloStudioL[document.SaveForm.PTitoloStudioL.selectedIndex].text;
    }

 }




if	(OK == 1)
{
 if (
     ((document.SaveForm.PProfessioneT.value != "") &&
      (document.SaveForm.PProfessioneL.selectedIndex != 0) &&
	  (document.SaveForm.PProfessioneL.selectedIndex != 6))
	 )
	{
      it_alert_error('MSG-00019');
	  OK = 0;

	  document.SaveForm.PProfessioneT.focus();
   }
  else
  {
   	if 	((document.SaveForm.PProfessioneT.value != "") )
	{
       document.SaveForm.PProfessione.value = document.SaveForm.PProfessioneT.value;
    }
	if 	((document.SaveForm.PProfessione.value == "") )
	{
	  document.SaveForm.PProfessione.value = document.SaveForm.PProfessioneL[document.SaveForm.PProfessioneL.selectedIndex].text;
    }
 }
}

if (OK == 1)
 {
 	if ((document.SaveForm.PProfessioneL.selectedIndex == 6)
 	     && trim(document.SaveForm.PProfessioneT.value) == "")
 	     {
 	     	it_alert_error('MSG-00240');
 	     	OK = 0;
	  		document.SaveForm.PProfessioneT.focus();
 	     }
 }
 
 
if	(OK == 1)
{
 if (
     ((document.SaveForm.PQualificaT.value != "") &&
      (document.SaveForm.PQualificaL.selectedIndex != 0) &&
	  (document.SaveForm.PQualificaL.selectedIndex != 7))
	 )
	{
	  OK = 0;
      it_alert_error('MSG-00019');
	  document.SaveForm.PQualificaT.focus();

    }
  else
  {
   	if 	((document.SaveForm.PQualificaT.value != "") )
	{
       document.SaveForm.PQualifica.value = document.SaveForm.PQualificaT.value;
    }
	if 	((document.SaveForm.PQualifica.value == "") )
	{
	  document.SaveForm.PQualifica.value = document.SaveForm.PQualificaL[document.SaveForm.PQualificaL.selectedIndex].text;
    }
 }
}

if (OK == 1)
 {
 	if ((document.SaveForm.PQualificaL.selectedIndex == 7)
 	     && trim(document.SaveForm.PQualificaT.value) == "")
 	     {
 	     	it_alert_error('MSG-00240');
 	     	OK = 0;
	  		document.SaveForm.PQualificaT.focus();
 	     }
 }

if	(OK == 1)
{
 if (
     ((document.SaveForm.POriginePatrimonioT.value != "") &&
      (document.SaveForm.POriginePatrimonioL.selectedIndex != 0) &&
	  (document.SaveForm.POriginePatrimonioL.selectedIndex != 5))
	 )
	{
      it_alert_error('MSG-00019');
	  OK = 0;

	  document.SaveForm.POriginePatrimonioT.focus();
   }
  else
  {
   	if 	((document.SaveForm.POriginePatrimonioT.value != "") )
	{
       document.SaveForm.POriginePatrimonio.value = document.SaveForm.POriginePatrimonioT.value;
    }
	if 	((document.SaveForm.POriginePatrimonio.value == "") )
	{
	  document.SaveForm.POriginePatrimonio.value = document.SaveForm.POriginePatrimonioL[document.SaveForm.POriginePatrimonioL.selectedIndex].text;
    }
 }
}



if (OK == 1)
 {
	if 	(document.SaveForm.PFunzioneAziendale.value == "")
	{
	  document.SaveForm.PFunzioneAziendale.value = document.SaveForm.PFunzioneAziendaleL[document.SaveForm.PFunzioneAziendaleL.selectedIndex].text;
    }

 }




if	(OK == 1)
{
 if (
     ((document.SaveForm.PSettoreT.value != "") &&
      (document.SaveForm.PSettoreL.selectedIndex != 0) &&
	  (document.SaveForm.PSettoreL.selectedIndex != 16))
	 )
	{
      it_alert_error('MSG-00019');
	  OK = 0;
	  document.SaveForm.PSettoreT.focus();

    }
  else
  {
   	if 	((document.SaveForm.PSettoreT.value != "") )
	{
       document.SaveForm.PSettore.value = document.SaveForm.PSettoreT.value;
    }
	if 	((document.SaveForm.PSettore.value == "") )
	{
	  document.SaveForm.PSettore.value = document.SaveForm.PSettoreL[document.SaveForm.PSettoreL.selectedIndex].text;
    }
 }
}

if (OK == 1)
 {
 	if ((document.SaveForm.PSettoreL.selectedIndex == 16)
 	     && trim(document.SaveForm.PSettoreT.value) == "")
 	     {
 	     	it_alert_error('MSG-00240');
 	     	OK = 0;
	  		document.SaveForm.PSettoreT.focus();
 	     }
 }

 if (OK == 1)
 {
	if 	(document.SaveForm.PRedditoAnnuo.value == "")
	{
	  document.SaveForm.PRedditoAnnuo.value = document.SaveForm.PRedditoAnnuoL[document.SaveForm.PRedditoAnnuoL.selectedIndex].text;
    }

 }

if (OK == 1)
 {
	if 	((document.SaveForm.PConosciutoItrade.value == "") )
	{
	  document.SaveForm.PConosciutoItrade.value = document.SaveForm.PConosciutoItradeL[document.SaveForm.PConosciutoItradeL.selectedIndex].text;
    }

 }


 if (OK == 1)
 {
  if (document.SaveForm.PProfessione.value == "")
  {
      it_alert_error('MSG-00012');
	  OK = 0;
	  document.SaveForm.PProfessioneL.focus();

  }
 }

if (OK == 1)
 {
  if (document.SaveForm.PQualifica.value == "")
  {
      it_alert_error('MSG-00012');
	  OK = 0;
	  document.SaveForm.PQualificaL.focus();

  }
 }

 if (OK == 1)
 {
  if (document.SaveForm.PSettore.value == "")
  {
      it_alert_error('MSG-00012');
	  OK = 0;
	  document.SaveForm.PSettoreL.focus();

  }
 }

 if (OK == 1)
 {
  if (document.SaveForm.PRedditoAnnuo.value == "")
  {
      it_alert_error('MSG-00012');
	  OK = 0;
	  document.SaveForm.PRedditoAnnuoL.focus();

  }
 }
 
 if (OK == 1)
 {
  if (document.SaveForm.PConosciutoItrade.value == "")
  {
      it_alert_error('MSG-00012');
	  OK = 0;
	  document.SaveForm.PConosciutoItradeL.focus();

  }
 }



//-----------CONTROLLO I DATI RELATIVI ALLO SCOPO E NATURA DEL RAPPORTO ---------------------------------

if	(OK == 1)
{
 if (
     ((document.SaveForm.PScopoNaturaRapportoT.value != "") &&
      (document.SaveForm.PScopoNaturaRapportoL.selectedIndex != 0) &&
	  (document.SaveForm.PScopoNaturaRapportoL.selectedIndex != 3))
	 )
	{
      it_alert_error('MSG-00019');
	  OK = 0;

	  document.SaveForm.PScopoNaturaRapportoT.focus();
   }
  else
  {
   	if 	((document.SaveForm.PScopoNaturaRapportoT.value != "") )
	{
       document.SaveForm.PScopoNaturaRapporto.value = document.SaveForm.PScopoNaturaRapportoT.value;
    }
	if 	((document.SaveForm.PScopoNaturaRapporto.value == "") )
	{
	  document.SaveForm.PScopoNaturaRapporto.value = document.SaveForm.PScopoNaturaRapportoL[document.SaveForm.PScopoNaturaRapportoL.selectedIndex].text;
    }
 }
}

 if (OK == 1)
 {
  if (document.SaveForm.PScopoNaturaRapporto.value == "")
  {
      it_alert_error('MSG-00012');
	  OK = 0;
	  document.SaveForm.PScopoNaturaRapportoL.focus();

  }
 }

if (OK == 1)
 {
 	if ((document.SaveForm.PScopoNaturaRapportoL.selectedIndex == 3)
 	     && trim(document.SaveForm.PScopoNaturaRapportoT.value) == "")
 	     {
 	     	it_alert_error('MSG-00240');
 	     	OK = 0;
	  		document.SaveForm.PScopoNaturaRapportoT.focus();
 	     }
 }

//-----------FINE CONTROLLO I DATI RELATIVI ALLO SCOPO E NATURA DEL RAPPORTO ----------------------------





//Password




 if (PuoModificareDatiSoggetto == "Y") {
if (OK == 1)
{
 if (document.SaveForm.PPassword.value == "")
     {
	 	it_alert_error('MSG-00012');
		document.SaveForm.PPassword.focus();
		OK = 0;
	}
}

if (OK == 1)
{
 if (document.SaveForm.PConfermaPassword.value == "")
     {
	 	it_alert_error('MSG-00012');
		document.SaveForm.PConfermaPassword.focus();
		OK = 0;
	}
}
if (OK == 1)
{
 if (document.SaveForm.PDomanda.value == "")
     {
	 	it_alert_error('MSG-00012');
		document.SaveForm.PDomanda.focus();
		OK = 0;
	}
}
if (OK == 1)
{
 if (document.SaveForm.PRisposta.value == "")
     {
	 	it_alert_error('MSG-00012');
		document.SaveForm.PRisposta.focus();
		OK = 0;
	}
}
if (OK == 1)
{
 if ((document.SaveForm.PPassword.value.length < 7) || (document.SaveForm.PPassword.value.length > 10))
     {
	 	it_alert_error('MSG-00013');
		document.SaveForm.PPassword.focus();
		OK = 0;
	}
}
if (OK == 1)
{
 if (document.SaveForm.PConfermaPassword.value != document.SaveForm.PPassword.value)
     {
	 	it_alert_error('MSG-00014');
		document.SaveForm.PConfermaPassword.focus();
		OK = 0;
	}
}

if (OK == 1)
{
 if (controllaPasswordUserName(document.SaveForm.PPassword.value)==1)
     {

      			it_alert_error('MSG-00037');
				document.SaveForm.PPassword.focus();
		OK = 0;
	}
}
}
//------------------ch 910: eliminazione lettere accentate----------------------------

checkAccenti(document.SaveForm.PNome);                    //alert(document.SaveForm.PNome.value);              
checkAccenti(document.SaveForm.PCognome);                 //alert(document.SaveForm.PCognome.value);           
checkAccenti(document.SaveForm.PNatoProvA);               //alert(document.SaveForm.PNatoProvA.value);         
checkAccenti(document.SaveForm.PIndirizzoResidenza);      //alert(document.SaveForm.PIndirizzoResidenza.value);
checkAccenti(document.SaveForm.PIndirizzoAltro);          //alert(document.SaveForm.PIndirizzoAltro.value);    
checkAccenti(document.SaveForm.PProfessioneT);            //alert(document.SaveForm.PProfessioneT.value);       
checkAccenti(document.SaveForm.PQualificaT);              //alert(document.SaveForm.PQualificaT.value);         
checkAccenti(document.SaveForm.PSettoreT);                //alert(document.SaveForm.PSettoreT.value);
checkAccenti(document.SaveForm.POriginePatrimonioT);           
checkAccenti(document.SaveForm.PAzienda);                 //alert(document.SaveForm.PAzienda.value);           
   
//--------------fine ch 910

if (OK == 1) 
{
	OK = checkMifid();
}

//Trasmetto i dati

if (OK == 1)
{
   document.SaveForm.PIndirizzoResidenza.value = document.SaveForm.PIndirizzoResidenza.value.toUpperCase();
  document.SaveForm.PIndirizzoAltro.value = document.SaveForm.PIndirizzoAltro.value.toUpperCase();
  document.SaveForm.PNumeroDocumento.value = document.SaveForm.PNumeroDocumento.value.toUpperCase();
  if (PuoModificareDatiSoggetto == "Y")
  {
	  if (document.SaveForm.PStatoCit[document.SaveForm.PStatoCit.selectedIndex].value == 'ITALIA')
	  {
	  	document.SaveForm.PCittadinanza.value = 1;
	  }
	  else
	  {
	  	document.SaveForm.PCittadinanza.value = 0;
	  }
  }

  //Trasmetto i dati
  document.SaveForm.submit();
}

}


//-------------------------------funzione senza blocco su validazione codice fiscale
//---------------------------------------------------------------------
function InviaDatiSenzaBloccoCodFisc(DataOggi,VettoreRelEntiTipi,PuoModificareDatiSoggetto) { //v2.0

 //Creo le date in funzione del giorno, mese, anno indicati dall'utente
 document.SaveForm.PDataNascita.value =  document.SaveForm.PGiornoNascita.value + "/" + document.SaveForm.PMeseNascita.value + "/" + document.SaveForm.PAnnoNascita.value;



 document.SaveForm.PDataDocumento.value =  document.SaveForm.PGiornoDocumento.value + "/" + document.SaveForm.PMeseDocumento.value + "/"  + document.SaveForm.PAnnoDocumento.value;






var OK = 1;
//Controllo se l'utente ha inserito tutti i campi obbligatori
if (OK == 1)
{
 if (document.SaveForm.PNome.value == "")
    {           it_alert_error('MSG-00012');

		document.SaveForm.PNome.focus();
		OK = 0;
	}
}

if (OK == 1)
{
 if (document.SaveForm.PCognome.value == "")
    {

                it_alert_error('MSG-00012');
		document.SaveForm.PCognome.focus();
		OK = 0;
	}
}



if (OK == 1)
{
 if (document.SaveForm.PStatoNascita.value == "")
     {

                alert(it_text_error('MSG-00012')+' - stato di nascita');
		//document.SaveForm.PStatoNascita.focus();
		OK = 0;
	}
}

if (OK == 1)
{
 if (ControlloCodiceNascita() == 0 && PuoModificareDatiSoggetto == "Y")
      {
                it_alert_error('MSG-00198');
		//document.SaveForm.PComuneNascita.focus();
		OK = 0;
	}
}

if (OK == 1)
{
 if ((document.SaveForm.PGiornoNascita.value == "") ||      (document.SaveForm.PMeseNascita.value == "") ||
	 (document.SaveForm.PAnnoNascita.value == ""))
     {
	 	it_alert_error('MSG-00012');
		document.SaveForm.PGiornoNascita.focus();
		OK = 0;
	}
}

if (OK == 1)
{
 if (PuoModificareDatiSoggetto == "Y")
 {
	 if (document.SaveForm.PSesso.selectedIndex == 0)
	     {
		 	it_alert_error('MSG-00012');
			document.SaveForm.PSesso.focus();
			OK = 0;
		}
 }
 else
 {
 	if (document.SaveForm.PSesso.value == "")
	     {
		 	it_alert_error('MSG-00012');
			OK = 0;
		}
 }
}

if (OK == 1)
{
 if (PuoModificareDatiSoggetto == "Y")
 {
	if (document.SaveForm.PStatoCivile.selectedIndex == 0)
	{
		it_alert_error('MSG-00012');
		document.SaveForm.PStatoCivile.focus();
		OK = 0;
	}
 }
 else
 {
 	if (document.SaveForm.PStatoCivile.value == "")
	{
		it_alert_error('MSG-00012');
		OK = 0;
	}
 }
}


if (OK == 1)
{
 if (document.SaveForm.PCodFiscale.value == "")
     {
	 	it_alert_error('MSG-00012');
		document.SaveForm.PCodFiscale.focus();
		OK = 0;
	}
}

if (OK == 1)
{
 if (document.SaveForm.PIndirizzoResidenza.value == "")
     {
	 	it_alert_error('MSG-00012');
		document.SaveForm.PIndirizzoResidenza.focus();
		OK = 0;
	}
}



if (OK == 1)
{
 if (document.SaveForm.PComuneResidenza.value == "")
     {
	 	alert(it_text_error('MSG-00012')+" - comune residenza");
		//document.SaveForm.PComuneResidenza.focus();
		OK = 0;
	}
}

if (OK == 1)
{
 if (document.SaveForm.PCAPResidenza.value == "")
     {
	 	it_alert_error('MSG-00012');
		document.SaveForm.PCAPResidenza.focus();
		OK = 0;
	}
}

if (OK == 1)
{
 if (document.SaveForm.PIndirizzoAltro.value == "")
     {
	 	it_alert_error('MSG-00012');
		document.SaveForm.PIndirizzoAltro.focus();
		OK = 0;
	}
}

if (OK == 1)
{
 if (document.SaveForm.PComuneAltro.value == "")
     {
	 	alert(it_text_error('MSG-00012')+" - comune corrispondenza");
		//document.SaveForm.PComuneAltro.focus();
		OK = 0;
	}
}

if (OK == 1)
{
 if (document.SaveForm.PCAPAltro.value == "")
     {
	 	it_alert_error('MSG-00012');
		document.SaveForm.PCAPAltro.focus();
		OK = 0;
	}
}

if (OK == 1)
{
 if (document.SaveForm.PEMail.value == "")
     {
	 	it_alert_error('MSG-00012');
		document.SaveForm.PEMail.focus();
		OK = 0;
	}
}

if (OK == 1)
{
 if ( (document.SaveForm.PTelefonoAbitazione.value == "") &&
	  (document.SaveForm.PTelefonoUfficio.value == "") && (document.SaveForm.PTelefonoCellulare.value == "") )
     {
	 	it_alert_error('MSG-00012');
		document.SaveForm.PTelefonoAbitazione.focus();
		OK = 0;
	}
}

if (OK == 1)
{
 if ((document.SaveForm.PGiornoDocumento.value == "") ||      (document.SaveForm.PMeseDocumento.value == "") ||
	 (document.SaveForm.PAnnoDocumento.value == ""))
     {
	 	it_alert_error('MSG-00012');
		document.SaveForm.PGiornoDocumento.focus();
		OK = 0;
	}
}


if (OK == 1)
{
 if (
     (ControllaNumero(document.SaveForm.PGiornoNascita.value)==1) ||
     (ControllaNumero(document.SaveForm.PMeseNascita.value)==1) ||
     (ControllaNumero(document.SaveForm.PAnnoNascita.value)==1) ||
     (document.SaveForm.PAnnoNascita.value.length!=4) ||
     (checkdate1(document.SaveForm.PGiornoNascita.value,document.SaveForm.PMeseNascita.value,document.SaveForm.PAnnoNascita.value)==1)
	 )
      {
	 	it_alert_error('MSG-00022');
		document.SaveForm.PGiornoNascita.focus();
		OK = 0;
	}
}

if (OK == 1)
{
 if (
     (ControllaNumero(document.SaveForm.PGiornoDocumento.value)==1) ||
     (ControllaNumero(document.SaveForm.PMeseDocumento.value)==1) ||
     (ControllaNumero(document.SaveForm.PAnnoDocumento.value)==1) ||
     (document.SaveForm.PAnnoDocumento.value.length!=4) ||
     (checkdate1(document.SaveForm.PGiornoDocumento.value,document.SaveForm.PMeseDocumento.value,document.SaveForm.PAnnoDocumento.value)==1)
	 )
      {
	 	it_alert_error('MSG-00022');
		document.SaveForm.PGiornoDocumento.focus();
		OK = 0;
	}
}

//Determino se la data del documento ? o non ? maggiore della data di oggi


var DataDocumento;
//Creo la data documento come YYYYMMDD
if(document.SaveForm.PGiornoDocumento.value.length == 1)
{
	if(document.SaveForm.PMeseDocumento.value.length == 1)
	{
DataDocumento=document.SaveForm.PAnnoDocumento.value+'0'+document.SaveForm.PMeseDocumento.value+'0'+document.SaveForm.PGiornoDocumento.value;
	}
	else
	{
DataDocumento=document.SaveForm.PAnnoDocumento.value+document.SaveForm.PMeseDocumento.value+'0'+document.SaveForm.PGiornoDocumento.value;
	}
}
else
{
	if(document.SaveForm.PMeseDocumento.value.length == 1)
	{
DataDocumento=document.SaveForm.PAnnoDocumento.value+'0'+document.SaveForm.PMeseDocumento.value+document.SaveForm.PGiornoDocumento.value;
	}
	else
	{
DataDocumento=document.SaveForm.PAnnoDocumento.value+document.SaveForm.PMeseDocumento.value+document.SaveForm.PGiornoDocumento.value;
	}
}
if (OK == 1)
{
 if ( DataDocumento > DataOggi  )
     {
	 	it_alert_error('MSG-00050');
		document.SaveForm.PGiornoDocumento.focus();
		OK = 0;
	}
}



//Determino se la data di nascita ? o non ? maggiore della data di oggi


var DataNascita;
//Creo la data documento come YYYYMMDD
if(document.SaveForm.PGiornoNascita.value.length == 1)
{
	if(document.SaveForm.PMeseNascita.value.length == 1)
	{
DataNascita=document.SaveForm.PAnnoNascita.value+'0'+document.SaveForm.PMeseNascita.value+'0'+document.SaveForm.PGiornoNascita.value;
	}
	else
	{
DataNascita=document.SaveForm.PAnnoNascita.value+document.SaveForm.PMeseNascita.value+'0'+document.SaveForm.PGiornoNascita.value;
	}
}
else
{
	if(document.SaveForm.PMeseNascita.value.length == 1)
	{
DataNascita=document.SaveForm.PAnnoNascita.value+'0'+document.SaveForm.PMeseNascita.value+document.SaveForm.PGiornoNascita.value;
	}
	else
	{
DataNascita=document.SaveForm.PAnnoNascita.value+document.SaveForm.PMeseNascita.value+document.SaveForm.PGiornoNascita.value;
	}
}
if (OK == 1)
{
 if ( DataNascita > DataOggi  )
     {
	 	it_alert_error('MSG-00050');

		document.SaveForm.PGiornoNascita.focus();
		OK = 0;
	}
}


//Determino dalla data di nascita se ? o non ? maggiorenne


var DataNascitaPiu18;
var MeseNascitaPiu18;
AnnoNascitaPiu18 = parseInt(document.SaveForm.PAnnoNascita.value) + 18;
//Creo la data documento come YYYYMMDD
if(document.SaveForm.PGiornoNascita.value.length == 1)
{
	if(document.SaveForm.PMeseNascita.value.length == 1)
	{
DataNascitaPiu18=AnnoNascitaPiu18+'0'+document.SaveForm.PMeseNascita.value+'0'+document.SaveForm.PGiornoNascita.value;
	}
	else
	{
DataNascitaPiu18=AnnoNascitaPiu18+document.SaveForm.PMeseNascita.value+'0'+document.SaveForm.PGiornoNascita.value;
	}
}
else
{
	if(document.SaveForm.PMeseNascita.value.length == 1)
	{
DataNascitaPiu18=AnnoNascitaPiu18+'0'+document.SaveForm.PMeseNascita.value+document.SaveForm.PGiornoNascita.value;
	}
	else
	{
DataNascitaPiu18=AnnoNascitaPiu18+document.SaveForm.PMeseNascita.value+document.SaveForm.PGiornoNascita.value;
	}
}




if (OK == 1)
{
 if ( DataNascitaPiu18 > DataOggi  )
     {
	 	it_alert_error('MSG-00079');
                document.SaveForm.PGiornoNascita.focus();
		OK = 0;
	}
}


//Determino se la data del documento ? o non ? maggiore della data di nascita

if (OK == 1)
{
 if ( DataNascita > DataDocumento  )
     {
	 	it_alert_error('MSG-00068');
		document.SaveForm.PGiornoDocumento.focus();
		OK = 0;
	}
}

if (OK == 1)
{
 if (document.SaveForm.PNumeroDocumento.value == "")
     {
	 	it_alert_error('MSG-00012');
		document.SaveForm.PNumeroDocumento.focus();
		OK = 0;
	}
}

if (OK == 1)
{
//Controllo la corrispondensa TIPO DOCUMENTO - ENTE DOCUMENTO
var i;
var EsisteLegame = 0;
for (i in VettoreRelEntiTipi)
 {
  if(
    (VettoreRelEntiTipi[i][0] == document.SaveForm.PTipoDocumento.options[document.SaveForm.PTipoDocumento.selectedIndex].value)
      &&
    (VettoreRelEntiTipi[i][1] == document.SaveForm.PEnteDocumento.options[document.SaveForm.PEnteDocumento.selectedIndex].value)
    )
	 {
	  	EsisteLegame = 1;
	 }


}
if ( EsisteLegame == 1 )
      {

		OK = 1;
	}
 else
 	{
                it_alert_error('MSG-00049');
		document.SaveForm.PEnteDocumento.focus();
		OK = 0;
	}
}

if (OK == 1)
{
 if (document.SaveForm.PStatoDocumento.value == "")
      {
	 	alert(it_text_error('MSG-00012')+' - stato documento');
		//document.SaveForm.PStatoDocumento.focus();
		OK = 0;
	}
}

if (OK == 1)
{
 if (
      (document.SaveForm.PStatoDocumento.value == "ITALIA" && document.SaveForm.PComuneDocumento.value == "") ||
	  (document.SaveForm.PStatoDocumento.value != "ITALIA" && document.SaveForm.PComuneDocumento.value != "")
	)
      {
	 	it_alert_error('MSG-00035');
		//document.SaveForm.PComuneDocumento.focus();
		OK = 0;
	}
}



//if (OK == 1)
//{
// if (
//    ((document.SaveForm.PCittadinanza[0].checked == true) && (document.SaveForm.PStatoCit.selectedIndex == 0)) ||
//    ((document.SaveForm.PCittadinanza[1].checked == true) && (document.SaveForm.PStatoCit.selectedIndex == 1))
//	)
//      {
//	 	alert(messaggio[17]);
//		document.SaveForm.PStatoCit.focus();
//		OK = 0;
//	}
//}

if (OK == 1)
{
 if (PuoModificareDatiSoggetto == "Y")
 {
	 if (
	    document.SaveForm.PStatoCit.options[document.SaveForm.PStatoCit.selectedIndex].value == ""
		)
	      {
		 	 it_alert_error('MSG-00012');
			document.SaveForm.PStatoCit.focus();
			OK = 0;
		}
 }
 else
 {
 	 if (
	    document.SaveForm.PStatoCit.value == ""
		)
	      {
		 	it_alert_error('MSG-00012');
			OK = 0;
		}
 }
}

if (OK == 1)
{
 if (ControllaEmail(document.SaveForm.PEMail.value)==1)
      {
	 	it_alert_error('MSG-00020');
		document.SaveForm.PEMail.focus();
		OK = 0;
	}
}

if (OK == 1)
{
 if (ControllaTelefono(document.SaveForm.PTelefonoAbitazione.value)== 1)
      {
	 	it_alert_error('MSG-00021');
		document.SaveForm.PTelefonoAbitazione.focus();
		OK = 0;
	}
}

if (OK == 1)
{
 if (ControllaTelefono(document.SaveForm.PTelefonoUfficio.value)==1)
      {
	 	it_alert_error('MSG-00021');
		document.SaveForm.PTelefonoUfficio.focus();
		OK = 0;
	}
}

if (OK == 1)
{
 if (ControllaTelefono(document.SaveForm.PTelefonoCellulare.value)==1)
      {
	 	it_alert_error('MSG-00021');
		document.SaveForm.PTelefonoCellulare.focus();
		OK = 0;
	}
}

if (OK == 1)
{
 if (ControllaTelefono(document.SaveForm.PFax.value)==1)
      {
	 	it_alert_error('MSG-00021');
		document.SaveForm.PFax.focus();
		OK = 0;
	}
}




if (OK == 1)
{
 if (
      (ControllaNumero(document.SaveForm.PCAPResidenza.value) == 1) ||
      (document.SaveForm.PCAPResidenza.value.length != 5)
    )
   {
	 	it_alert_error('MSG-00036');
		document.SaveForm.PCAPResidenza.focus();
		OK = 0;
	}
}

if (OK == 1)
{
var Aus;
var Aus1;
var Aus2;
var Aus3;
Aus = document.SaveForm.PCAPResidenza.value.substring(0,1);
Aus1 = document.SaveForm.PCAPResidenza.value.substring(1,2);
Aus2 = document.SaveForm.PCAPControlloResidenza.value.substring(0,1);
Aus3 = document.SaveForm.PCAPControlloResidenza.value.substring(1,2);
if (
 (Aus != Aus2) || (Aus1 != Aus3)
  )
      {
	 	it_alert_error('MSG-00052');
		document.SaveForm.PCAPResidenza.focus();
		OK = 0;
	}
}

if (OK == 1)
{
 if (
      (ControllaNumero(document.SaveForm.PCAPAltro.value) == 1)  ||
      (document.SaveForm.PCAPAltro.value.length != 5)
    )

      {
	 	it_alert_error('MSG-00036');
		document.SaveForm.PCAPAltro.focus();
		OK = 0;
	}
}

if (OK == 1)
{
var Aus;
var Aus1;
var Aus2;
var Aus3;
Aus = document.SaveForm.PCAPAltro.value.substring(0,1);
Aus1 = document.SaveForm.PCAPAltro.value.substring(1,2);
Aus2 = document.SaveForm.PCAPControlloAltro.value.substring(0,1);
Aus3 = document.SaveForm.PCAPControlloAltro.value.substring(1,2);
if (
 (Aus != Aus2) || (Aus1 != Aus3)
  )
      {
	 	it_alert_error('MSG-00052');
		document.SaveForm.PCAPAltro.focus();
		OK = 0;
	}
}






if (OK == 1)
{
 if (document.SaveForm.PCodFiscale.value.length != 16)

      {
	 	it_alert_error('MSG-00042');
		document.SaveForm.PCodFiscale.focus();
		OK = 0;
	}
}

if (OK == 1)
{
 if (controllaAlfanumerico(document.SaveForm.PNumeroDocumento.value) == 1)

      {
	 	it_alert_error('MSG-00045');
		document.SaveForm.PNumeroDocumento.focus();
		OK = 0;
	}
}
 
if (OK == 1)
{
  if (ControllaPresenzaApice(document.SaveForm.PCodFiscale.value.toUpperCase())==1)
   {
     it_alert_error('MSG-00066');alert('qui');
     OK = 0;
     document.SaveForm.PCodFiscale.focus();
   }
}





/* ch 910: gli utenti privilegiati possono immettere un codice fiscale errato
   questo controllo sul checksum è stato spostato sotto
if (OK == 1)
{
  if (testCodiceFiscale(document.SaveForm.PCodFiscale.value.toUpperCase())==true)
	{

      OK = 1;
      }
   else
    {
     it_alert_error('MSG-00066');
     OK = 0;
     document.SaveForm.PCodFiscale.focus();
    }
}
*/



document.SaveForm.PCodFiscale.value = document.SaveForm.PCodFiscale.value.toUpperCase();
document.SaveForm.PNome.value = document.SaveForm.PNome.value.toUpperCase();
document.SaveForm.PCognome.value = document.SaveForm.PCognome.value.toUpperCase();




if (OK == 1)
{

var CodiceFiscaleOK = 0;
var StringaErroreCodiceFiscale = "Errore: \n\r";
var Ritorno;
//ch 910
 if (!testCodiceFiscale(document.SaveForm.PCodFiscale.value.toUpperCase())==true)
    {
     CodiceFiscaleOK = 1;
     StringaErroreCodiceFiscale = StringaErroreCodiceFiscale+' - Errore nel codice fiscale \n\r';
    }
//   

//Controllo il campo cognome
var Cognome1 = calcolaCognome(document.SaveForm.PCognome.value);
var Cognome2 = document.SaveForm.PCodFiscale.value.substring(0,3);
if (Cognome1 != Cognome2)
{
	CodiceFiscaleOK = 1;
        StringaErroreCodiceFiscale = StringaErroreCodiceFiscale+' '+it_text_error('MSG-00142')+'\n\r';
}
//Controllo il campo cognome
var Nome1 = calcolaNome(document.SaveForm.PNome.value);
var Nome2 = document.SaveForm.PCodFiscale.value.substring(3,6);
if (Nome1 != Nome2)
{
	CodiceFiscaleOK = 1;
        StringaErroreCodiceFiscale = StringaErroreCodiceFiscale+' '+it_text_error('MSG-00143')+'\n\r';
}

//ch 910
//Controllo il campo del comune di nascita
if (OK == 1)
{

	var codiceCitta1 = document.SaveForm.PCodFiscale.value.substring(11,15);
	var codiceCitta2 = document.SaveForm.PCodiceComuneNascita.value;
	if (codiceCitta2 != 'EE'){
		if (codiceCitta1 != codiceCitta2) {
			CodiceFiscaleOK = 1;
        	StringaErroreCodiceFiscale = StringaErroreCodiceFiscale+' '+it_text_error('MSG-00224')+'\n\r';
		}
	}
}

//Controllo il campo data di nascita e sesso
if (PuoModificareDatiSoggetto == "Y")
 {
var Giorno1 = calcolaGiorno(document.SaveForm.PGiornoNascita.value,document.SaveForm.PSesso[document.SaveForm.PSesso.selectedIndex].value);
 }
else
 {
var Giorno1 = calcolaGiorno(document.SaveForm.PGiornoNascita.value,document.SaveForm.PSesso.value);
 }
var Giorno2 = document.SaveForm.PCodFiscale.value.substring(9,11);
var Mese1 = calcolaMese(document.SaveForm.PMeseNascita.value);
var Mese2 = document.SaveForm.PCodFiscale.value.substring(8,9);
var Anno1 = calcolaAnno(document.SaveForm.PAnnoNascita.value);
var Anno2 = document.SaveForm.PCodFiscale.value.substring(6,8);
if ((Giorno1 != Giorno2) || (Mese1 != Mese2) || (Anno1 != Anno2))
{
	CodiceFiscaleOK = 1;
	StringaErroreCodiceFiscale = StringaErroreCodiceFiscale+' '+it_text_error('MSG-00144')+'\n\r';
}
if (CodiceFiscaleOK == 1)
{
	Ritorno=confirm(StringaErroreCodiceFiscale+' '+it_text_error('MSG-00145'));
        if (Ritorno == false)
         {
		OK = 0;
         }
}
}


//------------------------CONTROLLO LA BANCA PRESSO CUI HAI IL CONTO-------------------------
if (OK == 1 && document.SaveForm.TipoRapporto.value == "A")
{
 if (	document.SaveForm.PBancaContoIntesaPreesistente[document.SaveForm.PBancaContoIntesaPreesistente.selectedIndex].value == "" &&
 		document.SaveForm.PContoIntesaPreesistente[1].checked == true )
    {
    	it_alert_error('MSG-00185');
    	document.SaveForm.PBancaContoIntesaPreesistente.focus();
	 	OK = 0;
	}
}
//------------------FINE CONTROLLO LA BANCA PRESSO CUI HAI IL CONTO----------------------------






//Controllo il trattamento dei dati personali dell'utente
if (OK == 1) {
	if (
	     ((document.SaveForm.PLettoDati[0].checked  != true) && (document.SaveForm.PLettoDati[1].checked  != true))  ||
		 ((document.SaveForm.PPrivacy_E3[0].checked != true) && (document.SaveForm.PPrivacy_E3[1].checked != true)) ||
		 ((document.SaveForm.PPrivacy_E4[0].checked != true) && (document.SaveForm.PPrivacy_E4[1].checked != true)) ||
		 ((document.SaveForm.PPrivacy_F1[0].checked != true) && (document.SaveForm.PPrivacy_F1[1].checked != true)) ||
		 ((document.SaveForm.PPrivacy_F2[0].checked != true) && (document.SaveForm.PPrivacy_F2[1].checked != true))
	  )
     {
	   alert(it_text_error('MSG-00012')+' ('+it_text_error('MSG-00054')+')');
	   OK = 0;
	  }
}

//Altre informazioni
if (OK == 1)
 {
	if 	(document.SaveForm.PTitoloStudio.value == "")
	{
	  document.SaveForm.PTitoloStudio.value = document.SaveForm.PTitoloStudioL[document.SaveForm.PTitoloStudioL.selectedIndex].text;
    }

 }




if	(OK == 1)
{
 if (
     ((document.SaveForm.PProfessioneT.value != "") &&
      (document.SaveForm.PProfessioneL.selectedIndex != 0) &&
	  (document.SaveForm.PProfessioneL.selectedIndex != 6))
	 )
	{
      it_alert_error('MSG-00019');
	  OK = 0;

	  document.SaveForm.PProfessioneT.focus();
   }
  else
  {
   	if 	((document.SaveForm.PProfessioneT.value != "") )
	{
       document.SaveForm.PProfessione.value = document.SaveForm.PProfessioneT.value;
    }
	if 	((document.SaveForm.PProfessione.value == "") )
	{
	  document.SaveForm.PProfessione.value = document.SaveForm.PProfessioneL[document.SaveForm.PProfessioneL.selectedIndex].text;
    }
 }
}
if	(OK == 1)
{
 if (
     ((document.SaveForm.PQualificaT.value != "") &&
      (document.SaveForm.PQualificaL.selectedIndex != 0) &&
	  (document.SaveForm.PQualificaL.selectedIndex != 6))
	 )
	{
	  OK = 0;
      it_alert_error('MSG-00019');
	  document.SaveForm.PQualificaT.focus();

    }
  else
  {
   	if 	((document.SaveForm.PQualificaT.value != "") )
	{
       document.SaveForm.PQualifica.value = document.SaveForm.PQualificaT.value;
    }
	if 	((document.SaveForm.PQualifica.value == "") )
	{
	  document.SaveForm.PQualifica.value = document.SaveForm.PQualificaL[document.SaveForm.PQualificaL.selectedIndex].text;
    }
 }
}

if (OK == 1)
 {
	if 	(document.SaveForm.PFunzioneAziendale.value == "")
	{
	  document.SaveForm.PFunzioneAziendale.value = document.SaveForm.PFunzioneAziendaleL[document.SaveForm.PFunzioneAziendaleL.selectedIndex].text;
    }

 }




if	(OK == 1)
{
 if (
     ((document.SaveForm.PSettoreT.value != "") &&
      (document.SaveForm.PSettoreL.selectedIndex != 0) &&
	  (document.SaveForm.PSettoreL.selectedIndex != 16))
	 )
	{
      it_alert_error('MSG-00019');
	  OK = 0;
	  document.SaveForm.PSettoreT.focus();

    }
  else
  {
   	if 	((document.SaveForm.PSettoreT.value != "") )
	{
       document.SaveForm.PSettore.value = document.SaveForm.PSettoreT.value;
    }
	if 	((document.SaveForm.PSettore.value == "") )
	{
	  document.SaveForm.PSettore.value = document.SaveForm.PSettoreL[document.SaveForm.PSettoreL.selectedIndex].text;
    }
 }
}

if (OK == 1)
 {
	if 	((document.SaveForm.PConosciutoItrade.value == "") )
	{
	  document.SaveForm.PConosciutoItrade.value = document.SaveForm.PConosciutoItradeL[document.SaveForm.PConosciutoItradeL.selectedIndex].text;
    }

 }


 if (OK == 1)
 {
  if (document.SaveForm.PProfessione.value == "")
  {
      it_alert_error('MSG-00012');
	  OK = 0;
	  document.SaveForm.PProfessioneL.focus();

  }
 }

 if (OK == 1)
 {
  if (document.SaveForm.PSettore.value == "")
  {
      it_alert_error('MSG-00012');
	  OK = 0;
	  document.SaveForm.PSettoreL.focus();

  }
 }

 if (OK == 1)
 {
  if (document.SaveForm.PConosciutoItrade.value == "")
  {
      it_alert_error('MSG-00012');
	  OK = 0;
	  document.SaveForm.PConosciutoItradeL.focus();

  }
 }



//Password



if (puoModificareSoggetto == "Y") {
if (OK == 1)
{
 if (document.SaveForm.PPassword.value == "")
     {
	 	it_alert_error('MSG-00012');
		document.SaveForm.PPassword.focus();
		OK = 0;
	}
}

if (OK == 1)
{
 if (document.SaveForm.PConfermaPassword.value == "")
     {
	 	it_alert_error('MSG-00012');
		document.SaveForm.PConfermaPassword.focus();
		OK = 0;
	}
}
if (OK == 1)
{
 if (document.SaveForm.PDomanda.value == "")
     {
	 	it_alert_error('MSG-00012');
		document.SaveForm.PDomanda.focus();
		OK = 0;
	}
}
if (OK == 1)
{
 if (document.SaveForm.PRisposta.value == "")
     {
	 	it_alert_error('MSG-00012');
		document.SaveForm.PRisposta.focus();
		OK = 0;
	}
}
if (OK == 1)
{
 if ((document.SaveForm.PPassword.value.length < 7) || (document.SaveForm.PPassword.value.length > 10))
     {
	 	it_alert_error('MSG-00013');
		document.SaveForm.PPassword.focus();
		OK = 0;
	}
}
if (OK == 1)
{
 if (document.SaveForm.PConfermaPassword.value != document.SaveForm.PPassword.value)
     {
	 	it_alert_error('MSG-00014');
		document.SaveForm.PConfermaPassword.focus();
		OK = 0;
	}
}

if (OK == 1)
{
 if (controllaPasswordUserName(document.SaveForm.PPassword.value)==1)
     {

      			it_alert_error('MSG-00037');
				document.SaveForm.PPassword.focus();
		OK = 0;
	}
}
}

//------------------ch 910: eliminazione lettere accentate----------------------------

checkAccenti(document.SaveForm.PNome);                    //alert(document.SaveForm.PNome.value);              
checkAccenti(document.SaveForm.PCognome);                 //alert(document.SaveForm.PCognome.value);           
checkAccenti(document.SaveForm.PNatoProvA);               //alert(document.SaveForm.PNatoProvA.value);         
checkAccenti(document.SaveForm.PIndirizzoResidenza);      //alert(document.SaveForm.PIndirizzoResidenza.value);
checkAccenti(document.SaveForm.PIndirizzoAltro);          //alert(document.SaveForm.PIndirizzoAltro.value);    
checkAccenti(document.SaveForm.PProfessioneT);            //alert(document.SaveForm.PProfessioneT.value);       
checkAccenti(document.SaveForm.PQualificaT);              //alert(document.SaveForm.PQualificaT.value);         
checkAccenti(document.SaveForm.PSettoreT);                //alert(document.SaveForm.PSettoreT.value);           
checkAccenti(document.SaveForm.PAzienda);                 //alert(document.SaveForm.PAzienda.value);           
   
//--------------fine ch 910

if (OK == 1) 
{
	OK = checkMifid();
}

//Trasmetto i dati

if (OK == 1)
{
   document.SaveForm.PIndirizzoResidenza.value = document.SaveForm.PIndirizzoResidenza.value.toUpperCase();
  document.SaveForm.PIndirizzoAltro.value = document.SaveForm.PIndirizzoAltro.value.toUpperCase();
  document.SaveForm.PNumeroDocumento.value = document.SaveForm.PNumeroDocumento.value.toUpperCase();
  if (PuoModificareDatiSoggetto == "Y")
  {
	  if (document.SaveForm.PStatoCit[document.SaveForm.PStatoCit.selectedIndex].value == 'ITALIA')
	  {
	  	document.SaveForm.PCittadinanza.value = 1;
	  }
	  else
	  {
	  	document.SaveForm.PCittadinanza.value = 0;
	  }
  }

  //Trasmetto i dati
  document.SaveForm.submit();
}

}


//---------------------------------------------------------------------
//--questa funzione verifica se i dati della pagina di modifica ridotta sono stati 
//--inseriti correttamente
function InviaDatiUtenteRegistratoModificabile(DataOggi,VettoreRelEntiTipi) { //v2.0

 //Creo le date in funzione del giorno, mese, anno indicati dall'utente
 document.SaveForm.PDataNascita.value =  document.SaveForm.PGiornoNascita.value + "/" + document.SaveForm.PMeseNascita.value + "/" + document.SaveForm.PAnnoNascita.value;



 document.SaveForm.PDataDocumento.value =  document.SaveForm.PGiornoDocumento.value + "/" + document.SaveForm.PMeseDocumento.value + "/"  + document.SaveForm.PAnnoDocumento.value;






var OK = 1;
//Controllo se l'utente ha inserito tutti i campi obbligatori
if (OK == 1)
{
 if (document.SaveForm.PNome.value == "")
    {           it_alert_error('MSG-00012');

		document.SaveForm.PNome.focus();
		OK = 0;
	}
}

if (OK == 1)
{
 if (document.SaveForm.PCognome.value == "")
    {

                it_alert_error('MSG-00012');
		document.SaveForm.PCognome.focus();
		OK = 0;
	}
}



if (OK == 1)
{
 if (document.SaveForm.PStatoNascita.value == "")
     {

                alert(it_text_error('MSG-00012')+' - stato di nascita');
		//document.SaveForm.PStatoNascita.focus();
		OK = 0;
	}
}

if (OK == 1)
{
 if ((document.SaveForm.PGiornoNascita.value == "") ||      (document.SaveForm.PMeseNascita.value == "") ||
	 (document.SaveForm.PAnnoNascita.value == ""))
     {
	 	it_alert_error('MSG-00012');
		document.SaveForm.PGiornoNascita.focus();
		OK = 0;
	}
}

if (OK == 1)
{
 	if (document.SaveForm.PSesso.value == "")
	     {
		 	it_alert_error('MSG-00012');
			OK = 0;
		}
}

if (OK == 1)
{
 	if (document.SaveForm.PStatoCivile.value == "")
	{
		it_alert_error('MSG-00012');
		OK = 0;
	}
}


if (OK == 1)
{
 if (document.SaveForm.PCodFiscale.value == "")
     {
	 	it_alert_error('MSG-00012');
		document.SaveForm.PCodFiscale.focus();
		OK = 0;
	}
}

if (OK == 1)
{
 if (document.SaveForm.PIndirizzoResidenza.value == "")
     {
	 	it_alert_error('MSG-00012');
		document.SaveForm.PIndirizzoResidenza.focus();
		OK = 0;
	}
}



if (OK == 1)
{
 if (document.SaveForm.PComuneResidenza.value == "")
     {
	 	alert(it_text_error('MSG-00012')+" - comune residenza");
		//document.SaveForm.PComuneResidenza.focus();
		OK = 0;
	}
}

if (OK == 1)
{
 if (document.SaveForm.PCAPResidenza.value == "")
     {
	 	it_alert_error('MSG-00012');
		document.SaveForm.PCAPResidenza.focus();
		OK = 0;
	}
}

if (OK == 1)
{
 if (document.SaveForm.PIndirizzoAltro.value == "")
     {
	 	it_alert_error('MSG-00012');
		document.SaveForm.PIndirizzoAltro.focus();
		OK = 0;
	}
}

if (OK == 1)
{
 if (document.SaveForm.PComuneAltro.value == "")
     {
	 	alert(it_text_error('MSG-00012')+" - comune corrispondenza");
		//document.SaveForm.PComuneAltro.focus();
		OK = 0;
	}
}

if (OK == 1)
{
 if (document.SaveForm.PCAPAltro.value == "")
     {
	 	it_alert_error('MSG-00012');
		document.SaveForm.PCAPAltro.focus();
		OK = 0;
	}
}

if (OK == 1)
{
 if (document.SaveForm.PEMail.value == "")
     {
	 	it_alert_error('MSG-00012');
		document.SaveForm.PEMail.focus();
		OK = 0;
	}
}

if (OK == 1)
{
 if ( (document.SaveForm.PTelefonoAbitazione.value == "") &&
	  (document.SaveForm.PTelefonoUfficio.value == "") && (document.SaveForm.PTelefonoCellulare.value == "") )
     {
	 	it_alert_error('MSG-00012');
		document.SaveForm.PTelefonoAbitazione.focus();
		OK = 0;
	}
}

if (OK == 1)
{
 if ((document.SaveForm.PGiornoDocumento.value == "") ||      (document.SaveForm.PMeseDocumento.value == "") ||
	 (document.SaveForm.PAnnoDocumento.value == ""))
     {
	 	it_alert_error('MSG-00012');
		document.SaveForm.PGiornoDocumento.focus();
		OK = 0;
	}
}


if (OK == 1)
{
 if (
     (ControllaNumero(document.SaveForm.PGiornoNascita.value)==1) ||
     (ControllaNumero(document.SaveForm.PMeseNascita.value)==1) ||
     (ControllaNumero(document.SaveForm.PAnnoNascita.value)==1) ||
     (document.SaveForm.PAnnoNascita.value.length!=4) ||
     (checkdate1(document.SaveForm.PGiornoNascita.value,document.SaveForm.PMeseNascita.value,document.SaveForm.PAnnoNascita.value)==1)
	 )
      {
	 	it_alert_error('MSG-00022');
		document.SaveForm.PGiornoNascita.focus();
		OK = 0;
	}
}

if (OK == 1)
{
 if (
     (ControllaNumero(document.SaveForm.PGiornoDocumento.value)==1) ||
     (ControllaNumero(document.SaveForm.PMeseDocumento.value)==1) ||
     (ControllaNumero(document.SaveForm.PAnnoDocumento.value)==1) ||
     (document.SaveForm.PAnnoDocumento.value.length!=4) ||
     (checkdate1(document.SaveForm.PGiornoDocumento.value,document.SaveForm.PMeseDocumento.value,document.SaveForm.PAnnoDocumento.value)==1)
	 )
      {
	 	it_alert_error('MSG-00022');
		document.SaveForm.PGiornoDocumento.focus();
		OK = 0;
	}
}

//Determino se la data del documento ? o non ? maggiore della data di oggi


var DataDocumento;
//Creo la data documento come YYYYMMDD
if(document.SaveForm.PGiornoDocumento.value.length == 1)
{
	if(document.SaveForm.PMeseDocumento.value.length == 1)
	{
DataDocumento=document.SaveForm.PAnnoDocumento.value+'0'+document.SaveForm.PMeseDocumento.value+'0'+document.SaveForm.PGiornoDocumento.value;
	}
	else
	{
DataDocumento=document.SaveForm.PAnnoDocumento.value+document.SaveForm.PMeseDocumento.value+'0'+document.SaveForm.PGiornoDocumento.value;
	}
}
else
{
	if(document.SaveForm.PMeseDocumento.value.length == 1)
	{
DataDocumento=document.SaveForm.PAnnoDocumento.value+'0'+document.SaveForm.PMeseDocumento.value+document.SaveForm.PGiornoDocumento.value;
	}
	else
	{
DataDocumento=document.SaveForm.PAnnoDocumento.value+document.SaveForm.PMeseDocumento.value+document.SaveForm.PGiornoDocumento.value;
	}
}
if (OK == 1)
{
 if ( DataDocumento > DataOggi  )
     {
	 	it_alert_error('MSG-00050');
		document.SaveForm.PGiornoDocumento.focus();
		OK = 0;
	}
}



//Determino se la data di nascita ? o non ? maggiore della data di oggi


var DataNascita;
//Creo la data documento come YYYYMMDD
if(document.SaveForm.PGiornoNascita.value.length == 1)
{
	if(document.SaveForm.PMeseNascita.value.length == 1)
	{
DataNascita=document.SaveForm.PAnnoNascita.value+'0'+document.SaveForm.PMeseNascita.value+'0'+document.SaveForm.PGiornoNascita.value;
	}
	else
	{
DataNascita=document.SaveForm.PAnnoNascita.value+document.SaveForm.PMeseNascita.value+'0'+document.SaveForm.PGiornoNascita.value;
	}
}
else
{
	if(document.SaveForm.PMeseNascita.value.length == 1)
	{
DataNascita=document.SaveForm.PAnnoNascita.value+'0'+document.SaveForm.PMeseNascita.value+document.SaveForm.PGiornoNascita.value;
	}
	else
	{
DataNascita=document.SaveForm.PAnnoNascita.value+document.SaveForm.PMeseNascita.value+document.SaveForm.PGiornoNascita.value;
	}
}
if (OK == 1)
{
 if ( DataNascita > DataOggi  )
     {
	 	it_alert_error('MSG-00050');

		document.SaveForm.PGiornoNascita.focus();
		OK = 0;
	}
}


//Determino dalla data di nascita se ? o non ? maggiorenne


var DataNascitaPiu18;
var MeseNascitaPiu18;
AnnoNascitaPiu18 = parseInt(document.SaveForm.PAnnoNascita.value) + 18;
//Creo la data documento come YYYYMMDD
if(document.SaveForm.PGiornoNascita.value.length == 1)
{
	if(document.SaveForm.PMeseNascita.value.length == 1)
	{
DataNascitaPiu18=AnnoNascitaPiu18+'0'+document.SaveForm.PMeseNascita.value+'0'+document.SaveForm.PGiornoNascita.value;
	}
	else
	{
DataNascitaPiu18=AnnoNascitaPiu18+document.SaveForm.PMeseNascita.value+'0'+document.SaveForm.PGiornoNascita.value;
	}
}
else
{
	if(document.SaveForm.PMeseNascita.value.length == 1)
	{
DataNascitaPiu18=AnnoNascitaPiu18+'0'+document.SaveForm.PMeseNascita.value+document.SaveForm.PGiornoNascita.value;
	}
	else
	{
DataNascitaPiu18=AnnoNascitaPiu18+document.SaveForm.PMeseNascita.value+document.SaveForm.PGiornoNascita.value;
	}
}




if (OK == 1)
{
 if ( DataNascitaPiu18 > DataOggi  )
     {
	 	it_alert_error('MSG-00079');
                document.SaveForm.PGiornoNascita.focus();
		OK = 0;
	}
}


//Determino se la data del documento ? o non ? maggiore della data di nascita

if (OK == 1)
{
 if ( DataNascita > DataDocumento  )
     {
	 	it_alert_error('MSG-00068');
		document.SaveForm.PGiornoDocumento.focus();
		OK = 0;
	}
}

if (OK == 1)
{
 if (document.SaveForm.PNumeroDocumento.value == "")
     {
	 	it_alert_error('MSG-00012');
		document.SaveForm.PNumeroDocumento.focus();
		OK = 0;
	}
}

if (OK == 1)
{
//Controllo la corrispondensa TIPO DOCUMENTO - ENTE DOCUMENTO
var i;
var EsisteLegame = 0;
for (i in VettoreRelEntiTipi)
 {
  if(
    (VettoreRelEntiTipi[i][0] == document.SaveForm.PTipoDocumento.options[document.SaveForm.PTipoDocumento.selectedIndex].value)
      &&
    (VettoreRelEntiTipi[i][1] == document.SaveForm.PEnteDocumento.options[document.SaveForm.PEnteDocumento.selectedIndex].value)
    )
	 {
	  	EsisteLegame = 1;
	 }


}
if ( EsisteLegame == 1 )
      {

		OK = 1;
	}
 else
 	{
                it_alert_error('MSG-00049');
		document.SaveForm.PEnteDocumento.focus();
		OK = 0;
	}
}

if (OK == 1)
{
 if (document.SaveForm.PStatoDocumento.value == "")
      {
	 	alert(it_text_error('MSG-00012')+' - stato documento');
		//document.SaveForm.PStatoDocumento.focus();
		OK = 0;
	}
}

if (OK == 1)
{
 if (
      (document.SaveForm.PStatoDocumento.value == "ITALIA" && document.SaveForm.PComuneDocumento.value == "") ||
	  (document.SaveForm.PStatoDocumento.value != "ITALIA" && document.SaveForm.PComuneDocumento.value != "")
	)
      {
	 	it_alert_error('MSG-00035');
		//document.SaveForm.PComuneDocumento.focus();
		OK = 0;
	}
}



//if (OK == 1)
//{
// if (
//    ((document.SaveForm.PCittadinanza[0].checked == true) && (document.SaveForm.PStatoCit.selectedIndex == 0)) ||
//    ((document.SaveForm.PCittadinanza[1].checked == true) && (document.SaveForm.PStatoCit.selectedIndex == 1))
//	)
//      {
//	 	alert(messaggio[17]);
//		document.SaveForm.PStatoCit.focus();
//		OK = 0;
//	}
//}

if (OK == 1)
{
 	 if (
	    document.SaveForm.PStatoCit.value == ""
		)
	      {
		 	it_alert_error('MSG-00012');
			OK = 0;
		}
}

if (OK == 1)
{
 if (ControllaEmail(document.SaveForm.PEMail.value)==1)
      {
	 	it_alert_error('MSG-00020');
		document.SaveForm.PEMail.focus();
		OK = 0;
	}
}

if (OK == 1)
{
 if (ControllaTelefono(document.SaveForm.PTelefonoAbitazione.value)== 1)
      {
	 	it_alert_error('MSG-00021');
		document.SaveForm.PTelefonoAbitazione.focus();
		OK = 0;
	}
}

if (OK == 1)
{
 if (ControllaTelefono(document.SaveForm.PTelefonoUfficio.value)==1)
      {
	 	it_alert_error('MSG-00021');
		document.SaveForm.PTelefonoUfficio.focus();
		OK = 0;
	}
}

if (OK == 1)
{
 if (ControllaTelefono(document.SaveForm.PTelefonoCellulare.value)==1)
      {
	 	it_alert_error('MSG-00021');
		document.SaveForm.PTelefonoCellulare.focus();
		OK = 0;
	}
}

if (OK == 1)
{
 if (ControllaTelefono(document.SaveForm.PFax.value)==1)
      {
	 	it_alert_error('MSG-00021');
		document.SaveForm.PFax.focus();
		OK = 0;
	}
}




if (OK == 1)
{
 if (
      (ControllaNumero(document.SaveForm.PCAPResidenza.value) == 1) ||
      (document.SaveForm.PCAPResidenza.value.length != 5)
    )
   {
	 	it_alert_error('MSG-00036');
		document.SaveForm.PCAPResidenza.focus();
		OK = 0;
	}
}

if (OK == 1)
{
var Aus;
var Aus1;
var Aus2;
var Aus3;
Aus = document.SaveForm.PCAPResidenza.value.substring(0,1);
Aus1 = document.SaveForm.PCAPResidenza.value.substring(1,2);
Aus2 = document.SaveForm.PCAPControlloResidenza.value.substring(0,1);
Aus3 = document.SaveForm.PCAPControlloResidenza.value.substring(1,2);
if (
 (Aus != Aus2) || (Aus1 != Aus3)
  )
      {
	 	it_alert_error('MSG-00052');
		document.SaveForm.PCAPResidenza.focus();
		OK = 0;
	}
}

if (OK == 1)
{
 if (
      (ControllaNumero(document.SaveForm.PCAPAltro.value) == 1)  ||
      (document.SaveForm.PCAPAltro.value.length != 5)
    )

      {
	 	it_alert_error('MSG-00036');
		document.SaveForm.PCAPAltro.focus();
		OK = 0;
	}
}

if (OK == 1)
{
var Aus;
var Aus1;
var Aus2;
var Aus3;
Aus = document.SaveForm.PCAPAltro.value.substring(0,1);
Aus1 = document.SaveForm.PCAPAltro.value.substring(1,2);
Aus2 = document.SaveForm.PCAPControlloAltro.value.substring(0,1);
Aus3 = document.SaveForm.PCAPControlloAltro.value.substring(1,2);
if (
 (Aus != Aus2) || (Aus1 != Aus3)
  )
      {
	 	it_alert_error('MSG-00052');
		document.SaveForm.PCAPAltro.focus();
		OK = 0;
	}
}






if (OK == 1)
{
 if (document.SaveForm.PCodFiscale.value.length != 16)

      {
	 	it_alert_error('MSG-00042');
		document.SaveForm.PCodFiscale.focus();
		OK = 0;
	}
}

if (OK == 1)
{
 if (controllaAlfanumerico(document.SaveForm.PNumeroDocumento.value) == 1)

      {
	 	it_alert_error('MSG-00045');
		document.SaveForm.PNumeroDocumento.focus();
		OK = 0;
	}
}

if (OK == 1)
{
  if (ControllaPresenzaApice(document.SaveForm.PCodFiscale.value.toUpperCase())==1)
   {
     it_alert_error('MSG-00066');
     OK = 0;
     document.SaveForm.PCodFiscale.focus();
   }
}





if (OK == 1)
{
  if (testCodiceFiscale(document.SaveForm.PCodFiscale.value.toUpperCase())==true)
	{

      OK = 1;
      }
   else
    {
     it_alert_error('MSG-00066');
     OK = 0;
     document.SaveForm.PCodFiscale.focus();
    }
}




document.SaveForm.PCodFiscale.value = document.SaveForm.PCodFiscale.value.toUpperCase();
document.SaveForm.PNome.value = document.SaveForm.PNome.value.toUpperCase();
document.SaveForm.PCognome.value = document.SaveForm.PCognome.value.toUpperCase();




if (OK == 1)
{
//Controllo il campo cognome
var CodiceFiscaleOK = 0;
var StringaErroreCodiceFiscale = "Errore: \n\r";
var Ritorno;
var Cognome1 = calcolaCognome(document.SaveForm.PCognome.value);
var Cognome2 = document.SaveForm.PCodFiscale.value.substring(0,3);
if (Cognome1 != Cognome2)
{
	CodiceFiscaleOK = 1;
        StringaErroreCodiceFiscale = StringaErroreCodiceFiscale+' '+it_text_error('MSG-00142')+'\n\r';
}
//Controllo il campo cognome
var Nome1 = calcolaNome(document.SaveForm.PNome.value);
var Nome2 = document.SaveForm.PCodFiscale.value.substring(3,6);
if (Nome1 != Nome2)
{
	CodiceFiscaleOK = 1;
        StringaErroreCodiceFiscale = StringaErroreCodiceFiscale+' '+it_text_error('MSG-00143')+'\n\r';
}

//ch 910
//Controllo il campo del comune di nascita
if (OK == 1)
{

	var codiceCitta1 = document.SaveForm.PCodFiscale.value.substring(11,15);
	var codiceCitta2 = document.SaveForm.PCodiceComuneNascita.value;
	if (codiceCitta2 != 'EE'){
		if (codiceCitta1 != codiceCitta2) {
			CodiceFiscaleOK = 1;
        	StringaErroreCodiceFiscale = StringaErroreCodiceFiscale+' '+it_text_error('MSG-00224')+'\n\r';
		}
	}
}

//Controllo il campo data di nascita e sesso
var Giorno1 = calcolaGiorno(document.SaveForm.PGiornoNascita.value,document.SaveForm.PSesso.value);
var Giorno2 = document.SaveForm.PCodFiscale.value.substring(9,11);
var Mese1 = calcolaMese(document.SaveForm.PMeseNascita.value);
var Mese2 = document.SaveForm.PCodFiscale.value.substring(8,9);
var Anno1 = calcolaAnno(document.SaveForm.PAnnoNascita.value);
var Anno2 = document.SaveForm.PCodFiscale.value.substring(6,8);
if ((Giorno1 != Giorno2) || (Mese1 != Mese2) || (Anno1 != Anno2))
{
	CodiceFiscaleOK = 1;
	StringaErroreCodiceFiscale = StringaErroreCodiceFiscale+' '+it_text_error('MSG-00144')+'\n\r';
}
if (CodiceFiscaleOK == 1)
{
	//ch910 inibita la forzatura
	/* Ritorno=confirm(StringaErroreCodiceFiscale+' '+it_text_error('MSG-00145'));
        if (Ritorno == false)
         {
		OK = 0;
         }
    */
    OK = 0;
    alert(StringaErroreCodiceFiscale+' '+it_text_error('MSG-00225'));
}
}



//-----------CONTROLLO I DATI RELATIVI ALLO SCOPO E NATURA DEL RAPPORTO ---------------------------------

if	(OK == 1)
{
 if (
     ((document.SaveForm.PScopoNaturaRapportoT.value != "") &&
      (document.SaveForm.PScopoNaturaRapportoL.selectedIndex != 0) &&
	  (document.SaveForm.PScopoNaturaRapportoL.selectedIndex != 3))
	 )
	{
      it_alert_error('MSG-00019');
	  OK = 0;

	  document.SaveForm.PScopoNaturaRapportoT.focus();
   }
  else
  {
   	if 	((document.SaveForm.PScopoNaturaRapportoT.value != "") )
	{
       document.SaveForm.PScopoNaturaRapporto.value = document.SaveForm.PScopoNaturaRapportoT.value;
    }
	if 	((document.SaveForm.PScopoNaturaRapporto.value == "") )
	{
	  document.SaveForm.PScopoNaturaRapporto.value = document.SaveForm.PScopoNaturaRapportoL[document.SaveForm.PScopoNaturaRapportoL.selectedIndex].text;
    }
 }
}

 if (OK == 1)
 {
  if (document.SaveForm.PScopoNaturaRapporto.value == "")
  {
      it_alert_error('MSG-00012');
	  OK = 0;
	  document.SaveForm.PScopoNaturaRapportoL.focus();

  }
 }

if (OK == 1)
 {
 	if ((document.SaveForm.PScopoNaturaRapportoL.selectedIndex == 3)
 	     && trim(document.SaveForm.PScopoNaturaRapportoT.value) == "")
 	     {
 	     	it_alert_error('MSG-00240');
 	     	OK = 0;
	  		document.SaveForm.PScopoNaturaRapportoT.focus();
 	     }
 }

//-----------FINE CONTROLLO I DATI RELATIVI ALLO SCOPO E NATURA DEL RAPPORTO ----------------------------

//------------------ch 910: eliminazione lettere accentate----------------------------

checkAccenti(document.SaveForm.PNome);                    //alert(document.SaveForm.PNome.value);              
checkAccenti(document.SaveForm.PCognome);                 //alert(document.SaveForm.PCognome.value);           
checkAccenti(document.SaveForm.PNatoProvA);               //alert(document.SaveForm.PNatoProvA.value);         
checkAccenti(document.SaveForm.PIndirizzoResidenza);      //alert(document.SaveForm.PIndirizzoResidenza.value);
checkAccenti(document.SaveForm.PIndirizzoAltro);          //alert(document.SaveForm.PIndirizzoAltro.value);    
   
//--------------fine ch 910

//Trasmetto i dati

if (OK == 1)
{
   document.SaveForm.PIndirizzoResidenza.value = document.SaveForm.PIndirizzoResidenza.value.toUpperCase();
  document.SaveForm.PIndirizzoAltro.value = document.SaveForm.PIndirizzoAltro.value.toUpperCase();
  document.SaveForm.PNumeroDocumento.value = document.SaveForm.PNumeroDocumento.value.toUpperCase();

  //Trasmetto i dati
  document.SaveForm.submit();
}

}
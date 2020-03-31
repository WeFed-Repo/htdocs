
//--------------------------------------------------------------------
//Pongo l'indirizzo di recapito uguale all'indirizzo di residenza
function AltroUgualeResidenza() {
document.SaveForm.PIndirizzoAltro.value = document.SaveForm.PIndirizzoResidenza.value;
document.SaveForm.PProvinciaAltro.value  = document.SaveForm.PProvinciaResidenza.value;
document.SaveForm.PCAPAltro.value = document.SaveForm.PCAPResidenza.value;
document.SaveForm.PCAPControlloAltro.value = document.SaveForm.PCAPControlloResidenza.value;
document.SaveForm.PComuneProvAltro.value = document.SaveForm.PComuneProvResidenza.value;
document.SaveForm.PComuneAltro.value = document.SaveForm.PComuneResidenza.value;
//document.SaveForm.PNazioneCorrispondenza.value = document.SaveForm.PNazioneResidenza.value;
document.SaveForm.PNazioneAltro.value = document.SaveForm.PNazioneResidenza.value;
}
//----------------------------------------------------------------
//Controllo la correttezza dei campi CodiceNascita, CodiceComuneNascita e CodiceStatoNascita
function ControlloCodiceNascita() {
    if (document.SaveForm.PNatoA.value == "")
		{
		 return 0;
		}
   else
        {
		 	if (document.SaveForm.PStatoNascita.value == "ITALIA")
				{
				 //L'utente ha indicato un comune italiano
		 		 document.SaveForm.PCodiceNascita.value = document.SaveForm.PCodiceComuneNascita.value;
				}
			else
			   {

				 //L'utente ha indicato uno stato estero
		 		 document.SaveForm.PCodiceNascita.value = document.SaveForm.PCodiceStatoNascita.value;
				 document.SaveForm.PProvinciaNascita.value = "";
				}

		}
	return 1;
}

//-----------------------------------------------------------------
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
    if(VarAus[i][1]==Iniziale)
	  {
	  	h = j;
	  }
    }
	j++;
}
Provincia.options[h].selected = true;
}
//-----------------------------------------------------------------
function ModificatoComuneAltro() {
//C0393
if (document.SaveForm.PNazioneAltro.value == "ITALIA") {
	it_alert_error('MSG-00051');	
	document.SaveForm.PComuneProvAltro.blur();
	if (document.SaveForm.PProvinciaAltro.value == "")
	{
	 document.SaveForm.PComuneProvAltro.value = document.SaveForm.PComuneAltro.value;
	}
	else
	{
	document.SaveForm.PComuneProvAltro.value = document.SaveForm.PComuneAltro.value+' ('+document.SaveForm.PProvinciaAltro.value+')';
	}	
} else {
	document.SaveForm.PComuneAltro.value = document.SaveForm.PComuneProvAltro.value;
	document.SaveForm.PProvinciaAltro.value = "";
}


}
//-----------------------------------------------------------------
//
function ModificatoComuneResidenza() {
//C0393
if (document.SaveForm.PNazioneResidenza.value == "ITALIA") {	
	it_alert_error('MSG-00051');
	document.SaveForm.PComuneProvResidenza.blur();
	if (document.SaveForm.PProvinciaResidenza.value == "")
	{
	 document.SaveForm.PComuneProvResidenza.value = document.SaveForm.PComuneResidenza.value;
	}
	else
	{
	document.SaveForm.PComuneProvResidenza.value = document.SaveForm.PComuneResidenza.value+' ('+document.SaveForm.PProvinciaResidenza.value+')';
	}
} else {
	document.SaveForm.PComuneResidenza.value = document.SaveForm.PComuneProvResidenza.value;
	document.SaveForm.PProvinciaResidenza.value = "";	
	}
}

//-----------------------------------------------------------------
//
function ModificatoComuneNato() {
it_alert_error('MSG-00051');
if (document.SaveForm.PProvinciaNascita.value == "")
{
 document.SaveForm.PNatoProvA.value = document.SaveForm.PNatoA.value;
}
else
{
document.SaveForm.PNatoProvA.value = document.SaveForm.PNatoA.value+' ('+document.SaveForm.PProvinciaNascita.value+')';
}
}
//-----------------------------------------------------------------
//funzione che permette l'inserimento di un comune di nascita estero se lo stato di nascita inserito e' uno stato estero.
function permetti_comune_estero()
{
	if (document.SaveForm.PStatoProvNascita.value == 'ITALIA') {
		document.SaveForm.PNatoProvA.blur();
		ModificatoComuneNato();
	}
}
//-----------------------------------------------------------------
//funzione che permette di valorizzare alcuni campi hidden quando il comune di nascita non e' italiano (per quelli italiani viene fatto da jsComuniItaliani2.js).
function valorizza_comune_estero()
{
	if (document.SaveForm.PStatoNascita.value != 'ITALIA') {
		document.SaveForm.PNatoProvA.value=document.SaveForm.PNatoProvA.value.toUpperCase();
		document.SaveForm.PProvinciaNascita.value="";
		document.SaveForm.PCodiceComuneNascita.value="EE";
		document.SaveForm.PNatoA.value=document.SaveForm.PNatoProvA.value;
	}
}
//-----------------------------------------------------------------
//
function ModificatoComuneDocumento() {
it_alert_error('MSG-00051');
if (document.SaveForm.PProvinciaDocumento.value == "")
{
 document.SaveForm.PComuneProvDocumento.value = document.SaveForm.PComuneDocumento.value;
}
else
{
document.SaveForm.PComuneProvDocumento.value = document.SaveForm.PComuneDocumento.value+' ('+document.SaveForm.PProvinciaDocumento.value+')';
}
}
//-----------------------------------------------------------------------------------
//
function ModificatoStatoDocumento() {
it_alert_error('MSG-00053');

 document.SaveForm.PStatoProvDocumento.value = document.SaveForm.PStatoDocumento.value;

}
//-----------------------------------------------------------------------------------
//
function ModificatoStatoCorrispondenza() {
it_alert_error('MSG-00053');

 document.SaveForm.PNazioneAltro.value = document.SaveForm.PNazioneAltro.value;
  
}
//-----------------------------------------------------------------------------------
//
function ModificatoStatoResidenza() {
it_alert_error('MSG-00053');

  document.SaveForm.PNazioneResidenza.value = document.SaveForm.PNazioneResidenza.value;
  
}
//------------------------------------------------------------------------------------
function ModificatoStatoNato() {

it_alert_error('MSG-00053');

 document.SaveForm.PStatoProvNascita.value = document.SaveForm.PStatoNascita.value;

}
//--------------------------------------------------------
var remote = null;
function InserireStatoCorrispondenza(indirizzo)
{
remote = window.open(indirizzo , "RaccattaStatoDocumento" , "width=460,height=285,toolbar=no,menubar=no,location=no,scrollbars=yes,resizable=yes,top=150,left=150");
if (remote != null)
{
 if (remote.opener == null)
   {
     remote.opener= self;
   }
}
remote.focus();

}
//-----------------------------------------------------------
var remote = null;
function InserireStatoDocumento(indirizzo)
{
remote = window.open(indirizzo , "RaccattaStatoDocumento" , "width=460,height=285,toolbar=no,menubar=no,location=no,scrollbars=yes,resizable=yes,top=150,left=150");
if (remote != null)
{
 if (remote.opener == null)
   {
     remote.opener= self;
   }
}
remote.focus();

}
//------------------------------------------------------------
var remoteCDoc = null;
function InserireComuneDocumento(indirizzo)
{
remoteCDoc = window.open(indirizzo, "accattaComuneDocumento", "width=460,height=285,toolbar=no,menubar=no,location=no,scrollbars=yes,resizable=yes,top=150,left=150");
if (remoteCDoc != null)
{
 if (remoteCDoc.opener == null)
   {
     remoteCDoc.opener= self;
   }
}
remoteCDoc.focus();
}
//------------------------------------------------------------
var remoteCAltro = null;
function InserireComuneAltro(indirizzo)
{
remoteCAltro = window.open(indirizzo, "accattaComuneAltro", "width=660,height=285,toolbar=no,menubar=no,location=no,scrollbars=yes,resizable=yes,top=150,left=150");
if (remoteCAltro != null)
{
 if (remoteCAltro.opener == null)
   {
     remoteCAltro.opener= self;
   }
}
remoteCAltro.focus();
}
//------------------------------------------------------------
var remoteCResidenza = null;
function InserireComuneResidenza(indirizzo)
{

remoteCResidenza = window.open(indirizzo, "accattaComuneResidenza", "width=460,height=285,toolbar=no,menubar=no,location=no,scrollbars=yes,resizable=yes,top=150,left=150");
if (remoteCResidenza != null)
{
 if (remoteCResidenza.opener == null)
   {
     remoteCResidenzao.opener= self;
   }
}
remoteCResidenza.focus();
}
//------------------------------------------------------------
var remoteCNascita = null;
function InserireComuneNascita(indirizzo)
{
remoteCNascita = window.open(indirizzo, "accattaComuneNascita", "width=460,height=285,toolbar=no,menubar=no,location=no,scrollbars=yes,resizable=yes,top=150,left=150");
if (remoteCNascita != null)
{
 if (remoteCNascita.opener == null)
   {
     remoteCNascita.opener= self;
   }
}
remoteCNascita.focus();
}
//------------------------------------------------------------
var remoteSNascita = null;
function InserireStatoNascita(indirizzo)
{
remoteSNascita = window.open(indirizzo, "accattaStatoNascita", "width=460,height=285,toolbar=no,menubar=no,location=no,scrollbars=yes,resizable=yes,top=150,left=150");
if (remoteSNascita != null)
{
 if (remoteSNascita.opener == null)
   {
     remoteSNascita.opener= self;
   }
}
remoteSNascita.focus();
}
//------------------------------------------------------------
var remoteSCit = null;
function InserireStatoCitta(indirizzo)
{

remoteSCit = window.open(indirizzo, "accattaStatoCitta", "width=460,height=285,toolbar=no,menubar=no,location=no,scrollbars=yes,resizable=yes,top=150,left=150");
if (remoteSCit != null)
{
 if (remoteSCit.opener == null)
   {
     remoteSCit.opener= self;
   }
}
remoteSCit.focus();
}
//------------------------------------------------------------
var remoteSRes = null;
function InserireStatoResidenza(indirizzo)
{

remoteSRes = window.open(indirizzo, "accattaStatoResidenza", "width=460,height=285,toolbar=no,menubar=no,location=no,scrollbars=yes,resizable=yes,top=150,left=150");
if (remoteSRes != null)
{
 if (remoteSRes.opener == null)
   {
     remoteSRes.opener= self;
   }
   remoteSRes.focus();   
}
}
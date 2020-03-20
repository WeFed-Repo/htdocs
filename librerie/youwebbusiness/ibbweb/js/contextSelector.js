/**
 *
 *  Context selector library4.
 *
 *  Javascript Library for interaction with context selector
 *
 *
 *  Copyright (c) 2001 Cedac
 *  author Mauro Franceschini <mauro.franceschini@cedac.com>
 *
 *
 *  Tested with: Explorer 5.50
 *               Netscape 4.73
 */

/**
 * Constant used to indicate that the "All" combo item is selected
 */
var ALL_DATA = -1;


/**
 * Constant used to indicate that the "All" combo item doesn't have to be displayed
 */
var NO_ALL = "";

/**
 * This variable will contain a reference to the array that contains the locations
 */
var locations = null;
var all_locations = null;

/**
 * The reference at the context selector window
 */
var contextSelectorWindowReference = null;

/**
 * The object that contains the names of elements
 */
var ctxElementsNames = null;


/*
	<FUNZIONE label="initializeContextSelectorLibrary">
	<AUTORE>Mauro Franceschini</AUTORE>
	<COMMENTO>Initialize the library with an existent context selector windows. This function must be
	 called by every client window that want to use the services of this library. A client
	 window is every window that use this library other than the context selector itself.</COMMENTO>
	<PARAMETRO label="contextSelectorWindow" DESCRIZIONE="a reference to the context selector window (usually will be passed something like top.frames.context)"/>
	</FUNZIONE>
*/
function initializeContextSelectorLibrary(contextSelectorWindow)
{
    contextSelectorWindowReference = contextSelectorWindow;
	//locations = contextSelectorWindow.locations;
	
	if (contextSelectorWindow.all_locations) {
		locations = JSON.parse(JSON.stringify(contextSelectorWindow.all_locations));
	} else { 
		locations = JSON.parse(JSON.stringify(contextSelectorWindow.locations));
		//backup 
		contextSelectorWindow.all_locations = JSON.parse(JSON.stringify(contextSelectorWindow.locations));
		
	}

}

//2358
function loadLocationForGroup(contextSelectorWindow){

	try{
		for(var i=0;i<locations.length;i++){
		    for(var j=0;j<locations[i].intestatari.length;j++){
		            for(var k=0;k<locations[i].intestatari[j].banche.length;k++){
		                for(var y=0;y<locations[i].intestatari[j].banche[k].rapportiCC.length;y++){
		                    if (locations[i].intestatari[j].banche[k].rapportiCC[y].bancaDelGruppo.charAt(0) != 'G' && 
		                    		locations[i].intestatari[j].banche[k].rapportiCC[y].bancaDelGruppo.charAt(0) != 'E') {
		                        //console.log("Cancello CONTO "+locations[i].intestatari[j].banche[k].rapportiCC[y].iban+" "+locations[i].intestatari[j].banche[k].rapportiCC[y].bancaDelGruppo);
		                        locations[i].intestatari[j].banche[k].rapportiCC.splice(y, 1);
		                        y--;
		                        
		                    }
		                }

		                if (locations[i].intestatari[j].banche[k].rapportiCC.length==0){
		                    //console.log("Cancello banca "+locations[i].intestatari[j].banche[k].descrizione)
		                    locations[i].intestatari[j].banche.splice(k, 1);
		                    k--;
		                }
		                
		            }
		    }
		}
	}catch(e){
		console.log(e);
	}	
	
}

//2358
function loadLocationForAll(contextSelectorWindow){

	if (contextSelectorWindow.all_locations) {
		locations = JSON.parse(JSON.stringify(contextSelectorWindow.all_locations));
	} else { 
		locations = JSON.parse(JSON.stringify(contextSelectorWindow.locations));
	}

}



/*
	<FUNZIONE label="initializeServerContextSelectorLibrary()">
	<AUTORE>Mauro Franceschini</AUTORE>
	<COMMENTO>This function is an extension of initializeServerContextSelectorLibrary. It adds conto portafoglio functionality</COMMENTO>
 	<PARAMETRO label="contextSelectorWindow" DESCRIZIONE="a reference to the context selector window (usually will be passed the window object or this)"/>
	<PARAMETRO label="formElement" DESCRIZIONE="the name of the form containing the combo boxes elements"/>
	<PARAMETRO label="locationElement" DESCRIZIONE="the name of the form containing the combo boxes elements"/>
	<PARAMETRO label="accounteerElement" DESCRIZIONE="intestatario"/>
	<PARAMETRO label="bankElement" DESCRIZIONE="banca"/>
	<PARAMETRO label="ccElement" DESCRIZIONE="tipologia di conto"/>
	<PARAMETRO label="caElement" DESCRIZIONE="tipologia di conto"/>
	<PARAMETRO label="dtElement" DESCRIZIONE="tipologia di conto"/>
	<PARAMETRO label="cpElement" DESCRIZIONE="tipologia di conto"/>
	<PARAMETRO label="esElement" DESCRIZIONE="tipologia di conto"/>
	</FUNZIONE>
*/
function initializeServerContextSelectorLibrary(contextSelectorWindow, formElement, locationElement, accounteerElement, bankElement, ccElement, caElement, dtElement, cpElement, esElement)
{
   initializeContextSelectorLibrary(contextSelectorWindow);
   ctxElementsNames = new Object();
   ctxElementsNames.formName = formElement;
   ctxElementsNames.location = locationElement;
   ctxElementsNames.accounteer = accounteerElement;
   ctxElementsNames.bank = bankElement;
   ctxElementsNames.cc = ccElement;
   ctxElementsNames.dt = dtElement;
   ctxElementsNames.ca = caElement;   
   ctxElementsNames.cp = cpElement;
   ctxElementsNames.es = esElement;
 
}



/*
	<FUNZIONE label="getContextForm">
	<AUTORE>Mauro Franceschini</AUTORE>
	<COMMENTO>Retrieve the context selector form</COMMENTO>
	</FUNZIONE>
*/
function getContextForm()
{
    return contextSelectorWindowReference.document.forms[contextSelectorWindowReference.ctxElementsNames.formName];
}

/*
	<FUNZIONE label="getContextLocationCombo">
	<AUTORE>Mauro Franceschini</AUTORE>
	<COMMENTO></COMMENTO>
	</FUNZIONE>
*/
function getContextLocationCombo()
{
    return getContextForm().elements[contextSelectorWindowReference.ctxElementsNames.location];
}

/*
	<FUNZIONE label="getContextAccounteerCombo">
	<AUTORE>Mauro Franceschini</AUTORE>
	<COMMENTO></COMMENTO>
	</FUNZIONE>
*/
function getContextAccounteerCombo()
{
    return getContextForm().elements[contextSelectorWindowReference.ctxElementsNames.accounteer];
}

/*
	<FUNZIONE label="getContextBankCombo">
	<AUTORE>Mauro Franceschini</AUTORE>
	<COMMENTO></COMMENTO>
	</FUNZIONE>
*/
function getContextBankCombo()
{
    return getContextForm().elements[contextSelectorWindowReference.ctxElementsNames.bank];
}

/*
	<FUNZIONE label="getContextCCCombo">
	<AUTORE>Mauro Franceschini</AUTORE>
	<COMMENTO></COMMENTO>
	</FUNZIONE>
*/
function getContextCCCombo()
{
    return getContextForm().elements[contextSelectorWindowReference.ctxElementsNames.cc];
}


/*
	<FUNZIONE label="getContextDTCombo">
	<AUTORE>Mauro Franceschini</AUTORE>
	<COMMENTO></COMMENTO>
	</FUNZIONE>
*/
function getContextDTCombo()
{
    return getContextForm().elements[contextSelectorWindowReference.ctxElementsNames.dt];
}

/*
	<FUNZIONE label="getContextESCombo">
	<AUTORE>Mauro Franceschini</AUTORE>
	<COMMENTO></COMMENTO>
	</FUNZIONE>
*/
function getContextESCombo()
{
    return getContextForm().elements[contextSelectorWindowReference.ctxElementsNames.es];
}

/*
	<FUNZIONE label="getContextCACombo">
	<AUTORE>Mauro Franceschini</AUTORE>
	<COMMENTO></COMMENTO>
	</FUNZIONE>
*/
function getContextCACombo()
{
    return getContextForm().elements[contextSelectorWindowReference.ctxElementsNames.ca];
}

/*
	<FUNZIONE label="getContextCPCombo">
	<AUTORE>Mauro Franceschini</AUTORE>
	<COMMENTO></COMMENTO>
	</FUNZIONE>
*/
function getContextCPCombo()
{
    return getContextForm().elements[contextSelectorWindowReference.ctxElementsNames.cp];
}


/*
	<FUNZIONE label="createNewRepository">
	<AUTORE>Mauro Franceschini</AUTORE>
	<COMMENTO>Create a new repository of information</COMMENTO>
	</FUNZIONE>
*/
function createNewRepository()
{
    locations = new Array();
}

/*
	<FUNZIONE label="addLocation">
	<AUTORE>Mauro Franceschini</AUTORE>
	<COMMENTO>Add a new location and return a reference to it</COMMENTO>
	<PARAMETRO label="code" DESCRIZIONE="tipologia di conto"/>
	<PARAMETRO label="description" DESCRIZIONE="tipologia di conto"/>
	</FUNZIONE>
*/
function addLocation(code, description)
{
    var location = new Object();
    location.codice = code;
    location.descrizione = description;
    location.intestatari = new Array();
    locations[locations.length] = location;
    return location;
}

/*
	<FUNZIONE label="addAccounteer">
	<AUTORE>Mauro Franceschini</AUTORE>
	<COMMENTO>Add a new accounteer and return a reference to it, used by contextselector-html.xsl</COMMENTO>
	<PARAMETRO label="location" DESCRIZIONE=""/>
	<PARAMETRO label="code" DESCRIZIONE=""/>
	<PARAMETRO label="description" DESCRIZIONE=""/>
	<PARAMETRO label="cf" DESCRIZIONE=""/>
	<PARAMETRO label="tipocf" DESCRIZIONE=""/>
	<PARAMETRO label="sia" DESCRIZIONE=""/>
	<PARAMETRO label="abilitazione_xml" DESCRIZIONE="flag abilitazione funzioni xml 'A': abilitato / 'D': disabilitato"/>
	<PARAMETRO label="cuc_intestatario" DESCRIZIONE="codice cuc dell'intestatario"/>
	<PARAMETRO label="signature" DESCRIZIONE=""/>
	<PARAMETRO label="descrizione_tot" DESCRIZIONE=""/>
	<PARAMETRO label="indirizzo" DESCRIZIONE=""/>
	<PARAMETRO label="piazza" DESCRIZIONE=""/>
	<PARAMETRO label="cap" DESCRIZIONE=""/>
	<PARAMETRO label="provincia" DESCRIZIONE=""/>
	<PARAMETRO label="localita" DESCRIZIONE=""/>
	<PARAMETRO label="abi" DESCRIZIONE=""/>
	<PARAMETRO label="cab" DESCRIZIONE=""/>
	<PARAMETRO label="dispoDefaultElcos" DESCRIZIONE=""/>
	<PARAMETRO label="flagIntestazioneContoElcos" DESCRIZIONE=""/>
	<PARAMETRO label="paeseDefaultElcos" DESCRIZIONE=""/>
	<PARAMETRO label="codiceEsteroCedenteElcos" DESCRIZIONE=""/>
	</FUNZIONE>
*/
function addAccounteer(location, code, description, cf, tipocf, sia, abilitazione_xml, cuc_intestatario, signature, descrizione_tot, indirizzo, piazza, cap, provincia, localita, abi, cab, dispoDefaultElcos, flagIntestazioneContoElcos, paeseDefaultElcos, codiceEsteroCedenteElcos)
{
    var accounteer = new Object();
    accounteer.codice = code;
    accounteer.descrizione = description;
    accounteer.firma = signature;
    accounteer.codice_fiscale = cf;
    accounteer.tipocf = tipocf;
    accounteer.codice_sia = sia;
    accounteer.abilitazione_xml = abilitazione_xml;
    accounteer.cuc_intestatario = cuc_intestatario;
    accounteer.descrizione_intera = descrizione_tot;
    accounteer.indirizzo = indirizzo;
    accounteer.piazza = piazza;
    accounteer.cap = cap;
    accounteer.provincia = provincia;
    accounteer.localita = localita;
    accounteer.banche = new Array();
    accounteer.postazione = location.codice;
    accounteer.abi = abi;
    accounteer.cab = cab;
    accounteer.dispo_default_elcos = dispoDefaultElcos;
    accounteer.flag_intestazione_conto_elcos = flagIntestazioneContoElcos;
    accounteer.paese_default_elcos = paeseDefaultElcos
    accounteer.codice_estero_cedente_elcos = codiceEsteroCedenteElcos;
    location.intestatari[location.intestatari.length] = accounteer;
    return accounteer;
}

/*
	<FUNZIONE label="addBank">
	<AUTORE>Mauro Franceschini</AUTORE>
	<COMMENTO>Add a new bank and return a reference to it</COMMENTO>
	<PARAMETRO label="accounteer" DESCRIZIONE="intestatario"/>
	<PARAMETRO label="code" DESCRIZIONE="code"/>
	<PARAMETRO label="description" DESCRIZIONE="descrizione"/>
	<PARAMETRO label="abi" DESCRIZIONE="abi"/>
	</FUNZIONE>
*/
function addBank(accounteer, code, description, abi)
{
    var bank = new Object();
    bank.codice = code;
    bank.descrizione = description;
    bank.abi = abi;
    bank.postazione = accounteer.postazione;//MB
    bank.intestatario = accounteer.codice;//MB
    bank.rapportiCC = new Array();
    bank.rapportiDT = new Array();    
    bank.rapportiCA = new Array();
    bank.rapportiCP = new Array();
    bank.rapportiES = new Array();
    bank.numCCInfo = 0;
    bank.numCCDispo = 0;
    accounteer.banche[accounteer.banche.length] = bank;
    return bank;
}

/*
	<FUNZIONE label="addCC(6)">
	<AUTORE>Mauro Franceschini</AUTORE>
	<COMMENTO>Add a new cc</COMMENTO>
	<PARAMETRO label="bank" DESCRIZIONE="banca"/>
	<PARAMETRO label="code" DESCRIZIONE="code"/>
	<PARAMETRO label="description" DESCRIZIONE="descrizione"/>
	<PARAMETRO label="cab" DESCRIZIONE="cab"/>
	<PARAMETRO label="divisa" DESCRIZIONE="divisa"/>
	<PARAMETRO label="info_dispo" DESCRIZIONE="info_dispo"/>
	</FUNZIONE>
*/
function addCC(bank, code, description, cab, divisa, info_dispo,iban)
{
    var cc = new Object();
    cc.codice = code;
    cc.descrizione = description;
    cc.codice_cab = cab;
    cc.codice_divisa = divisa;
    cc.info_dispo=info_dispo;
    cc.postazione = bank.postazione;//MB
    cc.intestatario = bank.intestatario;//MB
    cc.banca = bank.codice;//MB
    cc.iban=iban;
    bank.rapportiCC[bank.rapportiCC.length] = cc;
    
    if (info_dispo.indexOf("Info"))
    	 bank.numCCInfo = bank.numCCInfo +1;

    if (info_dispo.indexOf("Dispo"))
    	 bank.numCCDispo = bank.numCCDispo +1;

}

/*
	<FUNZIONE label="addCC(7)">
	<AUTORE>Mauro Franceschini</AUTORE>
	<COMMENTO>Add a new cc with desc</COMMENTO>
	<PARAMETRO label="bank" DESCRIZIONE="banca"/>
	<PARAMETRO label="code" DESCRIZIONE="code"/>
	<PARAMETRO label="description" DESCRIZIONE="descrizione"/>
	<PARAMETRO label="cab" DESCRIZIONE="cab"/>
	<PARAMETRO label="divisa" DESCRIZIONE="divisa"/>
	<PARAMETRO label="info_dispo" DESCRIZIONE="info_dispo"/>
	<PARAMETRO label="desc_cc" DESCRIZIONE="desc_cc"/>
	</FUNZIONE>
*/
function addCC(bank, code, description, cab, divisa, info_dispo, desc_cc,iban)
{
    var cc = new Object();
    cc.codice = code;
    cc.descrizione = description;
    cc.codice_cab = cab;
    cc.codice_divisa = divisa;
    cc.info_dispo=info_dispo;
    cc.desc_cc=desc_cc;
    cc.postazione = bank.postazione;//MB
	cc.intestatario = bank.intestatario;//MB
    cc.banca = bank.codice;//MB
    cc.iban=iban;
    bank.rapportiCC[bank.rapportiCC.length] = cc;
    
    if (info_dispo.indexOf("Info"))
    	 bank.numCCInfo = bank.numCCInfo +1;

    if (info_dispo.indexOf("Dispo"))
    	 bank.numCCDispo = bank.numCCDispo +1;
}

/*
	<FUNZIONE label="addCC(8)">
	<AUTORE>Mauro Franceschini</AUTORE>
	<COMMENTO>Add a new cc with stato</COMMENTO>
	<PARAMETRO label="bank" DESCRIZIONE="banca"/>
	<PARAMETRO label="code" DESCRIZIONE="code"/>
	<PARAMETRO label="description" DESCRIZIONE="descrizione"/>
	<PARAMETRO label="cab" DESCRIZIONE="cab"/>
	<PARAMETRO label="divisa" DESCRIZIONE="divisa"/>
	<PARAMETRO label="info_dispo" DESCRIZIONE="info_dispo"/>
	<PARAMETRO label="desc_cc" DESCRIZIONE="desc_cc"/>
	<PARAMETRO label="stato" DESCRIZIONE="stato"/>
	</FUNZIONE>
*/
function addCC(bank, code, description, cab, divisa, info_dispo, desc_cc, stato_cc,iban)
{
    var cc = new Object();
    cc.codice = code;
    cc.descrizione = description;
    cc.codice_cab = cab;
    cc.codice_divisa = divisa;
    cc.info_dispo=info_dispo;
    cc.desc_cc=desc_cc;
    cc.stato_cc=stato_cc;
    cc.postazione = bank.postazione;//MB
	cc.intestatario = bank.intestatario;//MB
    cc.banca = bank.codice;//MB
    cc.iban=iban;
    bank.rapportiCC[bank.rapportiCC.length] = cc;
    
    if (info_dispo.indexOf("Info"))
    	 bank.numCCInfo = bank.numCCInfo +1;

    if (info_dispo.indexOf("Dispo"))
    	 bank.numCCDispo = bank.numCCDispo +1;
}

/*
<FUNZIONE label="addCC(10)">
<AUTORE></AUTORE>
<COMMENTO>Add a new cc with bancadelgruppo</COMMENTO>
<PARAMETRO label="bank" DESCRIZIONE="banca"/>
<PARAMETRO label="code" DESCRIZIONE="code"/>
<PARAMETRO label="description" DESCRIZIONE="descrizione"/>
<PARAMETRO label="cab" DESCRIZIONE="cab"/>
<PARAMETRO label="divisa" DESCRIZIONE="divisa"/>
<PARAMETRO label="info_dispo" DESCRIZIONE="info_dispo"/>
<PARAMETRO label="desc_cc" DESCRIZIONE="desc_cc"/>
<PARAMETRO label="stato_cc" DESCRIZIONE="stato"/>
<PARAMETRO label="iban" DESCRIZIONE="iban"/>
<PARAMETRO label="bancaDelGruppo" DESCRIZIONE="bancaDelGruppo"/>
</FUNZIONE>
*/
function addCC(bank, code, description, cab, divisa, info_dispo, desc_cc, stato_cc,iban, bancaDelGruppo)
{
var cc = new Object();
cc.codice = code;
cc.descrizione = description;
cc.codice_cab = cab;
cc.codice_divisa = divisa;
cc.info_dispo=info_dispo;
cc.desc_cc=desc_cc;
cc.stato_cc=stato_cc;
cc.postazione = bank.postazione;//MB
cc.intestatario = bank.intestatario;//MB
cc.banca = bank.codice;//MB
cc.iban=iban;
cc.bancaDelGruppo=bancaDelGruppo;
bank.rapportiCC[bank.rapportiCC.length] = cc;

if (info_dispo.indexOf("Info"))
	 bank.numCCInfo = bank.numCCInfo +1;

if (info_dispo.indexOf("Dispo"))
	 bank.numCCDispo = bank.numCCDispo +1;
}

/*
	<FUNZIONE label="addDT">
	<AUTORE>Mauro Franceschini</AUTORE>
	<COMMENTO>Add a new dt</COMMENTO>
	<PARAMETRO label="bank" DESCRIZIONE="banca"/>
	<PARAMETRO label="code" DESCRIZIONE="code"/>
	<PARAMETRO label="description" DESCRIZIONE="descrizione"/>
	<PARAMETRO label="cab" DESCRIZIONE="cab"/>
	</FUNZIONE>
*/
function addDT(bank, code, description, cab)
{
    var dt = new Object();
    dt.codice = code;
    dt.descrizione = description;
    dt.codice_cab = cab;
    dt.postazione = bank.postazione;//MB
	dt.intestatario = bank.intestatario;//MB
    dt.banca = bank.codice;//MB
    bank.rapportiDT[bank.rapportiDT.length] = dt;
}

/*
	<FUNZIONE label="addES">
	<AUTORE>Mauro Franceschini</AUTORE>
	<COMMENTO>Add a new ES</COMMENTO>
	<PARAMETRO label="bank" DESCRIZIONE="banca"/>
	<PARAMETRO label="code" DESCRIZIONE="code"/>
	<PARAMETRO label="description" DESCRIZIONE="descrizione"/>
	<PARAMETRO label="cab" DESCRIZIONE="cab"/>
	</FUNZIONE>
*/
function addES(bank, code, description, cab)
{
	/** 
	 * Questa parte riempie a sinistra la descrizione del Conto
	 * fino al raggiungimento di 12 caratteri
	 */
	var abiPart = description.substring(0,description.indexOf('-')+2);
	var ccPart = description.substring(description.indexOf('-')+2,description.length);

	description = abiPart + ccPart;
	/* ============================================================ */
    var es = new Object();
    es.codice = code;
    es.descrizione = description;
    es.codice_cab = cab;
    es.postazione = bank.postazione;//MB
	 es.intestatario = bank.intestatario;//MB
    es.banca = bank.codice;//MB
    bank.rapportiES[bank.rapportiES.length] = es;
}

/*
	<FUNZIONE label="addCA(5)">
	<AUTORE>Mauro Franceschini</AUTORE>
	<COMMENTO>Add a new CA</COMMENTO>
	<PARAMETRO label="bank" DESCRIZIONE="banca"/>
	<PARAMETRO label="code" DESCRIZIONE="code"/>
	<PARAMETRO label="description" DESCRIZIONE="descrizione"/>
	<PARAMETRO label="cab" DESCRIZIONE="cab"/>
	<PARAMETRO label="desc_ca" DESCRIZIONE="desc_ca"/>
	</FUNZIONE>
*/
function addCA(bank, code, description, cab, desc_ca)
{
    var ca = new Object();
    ca.codice = code;
    ca.descrizione = description;
    ca.codice_cab = cab;
    ca.desc_ca=desc_ca;
    ca.postazione = bank.postazione;//MB
	ca.intestatario = bank.intestatario;//MB
    ca.banca = bank.codice;//MB
    bank.rapportiCA[bank.rapportiCA.length] = ca;
}

/*
	<FUNZIONE label="addCA(6)">
	<AUTORE>Mauro Franceschini</AUTORE>
	<COMMENTO>Add a new CA</COMMENTO>
	<PARAMETRO label="bank" DESCRIZIONE="banca"/>
	<PARAMETRO label="code" DESCRIZIONE="code"/>
	<PARAMETRO label="description" DESCRIZIONE="descrizione"/>
	<PARAMETRO label="cab" DESCRIZIONE="cab"/>
	<PARAMETRO label="desc_ca" DESCRIZIONE="desc_ca"/>
	<PARAMETRO label="stato_cc" DESCRIZIONE="stato_cc"/>
	</FUNZIONE>
*/
function addCA(bank, code, description, cab, desc_ca, stato_cc)
{
    var ca = new Object();
    ca.codice = code;
    ca.descrizione = description;
    ca.codice_cab = cab;
    ca.desc_ca=desc_ca;
    ca.stato_cc = stato_cc;
    ca.postazione = bank.postazione;//MB
	ca.intestatario = bank.intestatario;//MB
    ca.banca = bank.codice;//MB
    bank.rapportiCA[bank.rapportiCA.length] = ca;
}

/*
	<FUNZIONE label="addCP(5)">
	<AUTORE>Mauro Franceschini</AUTORE>
	<COMMENTO>Add a new cp</COMMENTO>
	<PARAMETRO label="bank" DESCRIZIONE="banca"/>
	<PARAMETRO label="code" DESCRIZIONE="code"/>
	<PARAMETRO label="description" DESCRIZIONE="descrizione"/>
	<PARAMETRO label="cab" DESCRIZIONE="cab"/>
	<PARAMETRO label="desc_cp" DESCRIZIONE="desc_cp"/>
	</FUNZIONE>
*/
function addCP(bank, code, description, cab, desc_cp)
{
    var cp = new Object();
    cp.codice = code;
    cp.descrizione = description;
    cp.codice_cab = cab;
    cp.desc_cp=desc_cp;
    cp.postazione = bank.postazione;//MB
	cp.intestatario = bank.intestatario;//MB
    cp.banca = bank.codice;//MB
    bank.rapportiCP[bank.rapportiCP.length] = cp;
}

/*
	<FUNZIONE label="addCP(6)">
	<AUTORE>Mauro Franceschini</AUTORE>
	<COMMENTO>Add a new cp with stato</COMMENTO>
	<PARAMETRO label="bank" DESCRIZIONE="banca"/>
	<PARAMETRO label="code" DESCRIZIONE="code"/>
	<PARAMETRO label="description" DESCRIZIONE="descrizione"/>
	<PARAMETRO label="cab" DESCRIZIONE="cab"/>
	<PARAMETRO label="desc_cp" DESCRIZIONE="desc_cp"/>
	<PARAMETRO label="stato_cp" DESCRIZIONE="stato_cp"/>
	</FUNZIONE>
*/
function addCP(bank, code, description, cab, desc_cp, stato_cp)
{
    var cp = new Object();
    cp.codice = code;
    cp.descrizione = description;
    cp.codice_cab = cab;
    cp.desc_cp=desc_cp;
    cp.stato_cp = stato_cp;
    cp.postazione = bank.postazione;//MB
	cp.intestatario = bank.intestatario;//MB
    cp.banca = bank.codice;//MB
    bank.rapportiCP[bank.rapportiCP.length] = cp;
}

/*
	<FUNZIONE label="addCP(8)">
	<AUTORE>Mauro Franceschini</AUTORE>
	<COMMENTO>Add a new cp</COMMENTO>
	<PARAMETRO label="bank" DESCRIZIONE="banca"/>
	<PARAMETRO label="code" DESCRIZIONE="code"/>
	<PARAMETRO label="description" DESCRIZIONE="descrizione"/>
	<PARAMETRO label="cab" DESCRIZIONE="cab"/>
	<PARAMETRO label="divisa" DESCRIZIONE="divisa"/>
	<PARAMETRO label="info_dispo" DESCRIZIONE="info_dispo"/>
	<PARAMETRO label="desc_cp" DESCRIZIONE="desc_cp"/>
	<PARAMETRO label="stato_cp" DESCRIZIONE="stato_cp"/>
	</FUNZIONE>
*/
function addCP(bank, code, description, cab, divisa, info_dispo, desc_cp, stato_cp)
{
    var cp = new Object();
    cp.codice = code;
    cp.descrizione = description;
    cp.codice_cab = cab;
    cp.codice_divisa = divisa;
    cp.info_dispo=info_dispo;
    cp.desc_cp=desc_cp;
    cp.stato_cp=stato_cp;
    cp.postazione = bank.postazione;//MB
	cp.intestatario = bank.intestatario;//MB
    cp.banca = bank.codice;//MB
    bank.rapportiCP[bank.rapportiCP.length] = cp;
}


/*
	<FUNZIONE label="createParameterObject">
	<AUTORE>Mauro Franceschini</AUTORE>
	<COMMENTO>Create a new parameter object with all the fields initialized at ALL_DATA.()
	return a new parameter object</COMMENTO>
	</FUNZIONE>
*/
function createParameterObject()
{
    var parameter = new Object();
    parameter.location = ALL_DATA;
    parameter.accounteer = ALL_DATA;
    parameter.bank = ALL_DATA;
    if (getContextAccounteerCombo().selectedIndex > 0)
    {
        parameter.accounteer = getContextAccounteerCombo().selectedIndex - 1;
        if (getContextBankCombo().selectedIndex > 0)
        {
            parameter.bank = getContextBankCombo().options[getContextBankCombo().selectedIndex].value;
        }
    }
    return parameter;
}

/*
	<FUNZIONE label="createParameterObjectFromCombos">
	<AUTORE>Mauro Franceschini</AUTORE>
	<COMMENTO>Create a new parameter object from combos intestatario e banca
	- return a new parameter object</COMMENTO>
	<PARAMETRO label="location" DESCRIZIONE="location"/>
	<PARAMETRO label="accounteer" DESCRIZIONE="intestatario"/>
	<PARAMETRO label="bank" DESCRIZIONE="banca"/>
	</FUNZIONE>
*/
function createParameterObjectFromCombos(location, accounteer, bank)
{
    var parameter = createParameterObject();
    if (location != null)
    {
        parameter.location = location.selectedIndex - 1;
    }
    if (accounteer != null)
    {
        parameter.accounteer = accounteer.selectedIndex - 1;
    }
    if (bank != null)
    {
        if (bank.selectedIndex > 0)
        {
            parameter.bank = bank.options[bank.selectedIndex].value;
        }
        else
        {
            parameter.bank = bank.selectedIndex - 1;
        }
    }
    return parameter;
}

/*
	<FUNZIONE label="createParameterObjectFromData">
	<AUTORE>Mauro Franceschini</AUTORE>
	<COMMENTO>Create a new parameter object - return a new parameter object</COMMENTO>
	<PARAMETRO label="accounteerId" DESCRIZIONE="id intestatario"/>
	<PARAMETRO label="bank" DESCRIZIONE="banca"/>
	</FUNZIONE>
*/
function createParameterObjectFromData(accounteerId, bank)
{
    var parameter = createParameterObject();
    if (accounteerId != null)
    {
        var combo = getContextAccounteerCombo();
        for (var i=0; i < combo.options.length; i++)
        {
            if (combo.options[i].value == accounteerId)
            {
                parameter.accounteer = i - 1;
                break;
            }
        }
    }
    if (bank != null)
    {
        if (bank.selectedIndex > 0)
        {
            parameter.bank = bank.options[bank.selectedIndex].value;
        }
        else
        {
            parameter.bank = bank.selectedIndex - 1;
        }
    }
    return parameter;
}

/*
	<FUNZIONE label="getSiaCode">
	<AUTORE>Mauro Franceschini</AUTORE>
	<COMMENTO>Torna il sia legato all'intestatario</COMMENTO>
	<PARAMETRO label="comboBox" DESCRIZIONE="combo intestatario"/>
	<PARAMETRO label="valueIfEmpty" DESCRIZIONE="valore di default"/>
	</FUNZIONE>
*/
function getSiaCode(comboBox, valueIfEmpty)
{
    if (comboBox.selectedIndex == 0)
    {
        return valueIfEmpty;
    }
    else
    {
        return comboBox.options[comboBox.selectedIndex].sia;
    }
}
/*
<FUNZIONE label="getAbilitazioneXml">
<AUTORE>Raji Fernando</AUTORE>
<COMMENTO>Torna il flag abilitazione funzioni xml legato all'intestatario</COMMENTO>
<PARAMETRO label="comboBox" DESCRIZIONE="combo intestatario"/>
<PARAMETRO label="valueIfEmpty" DESCRIZIONE="valore di default"/>
'A' Abilitato
'D' Disabilitato
</FUNZIONE>
*/
function getAbilitazioneXml(comboBox, valueIfEmpty)
{
	if (comboBox.selectedIndex == 0){
	    return valueIfEmpty;
	}
	else{
	    return comboBox.options[comboBox.selectedIndex].abilitazione_xml;
	}
}

/*
<FUNZIONE label="getBancaDelGruppo">
<AUTORE>Raji Fernando</AUTORE>
<COMMENTO>Torna il flag abilitazione funzioni xml legato al rapporto</COMMENTO>
<PARAMETRO label="comboBox" DESCRIZIONE="combo intestatario"/>
<PARAMETRO label="valueIfEmpty" DESCRIZIONE="valore di default"/>
'A' Abilitato
'D' Disabilitato
</FUNZIONE>
*/
function getBancaDelGruppo(comboBox, valueIfEmpty)
{
	if (comboBox.selectedIndex == 0){
	    return valueIfEmpty;
	}
	else{
	    return comboBox.options[comboBox.selectedIndex].bancaDelGruppo;
	}
}

/*
<FUNZIONE label="getCucCode">
<AUTORE>Raji Fernando</AUTORE>
<COMMENTO>Torna il codice CUC legato all'intestatario</COMMENTO>
<PARAMETRO label="comboBox" DESCRIZIONE="combo intestatario"/>
<PARAMETRO label="valueIfEmpty" DESCRIZIONE="valore di default"/>
</FUNZIONE>
*/
function getCucCode(comboBox, valueIfEmpty)
{
if (comboBox.selectedIndex == 0)
{
    return valueIfEmpty;
}
else
{
    return comboBox.options[comboBox.selectedIndex].cuc_intestatario;
}
}


/*
	<FUNZIONE label="getCF">
	<AUTORE>Mauro Franceschini</AUTORE>
	<COMMENTO>Torna il codice fiscale legato all'intestatario</COMMENTO>
	<PARAMETRO label="comboBox" DESCRIZIONE="combo intestatario"/>
	<PARAMETRO label="valueIfEmpty" DESCRIZIONE="valore di default"/>
	</FUNZIONE>
*/
function getCF(comboBox, valueIfEmpty)
{
	if (comboBox.selectedIndex == 0)
    {
        return valueIfEmpty;
    }
    else
    {
       return comboBox.options[comboBox.selectedIndex].cf;
    }
}

/*
	<FUNZIONE label="getTipoCF">
	<AUTORE>Mario Pasqui</AUTORE>
	<COMMENTO>Torna cf se il valore del campo cf eè un codice fiscale altrimenti piva</COMMENTO>
	<PARAMETRO label="comboBox" DESCRIZIONE="combo intestatario"/>
	<PARAMETRO label="valueIfEmpty" DESCRIZIONE="valore di default"/>
	</FUNZIONE>
*/
function getTipoCF(comboBox, valueIfEmpty)
{
	if (comboBox.selectedIndex == 0)
    {
        return valueIfEmpty;
    }
    else
    {
       return comboBox.options[comboBox.selectedIndex].tipocf;
    }
}


/*
	<FUNZIONE label="getSignature">
	<AUTORE>Mauro Franceschini</AUTORE>
	<COMMENTO>Torna la firma legata all'intestatario</COMMENTO>
	<PARAMETRO label="comboBox" DESCRIZIONE="combo intestatario"/>
	<PARAMETRO label="valueIfEmpty" DESCRIZIONE="valore di default"/>
	</FUNZIONE>
*/
function getSignature(comboBox, valueIfEmpty)
{
    if (comboBox.selectedIndex == 0)
    {
        return valueIfEmpty;
    }
    else
    {
        return comboBox.options[comboBox.selectedIndex].firma;
    }
}

/*
	<FUNZIONE label="getAbiCode">
	<AUTORE>Mauro Franceschini</AUTORE>
	<COMMENTO>Torna l' abi legata all'intestatario</COMMENTO>
	<PARAMETRO label="comboBox" DESCRIZIONE="combo intestatario"/>
	<PARAMETRO label="valueIfEmpty" DESCRIZIONE="valore di default"/>
	</FUNZIONE>
*/
function getAbiCode(comboBox, valueIfEmpty)
{
    if (comboBox.selectedIndex == 0)
    {
        return valueIfEmpty;
    }
    else
    {
        return comboBox.options[comboBox.selectedIndex].abi;
    }
}

/*
	<FUNZIONE label="getCabCode">
	<AUTORE>Mauro Franceschini</AUTORE>
	<COMMENTO>Torna il cab legato all'intestatario</COMMENTO>
	<PARAMETRO label="comboBox" DESCRIZIONE="combo intestatario"/>
	<PARAMETRO label="valueIfEmpty" DESCRIZIONE="valore di default"/>
	</FUNZIONE>
*/
function getCabCode(comboBox, valueIfEmpty)
{
    if (comboBox.selectedIndex == 0)
    {
        return valueIfEmpty;
    }
    else
    {
        return comboBox.options[comboBox.selectedIndex].cab;
    }
}
/*
	<FUNZIONE label="getIbanCode">
	<AUTORE>Mauro Franceschini</AUTORE>
	<COMMENTO>Torna il cab legato all'intestatario</COMMENTO>
	<PARAMETRO label="comboBox" DESCRIZIONE="combo intestatario"/>
	<PARAMETRO label="valueIfEmpty" DESCRIZIONE="valore di default"/>
	</FUNZIONE>
*/
function getIbanCode(comboBox, valueIfEmpty)
{
    if (comboBox.selectedIndex == 0)
    {
        return valueIfEmpty;
    }
    else
    {
        return comboBox.options[comboBox.selectedIndex].iban;
    }
}
/*
	<FUNZIONE label="getCabCode">
	<AUTORE>Mauro Franceschini</AUTORE>
	<COMMENTO>Torna l'account legato all'intestatario</COMMENTO>
	<PARAMETRO label="comboBox" DESCRIZIONE="combo intestatario"/>
	<PARAMETRO label="valueIfEmpty" DESCRIZIONE="valore di default"/>
	</FUNZIONE>
*/
function getAccount(comboBox, valueIfEmpty)
{
    if (comboBox.selectedIndex == 0)
    {
        return valueIfEmpty;
    }
    else
    {
       return comboBox.options[comboBox.selectedIndex].cc;
    }
}

/*
	<FUNZIONE label="getDesc">
	<AUTORE>Mauro Franceschini</AUTORE>
	<COMMENTO>Torna la descrizione legato all'intestatario</COMMENTO>
	<PARAMETRO label="comboBox" DESCRIZIONE="combo intestatario"/>
	<PARAMETRO label="valueIfEmpty" DESCRIZIONE="valore di default"/>
	</FUNZIONE>
*/
function getDesc(comboBox, valueIfEmpty)
{
    if (comboBox.selectedIndex == 0)
    {
        return valueIfEmpty;
    }
    else
    {
       return comboBox.options[comboBox.selectedIndex].text;
    }
}


/*
	<FUNZIONE label="getDivisa">
	<AUTORE>Lorenzo Gianotti</AUTORE>
	<COMMENTO>Torna la divisa legata all'intestatario</COMMENTO>
	<PARAMETRO label="comboBox" DESCRIZIONE="combo intestatario"/>
	<PARAMETRO label="valueIfEmpty" DESCRIZIONE="valore di default"/>
	</FUNZIONE>
*/
function getDivisa(comboBox, valueIfEmpty)
{
    if (comboBox.selectedIndex == 0)
    {
        return valueIfEmpty;
    }
    else
    {
        return comboBox.options[comboBox.selectedIndex].divisa;
    }
}

/*
	<FUNZIONE label="getIntestatario">
	<AUTORE>Mauro Franceschini</AUTORE>
	<COMMENTO>Torna la descrizione intestatario legata all'intestatario</COMMENTO>
	<PARAMETRO label="comboBox" DESCRIZIONE="combo intestatario"/>
	<PARAMETRO label="valueIfEmpty" DESCRIZIONE="valore di default"/>
	</FUNZIONE>
*/
function getIntestatario(comboBox, valueIfEmpty)
{
    if (comboBox.selectedIndex == 0)
    {
        return valueIfEmpty;
    }
    else
    {
        return comboBox.options[comboBox.selectedIndex].descrizione;
    }
}

/*
	<FUNZIONE label="getIndirizzo">
	<AUTORE>Mauro Franceschini</AUTORE>
	<COMMENTO>Torna l' indirizzo legato all'intestatario</COMMENTO>
	<PARAMETRO label="comboBox" DESCRIZIONE="combo intestatario"/>
	<PARAMETRO label="valueIfEmpty" DESCRIZIONE="valore di default"/>
	</FUNZIONE>
*/
function getIndirizzo(comboBox, valueIfEmpty)
{
    if (comboBox.selectedIndex == 0)
    {
        return valueIfEmpty;
    }
    else
    {
        return comboBox.options[comboBox.selectedIndex].indirizzo;
    }
}

/*
	<FUNZIONE label="getPiazza">
	<AUTORE>Mauro Franceschini</AUTORE>
	<COMMENTO>Torna la piazza legata all'intestatario</COMMENTO>
	<PARAMETRO label="comboBox" DESCRIZIONE="combo intestatario"/>
	<PARAMETRO label="valueIfEmpty" DESCRIZIONE="valore di default"/>
	</FUNZIONE>
*/
function getPiazza(comboBox, valueIfEmpty)
{
    if (comboBox.selectedIndex == 0)
    {
        return valueIfEmpty;
    }
    else
    {
        return comboBox.options[comboBox.selectedIndex].piazza;
    }
}

/*
	<FUNZIONE label="getCAP">
	<AUTORE>Mauro Franceschini</AUTORE>
	<COMMENTO>Torna il cap legato/a all'intestatario</COMMENTO>
	<PARAMETRO label="comboBox" DESCRIZIONE="combo intestatario"/>
	<PARAMETRO label="valueIfEmpty" DESCRIZIONE="valore di default"/>
	</FUNZIONE>
*/
function getCAP(comboBox, valueIfEmpty)
{
    if (comboBox.selectedIndex == 0)
    {
        return valueIfEmpty;
    }
    else
    {
        return comboBox.options[comboBox.selectedIndex].cap;
    }
}

/*
	<FUNZIONE label="getProvincia">
	<AUTORE>Mauro Franceschini</AUTORE>
	<COMMENTO>Torna la provincia legato/a all'intestatario</COMMENTO>
	<PARAMETRO label="comboBox" DESCRIZIONE="combo intestatario"/>
	<PARAMETRO label="valueIfEmpty" DESCRIZIONE="valore di default"/>
	</FUNZIONE>
*/
function getProvincia(comboBox, valueIfEmpty)
{
    if (comboBox.selectedIndex == 0)
    {
        return valueIfEmpty;
    }
    else
    {
        return comboBox.options[comboBox.selectedIndex].provincia;
    }
}

/*
	<FUNZIONE label="getLocalita">
	<AUTORE>Mauro Franceschini</AUTORE>
	<COMMENTO>Torna la localita legato/a all'intestatario</COMMENTO>
	<PARAMETRO label="comboBox" DESCRIZIONE="combo intestatario"/>
	<PARAMETRO label="valueIfEmpty" DESCRIZIONE="valore di default"/>
	</FUNZIONE>
*/
function getLocalita(comboBox, valueIfEmpty)
{
    if (comboBox.selectedIndex == 0)
    {
        return valueIfEmpty;
    }
    else
    {
        return comboBox.options[comboBox.selectedIndex].localita;
    }
}

/*
	<FUNZIONE label="getDispoDefaultElcos">
	<AUTORE>Roberto Antonelli</AUTORE>
	<COMMENTO>Torna il valore disposizione elcos legato/a all'intestatario</COMMENTO>
	<PARAMETRO label="comboBox" DESCRIZIONE="combo intestatario"/>
	<PARAMETRO label="valueIfEmpty" DESCRIZIONE="valore di default"/>
	</FUNZIONE>
*/
function getDispoDefaultElcos(comboBox, valueIfEmpty)
{
    if (comboBox.selectedIndex == 0)
    {
        return valueIfEmpty;
    }
    else
    {
        return comboBox.options[comboBox.selectedIndex].dispoDefaultElcos;
    }
}

/*
	<FUNZIONE label="getFlagIntestazioneContoElcos">
	<AUTORE>Roberto Antonelli</AUTORE>
	<COMMENTO>Torna il valore flag conto elcos legato/a all'intestatario</COMMENTO>
	<PARAMETRO label="comboBox" DESCRIZIONE="combo intestatario"/>
	<PARAMETRO label="valueIfEmpty" DESCRIZIONE="valore di default"/>
	</FUNZIONE>
*/
function getFlagIntestazioneContoElcos(comboBox, valueIfEmpty)
{
    if (comboBox.selectedIndex == 0)
    {
        return valueIfEmpty;
    }
    else
    {
        return comboBox.options[comboBox.selectedIndex].flagIntestazioneContoElcos;
    }
}

/*
	<FUNZIONE label="getPaeseDefaultElcos">
	<AUTORE>Luca Morganti</AUTORE>
	<COMMENTO>Torna il valore paese di default elcos legato/a all'intestatario</COMMENTO>
	<PARAMETRO label="comboBox" DESCRIZIONE="combo intestatario"/>
	<PARAMETRO label="valueIfEmpty" DESCRIZIONE="valore di default"/>
	</FUNZIONE>
*/
function getPaeseDefaultElcos(comboBox, valueIfEmpty)
{
    if (comboBox.selectedIndex == 0)
    {
        return valueIfEmpty;
    }
    else
    {
        return comboBox.options[comboBox.selectedIndex].paeseDefaultElcos;
    }
}

/*
	<FUNZIONE label="getFlagIntestazioneContoElcos">
	<AUTORE>Roberto Antonelli</AUTORE>
	<COMMENTO>Torna il valore codice estero cedente elcos legato/a all'intestatario</COMMENTO>
	<PARAMETRO label="comboBox" DESCRIZIONE="combo intestatario"/>
	<PARAMETRO label="valueIfEmpty" DESCRIZIONE="valore di default"/>
	</FUNZIONE>
*/
function getCodiceEsteroCedenteElcos(comboBox, valueIfEmpty)
{
    if (comboBox.selectedIndex == 0)
    {
        return valueIfEmpty;
    }
    else
    {
        return comboBox.options[comboBox.selectedIndex].codiceEsteroCedenteElcos;
    }
}

/*
	<FUNZIONE label="getAccounteerDescription">
	<AUTORE>?</AUTORE>
	<COMMENTO>descrizione dell'intestatario</COMMENTO>
	<PARAMETRO label="id" DESCRIZIONE=""/>
	</FUNZIONE>
*/
function getAccounteerDescription(id)
{
    var combo = getContextAccounteerCombo();
    for (var i=1; i < combo.options.length; i++)
    {
	    
        if (combo.options[i].value == id)
        {
            return combo.options[i].text;
        }
    }
    return "";
}

/*
	<FUNZIONE label="getBankDescription">
	<AUTORE>?</AUTORE>
	<COMMENTO>descrizione della banca</COMMENTO>
	<PARAMETRO label="id" DESCRIZIONE=""/>
	</FUNZIONE>
*/
function getBankDescription(id)
{
    var combo = getContextBankCombo();
    for (var i=1; i < combo.options.length; i++)
    {
        if (combo.options[i].value == id)
        {
            return combo.options[i].text;
        }
    }
    return "";
}

/*
	<FUNZIONE label="getCCDescription">
	<AUTORE>?</AUTORE>
	<COMMENTO>descrizione del conto</COMMENTO>
	<PARAMETRO label="id" DESCRIZIONE=""/>
	</FUNZIONE>
*/
function getCCDescription(id)
{
    var combo = getContextCCCombo();
    for (var i=1; i < combo.options.length; i++)
    {
        if (combo.options[i].value == id)
        {
            return combo.options[i].text;
        }
    }
    return "";
}

/*
	<FUNZIONE label="selectComboElementByAbi">
	<AUTORE>?</AUTORE>
	<COMMENTO>seleziona il combo dall'abi (searchedElement)</COMMENTO>
	<PARAMETRO label="combo" DESCRIZIONE="oggetto combobox"/>
	<PARAMETRO label="searchedElement" DESCRIZIONE="valore da selezionare"/>
	</FUNZIONE>
*/
function selectComboElementByAbi(combo, searchedElement)
{
    for (var i=0; i < combo.options.length; i++)
    {
        if (combo.options[i].abi == searchedElement)
        {
            combo.selectedIndex = i;
        }
    }
}

/*
	<FUNZIONE label="selectComboElementByAccountNumber">
	<AUTORE>?</AUTORE>
	<COMMENTO>seleziona il combo dal searchedElement</COMMENTO>
	<PARAMETRO label="combo" DESCRIZIONE="oggetto combobox"/>
	<PARAMETRO label="searchedElement" DESCRIZIONE="valore da selezionare"/>
	</FUNZIONE>
*/
function selectComboElementByAccountNumber(combo, searchedElement)
{
    for (var i=0; i < combo.options.length; i++)
    {
        if (combo.options[i].text == searchedElement)
        {
            combo.selectedIndex = i;
        }
    }
}

/*
	<FUNZIONE label="selectComboElementByCab">
	<AUTORE>?</AUTORE>
	<COMMENTO>seleziona il combo dal cab (searchedElement)</COMMENTO>
	<PARAMETRO label="combo" DESCRIZIONE="oggetto combobox"/>
	<PARAMETRO label="searchedElement" DESCRIZIONE="valore da selezionare"/>
	</FUNZIONE>
*/
function selectComboElementByCab(combo, searchedElement)
{
    for (var i=0; i < combo.options.length; i++)
    {
        if (combo.options[i].cab == searchedElement)
        {
            combo.selectedIndex = i;
        }
    }
}

/*
	<FUNZIONE label="selectComboElementByCC">
	<AUTORE>?</AUTORE>
	<COMMENTO>seleziona il combo dal conto corrente (searchedElement)</COMMENTO>
	<PARAMETRO label="combo" DESCRIZIONE="oggetto combobox"/>
	<PARAMETRO label="searchedElement" DESCRIZIONE="valore da selezionare"/>
	</FUNZIONE>
*/
function selectComboElementByCC(combo, searchedElement)
{
    for (var i=0; i < combo.options.length; i++)
    {
        if (combo.options[i].cc == searchedElement)
        {
            combo.selectedIndex = i;
        }
    }
}

/*
	<FUNZIONE label="selectComboElementByIdIntestatario">
	<AUTORE>?</AUTORE>
	<COMMENTO>seleziona il combo dall'intestatrio (searchedElement)</COMMENTO>
	<PARAMETRO label="combo" DESCRIZIONE="oggetto combobox"/>
	<PARAMETRO label="searchedElement" DESCRIZIONE="valore da selezionare"/>
	</FUNZIONE>
*/
function selectComboElementByIdIntestatario(combo, searchedElement)
{
    return selectComboElementByValue(combo, searchedElement);
}

/*
	<FUNZIONE label="selectComboElementByIdConto">
	<AUTORE>?</AUTORE>
	<COMMENTO>seleziona il combo dall'id conto (searchedElement)</COMMENTO>
	<PARAMETRO label="combo" DESCRIZIONE="oggetto combobox"/>
	<PARAMETRO label="searchedElement" DESCRIZIONE="valore da selezionare"/>
	</FUNZIONE>
*/
function selectComboElementByIdConto(combo, searchedElement)
{
    return selectComboElementByValue(combo, searchedElement);
}

/*
	<FUNZIONE label="selectComboElementByIdBanca">
	<AUTORE>?</AUTORE>
	<COMMENTO>seleziona il combo dalla banca (searchedElement)</COMMENTO>
	<PARAMETRO label="combo" DESCRIZIONE="oggetto combobox"/>
	<PARAMETRO label="searchedElement" DESCRIZIONE="valore da selezionare"/>
	</FUNZIONE>
*/
function selectComboElementByIdBanca(combo, searchedElement)
{
    return selectComboElementByValue(combo, searchedElement);
}

/*
	<FUNZIONE label="selectComboElementByValue">
	<AUTORE>?</AUTORE>
	<COMMENTO>seleziona il combo dal valore parrato (searchedElement)</COMMENTO>
	<PARAMETRO label="combo" DESCRIZIONE="oggetto combobox"/>
	<PARAMETRO label="searchedElement" DESCRIZIONE="valore da selezionare"/>
	</FUNZIONE>
*/
function selectComboElementByValue(combo, searchedElement)
{
    for (var i=0; i < combo.options.length; i++)
    {
        if (combo.options[i].value == searchedElement)
        {
            combo.selectedIndex = i;
            break;
        }
    }
}

/*
	<FUNZIONE label="fillPostazioni">
	<AUTORE>?</AUTORE>
	<COMMENTO>Fill a combo box with a set of locations. For every location founded in the locations array insert
 	an entry within the comboToFill parameter. At the end select the first parameter.
 	</COMMENTO>
	<PARAMETRO label="emptyValue" DESCRIZIONE="default value to be used as a value for the combo box entry when no location is provided"/>
	<PARAMETRO label="emptyText" DESCRIZIONE="default text to be displayed when no location is provided"/>
	<PARAMETRO label="allValue" DESCRIZIONE="default value to be used as a value for the combo box entry for the all locations"/>
	<PARAMETRO label="allText" DESCRIZIONE="default text to be displayed in order to select all the locations"/>
	<PARAMETRO label="comboToFill" DESCRIZIONE="combo box control to fill with data"/>
	<PARAMETRO label="alwaysEmpty" DESCRIZIONE="if true insert always the empty element as second element"/>
	</FUNZIONE>
*/
function fillPostazioni(emptyValue, emptyText, allValue, allText, comboToFill, alwaysEmpty)
{
    // If I haven't any locations
    if (locations.length == 0)
    {
        comboToFill.length = 1;
        comboToFill.options[0].text = emptyText;
        comboToFill.options[0].value = emptyValue;
    }
    else
    {
        var counter = 0;
        comboToFill.length = calculateNewLength(locations.length, allValue, allText, alwaysEmpty);
        counter = insertComboElementIfNeeded(counter, emptyValue, emptyText, comboToFill, alwaysEmpty);
        counter = insertComboElementIfNeeded(counter, allValue, allText, comboToFill, (allValue != NO_ALL && allText != NO_ALL))
        for (i=0; i < locations.length; i++)
        {
            var postazione = locations[i];
            comboToFill.options[counter].text = postazione.descrizione;
            comboToFill.options[counter++].value = postazione.codice;
        }
    }
    comboToFill.options[0].selected = true;
}

/* */
function replaceSpecialChar(text)
{
 var newText = "";
 for (i=0; i < text.length; i++)
 {
    //cerco il carattere ''
	if (text.charCodeAt(i) == 24 )
	{

	}
	else
	{
		newText = newText + text.charAt(i);
	}
 }
 

 return newText;
}

/*
	<FUNZIONE label="fillIntestatari">
	<AUTORE>?</AUTORE>
	<COMMENTO>Fill a combo box with a set of accounteer. For every accounteer founded in the location array insert
 	 an entry within the comboToFill parameter. At the end select the first parameter.
 	</COMMENTO>
	<PARAMETRO label="emptyValue" DESCRIZIONE="default value to be used as a value for the combo box entry when no location is provided"/>
	<PARAMETRO label="emptyText" DESCRIZIONE="default text to be displayed when no location is provided"/>
	<PARAMETRO label="allValue" DESCRIZIONE="default value to be used as a value for the combo box entry for the all locations"/>
	<PARAMETRO label="allText" DESCRIZIONE="default text to be displayed in order to select all the locations"/>
	<PARAMETRO label="comboToFill" DESCRIZIONE="combo box control to fill with data"/>
	<PARAMETRO label="alwaysEmpty" DESCRIZIONE="if true insert always the empty element as second element"/>
	<PARAMETRO label="synchro" DESCRIZIONE=""/>
	</FUNZIONE>
*/
 
function fillIntestatari(parameters, emptyValue, emptyText, allValue, allText, comboToFill, alwaysEmpty, synchro)
{
    var ln = 0;
    for (var i=0; i < locations.length; i++)
    {
        if (parameters.location == ALL_DATA || i == parameters.location)
        {
            ln += locations[i].intestatari.length;
        }
    }
    if (ln == 0)
    {
        comboToFill.length = 1;
        comboToFill.options[0].text = emptyText;
        comboToFill.options[0].value = emptyValue;
    }
    else
    {
        comboToFill.length = calculateNewLength(ln, allValue, allText, alwaysEmpty);
        var counter = 0;
        counter = insertComboElementIfNeeded(counter, emptyValue, emptyText, comboToFill, alwaysEmpty);
        counter = insertComboElementIfNeeded(counter, allValue, allText, comboToFill, (allValue != NO_ALL && allText != NO_ALL))
        for (var i=0; i< locations.length; i++)
        {
            if (parameters.location == ALL_DATA || i == parameters.location)
            {
                var locationObject = locations[i];
                for (var j=0; j < locationObject.intestatari.length; j++)
                {
                    var accounteerObject = locationObject.intestatari[j];
					

					var newDescrizione = replaceSpecialChar(accounteerObject.descrizione);
                    //comboToFill.options[counter].text = accounteerObject.descrizione;
					comboToFill.options[counter].text = newDescrizione;
                    comboToFill.options[counter].cf = accounteerObject.codice_fiscale;
                    comboToFill.options[counter].tipocf = accounteerObject.tipocf;
                    comboToFill.options[counter].sia = accounteerObject.codice_sia;
                    comboToFill.options[counter].abilitazione_xml = accounteerObject.abilitazione_xml;
                    comboToFill.options[counter].cuc_intestatario = accounteerObject.cuc_intestatario;
					comboToFill.options[counter].abi = accounteerObject.abi;
					comboToFill.options[counter].cab = accounteerObject.cab;
                    comboToFill.options[counter].firma = accounteerObject.firma;
                    comboToFill.options[counter].descrizione = accounteerObject.descrizione_intera;
                    comboToFill.options[counter].indirizzo = accounteerObject.indirizzo;
                    comboToFill.options[counter].piazza = accounteerObject.piazza;
                    comboToFill.options[counter].cap = accounteerObject.cap;
                    comboToFill.options[counter].provincia = accounteerObject.provincia;
                    comboToFill.options[counter].localita = accounteerObject.localita;
                    comboToFill.options[counter].postazione = accounteerObject.postazione;
                    comboToFill.options[counter].dispoDefaultElcos = accounteerObject.dispo_default_elcos;
                    comboToFill.options[counter].flagIntestazioneContoElcos = accounteerObject.flag_intestazione_conto_elcos;
		    		comboToFill.options[counter].paeseDefaultElcos = accounteerObject.paese_default_elcos;
                    comboToFill.options[counter].codiceEsteroCedenteElcos = accounteerObject.codice_estero_cedente_elcos;
                    comboToFill.options[counter++].value = accounteerObject.codice;
                }
            }
        }
    }
    if (ln > 0 && synchro)
    {
        comboToFill.options[getContextAccounteerCombo().selectedIndex].selected = true;
    }
    else
    {
        comboToFill.options[0].selected = true;
    }
}

/*
	<FUNZIONE label="fillBanche">
	<AUTORE>?</AUTORE>
	<COMMENTO>Fill a combo box with a set of bank. For every accounteer founded in the location array insert
 	an entry within the comboToFill parameter. At the end select the first parameter.
 	</COMMENTO>
	<PARAMETRO label="parameters" DESCRIZIONE=""/>
	<PARAMETRO label="emptyValue" DESCRIZIONE="default value to be used as a value for the combo box entry when no location is provided"/>
	<PARAMETRO label="emptyText" DESCRIZIONE="default text to be displayed when no location is provided"/>
	<PARAMETRO label="allValue" DESCRIZIONE="default value to be used as a value for the combo box entry for the all locations"/>
	<PARAMETRO label="allText" DESCRIZIONE="default text to be displayed in order to select all the locations"/>
	<PARAMETRO label="comboToFill" DESCRIZIONE="combo box control to fill with data"/>
	<PARAMETRO label="alwaysEmpty" DESCRIZIONE="if true insert always the empty element as second element"/>
	<PARAMETRO label="synchro" DESCRIZIONE=""/>
	</FUNZIONE>
*/
function fillBanche(parameters, emptyValue, emptyText, allValue, allText, comboToFill, alwaysEmpty, synchro)
{
    var ln = 0;
    var duplicated = 0;//MAUROB
    for (var i=0; i < locations.length; i++)
    {
        if (parameters.location == ALL_DATA || i == parameters.location)
        {
            for (var j=0; j < locations[i].intestatari.length; j++)
            {
                if (parameters.accounteer == ALL_DATA || j == parameters.accounteer)
                {
                    ln += locations[i].intestatari[j].banche.length;
                }
            }
        }
    }
    if (ln == 0)
    {
        comboToFill.length = 1;
        comboToFill.options[0].text = emptyText;
        comboToFill.options[0].value = emptyValue;
    }
    else
    {
        comboToFill.length = calculateNewLength(ln, allValue, allText, alwaysEmpty);
        var counter = 0;
        counter = insertComboElementIfNeeded(counter, emptyValue, emptyText, comboToFill, alwaysEmpty);
        counter = insertComboElementIfNeeded(counter, allValue, allText, comboToFill, (allValue != NO_ALL && allText != NO_ALL))
        if(parameters.accounteer == ALL_DATA)//MAUROB
        {
            n = comboToFill.length-1;
            i = 1;
            clearComboValues (comboToFill, i, n);
        }
        for (var i=0; i< locations.length; i++)
        {
            if (parameters.location == ALL_DATA || i == parameters.location)
            {
                var locationObject = locations[i];
                for (var j=0; j < locationObject.intestatari.length; j++)
                {
                    if (parameters.accounteer == ALL_DATA || j == parameters.accounteer)
                    {
                        var accounteerObject = locationObject.intestatari[j];
                        for (var k=0; k < accounteerObject.banche.length; k++)
                        {
                            var bankObject = accounteerObject.banche[k];
                            if(parameters.accounteer == ALL_DATA)//MAUROB
                            {
                                if (!checkForDuplicateBank(comboToFill, bankObject.codice))//MAURO B
                                {
                                    comboToFill.options[counter].text = bankObject.descrizione;
                                    comboToFill.options[counter].abi = bankObject.abi;
                                    comboToFill.options[counter].postazione = bankObject.postazione;//MB
                                    comboToFill.options[counter].intestatario = bankObject.intestatario;//MB
                                    comboToFill.options[counter++].value = bankObject.codice;
                                }
                                else //MauroB
                                {
                                      duplicated++;//MauroB
                                }
                            }
                            else
                            {
                                comboToFill.options[counter].text = bankObject.descrizione;
                                comboToFill.options[counter].abi = bankObject.abi;
                                comboToFill.options[counter].postazione = bankObject.postazione;//MB
                                comboToFill.options[counter].intestatario = bankObject.intestatario;//MB
								comboToFill.options[counter++].value = bankObject.codice;
                            }
                        }
                    }
                }
            }
        }
    }
    if (duplicated > 0) // mauro b
    {
        lungh = comboToFill.length;
        comboToFill.length = lungh - duplicated;
    }
    if (ln > 0 && synchro)
    {
        comboToFill.options[getContextBankCombo().selectedIndex].selected = true;
    }
    else
    {
        comboToFill.options[0].selected = true;
    }
}


function fillComboBanche(combo, index, banca) {
    combo.options[index].text = banca.descrizione;
    combo.options[index].abi = banca.abi;
    combo.options[index].postazione = banca.postazione
    combo.options[index].intestatario = banca.intestatario;
    combo.options[index].value = banca.codice;
}
/*
 *
 */
function fillBancheAllineamentoArchivi(parameters, emptyValue, emptyText, allValue, allText, comboToFill, alwaysEmpty, synchro)
{
    var ln = 0;
    var duplicated = 0;
    for (var i=0; i < locations.length; i++) {
        if (parameters.location == ALL_DATA || i == parameters.location) {
            for (var j=0; j < locations[i].intestatari.length; j++) {
                if (parameters.accounteer == ALL_DATA || j == parameters.accounteer) {
                    ln += locations[i].intestatari[j].banche.length;
                }
            }
        }
    }
    if (ln == 0) {
        comboToFill.length = 1;
        comboToFill.options[0].text = emptyText;
        comboToFill.options[0].value = emptyValue;
    } else {
        comboToFill.length = calculateNewLength(ln, allValue, allText, alwaysEmpty);
        var counter = 0;
        counter = insertComboElementIfNeeded(counter, emptyValue, emptyText, comboToFill, alwaysEmpty);
        counter = insertComboElementIfNeeded(counter, allValue, allText, comboToFill, (allValue != NO_ALL && allText != NO_ALL));
        if(parameters.accounteer == ALL_DATA) {
            n = comboToFill.length-1;
            i = 1;
            clearComboValues (comboToFill, i, n);
        }
        for (var i=0; i< locations.length; i++) {
            if (parameters.location == ALL_DATA || i == parameters.location) {
                var locationObject = locations[i];
                for (var j=0; j < locationObject.intestatari.length; j++) {
                    if (parameters.accounteer == ALL_DATA || j == parameters.accounteer) {
                        var accounteerObject = locationObject.intestatari[j];
                        for (var k=0; k < accounteerObject.banche.length; k++) {
                            var bankObject = accounteerObject.banche[k];
                            var numCC = bankObject.rapportiCC.length;
                            if (numCC < 1) {
                                comboToFill.length = comboToFill.length-1;
                                continue;
                            }
                            if(parameters.accounteer == ALL_DATA) {
                                if (!checkForDuplicateBank(comboToFill, bankObject.codice)) {
                                    fillComboBanche(comboToFill, counter, bankObject);
                                    counter++;
                                } else {
                                      duplicated++;
                                }
                            } else {
                                fillComboBanche(comboToFill, counter, bankObject);
                                counter++;
                            }
                        }
                    }
                }
            }
        }
    }
    if (duplicated > 0) {
        lungh = comboToFill.length;
        comboToFill.length = lungh - duplicated;
    }
    if (ln > 0 && synchro) {
        comboToFill.options[getContextBankCombo().selectedIndex].selected = true;
    } else {
        comboToFill.options[0].selected = true;
    }
}


/*
	<FUNZIONE label="fillBancheTipologia">
	<AUTORE>?</AUTORE>
	<COMMENTO>Fill a combo box with a set of bank. For every accounteer founded in the location array insert
 	an entry within the comboToFill parameter. At the end select the first parameter.
 	</COMMENTO>
	<PARAMETRO label="parameters" DESCRIZIONE=""/>
	<PARAMETRO label="emptyValue" DESCRIZIONE="default value to be used as a value for the combo box entry when no location is provided"/>
	<PARAMETRO label="emptyText" DESCRIZIONE="default text to be displayed when no location is provided"/>
	<PARAMETRO label="allValue" DESCRIZIONE="default value to be used as a value for the combo box entry for the all locations"/>
	<PARAMETRO label="allText" DESCRIZIONE="default text to be displayed in order to select all the locations"/>
	<PARAMETRO label="comboToFill" DESCRIZIONE="combo box control to fill with data"/>
	<PARAMETRO label="alwaysEmpty" DESCRIZIONE="if true insert always the empty element as second element"/>
	<PARAMETRO label="tipologia" DESCRIZIONE="lista dei tipi di conti delle quali si vuole visualizzare le banche. Ogni tipologia è separata da punti e virgola"/>
	<PARAMETRO label="alwaysEmpty" DESCRIZIONE="indica se si vuole visualizzare le banche con conti info (info), dispositivi (dispo) o entrambi (infodispo) "/>
	
	<PARAMETRO label="synchro" DESCRIZIONE=""/>
	</FUNZIONE>
*/
function fillBancheTipologia(parameters, emptyValue, emptyText, allValue, allText, comboToFill, alwaysEmpty, synchro,tipologia,abilitazione)
{
    var ln = 0;
    var duplicated = 0;//MAUROB
    
    var visualizzaCC = false;
    var visualizzaDT = false;
    var visualizzaCA = false;
    var visualizzaCP = false;
    var visualizzaES = false;

	var abilitazioneDispositiva = false;    
	var abilitazioneInformativa = false;
	
	if (tipologia != null)
	{
		if (tipologia != "")
		{
			var listaTipologie = tipologia.split(";");
			 for (var index=0; index < listaTipologie.length; index++)
            {
               var tipo = listaTipologie[index];
               
               if (tipo == 'CC' )
	               	visualizzaCC = true;
			   else if (tipo == 'DT' )
	               	visualizzaDT = true;
			   else if (tipo == 'CA' )
	               	visualizzaCA = true;
			   else if (tipo == 'CP' )
	               	visualizzaCP = true;
			   else if (tipo == 'ES' )
	               	visualizzaES = true;			   
            }				
		}
	}
    
    if (abilitazione != null)
	{
		if (abilitazione != "")
		{
			if (abilitazione== 'info')
				abilitazioneInformativa = true;
			else if (abilitazione== 'dispo')
				abilitazioneDispositiva = true;
			else if (abilitazione== 'infodispo')
			{
				abilitazioneDispositiva = true;
				abilitazioneInformativa = true;
			}	
		}
	}	
    
    for (var i=0; i < locations.length; i++)
    {
        if (parameters.location == ALL_DATA || i == parameters.location)
        {
            for (var j=0; j < locations[i].intestatari.length; j++)
            {
                if (parameters.accounteer == ALL_DATA || j == parameters.accounteer)
                {
                    ln += locations[i].intestatari[j].banche.length;
                }
            }
        }
    }
    if (ln == 0)
    {
        comboToFill.length = 1;
        comboToFill.options[0].text = emptyText;
        comboToFill.options[0].value = emptyValue;
    }
    else
    {
        comboToFill.length = calculateNewLength(ln, allValue, allText, alwaysEmpty);

        var counter = 0;
        counter = insertComboElementIfNeeded(counter, emptyValue, emptyText, comboToFill, alwaysEmpty);
        counter = insertComboElementIfNeeded(counter, allValue, allText, comboToFill, (allValue != NO_ALL && allText != NO_ALL))
        if(parameters.accounteer == ALL_DATA)//MAUROB
        {
            n = comboToFill.length-1;
            i = 1;
            clearComboValues (comboToFill, i, n);
        }
        for (var i=0; i< locations.length; i++)
        {
            if (parameters.location == ALL_DATA || i == parameters.location)
            {
                var locationObject = locations[i];
                for (var j=0; j < locationObject.intestatari.length; j++)
                {
                    if (parameters.accounteer == ALL_DATA || j == parameters.accounteer)
                    {
                        var accounteerObject = locationObject.intestatari[j];
                        for (var k=0; k < accounteerObject.banche.length; k++)
                        {
                            var bankObject = accounteerObject.banche[k];
                            
                            var addBancaToCombo = false;
                            
                            if (visualizzaCC && (bankObject.rapportiCC.length > 0))
                            {
                            	if (abilitazioneDispositiva &&  (bankObject.numCCDispo > 0))
                            		addBancaToCombo = true;
                            		
                            	if (abilitazioneInformativa &&  (bankObject.numCCInfo > 0))
                            		addBancaToCombo = true;	
                            }
                            if (visualizzaDT && (bankObject.rapportiDT.length > 0))
                            	addBancaToCombo = true;

                            if (visualizzaCA && (bankObject.rapportiCA.length > 0))
                            	addBancaToCombo = true;

                            if (visualizzaCP && (bankObject.rapportiCP.length > 0))
                            	addBancaToCombo = true;                            

                            if (visualizzaES && (bankObject.rapportiES.length > 0))
                            	addBancaToCombo = true;                            
                            
				
                            if(addBancaToCombo)
                            {
	                            if(parameters.accounteer == ALL_DATA)//MAUROB
	                            {
	                                if (!checkForDuplicateBank(comboToFill, bankObject.codice))//MAURO B
	                                {
	                                    comboToFill.options[counter].text = bankObject.descrizione;
	                                    comboToFill.options[counter].abi = bankObject.abi;
	                                    comboToFill.options[counter].postazione = bankObject.postazione;//MB
	                                    comboToFill.options[counter].intestatario = bankObject.intestatario;//MB
	                                    comboToFill.options[counter++].value = bankObject.codice;
	                                }
	                                else //MauroB
	                                {
	                                      duplicated++;//MauroB
	                                }
	                            }
	                            else
	                            {
	                                comboToFill.options[counter].text = bankObject.descrizione;
	                                comboToFill.options[counter].abi = bankObject.abi;
	                                comboToFill.options[counter].postazione = bankObject.postazione;//MB
	                                comboToFill.options[counter].intestatario = bankObject.intestatario;//MB
									comboToFill.options[counter++].value = bankObject.codice;
	                            }
                            }
                            else
                            	 comboToFill.length = comboToFill.length -1 ;
                        }
                    }
                }
            }
        }
    }
    if (duplicated > 0) // mauro b
    {
        lungh = comboToFill.length;
        comboToFill.length = lungh - duplicated;
    }
    if (ln > 0 && synchro)
    {
        comboToFill.options[getContextBankCombo().selectedIndex].selected = true;
    }
    else
    {
        comboToFill.options[0].selected = true;
    }
}


/*
	<FUNZIONE label="fillCC">
	<AUTORE>?</AUTORE>
	<COMMENTO>Fill a combo box with a set of CC accounts. For every accounteer founded in the location array insert
 	 an entry within the comboToFill parameter. At the end select the first parameter.
 	</COMMENTO>
	<PARAMETRO label="parameters" DESCRIZIONE=""/>
	<PARAMETRO label="emptyValue" DESCRIZIONE="default value to be used as a value for the combo box entry when no location is provided"/>
	<PARAMETRO label="emptyText" DESCRIZIONE="default text to be displayed when no location is provided"/>
	<PARAMETRO label="allValue" DESCRIZIONE="default value to be used as a value for the combo box entry for the all locations"/>
	<PARAMETRO label="allText" DESCRIZIONE="default text to be displayed in order to select all the locations"/>
	<PARAMETRO label="comboToFill" DESCRIZIONE="combo box control to fill with data"/>
	<PARAMETRO label="alwaysEmpty" DESCRIZIONE="if true insert always the empty element as second element"/>
	<PARAMETRO label="synchro" DESCRIZIONE=""/>
	</FUNZIONE>
*/
function fillCC(parameters, emptyValue, emptyText, allValue, allText, comboToFill, alwaysEmpty, synchro)
{
    var ln = 0;
    
    for (var i=0; i < locations.length; i++)
    {
        if (parameters.location == ALL_DATA || i == parameters.location)
        {
            for (var j=0; j < locations[i].intestatari.length; j++)
            {
                if (parameters.accounteer == ALL_DATA || j == parameters.accounteer)
                {
                    for (var k=0; k < locations[i].intestatari[j].banche.length; k++)
                    {
                        if (parameters.bank == ALL_DATA || locations[i].intestatari[j].banche[k].codice == parameters.bank)
                        {
                            for (var l=0; l < locations[i].intestatari[j].banche[k].rapportiCC.length; l++)
                            {
                               if ((locations[i].intestatari[j].banche[k].rapportiCC[l].info_dispo == 'Informativo') ||
                               		(locations[i].intestatari[j].banche[k].rapportiCC[l].info_dispo == 'DispositivoInformativo'))
                               {
                               		ln++;
                               }
                            }
                        }
                    }
                }
            }
        }
    }
    if (ln == 0)
    {
        comboToFill.length = 1;
        comboToFill.options[0].text = emptyText;
        comboToFill.options[0].value = emptyValue;
    }
    else
    {
        comboToFill.length = calculateNewLength(ln, allValue, allText, alwaysEmpty);
        var counter = 0;
        // Empty value
        counter = insertComboElementIfNeeded(counter, allValue, allText, comboToFill, (allValue != NO_ALL && allText != NO_ALL))
        for (var i=0; i< locations.length; i++)
        {
            if (parameters.location == ALL_DATA || i == parameters.location)
            {
                var locationObject = locations[i];
                for (var j=0; j < locationObject.intestatari.length; j++)
                {
                    if (parameters.accounteer == ALL_DATA || j == parameters.accounteer)
                    {
                        var accounteerObject = locationObject.intestatari[j];
                        for (var k=0; k < accounteerObject.banche.length; k++)
                        {
                            if (parameters.bank == ALL_DATA || locations[i].intestatari[j].banche[k].codice == parameters.bank)

                            {
                                var bankObject = accounteerObject.banche[k];
                                for (var l=0; l < bankObject.rapportiCC.length; l++)
                                {
                                    var account = bankObject.rapportiCC[l];
                                                if ((account.info_dispo == 'Informativo') || (account.info_dispo == 'DispositivoInformativo'))
                                               {
                                                    comboToFill.options[counter].text = account.desc_cc;
                                                    comboToFill.options[counter].iban = account.iban;
                                                    comboToFill.options[counter].cc = account.descrizione;
                                                    comboToFill.options[counter].cab = account.codice_cab;
                                                    comboToFill.options[counter].divisa = account.codice_divisa;
                                                    comboToFill.options[counter].info_dispo = account.info_dispo;
			                                        comboToFill.options[counter].postazione = account.postazione;//MB
			                                        comboToFill.options[counter].intestatario = account.intestatario;//MB
			                                        comboToFill.options[counter].banca = account.banca;//MB
			                                        
			                                        comboToFill.options[counter].bancaDelGruppo = account.bancaDelGruppo;
			                                        
                                                    comboToFill.options[counter++].value = account.codice;
                                                    
                                                    
                                                }
                                }
                            }
                        }
                    }
                }
            }
        }
    }
    if (ln > 0 && synchro)
    {
        if (getContextCCCombo().selectedIndex > 0)
        {
            comboToFill.options[getContextCCCombo().selectedIndex - 1].selected = true;
        }
    }
    else
    {
        comboToFill.options[0].selected = true;
    }
}


/*
	<FUNZIONE label="fillCCDispo">
	<AUTORE>?</AUTORE>
	<COMMENTO>Fill a combo box with a set of CC accounts. For every accounteer founded in the location array insert
 	 an entry within the comboToFill parameter. At the end select the first parameter..
 	 restituisce solo i conto correnti dispositivi
 	</COMMENTO>
	<PARAMETRO label="parameters" DESCRIZIONE=""/>
	<PARAMETRO label="emptyValue" DESCRIZIONE="default value to be used as a value for the combo box entry when no location is provided"/>
	<PARAMETRO label="emptyText" DESCRIZIONE="default text to be displayed when no location is provided"/>
	<PARAMETRO label="allValue" DESCRIZIONE="default value to be used as a value for the combo box entry for the all locations"/>
	<PARAMETRO label="allText" DESCRIZIONE="default text to be displayed in order to select all the locations"/>
	<PARAMETRO label="comboToFill" DESCRIZIONE="combo box control to fill with data"/>
	<PARAMETRO label="alwaysEmpty" DESCRIZIONE="if true insert always the empty element as second element"/>
	<PARAMETRO label="synchro" DESCRIZIONE=""/>
	</FUNZIONE>
*/
function fillCCDispo(parameters, emptyValue, emptyText, allValue, allText, comboToFill, alwaysEmpty, synchro)
{
    var ln = 0;
    for (var i=0; i < locations.length; i++)
    {
        if (parameters.location == ALL_DATA || i == parameters.location)
        {
            for (var j=0; j < locations[i].intestatari.length; j++)
            {
                if (parameters.accounteer == ALL_DATA || j == parameters.accounteer)
                {
                    for (var k=0; k < locations[i].intestatari[j].banche.length; k++)
                    {
                        if (parameters.bank == ALL_DATA || locations[i].intestatari[j].banche[k].codice == parameters.bank)
                        {
                           ln += locations[i].intestatari[j].banche[k].rapportiCC.length;
                        }
                    }
                }
            }
        }
    }
    if (ln == 0)
    {
        comboToFill.length = 1;
        comboToFill.options[0].text = emptyText;
        comboToFill.options[0].value = emptyValue;
    }
    else
    {
        comboToFill.length = calculateNewLength(ln, allValue, allText, alwaysEmpty);
        var counter = 0;
        counter = insertComboElementIfNeeded(counter, emptyValue, emptyText, comboToFill, alwaysEmpty);
        counter = insertComboElementIfNeeded(counter, allValue, allText, comboToFill, (allValue != NO_ALL && allText != NO_ALL))
          var scartati = 0;
        for (var i=0; i< locations.length; i++)
        {
            if (parameters.location == ALL_DATA || i == parameters.location)
            {
                var locationObject = locations[i];
                for (var j=0; j < locationObject.intestatari.length; j++)
                {
                    if (parameters.accounteer == ALL_DATA || j == parameters.accounteer)
                    {
                        var accounteerObject = locationObject.intestatari[j];
                        for (var k=0; k < accounteerObject.banche.length; k++)
                        {
                            if (parameters.bank == ALL_DATA || locations[i].intestatari[j].banche[k].codice == parameters.bank)

                            {
                                var bankObject = accounteerObject.banche[k];
                                for (var l=0; l < bankObject.rapportiCC.length; l++)
                                {
                                    var account = bankObject.rapportiCC[l];
                                                if ((account.info_dispo == 'Dispositivo') || (account.info_dispo == 'DispositivoInformativo'))
                                               {
                                                    comboToFill.options[counter].text = account.desc_cc;
                                                    comboToFill.options[counter].iban = account.iban;
                                                    comboToFill.options[counter].cc = account.descrizione;
                                                    comboToFill.options[counter].cab = account.codice_cab;
                                                    comboToFill.options[counter].divisa = account.codice_divisa;
                                                    comboToFill.options[counter].info_dispo = account.info_dispo;
                                                    comboToFill.options[counter].postazione = account.postazione;//MB
													comboToFill.options[counter].intestatario = account.intestatario;//MB
                                                    comboToFill.options[counter].banca = account.banca;//MB
                                                    comboToFill.options[counter++].value = account.codice;
                                                }
                                                else
                                                    scartati=scartati+1;
                                }
                            }
                        }
                    }
                }
            }
        }
    comboToFill.length=comboToFill.length-scartati;
    }
    if (ln > 0 && synchro)
    {
        if (getContextCCCombo().selectedIndex > 0)
        {
            var code = getContextCCCombo().options[getContextCCCombo().selectedIndex].value;
            selectComboElementByIdConto(comboToFill, code);
        }
    }
    else
    {
        comboToFill.options[0].selected = true;
    }
}

/*
	<FUNZIONE label="fillCCDispoEnable">
	<AUTORE>Cristiano Carretti</AUTORE>
	<COMMENTO>Fill a combo box with a set of CC accounts. For every accounteer founded in the location array insert
 	 an entry within the comboToFill parameter. At the end select the first parameter..
 	 restituisce solo i conto correnti dispositivi and the enable (stato_cc="A")
 	</COMMENTO>
	<PARAMETRO label="parameters" DESCRIZIONE=""/>
	<PARAMETRO label="emptyValue" DESCRIZIONE="default value to be used as a value for the combo box entry when no location is provided"/>
	<PARAMETRO label="emptyText" DESCRIZIONE="default text to be displayed when no location is provided"/>
	<PARAMETRO label="allValue" DESCRIZIONE="default value to be used as a value for the combo box entry for the all locations"/>
	<PARAMETRO label="allText" DESCRIZIONE="default text to be displayed in order to select all the locations"/>
	<PARAMETRO label="comboToFill" DESCRIZIONE="combo box control to fill with data"/>
	<PARAMETRO label="alwaysEmpty" DESCRIZIONE="if true insert always the empty element as second element"/>
	<PARAMETRO label="synchro" DESCRIZIONE=""/>
	</FUNZIONE>
*/
function fillCCDispoEnable(parameters, emptyValue, emptyText, allValue, allText, comboToFill, alwaysEmpty, synchro)
{
    var ln = 0;
    // for each locations (postazione)
    for (var i=0; i < locations.length; i++)
    {
        if (parameters.location == ALL_DATA || i == parameters.location)
        {
	    // selected locations
	    // for each intestatario 
            for (var j=0; j < locations[i].intestatari.length; j++)
            {
                if (parameters.accounteer == ALL_DATA || j == parameters.accounteer)
                {
		    // selected accounteer (intestatario)
		    // for each bank
                    for (var k=0; k < locations[i].intestatari[j].banche.length; k++)
                    {
                        if (parameters.bank == ALL_DATA || locations[i].intestatari[j].banche[k].codice == parameters.bank)
                        {
			   //selected bank
                           ln += locations[i].intestatari[j].banche[k].rapportiCC.length;
                        }
                    }
                }
            }
        }
    }
    if (ln == 0)
    {
        comboToFill.length = 1;
        comboToFill.options[0].text = emptyText;
        comboToFill.options[0].value = emptyValue;
    }
    else
    {
        comboToFill.length = calculateNewLength(ln, allValue, allText, alwaysEmpty);
        var counter = 0;
        counter = insertComboElementIfNeeded(counter, emptyValue, emptyText, comboToFill, alwaysEmpty);
        counter = insertComboElementIfNeeded(counter, allValue, allText, comboToFill, (allValue != NO_ALL && allText != NO_ALL))
          var scartati = 0;
        for (var i=0; i< locations.length; i++)
        {
            if (parameters.location == ALL_DATA || i == parameters.location)
            {
                var locationObject = locations[i];
                for (var j=0; j < locationObject.intestatari.length; j++)
                {
                    if (parameters.accounteer == ALL_DATA || j == parameters.accounteer)
                    {
                        var accounteerObject = locationObject.intestatari[j];
                        for (var k=0; k < accounteerObject.banche.length; k++)
                        {
                            if (parameters.bank == ALL_DATA || locations[i].intestatari[j].banche[k].codice == parameters.bank)

                            {
                                var bankObject = accounteerObject.banche[k];
                                for (var l=0; l < bankObject.rapportiCC.length; l++)
                                {
                                    var account = bankObject.rapportiCC[l];
                                                if (((account.info_dispo == 'Dispositivo') || (account.info_dispo == 'DispositivoInformativo')) && (account.stato_cc == 'A'))
                                               {
                                                    comboToFill.options[counter].text = account.desc_cc;
                                                    comboToFill.options[counter].iban = account.iban;
                                                    comboToFill.options[counter].cc = account.descrizione;
                                                    comboToFill.options[counter].cab = account.codice_cab;
                                                    comboToFill.options[counter].divisa = account.codice_divisa;
                                                    comboToFill.options[counter].info_dispo = account.info_dispo;
                                                    comboToFill.options[counter].postazione = account.postazione;//MB
													comboToFill.options[counter].intestatario = account.intestatario;//MB
                                                    comboToFill.options[counter].banca = account.banca;//MB
                                                    
                                                    comboToFill.options[counter].bancaDelGruppo = account.bancaDelGruppo;
                                                    
                                                    comboToFill.options[counter++].value = account.codice;
                                                }
                                                else
                                                    scartati=scartati+1;
                                }
                            }
                        }
                    }
                }
            }
        }
   		comboToFill.length=comboToFill.length-scartati;
    }
    if (ln > 0 && synchro)
    {
        if (getContextCCCombo().selectedIndex > 0)
        {
            var code = getContextCCCombo().options[getContextCCCombo().selectedIndex].value;
            selectComboElementByIdConto(comboToFill, code);
        }
    }
    else
    {
        comboToFill.options[0].selected = true;
    }
}

/*
	<FUNZIONE label="fillCAB">
	<AUTORE>?</AUTORE>
	<COMMENTO>Fill a combo box with a set of CC accounts. For every accounteer founded in the location array insert
 	 an entry within the comboToFill parameter. At the end select the first parameter.
 	</COMMENTO>
	<PARAMETRO label="parameters" DESCRIZIONE=""/>
	<PARAMETRO label="emptyValue" DESCRIZIONE="default value to be used as a value for the combo box entry when no location is provided"/>
	<PARAMETRO label="emptyText" DESCRIZIONE="default text to be displayed when no location is provided"/>
	<PARAMETRO label="allValue" DESCRIZIONE="default value to be used as a value for the combo box entry for the all locations"/>
	<PARAMETRO label="allText" DESCRIZIONE="default text to be displayed in order to select all the locations"/>
	<PARAMETRO label="comboToFill" DESCRIZIONE="combo box control to fill with data"/>
	<PARAMETRO label="alwaysEmpty" DESCRIZIONE="if true insert always the empty element as second element"/>
	<PARAMETRO label="synchro" DESCRIZIONE=""/>
	</FUNZIONE>
*/
function fillCAB(parameters, emptyValue, emptyText, allValue, allText, comboToFill, alwaysEmpty, synchro)
{
    var ln = 0;
    for (var i=0; i < locations.length; i++)
    {
        if (parameters.location == ALL_DATA || i == parameters.location)
        {
            for (var j=0; j < locations[i].intestatari.length; j++)
            {
                if (parameters.accounteer == ALL_DATA || j == parameters.accounteer)
                {
                    for (var k=0; k < locations[i].intestatari[j].banche.length; k++)
                    {
                        if (parameters.bank == ALL_DATA || locations[i].intestatari[j].banche[k].codice == parameters.bank)
                        {
                            ln += locations[i].intestatari[j].banche[k].rapportiCC.length;
                        }
                    }
                }
            }
        }
    }
    if (ln == 0)
    {
        comboToFill.length = 1;
        comboToFill.options[0].text = emptyText;
        comboToFill.options[0].value = emptyValue;
    }
    else
    {
        var counter = 0;
        var tempArray = new Array(calculateNewLength(ln, allValue, allText, alwaysEmpty));
        var realLength = 0;
        for (var i=0; i< locations.length; i++)
        {
            if (parameters.location == ALL_DATA || i == parameters.location)
            {
                var locationObject = locations[i];
                for (var j=0; j < locationObject.intestatari.length; j++)
                {
                    if (parameters.accounteer == ALL_DATA || j == parameters.accounteer)
                    {
                        var accounteerObject = locationObject.intestatari[j];
                        for (var k=0; k < accounteerObject.banche.length; k++)
                        {
                            if (parameters.bank == ALL_DATA || locations[i].intestatari[j].banche[k].codice == parameters.bank)
                            {
                                var bankObject = accounteerObject.banche[k];
                                for (var l=0; l < bankObject.rapportiCC.length; l++)
                                {
                                    var account = bankObject.rapportiCC[l];
                                    // Search the combo to see if the current cab is already inserted
                                    var found = false;
                                    for (var m=0; m < tempArray.length && !found; m++)
                                    {
                                        found = (tempArray[m] == account.codice_cab);
                                    }
                                    if (!found)
                                    {
                                        realLength++;
                                        tempArray[counter++] = account.codice_cab;
                                    }
                                }
                            }
                        }
                    }
                }
            }
        }
        comboToFill.length = calculateNewLength(realLength, allValue, allText, alwaysEmpty);
        counter = 0;
        counter = insertComboElementIfNeeded(counter, emptyValue, emptyText, comboToFill, alwaysEmpty);
        counter = insertComboElementIfNeeded(counter, allValue, allText, comboToFill, (allValue != NO_ALL && allText != NO_ALL))
        for (var i=0; i < realLength; i++)
        {
            comboToFill.options[counter].text = tempArray[i];
            comboToFill.options[counter].cab = tempArray[i];
            comboToFill.options[counter++].value = tempArray[i];
        }
    }
    if (ln > 0 && synchro)
    {
        if (getContextCCCombo().selectedIndex > 0)
        {
            comboToFill.options[getContextCCCombo().selectedIndex - 1].selected = true;
        }
    }
    else
    {
        comboToFill.options[0].selected = true;
    }
}

/*
	<FUNZIONE label="fillCA">
	<AUTORE>?</AUTORE>
	<COMMENTO> Fill a combo box with a set of CA accounts. For every accounteer founded in the location array insert
 	 an entry within the comboToFill parameter. At the end select the first parameter.
 	</COMMENTO>
	<PARAMETRO label="parameters" DESCRIZIONE=""/>
	<PARAMETRO label="emptyValue" DESCRIZIONE="default value to be used as a value for the combo box entry when no location is provided"/>
	<PARAMETRO label="emptyText" DESCRIZIONE="default text to be displayed when no location is provided"/>
	<PARAMETRO label="allValue" DESCRIZIONE="default value to be used as a value for the combo box entry for the all locations"/>
	<PARAMETRO label="allText" DESCRIZIONE="default text to be displayed in order to select all the locations"/>
	<PARAMETRO label="comboToFill" DESCRIZIONE="combo box control to fill with data"/>
	<PARAMETRO label="alwaysEmpty" DESCRIZIONE="if true insert always the empty element as second element"/>
	<PARAMETRO label="synchro" DESCRIZIONE=""/>
	</FUNZIONE>
*/
function fillCA(parameters, emptyValue, emptyText, allValue, allText, comboToFill, alwaysEmpty, synchro)
{
    var ln = 0;
    for (var i=0; i < locations.length; i++)
    {
        if (parameters.location == ALL_DATA || i == parameters.location)
        {
            for (var j=0; j < locations[i].intestatari.length; j++)
            {
                if (parameters.accounteer == ALL_DATA || j == parameters.accounteer)
                {
                    for (var k=0; k < locations[i].intestatari[j].banche.length; k++)
                    {
                        if (parameters.bank == ALL_DATA || locations[i].intestatari[j].banche[k].codice == parameters.bank)
                        {
                            ln += locations[i].intestatari[j].banche[k].rapportiCA.length;
                        }
                    }
                }
            }
        }
    }
    if (ln == 0)
    {
        comboToFill.length = 1;
        comboToFill.options[0].text = emptyText;
        comboToFill.options[0].value = emptyValue;
    }
    else
    {
        comboToFill.length = calculateNewLength(ln, allValue, allText, alwaysEmpty);
        var counter = 0;
        counter = insertComboElementIfNeeded(counter, allValue, allText, comboToFill, (allValue != NO_ALL && allText != NO_ALL))
        for (var i=0; i< locations.length; i++)
        {
            if (parameters.location == ALL_DATA || i == parameters.location)
            {
                var locationObject = locations[i];
                for (var j=0; j < locationObject.intestatari.length; j++)
                {
                    if (parameters.accounteer == ALL_DATA || j == parameters.accounteer)
                    {
                        var accounteerObject = locationObject.intestatari[j];
                        for (var k=0; k < accounteerObject.banche.length; k++)
                        {
                            if (parameters.bank == ALL_DATA || locations[i].intestatari[j].banche[k].codice == parameters.bank)
                            {
                                var bankObject = accounteerObject.banche[k];
                                for (var l=0; l < bankObject.rapportiCA.length; l++)
                                {
                                    var account = bankObject.rapportiCA[l];
                                    comboToFill.options[counter].text = account.desc_ca;
                                    comboToFill.options[counter].ca = account.descrizione;
                                    comboToFill.options[counter].cab = account.codice_cab;
                                    comboToFill.options[counter].postazione = account.postazione;//MB
									comboToFill.options[counter].intestatario = account.intestatario;//MB
                                    comboToFill.options[counter].banca = account.banca;//MB
									comboToFill.options[counter++].value = account.codice;
                                }
                            }
                        }
                    }
                }
            }
        }
    }
    if (ln > 0 && synchro)
    {
        if (getContextCACombo().selectedIndex > 0)
        {
            comboToFill.options[getContextCACombo().selectedIndex - 1].selected = true;
        }
    }
    else
    {
        comboToFill.options[0].selected = true;
    }
}

/*
	<FUNZIONE label="fillCP">
	<AUTORE>?</AUTORE>
	<COMMENTO> Fill a combo box with a set of CP accounts. For every accounteer founded in the location array insert
 	 an entry within the comboToFill parameter. At the end select the first parameter.
 	</COMMENTO>
	<PARAMETRO label="parameters" DESCRIZIONE=""/>
	<PARAMETRO label="emptyValue" DESCRIZIONE="default value to be used as a value for the combo box entry when no location is provided"/>
	<PARAMETRO label="emptyText" DESCRIZIONE="default text to be displayed when no location is provided"/>
	<PARAMETRO label="allValue" DESCRIZIONE="default value to be used as a value for the combo box entry for the all locations"/>
	<PARAMETRO label="allText" DESCRIZIONE="default text to be displayed in order to select all the locations"/>
	<PARAMETRO label="comboToFill" DESCRIZIONE="combo box control to fill with data"/>
	<PARAMETRO label="alwaysEmpty" DESCRIZIONE="if true insert always the empty element as second element"/>
	<PARAMETRO label="synchro" DESCRIZIONE=""/>
	</FUNZIONE>
*/
function fillCP(parameters, emptyValue, emptyText, allValue, allText, comboToFill, alwaysEmpty, synchro)
{
    var ln = 0;
    for (var i=0; i < locations.length; i++)
    {
        if (parameters.location == ALL_DATA || i == parameters.location)
        {
            for (var j=0; j < locations[i].intestatari.length; j++)
            {
                if (parameters.accounteer == ALL_DATA || j == parameters.accounteer)
                {
                    for (var k=0; k < locations[i].intestatari[j].banche.length; k++)
                    {
                        if (parameters.bank == ALL_DATA || locations[i].intestatari[j].banche[k].codice == parameters.bank)
                        {
                            ln += locations[i].intestatari[j].banche[k].rapportiCP.length;
                        }
                    }
                }
            }
        }
    }
    if (ln == 0)
    {
        comboToFill.length = 1;
        comboToFill.options[0].text = emptyText;
        comboToFill.options[0].value = emptyValue;
    }
    else
    {
        comboToFill.length = calculateNewLength(ln, allValue, allText, alwaysEmpty);
        var counter = 0;
        counter = insertComboElementIfNeeded(counter, allValue, allText, comboToFill, (allValue != NO_ALL && allText != NO_ALL))
        for (var i=0; i< locations.length; i++)
        {
            if (parameters.location == ALL_DATA || i == parameters.location)
            {
                var locationObject = locations[i];
                for (var j=0; j < locationObject.intestatari.length; j++)
                {
                    if (parameters.accounteer == ALL_DATA || j == parameters.accounteer)
                    {
                        var accounteerObject = locationObject.intestatari[j];
                        for (var k=0; k < accounteerObject.banche.length; k++)
                        {
                            if (parameters.bank == ALL_DATA || locations[i].intestatari[j].banche[k].codice == parameters.bank)

                            {
                                var bankObject = accounteerObject.banche[k];
                                for (var l=0; l < bankObject.rapportiCP.length; l++)
                                {
                                    var account = bankObject.rapportiCP[l];
                                    comboToFill.options[counter].text = account.desc_cp;
                                    comboToFill.options[counter].cp = account.descrizione;
                                    comboToFill.options[counter].cab = account.codice_cab;
                                    comboToFill.options[counter].postazione = account.postazione;//MB
									comboToFill.options[counter].intestatario = account.intestatario;//MB
                                    comboToFill.options[counter].banca = account.banca;//MB
                                    comboToFill.options[counter++].value = account.codice;
                                }
                            }
                        }
                    }
                }
            }
        }
    }
    if (ln > 0 && synchro)
    {
        if (getContextCPCombo().selectedIndex > 0)
        {
            comboToFill.options[getContextCPCombo().selectedIndex - 1].selected = true;
        }
    }
    else
    {
        comboToFill.options[0].selected = true;
    }
}

/*
	<FUNZIONE label="fillDT">
	<AUTORE>?</AUTORE>
	<COMMENTO> Fill a combo box with a set of DT accounts. For every accounteer founded in the location array insert
 	 an entry within the comboToFill parameter. At the end select the first parameter.
 	</COMMENTO>
	<PARAMETRO label="parameters" DESCRIZIONE=""/>
	<PARAMETRO label="emptyValue" DESCRIZIONE="default value to be used as a value for the combo box entry when no location is provided"/>
	<PARAMETRO label="emptyText" DESCRIZIONE="default text to be displayed when no location is provided"/>
	<PARAMETRO label="allValue" DESCRIZIONE="default value to be used as a value for the combo box entry for the all locations"/>
	<PARAMETRO label="allText" DESCRIZIONE="default text to be displayed in order to select all the locations"/>
	<PARAMETRO label="comboToFill" DESCRIZIONE="combo box control to fill with data"/>
	<PARAMETRO label="alwaysEmpty" DESCRIZIONE="if true insert always the empty element as second element"/>
	<PARAMETRO label="synchro" DESCRIZIONE=""/>
	</FUNZIONE>
*/
function fillDT(parameters, emptyValue, emptyText, allValue, allText, comboToFill, alwaysEmpty, synchro)
{
    var ln = 0;
    for (var i=0; i < locations.length; i++)
    {
        if (parameters.location == ALL_DATA || i == parameters.location)
        {
            for (var j=0; j < locations[i].intestatari.length; j++)
            {
                if (parameters.accounteer == ALL_DATA || j == parameters.accounteer)
                {
                    for (var k=0; k < locations[i].intestatari[j].banche.length; k++)
                    {
                        if (parameters.bank == ALL_DATA || locations[i].intestatari[j].banche[k].codice == parameters.bank)

                        {
                            ln += locations[i].intestatari[j].banche[k].rapportiDT.length;
                        }
                    }
                }
            }
        }
    }
    if (ln == 0)
    {
        comboToFill.length = 1;
        comboToFill.options[0].text = emptyText;
        comboToFill.options[0].value = emptyValue;
    }
    else
    {
        comboToFill.length = calculateNewLength(ln, allValue, allText, alwaysEmpty);
        var counter = 0;
        counter = insertComboElementIfNeeded(counter, allValue, allText, comboToFill, (allValue != NO_ALL && allText != NO_ALL))
        for (var i=0; i< locations.length; i++)
        {
            if (parameters.location == ALL_DATA || i == parameters.location)
            {
                var locationObject = locations[i];
                for (var j=0; j < locationObject.intestatari.length; j++)
                {
                    if (parameters.accounteer == ALL_DATA || j == parameters.accounteer)
                    {
                        var accounteerObject = locationObject.intestatari[j];
                        for (var k=0; k < accounteerObject.banche.length; k++)
                        {
                            if (parameters.bank == ALL_DATA || locations[i].intestatari[j].banche[k].codice == parameters.bank)
                            {
                                var bankObject = accounteerObject.banche[k];
                                for (var l=0; l < bankObject.rapportiDT.length; l++)
                                {
                                    var account = bankObject.rapportiDT[l];
                                    comboToFill.options[counter].text = account.descrizione;
                                    comboToFill.options[counter].cab = account.codice_cab;
                                    comboToFill.options[counter].postazione = account.postazione;//MB
									comboToFill.options[counter].intestatario = account.intestatario;//MB
                                    comboToFill.options[counter].banca = account.banca;//MB
									comboToFill.options[counter++].value = account.codice;
                                }
                            }
                        }
                    }
                }
            }
        }
    }
    if (ln > 0 && synchro)
    {
        if (getContextDTCombo().selectedIndex > 0)
        {
            comboToFill.options[getContextDTCombo().selectedIndex - 1].selected = true;
        }
    }
    else
    {
        comboToFill.options[0].selected = true;
    }
}

/*
	<FUNZIONE label="fillES">
	<AUTORE>?</AUTORE>
	<COMMENTO> Fill a combo box with a set of ES accounts. For every accounteer founded in the location array insert
 	 an entry within the comboToFill parameter. At the end select the first parameter.
 	</COMMENTO>
	<PARAMETRO label="parameters" DESCRIZIONE=""/>
	<PARAMETRO label="emptyValue" DESCRIZIONE="default value to be used as a value for the combo box entry when no location is provided"/>
	<PARAMETRO label="emptyText" DESCRIZIONE="default text to be displayed when no location is provided"/>
	<PARAMETRO label="allValue" DESCRIZIONE="default value to be used as a value for the combo box entry for the all locations"/>
	<PARAMETRO label="allText" DESCRIZIONE="default text to be displayed in order to select all the locations"/>
	<PARAMETRO label="comboToFill" DESCRIZIONE="combo box control to fill with data"/>
	<PARAMETRO label="alwaysEmpty" DESCRIZIONE="if true insert always the empty element as second element"/>
	<PARAMETRO label="synchro" DESCRIZIONE=""/>
	</FUNZIONE>
*/
function fillES(parameters, emptyValue, emptyText, allValue, allText, comboToFill, alwaysEmpty, synchro)
{
    var ln = 0;
    for (var i=0; i < locations.length; i++)
    {
        if (parameters.location == ALL_DATA || i == parameters.location)
        {
            for (var j=0; j < locations[i].intestatari.length; j++)
            {
                if (parameters.accounteer == ALL_DATA || j == parameters.accounteer)
                {
                    for (var k=0; k < locations[i].intestatari[j].banche.length; k++)
                    {
                        if (parameters.bank == ALL_DATA || locations[i].intestatari[j].banche[k].codice == parameters.bank)
                        {
                            ln += locations[i].intestatari[j].banche[k].rapportiES.length;
                        }
                    }
                }
            }
        }
    }
    if (ln == 0)
    {
        comboToFill.length = 1;
        comboToFill.options[0].text = emptyText;
        comboToFill.options[0].value = emptyValue;
    }
    else
    {
        comboToFill.length = calculateNewLength(ln, allValue, allText, alwaysEmpty);
        var counter = 0;
        counter = insertComboElementIfNeeded(counter, allValue, allText, comboToFill, (allValue != NO_ALL && allText != NO_ALL))
        for (var i=0; i< locations.length; i++)
        {
            if (parameters.location == ALL_DATA || i == parameters.location)
            {
                var locationObject = locations[i];
                for (var j=0; j < locationObject.intestatari.length; j++)
                {
                    if (parameters.accounteer == ALL_DATA || j == parameters.accounteer)
                    {
                        var accounteerObject = locationObject.intestatari[j];
                        for (var k=0; k < accounteerObject.banche.length; k++)
                        {
                            if (parameters.bank == ALL_DATA || locations[i].intestatari[j].banche[k].codice == parameters.bank)
                            {
                                var bankObject = accounteerObject.banche[k];
                                for (var l=0; l < bankObject.rapportiES.length; l++)
                                {
                                    var account = bankObject.rapportiES[l];
                                    comboToFill.options[counter].text = account.descrizione;
                                    comboToFill.options[counter].cab = account.codice_cab;
                                    comboToFill.options[counter].postazione = account.postazione;//MB
									comboToFill.options[counter].intestatario = account.intestatario;//MB
                                    comboToFill.options[counter].banca = account.banca;//MB
									comboToFill.options[counter++].value = account.codice;
                                }
                            }
                        }
                    }
                }
            }
        }
    }
    if (ln > 0 && synchro)
    {
        if (getContextESCombo().selectedIndex > 0)
        {
            comboToFill.options[getContextESCombo().selectedIndex - 1].selected = true;
        }
    }
    else
    {
        comboToFill.options[0].selected = true;
    }
}

/*
	<FUNZIONE label="calculateNewLength">
	<AUTORE>?</AUTORE>
	<COMMENTO> Fill a combo box with a set of ES accounts. For every accounteer founded in the location array insert
 	 an entry within the comboToFill parameter. At the end select the first parameter.
 	</COMMENTO>
	<PARAMETRO label="len" DESCRIZIONE=""/>
	<PARAMETRO label="allValue" DESCRIZIONE="default value to be used as a value for the combo box entry for the all locations"/>
	<PARAMETRO label="allText" DESCRIZIONE="default text to be displayed in order to select all the locations"/>
	<PARAMETRO label="alwaysEmpty" DESCRIZIONE="if true insert always the empty element as second element"/>
	</FUNZIONE>
*/
function calculateNewLength(len, allValue, allText, alwaysEmpty)
{
    if (alwaysEmpty)
    {
        len ++;
    }
    if (allValue != NO_ALL && allText != NO_ALL)
    {
        len ++;
    }
    return len;
}

/*
	<FUNZIONE label="insertComboElementIfNeeded">
	<AUTORE>?</AUTORE>
	<COMMENTO> inserisce un nuovo combo option</COMMENTO>
	<PARAMETRO label="position" DESCRIZIONE="posizione dell'option"/>
	<PARAMETRO label="value" DESCRIZIONE="valore"/>
	<PARAMETRO label="text" DESCRIZIONE="testo"/>
	<PARAMETRO label="combo" DESCRIZIONE="oggetto combo"/>
	<PARAMETRO label="needed" DESCRIZIONE="(tipo boolean) se true va inserito altrimenti no"/>
	</FUNZIONE>
*/
function insertComboElementIfNeeded(position, value, text, combo, needed)
{
    if (needed)
    {
        combo.options[position].text = text;
        combo.options[position++].value = value;
    }
    return position;
}


/*
	<FUNZIONE label="insertComboElementIfNeeded">
	<AUTORE>Mauro Begatti</AUTORE>
	<COMMENTO>checkForDuplicateBank</COMMENTO>
	<PARAMETRO label="comboToFill" DESCRIZIONE="oggetto combo"/>
	<PARAMETRO label="bankCode" DESCRIZIONE="valore banca"/>
	</FUNZIONE>
*/
function checkForDuplicateBank (comboToFill, bankCode)
{
    len = comboToFill.length;
    i = 1;
    dup = false;
    while ((i < len)&&(dup == false))
    {
        opt = comboToFill.options[i].value;
        if(opt==bankCode)
        {
            dup = true;
        }
        else
        {
         i = i+1;
        }
    }
    return dup;
 }

/*
	<FUNZIONE label="clearComboValues">
	<AUTORE>Mauro Begatti</AUTORE>
	<COMMENTO>Clear n combo option values from index i. The combo option value is setted to null.</COMMENTO>
	<PARAMETRO label="comboToClear" DESCRIZIONE="oggetto combo"/>
	<PARAMETRO label="i" DESCRIZIONE="indice (vedi descrizione funzione)"/>
	<PARAMETRO label="n" DESCRIZIONE="numero dei combo da cancellare (vedi descrizione funzione)"/>
	</FUNZIONE>
*/
function clearComboValues (comboToClear, i, n)
{
    len = comboToClear.length;
    j = i;
    count = n;
    stop = ((j>len-1)||(count<=0));
    while (!stop)
    {
        comboToClear.options[j].value = null;
        j++;
        count--;
        stop = ((j>len-1)||(count<=0));
    }
}

/*
	<FUNZIONE label="fillFromCC">
	<AUTORE>?</AUTORE>
	<COMMENTO>Select the accounteer and the bank in combo which comply with the selected cc.</COMMENTO>
	<PARAMETRO label="comboAcc" DESCRIZIONE="oggetto combo intestatario"/>
	<PARAMETRO label="comboBank" DESCRIZIONE="oggetto combo banca"/>
	<PARAMETRO label="comboCC" DESCRIZIONE="oggetto combo conto"/>
	</FUNZIONE>
*/
function fillFromCC(comboAcc, comboBank, comboCC)
{
	if (comboCC.selectedIndex>0)
	{
		var idIntestatario = comboCC.options[comboCC.selectedIndex].intestatario;
		var idBanca = comboCC.options[comboCC.selectedIndex].banca;
		var idConto = comboCC.options[comboCC.selectedIndex].value;
		
		selectComboElementByIdIntestatario(comboAcc, idIntestatario);
		fillBanche(createParameterObjectFromCombos(null,comboAcc,null), "", "", NO_ALL, NO_ALL, comboBank, true, false);
		selectComboElementByIdBanca(comboBank, idBanca);
		fillCCDispoEnable(createParameterObjectFromCombos(null,comboAcc,comboBank), "", "", NO_ALL, NO_ALL, comboCC, true, false);
		selectComboElementByIdConto(comboCC, idConto);
	}
}


/*
	<FUNZIONE label="fillFromCCFilter">
	<AUTORE>?</AUTORE>
	<COMMENTO>(Used in the new filter )Select the accounteer and the bank in combo which comply with the selected cc.</COMMENTO>
	<PARAMETRO label="comboAcc" DESCRIZIONE="oggetto combo intestatario"/>
	<PARAMETRO label="comboBank" DESCRIZIONE="oggetto combo banca"/>
	<PARAMETRO label="comboCC" DESCRIZIONE="oggetto combo conto"/>
	</FUNZIONE>
*/
function fillFromCCFilter(comboAcc, comboBank, comboCC)
{
	if (comboCC.selectedIndex>0)
	{
		var idIntestatario = comboCC.options[comboCC.selectedIndex].intestatario;
		var idBanca = comboCC.options[comboCC.selectedIndex].banca;
		var idConto = comboCC.options[comboCC.selectedIndex].value;
		
		selectComboElementByIdIntestatario(comboAcc, idIntestatario);
		fillBanche(createParameterObjectFromCombos(null,comboAcc,null), '*', 'TUTTI', NO_ALL, NO_ALL, comboBank, true, false);
		selectComboElementByIdBanca(comboBank, idBanca);
		fillCC(createParameterObjectFromCombos(null,comboAcc,comboBank), '', '', '*', 'TUTTI', comboCC, false, false);
		selectComboElementByIdConto(comboCC, idConto);
	}
}

/*
	<FUNZIONE label="fillFromCPFilter">
	<AUTORE>?</AUTORE>
	<COMMENTO>(Used in the new filter )Select the accounteer and the bank in combo which comply with the selected cp.</COMMENTO>
	<PARAMETRO label="comboAcc" DESCRIZIONE="oggetto combo intestatario"/>
	<PARAMETRO label="comboBank" DESCRIZIONE="oggetto combo banca"/>
	<PARAMETRO label="comboCC" DESCRIZIONE="oggetto combo conto"/>
	</FUNZIONE>
*/
function fillFromCPFilter(comboAcc, comboBank, comboCC)
{
	if (comboCC.selectedIndex>0)
	{
		var idIntestatario = comboCC.options[comboCC.selectedIndex].intestatario;
		var idBanca = comboCC.options[comboCC.selectedIndex].banca;
		var idConto = comboCC.options[comboCC.selectedIndex].value;
		
		selectComboElementByIdIntestatario(comboAcc, idIntestatario);
		fillBanche(createParameterObjectFromCombos(null,comboAcc,null), '*', 'TUTTI', NO_ALL, NO_ALL, comboBank, true, false);
		selectComboElementByIdBanca(comboBank, idBanca);
		fillCP(createParameterObjectFromCombos(null,comboAcc,comboBank), '', '', '*', 'TUTTI', comboCC, false, false);
		selectComboElementByIdConto(comboCC, idConto);
	}
}

/*
	<FUNZIONE label="fillFromCAFilter">
	<AUTORE>?</AUTORE>
	<COMMENTO>(Used in the new filter )Select the accounteer and the bank in combo which comply with the selected ca.</COMMENTO>
	<PARAMETRO label="comboAcc" DESCRIZIONE="oggetto combo intestatario"/>
	<PARAMETRO label="comboBank" DESCRIZIONE="oggetto combo banca"/>
	<PARAMETRO label="comboCC" DESCRIZIONE="oggetto combo conto"/>
	</FUNZIONE>
*/
function fillFromCAFilter(comboAcc, comboBank, comboCC)
{
	if (comboCC.selectedIndex>0)
	{
		var idIntestatario = comboCC.options[comboCC.selectedIndex].intestatario;
		var idBanca = comboCC.options[comboCC.selectedIndex].banca;
		var idConto = comboCC.options[comboCC.selectedIndex].value;
		
		selectComboElementByIdIntestatario(comboAcc, idIntestatario);
		fillBanche(createParameterObjectFromCombos(null,comboAcc,null), '*', 'TUTTI', NO_ALL, NO_ALL, comboBank, true, false);
		selectComboElementByIdBanca(comboBank, idBanca);
		fillCA(createParameterObjectFromCombos(null,comboAcc,comboBank), '', '', '*', 'TUTTI', comboCC, false, false);
		selectComboElementByIdConto(comboCC, idConto);
	}
}

/*
	<FUNZIONE label="fillFromDTFilter">
	<AUTORE>?</AUTORE>
	<COMMENTO>(Used in the new filter )Select the accounteer and the bank in combo which comply with the selected dt.</COMMENTO>
	<PARAMETRO label="comboAcc" DESCRIZIONE="oggetto combo intestatario"/>
	<PARAMETRO label="comboBank" DESCRIZIONE="oggetto combo banca"/>
	<PARAMETRO label="comboCC" DESCRIZIONE="oggetto combo conto"/>
	</FUNZIONE>
*/
function fillFromDTFilter(comboAcc, comboBank, comboCC)
{
	if (comboCC.selectedIndex>0)
	{
		var idIntestatario = comboCC.options[comboCC.selectedIndex].intestatario;
		var idBanca = comboCC.options[comboCC.selectedIndex].banca;
		var idConto = comboCC.options[comboCC.selectedIndex].value;
		
		selectComboElementByIdIntestatario(comboAcc, idIntestatario);
		fillBanche(createParameterObjectFromCombos(null,comboAcc,null), '*', 'TUTTI', NO_ALL, NO_ALL, comboBank, true, false);
		selectComboElementByIdBanca(comboBank, idBanca);
		fillDT(createParameterObjectFromCombos(null,comboAcc,comboBank), '', '', '*', 'TUTTI', comboCC, false, false);
		selectComboElementByIdConto(comboCC, idConto);
	}
}

/*
	<FUNZIONE label="fillFromESFilter">
	<AUTORE>?</AUTORE>
	<COMMENTO>(Used in the new filter )Select the accounteer and the bank in combo which comply with the selected es.</COMMENTO>
	<PARAMETRO label="comboAcc" DESCRIZIONE="oggetto combo intestatario"/>
	<PARAMETRO label="comboBank" DESCRIZIONE="oggetto combo banca"/>
	<PARAMETRO label="comboCC" DESCRIZIONE="oggetto combo conto"/>
	</FUNZIONE>
*/
function fillFromESFilter(comboAcc, comboBank, comboCC)
{
	if (comboCC.selectedIndex>0)
	{
		var idIntestatario = comboCC.options[comboCC.selectedIndex].intestatario;
		var idBanca = comboCC.options[comboCC.selectedIndex].banca;
		var idConto = comboCC.options[comboCC.selectedIndex].value;
		
		selectComboElementByIdIntestatario(comboAcc, idIntestatario);
		fillBanche(createParameterObjectFromCombos(null,comboAcc,null), '*', 'TUTTI', NO_ALL, NO_ALL, comboBank, true, false);
		selectComboElementByIdBanca(comboBank, idBanca);
		fillES(createParameterObjectFromCombos(null,comboAcc,comboBank), '', '', '*', 'TUTTI', comboCC, false, false);
		selectComboElementByIdConto(comboCC, idConto);
	}
}
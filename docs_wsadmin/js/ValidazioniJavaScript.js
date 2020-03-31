/*
 Insieme di funzioni Javascript per la validazione
 di tipi primitivi.

<UL>
 <LI>valid_number
 <LI>valid_ABI_CAB
 <LI>valid_CAP
 <LI>valid_account
 <LI>valid_IBAN
</UL>
*/

/*
  function: valid_number
  ver: 1.0 - 13/02/2000
       1.1 - 12/06/2000 (fi e mb) chiamata a "inner_valid_number"
                        senza accettare gli zeri davanti al numero
  author: mb
  description: verifica la correttezza formale di un intero con 0,n decimali
               utilizzando una espressione regolare.
			   NB accetta numeri nel formato 0,00000 o 0,100000
  return:      1 = formato corretto
               0 = formato non corretto
*/
function valid_number(numero, min_interi, max_interi, min_decimali, max_decimali) {
  return inner_valid_number(numero,min_interi,max_interi,min_decimali,max_decimali,1);
}


function controlla_se_zero (numero) {
  if (numero==0) return 1
    else return 0;
}


/*
  function: inner_valid_number
  ver: 1.0 - 12/06/2000
  author: mb e fi
  description: USATA SOLO ALL'INTERNO DELLA LIBRERIA
               verifica la correttezza formale di un intero con 0,n decimali
               utilizzando una espressione regolare.
			   NB pu? accettare numeri nel formato 00000,00000 o 0000,100000
			      se il parametro leading zero ? a 1
  return:      1 = formato corretto
               0 = formato non corretto
*/
function inner_valid_number(numero, min_interi, max_interi, min_decimali, max_decimali, leading_zero) {
  var errore=1;
  if (leading_zero)
    var rex_interi   = "^([1-9][0-9]{"  + (min_interi - 1) + "," + (max_interi - 1) + "}|^0)";
  else
    var rex_interi   = "^[0-9]{"  + (min_interi) + "," + (max_interi) + "}";


  var rex_decimali = "(,[0-9]{" + min_decimali + "," + max_decimali + "}){0,1}$";

  var rex = "";

  if ( max_decimali > 0 ) rex = rex_interi + rex_decimali;
  else                    rex = rex_interi + '$';

  check = new RegExp(rex);

  if (!check.test(numero)) errore = 0;

  return errore;
}

/*
  function: valid_ABI_CAB
  ver: 1.0 - 13/02/2000
  author: mb
  description: verifica la correttezza formale di un codice ABI o CAB
               al momento verifica solo che si tratti di un numero di 5 cifre
			   Si possono aggiungere controlli di checksum o altro.
  return:      1 = formato corretto
               0 = formato non corretto
*/
function valid_abi_cab(numero) {

  return inner_valid_number(numero,5,5,0,0,0);
}




/*
  function: valid_CAP
  ver: 1.0 - 13/02/2000
  author: mb
  description: verifica la correttezza formale di un codice CAP
               al momento verifica solo che si tratti di un numero di 5 cifre
			   Si possono aggiungere controlli di checksum o altro.
  return:      1 = formato corretto
               0 = formato non corretto
*/
function valid_cap(codice) {

  return inner_valid_number(codice,5,5,0,0,0);
}


/*
 * usata in modulo movimeno soldi: funziona
*/
function valid_account(numero_conto) {

  var errore=1;
  
  var rex   = "^[0-9a-zA-Z]{1,20}$";

  check = new RegExp(rex);

  if (!check.test(numero_conto)) errore = 0;

  return errore;
}

/*
 * usata in modulo movimento soldi:
 * controlla la correttezza del formato di un codice IBAN appartenente all'area SEPA
 * Viene anzitutto controllato che il codice inizi con due lettere identificanti il codice del paese
 * Quindi, in base al codice del paese, controlla che la lunghezza della stringa sia quella codificata per il paese
*/
function valid_SEPA_IBAN(stringaIban) {

  var errore=1;
  
  var rex   = "^[a-zA-Z]{2}[0-9]{2}[0-9a-zA-Z]{1,30}$";

  check = new RegExp(rex);

  if (!check.test(stringaIban)) errore = 0;
  
  else {
  	
  	var codicePaese = stringaIban.substring(0,2).toUpperCase();
  	
  	if ('IT' == codicePaese) {
  	
  		return is_italian_IBAN(stringaIban);
  	
  	} else {
  	
	  	var array_lunghezze_IBAN = crea_array_lunghezze_IBAN();
	  	
	  	if (!codicePaese in array_lunghezze_IBAN) errore = 0;  	
  	
	  	else if (stringaIban.length != array_lunghezze_IBAN[codicePaese]) errore = 0;
	  	
	}
  }

  return errore;
}

/*
 * usata in modulo movimento soldi:
 * controlla che l'IBAN sia un IBAN italiano.
 * N.B. la stringa Iban passata deve essere lunga almeno 2 caratteri (si consiglia di utilizzare la funzione valid_SEPA_IBAN prima di questa).
 */
function is_italian_IBAN(stringaIban) {
  var errore=1;
  
  var rex   = "^[iI][tT][0-9]{2}[a-zA-Z][0-9]{10}[a-zA-Z0-9]{12}";

  check = new RegExp(rex);

  if (!check.test(stringaIban)) errore = 0;
  
  return errore;
}

/*
 funzione che costruisce il vettore associativo contenente la lunghezza dei codici IBAN associati ai paesi SEPA
*/
function crea_array_lunghezze_IBAN() {
	var lunghezze_codici_IBAN = new Array();
	lunghezze_codici_IBAN['AD'] = 24;
	lunghezze_codici_IBAN['AT'] = 24;
	lunghezze_codici_IBAN['BE'] = 16;
	lunghezze_codici_IBAN['BG'] = 22;
	lunghezze_codici_IBAN['CH'] = 21;
	lunghezze_codici_IBAN['CZ'] = 24;
	lunghezze_codici_IBAN['CY'] = 28;
	lunghezze_codici_IBAN['DK'] = 18;
	lunghezze_codici_IBAN['DE'] = 22;
	lunghezze_codici_IBAN['EE'] = 20;
	lunghezze_codici_IBAN['ES'] = 24;
	lunghezze_codici_IBAN['FI'] = 18;
	lunghezze_codici_IBAN['FR'] = 27;
	lunghezze_codici_IBAN['GI'] = 23;
	lunghezze_codici_IBAN['GB'] = 22;
	lunghezze_codici_IBAN['GR'] = 27;
	lunghezze_codici_IBAN['HU'] = 28;
	lunghezze_codici_IBAN['IE'] = 22;
	lunghezze_codici_IBAN['IS'] = 26;
//	lunghezze_codici_IBAN['IT'] = 27; viene controllato tramite la is_italian_iban
	lunghezze_codici_IBAN['LV'] = 21;
	lunghezze_codici_IBAN['LI'] = 21;
	lunghezze_codici_IBAN['LT'] = 20;
	lunghezze_codici_IBAN['LU'] = 20;
	lunghezze_codici_IBAN['MT'] = 31;
	lunghezze_codici_IBAN['MC'] = 27;
	lunghezze_codici_IBAN['NL'] = 18;
	lunghezze_codici_IBAN['NO'] = 15;
	lunghezze_codici_IBAN['PL'] = 28;
	lunghezze_codici_IBAN['PT'] = 25;
	lunghezze_codici_IBAN['RO'] = 24;
	lunghezze_codici_IBAN['SM'] = 27;
	lunghezze_codici_IBAN['SE'] = 24;
	lunghezze_codici_IBAN['SK'] = 24;
	lunghezze_codici_IBAN['SI'] = 19;
	return lunghezze_codici_IBAN;
}

/*
  function: valid_account
  ver: 1.0 - 13/02/2000
  author: mb
  description: verifica la correttezza formale di un numero di conto corrente.
               Al momento verifica solo che si tratti di una stringa alfanumerica
			   con in piu' i caratteri '.' '-' '/'
  return:      1 = formato corretto
               0 = formato non corretto
*/


function valid_account_MT(numero_conto) {

  var errore=1;

  var rex   = "^[0-9a-zA-Z.//-]{1,20}$";

  check = new RegExp(rex);

  if (!check.test(numero_conto)) errore = 0;

  return errore;
}





function to_number(numero) {

  var rex   = /,/gi;

  if (valid_number(numero,1,6,0,5) == 1) {
  	return numero.replace(rex,'.');

  }
  else
  	return "nan"
}

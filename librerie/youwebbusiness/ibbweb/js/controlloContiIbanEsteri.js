/*
 * -------------------------------------------
 * - controllo-conti-elcos.js                -
 * -------------------------------------------
 * - Vito Torciano <vito.torciano@cedac.com> -
 * -------------------------------------------
 * - Nota: Necessita di checkLibrary         -
 * -------------------------------------------
 */

/*
	<FUNZIONE label="controllaIBANFrancia">
	<AUTORE>Vito Torciano</AUTORE>
	<COMMENTO>
		Controllo esattezza IBAN francese
		Ritorna true se l'IBAN e' valido.
	</COMMENTO>
	<PARAMETRO label="iban" DESCRIZIONE="IBAN Francese da controllare"/>
	</FUNZIONE>
*/

function controllaIBANFrancia(iban) {
	if(iban.length != 27) return false;
	var isoCountryCode = iban.substring(0,2);
	var ibanCheckDigits = iban.substring(2, 4);
	var bankCode = iban.substring(4, 9);
	var branchCode = iban.substring(9, 14);
	var accountNumber = iban.substring(14, 25);
	var checkDigits = iban.substring(25, 27);
	return controllaIBANFrancia2(isoCountryCode, ibanCheckDigits, bankCode, branchCode, accountNumber, checkDigits);
}

/*
	<FUNZIONE label="controllaIBANFrancia2">
	<AUTORE>Vito Torciano</AUTORE>
	<COMMENTO>
		Verifica esattezza IBAN francese, 
		il formato e' "IIJJAAAAABBBBBCCCCCCCCCCCDD"	
		II          = ISO Country Code
		JJ          = Iban check digits
		AAAAA       = Bank code
		BBBBB       = Branch code
		CCCCCCCCCCC = Account number
		DD          = Check digits
		
		Ritorna true se l'iban e' valido
	</COMMENTO>
	<PARAMETRO label="isoCountryCode" DESCRIZIONE="Codice ISO del paese"/>
	<PARAMETRO label="ibanCheckDigit" DESCRIZIONE="Cifre di controllo per l'IBAN"/>	
	<PARAMETRO label="bankCode" DESCRIZIONE="Bank Code"/>	
	<PARAMETRO label="branchCode" DESCRIZIONE="Branch Code"/>	
	<PARAMETRO label="accountNumber" DESCRIZIONE="Numero di conto"/>	
	<PARAMETRO label="checkDigits" DESCRIZIONE="Cifre di controllo per conto domestico"/>	
	</FUNZIONE>
*/

function controllaIBANFrancia2(isoCountryCode, ibanCheckDigits, bankCode, branchCode, accountNumber, checkDigits) {
	// Controlli obbligatorieta', lunghezza, tipo dei campi
	if(!(isoCountryCode && ibanCheckDigits && bankCode && branchCode && accountNumber && checkDigits)) {
		return false;
	}
	if(isoCountryCode != "FR") {
		return false;
	}
	if(ibanCheckDigits.length != 2 || !isOnlyNumericString(ibanCheckDigits)) {
		return false;
	}
	// Controllo numero CC domestico francese
	var checkLocalAcct = controllaContoLCR(bankCode+branchCode, accountNumber, checkDigits);
	if(!checkLocalAcct) {
		return false;
	}
	
	var checkString = bankCode + branchCode + accountNumber + checkDigits + isoCountryCode + ibanCheckDigits;
	var convertedCheckString = "";
	for(i = 0; i < checkString.length; i++) {
		convertedCheckString += convertCharForIBAN(checkString.charAt(i));
	}
	var resto = mod97(convertedCheckString);
	return resto == 1;
}

/*
	<FUNZIONE label="controllaContoLCR">
	<AUTORE>Vito Torciano</AUTORE>
	<COMMENTO>
		Verifica esattezza delle coordinate bancarie domestiche francesi,
		il formato e' AAAAABBBBBCCCCCCCCCCCDD dove:	
		AAAAA       = Bank code
		BBBBB       = Branch code
		CCCCCCCCCCC = Account number
		DD          = Check digits
		
		Ritorna true se l'iban e' valido
	</COMMENTO>
	<PARAMETRO label="codiceNazione" DESCRIZIONE="Bank Code+Branch Code"/>	
	<PARAMETRO label="numeroConto" DESCRIZIONE="Numero di conto"/>	
	<PARAMETRO label="cifraControllo" DESCRIZIONE="Cifre di controllo per conto domestico"/>	
	</FUNZIONE>
*/

function controllaContoLCR(codiceNazione, numeroConto, cifraControllo) {
	if(null == codiceNazione || null == numeroConto ||  null == cifraControllo) return false;

	codiceNazione = trimString(codiceNazione);
	numeroConto = trimString(numeroConto);
	cifraControllo = trimString(cifraControllo);	
	
	if(codiceNazione.length != 10) return false;
	if(numeroConto.length != 11) return false;
	if(cifraControllo.length != 2) return false;
	
	if(!isOnlyNumericString(codiceNazione)) {
		return false;
	}
	if(!isOnlyAlfaNumericString(numeroConto)) {
		return false;
	}
	if(!isOnlyNumericString(cifraControllo)) {
		return false;
	}
	
	var stringaControllo = codiceNazione;
	for(i = 0; i < numeroConto.length; i++) {
		stringaControllo += convertCharForLCR(numeroConto.charAt(i));
	}
	stringaControllo += cifraControllo;
	
	var resto = mod97(stringaControllo);
	return resto == 0;
}

/*
	<FUNZIONE label="controllaIBANSpagna">
	<AUTORE>Vito Torciano</AUTORE>
	<COMMENTO>
		Controllo esattezza IBAN spagnolo
		Ritorna true se l'IBAN e' valido.
	</COMMENTO>
	<PARAMETRO label="iban" DESCRIZIONE="IBAN spagnolo da controllare"/>
	</FUNZIONE>
*/
function controllaIBANSpagna(iban) {
	if(iban.length != 24) return false;
		
	isoCountryCode = iban.substring(0, 2);
	ibanCheckDigits = iban.substring(2, 4);
	bankCode = iban.substring(4, 8);
	branchCode = iban.substring(8, 12);
	checkDigits = iban.substring(12, 14);
	accountNumber = iban.substring(14, 24);
	return controllaIBANSpagna2(isoCountryCode, ibanCheckDigits, bankCode, branchCode, checkDigits, accountNumber);
}

/*
	<FUNZIONE label="controllaIBANSpagna2">
	<AUTORE>Vito Torciano</AUTORE>
	<COMMENTO>
		Verifica esattezza IBAN Spagnolo, 
		il formato e' "IIJJAAAABBBBDDCCCCCCCCCC"	
		II          = ISO Country Code
		JJ          = Iban check digits
		AAAA        = Bank code
		BBBB        = Branch code
		DD          = Check digits
		CCCCCCCCCC  = Account number
		
		Ritorna true se l'iban e' valido
	</COMMENTO>
	<PARAMETRO label="isoCountryCode" DESCRIZIONE="Codice ISO del paese"/>
	<PARAMETRO label="ibanCheckDigit" DESCRIZIONE="Cifre di controllo per l'IBAN"/>	
	<PARAMETRO label="bankCode" DESCRIZIONE="Bank Code"/>	
	<PARAMETRO label="branchCode" DESCRIZIONE="Branch Code"/>	
	<PARAMETRO label="checkDigits" DESCRIZIONE="Cifre di controllo per conto domestico"/>	
	<PARAMETRO label="accountNumber" DESCRIZIONE="Numero di conto"/>	
	</FUNZIONE>
*/
function controllaIBANSpagna2(isoCountryCode, ibanCheckDigits, bankCode, branchCode, checkDigits, accountNumber) {
	// Controlli obbligatorieta', lunghezza, tipo dei campi
	if(!(isoCountryCode && ibanCheckDigits && bankCode && branchCode && accountNumber && checkDigits)) {
		return false;
	}
	if(isoCountryCode != "ES") {
		return false;
	}
	if(ibanCheckDigits.length != 2 || !isOnlyNumericString(ibanCheckDigits)) {
		return false;
	}
	// Controllo numero CC domestico francese
	var checkLocalAcct = controllaContoRecibos(bankCode+branchCode, accountNumber, checkDigits);
	if(!checkLocalAcct) {
		return false;
	}
	
	var checkString = bankCode + branchCode + checkDigits + accountNumber + isoCountryCode + ibanCheckDigits;
	var convertedCheckString = "";
	for(i = 0; i < checkString.length; i++) {
		convertedCheckString += convertCharForIBAN(checkString.charAt(i));
	}
	var resto = mod97(convertedCheckString);
	return resto == 1;
}

/*
	<FUNZIONE label="controllaContoRecibos">
	<AUTORE>Vito Torciano</AUTORE>
	<COMMENTO>
		Verifica esattezza delle coordinate bancarie spagnole, il formato e' "AAAABBBBCCDDDDDDDDDD"	
		AAAA       = Codigo de entidad
		BBBB       = Codigo de oficina
		CC         = Digitos de control
		DDDDDDDDDD = Numero de cuenta
	</COMMENTO>
	<PARAMETRO label="codiceNazione" DESCRIZIONE="Codigo de entidad + Codigo de oficina (8 caratteri)"/>
	<PARAMETRO label="numeroConto" DESCRIZIONE="numero CC (10 caratteri)"/>	
	<PARAMETRO label="cifraControllo" DESCRIZIONE="cifre di controllo (2 caratteri)"/>	
	</FUNZIONE>
*/
function controllaContoRecibos(codiceNazione, numeroConto, cifraControllo) {
	var pesi1 = new Array(4, 8, 5, 10, 9, 7, 3, 6);
	var pesi2 = new Array(1, 2, 4, 8, 5, 10, 9, 7, 3, 6);
	
	if(null == codiceNazione || null == numeroConto ||  null == cifraControllo) return false;

	codiceNazione = trimString(codiceNazione);
	numeroConto = trimString(numeroConto);
	cifraControllo = trimString(cifraControllo);

	if(codiceNazione.length != 8) return false;
	if(numeroConto.length != 10) return false;
	if(cifraControllo.length != 2) return false;
	
	if(!isOnlyNumericString(codiceNazione)) {
		return false;
	}
	if(!isOnlyNumericString(numeroConto)) {
		return false;
	}
	if(!isOnlyNumericString(cifraControllo)) {
		return false;
	}
	
	var val1 = 0;
	var val2 = 0;
	
	for(i = 0; i < codiceNazione.length; i++) {
		val1 += (parseInt(codiceNazione.charAt(i)) * pesi1[i]);		
	}
	val1 = (11 - (val1 % 11));
	if(val1 == 10) {
		val1 = 1;
	} else if(val1 == 11) {
		val1 = 0;
	}

	for(i = 0; i < numeroConto.length; i++) {
		val2 += (parseInt(numeroConto.charAt(i)) * pesi2[i]);		
	}
	val2 = (11 - (val2 % 11));
	if(val2 == 10) {
		val2 = 1;
	} else if(val2 == 11) {
		val2 = 0;
	}
	
	chk = "" + val1.toString() + val2.toString();
	return (chk == cifraControllo);	
}

/*
	<FUNZIONE label="mod97">
	<AUTORE>Vito Torciano</AUTORE>
	<COMMENTO>
		Calcolo iterativo del modulo 97 di un numero passato in forma di stringa
		in modo da poter gestire un numero di cifre elevato.
	</COMMENTO>
	<PARAMETRO label="str" DESCRIZIONE="stringa che rappresenta un numero"/>
	</FUNZIONE>
*/
function mod97(str) 
{
	while(parseFloat(str) >= 97) 
	{
		var tmp = str.substring(0, 9);
		var numerosenzaZeroIniziale = tmp;
		var tmp2 = str.substring(9);
		
		while(numerosenzaZeroIniziale.indexOf("0")==0)
			numerosenzaZeroIniziale= numerosenzaZeroIniziale.substring(1);

		var tmp3 = parseInt(numerosenzaZeroIniziale) % 97;
		
		if (tmp2 != '')
			str = tmp3 + tmp2;
		else
			str = tmp3;

	}

	return parseInt(str);
}


/*
	<FUNZIONE label="convertCharForLCR">
	<AUTORE>Vito Torciano</AUTORE>
	<COMMENTO>
	Converte un carattere alfanumerico in un numero secondo la tabella di lookup
	specificata nella documentazione ECBS TR201 V2.2.25 riguardante la verifica
	delle cifre di controllo per i conti correnti domestici francesi.
	</COMMENTO>
	<PARAMETRO label="ch" DESCRIZIONE="carattere da convertire"/>	
	</FUNZIONE>
*/
function convertCharForLCR(ch) {
	var CONV_NUMBER = "12345678912345678923456789";
	ch = ch.toUpperCase();	
	if(isOnlyNumericString(ch)) {
		return ch;
	} else {
		idx = (ch.charCodeAt(0) - 65)
		return CONV_NUMBER.charAt(idx);
	}
}

/*
	<FUNZIONE label="convertCharForIBAN">
	<AUTORE>Vito Torciano</AUTORE>
	<COMMENTO>
	Converte un carattere alfanumerico in un numero secondo la tabella di lookup
	specificata nella documentazione EBS204 V3.2 riguardante la verifica delle
	cifre di controllo per gli IBAN.
	</COMMENTO>
	<PARAMETRO label="ch" DESCRIZIONE="carattere da convertire"/>	
	</FUNZIONE>
*/
function convertCharForIBAN(ch) {
	ch = ch.toUpperCase();
	if(isOnlyNumericString(ch)) {
		return ch;
	} else {
		return ch.charCodeAt(0) - 55;
	}	
}
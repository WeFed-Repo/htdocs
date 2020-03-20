var sdk;
var sdkParams;

(function (sdk, $, args) {
    // namespace Sdk.Utils
    sdk.utils = (function (utils, $, args) {
        // namespace sdk.utils.text_itec
        utils.text_2 = (function (text_2, $, args) {

            var checkInputAmmountRegex = new RegExp(/^[+]?\d+(\,\d+)?$/);
            var checkInputAmmount = function (val) {
                var retVal = { result: true, suffixResourceError: undefined };

                if (val != undefined && val != '') {
                    if (checkInputAmmountRegex.test(val) == false) {
                        retVal.result = false;
                        retVal.suffixResourceError = 'currencyNotANumber';
                        return retVal;
                    };

                    if (val == 0) {
                        retVal.result = false;
                        retVal.suffixResourceError = 'currencyMustGreaterThanZero';    
                    };
                }

                return retVal;
            };

            var checkInputDateFromTo = function (dateFrom, dateTo, dateFormat, dateFromMustBePresent, dateToMustBePresent) {
                var retVal = { result: true, suffixResourceError: undefined, dateFrom: undefined, dateTo: undefined };

                dateFormat = dateFormat == undefined ? 'DD-MM-YYYY hh:mm:ss' : dateFormat; 
                dateFromMustBePresent = dateFromMustBePresent == undefined ? false : true;
                dateToMustBePresent = dateToMustBePresent == undefined ? false : true;
                
                var momentDateFrom = undefined;
                var momentDateTo = undefined;

                if (dateFrom != undefined && dateFrom != '' ) {
                    momentDateFrom = moment(dateFrom, dateFormat);
                }
                if (dateTo != undefined && dateTo != '' ) {
                    momentDateTo = moment(dateTo, dateFormat);
                }

                if (momentDateFrom != undefined && momentDateTo != undefined) {
                    if (momentDateFrom > momentDateTo) {
                        retVal.result = false;
                        retVal.suffixResourceError = 'DateEndLower'; 
                        return retVal;
                    }
                }
                
                if (dateFromMustBePresent == true && momentDateFrom == undefined) {
                    retVal.result = false;
                    retVal.suffixResourceError = 'DateEndSetValue';
                    return retVal;
                }

                if (dateToMustBePresent == true && momentDateTo == undefined) {
                    retVal.result = false;
                    retVal.suffixResourceError = 'DateStartSetValue';
                    return retVal;
                }

                if (momentDateFrom != undefined) {
                    if (!momentDateFrom.isValid()) {
                        retVal.result = false;
                        retVal.suffixResourceError = 'DateStartSetValidValue'; 
                        return retVal;
                    }
                }
                if (momentDateTo != undefined) {
                    if (!momentDateTo.isValid()) {
                        retVal.result = false;
                        retVal.suffixResourceError = 'DateEndSetValidValue';
                        return retVal;
                    }
                }

                retVal.dateFrom = momentDateFrom;
                retVal.dateTo = momentDateTo;
                return retVal;
            };
            // se codice fiscale è undefined o null si spacca, fare il controllo a monte
            // la funzione verifica se è un codice fiscale ha il cin corretto
            var isCodiceFiscale = function (cf) {
                var validi, i_cf, s, set1, set2, setpari, setdisp;
                cf = cf.toUpperCase();

                if (cf.length != 16)
                    return false;
                else {
                    validi = "ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
                    for (i_cf = 0; i_cf < 16; i_cf++)
                        if (validi.indexOf(cf.charAt(i_cf)) == -1)
                            return false

                    set1 = "0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ";
                    set2 = "ABCDEFGHIJABCDEFGHIJKLMNOPQRSTUVWXYZ";
                    setpari = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
                    setdisp = "BAKPLCQDREVOSFTGUHMINJWZYX";
                    s = 0;
                    for (i_cf = 1; i_cf <= 13; i_cf += 2)
                        s += setpari.indexOf(set2.charAt(set1.indexOf(cf.charAt(i_cf))));
                    for (i_cf = 0; i_cf <= 14; i_cf += 2)
                        s += setdisp.indexOf(set2.charAt(set1.indexOf(cf.charAt(i_cf))));
                    if (s % 26 != cf.charCodeAt(15) - 'A'.charCodeAt(0))
                        return false;
                }
                return true;
            };
            // la funzione verifica che non via siano caratteri speciali in una stringa
            // se il parametro è undefined tira una bomba controllare esternamente
            function checkNoSpecialChars(stringa) {

                var ammessi = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";

                for (i_str = 0; i_str < stringa.length; i_str++) {
                    if (ammessi.indexOf(stringa.charAt(i_str)) == -1) {
                        return stringa.charAt(i_str);
                    }
                }

                return null;
            };

            function checkSyntaxDate(value) {
                // Controls the validity of a date (gg/mm/aaaa)
                isOk = false;
                sintax_valid = true;
                msg = "";

                var value = checkSeparator(trimString(value));
                // This block controls only if there are two separators characters
                s1 = value.indexOf("/");
                // s1 and s2 are the separator positions
                if (s1 != -1) {
                    // Retrive the position of the next separator
                    s2 = (s1 + 1) + (value.substring(s1 + 1) + 1).indexOf("/");
                    if (s2 == -1 || s2 == s1)
                        sintax_valid = false;
                }
                else
                    sintax_valid = false;

                return sintax_valid;
            }; 

            /*
           <FUNZIONE label="trimString">
           <AUTORE>Cristiano Ballarini</AUTORE>
           <COMMENTO>
               This function clear all white spaces and special character from the string
               esiste una funzione identica in strings.js (trim(str))
           </COMMENTO>
           <PARAMETRO label="str" DESCRIZIONE=""/>											
           </FUNZIONE>
            */

            function trimString(str) {
                // Remove leading spaces and carriage returns
                while ((str.substring(0, 1) == ' ') || (str.substring(0, 1) == '\n') || (str.substring(0, 1) == '\r')) {
                    str = str.substring(1, str.length);
                }

                // Remove trailing spaces and carriage returns
                while ((str.substring(str.length - 1, str.length) == ' ') || (str.substring(str.length - 1, str.length) == '\n') || (str.substring(str.length - 1, str.length) == '\r')) {
                    str = str.substring(0, str.length - 1);
                }
                return str;
            }

            /*
			<FUNZIONE label="checkSeparator">
			<AUTORE>Cristiano Ballarini</AUTORE>
			<COMMENTO>
				This function substitute all the separators (see
				the declaration af the "separators" array) with the separator "/".
			</COMMENTO>
			<PARAMETRO label="value" DESCRIZIONE=""/>											
			</FUNZIONE>
		    */

            function checkSeparator(value) {
                var separators = new Array("/", "\\", "-");
                var position = -1;
                for (var i = 0; i < separators.length; i++) {
                    // Skip the '/' separator to avoid infinite loop.
                    if (separators[i] == '/')
                        continue;
                    s1 = value.indexOf(separators[i]);
                    while (s1 != -1) {
                        firstPart = value.substring(0, s1);
                        lastPart = value.substring(s1 + 1, value.length);
                        value = firstPart + "/" + lastPart;
                        s1 = value.indexOf(separators[i]);
                    }
                }
                return value;
            };   

            function preformatDate(value) {
                // Minimum year allowed
                var minYear = 1900;
                // MaximuM year allowed
                var maxYear = 2050;
                // With a two char year, if yy>yearLimit => 19yy, else 20yy
                var yearLimit = 10;
                
                var valueApp;
                var s1 = value.indexOf("/");
                var s2 = (s1 + 1) + (value.substring(s1 + 1) + 1).indexOf("/");

                var sg_dd = value.substring(0, s1);
                var sg_mm = value.substring(s1 + 1, s2);
                var sg_yyyy = value.substring(s2 + 1);
                var sentinelDay = sg_dd.substring(0, 1);
                if (sentinelDay == '0')
                    sg_dd = sg_dd.substring(1, sg_dd.length);
                var dd = parseInt(sg_dd);
                var sentinelMonth = sg_mm.substring(0, 1);
                if (sentinelMonth == '0')
                    sg_mm = sg_mm.substring(1, sg_mm.length);
                var sentinelYear = sg_yyyy.substring(0, 1);
                if (sentinelYear == '0')
                    sg_yyyy = sg_yyyy.substring(1, sg_yyyy.length);
                var mm = parseInt(sg_mm);
                var yyyy = parseInt(sg_yyyy);

                // Add the "0" string if the day is of one digit
                if ((dd + "").length == 1)
                    dd = "0" + dd;

                // Add the "0" string if the month is of one digit
                if ((mm + "").length == 1)
                    mm = "0" + mm;

                valueApp = dd + "/" + mm + "/";

                if (sg_yyyy.length == 4) { //nop
                }
                else if (sg_yyyy.length == 2 && sentinelYear == '0') {
                    if (yyyy > yearLimit)
                        sg_yyyy = "19" + yyyy;
                    else
                        sg_yyyy = "20" + yyyy;
                }
                else if ((sg_yyyy.length == 2) || (sg_yyyy.length == 1 && (sentinelYear == '0'))) {
                    if (yyyy > yearLimit)
                        if (sentinelYear == '0')
                            sg_yyyy = "190" + yyyy;
                        else
                            sg_yyyy = "19" + yyyy;
                    else
                        if (sentinelYear == '0')
                            sg_yyyy = "200" + yyyy;
                        else
                            sg_yyyy = "20" + yyyy;
                }

                valueApp = valueApp + sg_yyyy;

                return valueApp;
            };

            function checkValidDate(value) {
                // Minimum year allowed
                var minYear = 1900;
                // MaximuM year allowed
                var maxYear = 2050;
                // With a two char year, if yy>yearLimit => 19yy, else 20yy
                var yearLimit = 10;
                // Controls the validity of a date (gg/mm/aaaa)
                isOk = false;
                msg = "";

                if (!value) {
                    return value;
                }

                s1 = value.indexOf("/");
                s2 = (s1 + 1) + (value.substring(s1 + 1) + 1).indexOf("/");

                sg_dd = value.substring(0, s1);
                sg_mm = value.substring(s1 + 1, s2);
                sg_yyyy = value.substring(s2 + 1);
                var sentinel;
                var sentinelYear;
                sentinelDay = sg_dd.substring(0, 1);
                if (sentinelDay == '0')
                    sg_dd = sg_dd.substring(1, sg_dd.length);
                dd = parseInt(sg_dd);
                sentinelMonth = sg_mm.substring(0, 1);
                if (sentinelMonth == '0')
                    sg_mm = sg_mm.substring(1, sg_mm.length);
                sentinelYear = sg_yyyy.substring(0, 1);
                if (sentinelYear == '0')
                    sg_yyyy = sg_yyyy.substring(1, sg_yyyy.length);
                mm = parseInt(sg_mm);
                yyyy = parseInt(sg_yyyy);
                yearDigitError = false;
                if (("" + dd) != sg_dd || ("" + mm) != sg_mm || ("" + yyyy) != sg_yyyy || isNaN(dd) || isNaN(mm) || isNaN(yyyy) || sg_yyyy.length != 4 || dd > 31 || mm > 12) {
                    sintax_error = true;
                }
                else {
                    if (mm == 2) {
                        if (dd > 28 || 1 > dd) {
                            // If the day is 29
                            if (dd == 29) {
                                if (yyyy % 4 == 0) {
                                    if (yyyy % 400 == 0) {
                                        isOk = true;
                                    }
                                    else {
                                        if (yyyy % 100 != 0)
                                            isOk = true;
                                    }
                                }
                                else {
                                    isOk = false;
                                }
                            }// Else error
                            else {
                                isOk = false;
                            }
                        }
                        else isOk = true;
                    }
                    else if ((mm == 4) || (mm == 6) || (mm == 9) || (mm == 11)) {
                        if (dd > 30 || 1 > dd)
                            isOk = false;
                        else
                            isOk = true;
                    }
                    else {
                        if (dd > 31 || 1 > dd)
                            isOk = false;
                        else
                            isOk = true;
                    }
                    if (isOk) {
                        // Add the "0" string if the day is of one digit
                        if ((dd + "").length == 1)
                            dd = "0" + dd;
                        if (mm > 12 || 1 > mm || dd > 31 || 1 > dd)
                            isOk = false;
                        else
                            isOk = true;

                        // Add the "0" string if the month is of one digit
                        if ((mm + "").length == 1)
                            mm = "0" + mm;
                        valueApp = dd + "/" + mm + "/";
                        if (sg_yyyy.length == 4) {
                            if ((yyyy < minYear) || (yyyy > maxYear)) {
                                isOk = false;
                                //msg = "notinrange";
                            }
                            else
                                isOk = true;
                        }
                        else if (sg_yyyy.length == 2 && sentinelYear == '0') {
                            if (yyyy > yearLimit)
                                sg_yyyy = "19" + yyyy;
                            else
                                sg_yyyy = "20" + yyyy;
                        }
                        else if ((sg_yyyy.length == 2) || (sg_yyyy.length == 1 && (sentinelYear == '0'))) {
                            if (yyyy > yearLimit)
                                if (sentinelYear == '0')
                                    sg_yyyy = "190" + yyyy;
                                else
                                    sg_yyyy = "19" + yyyy;
                            else
                                if (sentinelYear == '0')
                                    sg_yyyy = "200" + yyyy;
                                else
                                    sg_yyyy = "20" + yyyy;
                        }
                        else {
                            yearDigitError = true;
                            msg = "";
                        }
                        // The result value...
                        value = valueApp + sg_yyyy;
                    }
                }

                if ((!isOk) || (yearDigitError)) {
                    if (msg == "")
                        return false;
                    else
                        return true;
                }
                else
                    return true;

            };

            function checkDateInRange(value) {
                // Minimum year allowed
                var minYear = 1900;
                // MaximuM year allowed
                var maxYear = 2050;
                // With a two char year, if yy>yearLimit => 19yy, else 20yy
                var yearLimit = 10;

                
                var valueApp;
                var s1 = value.indexOf("/");
                var s2 = (s1 + 1) + (value.substring(s1 + 1) + 1).indexOf("/");

                var sg_dd = value.substring(0, s1);
                var sg_mm = value.substring(s1 + 1, s2);
                var sg_yyyy = value.substring(s2 + 1);

                if (sg_yyyy.length == 4) {
                    if ((yyyy < minYear) || (yyyy > maxYear)) {
                        return false;
                    }
                }
            };

            function checkOnlyNumbers(stringa) {

                var ammessi = "0123456789";

                for (i_str = 0; i_str < stringa.length; i_str++) {
                    if (ammessi.indexOf(stringa.charAt(i_str)) == -1) {
                        return stringa.charAt(i_str);
                    }
                }

                return null;
            };

            /*
	        <FUNZIONE label="checkPIVA">
	        <AUTORE>Cristiano Ballarini</AUTORE>
	        <COMMENTO>Check the value passed. Return null if the partita iva is not correct.</COMMENTO>
	        <PARAMETRO label="pi" DESCRIZIONE=""/>														
	        </FUNZIONE>
            */

            function checkPIVA(pi) {
                var isOK = true;
                var msg = '';
                var i_pi;
                if (pi != '') {
                    if (pi.length != 11) {
                        isOK = false;

                    }
                    else {
                        if (pi == "00000000000") {
                            isOK = false;
                        }
                        validi = "0123456789";
                        for (i_pi = 0; i_pi < 11; i_pi++) {
                            if (validi.indexOf(pi.charAt(i_pi)) == -1) {
                                isOK = false;
                            }
                        }
                        if (isOK == true) {
                            s = 0;
                            for (i_pi = 0; i_pi <= 9; i_pi += 2)
                                s += pi.charCodeAt(i_pi) - '0'.charCodeAt(0);
                            for (i_pi = 1; i_pi <= 9; i_pi += 2) {
                                c = 2 * (pi.charCodeAt(i_pi) - '0'.charCodeAt(0));
                                if (c > 9) c = c - 9;
                                s += c;
                            }
                            if ((10 - s % 10) % 10 != pi.charCodeAt(10) - '0'.charCodeAt(0)) {
                                isOK = false;
                            }
                        }
                    }
                }
                if (isOK == true) {
                    return pi;
                }
                else {
                    return null;
                }
            };

            /*
	        <FUNZIONE label="checkABICAB">
	        <AUTORE>Cristiano Ballarini</AUTORE>
	        <COMMENTO>Check the value passed. Return null if the value is not a code ABI or CAB.</COMMENTO>
	        <PARAMETRO label="abicab" DESCRIZIONE=""/>																
	        </FUNZIONE>
            */

            function checkABICAB(abicab) {
                var isOK = true;
                var msg = '';
                var i_abc;
                var returnValue = null;

                if (abicab != '') {
                    if (abicab.length > 5) {
                        isOK = false;
                    }
                    else {
                        validi = "0123456789";
                        for (i_abc = 0; i_abc < 11; i_abc++) {
                            if (validi.indexOf(abicab.charAt(i_abc)) == -1) {
                                isOK = false;
                            }
                        }
                        if (isOK == true) {
                            zeri = 5 - abicab.length;
                            if (zeri > 0) {
                                var dummy = "00000";
                                returnValue = dummy.substr(0, zeri) + abicab;
                            }
                            else {
                                returnValue = abicab;
                            }
                        }
                    }
                }
                if (isOK == true) {
                    return returnValue;
                }
                else {
                    return null;
                }
            };

            function abiRangeValidator(abi) {
                var rxp = /^([0-9]{5,5}){0,1}$/i;
                if (!abi.match(rxp)) return false;
                else if ((abi != '') && ((abi < '01000') || (abi > '10999'))) return false;
                return true;
            };

            function cabRangeValidator(cab) {
                var rxp = /^([0-9]{5,5}){0,1}$/i;
                if (!cab.match(rxp)) return false;
                else if ((cab != '') && ((cab < '00001') || (cab > '99999'))) return false;
                return true;
            };

            /*
			<FUNZIONE label="checkAccountFormat">
			<AUTORE>Cristiano Ballarini</AUTORE>
			<COMMENTO>Check if the account number format is valid</COMMENTO>
			<PARAMETRO label="value" DESCRIZIONE=""/>
			<PARAMETRO label="minlength" DESCRIZIONE=""/>
			<PARAMETRO label="maxlength" DESCRIZIONE=""/>						
			</FUNZIONE>
		    */

            function checkAccountFormat(value, minlength, maxlength) {
                if (value.length == 0)
                    return value;

                /* variabili utilizzate
                var msg, msg1="", msg2="", msg3;
                      msg = MSG_Num_Conto;
                      msg3 = MSG_Controllo_Soluzione;
                      */
                value = value.toUpperCase();
                accountLength = value.length;
                var check = true;
                //var tipiCaratteri = MSG_Err_Caratter_Alfanum_Tail;
                validi = "ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";

                try {
                    if (minlength == 10 && maxlength == 10)// in alcuni casi il conto puo' essere 10 (es. euroincassi con Spagna selezionata)
                    {
                        //tipiCaratteri = MSG_Err_Caratter_Num_Tail;
                        validi = "0123456789";
                    }

                    if (minlength != 10 && minlength != 11)// in alcuni casi il conto puo' essere 10 o 11 caratteri (es. euroincassi) altrimenti viene forzato a 12
                        minlength = 12;

                    if (maxlength != 10 && maxlength != 11)
                        maxlength = 12;

                    for (i_af = 0; i_af < accountLength; i_af++) {
                        if (validi.indexOf(value.charAt(i_af)) == -1) {
                            //msg2 = MSG_Caratteri_Non_Validi;
                            check = false;

                            //modifica caratteri
                            value = value.replace(value.charAt(i_af), "");
                            i_af--;
                            accountLength = value.length;
                        }
                    }

                    if (value.length < minlength) //modifica lunghezza - aggiunge gli 0
                    {
                        //msg1 = minCharMsg + " " + minlength + " " + tipiCaratteri;
                        while (value.length < minlength)
                            value = "0" + value;
                        check = false;
                    }
                    else if (value.length > maxlength) // modifica lunghezza - elimina i caratteri di troppo
                    {
                        //msg1 = maxCharMsg + " " + maxlength + " " + tipiCaratteri;
                        if (value.length > maxlength)
                            value = value.substr(0, maxlength);
                        check = false;
                    }

                    if (!check) {
                        //alert(msg+msg1+msg2+msg3);
                        return 'false' + value;
                    }

                    return value;
                }
                catch (e) {
                    alert("Il campo con valore " + value + " ha generato il seguente errore: " + e.message)
                    return value;
                }
            };

            /*	
	        <FUNZIONE label="checkIBAN">
	        <AUTORE>Cristiano B.</AUTORE>
	        <COMMENTO>
		        Check the value passed. Return false if the IBAN value is != 27 or
		        do not match with the ABI, CAB, ACCOUNT codes.
	        </COMMENTO>
	        <PARAMETRO label="iban" DESCRIZIONE=""/>
	        <PARAMETRO label="abi" DESCRIZIONE=""/>
	        <PARAMETRO label="cab" DESCRIZIONE=""/>
	        <PARAMETRO label="account" DESCRIZIONE=""/>																		
	        </FUNZIONE>
            */

            function checkIBAN(iban, abi, cab, account) {
                if (iban.length > 0 && iban.length != 27) {
                    return false;
                }
                if (iban.length == 0 || (abi.length == 0 && cab.length == 0 && account.length == 0))
                    return true;

                abi_iban = iban.substring(5, 10);
                cab_iban = iban.substring(10, 15);
                account_iban = (iban.substring(15, 27)).toUpperCase();

                if (abi_iban == abi && cab_iban == cab && account_iban == account.toUpperCase())
                    return true;
                else {
                    return false;
                }
            };

            function emailCheck(emailStr) {
                var re = /^([0-9a-zA-Z]([\+\-_\.][0-9a-zA-Z]+)*)+@(([0-9a-zA-Z][-\w]*[0-9a-zA-Z]*\.)+[a-zA-Z0-9]{2,17})$/;
                return re.test(emailStr);
            };

            /*
	            <FUNZIONE label="isSWIFTString">
	            <AUTORE>Cristiano Ballarini</AUTORE>
	            <COMMENTO>Controlla che la stringa contenga soltanto caratteri ammessi dal circuito SWIFT.</COMMENTO>
	            <PARAMETRO label="string" DESCRIZIONE=""/>																			
	            </FUNZIONE>
            */

            function isSWIFTString(string) {
                var chars = "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ /-?:().,'+";
                var carriageReturn = 13;
                var lineFeed = 10;
                for (var i = 0; i < string.length; i++) {
                    if (chars.indexOf(string.charAt(i)) == -1 && string.charCodeAt(i) != carriageReturn && string.charCodeAt(i) != lineFeed) {
                        return false;
                    }
                }
                return true;
            };

            /*
	        <FUNZIONE label="controllaIBANFrancia">
	        <AUTORE></AUTORE>
	        <COMMENTO>
		        Controllo esattezza IBAN francese
		        Ritorna true se l'IBAN e' valido.
	        </COMMENTO>
	        <PARAMETRO label="iban" DESCRIZIONE="IBAN Francese da controllare"/>
	        </FUNZIONE>
            */

            function controllaIBANFrancia(iban) {
                if (iban.length != 27) return false;
                var isoCountryCode = iban.substring(0, 2);
                var ibanCheckDigits = iban.substring(2, 4);
                var bankCode = iban.substring(4, 9);
                var branchCode = iban.substring(9, 14);
                var accountNumber = iban.substring(14, 25);
                var checkDigits = iban.substring(25, 27);
                return controllaIBANFrancia2(isoCountryCode, ibanCheckDigits, bankCode, branchCode, accountNumber, checkDigits);
            };

            /*
                <FUNZIONE label="controllaIBANFrancia2">
                <AUTORE></AUTORE>
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
                if (!(isoCountryCode && ibanCheckDigits && bankCode && branchCode && accountNumber && checkDigits)) {
                    return false;
                }
                if (isoCountryCode != "FR") {
                    return false;
                }
                if (ibanCheckDigits.length != 2 || !isOnlyNumericString(ibanCheckDigits)) {
                    return false;
                }
                // Controllo numero CC domestico francese
                var checkLocalAcct = controllaContoLCR(bankCode + branchCode, accountNumber, checkDigits);
                if (!checkLocalAcct) {
                    return false;
                }

                var checkString = bankCode + branchCode + accountNumber + checkDigits + isoCountryCode + ibanCheckDigits;
                var convertedCheckString = "";
                for (i = 0; i < checkString.length; i++) {
                    convertedCheckString += convertCharForIBAN(checkString.charAt(i));
                }
                var resto = mod97(convertedCheckString);
                return resto == 1;
            };

            /*
	        <FUNZIONE label="controllaContoLCR">
	        <AUTORE></AUTORE>
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
                if (null == codiceNazione || null == numeroConto || null == cifraControllo) return false;

                codiceNazione = trimString(codiceNazione);
                numeroConto = trimString(numeroConto);
                cifraControllo = trimString(cifraControllo);

                if (codiceNazione.length != 10) return false;
                if (numeroConto.length != 11) return false;
                if (cifraControllo.length != 2) return false;

                if (!isOnlyNumericString(codiceNazione)) {
                    return false;
                }
                if (!isOnlyAlfaNumericString(numeroConto)) {
                    return false;
                }
                if (!isOnlyNumericString(cifraControllo)) {
                    return false;
                }

                var stringaControllo = codiceNazione;
                for (i = 0; i < numeroConto.length; i++) {
                    stringaControllo += convertCharForLCR(numeroConto.charAt(i));
                }
                stringaControllo += cifraControllo;

                var resto = mod97(stringaControllo);
                return resto == 0;
            };

            /*
	        <FUNZIONE label="convertCharForIBAN">
	        <AUTORE></AUTORE>
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
                if (isOnlyNumericString(ch)) {
                    return ch;
                } else {
                    return ch.charCodeAt(0) - 55;
                }
            };

            function isOnlyAlfaString(string) {
                string = string.toLowerCase();
                var chars = "qwertyuiopasdfghjklzxcvbnm";
                for (var i = 0; i < string.length; i++) {
                    if (chars.indexOf(string.charAt(i)) == -1)
                        return false;
                }
                return true;
            };

            function isOnlyNumericString(string) {
                var chars = "0123456789";
                for (var i = 0; i < string.length; i++) {
                    if (chars.indexOf(string.charAt(i)) == -1)
                        return false;
                }
                return true;
            };

            function isOnlyAlfaNumericString(string) {
                string = string.toLowerCase();
                var chars = "0123456789qwertyuiopasdfghjklzxcvbnm";
                for (var i = 0; i < string.length; i++) {
                    if (chars.indexOf(string.charAt(i)) == -1)
                        return false;
                }
                return true;
            };

            /*
	        <FUNZIONE label="convertCharForLCR">
	        <AUTORE></AUTORE>
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
                if (isOnlyNumericString(ch)) {
                    return ch;
                } else {
                    idx = (ch.charCodeAt(0) - 65)
                    return CONV_NUMBER.charAt(idx);
                }
            };

            /*
	        <FUNZIONE label="controllaIBANSpagna">
	        <AUTORE></AUTORE>
	        <COMMENTO>
		        Controllo esattezza IBAN spagnolo
		        Ritorna true se l'IBAN e' valido.
	        </COMMENTO>
	        <PARAMETRO label="iban" DESCRIZIONE="IBAN spagnolo da controllare"/>
	        </FUNZIONE>
            */
            function controllaIBANSpagna(iban) {
                if (iban.length != 24) return false;

                isoCountryCode = iban.substring(0, 2);
                ibanCheckDigits = iban.substring(2, 4);
                bankCode = iban.substring(4, 8);
                branchCode = iban.substring(8, 12);
                checkDigits = iban.substring(12, 14);
                accountNumber = iban.substring(14, 24);
                return controllaIBANSpagna2(isoCountryCode, ibanCheckDigits, bankCode, branchCode, checkDigits, accountNumber);
            };

            /*
                <FUNZIONE label="controllaIBANSpagna2">
                <AUTORE></AUTORE>
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
                if (!(isoCountryCode && ibanCheckDigits && bankCode && branchCode && accountNumber && checkDigits)) {
                    return false;
                }
                if (isoCountryCode != "ES") {
                    return false;
                }
                if (ibanCheckDigits.length != 2 || !isOnlyNumericString(ibanCheckDigits)) {
                    return false;
                }
                // Controllo numero CC domestico francese
                var checkLocalAcct = controllaContoRecibos(bankCode + branchCode, accountNumber, checkDigits);
                if (!checkLocalAcct) {
                    return false;
                }

                var checkString = bankCode + branchCode + checkDigits + accountNumber + isoCountryCode + ibanCheckDigits;
                var convertedCheckString = "";
                for (i = 0; i < checkString.length; i++) {
                    convertedCheckString += convertCharForIBAN(checkString.charAt(i));
                }
                var resto = mod97(convertedCheckString);
                return resto == 1;
            };

            /*
	        <FUNZIONE label="controllaContoRecibos">
	        <AUTORE></AUTORE>
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

                if (null == codiceNazione || null == numeroConto || null == cifraControllo) return false;

                codiceNazione = trimString(codiceNazione);
                numeroConto = trimString(numeroConto);
                cifraControllo = trimString(cifraControllo);

                if (codiceNazione.length != 8) return false;
                if (numeroConto.length != 10) return false;
                if (cifraControllo.length != 2) return false;

                if (!isOnlyNumericString(codiceNazione)) {
                    return false;
                }
                if (!isOnlyNumericString(numeroConto)) {
                    return false;
                }
                if (!isOnlyNumericString(cifraControllo)) {
                    return false;
                }

                var val1 = 0;
                var val2 = 0;

                for (i = 0; i < codiceNazione.length; i++) {
                    val1 += (parseInt(codiceNazione.charAt(i)) * pesi1[i]);
                }
                val1 = (11 - (val1 % 11));
                if (val1 == 10) {
                    val1 = 1;
                } else if (val1 == 11) {
                    val1 = 0;
                }

                for (i = 0; i < numeroConto.length; i++) {
                    val2 += (parseInt(numeroConto.charAt(i)) * pesi2[i]);
                }
                val2 = (11 - (val2 % 11));
                if (val2 == 10) {
                    val2 = 1;
                } else if (val2 == 11) {
                    val2 = 0;
                }

                chk = "" + val1.toString() + val2.toString();
                return (chk == cifraControllo);
            };

            /*
	        <FUNZIONE label="mod97">
	        <AUTORE></AUTORE>
	        <COMMENTO>
		        Calcolo iterativo del modulo 97 di un numero passato in forma di stringa
		        in modo da poter gestire un numero di cifre elevato.
	        </COMMENTO>
	        <PARAMETRO label="str" DESCRIZIONE="stringa che rappresenta un numero"/>
	        </FUNZIONE>
            */

            function mod97(str) {
                while (parseFloat(str) >= 97) {
                    var tmp = str.substring(0, 9);
                    var numerosenzaZeroIniziale = tmp;
                    var tmp2 = str.substring(9);

                    while (numerosenzaZeroIniziale.indexOf("0") == 0)
                        numerosenzaZeroIniziale = numerosenzaZeroIniziale.substring(1);

                    var tmp3 = parseInt(numerosenzaZeroIniziale) % 97;

                    if (tmp2 != '')
                        str = tmp3 + tmp2;
                    else
                        str = tmp3;

                }

                return parseInt(str);
            };
                                          
            
            text_2["checkInputAmmount"] = checkInputAmmount;
            text_2["checkInputDateFromTo"] = checkInputDateFromTo;
            text_2["isCodiceFiscale"] = isCodiceFiscale;
            text_2["checkNoSpecialChars"] = checkNoSpecialChars;
            text_2["checkSyntaxDate"] = checkSyntaxDate;
            text_2["preformatDate"] = preformatDate;
            text_2["checkValidDate"] = checkValidDate;
            text_2["checkDateInRange"] = checkDateInRange;
            text_2["checkOnlyNumbers"] = checkOnlyNumbers;
            text_2["checkPIVA"] = checkPIVA;
            text_2["checkABICAB"] = checkABICAB;
            text_2["abiRangeValidator"] = abiRangeValidator;
            text_2["cabRangeValidator"] = cabRangeValidator;
            text_2["checkAccountFormat"] = checkAccountFormat;
            text_2["checkIBAN"] = checkIBAN;
            text_2["emailCheck"] = emailCheck;
            text_2["isSWIFTString"] = isSWIFTString;
            text_2["controllaIBANFrancia"] = controllaIBANFrancia;
            text_2["controllaIBANSpagna"] = controllaIBANSpagna;

            return text_2;
        })(utils.text_2 || {}, $, args.text_2 || {});
        // end namespace sdk.utils.text_itec
        return utils;
    })(sdk.utils || {}, $, args.utils || {});
    // end namespace sdk.utils
    return sdk;
})(sdk || (sdk = {}), jQuery, sdkParams);


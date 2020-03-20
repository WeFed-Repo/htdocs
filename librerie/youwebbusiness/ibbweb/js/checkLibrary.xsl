<?xml version="1.0" encoding="iso-8859-1" ?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform" xmlns:xalan="org.apache.xalan.xslt.extensions.Redirect" extension-element-prefixes="xalan">
<xsl:output encoding="ISO-8859-1" method="text"/>
<xsl:template match="multilanguage">
	<xsl:for-each select="languagelist/language">
		<xsl:apply-templates select="//multilanguage/stringmap">
			<xsl:with-param name="language"><xsl:value-of select="@code"/></xsl:with-param>
		</xsl:apply-templates>
	</xsl:for-each>
</xsl:template>
	
<xsl:template match="//multilanguage/stringmap">
	
	<xsl:param name="language"/><!-- var language contiene la language corrente-->
	<xsl:variable name="file" select ="concat('checkLibrary-',$language,'.js')"/>
	<xalan:write file="{$file}" >
	<![CDATA[
						
 /**
 *
 *  CheckLibrary.
 *
 *  Javascript Library for form field-checking
 *
 *
 *  Copyright (c) 2000 Cedac
 *  author Marco Piraccini (marco.piraccini@cedac.com)
 *
 *
 *  Tested with: Explorer 5.50
 *           Netscape 4.73
 */


 /**
 *  Main functions:
 *
 *  checkValue:
 *
 *      Controls the field validity, "normalizing" it if needed.
 *      For the validation rules,see the functions:
 *          checkString(),
 *          checkInteger(),
 *          checkReal(),
 *          checkCurrency(),
 *          chekDate().
 *
 *      If a field is invalid, show an alert: "field_name : message".
 *      The field name is the name of the input box or the string specified (if specified) as last parameter
 *      in the checkValue() call.
 *
 *      Use
 *      <TD><INPUT name="campo_intero" value ="123" onchange="checkValue('campo_intero','','TRUE','INTEGER', 0, 10,'pippo')" ></TD>
 *
 *
 *  checkForm(formName):
 *      Call the checkAll function on the form passed
 *      Use:    <INPUT type="submit" name="bottone" value=" Controlla " onClick="return checkForm('');">
 *
 *
 */
		
		// ==========================================
	    // ======== GLOBAL VARIABLES ================
	    // ==========================================
	    ]]>
		
		var mandatoryFieldMsg="<xsl:apply-templates select="string[@code='MSG_MANDATORY_FIELD_MSG']/translation"><xsl:with-param name="lang"><xsl:value-of select="$language"/></xsl:with-param></xsl:apply-templates>";
        var invalidBoundsMessage="<xsl:apply-templates select="string[@code='MSG_INVALID_BOUNDS_MESSAGE']/translation"><xsl:with-param name="lang"><xsl:value-of select="$language"/></xsl:with-param></xsl:apply-templates>"; 
        var minCharMsg="<xsl:apply-templates select="string[@code='MSG_MIN_CHAR']/translation"><xsl:with-param name="lang"><xsl:value-of select="$language"/></xsl:with-param></xsl:apply-templates>";
        var maxCharMsg="<xsl:apply-templates select="string[@code='MSG_MAX_CHAR']/translation"><xsl:with-param name="lang"><xsl:value-of select="$language"/></xsl:with-param></xsl:apply-templates>";
        var charMsg="<xsl:apply-templates select="string[@code='MSG_CHAR']/translation"><xsl:with-param name="lang"><xsl:value-of select="$language"/></xsl:with-param></xsl:apply-templates>";
        var integerMsg="<xsl:apply-templates select="string[@code='MSG_INTEGER']/translation"><xsl:with-param name="lang"><xsl:value-of select="$language"/></xsl:with-param></xsl:apply-templates>";
        var realMsg="<xsl:apply-templates select="string[@code='MSG_REAL']/translation"><xsl:with-param name="lang"><xsl:value-of select="$language"/></xsl:with-param></xsl:apply-templates>";
        var currencyMsg="<xsl:apply-templates select="string[@code='MSG_CURRENCY']/translation"><xsl:with-param name="lang"><xsl:value-of select="$language"/></xsl:with-param></xsl:apply-templates>";
        var dateSyntaxMsg="<xsl:apply-templates select="string[@code='MSG_DATE_SYNTAX']/translation"><xsl:with-param name="lang"><xsl:value-of select="$language"/></xsl:with-param></xsl:apply-templates>";
        var dateNotValidYearMsg="<xsl:apply-templates select="string[@code='MSG_DATE_NOT_VALID_YEAR']/translation"><xsl:with-param name="lang"><xsl:value-of select="$language"/></xsl:with-param></xsl:apply-templates>";
        var dateNotValidYearAndMsg="<xsl:apply-templates select="string[@code='MSG_DATE_NOT_VALID_YEAR_AND_MSG']/translation"><xsl:with-param name="lang"><xsl:value-of select="$language"/></xsl:with-param></xsl:apply-templates>";
        var dateNotValidMsg="<xsl:apply-templates select="string[@code='MSG_DATE_NOT_VALID']/translation"><xsl:with-param name="lang"><xsl:value-of select="$language"/></xsl:with-param></xsl:apply-templates>";
	    var MSG_Num_Conto="<xsl:apply-templates select="string[@code='MSG_Num_Conto']/translation"><xsl:with-param name="lang"><xsl:value-of select="$language"/></xsl:with-param></xsl:apply-templates>";
        var MSG_Controllo_Soluzione="<xsl:apply-templates select="string[@code='MSG_Controllo_Soluzione']/translation"><xsl:with-param name="lang"><xsl:value-of select="$language"/></xsl:with-param></xsl:apply-templates>";
        var MSG_Caratteri_Non_Validi="<xsl:apply-templates select="string[@code='MSG_Caratteri_Non_Validi']/translation"><xsl:with-param name="lang"><xsl:value-of select="$language"/></xsl:with-param></xsl:apply-templates>";
        var MSG_Lunghezza_Codice_Fiscale="<xsl:apply-templates select="string[@code='MSG_Lunghezza_Codice_Fiscale']/translation"><xsl:with-param name="lang"><xsl:value-of select="$language"/></xsl:with-param></xsl:apply-templates>";
        var MSG_Codice_Fiscale_Caratt_Non_Valido_Head="<xsl:apply-templates select="string[@code='MSG_Codice_Fiscale_Caratt_Non_Valido_Head']/translation"><xsl:with-param name="lang"><xsl:value-of select="$language"/></xsl:with-param></xsl:apply-templates>";
        var MSG_Codice_Fiscale_Caratt_Non_Valido_Tail="<xsl:apply-templates select="string[@code='MSG_Codice_Fiscale_Caratt_Non_Valido_Tail']/translation"><xsl:with-param name="lang"><xsl:value-of select="$language"/></xsl:with-param></xsl:apply-templates>";
        var MSG_Err_CodiceControllo_Cod_Fisc="<xsl:apply-templates select="string[@code='MSG_Err_CodiceControllo_Cod_Fisc']/translation"><xsl:with-param name="lang"><xsl:value-of select="$language"/></xsl:with-param></xsl:apply-templates>";
        var MSG_Err_Lungh_Partita_Iva="<xsl:apply-templates select="string[@code='MSG_Err_Lungh_Partita_Iva']/translation"><xsl:with-param name="lang"><xsl:value-of select="$language"/></xsl:with-param></xsl:apply-templates>";
        var MSG_Err_Carattere_Partita_Iva_Head="<xsl:apply-templates select="string[@code='MSG_Err_Carattere_Partita_Iva_Head']/translation"><xsl:with-param name="lang"><xsl:value-of select="$language"/></xsl:with-param></xsl:apply-templates>";
        var MSG_Err_Carattere_Partita_Iva_Tail="<xsl:apply-templates select="string[@code='MSG_Err_Carattere_Partita_Iva_Tail']/translation"><xsl:with-param name="lang"><xsl:value-of select="$language"/></xsl:with-param></xsl:apply-templates>";
        var MSG_Err_CodiceControllo_Partita_Iva="<xsl:apply-templates select="string[@code='MSG_Err_CodiceControllo_Partita_Iva']/translation"><xsl:with-param name="lang"><xsl:value-of select="$language"/></xsl:with-param></xsl:apply-templates>";
        var MSG_Err_checkCFPIVA="<xsl:apply-templates select="string[@code='MSG_Err_checkCFPIVA']/translation"><xsl:with-param name="lang"><xsl:value-of select="$language"/></xsl:with-param></xsl:apply-templates>";
        var MSG_Err_checkABICAB="<xsl:apply-templates select="string[@code='MSG_Err_checkABICAB']/translation"><xsl:with-param name="lang"><xsl:value-of select="$language"/></xsl:with-param></xsl:apply-templates>";
        var MSG_Err_checkBIC="<xsl:apply-templates select="string[@code='MSG_Err_checkBIC']/translation"><xsl:with-param name="lang"><xsl:value-of select="$language"/></xsl:with-param></xsl:apply-templates>";
        var MSG_Err_Carattere_AbiCab_Head="<xsl:apply-templates select="string[@code='MSG_Err_Carattere_AbiCab_Head']/translation"><xsl:with-param name="lang"><xsl:value-of select="$language"/></xsl:with-param></xsl:apply-templates>";
        var MSG_Err_Carattere_AbiCab_Tail="<xsl:apply-templates select="string[@code='MSG_Err_Carattere_AbiCab_Tail']/translation"><xsl:with-param name="lang"><xsl:value-of select="$language"/></xsl:with-param></xsl:apply-templates>";
        var MSG_Alert_LunghIban="<xsl:apply-templates select="string[@code='MSG_Alert_LunghIban']/translation"><xsl:with-param name="lang"><xsl:value-of select="$language"/></xsl:with-param></xsl:apply-templates>";
        var MSG_Alert_checkIban_2="<xsl:apply-templates select="string[@code='MSG_Alert_checkIban_2']/translation"><xsl:with-param name="lang"><xsl:value-of select="$language"/></xsl:with-param></xsl:apply-templates>";
        var MSG_warnDate_Head="<xsl:apply-templates select="string[@code='MSG_warnDate_Head']/translation"><xsl:with-param name="lang"><xsl:value-of select="$language"/></xsl:with-param></xsl:apply-templates>";
        var MSG_warnDate_Tail="<xsl:apply-templates select="string[@code='MSG_warnDate_Tail']/translation"><xsl:with-param name="lang"><xsl:value-of select="$language"/></xsl:with-param></xsl:apply-templates>";
        var MSG_Alert_chekCorrect_Date_1="<xsl:apply-templates select="string[@code='MSG_Alert_chekCorrect_Date_1']/translation"><xsl:with-param name="lang"><xsl:value-of select="$language"/></xsl:with-param></xsl:apply-templates>";
        var MSG_Alert_chekCorrect_Date_2="<xsl:apply-templates select="string[@code='MSG_Alert_chekCorrect_Date_2']/translation"><xsl:with-param name="lang"><xsl:value-of select="$language"/></xsl:with-param></xsl:apply-templates>";
        var MSG_Alert_chekCorrect_Date_3="<xsl:apply-templates select="string[@code='MSG_Alert_chekCorrect_Date_3']/translation"><xsl:with-param name="lang"><xsl:value-of select="$language"/></xsl:with-param></xsl:apply-templates>";
        var MSG_Alert_chekCorrect_Date_4="<xsl:apply-templates select="string[@code='MSG_Alert_chekCorrect_Date_4']/translation"><xsl:with-param name="lang"><xsl:value-of select="$language"/></xsl:with-param></xsl:apply-templates>";
        var MSG_Alert_chekCorrect_Date_5="<xsl:apply-templates select="string[@code='MSG_Alert_chekCorrect_Date_5']/translation"><xsl:with-param name="lang"><xsl:value-of select="$language"/></xsl:with-param></xsl:apply-templates>";
        var MSG_Alert_chekCorrect_Date_6="<xsl:apply-templates select="string[@code='MSG_Alert_chekCorrect_Date_6']/translation"><xsl:with-param name="lang"><xsl:value-of select="$language"/></xsl:with-param></xsl:apply-templates>";
        var MSG_Alert_chekCorrect_Date_7="<xsl:apply-templates select="string[@code='MSG_Alert_chekCorrect_Date_7']/translation"><xsl:with-param name="lang"><xsl:value-of select="$language"/></xsl:with-param></xsl:apply-templates>";
        var MSG_Alert_chekCorrect_Date_8="<xsl:apply-templates select="string[@code='MSG_Alert_chekCorrect_Date_8']/translation"><xsl:with-param name="lang"><xsl:value-of select="$language"/></xsl:with-param></xsl:apply-templates>";
        
        var MSG_Err_FormatoImportoCorretto_Head="<xsl:apply-templates select="string[@code='MSG_Err_FormatoImportoCorretto_Head']/translation"><xsl:with-param name="lang"><xsl:value-of select="$language"/></xsl:with-param></xsl:apply-templates>";
        var MSG_Err_FormatoImportoCorretto_Tail="<xsl:apply-templates select="string[@code='MSG_Err_FormatoImportoCorretto_Tail']/translation"><xsl:with-param name="lang"><xsl:value-of select="$language"/></xsl:with-param></xsl:apply-templates>";
        var MSG_Err_FormatoImportoCorretto_1="<xsl:apply-templates select="string[@code='MSG_Err_FormatoImportoCorretto_1']/translation"><xsl:with-param name="lang"><xsl:value-of select="$language"/></xsl:with-param></xsl:apply-templates>";
        var MSG_Err_FormatoImportoCorretto_2="<xsl:apply-templates select="string[@code='MSG_Err_FormatoImportoCorretto_2']/translation"><xsl:with-param name="lang"><xsl:value-of select="$language"/></xsl:with-param></xsl:apply-templates>";
        var MSG_Err_FormatoImportoCorretto_3="<xsl:apply-templates select="string[@code='MSG_Err_FormatoImportoCorretto_3']/translation"><xsl:with-param name="lang"><xsl:value-of select="$language"/></xsl:with-param></xsl:apply-templates>";
        var MSG_Err_FormatoImportoCorretto_4="<xsl:apply-templates select="string[@code='MSG_Err_FormatoImportoCorretto_4']/translation"><xsl:with-param name="lang"><xsl:value-of select="$language"/></xsl:with-param></xsl:apply-templates>";
        var MSG_Err_FormatoImportoCorretto_5="<xsl:apply-templates select="string[@code='MSG_Err_FormatoImportoCorretto_5']/translation"><xsl:with-param name="lang"><xsl:value-of select="$language"/></xsl:with-param></xsl:apply-templates>";
        var MSG_Err_FormatoImportoCorretto_6="<xsl:apply-templates select="string[@code='MSG_Err_FormatoImportoCorretto_6']/translation"><xsl:with-param name="lang"><xsl:value-of select="$language"/></xsl:with-param></xsl:apply-templates>";
        var MSG_Err_Lungh_AbiCabWithName="<xsl:apply-templates select="string[@code='MSG_Err_Lungh_AbiCabWithName']/translation"><xsl:with-param name="lang"><xsl:value-of select="$language"/></xsl:with-param></xsl:apply-templates>";
        var MSG_Err_Carattere_AbiCabWithName_Head="<xsl:apply-templates select="string[@code='MSG_Err_Carattere_AbiCabWithName_Head']/translation"><xsl:with-param name="lang"><xsl:value-of select="$language"/></xsl:with-param></xsl:apply-templates>";
        var MSG_Err_Carattere_AbiCabWithName_Tail="<xsl:apply-templates select="string[@code='MSG_Err_Carattere_AbiCabWithName_Tail']/translation"><xsl:with-param name="lang"><xsl:value-of select="$language"/></xsl:with-param></xsl:apply-templates>";
        var MSG_Err_Caratter_Alfanum_Head="<xsl:apply-templates select="string[@code='MSG_Err_Caratter_Alfanum_Head']/translation"><xsl:with-param name="lang"><xsl:value-of select="$language"/></xsl:with-param></xsl:apply-templates>";
        var MSG_Err_Caratter_Alfanum_Tail="<xsl:apply-templates select="string[@code='MSG_Err_Caratter_Alfanum_Tail']/translation"><xsl:with-param name="lang"><xsl:value-of select="$language"/></xsl:with-param></xsl:apply-templates>";
        var MSG_Err_Caratter_Num_Tail="<xsl:apply-templates select="string[@code='MSG_Err_Caratter_Num_Tail']/translation"><xsl:with-param name="lang"><xsl:value-of select="$language"/></xsl:with-param></xsl:apply-templates>";
		var MSG_Confirm_checkIban="<xsl:apply-templates select="string[@code='MSG_Confirm_checkIban']/translation"><xsl:with-param name="lang"><xsl:value-of select="$language"/></xsl:with-param></xsl:apply-templates>";
		var MSG_Confirm_checkCountryAndIban="<xsl:apply-templates select="string[@code='MSG_Confirm_checkCountryAndIban']/translation"><xsl:with-param name="lang"><xsl:value-of select="$language"/></xsl:with-param></xsl:apply-templates>";

		var MSG_number_1_ITEC="<xsl:apply-templates select="string[@code='MSG_NUMBER_1_ITEC']/translation"><xsl:with-param name="lang"><xsl:value-of select="$language"/></xsl:with-param></xsl:apply-templates>";
		var MSG_number_2_ITEC="<xsl:apply-templates select="string[@code='MSG_NUMBER_2_ITEC']/translation"><xsl:with-param name="lang"><xsl:value-of select="$language"/></xsl:with-param></xsl:apply-templates>";
		var MSG_number_3_ITEC="<xsl:apply-templates select="string[@code='MSG_NUMBER_3_ITEC']/translation"><xsl:with-param name="lang"><xsl:value-of select="$language"/></xsl:with-param></xsl:apply-templates>";
		var MSG_number_4_ITEC="<xsl:apply-templates select="string[@code='MSG_NUMBER_4_ITEC']/translation"><xsl:with-param name="lang"><xsl:value-of select="$language"/></xsl:with-param></xsl:apply-templates>";
		var MSG_number_5_ITEC="<xsl:apply-templates select="string[@code='MSG_NUMBER_5_ITEC']/translation"><xsl:with-param name="lang"><xsl:value-of select="$language"/></xsl:with-param></xsl:apply-templates>";
		var MSG_number_6_ITEC="<xsl:apply-templates select="string[@code='MSG_NUMBER_6_ITEC']/translation"><xsl:with-param name="lang"><xsl:value-of select="$language"/></xsl:with-param></xsl:apply-templates>";
		var MSG_number_7_ITEC="<xsl:apply-templates select="string[@code='MSG_NUMBER_7_ITEC']/translation"><xsl:with-param name="lang"><xsl:value-of select="$language"/></xsl:with-param></xsl:apply-templates>";
		var MSG_number_8_ITEC="<xsl:apply-templates select="string[@code='MSG_NUMBER_8_ITEC']/translation"><xsl:with-param name="lang"><xsl:value-of select="$language"/></xsl:with-param></xsl:apply-templates>";
		var MSG_number_9_ITEC="<xsl:apply-templates select="string[@code='MSG_NUMBER_9_ITEC']/translation"><xsl:with-param name="lang"><xsl:value-of select="$language"/></xsl:with-param></xsl:apply-templates>";

		<![CDATA[
		
		// Minimum year allowed
        var minYear = 1900;
        // MaximuM year allowed
        var maxYear = 2050;
        
        var curr_date = new Date();
		var curr_year = curr_date.getFullYear();
		curr_year = curr_year + '';
		curr_year = curr_year.substring(2, 4);
		curr_year = parseInt(curr_year);
		//alert('curr_year: '+curr_year);
        // With a two char year, if yy>yearLimit => 19yy, else 20yy
        var yearLimit = curr_year + 5;
		//alert('yearLimit: '+yearLimit);
		
        // Separators allowed for the date check
        separators = new Array("/","\\","-");

        // Variable useful to know if a form is Ok.
        var isOkForm;

        // Variable that stores the name of the field checked
        var fieldCheckedName;

		var emptyFieldMessage = "";
		
		// ==========================================
		// ====== END OF GLOBAL VARIABLES ===========
		// ==========================================

        /**
        * Check the data passed.
        * If the value is ok, return it eventually "normalized"
        * in a correct form
        *
        * Otherwise, this function shows an alert with an error message, and returns
        * null.
        *
        * type = {STRING | INTEGER | REAL | CURRENCY | DATE | CF | PIVA | CF_PIVA | ABI_CAB }
        * mandatory = {TRUE |FALSE}
        *
        * Default values:
        *
        *   mandatory = FALSE
        *   type      = STRING
        *   minlength = 0
        *   maxlength = 0
        *
        * Notes :The bound check (with the "minlength" and "maxlength" parameters) is done
        * only if the type is not "DATE".
        *
        */
        
        /*
			<FUNZIONE label="checkFieldValue">
			<AUTORE></AUTORE>
			<COMMENTO>Descrizione.....</COMMENTO>
			<PARAMETRO label="value" DESCRIZIONE=""/>
			<PARAMETRO label="mandatory" DESCRIZIONE=""/>
			<PARAMETRO label="type" DESCRIZIONE=""/>
			<PARAMETRO label="minlength" DESCRIZIONE=""/>
			<PARAMETRO label="maxlength" DESCRIZIONE=""/>
			</FUNZIONE>
		*/
        
        function checkFieldValue(value, mandatory, type, minlength, maxlength)
        {
            // Sets the default values
            if (mandatory == '')
                mandatory ='FALSE';
            if (type == '')
                type = 'STRING';
            if (minlength == '')
                minlength = 0;
            if (maxlength == '')
                maxlength = 0;
            // Check if the value exist
            if ((mandatory == 'TRUE')&&
                (isEmpty(value)) )
            {
                emptyFieldMessage = emptyFieldMessage + "\n" + fieldCheckedName+" : "+mandatoryFieldMsg
                return null;
            }
            if (isEmpty(value))
            {
                return "";
            }

            switch (type)
            {
            	case "ACCOUNT":
            	    // The field is an account number
            	    var account = checkAccountFormat(value, minlength, maxlength)
                    return account;
                    break;
                case "STRING":
                    // The field is a string field.
                    if (!checkBounds(value,minlength,maxlength))
                        return null;
                    break;

                case "INTEGER":
                    // The field is an integer  field.
                    if ( !checkBounds(value,minlength,maxlength) ||
                         !checkInteger(value))
                        return null;
                    break;

                case "REAL":
                    // The field is a real field.
                    if ( !checkBounds(value,minlength,maxlength) ||
                         !checkReal(value))
                        return null;
                    break;

                case "CURRENCY":
                    // The field is a currency field.
                    if ( !checkBounds(value,minlength,maxlength) ||
                         !checkCurrency(value))
                        return null;
                    break;

                case "DATE":
                    // The field is a date field.
                    var date = checkDate(value,minYear,maxYear,yearLimit)
                    return date;
                    break;
                case "CF":
                    // The field is a codice fiscale field.
                    var cfup = checkCF(value)
                    return cfup; //UPPERCASE
                    break;
                case "PIVA":
                    // The field is a partita iva field.
                    if ( !checkPIVA(value) )
                        return null;
                    break;
                case "CF_PIVA":
                    // The field is a codice fiscale or a partita iva field (depending on size).
                    var cfpivaup = checkCFPIVA(value)
                    return cfpivaup; //UPPERCASE
                    break;
                case "ABI_CAB":
                    // The field is a code ABI or CAB.
                    var abicab = checkABICAB(value)
                    return abicab;
                    break;
                case "BIC":
                    // The field is a bic field.
                    var bic = checkBIC(value)
                    return bic;
                    break;
                 //Aggiungo caso IBAN
                case "IBAN":
                    // The field is a bic field.
                    //var iban = checkIBAN(value)
                    return value;
                    break;
                default:
                    return null;
            }
            // If all is ok...
            return value;
        }        
        
        /*
			<FUNZIONE label="checkValue">
			<AUTORE></AUTORE>
			<COMMENTO>
				Check the value in the passed field, in the passed form.
				if the form parameter is null or empty, the default value is forms[0]. For the
				"mandatory", "type", "minlength", "maxlength" parameters see the checkFieldValue
				function.
				If the field value is incorrect, is cancelled by this function.
			</COMMENTO>
			<PARAMETRO label="field" DESCRIZIONE=""/>
			<PARAMETRO label="form" DESCRIZIONE=""/>
			<PARAMETRO label="mandatory" DESCRIZIONE=""/>
			<PARAMETRO label="type" DESCRIZIONE=""/>
			<PARAMETRO label="minlength" DESCRIZIONE=""/>
			<PARAMETRO label="maxlength" DESCRIZIONE=""/>
			<PARAMETRO label="messageString" DESCRIZIONE=""/>			
			</FUNZIONE>
		*/
        
        function checkValue(field, form, mandatory, type, minlength, maxlength, messageString)
        {
            if (form == "")
            {
                form= "forms[0]";
            }

            // Construct the field name
            if (messageString == null)
                fieldCheckedName = field;
            else
            {
                fieldCheckedName = messageString;
            }
            fieldName = "document."+form+"."+field;

            // Retrieve the field reference

            var evalform = eval("document."+form);

            value = evalform.elements[field].value;

            if (value != null)
            {
                value1 = removeNL(value);
            }
            else
            {
                value1 = value;
            }

            var returnValue = checkFieldValue(trimString(value1), trimString(mandatory),trimString(type),trimString(minlength),trimString(maxlength));
	
			if( type == 'ACCOUNT')
			{
				if(returnValue != value)
				{
					if(returnValue != null)
						evalform.elements[field].value = returnValue;
					isOkForm=null;
					return;
				}
			}

            if (returnValue == null)
            {
                // fieldRef = eval(fieldName);
                //evalform.elements[field].value="";
                isOkForm=null;
                return;
            }
            // If the value returned is different from the field value, change it.
            else if (value != returnValue)
            {
                evalform.elements[field].value = returnValue;
            }
        }        
        
        /*
			<FUNZIONE label="isEmpty">
			<AUTORE></AUTORE>
			<COMMENTO>Check if the inputStr parameter is empty or null</COMMENTO>
			<PARAMETRO label="inputStr" DESCRIZIONE=""/>						
			</FUNZIONE>
		*/
        
        function isEmpty(inputStr)
        {
            if (inputStr == null || inputStr == "")
                return true;
            return false;
        }      
        
        /*
			<FUNZIONE label="checkMin">
			<AUTORE></AUTORE>
			<COMMENTO>Check if the value length is greater than "minlength"</COMMENTO>
			<PARAMETRO label="value" DESCRIZIONE=""/>
			<PARAMETRO label="minlength" DESCRIZIONE=""/>						
			</FUNZIONE>
		*/
        
        function checkMin(value, minlength)
        {
            var length=value.length;
            if (length < minlength)
                return false;
            else return true;
        }        
        
        /*
			<FUNZIONE label="checkMax">
			<AUTORE></AUTORE>
			<COMMENTO>Check if the value length is lower than "maxlength"</COMMENTO>
			<PARAMETRO label="value" DESCRIZIONE=""/>
			<PARAMETRO label="maxlength" DESCRIZIONE=""/>						
			</FUNZIONE>
		*/
        
        function checkMax(value, maxlength)
        {
            var length=value.length;
            if (length > maxlength)
                return false;
            else return true;
        }	
	
		/*
			<FUNZIONE label="checkAccountFormat">
			<AUTORE></AUTORE>
			<COMMENTO>Check if the account number format is valid</COMMENTO>
			<PARAMETRO label="value" DESCRIZIONE=""/>
			<PARAMETRO label="minlength" DESCRIZIONE=""/>
			<PARAMETRO label="maxlength" DESCRIZIONE=""/>						
			</FUNZIONE>
		*/
		
		function checkAccountFormat(value, minlength, maxlength)
		{
			if(value.length == 0) 
				return value;
			
			// variabili utilizzate
			var msg, msg1="", msg2="", msg3;
	   	    msg = MSG_Num_Conto;
	   	    msg3 = MSG_Controllo_Soluzione;
	   	    value = value.toUpperCase();
	   	    accountLength = value.length;
	   	    var check = true;
	   	    var tipiCaratteri = MSG_Err_Caratter_Alfanum_Tail;
	   	    validi = "ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
	   	    
			try
			{
				if (minlength==10 && maxlength==10)// in alcuni casi il conto puo' essere 10 (es. euroincassi con Spagna selezionata)
		   	    {	
		   	    	tipiCaratteri = MSG_Err_Caratter_Num_Tail;
		   	    	validi = "0123456789";
		   	    }
		   	    
		   	    if (minlength!=10 && minlength!=11)// in alcuni casi il conto puo' essere 10 o 11 caratteri (es. euroincassi) altrimenti viene forzato a 12
		   	    	minlength = 12;
		   	    
		   	    if (maxlength!=10 && maxlength!=11)
		   	    	maxlength = 12;
		   	    
		   	    for(i=0; i<accountLength; i++)
	            {
	                if(validi.indexOf( value.charAt(i) ) == -1 )
	                {
	                    msg2 = MSG_Caratteri_Non_Validi;
	                    check = false;
	                    
	                    //modifica caratteri
	                    value = value.replace(value.charAt(i), "");
	                    i--;
	                    accountLength = value.length;
	                }
	            }
			   	
		   	    if(value.length < minlength) //modifica lunghezza - aggiunge gli 0
		   	    {
			   	    msg1 = minCharMsg + " " + minlength + " " + tipiCaratteri;
			   	    while(value.length < minlength)  
			   	    	value = "0" + value;
		   	    	check = false;
		   	    }
		   	    else if(value.length > maxlength) // modifica lunghezza - elimina i caratteri di troppo
		   	    {
		   	    	msg1 = maxCharMsg + " " + maxlength + " " + tipiCaratteri;
		   	    	if (value.length > maxlength)
		   	    		value = value.substr(0, maxlength);
		   	    	check = false;
		   	    }
		   	    
		   	    if(!check)
		   	    {
		   	    	alert(msg+msg1+msg2+msg3);
		   	    }
		   	    
		   	    return value;
			 }
			catch(e)
			{
				alert("Il campo con valore " + value + " ha generato il seguente errore: " + e.message)
				return value;
			}
		}      
        
        /*
			<FUNZIONE label="checkBounds">
			<AUTORE></AUTORE>
			<COMMENTO>
				Check if the value length is between than "maxlength"
				and the "minlength" value.
				if maxlength=0, doesn't make any control (no check) and return true.
				if minlength == maxlength,ok (the field MUST have n characters).
				if minlength min maxlength, show an alert
				Show an alert and returns null if the check fails.
			</COMMENTO>
			<PARAMETRO label="value" DESCRIZIONE=""/>
			<PARAMETRO label="minlength" DESCRIZIONE=""/>
			<PARAMETRO label="maxlength" DESCRIZIONE=""/>						
			</FUNZIONE>
		*/        
        
        function checkBounds(value, minlength, maxlength)
        {
            if (minlength>maxlength)
            {
                alert(fieldCheckedName+" : "+invalidBoundsMessage);
                return false;
            }
            if (maxlength==0)
                return true;
            if (!checkMin(value, minlength))
            {
                alert(fieldCheckedName+" : "+minCharMsg+ " "+ minlength+ " "+charMsg);
                return false;
            }
            if (!checkMax(value, maxlength))
            {
                alert(fieldCheckedName+" : "+maxCharMsg+ maxlength+charMsg);
                return false;
            }
            return true;
        }        
        
        /*
			<FUNZIONE label="checkString">
			<AUTORE></AUTORE>
			<COMMENTO>
				Check the value passed. Return false if the string is not correct
				In this version checkString() returns always true.
			</COMMENTO>
			<PARAMETRO label="value" DESCRIZIONE=""/>								
			</FUNZIONE>
		*/
        
        function checkString(value)
        {
            return true;
        }       
        
        /*
			<FUNZIONE label="checkInteger">
			<AUTORE></AUTORE>
			<COMMENTO>
				Check the value passed. Return false if the integer is not correct.
				A integer value is formed of digits with non mandatory sign.
				Correct integer are:  10123    +10              -567
			</COMMENTO>
			<PARAMETRO label="value" DESCRIZIONE=""/>								
			</FUNZIONE>
		*/
        
        function checkInteger(value)
        {
            input = value.toString();
            for (var i = 0; i < input.length; i++)
            {
                var inputChar = input.charAt(i);

                // Skip the sign
                if ((i == 0 && inputChar == "-") || (i == 0 && inputChar == "+"))
                {
                    continue
                }
                if (inputChar < "0" || inputChar >  "9")
                {
                    alert(fieldCheckedName+" : "+integerMsg);
                    return false;
                }
            }
            return true;
        }       
        
        /*
			<FUNZIONE label="checkReal">
			<AUTORE></AUTORE>
			<COMMENTO>
				Check the value passed. Return false if the real is not correct
				A real value is formed only by digits and one "." or ",".
				Correct real are:  3.14    123123    0,12323123       
				Uncorrect real are:  pippo   24352345.    ,13413434   .1234.,123
			</COMMENTO>
			<PARAMETRO label="value" DESCRIZIONE=""/>								
			</FUNZIONE>
		*/
        
        function checkReal(value)
        {
            decimal = false;
            input = value.toString();
            for (var i = 0; i < input.length; i++)
            {
                var inputChar = input.charAt(i);

                // Skip the sign
                if ((i == 0 && inputChar == "-") || (i == 0 && inputChar == "+"))
                {
                    continue
                }
                remainingLength = input.length - i -1;
                // Skip the FIRST '.' or ','
                if ( (inputChar == "." && !decimal && (remainingLength!=0)) || (inputChar == "," && !decimal && (remainingLength!=0)))
                {
                    decimal = true;
                    continue
                }
                if (inputChar < "0" || inputChar >  "9")
                {
                    alert(fieldCheckedName+" : "+realMsg)
                    return false
                }
            }
            return true;
        }      
        
        /*
			<FUNZIONE label="checkCurrency">
			<AUTORE></AUTORE>
			<COMMENTO>
				Check the value passed. Return false if the currency is not correct
				A correct currency value is a numeric string thah can have
				a "." every 3 digits and a ",".
        
				Correct currency are:     10000000
							1.000.000
							123452,123
							1.234.234,23
							1.000
							1.000,12
        
				Uncorrect currency are:   pippo
							24352345.
							1,23,2
							1.000.000,2.3
							100000,
			</COMMENTO>
			<PARAMETRO label="value" DESCRIZIONE=""/>								
			</FUNZIONE>
		*/
        
        function checkCurrency(value)
        {
            decimal = false;
            input = value.toString();
            for (var i = 0; i < input.length; i++)
            {
                var inputChar = input.charAt(i);

                /* Skip the '.' character if:
                    1) the i+4 character is '.' or ','
                    2) the length of the remaining string is 3
                       (2.00 is not valid, but 2.000 is ok)
                */
                remainingLength = input.length - i -1;
                                //1.000.0000
                if (inputChar =="." && !decimal && remainingLength == 3)
                    continue;
                else if (remainingLength > 3)
                    if ((inputChar =="." && !decimal && input.charAt(i+4)==".") ||
                        (inputChar =="." && !decimal && input.charAt(i+4)==","))
                        continue

                // Skip the FIRST '.' or ','
                if (inputChar == "," && !decimal && (remainingLength!=0) )
                {
             if (remainingLength==2)
			{
				decimal = true;
				continue;
			}
			else
			{
				alert(fieldCheckedName+" : "+currencyMsg);
				return false;
			}
                }
                if (inputChar < "0" || inputChar >  "9")
                {
                    alert(fieldCheckedName+" : "+currencyMsg)
                    return false;
                }
            }
            return true;
        }

	/**
	Check the value passed. Return null if the date is not correct, else
	return the date in the form gg/mm/aaaa.
	
	This method parse all data in the format:
	                   gg/mm/aaaa
	                   gg/mm/aa
	                   gg-mm-aaaa
	                   gg-mm-aa
	
	 Every 4 digit values are valid year.
	 The year with 2 digits are converted with this rule:
	   if yy > yearLimit => 19yy
	   otherwise, 20yy
	
	*/
	
	/*
		<FUNZIONE label="checkDate">
		<AUTORE></AUTORE>
		<COMMENTO>
			Check the value passed. Return null if the date is not correct, else
			return the date in the form gg/mm/aaaa.
	
			This method parse all data in the format:
							gg/mm/aaaa
							gg/mm/aa
							gg-mm-aaaa
							gg-mm-aa
	
			Every 4 digit values are valid year.
			The year with 2 digits are converted with this rule:
				if yy > yearLimit => 19yy
				otherwise, 20yy		
		</COMMENTO>
		<PARAMETRO label="value" DESCRIZIONE=""/>
		<PARAMETRO label="minYear" DESCRIZIONE=""/>
		<PARAMETRO label="maxYear" DESCRIZIONE=""/>
		<PARAMETRO label="yearLimit" DESCRIZIONE=""/>								
		</FUNZIONE>
	*/
	
	function checkDate(value,minYear,maxYear,yearLimit)
	{
		// Controls the validity of a date (gg/mm/aaaa)
		isOk=false;
		sintax_error=false;
		msg="";

		// if the date passed is empty, return it
		if (!value)
		{
			return value;
		}
		var value = checkSeparator(trimString(value));
      // This block controls only if there are two separators characters
		s1=value.indexOf("/");
		// s1 and s2 are the separator positions
		if (s1!=-1)
		{
			// Retrive the position of the next separator
			s2=(s1+1)+(value.substring(s1+1)+1).indexOf("/");
			if (s2==-1 || s2==s1) sintax_error=true;
		}
		else sintax_error=true;
      
		if (!sintax_error)
		{
			sg_dd=value.substring(0,s1);
			sg_mm=value.substring(s1+1,s2);
			sg_yyyy=value.substring(s2+1);
			var sentinel;
			var sentinelYear;
			sentinelDay=sg_dd.substring(0,1);
			if(sentinelDay=='0') sg_dd=sg_dd.substring(1,sg_dd.length);
			dd=parseInt(sg_dd);
			sentinelMonth=sg_mm.substring(0,1);
			if(sentinelMonth=='0') sg_mm=sg_mm.substring(1,sg_mm.length);
			sentinelYear=sg_yyyy.substring(0,1);
			if(sentinelYear=='0') sg_yyyy=sg_yyyy.substring(1,sg_yyyy.length);
			mm=parseInt(sg_mm);
			yyyy=parseInt(sg_yyyy);
			yearDigitError=false;

			if ((""+dd)!=sg_dd || (""+mm)!=sg_mm || (""+yyyy)!=sg_yyyy || isNaN(dd)||isNaN(mm)||isNaN(yyyy) || sg_yyyy.length != 4 || dd > 31 || mm > 12)
			{
			   sintax_error=true;
			}
			else 
			{
				if (mm==2)
				{
					if ( dd>28 || 1 > dd)
					{
					// If the day is 29
						if(dd==29)
						{
							if(yyyy%4==0)
							{
								if(yyyy%400==0)
								{
									isOk=true;
								}
								else
								{
									if(yyyy%100!=0) isOk=true;
								}
							}
							else
							{
								isOk=false;
							}
						}
						// Else error
						else
						{
							isOk=false;
						}
					}
					else isOk=true;
				}
				else if ((mm==4)||(mm==6)||(mm==9)||(mm==11))
				{
					if( dd>30 || 1 > dd ) isOk=false;
					else isOk=true;
				}
				else 
				{
				   if( dd>31 || 1 > dd ) isOk=false;
					else isOk=true;
				}

				if (isOk)
				{
              
					// Add the "0" string if the day is of one digit
					if ((dd+"").length==1)	dd = "0"+dd;

					if (mm > 12 || 1 > mm || dd>31 || 1 > dd) isOk=false;
					else isOk=true;

					// Add the "0" string if the month is of one digit
					if ((mm+"").length==1)	mm = "0"+mm;

					valueApp = dd+"/"+mm+"/";


					if  (sg_yyyy.length==4)
					{
						if ((yyyy<minYear)||(yyyy>maxYear))
						{
							isOk=false;
							msg = dateNotValidYearMsg+minYear+dateNotValidYearAndMsg+maxYear;
						}
						else	isOk=true;
					}
					else if (sg_yyyy.length==2 && sentinelYear=='0')
					   {
					     if (yyyy > yearLimit)
								sg_yyyy="19"+yyyy;
							else    
								sg_yyyy="20"+yyyy;
					   }
						
					else
						
						if ((sg_yyyy.length==2)|| (sg_yyyy.length==1 && (sentinelYear=='0')))
						{
								if (yyyy > yearLimit)
									if (sentinelYear=='0')
										sg_yyyy="190"+yyyy;
									else
										sg_yyyy="19"+yyyy;
								else    
									if (sentinelYear=='0')
										sg_yyyy="200"+yyyy;
									else
										sg_yyyy="20"+yyyy;
							// dateWithoutYear=value.substring(0,value.length-2);
							// value = dateWithoutYear + sg_yyyy;
						}
						else
						{
							yearDigitError=true;
							msg="";
						}
					// The result value...
					value = valueApp + sg_yyyy;
				}
			}
		}
		else
		{
			alert(fieldCheckedName+" : "+dateSyntaxMsg);
			return null;
		}
		if ((!isOk)||(yearDigitError))
		{
			if (msg == "")
			alert(fieldCheckedName+" : "+dateNotValidMsg);
			else alert(fieldCheckedName+" : "+msg);
			return null;
		}
		else
		return value;
		
	}        
        
        /*
			<FUNZIONE label="checkSeparator">
			<AUTORE></AUTORE>
			<COMMENTO>
				This function substitute all the separators (see
				the declaration af the "separators" array) with the separator "/".
			</COMMENTO>
			<PARAMETRO label="value" DESCRIZIONE=""/>											
			</FUNZIONE>
		*/
        
        function checkSeparator(value)
        {
            var position = -1;
            for (var i = 0; i < separators.length; i++)
            {
                // Skip the '/' separator to avoid infinite loop.
                if  (separators[i] == '/')
                    continue;
                s1=value.indexOf(separators[i]);
                while (s1 != -1)
                {
                    firstPart=value.substring(0,s1);
                    lastPart=value.substring(s1+1,value.length);
                    value = firstPart +"/"+lastPart;
                    s1=value.indexOf(separators[i]);
                }
            }
            return value;
        }        
        
        /*
			<FUNZIONE label="trimString">
			<AUTORE></AUTORE>
			<COMMENTO>
				This function clear all white spaces and special character from the string
				esiste una funzione identica in strings.js (trim(str))
			</COMMENTO>
			<PARAMETRO label="str" DESCRIZIONE=""/>											
			</FUNZIONE>
		*/
        
        function trimString(str)
        {
            // Remove leading spaces and carriage returns
			while ((str.substring(0,1) == ' ') || (str.substring(0,1) == '\n') || (str.substring(0,1) == '\r'))
			{
				str = str.substring(1,str.length);
			}
			
			// Remove trailing spaces and carriage returns
			while ((str.substring(str.length-1,str.length) == ' ') || (str.substring(str.length-1,str.length) == '\n') || (str.substring(str.length-1,str.length) == '\r'))
			{
				str = str.substring(0,str.length-1);
			}
			return str;
        }		
		
		/*
			<FUNZIONE label="checkAll">
			<AUTORE></AUTORE>
			<COMMENTO>
				This function check all white field on the form passed
			</COMMENTO>
			<PARAMETRO label="formName" DESCRIZIONE=""/>											
			</FUNZIONE>
		*/		
		
		function checkAll(formName)
		{
			emptyFieldMessage=""
			isOkForm=true;
			if (formName == "")
				formName= "forms[0]";

			completeFormName="document.";
			completeFormName+=formName;
			formRef=eval(completeFormName);
			var i = 0;
			
			for (i=0; i < formRef.elements.length;i++)
			{
				nameObj =formRef.elements[i].name;
				var func = formRef.elements[i].onchange;
				if (func != null)
				{
					stringa = func.toString();
					res = stringa.indexOf('checkValue');
					if (res != -1)
					{
						endFunc = stringa.indexOf(';',res);
						if (endFunc > res)
						{
							callFunc = stringa.substring(res,endFunc);
							eval(callFunc);
						}
						else
							func();
					}

					res = stringa.indexOf('warnDeltaDate');

					var check = false;
					if (res != -1)
					{
						
						endFunc = stringa.indexOf(';',res);
						if (endFunc > res)
						{
							callFunc = stringa.substring(res,endFunc);
							check = eval(callFunc);
							if(!check)
								return false;
						}
					}
				}
			}
			if (emptyFieldMessage!="")
				alert(emptyFieldMessage)
			// If one field is incorrect, isOkForm (global variable) is null!
			return isOkForm;
		}       
        
        /*
			<FUNZIONE label="checkForm">
			<AUTORE></AUTORE>
			<COMMENTO>
				This function check all white field on the form passed and
				execute the submit if all the fields are ok
			</COMMENTO>
			<PARAMETRO label="formName" DESCRIZIONE=""/>											
			</FUNZIONE>
		*/
         
        function checkForm(formName)
        {


            /*if (!multipleSubmit())
            return false;*/


            if (trimString(formName) == "")
            {
                formName = "forms[0]";
            }
            completeFormName="document.";
            completeFormName+=formName;
            formRef=eval(completeFormName);

            if (formRef==null)
            {
                if (!firstSubmit())
                    return false;
                return true;
            }
            else if ( checkAll(formName) )
            {
                    if (!firstSubmit())
                    {
                        return false;
                    }
                	else return true;
            }
            else
            {
            	return false;
            }
        }        
             
        /*
			<FUNZIONE label="removeNL">
			<AUTORE></AUTORE>
			<COMMENTO>
				Remove NewLine, CarriageReturn and Tab characters from a String
				s  string to be processed returns new string
			</COMMENTO>
			<PARAMETRO label="s" DESCRIZIONE=""/>											
			</FUNZIONE>
		*/     
             
        function removeNL(s)
        {
            r = "";
            for (i=0; i < s.length; i++)
            {
                if (s.charAt(i) != '\n' &&
                        s.charAt(i) != '\r' &&
                        s.charAt(i) != '\t')
                {
                      r += s.charAt(i);
                    }
                    else
                    {
                        r += " ";
                     }
            }
            return r;
        }

        /*
        ***** submit_count e una variabile globale per il controllo di un submit ripetuto erroneamemte;
        ***** DA NON CANCELLARE
        */
        var submit_count = 0;

        /*
        ***** funzione di controllo di submit ripetuti;
        ***** DA NON CANCELLARE
        */        
        
        /*
			<FUNZIONE label="firstSubmit">
			<AUTORE></AUTORE>
			<COMMENTO>Funzione di controllo di submit ripetuti.</COMMENTO>														
			</FUNZIONE>
		*/        
        
        function firstSubmit()
        {
            if (submit_count==0) {
                submit_count++;
                return true;
            }

            if (submit_count ==1) {
                alert("Richiesta già inoltrata.");
                submit_count++;
                return false;
            }
            if (submit_count > 1) {
                alert("Richiesta già inoltrata.");
                submit_count++;
                return false;
            }
        return false;
        }

/*
	<FUNZIONE label="checkCF">
	<AUTORE>Mauro Begatti</AUTORE>
	<COMMENTO>Check the value passed. Return always the uppercase.</COMMENTO>
	<PARAMETRO label="cf" DESCRIZIONE=""/>														
	</FUNZIONE>
*/


function checkCF(cf)
{
    var validi, i, s, set1, set2, setpari, setdisp;
    var msg = '';
    var isOK = true;
    var cfup = '';
    if( cf != '' )
    {
        cfup = cf.toUpperCase();
        if( cfup.length != 16 )
        {
            msg = MSG_Lunghezza_Codice_Fiscale;
            isOK = false;
        }
        else
        {
            validi = "ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
            for( i = 0; i < 16; i++ )
            {
                if( validi.indexOf( cfup.charAt(i) ) == -1 )
                {
                    msg = MSG_Codice_Fiscale_Caratt_Non_Valido_Head +
                    cfup.charAt(i) +
                    MSG_Codice_Fiscale_Caratt_Non_Valido_Tail;
                    isOK = false;
                }
            }
            if (isOK == true)
            {
                set1 = "0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ";
                set2 ="ABCDEFGHIJABCDEFGHIJKLMNOPQRSTUVWXYZ";
                setpari = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
                setdisp = "BAKPLCQDREVOSFTGUHMINJWZYX";
                s = 0;
                for( i = 1; i <= 13; i += 2 )
                   s += setpari.indexOf( set2.charAt( set1.indexOf( cfup.charAt(i) )));
                for ( i = 0; i <= 14; i += 2 )
                   s += setdisp.indexOf( set2.charAt( set1.indexOf( cfup.charAt(i) )));
                if( s%26 != cfup.charCodeAt(15)-'A'.charCodeAt(0) )
                {
                    msg = MSG_Err_CodiceControllo_Cod_Fisc;
                    isOK = false;
                }
            }
        }
     }
     if (isOK == true)
     {
        return cfup;
     }
     else
     {
        alert(fieldCheckedName+" : "+msg);
        return null;
     }
}
 
/*
	<FUNZIONE label="checkPIVA">
	<AUTORE>Mauro Begatti</AUTORE>
	<COMMENTO>Check the value passed. Return null if the partita iva is not correct.</COMMENTO>
	<PARAMETRO label="pi" DESCRIZIONE=""/>														
	</FUNZIONE>
*/ 
 
function checkPIVA(pi)
{
    var isOK = true;
    var msg = '';
    if( pi != '' )
    {
        if( pi.length != 11 )
        {
           msg = MSG_Err_Lungh_Partita_Iva;
           isOK = false;

        }
        else
        {
           if(pi=="00000000000"){
			   msg = MSG_Err_CodiceControllo_Partita_Iva;
	           isOK = false;
		   }
		   validi = "0123456789";
           for( i = 0; i < 11; i++ )
           {
	           if( validi.indexOf( pi.charAt(i) ) == -1 )
	           {
	            msg = MSG_Err_Carattere_Partita_Iva_Head +
	                pi.charAt(i) + MSG_Err_Carattere_Partita_Iva_Tail;
	            isOK = false;
	           }
           }
           if (isOK == true)
           {
               s = 0;
               for( i = 0; i <= 9; i += 2 )
				   s += pi.charCodeAt(i) - '0'.charCodeAt(0);
               for( i = 1; i <= 9; i += 2 )
               {
	               c = 2*( pi.charCodeAt(i) - '0'.charCodeAt(0) );
	               if( c > 9 )  c = c - 9;
	               s += c;
               }
               if( ( 10 - s%10 )%10 != pi.charCodeAt(10) - '0'.charCodeAt(0) )
               {
	              msg = MSG_Err_CodiceControllo_Partita_Iva;
	              isOK = false;
               }
           }
       }
    }
    if (isOK == true)
    {
       return pi;
    }
    else
    {
         alert(fieldCheckedName+" : "+msg);
         return null;
    }
}

/*
	<FUNZIONE label="checkCFPIVA">
	<AUTORE>Mauro Begatti</AUTORE>
	<COMMENTO>Check the value passed. Return always the uppercase.</COMMENTO>
	<PARAMETRO label="pi" DESCRIZIONE=""/>														
	</FUNZIONE>
*/

function checkCFPIVA(cfpi)
{
    var msg = '';
    if( cfpi != '' )
    {
        if( cfpi.length == 11 )
        {
           return checkPIVA(cfpi);
        }
        else
        {
            if(  cfpi.length == 16 )
            {
                return checkCF(cfpi);
            }
            else
            {
                msg = MSG_Err_checkCFPIVA;
                alert(fieldCheckedName+" : "+msg);
                return null;
            }
        }
    }
}


/*
	<FUNZIONE label="warnValue">
	<AUTORE>Mauro Begatti</AUTORE>
	<COMMENTO>
		Check the value in the passed field, in the passed form.
		if the form parameter is null or empty, the default value is forms[0]. For the
		"mandatory", "type", "minlength", "maxlength" parameters see the Checkfieldvalue
		function.
		If the field value is incorrect, an alert is shown.
	</COMMENTO>
	<PARAMETRO label="field" DESCRIZIONE=""/>
	<PARAMETRO label="form" DESCRIZIONE=""/>
	<PARAMETRO label="mandatory" DESCRIZIONE=""/>
	<PARAMETRO label="type" DESCRIZIONE=""/>
	<PARAMETRO label="minlength" DESCRIZIONE=""/>
	<PARAMETRO label="maxlength" DESCRIZIONE=""/>
	<PARAMETRO label="messageString" DESCRIZIONE=""/>															
	</FUNZIONE>
*/

function warnValue(field, form,mandatory, type, minlength, maxlength, messageString)
{
    if (form == "")
    {
        form= "forms[0]";
    }

    // Construct the field name
    if (messageString == null)
        fieldCheckedName = field;
    else
    {
        fieldCheckedName = messageString;
    }
    fieldName = "document."+form+"."+field;

    // Retrieve the field reference

    var evalform = eval("document."+form);

    value = evalform.elements[field].value;

    if (value != null)
    {
        value1 = removeNL(value);
    }
    else
    {
        value1 = value;
    }

    var returnValue = checkFieldValue(trimString(value1), trimString(mandatory),trimString(type),trimString(minlength),trimString(maxlength));
    if (returnValue == null)
    {
        // fieldRef = eval(fieldName);
        //evalform.elements[field].value=""; do not reset
        isOkForm=null;
        return;
    }
    // If the value returned is different from the field value, change it.
    else if (value != returnValue)
    {
        evalform.elements[field].value = returnValue;
        return;
    }
} 
 
/*
	<FUNZIONE label="checkABICAB">
	<AUTORE>Mauro Begatti</AUTORE>
	<COMMENTO>Check the value passed. Return null if the value is not a code ABI or CAB.</COMMENTO>
	<PARAMETRO label="abicab" DESCRIZIONE=""/>																
	</FUNZIONE>
*/
 
function checkABICAB(abicab)
{
    var isOK = true;
    var msg = '';
    var returnValue = null;

    if( abicab != '' )
    {
        if( abicab.length > 5 )
        {
           msg = MSG_Err_checkABICAB;
           isOK = false;

        }
        else
        {
           validi = "0123456789";
           for( i = 0; i < 11; i++ )
           {
           if( validi.indexOf( abicab.charAt(i) ) == -1 )
           {
            msg = MSG_Err_Carattere_AbiCab_Head +
                abicab.charAt(i) + MSG_Err_Carattere_AbiCab_Tail;
            isOK = false;
           }
           }
           if (isOK == true)
           {
               zeri = 5 - abicab.length;
               if (zeri > 0)
               {
                   var dummy = "00000";
                   returnValue = dummy.substr(0,zeri)+abicab;
               }
               else
               {
                   returnValue = abicab;
               }
           }
       }
    }
    if (isOK == true)
    {
    	
       return returnValue;
    }
    else
    {
      alert(fieldCheckedName+" : "+msg);
      return null;
    }
}
 
/*
	<FUNZIONE label="checkBIC">
	<AUTORE>Piero Bargellini</AUTORE>
	<COMMENTO>Check the value passed. Return null if value is not a well-formed BIC code.</COMMENTO>
	<PARAMETRO label="bic" DESCRIZIONE=""/>																
	</FUNZIONE>
*/
 
function checkBIC(bic)
{
    var isOK = true;
    var msg = '';
    var returnValue = null;
	if( bic != '' )
	{
	    if( (bic.length != 8)&&(bic.length != 11))
	    {
			msg = MSG_Err_checkBIC;
			isOK = false;
	    }
	    else
	    {
			returnValue = bic;
		}
	}
	if (isOK == true)
	{
		return returnValue;
	}
	else
	{
		alert(fieldCheckedName+" : "+msg);
		return null;
	}
}

/*
	<FUNZIONE label="datiIban">
	<AUTORE></AUTORE>
	<COMMENTO></COMMENTO>
	<PARAMETRO label="id" DESCRIZIONE=""/>
	<PARAMETRO label="cod_paese" DESCRIZIONE=""/>
	<PARAMETRO label="n_car" DESCRIZIONE=""/>																	
	</FUNZIONE>
*/

function datiIban(id,cod_paese,n_car)
{
	this.id = id;
	this.cod_paese = cod_paese;
	this.n_car = n_car;
}


var arrayDatiIban = new Array();

/*
	<FUNZIONE label="ArrayforIban">
	<AUTORE></AUTORE>
	<COMMENTO>Array con dati necessari per la funzione checkIBANfromCountry()</COMMENTO>																	
	</FUNZIONE>
*/ 
 
function ArrayforIban()
{
	arrayDatiIban[8] = new datiIban(8,"AT",20);
	arrayDatiIban[9] = new datiIban(9,"BE",16);
	arrayDatiIban[275] = new datiIban(275,"CZ",24);
	arrayDatiIban[21] = new datiIban(21,"DK",18);
	arrayDatiIban[257] = new datiIban(257,"EE",20);
	arrayDatiIban[28] = new datiIban(28,"FI",18);
	arrayDatiIban[29] = new datiIban(29,"FR",27);
	arrayDatiIban[94] = new datiIban(94,"DE",22);
	arrayDatiIban[32] = new datiIban(32,"GR",27);
	arrayDatiIban[40] = new datiIban(40,"IE",22);
	arrayDatiIban[86] = new datiIban(86,"IT",27);
	arrayDatiIban[258] = new datiIban(258,"LV",21);
	arrayDatiIban[259] = new datiIban(259,"LT",20);
	arrayDatiIban[92] = new datiIban(92,"LU",20);
	arrayDatiIban[105] = new datiIban(105,"MT",31);
	arrayDatiIban[48] = new datiIban(48,"NO",15);
	arrayDatiIban[50] = new datiIban(50,"NL",18);
	arrayDatiIban[54] = new datiIban(54,"PL",28);
	arrayDatiIban[55] = new datiIban(55,"PT",25);
	arrayDatiIban[31] = new datiIban(31,"GB",22);
	arrayDatiIban[276] = new datiIban(276,"SK",24);
	arrayDatiIban[260] = new datiIban(260,"SI",19);
	arrayDatiIban[67] = new datiIban(67,"ES",24);
	arrayDatiIban[68] = new datiIban(68,"SE",24);
	arrayDatiIban[77] = new datiIban(77,"HU",28);
	arrayDatiIban[4] = new datiIban(4,"AD",24);
	arrayDatiIban[101] = new datiIban(101,"CY",28);
	arrayDatiIban[102] = new datiIban(102,"GI",23);
	arrayDatiIban[90] = new datiIban(90,"LI",21);
	arrayDatiIban[71] = new datiIban(71,"CH",21);
	arrayDatiIban[75] = new datiIban(75,"TN",24);
}

/*
	<FUNZIONE label="checkIBANfromCountry">
	<AUTORE></AUTORE>
	<COMMENTO>Controlla l'ampiezza del codice e se il codice paese nell'IBAN e' uguale a "country".</COMMENTO>
	<PARAMETRO label="iban" DESCRIZIONE=""/>
	<PARAMETRO label="country" DESCRIZIONE=""/>																	
	</FUNZIONE>
*/ 
 
function checkIBANfromCountry(iban, country)
{	
	if(iban.length == 0) 
	    return true;
      
	var paese_ben = eval(country);
	var codPaese_iban = (iban.substring(0, 2)).toUpperCase();
	
	/* Nel caso non ho alcuna disposizione per quel paese non si esegue alcun controllo */
	/* sostituisco arrayDatiIban con uic_iso */
	if (uic_iso[paese_ben]==undefined)
	{
		return true;
	}
	
	if ((isOnlyAlfaString(codPaese_iban)==false))
	{
		return confirm(MSG_Confirm_checkIban);
	}
	
	/* controllo dell'iban sulla correttezza del codice paese e lunghezza (se fornito il codice paese del beneficiario)*/
	if (!( (country == "") && (country == null)))
	{
		if ( (uic_iso[paese_ben].uic == paese_ben) && (uic_iso[paese_ben].iso == codPaese_iban) )
			 
		 {
		    /* controllo la lunghezza IBAN con l'array NON COMPLETO DEI PAESI arrayDatiIban */
		    /* solo se e' presente faccio il controllo */
		    if (arrayDatiIban[paese_ben] != undefined)
		    {
			    if (arrayDatiIban[paese_ben].n_car == iban.length)
			    {
					return true;
				}
				else
				{
					return confirm(MSG_Confirm_checkIban); //messaggio di congruenza con il paese
				}
			}
			else
			{
				return true; /* se non e' presente il paese in arrayDatiIban allora vado avanti */
			}
		 }
		else 
		{
			return confirm(MSG_Confirm_checkCountryAndIban); //messaggio di congruenza con il paese
		}
	}
	else
	 return true;
}

/*
	<FUNZIONE label="checkIBAN">
	<AUTORE>Luca D.</AUTORE>
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
 
function checkIBAN(iban, abi, cab, account)
{	
	if(iban.length == 0 || (abi.length == 0 && cab.length == 0 && account.length == 0)) 
		return true;
	if(iban.length > 0 && iban.length != 27)
	{
		alert(MSG_Alert_LunghIban);
		return false;
	}
	
	abi_iban = iban.substring(5, 10);
	cab_iban = iban.substring(10, 15);
	account_iban = (iban.substring(15, 27)).toUpperCase();
	
	if(abi_iban == abi && cab_iban == cab && account_iban == account.toUpperCase()) 
		return true;
	else
	{
		alert(MSG_Alert_checkIban_2);
		return false;
	}
}
 
/*
	<FUNZIONE label="checkIBANNew">
	<AUTORE>Adriano Antonelli</AUTORE>
	<COMMENTO>
		Check the value passed. Return false if the IBAN value is != 27 or
		do not match with the ABI, CAB, ACCOUNT codes. 
		And return the error message if present instead of pushing out a popup.
	</COMMENTO>
	<PARAMETRO label="iban" DESCRIZIONE=""/>
	<PARAMETRO label="abi" DESCRIZIONE=""/>
	<PARAMETRO label="cab" DESCRIZIONE=""/>
	<PARAMETRO label="account" DESCRIZIONE=""/>																		
	</FUNZIONE>
*/ 
 
function checkIBANNew(iban, abi, cab, account)
{
	if(iban.length == 0 || (abi.length == 0 && cab.length == 0 && account.length == 0)) 
		return "";
	if(iban.length > 0 && iban.length != 27)
		return MSG_Alert_LunghIban;
	
	abi_iban = iban.substring(5, 10);
	cab_iban = iban.substring(10, 15);
	account_iban = (iban.substring(15, 27)).toUpperCase();
	
	if(abi_iban == abi && cab_iban == cab && account_iban == account.toUpperCase()) 
		return "";
	else
		return MSG_Alert_checkIban_2;
}
 
/*
	<FUNZIONE label="checkIBANSintax">
	<AUTORE>Piero Bargellini</AUTORE>
	<COMMENTO>Accetta come parametro l'iban. Ritorna false se la lunghezza e' diversa da  27 o se il formato non e' corretto.</COMMENTO>
	<PARAMETRO label="iban" DESCRIZIONE=""/>																			
	</FUNZIONE>
*/ 
 
function checkIBANSintax(iban){
	
	if(iban.length != 27)
	{
		return false;
	}
	codPaese_iban = iban.substring(0, 2);
	cinEur_iban = iban.substring(2, 4);
	cinIta_iban = iban.substring(4, 5);
	abi_iban = iban.substring(5, 10);
	cab_iban = iban.substring(10, 15);
	account_iban = iban.substring(15, 27);
	
	//   controlla il formato del
	//   codice Paese(alfabetico)     			  cin Euro(numerico),                       cin Italia(alfabetico)                abi(numerico)                          cab(numerico)                          account(alfanumerico)
	if ((isOnlyAlfaString(codPaese_iban)==true)&&(isOnlyNumericString(cinEur_iban)==true)&&(isOnlyAlfaString(cinIta_iban)==true)&&(isOnlyNumericString(abi_iban)==true)&&(isOnlyNumericString(cab_iban)==true)&&(isOnlyAlfaNumericString(account_iban)==true))
		return true;
	else
		return false
}

/*
	<FUNZIONE label="validateIBAN">
	<AUTORE>Alessio Nencini</AUTORE>
	<COMMENTO>Accetta come parametro l'iban e ne controlla la correttezza secondo lo standard SIA RI VEUN.</COMMENTO>
	<PARAMETRO label="iban" DESCRIZIONE="l'iban da controllare"/>
	<RETURN value="0" if="IBAN ok"/>																			
	<RETURN value="-1" if="IBAN ko strutturalmente"/>																			
	<RETURN value="-2" if="IBAN ko applicativamente"/>																			
	</FUNZIONE>
*/ 
      function validateIBAN(iban)
      {
      	if (iban == null)
      		return -1;
      	if (iban.length > 27)
      		return -1;
      	
      	// valorizzo campi di supporto per la form
      	codPaese_iban = '';
		cinEur_iban = '';
		cinIta_iban = '';
		abi_iban = '';
		cab_iban = '';
		account_iban = '';
      	
      	if(iban.length > 1)
			codPaese_iban = iban.substring(0, 2);
      	if(iban.length > 3)
			cinEur_iban = iban.substring(2, 4);
      	if(iban.length > 4)
			cinIta_iban = iban.substring(4, 5);
      	if(iban.length > 9)
			abi_iban = iban.substring(5, 10);
      	if(iban.length > 14)
			cab_iban = iban.substring(10, 15);
      	if(iban.length > 26)
			account_iban = iban.substring(15, 27);
		
		// case sensitive
      	var ibanUpperCase = iban.toUpperCase();
      	if(ibanUpperCase != iban)
      		return -1;
      
		// codice paese deve essere IT/SM
		//if(codPaese_iban != 'IT' && codPaese_iban != 'SM')
		//	return -1;
			
		// check digit numerico
		if(!isOnlyNumericString(cinEur_iban))
			return -1;
			
		// cin italia alfanumerico
		if(!isOnlyAlfaNumericString(cinIta_iban))
			return -1;		
			
		// abi nel range previsto
		//2136 [01000 - 10999] OPPURE  [19000 - 19499] OPPURE [31000 - 33999] OPPURE [36000 - 36999]
		var rangeAbiIT = (abi_iban >= 1000 && abi_iban <= 10999) || (abi_iban >= 19000 && abi_iban <= 19499) || (abi_iban >= 31000 && abi_iban <= 33999) || (abi_iban >= 36000 && abi_iban <= 36999) ;
		var rangeAbiSM = (abi_iban >= 1000 && abi_iban <= 10999) || (abi_iban >= 19000 && abi_iban <= 19499) || (abi_iban >= 31000 && abi_iban <= 33999) || (abi_iban >= 36000 && abi_iban <= 36999) ;
		//var rangeAbiSM = abi_iban >= 36000 && abi_iban <= 36999;
		if(!rangeAbiIT && !rangeAbiSM)
			return -1;
			
		// cab nel range 
		if(cab_iban == 0)
			return -1;
			
		if(!isOnlyNumericString(cab_iban)){
				return -1;			
		}			
			
		// conto almeno un carattere
		if(iban.length < 16)
			return -1;
		
		// conto deve essere costituito da cifre e lettere
		if(!isOnlyAlfaNumericString(account_iban))
			return -2;
			
		// conto deve essere 12 caratteri
		if(account_iban.length != 12)
			return -2;

      	var ibanControllo = iban.substring(4, iban.length) + iban.substring(0, 4);
      	ibanControllo = ibanControllo.toUpperCase();
		var controlloCheckDigit = checkDigitSumIBAN(ibanControllo);
		if(controlloCheckDigit == true)
        	return 0;
        else
        	return -2; 
      }
      
/*
	<FUNZIONE label="validateIBANPagamentiEstero">
	<AUTORE>Alessio Nencini</AUTORE>
	<COMMENTO>Accetta come parametro l'iban e ne controlla la correttezza secondo lo standard SIA RI VEUN.</COMMENTO>
	<PARAMETRO label="iban" DESCRIZIONE="l'iban da controllare"/>
	<RETURN value="0" if="IBAN ok"/>																			
	<RETURN value="-1" if="IBAN ko strutturalmente"/>																			
	<RETURN value="-2" if="IBAN ko applicativamente"/>
	<RETURN value="-3" if="ABI-CAB errati se IBAN ITALIANO"/>																			
	</FUNZIONE>
*/ 
       function validateIBANPagamentiEstero(iban)
      {
      	if (iban == null)
      		return -1;
      	if (iban.length > 27)
      		return -1;
      	
      	// valorizzo campi di supporto per la form
      	codPaese_iban = '';
		cinEur_iban = '';
		cinIta_iban = '';
		abi_iban = '';
		cab_iban = '';
		account_iban = '';
      	
      	if(iban.length > 1)
			codPaese_iban = iban.substring(0, 2);
      	if(iban.length > 3)
			cinEur_iban = iban.substring(2, 4);
      	if(iban.length > 4)
			cinIta_iban = iban.substring(4, 5);
      	if(iban.length > 9)
			abi_iban = iban.substring(5, 10);
      	if(iban.length > 14)
			cab_iban = iban.substring(10, 15);
      	if(iban.length > 26)
			account_iban = iban.substring(15, 27);
		
		// case sensitive
      	var ibanUpperCase = iban.toUpperCase();
      	if(ibanUpperCase != iban)
      		return -1;
      
		// codice paese deve essere IT/SM : 7/3/2014 NON SERVE QUESTO CONTROLLO
		//if(codPaese_iban != 'IT' && codPaese_iban != 'SM')
		//	return -1;
			
		// check digit numerico
		if(!isOnlyNumericString(cinEur_iban))
			return -1;
			
		// cin italia alfanumerico
		if(!isOnlyAlfaNumericString(cinIta_iban))
			return -1;		
			
		// abi nel range previsto solo per IT e SM
		if(codPaese_iban == 'IT' || codPaese_iban == 'SM')
		{
			//2136 [01000 - 10999] OPPURE  [19000 - 19499] OPPURE [31000 - 33999] OPPURE [36000 - 36999]
			var rangeAbiIT = (abi_iban >= 1000 && abi_iban <= 10999) || (abi_iban >= 19000 && abi_iban <= 19499) || (abi_iban >= 31000 && abi_iban <= 33999) || (abi_iban >= 36000 && abi_iban <= 36999) ;
			var rangeAbiSM = (abi_iban >= 1000 && abi_iban <= 10999) || (abi_iban >= 19000 && abi_iban <= 19499) || (abi_iban >= 31000 && abi_iban <= 33999) || (abi_iban >= 36000 && abi_iban <= 36999) ;
			//var rangeAbiSM = abi_iban >= 36000 && abi_iban <= 36999;
			if(!rangeAbiIT && !rangeAbiSM)
				return -3;
		}
			
		// cab nel range 
		if(cab_iban == 0)
			return -3;
		
		if(!isOnlyNumericString(cab_iban)){
				return -3;			
		}

			
		// conto almeno un carattere
		if(iban.length < 16)
			return -1;
		
		// conto deve essere costituito da cifre e lettere
		if(!isOnlyAlfaNumericString(account_iban))
			return -2;
			
		// conto deve essere 12 caratteri
		if(codPaese_iban == 'IT' || codPaese_iban == 'SM')
		{
			if(account_iban.length != 12)
				return -2;
		}

      	var ibanControllo = iban.substring(4, iban.length) + iban.substring(0, 4);
      	ibanControllo = ibanControllo.toUpperCase();
		var controlloCheckDigit = checkDigitSumIBAN(ibanControllo);
		if(controlloCheckDigit == true)
        	return 0;
        else
        	return -2; 
      }      
      
      
    function checkDigitSumIBAN(s) 
    {
      // aggiusta i caratteri sostituendo le lettere
      var n	;
      ibanNumber = "";
      for (var i = 0; i<s.length; ++i ) 
      {
        var a = s.charCodeAt(i)	
        if (a>=65 & a<=90) 
        {
          n = a - 55
        }
        else 
        {
          n = s.charAt(i)
        }
        ibanNumber = ibanNumber + n 
      }
      
      // faccio il controllo modulo 97 così causa out of range javascript
      var progCorrente = parseInt(ibanNumber.substring(0,2),10)
      var mod97 = progCorrente % 97
      for (i = 2; i <ibanNumber.length; ++i) 
      {
        progCorrente = 10*mod97 + parseInt(ibanNumber.substring(i, i+1),10)
        mod97 = progCorrente % 97
      }
      return (mod97 == 1);
    }      


/*
	<FUNZIONE label="isOnlyNumericString">
	<AUTORE>Piero Bargellini</AUTORE>
	<COMMENTO>Controlla che la stringa contenga soltanto caratteri numerici.</COMMENTO>
	<PARAMETRO label="string" DESCRIZIONE=""/>																			
	</FUNZIONE>
*/
 
function isOnlyNumericString(string) {

    var chars = "0123456789";
    for (var i = 0; i < string.length; i++) {
       if (chars.indexOf(string.charAt(i)) == -1)
          return false;
    }
    return true;
}

/*
	<FUNZIONE label="isOnlyAlfaString">
	<AUTORE>Piero Bargellini</AUTORE>
	<COMMENTO>Controlla che la stringa contenga soltanto caratteri alfabetici.</COMMENTO>
	<PARAMETRO label="string" DESCRIZIONE=""/>																			
	</FUNZIONE>
*/
 
function isOnlyAlfaString(string) {
	string = string.toLowerCase();
    var chars = "qwertyuiopasdfghjklzxcvbnm";
    for (var i = 0; i < string.length; i++) {
       if (chars.indexOf(string.charAt(i)) == -1)
          return false;
    }
    return true;
}

/*
	<FUNZIONE label="isOnlyAlfaNumericString">
	<AUTORE>Piero Bargellini</AUTORE>
	<COMMENTO>Controlla che la stringa contenga soltanto caratteri alfanumerici.</COMMENTO>
	<PARAMETRO label="string" DESCRIZIONE=""/>																			
	</FUNZIONE>
*/
 
function isOnlyAlfaNumericString(string) {
	string = string.toLowerCase();
    var chars = "0123456789qwertyuiopasdfghjklzxcvbnm";
    for (var i = 0; i < string.length; i++) {
       if (chars.indexOf(string.charAt(i)) == -1)
          return false;
    }
    return true;
}

/*
	<FUNZIONE label="isSWIFTString">
	<AUTORE></AUTORE>
	<COMMENTO>Controlla che la stringa contenga soltanto caratteri ammessi dal circuito SWIFT.</COMMENTO>
	<PARAMETRO label="string" DESCRIZIONE=""/>																			
	</FUNZIONE>
*/
 
function isSWIFTString(string) 
{
	var chars = "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ /-?:().,'+";
	var carriageReturn = 13;
	var lineFeed = 10;
	for (var i = 0; i < string.length; i++) 
	{
	   if (chars.indexOf(string.charAt(i)) == -1 && string.charCodeAt(i) != carriageReturn && string.charCodeAt(i) != lineFeed)
	   {
		  return false;
		}
	}
	return true;
}

/*
	<FUNZIONE label="normalizeChar">
	<AUTORE></AUTORE>
	<COMMENTO>
		Questa funzione rimpiazza i caratteri accentati, con il corrispondente carattere non 
		accentato, nell'evento onKeyPress.
	</COMMENTO>
	<PARAMETRO label="e" DESCRIZIONE=""/>																			
	</FUNZIONE>
*/

function normalizeChar(e)
{
	switch(e.keyCode)
	{
		case 224: e.keyCode = 97;  break; //Carattere "à"
		case 225: e.keyCode = 97;  break; //Carattere "á"
		case 232: e.keyCode = 101; break; //Carattere "è"
		case 233: e.keyCode = 101; break; //Carattere "é"
		case 236: e.keyCode = 105; break; //Carattere "ì"
		case 237: e.keyCode = 105; break; //Carattere "í"
		case 242: e.keyCode = 111; break; //Carattere "ò"
		case 243: e.keyCode = 111; break; //Carattere "ó"
		case 249: e.keyCode = 117; break; //Carattere "ù"
		case 250: e.keyCode = 117; break; //Carattere "ú"
	}	
}

/*
	<FUNZIONE label="warnDate">
	<AUTORE>Mauro Begatti</AUTORE>
	<COMMENTO>
		Checks for the insDate to be after or equal minDate, otherwise an alert is shown.
		The date format must be dd/MM/yyyy.
	</COMMENTO>
	<PARAMETRO label="field" DESCRIZIONE=""/>
	<PARAMETRO label="minDate" DESCRIZIONE=""/>																			
	</FUNZIONE>
*/

function warnDate(field, minDate)
{
    //check date

    // Retrieve the field reference
    var evalform = eval("document.forms[0]");
    insDate = checkDate(evalform.elements[field].value,1900,2050,10)
    if ((insDate != null) && (insDate != ''))
    {
        dmin=new Date();
        dmin.setTime("0");
        dmin.setFullYear(minDate.substr(6,4));
        dmin.setMonth(eval(minDate.substr(3,2)-1),minDate.substr(0,2));
        dins=new Date();
        dins.setTime("0");
        dins.setFullYear(insDate.substr(6,4));
        dins.setMonth(eval(insDate.substr(3,2)-1),insDate.substr(0,2));
        if (dins<dmin)
        {
            alert(MSG_warnDate_Head+minDate+MSG_warnDate_Tail);
        }
    }
}

/*
	<FUNZIONE label="warnDeltaDate">
	<AUTORE>Mauro Begatti,Luca D.</AUTORE>
	<COMMENTO>
		Checks for minDate - minDelta min= field min= minDate + maxDelta, otherwise an alert is shown.
		The date format must be dd/MM/yyyy.
		Mauro B.

		Note!!! todayDB is the server date in format yyyy/mm/dd.
			If (todayDB == null) OR (todayDB == ''),
			then the new Date() function creates
			a new date based on the local PC date!

		checkStatus = true
		activates the return value setted to false if the date isn't correct 

		Luca D.
	</COMMENTO>
	<PARAMETRO label="field" DESCRIZIONE=""/>
	<PARAMETRO label="minDate" DESCRIZIONE=""/>
	<PARAMETRO label="todayDB" DESCRIZIONE=""/>
	<PARAMETRO label="mindelta" DESCRIZIONE=""/>
	<PARAMETRO label="maxdelta" DESCRIZIONE=""/>
	<PARAMETRO label="dispoType" DESCRIZIONE=""/>
	<PARAMETRO label="checkStatus" DESCRIZIONE=""/>																				
	</FUNZIONE>
*/

function warnDeltaDate(field, minDate, todayDB, mindelta, maxdelta, dispoType, checkStatus)
{
	var check = true;
	var checkDeltaMax = true;
    // Retrieve the field reference
    var evalform = eval("document.forms[0]");
    insDate = checkDate(evalform.elements[field].value,1900,2050,10);
    
    // Check if it's a disposition with currency date
	if(dispoType == 'pagamentoit')
	{
    	//get the whole period
    	mindelta = getWholePeriod(new Date(todayDB), eval(mindelta), 'past');
    	maxdelta = getWholePeriod(new Date(todayDB), eval(maxdelta), 'future');
    }
    
    mindelta = eval(mindelta);
    maxdelta = eval(maxdelta);
    
    //insDate = evalform.elements[field].value;
    if ((insDate != null) && (insDate != ''))
    {
         insDate = checkDate(value,minYear,maxYear,yearLimit);
         
         dmin=new Date(todayDB);
         dmin.setTime("0");
         dmin.setFullYear(minDate.substr(6,4));
         dmin.setMonth(eval(minDate.substr(3,2)-1),minDate.substr(0,2));
         day = dmin.getDate();
         day = day+mindelta;
         dmin.setDate(day);
         
         dmax=new Date(todayDB);
         dmax.setTime("0");
         dmax.setFullYear(minDate.substr(6,4));
         dmax.setMonth(eval(minDate.substr(3,2)-1),minDate.substr(0,2));
         day = dmax.getDate();
         day = day+maxdelta;
         dmax.setDate(day);
         
         dins=new Date(todayDB);
         dins.setTime("0");
         dins.setFullYear(insDate.substr(6,4));
         dins.setMonth(eval(insDate.substr(3,2)-1),insDate.substr(0,2));
         
         
         // Check if there is a date limit onward
		if(dispoType != 'avvisi')
		{
	    	checkDeltaMax = (dins>dmax);
	    }
	    else
	    {
	    	checkDeltaMax = false;
	    }
	    
	    // Check if the date is correct
         if ((dins<dmin)||checkDeltaMax)
         {
             msgmin=null;
             if(dmin.getDate()<10)
             {
                 msgmin = "0"+dmin.getDate();
             }
             else
             {
                msgmin = dmin.getDate();
             }
             if(dmin.getMonth()<9)//il mese parte da 0
             {
                 msgmin = msgmin+"/0"+eval(dmin.getMonth()+1);
             }
             else
             {
                msgmin = msgmin+"/"+eval(dmin.getMonth()+1);
             }
             msgmin = msgmin+"/"+dmin.getFullYear();
     

			 msgins = null;
			 if(dins.getDate()<10)
             {
                 msgins = "0"+dins.getDate();
             }
             else
             {
                msgins = dins.getDate();
             }
             if(dins.getMonth()<9)
             {
                 msgins = msgins+"/0"+eval(dins.getMonth()+1);
             }
             else
             {
                msgins = msgins+"/"+eval(dins.getMonth()+1);
             }
             msgins = msgins+"/"+dins.getFullYear();
             
             
             if(dispoType != 'avvisi')
			 {
				 msgmax=null;
				 if(dmax.getDate()<10)
				 {
					 msgmax = "0"+dmax.getDate();
				 }
				 else
				 {
					msgmax = dmax.getDate();
				 }
				 if(dmax.getMonth()<9)
				 {
					 msgmax = msgmax+"/0"+eval(dmax.getMonth()+1);
				 }
				 else
				 {
					msgmax = msgmax+"/"+eval(dmax.getMonth()+1);
				 }
				 msgmax = msgmax+"/"+dmax.getFullYear();
				 if(dispoType == 'riba'){
				 	dMedia=getDataDelta(minDate,10,todayDB);
				 	msgMedia=getDataPrint(dMedia);
				 	alert( MSG_Alert_chekCorrect_Date_1+ msgins +MSG_Alert_chekCorrect_Date_2 +msgmin+MSG_Alert_chekCorrect_Date_3+msgmax+MSG_Alert_chekCorrect_Date_6 + msgMedia + MSG_Alert_chekCorrect_Date_7 + msgmax+ MSG_Alert_chekCorrect_Date_8);
				 }else{
				 	alert( MSG_Alert_chekCorrect_Date_1+ msgins +MSG_Alert_chekCorrect_Date_2 +msgmin+MSG_Alert_chekCorrect_Date_3+msgmax);
				 }
				 
        	 }
        	 //Case: avvisi
        	 else
        	 {
        	 	alert(MSG_Alert_chekCorrect_Date_4 + msgins + MSG_Alert_chekCorrect_Date_5 + msgmin);
        	 }
        	 
        	 //Set the check flag if we need to control the submit process
        	 if(checkStatus)
        	 {
        	 	check = false;
        	 }
        }
    }
    return check;
}
/*ITEC funzione che ritorna la data da scivere nell'alert*/
function getDataPrint(date){
	msg=null;
	 if(date.getDate()<10)
             {
                 msg = "0"+date.getDate();
             }
             else
             {
                msg = date.getDate();
             }
             if(date.getMonth()<9)
             {
                 msg = msg+"/0"+eval(date.getMonth()+1);
             }
             else
             {
                msg = msg+"/"+eval(date.getMonth()+1);
             }
             msg = msg+"/"+date.getFullYear();
	return msg;

}
/*ITEC funzione che ritorna un data dato un periodo*/
function getDataDelta(data,delta,todayDB){
		 delta=eval(delta);
		 dateNew=new Date(todayDB);
         dateNew.setTime("0");
         dateNew.setFullYear(data.substr(6,4));
         dateNew.setMonth(eval(data.substr(3,2)-1),data.substr(0,2));
         day = dateNew.getDate();
         day= day+delta;
         dateNew.setDate(day);
         return dateNew;
}

/*
	<FUNZIONE label="getWholePeriod">
	<AUTORE>Luca D.</AUTORE>
	<COMMENTO>
		return the number of working days plus the holidays
		in the period indicated by the todayDate + delta
  
		todayDate = start Date
		delta = period in working days
		direction = 'past' or 'future'
	</COMMENTO>
	<PARAMETRO label="todayDate" DESCRIZIONE=""/>
	<PARAMETRO label="delta" DESCRIZIONE=""/>
	<PARAMETRO label="direction" DESCRIZIONE=""/>																					
	</FUNZIONE>
*/

function getWholePeriod(todayDate, delta, direction)
{
	
	//get the number of day. Sunday = 0.
	todayNumber = todayDate.getDay();
	
	workingDays = Math.abs(delta);
	if(direction == 'future')
	{
		for(i=0; i<workingDays; i++)
		{
			todayNumber++;
			if(todayNumber == 7) todayNumber = 0;
			if(todayNumber == 0 || todayNumber == 6)
			{
				 workingDays++;
			}
		}
	}
	else if(direction == 'past')
	{
		for(i=0; i<workingDays; i++)
		{
			todayNumber--;
			if(todayNumber == -1) todayNumber = 6;
			if(todayNumber == 0 || todayNumber == 6)
			{
				 workingDays++;
			}
		}
	}
	if(delta < 0) workingDays = -workingDays;
	return workingDays;
}

/*
	<FUNZIONE label="onlyAlpha">
	<AUTORE></AUTORE>
	<COMMENTO>
		Consente solo l'immissione di caratteri alfabetici
		in un campo di tipo text.
		uso:
		(input type='text' .... onKeyPress="return onlyalpha(event)")
	</COMMENTO>
	<PARAMETRO label="evento" DESCRIZIONE=""/>																						
	</FUNZIONE>
*/

function onlyAlpha(evento){

	if(window.event || !evento.which) // IE o NE?
	{
		tasto = evento.keyCode; // per IE
	}
	else if(evento) // netscape
	{
		tasto = evento.which;
		}
	
	// gestione caso tasto backspace e tab
	if (tasto == 8 || tasto == 9 )
	{
		return true;
	}
							
	if (tasto < 65 || tasto > 122 || (tasto > 90 && tasto < 97))
		return false;
	return true;  

}

/*
	<FUNZIONE label="maxL4TextArea">
	<AUTORE>Piero Bargellini</AUTORE>
	<COMMENTO>
		Questa funzione va inserita nell'evento onKeyUp( impedisce l'inserimento da
		tastiera di piu' di maxLength caratteri in un campo).
	</COMMENTO>
	<PARAMETRO label="campo" DESCRIZIONE=""/>
	<PARAMETRO label="maxLength" DESCRIZIONE=""/>																						
	</FUNZIONE>
*/

function maxL4TextArea(campo,maxLength)
{
	if (campo.value.length > maxLength) {
		campo.value = campo.value.substring(0, maxLength);
		return false;
	}
	return true;
}

/*
	<FUNZIONE label="onlyRealNumbers">
	<AUTORE></AUTORE>
	<COMMENTO>
		Consente solo l'immissione di caratteri numerici
		comprensivi del segno ','
		in un campo di tipo text.
		uso: (input type='text' .... onKeyPress="return onlyRealNumbers(event)")
	</COMMENTO>
	<PARAMETRO label="evento" DESCRIZIONE=""/>																							
	</FUNZIONE>
*/

function onlyRealNumbers(evento){	

	if(window.event || !evento.which) // IE o NE?
	{
		tasto = evento.keyCode; // per IE
	}
	else if(evento) // netscape
	{
		tasto = evento.which;
		}
	
	// gestione caso tasto backspace e tab
	if (tasto == 8 || tasto == 9 )
	{
		return true;
	}	
		
	if (tasto < 48 || tasto > 57 )
	{
		if( tasto != 44  )//ammessa solo virgola
		{
			return false;
		}
	}
	return true;  
}

/*
	<FUNZIONE label="onlyNaturalNumbers">
	<AUTORE></AUTORE>
	<COMMENTO>
		Consente solo l'immissione di caratteri numerici
		in un campo di tipo text.
		uso: (input type='text' .... onKeyPress="return onlyNaturalNumbers(event)")
	</COMMENTO>
	<PARAMETRO label="evento" DESCRIZIONE=""/>																							
	</FUNZIONE>
*/

function onlyNaturalNumbers(evento){	

	if(window.event || !evento.which) // IE o NE?
	{
		tasto = evento.keyCode; // per IE
	}
	else if(evento) // netscape
	{
		tasto = evento.which;
		}
	
	// gestione caso tasto backspace e tab
	if (tasto == 8 || tasto == 9 )
	{
		return true;
	}
			
	if (tasto < 48 || tasto > 57 )
	{
		return false;
	}
	return true;  
}

/*
	<FUNZIONE label="isCodiceFiscale">
	<AUTORE>Piero Bargellini</AUTORE>
	<COMMENTO>Check the value passed. Return true if the value is a correct CF</COMMENTO>
	<PARAMETRO label="cf" DESCRIZIONE=""/>																							
	</FUNZIONE>
*/

function isCodiceFiscale(cf)
{
    var validi, i, s, set1, set2, setpari, setdisp;
    cf = cf.toUpperCase();
    
    if( cf.length != 16 )
     	return false;
    else
    {
        validi = "ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
        for( i = 0; i < 16; i++ )
            if( validi.indexOf( cf.charAt(i) ) == -1 )
                return false
        
        set1 = "0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ";
        set2 = "ABCDEFGHIJABCDEFGHIJKLMNOPQRSTUVWXYZ";
        setpari = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
        setdisp = "BAKPLCQDREVOSFTGUHMINJWZYX";
        s = 0;
        for( i = 1; i <= 13; i += 2 )
           s += setpari.indexOf( set2.charAt( set1.indexOf( cf.charAt(i) )));
        for ( i = 0; i <= 14; i += 2 )
           s += setdisp.indexOf( set2.charAt( set1.indexOf( cf.charAt(i) )));
        if( s%26 != cf.charCodeAt(15)-'A'.charCodeAt(0) )
            return false;
    }
 	return true;
}

/*
	<FUNZIONE label="onlyDate">
	<AUTORE></AUTORE>
	<COMMENTO>
		Consente solo l'immissione di caratteri numerici
		e barre in modo da inserire una data del tipo gg/mm/aaaa.
		uso: (input type='text' .... onKeyPress="return onlyDate(event)")
	</COMMENTO>
	<PARAMETRO label="evento" DESCRIZIONE=""/>																							
	</FUNZIONE>
*/

function onlyDate(evento)
{

	if(window.event || !evento.which) // IE o NE?
	{
		tasto = evento.keyCode; // per IE
	}
	else if(evento) // netscape
	{
		tasto = evento.which;
		}
	
	// gestione caso tasto backspace e tab
	if (tasto == 8 || tasto == 9 )
	{
		return true;
	}
	
	if (tasto < 47 || tasto > 57 )
	{
		return false;
	}
	return true;  
}

/*
	<FUNZIONE label="onlyAlphaNumbers">
	<AUTORE></AUTORE>
	<COMMENTO>
		Consente solo l'immissione di caratteri alfabetici e numeri [0...9]
		in un campo di tipo text.
		uso: (input type='text' .... onKeyPress="return onlyalphaNumbers(event)" id='text'1 name='text'1)
	</COMMENTO>
	<PARAMETRO label="evento" DESCRIZIONE=""/>																							
	</FUNZIONE>
*/

function onlyAlphaNumbers(evento){	

	if(window.event || !evento.which) // IE o NE?
	{
		tasto = evento.keyCode; // per IE
	}
	else if(evento) // netscape
	{
		tasto = evento.which;
		}
	
	// gestione caso tasto backspace e tab
	if (tasto == 8 || tasto == 9 )
	{
		return true;
	}
							
	if ((tasto < 65 || tasto > 122 || (tasto > 90 && tasto < 97)) && (tasto < 48 || tasto > 57 ))
		return false;
	return true;  

}

/*
	<FUNZIONE label="formatoImportiCorretto">
	<AUTORE></AUTORE>
	<COMMENTO>
		verifica che gli importi siano inseriti nella forma:
		nInt,nFract, si aspetta che il numero di caratteri sia comunque
		complessivamente giusto.In caso di errore torna una stringa che descrive la causa.
	</COMMENTO>
	<PARAMETRO label="impCVS" DESCRIZIONE=""/>
	<PARAMETRO label="nInt" DESCRIZIONE=""/>
	<PARAMETRO label="nFract" DESCRIZIONE=""/>																							
	</FUNZIONE>
*/

function formatoImportiCorretto(impCVS,nInt,nFract)
{
   nIntStr="";
   switch (nInt){ 
   case 1 : nIntStr=MSG_number_1_ITEC; break;
   case 2 : nIntStr=MSG_number_2_ITEC; break;
   case 3 : nIntStr=MSG_number_3_ITEC; break;
   case 4 : nIntStr=MSG_number_4_ITEC; break;
   case 5 : nIntStr=MSG_number_5_ITEC; break;
   case 6 : nIntStr=MSG_number_6_ITEC; break;
   case 7 : nIntStr=MSG_number_7_ITEC; break;
   case 8 : nIntStr=MSG_number_8_ITEC; break;
   case 9 : nIntStr=MSG_number_9_ITEC; break;
   default : nIntStr=nInt.toString();
   }
   nFractStr="";
   switch (nFract){ 
   case 1 : nFractStr=MSG_number_1_ITEC; break;
   case 2 : nFractStr=MSG_number_2_ITEC; break;
   case 3 : nFractStr=MSG_number_3_ITEC; break;
   case 4 : nFractStr=MSG_number_4_ITEC; break;
   case 5 : nFractStr=MSG_number_5_ITEC; break;
   case 6 : nFractStr=MSG_number_6_ITEC; break;
   case 7 : nFractStr=MSG_number_7_ITEC; break;
   case 8 : nFractStr=MSG_number_8_ITEC; break;
   case 9 : nFractStr=MSG_number_9_ITEC; break;
   default : nFractStr=nInt.toString();
   }
 
 
   impCVS = impCVS.replace(/[.]/g,",");
   if (impCVS.indexOf(",")!=-1)
   {
   // numero con virgola, parte intera max nInt digit, parte con virgola max nFract digit
      var arrImpCVS = impCVS.split(",");
      var msg="";
      var errore=false;
      if ( String(arrImpCVS[0]).length > nInt )
      {
          msg = MSG_Err_FormatoImportoCorretto_Head +" "+ nIntStr +" "+ MSG_Err_FormatoImportoCorretto_Tail;
          errore = true;
      }
      if ( String(arrImpCVS[1]).length > nFract )
      {
			if (errore)
			{
				msg = msg + MSG_Err_FormatoImportoCorretto_1+" ";
			}
			else
			{
				msg = MSG_Err_FormatoImportoCorretto_2+" ";
			}
			msg = msg + MSG_Err_FormatoImportoCorretto_3 +" "+ nFractStr +" "+ MSG_Err_FormatoImportoCorretto_4;
			errore = true;
      }
      if(errore)
      {
			return msg;
      }
                       		
   }
   else
   {
   // controllare che lunghezza sia <= nInt
       if(impCVS.length>nInt)
       {
          return MSG_Err_FormatoImportoCorretto_5 +" "+ nIntStr +" "+ MSG_Err_FormatoImportoCorretto_6;
       }
   }
   return msg;
}
 
/*
	<FUNZIONE label="verificaLunghezzaContenuto">
	<AUTORE></AUTORE>
	<COMMENTO>
		verifica la lunghezza del testo inserito in un campo
		se il testo eccede le dimensioni massime, propone
		l'eliminazione automatica dei caratteri eccedenti
 
		arg remNL: true se la funzione deve rimuovere i control characters
	</COMMENTO>
	<PARAMETRO label="campo" DESCRIZIONE=""/>
	<PARAMETRO label="campoCaption" DESCRIZIONE=""/>
	<PARAMETRO label="maxLen" DESCRIZIONE=""/>
	<PARAMETRO label="remNL" DESCRIZIONE=""/>																							
	</FUNZIONE>
*/ 
 
function verificaLunghezzaContenuto(campo,campoCaption,maxLen,remNL)
{
  	if(remNL)
  	{
  		//rimuove crlf
		campo.value = removeNL(campo.value);
	}
  
	if (campo.value.length > maxLen)
	{
		//rimuove crlf
		campo.value = removeNL(campo.value);
		
		if (confirm("Il campo " + campoCaption + " eccede le dimensioni massime\n( " + maxLen + "  caratteri) Elimino i caratteri eccedenti?"))
		{
			campo.value = campo.value.slice(0,maxLen);
		}
	}
}

/*
	<FUNZIONE label="checkFieldWithName">
	<AUTORE>Chiara Venturi</AUTORE>
	<COMMENTO>
		I can't call the function checkField because instead of the field name it displays 'UNDEFINED'
		I need to see the field name in the error message alert!
	</COMMENTO>
	<PARAMETRO label="name" DESCRIZIONE=""/>
	<PARAMETRO label="value" DESCRIZIONE=""/>
	<PARAMETRO label="type" DESCRIZIONE=""/>
	<PARAMETRO label="mandatory" DESCRIZIONE=""/>
	<PARAMETRO label="nomeForm" DESCRIZIONE=""/>																							
	</FUNZIONE>
*/ 

function checkFieldWithName(name, value, type, mandatory, nomeForm)
{
	if ((mandatory == 'TRUE')&&(value.length ==0))
	{
			alert(name+" : "+mandatoryFieldMsg);
			return false;
	}
	else
	{
		switch (type)
		{
			case "STRING":
						// The field is a string field.
						if (value.length >0)
						{	
							return true;
						}
						else
						{
							alert(name+" : "+mandatoryFieldMsg);
							return false;
						}
						break;
						
			case "ABI_CAB":
						var abicab = checkABICABWithName(name,value,nomeForm)
						return abicab;
						break;
						
			case "ACCOUNT":
					// The field is an account number
						var account = checkAccountFormatWithName(name,value,nomeForm)
						return account;
						break;
						
						default:
						return null;
		}
	}
	return false;
}

	/*
		<FUNZIONE label="checkABICABWithName">
		<AUTORE></AUTORE>
		<COMMENTO>Descrizione...</COMMENTO>
		<PARAMETRO label="name" DESCRIZIONE=""/>
		<PARAMETRO label="value" DESCRIZIONE=""/>
		<PARAMETRO label="nomeForm" DESCRIZIONE=""/>																							
		</FUNZIONE>
	*/

	function checkABICABWithName(name, value,nomeForm)
	{
		var isOK = true;
		var msg = '';

		if( value.length < 5 )
		{
			 msg = MSG_Err_Lungh_AbiCabWithName;
			 isOK = false;
		}
		else 
		{
			 var validi = "0123456789";
			 for( i = 0; i < 11; i++ )
			 {
				 if( validi.indexOf( value.charAt(i) ) == -1 )
				 {
					msg = MSG_Err_Carattere_AbiCabWithName_Head + value.charAt(i) + MSG_Err_Carattere_AbiCabWithName_Tail;
					isOK = false;
				 }
			 }
		}
    if (isOK == true)
    {
       return true;
    }
    else
    {
      alert(name+" : "+msg);
			//Cambia il valore nel campo d'origine.
			var espressione = eval("document."+nomeForm+"."+name);
			espressione.value='';

           return false;
       }
   }
   
    /*
		<FUNZIONE label="checkAccountFormatWithName">
		<AUTORE></AUTORE>
		<COMMENTO>Descrizione...</COMMENTO>
		<PARAMETRO label="name" DESCRIZIONE=""/>
		<PARAMETRO label="value" DESCRIZIONE=""/>
		<PARAMETRO label="nomeForm" DESCRIZIONE=""/>																							
		</FUNZIONE>
	*/   
   
	function checkAccountFormatWithName(name, value, nomeForm)
	{
   	    var check = true;
   	    var minlength = 12;
   	    var maxlength = 12;
   	     	    		
   	    //controllo lunghezza
   	    var msg, msg1="", msg2="", msg3;
   	    msg = MSG_Num_Conto;
   	    msg3 = MSG_Controllo_Soluzione;
   	    if(value.length < minlength || value.length > maxlength)
   	    {
   	    	msg1 = MSG_Err_Caratter_Alfanum_Head+ minlength + MSG_Err_Caratter_Alfanum_Tail;
   	    	check = false;
   	    }
   	    
   	    //controllo caratteri alfanumerici
   	    value = value.toUpperCase();
   	    validi = "ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
   	    accountLength = value.length;
   	    for(i=0; i<accountLength; i++)
            {
                if( validi.indexOf( value.charAt(i) ) == -1 )
                {
                    msg2 = MSG_Caratteri_Non_Validi;
                    check = false;
                    
                    //modifica caratteri
                    value = value.replace(value.charAt(i), "");
                    i--;
                    accountLength = value.length;
                }
            }
   	    
   	    //modifica lunghezza 
   	    while(value.length < minlength)  value = "0" + value;
   	    
   	    if(!check)
   	    {
   	    	alert(msg+msg1+msg2+msg3);
					//Cambia il valore nel campo d'origine.
					var espressione = eval("document."+nomeForm+"."+name);
					espressione.value=value;
   	    }
   	    
   	    return check;
	}

/*
	<FUNZIONE label="confrontaImporto">
	<AUTORE></AUTORE>
	<COMMENTO>
		Questa funzione verifica che l'importo 'importo_al' sia successivo o uguale all'importo 'importo_dal'
		Torna true se gli importi sono nella sequenza giusta false altrimenti.
	</COMMENTO>
	<PARAMETRO label="importo_dal" DESCRIZIONE=""/>
	<PARAMETRO label="importo_al" DESCRIZIONE=""/>																								
	</FUNZIONE>
*/

function confrontaImporto(importo_dal, importo_al)
{
	if ((importo_dal=='') || (importo_al==''))
		return true;
	
	var newimporto_dal = importo_dal.replace(/,/g,".");
	var newimporto_al = importo_al.replace(/,/g,".");
	if (Number(newimporto_dal) <= Number(newimporto_al))
		return true;
	else 
		return false;
}

/*
	<FUNZIONE label="isDateAfterToday">
	<AUTORE></AUTORE>
	<COMMENTO>
		Checks for the insDate to be after or equal minDate, otherwise an alert is shown.
		The date format must be dd/MM/yyyy.
	</COMMENTO>
	<PARAMETRO label="field" DESCRIZIONE=""/>																								
	</FUNZIONE>
*/

function isDateAfterToday(field)
{
	 if   ( (field!="")  &&  (field!=null))
	 {
		 minDate=getToday();
		 insDate = checkDate(field.value,1900,2050,10)
		 if ((insDate != null) && (insDate != ''))
		 {
			  dmin=new Date();
			  dmin.setTime("0");
			  dmin.setFullYear(minDate.substr(6,4));
			  dmin.setMonth(eval(minDate.substr(3,2)-1),minDate.substr(0,2));
			  dins=new Date();
			  dins.setTime("0");
			  dins.setFullYear(insDate.substr(6,4));
			  dins.setMonth(eval(insDate.substr(3,2)-1),insDate.substr(0,2));
			  if (dins<dmin)
				  return false;
			  else
		   	  	  return true;
		 }
	 }
}

/*
	<FUNZIONE label="getToday">
	<AUTORE></AUTORE>
	<COMMENTO>This function return today in string format: "dd/mm/yyyy"</COMMENTO>																									
	</FUNZIONE>
*/

function getToday()
{
	var now = new Date();
	var month=now.getMonth()+1;
	var day=now.getDate();
	var year=now.getFullYear();
	if(month<10)
			month="0"+month;
	if(day<10)
			day="0"+day;
	return day+"/"+month+"/"+year;
		
}

/*
	<FUNZIONE label="confrontaDate">
	<AUTORE></AUTORE>
	<COMMENTO>
		Questa funzione verifica che la data 'data_al' sia successiva alla data 'data_dal'
		Torna true se le date sono nella sequenza giusta oppure coincidenti
	</COMMENTO>
	<PARAMETRO label="data_dal" DESCRIZIONE=""/>
	<PARAMETRO label="data_al" DESCRIZIONE=""/>																									
	</FUNZIONE>
*/

function confrontaDate(data_dal, data_al)
{
	
	if ((data_dal =='') || (data_al==''))
		return true;
	
	var ANNO_DAL = data_dal.substr(6,4);
	var MESE_DAL = eval(data_dal.substr(3,2)-1);
	var GIORNO_DAL = data_dal.substr(0,2);
	
	var ANNO_AL = data_al.substr(6,4);
	var MESE_AL = (data_al.substr(3,2)-1);
	var GIORNO_AL = data_al.substr(0,2);
	
	var dal = new Date(ANNO_DAL, MESE_DAL, GIORNO_DAL );
	var al = new Date(ANNO_AL, MESE_AL, GIORNO_AL );
	
	if (al < dal)
		return false;// intervallo date non accettabile 
	else
		return true;
}
 
/*
	<FUNZIONE label="isFestivityDate">
	<AUTORE>Piero Bargellini</AUTORE>
	<COMMENTO>Check the value passed. Return true if the value is a festivity date.</COMMENTO>
	<PARAMETRO label="inputDate" DESCRIZIONE=""/>																									
	</FUNZIONE>
*/ 
 
function isFestivityDate(inputDate)
{
	/* Year Italian National Holidays (gg/mm) */
    var nationalHolidays = new Array("01/01", "06/01", "25/04", "01/05", "02/06", "15/08", "01/11", "08/12", "25/12", "26/12");
	
	/* converte la data in formato inglese */
	var dateArray = inputDate.split("/");
	var inputDateEng = dateArray[1] + "/" + dateArray[0] + "/" + dateArray[2]
	var data = new Date(inputDateEng);
    
	var giorno = dateArray[0];
	var mese = dateArray[1];
	var anno = dateArray[2];
	var dayOfWeek = data.getDay();
	
	/* controlla i giorni di sabato o domenica */
	if ((dayOfWeek==6)||(dayOfWeek==0))
		return true;
	
	/* controlla i giorni di festa nazionale */
	var ggmm = giorno + "/" + mese;
	for( i=0; i<nationalHolidays.length; i++ )
	{
		if(ggmm==nationalHolidays[i])
			return true;
	}

	/* Controlla il giorno di pasquetta */
    var easterMonday = getEasterMonday(anno);
	if (inputDate==easterMonday)
		return true;
	
	return false;
}

/*
	<FUNZIONE label="isLeapYear">
	<AUTORE>Luca D.</AUTORE>
	<COMMENTO>return 1 if the "year" argument is a leap year, 0 otherwise.</COMMENTO>
	<PARAMETRO label="year" DESCRIZIONE=""/>																									
	</FUNZIONE>
*/

function isLeapYear(year) 
{ 
	if ((year % 4 == 0) && (year % 100 != 0) || (year % 400 == 0))  
		return 1; 
	else  
		return 0; 
}

/*
	<FUNZIONE label="getEasterMonday">
	<AUTORE>Luca D.,Piero Bargellini</AUTORE>
	<COMMENTO>
		ritorna il giorno di pasquetta in formato italiano, 
		accetta come parametro l'anno desiserato
	</COMMENTO>
	<PARAMETRO label="year" DESCRIZIONE=""/>																									
	</FUNZIONE>
*/

function getEasterMonday(year)
{
     A=year;
     n=A % 19; 
     c=Math.floor(A/100); 
     u=A % 100; 
     s=Math.floor(c/4); 
     t=c % 4; 
     p=Math.floor((c+8)/25); 
     q=Math.floor((c-p+1)/3); 
     e=(19*n+c-s-q+15) % 30; 
     b=Math.floor(u/4); 
     d=u % 4; 
     l=(32+2*t+2*b-e-d) % 7; 
     h=Math.floor((n+11*e+22*l)/451); 
     m=Math.floor((e+l-17*h+114)/31); 
     j=(e+l-17*h+114) % 31; 
     j=j+1;

	 leapYear = isLeapYear(A);
     easterSunday = 59 + leapYear; 
     if (m==3) easterSunday = easterSunday + j; 
     if (m==4) easterSunday = easterSunday + 31 + j;
	 
	 return AddDays("01/01/" + year,easterSunday)
}


/* 
	<FUNZIONE label="AddDays">
	<AUTORE>Piero Bargellini</AUTORE>
	<COMMENTO>
		funzione di manipolazione data che aggiunge e toglie giorni
		entra una data ed un numero anche negativo
		esce una data formattata che e' il risultato del calcolo
	</COMMENTO>
	<PARAMETRO label="startdate" DESCRIZIONE=""/>
	<PARAMETRO label="increm" DESCRIZIONE=""/>																									
	</FUNZIONE>
*/
function AddDays(startdate,increm)
{
	var dateArray = startdate.split("/");
	startdate = dateArray[1] + "/" + dateArray[0] + "/" + dateArray[2]
	var monthnum=new Array("01","02","03","04","05","06","07","08","09","10","11","12","13","14","15","16","17","18","19","20","21","22","23","24","25","26","27","28","29","30","31")
	var now=new Date(startdate);
	var newtimems=now.getTime()+(increm*24*60*60*1000);
	if (increm<0)
		newtimems+=1000*60*60 // aggiungo 1 ora per l'ora legale/solare
	var newdate=new Date(newtimems);
	var backdate= monthnum[newdate.getDate()-1]+"/"+ monthnum[newdate.getMonth()] +"/"+ newdate.getFullYear()
	return backdate
}

/* 
	<FUNZIONE label="AddDaysWithoutFestivity">
	<AUTORE>Piero Bargellini</AUTORE>
	<COMMENTO>
		funzione di manipolazione data che aggiunge e toglie giorni senza considerare i festivi
		entra una data ed un numero anche negativo
		esce una data formattata che e' il risultato del calcolo
	</COMMENTO>
	<PARAMETRO label="startdate" DESCRIZIONE=""/>
	<PARAMETRO label="increm" DESCRIZIONE=""/>																									
	</FUNZIONE>
*/
function AddDaysWithoutFestivity(startdate,increm)
{
	increm = new Number(increm);
	var newdata;
	for(var k=1; k<=increm; k++) // valori positivi
	{
		newdata = AddDays(startdate, k);
		if (isFestivityDate(newdata))
		{
			increm++;
		}
	}
	for(var j=-1; j>=increm; j--) // valori negativi
	{
		newdata = AddDays(startdate, j);
		if (isFestivityDate(newdata))
		{
			increm--;
		}
	}
	return newdata;
}

]]>

				
			</xalan:write>
	</xsl:template> 
		
	<xsl:template match="string/translation">
		<xsl:param name="lang"/>
		<xsl:variable name="mialang"><xsl:value-of select="@code"/></xsl:variable>
		<xsl:if test="(@language= $lang)">
			<xsl:value-of select="@text"/>
		</xsl:if>
	</xsl:template>
	
</xsl:stylesheet>


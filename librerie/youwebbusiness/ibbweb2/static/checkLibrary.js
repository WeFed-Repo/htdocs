		// Minimum year allowed
        var minYear = 1900;
        // MaximuM year allowed
        var maxYear = 2050;
        // With a two char year, if yy>yearLimit => 19yy, else 20yy
        var yearLimit = 10;
		
        // Separators allowed for the date check
        separators = new Array("/","\\","-");
 
         // Variable that stores the name of the field checked
        var fieldCheckedName;
    
	
	function checkNoSpecialChar(stringa)
	{
	 
	 var ammessi = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
	 
	 for( i_str = 0; i_str < stringa.length; i_str++ )
	 {
		if( ammessi.indexOf( stringa.charAt(i_str) ) == -1 )	{
			return false;
			}
	 }
	 
	 return true;
	}
	function checkOnlyChar(stringa)
	{
	 
	 var ammessi = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
	 
	 for( i_str = 0; i_str < stringa.length; i_str++ )
	 {
		if( ammessi.indexOf( stringa.charAt(i_str) ) == -1 )	{
			return false;
			}
	 }
	 
	 return true;
	}
	function checkNoSpecialCharWithChar(stringa)
	{
	 
	 var ammessi = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
	 
	 for( i_str = 0; i_str < stringa.length; i_str++ )
	 {
		if( ammessi.indexOf( stringa.charAt(i_str) ) == -1 )	{
			return stringa.charAt(i_str);
			}
	 }
	 
	 return null;
	}
	
	function checkOnlyNumbersWithChar(stringa)
	{
	 
	 var ammessi = "0123456789";
	 
	 for( i_str = 0; i_str < stringa.length; i_str++ )
	 {
		if( ammessi.indexOf( stringa.charAt(i_str) ) == -1 )	{
			return stringa.charAt(i_str);
			}
	 }
	 
	 return null;
	}
	
	function checkOnlyNumbers(stringa)
	{
	 
	 var ammessi = "0123456789";
	 
	 for( i_str = 0; i_str < stringa.length; i_str++ )
	 {
		if( ammessi.indexOf( stringa.charAt(i_str) ) == -1 )	{
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
    
         
		function onlyDateNumbers(evento)
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
						//occorre gestire i caratteri '/' e '-'		
						if (tasto == 8 || tasto == 9 || tasto == 47 || tasto == 45)
						{
							return true;
						}	
						if ((tasto < 48 || tasto > 57) && tasto != 13)
						{
							return false;
						}	
		
						if( tasto == 13  )//premuto invio
						{
							return true;
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
		<FUNZIONE label="today">
		<AUTORE>Marco Nazaro</AUTORE>
		<COMMENTO>
			Ritorna la data odierna nel formato gg/mm/aaaa.
		</COMMENTO>
		</FUNZIONE>
	*/
	
	function today()
	{

		d = new Date();
		giorno = d.getDate() >= 10 ? d.getDate() : '0'+d.getDate();
		mese = (d.getMonth() + 1) >= 10 ? (d.getMonth() + 1) : '0'+ (d.getMonth() + 1)
		data = giorno + '/' + mese + '/' + d.getFullYear();
		return data; 
	}

	/*
		<FUNZIONE label="giornoFuturo">
		<AUTORE>Marco Nazaro</AUTORE>
		<COMMENTO>
			Ritorna true se la data passata � maggiore della data di oggi.
			La data va nel formato gg/mm/aaaa oppure gg/mm/aa e in questo caso si arrotonda
			secondo questa politica:
						The year with 2 digits are converted with this rule:
				if yy > yearLimit => 19yy
				otherwise, 20yy	
		</COMMENTO>
		</FUNZIONE>
	*/
	function giornoFuturo(value)
	{
		oggi = today(); 
		oggiAMG = parseInt(oggi.substring(6,10) + oggi.substring(3,5) + oggi.substring(0,2), 10);
		annoInserito = value.substring(6,10);
		if (annoInserito.length == 2) 
		{
			if (parseInt(annoInserito, 10) > yearLimit)
			{
				annoInserito = "19" + annoInserito;
			}
			else
			{
			 	annoInserito = "20" + annoInserito;
			}
		}
		dataAMG = parseInt(annoInserito + value.substring(3,5) + value.substring(0,2), 10);
		
		if (dataAMG > oggiAMG) return true;
		else return false;		
	}

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

			if ((""+dd)!=sg_dd || (""+mm)!=sg_mm || (""+yyyy)!=sg_yyyy || isNaN(dd)||isNaN(mm)||isNaN(yyyy) || dd > 31 || mm > 12)
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
			return null;
		}
		if ((!isOk)||(yearDigitError))
		{
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
	Controllo se il BIC � formalmente corretto.
	Regola:
	<xs:simpleType name="BICIdentifier">
	<xs:restriction base="xs:string">
	<xs:pattern value="[A-Z]{6,6}[A-Z2-9][A-NP-Z0-9]([A-Z0-9]{3,3}){0,1}"/>
	</xs:restriction>
	</xs:simpleType>
*/

function isBicValid(bicCode)
{
	bicCode = bicCode.toUpperCase();
	var bicPattern = new RegExp(/[A-Z]{6,6}[A-Z2-9][A-NP-Z0-9]([A-Z0-9]{3,3}){0,1}/g);
	return bicPattern.test(bicCode);
	/*var bicPattern1 = new RegExp(/([A-Z]{4}[A-Z]{2}[A-Z0-9]{2}([A-Z0-9]{3})?)/g);
	var bicPattern2 = new RegExp(/([01]{1})/g);
	var bicPattern3 = new RegExp(/([O]{1})/g);
	var bicPattern4 = new RegExp(/(BIC{1})/g);
	if(bicPattern1.test(bicCode)){
		var char7 = bicCode.substring(6,7);
		var char8 = bicCode.substring(7,8);
		var branchCode = bicCode.substring(8,11);
		if(!bicPattern2.test(char7) && !bicPattern3.test(char8) && (bicCode.length == 8 ||  (bicCode.length == 11 && !bicPattern4.test(branchCode)))){
				return true;
		}
	}
	return false;
	*/
	//return (bic.match(/([a-zA-Z]{4}[a-zA-Z]{2}[a-zA-Z0-9]{2}([a-zA-Z0-9]{3})?)/gi)) != null ? true : false;
	/*
    var temp1,temp2;
    var set1= "ABCDEFGHIJKLMNOPQRSTUVWXYZ"; 
    var set2="23456789";
    var set3="ABCDEFGHIJKLMN";
    var set4="PQRSTUVWXYZ";
    var set5="0123456789";
    bic = bic.toUpperCase();
    var ok=true;
    temp1=bic.substring(0,6);
    for( i_bic = 0; i_bic < 6; i_bic++ ){
    	if( set1.indexOf(temp1.charAt(i_bic) ) == -1 )
                ok=false;
    }
    temp2=bic.substring(6,7);
   	if( set2.indexOf(temp2.charAt(0) ) == -1 )
                 ok=false;
    temp3=bic.substring(7,8);
    if((set3.indexOf(temp3.charAt(0) ) == -1)&&(set4.indexOf(temp3.charAt(0) ) == -1)&&(set4.indexOf(temp3.charAt(0) ) == -1)){
    	ok=false;
    }
    if(bic.length==11){
     temp4=bic.substring(8,11);
	     if(!(checkOnlyChar(temp4))&& !(checkOnlyNumbers(temp4)) ){
	     	ok=false;
	     }
    }
    if(ok){
    	return true;
    }else{
    	return false;
    }*/
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
    var validi, i_cf, s, set1, set2, setpari, setdisp;
    var soloLettere = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    var soloNumeri = "1234567890";
    var meseDiNascita = "ABCDEHLMPRST";
    var giorniNascitaValidi = "1234567890";
    var comunePrimoCampo = "ABCDEFGHILMZ";
    var comuneSecondoCampoPrimoChar = "1234567890LMNP";
    var comuneSecondoCampo = "1234567890LMNPQRSTUV";
    var comuneSecondoCampoPrimoChar_M = "0123LMNPQRSTUV";
    cf = cf.toUpperCase();
    
    if( cf.length != 16 ){
     	return false;
    }else
    {
	   validi = "ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
       for( i_cf = 0; i_cf < 16; i_cf++ )
           if( validi.indexOf( cf.charAt(i_cf) ) == -1 )
               return false
                   
    	/**
		 * Primi 6 caratteri solo lettere
		 */
    	for( i_cf = 0; i_cf < 6; i_cf++ ){
    		
    		if( soloLettere.indexOf( cf.charAt(i_cf) ) == -1 ){
    			return false;
    		}
    		
    	}
    	/**
    	 * caratteri dal 7 a 8 solo numeri
    	 * @param pi
    	 * @returns
    	 */
    	for( i_cf = 6; i_cf < 8; i_cf++ ){
    		if( soloNumeri.indexOf( cf.charAt(i_cf) ) == -1 ){
    			return false;
    		}
    	}
    	/**
    	 * carattere 9 mese di nascita
    	 */	
    	if( meseDiNascita.indexOf( cf.charAt(8) ) == -1 ){
			return false;
		}
    	/**
    	 * caratteri 10 e 11 mese di nascita
    	 */
    	for( i_cf = 9; i_cf < 11; i_cf++ ){
    		if( giorniNascitaValidi.indexOf( cf.charAt(i_cf) ) == -1 ){
    			return false;
    		}
    	}
    	var d1 = cf.charAt(9);
    	var d2 = cf.charAt(10);
    	if (d1=='0' && d2=='0'){
    		return false;
    	}
    	var mese = cf.charAt(8);
    	var giornoStr = cf.substring(9,11);
    	var giorno = Number(giornoStr); 
    	switch(mese){
    		case 'A':
    		case 'C':
    		case 'E':
    		case 'L':
    		case 'M':
    		case 'R':
    		case 'T':
    			if ((giorno < 1 || giorno >31) && (giorno < 41 || giorno > 71)) {
    				return false;
    			}
    			break;
    		case 'D':
    		case 'H':
    		case 'P':
    		case 'S':
    			if ((giorno < 1 || giorno >30) && (giorno < 41 || giorno > 70)) {
    				return false;
    			}
    			break;
    		case 'B':
    			if ((giorno < 1 || giorno >29) && (giorno < 41 || giorno > 69)) {
    				return false;
    			}
    			break;
    		default:
    			return false;
    		
    	}
    	/**
    	 * caratteri 12,13,14,15 Controllo comune
     	 */
    	if( comunePrimoCampo.indexOf( cf.charAt(11) ) == -1 ){
			return false;
		}
    	if (comuneSecondoCampoPrimoChar.indexOf( cf.charAt(12) ) == -1 ){
    		return false;
    	}
    	if (comuneSecondoCampo.indexOf( cf.charAt(13) ) == -1 ){
    		return false;
    	}
    	if (comuneSecondoCampo.indexOf( cf.charAt(14) ) == -1 ){
    		return false;
    	}
    	var primoSottoCampo = cf.charAt(11);
    	if (primoSottoCampo=='M') {
    		if (comuneSecondoCampoPrimoChar_M.indexOf( cf.charAt(12) ) == -1 ){
        		return false;
        	}
    	}
    	var n1 = cf.charAt(12);
    	var n2 = cf.charAt(13);
    	var n3 = cf.charAt(14);
    	if (n1=='0' && n2=='0' && n3=='0'){
    		return false;
    	}
        
        set1 = "0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ";
        set2 = "ABCDEFGHIJABCDEFGHIJKLMNOPQRSTUVWXYZ";
        setpari = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
        setdisp = "BAKPLCQDREVOSFTGUHMINJWZYX";
        s = 0;
        for( i_cf = 1; i_cf <= 13; i_cf += 2 )
           s += setpari.indexOf( set2.charAt( set1.indexOf( cf.charAt(i_cf) )));
        for ( i_cf = 0; i_cf <= 14; i_cf += 2 )
           s += setdisp.indexOf( set2.charAt( set1.indexOf( cf.charAt(i_cf) )));
        if( s%26 != cf.charCodeAt(15)-'A'.charCodeAt(0) )
            return false;
    }
 	return true;
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
    var i_pi;
    if( pi != '' )
    {
        if( pi.length != 11 )
        {
           isOK = false;

        }
        else
        {
           if(pi=="00000000000"){
	           isOK = false;
		   }
		   validi = "0123456789";
           for( i_pi = 0; i_pi < 11; i_pi++ )
           {
	           if( validi.indexOf( pi.charAt(i_pi) ) == -1 )
	           {
	            isOK = false;
	           }
           }
           if (isOK == true)
           {
               s = 0;
               for( i_pi = 0; i_pi <= 9; i_pi += 2 )
				   s += pi.charCodeAt(i_pi) - '0'.charCodeAt(0);
               for( i_pi = 1; i_pi <= 9; i_pi += 2 )
               {
	               c = 2*( pi.charCodeAt(i_pi) - '0'.charCodeAt(0) );
	               if( c > 9 )  c = c - 9;
	               s += c;
               }
               if( ( 10 - s%10 )%10 != pi.charCodeAt(10) - '0'.charCodeAt(0) )
               {
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
         return null;
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
    var i_abc;
    var returnValue = null;

    if( abicab != '' )
    {
        if( abicab.length > 5 )
        {
           isOK = false;
        }
        else
        {
           validi = "0123456789";
           for( i_abc = 0; i_abc < 11; i_abc++ )
           {
           if( validi.indexOf( abicab.charAt(i_abc) ) == -1 )
           {
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
      return null;
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
                return false;
            }
            if (maxlength==0)
                return true;
            if (!checkMin(value, minlength))
            {
                return false;
            }
            if (!checkMax(value, maxlength))
            {
                return false;
            }
            return true;
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
	   	    
			try
			{
				if (minlength==10 && maxlength==10)// in alcuni casi il conto puo' essere 10 (es. euroincassi con Spagna selezionata)
		   	    {	
		   	    	//tipiCaratteri = MSG_Err_Caratter_Num_Tail;
		   	    	validi = "0123456789";
		   	    }
		   	    
		   	    if (minlength!=10 && minlength!=11)// in alcuni casi il conto puo' essere 10 o 11 caratteri (es. euroincassi) altrimenti viene forzato a 12
		   	    	minlength = 12;
		   	    
		   	    if (maxlength!=10 && maxlength!=11)
		   	    	maxlength = 12;
		   	    
		   	    for(i_af=0; i_af<accountLength; i_af++)
	            {
	                if(validi.indexOf( value.charAt(i_af) ) == -1 )
	                {
	                    //msg2 = MSG_Caratteri_Non_Validi;
	                    check = false;
	                    
	                    //modifica caratteri
	                    value = value.replace(value.charAt(i_af), "");
	                    i_af--;
	                    accountLength = value.length;
	                }
	            }
			   	
		   	    if(value.length < minlength) //modifica lunghezza - aggiunge gli 0
		   	    {
			   	    //msg1 = minCharMsg + " " + minlength + " " + tipiCaratteri;
			   	    while(value.length < minlength)  
			   	    	value = "0" + value;
		   	    	check = false;
		   	    }
		   	    else if(value.length > maxlength) // modifica lunghezza - elimina i caratteri di troppo
		   	    {
		   	    	//msg1 = maxCharMsg + " " + maxlength + " " + tipiCaratteri;
		   	    	if (value.length > maxlength)
		   	    		value = value.substr(0, maxlength);
		   	    	check = false;
		   	    }
		   	    
		   	    if(!check)
		   	    {
		   	    	//alert(msg+msg1+msg2+msg3);
		   	    	return 'false'+value;
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
	if(iban.length > 0 && iban.length != 27)
	{
		return false;
	}
	if(iban.length == 0 || (abi.length == 0 && cab.length == 0 && account.length == 0)) 
		return true;
	
	abi_iban = iban.substring(5, 10);
	cab_iban = iban.substring(10, 15);
	account_iban = (iban.substring(15, 27)).toUpperCase();
	
	if(abi_iban == abi && cab_iban == cab && account_iban == account.toUpperCase()) 
		return true;
	else
	{
		return false;
	}
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
		case 224: e.keyCode = 97;  break; 
		case 225: e.keyCode = 97;  break;
		case 232: e.keyCode = 101; break;
		case 233: e.keyCode = 101; break;
		case 236: e.keyCode = 105; break; 
		case 237: e.keyCode = 105; break;
		case 242: e.keyCode = 111; break;
		case 243: e.keyCode = 111; break;
		case 249: e.keyCode = 117; break;
		case 250: e.keyCode = 117; break;
	}	
}

function trimToSize(stringa, maxlen)
{
	if (stringa.length > maxlen)
	{
		return stringa.substring(0,maxlen);
	}
	else
	{
		return stringa;
	}
}

function checkSyntaxDate(value)
{
	// Controls the validity of a date (gg/mm/aaaa)
	isOk=false;
	sintax_valid=true;
	msg="";
	
	var value = checkSeparator(trimString(value));
	// This block controls only if there are two separators characters
	s1=value.indexOf("/");
	// s1 and s2 are the separator positions
	if (s1!=-1)
	{
	// Retrive the position of the next separator
		s2=(s1+1)+(value.substring(s1+1)+1).indexOf("/");
		if (s2==-1 || s2==s1) 
			sintax_valid=false;
	}
	else
		sintax_valid=false;
		
	return sintax_valid;
}        

function preformatDate(value)
{	
	var currentTime = new Date();
	var currentYear = currentTime.getFullYear();
	var yearLimit = currentYear.toString().substr(2,2);
	var valueApp;
	var s1=value.indexOf("/");
	var s2=(s1+1)+(value.substring(s1+1)+1).indexOf("/");
		
    var sg_dd=value.substring(0,s1);
	var sg_mm=value.substring(s1+1,s2);
	var sg_yyyy=value.substring(s2+1);
	var sentinelDay=sg_dd.substring(0,1);
	if(sentinelDay=='0') 
		sg_dd=sg_dd.substring(1,sg_dd.length);
	var dd=parseInt(sg_dd);
	var sentinelMonth=sg_mm.substring(0,1);
	if(sentinelMonth=='0') 
		sg_mm=sg_mm.substring(1,sg_mm.length);
	var sentinelYear=sg_yyyy.substring(0,1);
	if(sentinelYear=='0') 
		sg_yyyy=sg_yyyy.substring(1,sg_yyyy.length);
	var mm=parseInt(sg_mm);
	var yyyy=parseInt(sg_yyyy);
	
	// Add the "0" string if the day is of one digit
	if ((dd+"").length==1)
		dd = "0"+dd;
					
	// Add the "0" string if the month is of one digit
	if ((mm+"").length==1)	
		mm = "0"+mm;
				
	valueApp = dd+"/"+mm+"/";
			
	if  (sg_yyyy.length==4)	{ //nop
	}
	else if (sg_yyyy.length==2 && sentinelYear=='0')  {
		if (yyyy > yearLimit)
					sg_yyyy="19"+yyyy;
				else    
					sg_yyyy="20"+yyyy;
	}
	else if ((sg_yyyy.length==2)|| (sg_yyyy.length==1 && (sentinelYear=='0')))	{
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
	}
	
	valueApp = valueApp + sg_yyyy;
	
	return valueApp;
}

function checkDateInRange(value)
{
	var yearLimit = 10;
	var valueApp;
	var s1=value.indexOf("/");
	var s2=(s1+1)+(value.substring(s1+1)+1).indexOf("/");
		
    var sg_dd=value.substring(0,s1);
	var sg_mm=value.substring(s1+1,s2);
	var sg_yyyy=value.substring(s2+1);
	
	if  (sg_yyyy.length==4)	{
		if ((yyyy<minYear)||(yyyy>maxYear))	{
							return false;
		}
	}
}

function checkValidDate(value)
{	
		
	// Controls the validity of a date (gg/mm/aaaa)
	isOk=false;
	msg="";
	
	if (!value)	{
		return value;
	}
		
	s1=value.indexOf("/");
	s2=(s1+1)+(value.substring(s1+1)+1).indexOf("/");
		
    sg_dd=value.substring(0,s1);
	sg_mm=value.substring(s1+1,s2);
	sg_yyyy=value.substring(s2+1);
	var sentinel;
	var sentinelYear;
	sentinelDay=sg_dd.substring(0,1);
	if(sentinelDay=='0') 
		sg_dd=sg_dd.substring(1,sg_dd.length);
	dd=parseInt(sg_dd);
	sentinelMonth=sg_mm.substring(0,1);
	if(sentinelMonth=='0') 
		sg_mm=sg_mm.substring(1,sg_mm.length);
	sentinelYear=sg_yyyy.substring(0,1);
	if(sentinelYear=='0') 
		sg_yyyy=sg_yyyy.substring(1,sg_yyyy.length);
	mm=parseInt(sg_mm);
	yyyy=parseInt(sg_yyyy);
	yearDigitError=false;
	if ((""+dd)!=sg_dd || (""+mm)!=sg_mm || (""+yyyy)!=sg_yyyy || isNaN(dd)||isNaN(mm)||isNaN(yyyy) || sg_yyyy.length != 4 || dd > 31 || mm > 12)	{
		sintax_error=true;
	}
	else {
		if (mm==2) {
			if ( dd>28 || 1 > dd) {
				// If the day is 29
				if(dd==29)	{
					if(yyyy%4==0) {
						if(yyyy%400==0)	{
							isOk=true;
						}
						else	{
							if(yyyy%100!=0) 
								isOk=true;
						}
					}	
					else {
						isOk=false;
					}
				}// Else error
				else	{
					isOk=false;
						}
			}
			else isOk=true;
		}
		else if ((mm==4)||(mm==6)||(mm==9)||(mm==11))	{
			if( dd>30 || 1 > dd ) 
				isOk=false;
			else 
				isOk=true;
		}
		else {
			if( dd>31 || 1 > dd ) 
				isOk=false;
			else
				isOk=true;
		}
		if (isOk)	{
         	// Add the "0" string if the day is of one digit
			if ((dd+"").length==1)
				dd = "0"+dd;
			if (mm > 12 || 1 > mm || dd>31 || 1 > dd) 
				isOk=false;
			else 
				isOk=true;
					
			// Add the "0" string if the month is of one digit
			if ((mm+"").length==1)	
				mm = "0"+mm;
			valueApp = dd+"/"+mm+"/";
			if  (sg_yyyy.length==4)	{
				if ((yyyy<minYear)||(yyyy>maxYear))	{
					isOk=false;
					//msg = "notinrange";
				}
				else	
					isOk=true;
			}
			else if (sg_yyyy.length==2 && sentinelYear=='0')  {
				if (yyyy > yearLimit)
					sg_yyyy="19"+yyyy;
				else    
					sg_yyyy="20"+yyyy;
			}
			else if ((sg_yyyy.length==2)|| (sg_yyyy.length==1 && (sentinelYear=='0')))	{
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
			}
			else {
				yearDigitError=true;
				msg="";
			}
					// The result value...
					value = valueApp + sg_yyyy;
		}
	}
	
	if ((!isOk)||(yearDigitError))
	{
		if (msg == "")
			return false;
		else 
			return true;
	}
	else
		return true;
		
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
       
var arrayDatiIban = new Array();

/*
	<FUNZIONE label="ArrayforIban">
	<AUTORE></AUTORE>
	<COMMENTO>Array con dati necessari per la funzione checkIBANfromCountry()</COMMENTO>																	
	</FUNZIONE>
*/ 
 
function ArrayforIban()
{
	arrayDatiIban[0] = new datiIban('8','AU',20);
	arrayDatiIban[1] = new datiIban('9','BE',16);
	arrayDatiIban[2] = new datiIban('275','CZ',24);
	arrayDatiIban[3] = new datiIban('21','DK',18);
	arrayDatiIban[4] = new datiIban('257','EE',20);
	arrayDatiIban[5] = new datiIban('28','FI',18);
	arrayDatiIban[6] = new datiIban('29','FR',27);
	arrayDatiIban[7] = new datiIban('94','DE',22);
	arrayDatiIban[8] = new datiIban('32','GR',27);
	arrayDatiIban[9] = new datiIban('40','IE',22);
	arrayDatiIban[10] = new datiIban('86','IT',27);
	arrayDatiIban[11] = new datiIban('258','LV',21);
	arrayDatiIban[12] = new datiIban('259','LT',20);
	arrayDatiIban[13] = new datiIban('92','LU',20);
	arrayDatiIban[14] = new datiIban('105','MT',31);
	arrayDatiIban[15] = new datiIban('48','NO',15);
	arrayDatiIban[16] = new datiIban('50','NL',18);
	arrayDatiIban[17] = new datiIban('54','PL',28);
	arrayDatiIban[18] = new datiIban('55','PT',25);
	arrayDatiIban[19] = new datiIban('31','GB',22);
	arrayDatiIban[20] = new datiIban('276','SK',24);
	arrayDatiIban[21] = new datiIban('260','SI',19);
	arrayDatiIban[22] = new datiIban('67','ES',24);
	arrayDatiIban[23] = new datiIban('68','SE',24);
	arrayDatiIban[24] = new datiIban('77','HU',28);
	arrayDatiIban[25] = new datiIban('4','AD',24);
	arrayDatiIban[26] = new datiIban('101','CY',28);
	arrayDatiIban[27] = new datiIban('102','GI',23);
	arrayDatiIban[28] = new datiIban('90','LI',21);
	arrayDatiIban[29] = new datiIban('71','CH',21);
	arrayDatiIban[30] = new datiIban('75','TN',24);
}
       

 /*
	<FUNZIONE label="checkIBANCountry">
	<AUTORE></AUTORE>
	<COMMENTO>Controlla l'ampiezza del codice e se il codice paese nell'IBAN e' uguale a "country".</COMMENTO>
	<PARAMETRO label="iban" DESCRIZIONE=""/>
	<PARAMETRO label="country" DESCRIZIONE=""/>																	
	</FUNZIONE>
*/ 
function checkIBANCountry(iban,country,message)
{	if (iban.length == 0) return true;
 	var codPaeseIban = (iban.substring(0, 2)).toUpperCase();

	var index=-1;
	for (var i=0;i< arrayDatiIban.length;i++ ) if (arrayDatiIban[i].cod_paese==country)  { index=i; break; }
	/* Nel caso non ho alcuna disposizione per quel paese non si esegue alcun controllo */
	if (index==-1) return true;
	if (isOnlyAlfaString(codPaeseIban)==false)
	{   
		return confirm(message);
	}
	return null;
}	

 /*
	<FUNZIONE label="checkIBANfromCountry">
	<AUTORE></AUTORE>
	<COMMENTO>Controlla l'ampiezza del codice e se il codice paese nell'IBAN e' uguale a "country".</COMMENTO>
	<PARAMETRO label="iban" DESCRIZIONE=""/>
	<PARAMETRO label="country" DESCRIZIONE=""/>																	
	</FUNZIONE>
*/ 
function checkIBANfromCountry(iban, country,message)
{	
	if (iban.length == 0) return true;
 	var codPaeseIban = (iban.substring(0, 2)).toUpperCase();

	var index=-1;
	for (var i=0;i< arrayDatiIban.length;i++ ) if (arrayDatiIban[i].cod_paese==country)  { index=i; break; }
	/* Nel caso non ho alcuna disposizione per quel paese non si esegue alcun controllo */
	if (index==-1) return true;

	
	/* controllo dell'iban sulla correttezza del codice paese e lunghezza (se fornito il codice paese del beneficiario)*/
	
	if (!( (country == "") && (country == null) && (country == 'NNN')))
	{
		
		 if ((arrayDatiIban[index].iban_length == iban.length)&&(arrayDatiIban[index].cod_paese_iban==codPaeseIban) )
		 {
			return true;
		 }
		else 
		{
			return confirm(message);
		}
	}
	else
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

function isSWIFTStringBundle(value) {
	if (isSWIFTString(value)) {
		return true;
	}
	return false;
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

function datiIban(cod_paese,naz_iban,n_car)
{
	this.cod_paese = cod_paese;
	this.iban_length= n_car;
	this.cod_paese_iban = naz_iban;
	
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
       {
          return false;
       }
    }
    return true;
}

function maxL4TextArea(campo,maxLength)
{
	if (campo.value.length > maxLength) {
		campo.value = campo.value.substring(0, maxLength);
		return false;
	}
	return true;
}

/*
	<FUNZIONE label="decimaliCorretti">
	<AUTORE>Marco Nazaro</AUTORE>
	<COMMENTO>Controlla che la stringa contenga un numero con due decimali.</COMMENTO>
	<PARAMETRO label="string" DESCRIZIONE=""/>																			
	</FUNZIONE>
*/
 
function decimaliCorretti(numero) 
{
	 var splitted;
 if (numero.indexOf(".")==-1)
 {
  splitted = numero.split(",");
 }
 else
 {
  splitted = numero.split(".");
  }
	if (splitted.length > 1)
	{
 		var cifreDecimali = splitted[1];
		if (cifreDecimali.length > 2)
		{
			return false;
		}
	}
	return true;
}
/*
	<FUNZIONE label="calcolaMax">
	<AUTORE></AUTORE>
	<COMMENTO>Controlla limporto massimo inseribile 99.999.999.999,99 .</COMMENTO>
	<PARAMETRO label="string" DESCRIZIONE=""/>																			
	</FUNZIONE>
*/
  function calcolaMax(importo){
     if(importo.indexOf(".")!=-1){
          var parteintera=importo.substring(0,importo.indexOf("."));
          var decimali=importo.substring(importo.indexOf(".")+1);
          if(parteintera.length<=11 && decimali.length<=2){
            return true;
          }
          else{
            return false;
          }
          
        }else{
           if(importo.length<=11){
              return true;
          }
          else{
              return false;
          }
        }
     }


/*
	<FUNZIONE label="checkDigitIBAN">
	<AUTORE>Fernando Raji</AUTORE>
	<COMMENTO>Accetta come parametro l'iban e lo valida secondo standard Teckmarket</COMMENTO>
	<PARAMETRO label="iban" DESCRIZIONE="l'iban da controllare"/>
	<RETURN value=true 	if="IBAN ok"/>																			
	<RETURN value=false	if="IBAN ko"/>																			
	</FUNZIONE>
*/ 
  function checkDigitIBAN(iban) 
  {
	  // Scambio dei primi quattro caratteri con il resto
	  // IT00XXXXXX --> XXXXXXIT00
	  s = iban.substring(4) + iban.substring(0, 4);
	  // aggiusta i caratteri sostituendo le lettere
	  var n,r=0	;
	  var breaking_error=false;
	  for (var i = 0; i<s.length; ++i ) 
	  {
		  var a = s.charCodeAt(i)	
		  if (48 <= a && a <= 57) // per cifra 0-9
		  {
			  if (i == s.length - 4 || i == s.length - 3)
			  {
				  // no numerici in nazione
				  breaking_error = true;
				  break;
			  }
			  n = a - 48;
		  }
		  else if (65 <= a && a <= 90) // per lettera A-Z
		  {
			  if (i == s.length - 2 || i == s.length - 1)
			  {
				  // no alpha in checkdigit
				  breaking_error = true;
				  break;
			  }
			  n = a - 55;
		  }
		  else
		  {
			  // carattere non ammesso
			  breaking_error = true;
			  break;
		  }
		  if (n > 9)
			  r = (100 * r + n) % 97;
		  else
			  r = (10 * r + n) % 97;

	  }
	  // Il resto della divisione deve essere 1
	  if (!breaking_error && r == 1)
	  {
		  return true;
	  }else{

		  return false;
	  }

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
		if(codPaese_iban != 'IT')
			return -1;
			
		// check digit numerico
		if(!isOnlyNumericString(cinEur_iban))
			return -1;
			
		// cin italia alfanumerico
		if(!isOnlyAlfaNumericString(cinIta_iban))
			return -1;		
			
		// abi nel range previsto
		var rangeAbiIT = abi_iban >= 1000 && abi_iban <= 10999;
		var rangeAbiSM = abi_iban >= 36000 && abi_iban <= 36999;
		var rangeAbiNuovo1 = abi_iban >= 19000 && abi_iban <= 19499;
		var rangeAbiNuovo2 = abi_iban >= 31000 && abi_iban <= 33999;
		if(!rangeAbiIT && !rangeAbiSM && !rangeAbiNuovo1 && !abiRangeNuovo2)
			return -1;
			
		// cab nel range 
		if(cab_iban == 0)
			return -1;
			
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
      
      // faccio il controllo modulo 97 cos� causa out of range javascript
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
	<FUNZIONE label="LPad">
	<AUTORE></AUTORE>
	<COMMENTO>Riempie una stringa del carattere passato (PadChar) per un numero di valori pari a PadLength
				aggiungendoli da sinistra
	</COMMENTO>
	<PARAMETRO label="string" DESCRIZIONE=""/>																			
	</FUNZIONE>
	*/    
function LPad(ContentToSize,PadLength,PadChar)
  {
     var PaddedString=ContentToSize.toString();
     var indice=0;
     indice = ContentToSize.length+1;
     for(indice; indice<=PadLength; indice++)
     {
         PaddedString=PadChar+PaddedString;
     }
     return PaddedString;
  }
     /*
	<FUNZIONE label="LPad">
	<AUTORE></AUTORE>
	<COMMENTO>Riempie una stringa del carattere passato (PadChar) per un numero di valori pari a PadLength
				aggiungendoli da destra
	</COMMENTO>

	<PARAMETRO label="string" DESCRIZIONE=""/>																			
	</FUNZIONE>
	*/    
function RPad(ContentToSize,PadLength,PadChar)
  {
     var PaddedString=ContentToSize.toString();
     var indice=0;
     indice = ContentToSize.length+1;
     for(indice; indice<=PadLength; indice++)
     {
         PaddedString=PaddedString+PadChar;
     }
     return PaddedString;
  }

function emailCheck(emailStr) {
	//var re = /^([0-9a-zA-Z]([\+\-_\.][0-9a-zA-Z]+)*)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,17}))$/;
	var re=/^([0-9a-zA-Z]([\+\-_\.][0-9a-zA-Z]+)*)+@(([0-9a-zA-Z][-\w]*[0-9a-zA-Z]*\.)+[a-zA-Z0-9]{2,17})$/;
	  return re.test(emailStr);
	  //return  /^([a-zA-Z0-9_.-])+@([a-zA-Z0-9_.-])+.([a-zA-Z])+([a-zA-Z])+/.test(emailStr);
	  //var test1 =  /^([0-9a-zA-Z]([+-_.][0-9a-zA-Z]+)*)+/.test(emailStr);
	  //alert(test1);
	  //var test2 =  /^([0-9a-zA-Z]([+-_.][0-9a-zA-Z]+)*)+@(([0-9a-zA-Z][-\w]*[0-9a-zA-Z]*.))+/.test(emailStr);
	  //alert(test2);
	  //var test3 = /^([0-9a-zA-Z]([+-_.][0-9a-zA-Z]+)*)+@(([0-9a-zA-Z][-\w]*[0-9a-zA-Z]*.)+[a-zA-Z0-9]{2,17})+/.test(emailStr);
	  //alert(test3);
	//  return /^([0-9a-zA-Z]([+-_.][0-9a-zA-Z]+)*)+@(([0-9a-zA-Z][-\w]*[0-9a-zA-Z]*\.)+[a-zA-Z0-9]{2,17})+/.test(emailStr);
//    var emailPat = /^(.+)@(.+)$/;
//    var specialChars = "\\(\\)<>@,;:\\\\\\\"\\.\\[\\]";
//    var validChars = "[^\\s" + specialChars + "]";
//    var quotedUser = "(\"[^\"]*\")";
//    var ipDomainPat = /^\[(\d{1,3})\.(\d{1,3})\.(\d{1,3})\.(\d{1,3})\]$/;
//    var atom = validChars + "+";
//    var word = "(" + atom + "|" + quotedUser + ")";
//    var userPat = new RegExp("^" + word + "(\\." + word + ")*$");
//    var domainPat = new RegExp("^" + atom + "(\\." + atom + ")*$");
//    var matchArray = emailStr.match(emailPat);
//    if (matchArray == null) {
//        return false;
//    }
//    var user = matchArray[1];
//    var domain = matchArray[2];
//    if (user.match(userPat) == null) {
//        return false;
//    }
//    var IPArray = domain.match(ipDomainPat);
//    if (IPArray != null) {
//        for (var i = 1; i <= 4; i++) {
//            if (IPArray[i] > 255) {
//                return false;
//            }
//        }
//        return true;
//    }
//    var domainArray = domain.match(domainPat);
//    if (domainArray == null) {
//        return false;
//    }
//    var atomPat = new RegExp(atom, "g");
//    var domArr = domain.match(atomPat);
//    var len = domArr.length;
//    if (domArr[domArr.length - 1].length < 2 || domArr[domArr.length - 1].length > 6) {
//        return false;
//    }
//    if (len < 2) {
//        return false;
//    }
//    return true;
}

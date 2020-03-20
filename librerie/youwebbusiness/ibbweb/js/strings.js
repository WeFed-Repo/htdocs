/*
 * String utility functions
 * from JavaScript Bible 3rd edition
 */

/*
	<FUNZIONE label="getFront">
	<AUTORE></AUTORE>
	<COMMENTO>Extract front part of string prior to searchString</COMMENTO>
	<PARAMETRO label="mainStr" DESCRIZIONE=""/>
	<PARAMETRO label="searchStr" DESCRIZIONE=""/>	
	</FUNZIONE>
*/

function getFront(mainStr, searchStr)
{
    var foundOffset = mainStr.indexOf(searchStr);
    if (foundOffset == -1)
        return null;
    return mainStr.substring(0, foundOffset);
}

/*
	<FUNZIONE label="getEnd">
	<AUTORE></AUTORE>
	<COMMENTO>Extract the back end of string after searchString</COMMENTO>
	<PARAMETRO label="mainStr" DESCRIZIONE=""/>
	<PARAMETRO label="searchStr" DESCRIZIONE=""/>	
	</FUNZIONE>
*/

function getEnd(mainStr, searchStr)
{
    var foundOffset = mainStr.indexOf(searchStr);
    if (foundOffset == -1)
        return null;
    return mainStr.substring(foundOffset + searchStr.length, mainStr.length);
}

/*
	<FUNZIONE label="insertString">
	<AUTORE></AUTORE>
	<COMMENTO>Insert insertString immediately before searchString</COMMENTO>
	<PARAMETRO label="mainStr" DESCRIZIONE=""/>
	<PARAMETRO label="searchStr" DESCRIZIONE=""/>
	<PARAMETRO label="insertStr" DESCRIZIONE=""/>	
	</FUNZIONE>
*/

function insertString(mainStr, searchStr, insertStr)
{
    return replaceString(mainStr, searchStr, insertStr + searchStr);
}

/*
	<FUNZIONE label="deleteString">
	<AUTORE></AUTORE>
	<COMMENTO>Remove deleteString</COMMENTO>
	<PARAMETRO label="mainStr" DESCRIZIONE=""/>
	<PARAMETRO label="deleteStr" DESCRIZIONE=""/>		
	</FUNZIONE>
*/

function deleteString(mainStr, deleteStr)
{
    return replaceString(mainStr, deleteStr, "");
}

/*
	<FUNZIONE label="replaceString">
	<AUTORE></AUTORE>
	<COMMENTO>Replace SearchStr with replaceStr</COMMENTO>
	<PARAMETRO label="mainStr" DESCRIZIONE=""/>
	<PARAMETRO label="searchStr" DESCRIZIONE=""/>
	<PARAMETRO label="replaceStr" DESCRIZIONE=""/>		
	</FUNZIONE>
*/

function replaceString(mainStr, searchStr, replaceStr)
{
    var front = getFront(mainStr, searchStr);
    var end = getEnd(mainStr, searchStr);
    if (front != null && end != null)
        return front + replaceStr + end;
    return null;
}

/*
	<FUNZIONE label="formatString">
	<AUTORE></AUTORE>
	<COMMENTO>Descrizione..........</COMMENTO>
	<PARAMETRO label="mainStr" DESCRIZIONE=""/>
	<PARAMETRO label="parameters" DESCRIZIONE=""/>			
	</FUNZIONE>
*/

function formatString(mainStr, parameters)
{
    var tempStr = mainStr;
    for(var i=0; i<parameters.length; i++)
    {
        tempStr = replaceString(tempStr, '{' + i + '}', parameters[i]);
    }
    return tempStr;
}

/*
	<FUNZIONE label="trim">
	<AUTORE>Piero Bargellini</AUTORE>
	<COMMENTO>Remove leading and trailing spaces and carriage returns</COMMENTO>
	<PARAMETRO label="str" DESCRIZIONE=""/>				
	</FUNZIONE>
*/

function trim(str)
{
	str = ltrim(str)
	str = rtrim(str)
	return str;
}

/*
	<FUNZIONE label="ltrim">
	<AUTORE>Piero Bargellini</AUTORE>
	<COMMENTO>Remove leading spaces and carriage returns</COMMENTO>
	<PARAMETRO label="str" DESCRIZIONE=""/>				
	</FUNZIONE>
*/

function ltrim(str)
{
	while ((str.substring(0,1) == ' ') || (str.substring(0,1) == '\n') || (str.substring(0,1) == '\r'))
	{
		str = str.substring(1,str.length);
	}
	return str;
}

/*
	<FUNZIONE label="rtrim">
	<AUTORE>Piero Bargellini</AUTORE>
	<COMMENTO>Remove trailing spaces and carriage returns</COMMENTO>
	<PARAMETRO label="str" DESCRIZIONE=""/>				
	</FUNZIONE>
*/

function rtrim(str)
{
	while ((str.substring(str.length-1,str.length) == ' ') || (str.substring(str.length-1,str.length) == '\n') || (str.substring(str.length-1,str.length) == '\r'))
	{
		str = str.substring(0,str.length-1);
	}
	return str;
}

/*
	<FUNZIONE label="isASCII">
	<AUTORE></AUTORE>
	<COMMENTO>Check for the string to be composed by ASCII chracters.</COMMENTO>
	<PARAMETRO label="str" DESCRIZIONE=""/>				
	</FUNZIONE>
*/

function isASCII(str)
{
	var len = str.length;
	var i = 0;
	var ok = true;
	var c;
	while((i < len)&&(ok))
	{
		c = str.charCodeAt(i);
		if ((c >= 0x0000) && (c <= 0x007F))
			i++;
		else
			ok = false;
	}
	return ok;
}

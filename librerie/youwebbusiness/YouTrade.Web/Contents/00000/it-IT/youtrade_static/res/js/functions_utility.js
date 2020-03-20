/** 
 * Copyright 2011 Enterprise S.p.A. (Rome, Italy).  
 * Use is subject to license terms. All rights reserved. 
 *  
 *  http://www.enterprisespa.it 
 */

	
	/*===================================================================
		Sinossi: Trim();
	===================================================================
		Descrizione: esegue la trim della stringa
	===================================================================*/
	function Trim(sText){
		
		var i = 0;
		var DocIdStr = new String(sText);
		while((DocIdStr.length > i) && ((DocIdStr.charAt(i) ==" ")||(escape(DocIdStr.charAt(i)) =="%A0")))i++;
		DocIdStr = DocIdStr.substring(i, DocIdStr.length);
		i = DocIdStr.length - 1;
		while (( i > 0) && ((DocIdStr.charAt(i) ==" ")||(escape(DocIdStr.charAt(i)) =="%A0")))i--;
		DocIdStr = DocIdStr.substring(0, i + 1);
		return DocIdStr;
	}
	
	
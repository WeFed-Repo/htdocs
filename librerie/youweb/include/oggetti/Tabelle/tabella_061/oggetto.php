<div class="col-xs-12">Lorem ipsum dolor sit amet</div>
<div id="listaDocumenti" class="table-responsive" style="display: block;">
	<table id="tableNuoviDocumenti" class="table table-striped sort" role="grid">
	<colgroup>
		<col width="5%">
		<col width="5%">
		<col width="10%">
		<col width="10%">
		<col width="35%">
		<col width="5%">
		<col width="30%">
	</colgroup>
	<thead>
	<tr class="hover">
        	<th><input type="checkbox" class="chkBoxNuovi daEscludereDalConteggio" title="Seleziona tutti" id="tutti"></th>   
        	<th>&nbsp;</th>
        	<th>Data riferimento</th>
        	<th>Data caricamento</th>
        	<th>Riferimento</th>
        	<th>Stato</th>
        	<th>Tipo</th>
    </tr>
	</thead>
	<tbody>
	    <tr class="even">
	        <td class="text-center"><a class="btn visible-xs" id="archivia">archivia</a>
			   <input type="checkbox" name="idDocumenti" value="0" id="chk0" class="chkBoxNuovi hidden-xs">
			   <span style="display:none;">0</span>
	        </td>
	        <td><a onclick="leggiPdf(this, '0', 'false', '/HT/IMAGES/nGrafica/busta_ricevuta.png'); return false;" target="_blank" href="#"><img src="/HT/IMAGES/ico_pdf2.gif" border="0" alt="Apri documento"></a></td>                
	        <td>00/00/0000</td>
	        <td>99/99/9999</td>
	        <td>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.</td>	        
	        <td class="oCenter"><img src="/HT/IMAGES/nGrafica/busta_inviata.png" border="0" id="divImgBustaClosed0" style="visibility:visible"></td>
			<td><a onclick="leggiPdf(this, '0', 'false', '/HT/IMAGES/nGrafica/busta_ricevuta.png'); return false;" class="testoSmallLink" href="#">Aenean commodo ligula eget dolor. Aenean massa.</a></td>
	    </tr>
	
	    <tr class="odd">
	        <td class="text-center"><a class="btn visible-xs" id="archivia2">archivia</a>
			   <input type="checkbox" name="idDocumenti" value="3" id="chk3" class="chkBoxNuovi hidden-xs">
			   <span style="display:none;">3</span>
	        </td>
	        <td><a onclick="leggiPdf(this, '3', 'false', '/HT/IMAGES/nGrafica/busta_ricevuta.png'); return false;" target="_blank" href="#"><img src="/HT/IMAGES/ico_pdf2.gif" border="0" alt="Apri documento"></a></td>                
	        <td>00/00/0000</td>
	        <td>99/99/9999</td>
	        <td>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.</td>	        	        
	        <td class="oCenter"><img src="/HT/IMAGES/nGrafica/busta_inviata.png" border="0" id="divImgBustaClosed3" style="visibility:visible"></td>
			<td><a onclick="leggiPdf(this, '3', 'false', '/HT/IMAGES/nGrafica/busta_ricevuta.png'); return false;" class="testoSmallLink" href="#">Aenean commodo ligula eget dolor. Aenean massa.</a></td>
	    </tr>
    
	    <tr class="even">
	        <td class="text-center"><a class="btn visible-xs" id="archivia3">archivia</a>
			   <input type="checkbox" name="idDocumenti" value="4" id="chk4" class="chkBoxNuovi hidden-xs">
			   <span style="display:none;">4</span>
	        </td>
	        <td><a onclick="leggiPdf(this, '4', 'true', '/HT/IMAGES/nGrafica/busta_ricevuta.png'); return false;" target="_blank" href="#"><img src="/HT/IMAGES/ico_pdf2.gif" border="0" alt="Apri documento"></a></td>                
	        <td>00/00/0000</td>
	        <td>99/99/9999</td>
	        <td>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.</td>
	        <td class="oCenter"><img src="/HT/IMAGES/nGrafica/busta_ricevuta.png" border="0" id="divImgBustaOpened4" style="visibility:visible"></td>
			<td><a onclick="leggiPdf(this, '4', 'true', '/HT/IMAGES/nGrafica/busta_ricevuta.png'); return false;" class="testoSmallLink" href="#">Aenean commodo ligula eget dolor. Aenean massa.</a></td>
	    </tr>
	</tbody>  
</table>
</div>
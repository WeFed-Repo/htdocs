					<div class="visible-print-block"> 
						<img src="/HT/fe/img/logo.png" title="Torna all'homepage" alt="Torna all'homepage">
						<div class="pull-right">
							  
							16/03/2017	
						</div>
					</div>
					
		

					
				










<script type="text/javascript">
<!--
window.richiestaOtpAccessoEasyDialog = function(requestPathVar) {
	var buttonX = "<button type='button' class='close' data-dismiss='modal' aria-label='Chiudi'><span aria-hidden='true'>&times;</span></button>";
	var modalDialog = "<div id='dialogAccessoEasy' class='modal fade helpDialog'>" +
						"<div class='modal-dialog'>" +
							"<div class='modal-content'>" +
								"<div class='modal-header clearfix'>" + buttonX + "</div>" +
								"<div id='dialogAccessoEasyBody' class='modal-body clearfix'></div>" +
							"</div>" +
						"</div>" +
						"</div>"
	$(modalDialog).appendTo('body');

	$.ajax({
   		method : 'GET',
   		data: { requestPath: requestPathVar},
   		url: getPathContext()+ '/accesso/richiestaOtpPopup.do',
   		success: function(data) {
     		$("#dialogAccessoEasyBody").html(data);
     		$("#dialogAccessoEasy").modal('show');
   		}
	});
}
//-->
</script>



<script type="text/javascript">
$(function() {
	// aggiungo evento click alle checkbox
	$("input[name='idDocumenti']").click(function() {
		abilitaScaricaTutti();
		abilitaArchivia();
	});
	// nasconde il caricamento
	$("#loading").hide();
	$('#tutti').on('click', function(){
		var selezionaTutti = $(this).prop('checked');
		$(document).find('.chkBoxNuovi').each(function(){
			$(this).prop('checked', selezionaTutti);
		});
		abilitaScaricaTutti();
		abilitaArchivia();
	});

	// mantengo il valore del bottone selezionato
	submitButton = null;
	$(":submit").click(function() {
		submitButton = $(this).attr("name");
	});
	
	// catturo il form submit
	$("#formPostaPersonale").submit(function(event) {
		if (submitButton!='archiviaDocumenti'
			&& scaricaTutti()==false) {
			event.preventDefault();
			return false;
		}
		return true;
	});
});

window.abilitaArchivia = function() {
	if ($('#btnArchivia').size()>0) {
		if ($("input[name='idDocumenti']:checked").size()>0) {
			$('#btnArchivia').removeClass('disabled');
			$('#btnArchivia').removeAttr('disabled');
		}
		else {
			$('#btnArchivia').addClass('disabled');
			$('#btnArchivia').attr('disabled','disabled');
		}
	}
}

window.scaricaTutti = function (){

	
	
	$(document).find('.chkBoxNuovi').each(function(){
		var checked = $(this).prop('checked');
		var daEscludere = $(this).hasClass('daEscludereDalConteggio');
		var id = $(this).attr('id');
		if (!daEscludere && checked) {
			var idDoc = $(this).next().text();
			try {
				apriBusta(''+idDoc, 'false', '/HT/fe/img/busta_ricevuta.png');
			}
			catch(err){}
		}
	});
	return true;
		

};

function leggiPdf(elem, idDoc, isLetto, nomeOpen) {



	apriBusta(idDoc, isLetto, nomeOpen);
	OpenWindow('/WEBHT/pp/leggiPdf?azione=salva&idToken='+idDoc, '_blank');
	

}

function apriBusta(idDoc, isLetto, nomeOpen) {
    if(isLetto == "false"){
		document.getElementById("divImgBustaClosed" + idDoc).src = nomeOpen;	
	}
}

// abilita il pulsante scaricaTutti
window.abilitaScaricaTutti = function() {
	var counter = 0;
	$(document).find('.chkBoxNuovi').each(function() {
		var checked = $(this).prop('checked');
		var daEscludere = $(this).hasClass('daEscludereDalConteggio');
		if (!daEscludere && checked) {
			counter = counter+1;
		}
	});
	if (counter>1) {
		$('#btnScaricaTutti').removeClass('disabled');
		$('#btnScaricaTutti').removeAttr('disabled');
	}
	else {
		$('#btnScaricaTutti').addClass('disabled');
		$('#btnScaricaTutti').attr('disabled','disabled');
	}
}
</script>
<script>
$(document).ready(function(e) {
  	if (isMobile()) {
		$("#tableNuoviDocumenti").cardBoxTable({
			colTitleIdx: 6,
			colActionIdx: 0,
			hideColIdx: 1,
			show: function() {
				$(this).find('a[id^="archivia"]').click(function() {
					$(this).next("input[type='checkbox']").prop("checked", true);
					formPostaPersonale.submit();
				});
			},
		});
  	}
});
</script>
<script type="text/javascript">
	var pagina = 0;
	function caricaNext(){
		pagina++;
		$.ajax({
			async: true,
			beforeSend:function(){
		        // show gif here, eg:
		        $("#loading").show();
		        $("#next").hide();
		    },
		    complete:function(){
		        // hide gif here, eg:
		        $("#loading").hide();
		        $("#next").show();
		        // var isError= false;
		    },
			dataType: 'html',
			url: getPathContext() + '/postaPersonale/nuoviDocumenti.do?paginazione=true&paginaRichiesta='+pagina,
			success: function(response) {
				$("table#nuovaPosta tbody").append(response);
	 		}
		});
	}
</script>

<form id="formPostaPersonale" method="post" action="/WEBHT/postaPersonale/archiviaDocumenti.do">
	<input type="hidden" value="NO" name="VALIDA" id="VALIDA">
<div class="riquadro clearfix">
	
		
		
		



<style>
.imgSrv{
	float: none;
}

</style>


	<h1>
		
				
				<div class="hidden-print hidden-xxs flag postaArrivo">&nbsp;</div>
			
			
		
		
			
		
		
			
		
			
			
				
				
 					<span>Posta in arrivo</span>
 					
				
			
			
		
	</h1>
	
	


	
	 
			
			
			
			
		
			<div class="col-xs-12">
				Trovati 5 documenti 	
			</div>
		
   

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
	        <td class="text-center"> 
               <a class="btn visible-xs" id="archivia">archivia</a>
               
			   <input type="checkbox" name="idDocumenti" value="0" id="chk0" class="chkBoxNuovi hidden-xs">
			   <span style="display:none;">0</span>
	        </td>
	        <td>
				<a onclick="leggiPdf(this, '0', 'false', '/HT/fe/img/busta_ricevuta.png'); return false;" target="_blank" href="#">
				    <img src="/HT/fe/img/ico_pdf2.gif" border="0" alt="Apri documento">
			    </a>
	        </td>                
	        <td>
	            03/02/2017
		    </td>
	        <td>
	            04/02/2017
		    </td>
	        <td>	
	          Conto corrente
	         		
	         		
	                	
	                    
	                    	00000000
&nbsp;Filiale:
	                    	
	                    		&nbsp;MILANO&nbsp;-
	                    	
	                    	&nbsp;2070
						
                    
                    
                    	&nbsp;intestato a  COGNOME NOME
                    
	            
	            
		        
	            
	            	        
	            
	            
	            
	             
	        </td>	        
	        <td class="oCenter">
	        	
					<img src="/HT/fe/img/busta_inviata.png" border="0" id="divImgBustaClosed0" style="visibility:visible">					
				
				
			</td>
			<td>
				<a onclick="leggiPdf(this, '0', 'false', '/HT/fe/img/busta_ricevuta.png'); return false;" class="testoSmallLink" href="#">
					
					
						Trasferimento tra conti - ricevuta per beneficiario
					 
					
				</a>
				
				<!-- 
				
					5,00 Euro
				
				 -->
	        </td>
	    </tr>
    
	    
	
			
		
		
		
	
	    <tr class="odd">
	        <td class="text-center"> 
               <a class="btn  visible-xs" id="archivia0">archivia</a>
               
			   <input type="checkbox" name="idDocumenti" value="1" id="chk1" class="chkBoxNuovi hidden-xs">
			   <span style="display:none;">1</span>
	        </td>
	        <td>
				<a onclick="leggiPdf(this, '1', 'false', '/HT/fe/img/busta_ricevuta.png'); return false;" target="_blank" href="#">
				    <img src="/HT/fe/img/ico_pdf2.gif" border="0" alt="Apri documento">
			    </a>
	        </td>                
	        <td>
	            03/02/2017
		    </td>
	        <td>
	            04/02/2017
		    </td>
	        <td>	
	            
	            	
	            		
	            		Conto deposito
	         			
	         			
	         			
	         		
	         		
	                	
	                    
	                    	00000000
&nbsp;Filiale:
	                    	
	                    		&nbsp;MILANO&nbsp;-
	                    	
	                    	&nbsp;2070
						
                    
                    
                    	&nbsp;intestato a  COGNOME NOME
                    
	            
	            
		        
	            
	            	        
	            
	            
	            
	             
	        </td>	        
	        <td class="oCenter">
	        	
					<img src="/HT/fe/img/busta_inviata.png" border="0" id="divImgBustaClosed1" style="visibility:visible">					
				
				
			</td>
			<td>
				<a onclick="leggiPdf(this, '1', 'false', '/HT/fe/img/busta_ricevuta.png'); return false;" class="testoSmallLink" href="#">
					
					
						Trasferimento tra conti - ricevuta per ordinante
					 
					
				</a>
				
				<!-- 
				
					5,00 Euro
				
				 -->
	        </td>
	    </tr>
    
	    
		
		
			
		
		
	
	    <tr class="even">
	        <td class="text-center"> 
               <a class="btn visible-xs" id="archivia1">archivia</a>
               
			   <input type="checkbox" name="idDocumenti" value="2" id="chk2" class="chkBoxNuovi hidden-xs">
			   <span style="display:none;">2</span>
	        </td>
	        <td>
				<a onclick="leggiPdf(this, '2', 'false', '/HT/fe/img/busta_ricevuta.png'); return false;" target="_blank" href="#">
				    <img src="/HT/fe/img/ico_pdf2.gif" border="0" alt="Apri documento">
			    </a>
	        </td>                
	        <td>
	            27/01/2017
		    </td>
	        <td>
	            28/01/2017
		    </td>
	        <td>	
	            
	            	
	            		
	            		
	         			
	         			
	         			Conto corrente
	         		
	         		
	                	
	                    
	                    	00000000
&nbsp;Filiale:
	                    	
	                    		&nbsp;MILANO&nbsp;-
	                    	
	                    	&nbsp;2070
						
                    
                    
                    	&nbsp;intestato a  COGNOME NOME
                    
	            
	            
		        
	            
	            	        
	            
	            
	            
	             
	        </td>	        
	        <td class="oCenter">
	        	
					<img src="/HT/fe/img/busta_inviata.png" border="0" id="divImgBustaClosed2" style="visibility:visible">					
				
				
			</td>
			<td>
				<a onclick="leggiPdf(this, '2', 'false', '/HT/fe/img/busta_ricevuta.png'); return false;" class="testoSmallLink" href="#">
					
					
						Trasferimento tra conti - ricevuta per ordinante
					 
					
				</a>
				
				<!-- 
				
					10,00 Euro
				
				 -->
	        </td>
	    </tr>
    
	    
		
			
		
		
		
	
	    <tr class="odd">
	        <td class="text-center"> 
               <a class="btn visible-xs" id="archivia2">archivia</a>
               
			   <input type="checkbox" name="idDocumenti" value="3" id="chk3" class="chkBoxNuovi hidden-xs">
			   <span style="display:none;">3</span>
	        </td>
	        <td>
				<a onclick="leggiPdf(this, '3', 'false', '/HT/fe/img/busta_ricevuta.png'); return false;" target="_blank" href="#">
				    <img src="/HT/fe/img/ico_pdf2.gif" border="0" alt="Apri documento">
			    </a>
	        </td>                
	        <td>
	            27/01/2017
		    </td>
	        <td>
	            28/01/2017
		    </td>
	        <td>	
	            
	            	
	            		
	            		Conto deposito
	         			
	         			
	         			
	         		
	         		
	                	
	                    
	                    	00000000
&nbsp;Filiale:
	                    	
	                    		&nbsp;MILANO&nbsp;-
	                    	
	                    	&nbsp;2070
						
                    
                    
                    	&nbsp;intestato a  COGNOME NOME
                    
	            
	            
		        
	            
	            	        
	            
	            
	            
	             
	        </td>	        
	        <td class="oCenter">
	        	
					<img src="/HT/fe/img/busta_inviata.png" border="0" id="divImgBustaClosed3" style="visibility:visible">					
				
				
			</td>
			<td>
				<a onclick="leggiPdf(this, '3', 'false', '/HT/fe/img/busta_ricevuta.png'); return false;" class="testoSmallLink" href="#">
					
					
						Trasferimento tra conti - ricevuta per beneficiario
					 
					
				</a>
				
				<!-- 
				
					10,00 Euro
				
				 -->
	        </td>
	    </tr>
    
	    
		
		
			
		
		
	
	    <tr class="even">
	        <td class="text-center"> 
               <a class="btn visible-xs" id="archivia3">archivia</a>
               
			   <input type="checkbox" name="idDocumenti" value="4" id="chk4" class="chkBoxNuovi hidden-xs">
			   <span style="display:none;">4</span>
	        </td>
	        <td>
				<a onclick="leggiPdf(this, '4', 'true', '/HT/fe/img/busta_ricevuta.png'); return false;" target="_blank" href="#">
				    <img src="/HT/fe/img/ico_pdf2.gif" border="0" alt="Apri documento">
			    </a>
	        </td>                
	        <td>
	            03/01/2017
		    </td>
	        <td>
	            04/01/2017
		    </td>
	        <td>	
	            
	            	
	            		
	            		
	         			
	         			
	         			Conto corrente
	         		
	         		
	                	
	                    
	                    	00000000
&nbsp;Filiale:
	                    	
	                    		&nbsp;MILANO&nbsp;-
	                    	
	                    	&nbsp;2070
						
                    
                    
                    	&nbsp;intestato a  COGNOME NOME
                    
	            
	            
		        
	            
	            	        
	            
	            
	            
	             
	        </td>	        
	        <td class="oCenter">
	        	
				
					<img src="/HT/fe/img/busta_ricevuta.png" border="0" id="divImgBustaOpened4" style="visibility:visible">
				
			</td>
			<td>
				<a onclick="leggiPdf(this, '4', 'true', '/HT/fe/img/busta_ricevuta.png'); return false;" class="testoSmallLink" href="#">
					
					
						Contabile di filiale
					 
					
				</a>
				
				<!-- 
				
					10.000,00 Euro
				
				 -->
	        </td>
	    </tr>
    
    
 </tbody>  
</table>
<input type="hidden" id="totChecks" name="totChecks" value="5">
<input type="hidden" id="paginaRichiesta" name="paginaRichiesta" value="0">

</div>

</div>


<div class="pull-right margin-bottom20 margin-top10">
	<input type="submit" name="scaricaTutti" value="Scarica tutti" disabled="disabled" id="btnScaricaTutti" class="btn btn-primary disabled hidden-xs" alt="Scarica tutti">
	<input type="submit" name="archiviaDocumenti" value="Archivia" disabled="disabled" id="btnArchivia" class="btn btn-primary disabled hidden-xs" alt="Archivia">
</div>

</form>